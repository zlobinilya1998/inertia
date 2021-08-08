use Inertia\Inertia;

class EventsController extends Controller
{
    public function show(Event $event)
    {
        return Inertia::render('Index', [
            'event' => $event->only('id', 'title', 'start_date', 'description'),
        ]);
    }
}
