<?php
namespace Modules\Billing\Core\Http\Controllers;

use App\Controllers\Controller;
use Ivi\Http\HtmlResponse;

class HomeController extends Controller
{
    public function index(): HtmlResponse
    {
        $title = (string) (cfg(strtolower('Billing') . '.title', 'Softadastra Billing') ?: 'Softadastra Billing');
        $this->setPageTitle($title);

        $message = "Hello from BillingController!";
        $styles  = '<link rel="stylesheet" href="' . asset("assets/css/style.css") . '">';
        $scripts = '<script src="' . asset("assets/js/script.js") . '" defer></script>';

        return $this->view(strtolower('Billing') . '::home', [
            'title'   => $title,
            'message' => $message,
            'styles'  => $styles,
            'scripts' => $scripts,
        ]);
    }
}