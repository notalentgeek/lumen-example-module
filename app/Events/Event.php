<?php

namespace SIRCLO\ExampleModule\Events;

use Illuminate\Queue\SerializesModels;

abstract class Event
{
    use SerializesModels;
}
