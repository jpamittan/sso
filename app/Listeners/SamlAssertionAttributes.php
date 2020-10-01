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
            ->addAttribute(new Attribute(ClaimTypes::SERVICE_LEVEL, "Prime8"))
            ->addAttribute(new Attribute(ClaimTypes::POLICY_NUMBER, auth()->user()->policy_number))
            ->addAttribute(new Attribute(ClaimTypes::CLIENT_NAME, auth()->user()->client_name))
            ->addAttribute(new Attribute(ClaimTypes::FIRST_NAME, auth()->user()->first_name))
            ->addAttribute(new Attribute(ClaimTypes::LAST_NAME, auth()->user()->last_name));
    }
}
