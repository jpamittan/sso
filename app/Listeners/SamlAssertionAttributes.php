<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use LightSaml\ClaimTypes;
use LightSaml\Model\Assertion\Attribute;
use CodeGreenCreative\SamlIdp\Events\Assertion;

class SamlAssertionAttributes
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  object  $event
     * @return void
     */
    public function handle($event)
    {
        $event->attribute_statement
            ->addAttribute(new Attribute(ClaimTypes::service_level, "Prime8"))
            ->addAttribute(new Attribute(ClaimTypes::policy_number, auth()->user()->policy_number))
            ->addAttribute(new Attribute(ClaimTypes::client_name, auth()->user()->client_name))
            ->addAttribute(new Attribute(ClaimTypes::first_name, auth()->user()->first_name))
            ->addAttribute(new Attribute(ClaimTypes::last_name, auth()->user()->last_name))
            ->addAttribute(new Attribute(ClaimTypes::email, auth()->user()->email));
    }
}
