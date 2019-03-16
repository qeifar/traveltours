<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Repositories\EventRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;
use DB;
use App\Models\Event;
class EventController extends AppBaseController
{
    /** @var  EventRepository */
    private $eventRepository;

    public function __construct(EventRepository $eventRepo)
    {
        $this->eventRepository = $eventRepo;
    }

    /**
     * Display a listing of the Event.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->eventRepository->pushCriteria(new RequestCriteria($request));
        $events = $this->eventRepository->all();

        return view('events.index')
            ->with('events', $events);
    }

    /**
     * Show the form for creating a new Event.
     *
     * @return Response
     */
    public function create()
    {
        return view('events.create');
    }

    /**
     * Show the form for creating a new Event.
     *
     * @return Response
     */
    public function eventdata()
    {
        // $parlimens=DB::table("parlimens")->find($id);
        // $events = Event::all();
                    // ->where("parlimen_code",$parlimens->parlimen_code)
                    // ->pluck("title","id")
        $events = Event::get();
        $event_list = [];

        foreach($events as $key => $event) {
            // {title: $event->title, 
            //     start: $event->start_date, end: $event->end_date,
            // url:'events/' . $event->event_name . ' '};
            $event_list[] = $this->changeData($event->id,$event->title,date($event->start_date),date($event->end_date));

        }
        // $calendar_details = Calendar::addEvents($event_list); 



                    
        return json_encode($event_list,JSON_UNESCAPED_SLASHES);
    }
    /**
     * Store a newly created Event in storage.
     *
     * @param CreateEventRequest $request
     *
     * @return Response
     */

     public function changeData($id, $title, $start, $end){
        $arr = array('title' => $title, 'start' => $start, 'end' => $end, 
        
        'url' => "events/$id",
    
        'backgroundColor'=> '#f56954', 
        'borderColor'    =>'#f56954' 
    
    
    
    
    );
        // '<a href="events/' . $event->event_name . '">View Event</a>'
        // $json ={title: $title, 
        //          start: $start, end: $end,
        //      url:'events/' . $event->event_name . ' '};

        return $arr;
     }




    public function store(CreateEventRequest $request)
    {
        $input = $request->all();

        $event = $this->eventRepository->create($input);

        Flash::success('Event saved successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Display the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        return view('events.show')->with('event', $event);
    }

    /**
     * Show the form for editing the specified Event.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        return view('events.edit')->with('event', $event);
    }

    /**
     * Update the specified Event in storage.
     *
     * @param  int              $id
     * @param UpdateEventRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventRequest $request)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $event = $this->eventRepository->update($request->all(), $id);

        Flash::success('Event updated successfully.');

        return redirect(route('events.index'));
    }

    /**
     * Remove the specified Event from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $event = $this->eventRepository->findWithoutFail($id);

        if (empty($event)) {
            Flash::error('Event not found');

            return redirect(route('events.index'));
        }

        $this->eventRepository->delete($id);

        Flash::success('Event deleted successfully.');

        return redirect(route('events.index'));
    }
}