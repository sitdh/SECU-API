<?php

namespace App\Events;

use App;
use App\Events\Event;
use Illuminate\Queue\SerializesModels;

class RegistrationFinished extends Event
{
    use SerializesModels;

	public $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}
}
