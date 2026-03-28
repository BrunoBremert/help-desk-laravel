namespace App\Http\Controllers;

use App\Models\Ticket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TicketController extends Controller
{
    public function index()
    {
        // Busca apenas os tickets do usuário logado, ordenando pelos mais recentes
        $tickets = Ticket::where('user_id', Auth::id())
                         ->orderBy('created_at', 'desc')
                         ->get();

        return view('dashboard', compact('tickets'));
    }
}