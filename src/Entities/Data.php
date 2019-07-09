<?php
namespace Borsaco\PusheNotification\Entities;

/**
 * Class Data
 * @package Borsaco\PusheNotification\Entities
 */
class Data
{
	/**
	 * @var array
	 */
	private $data;

	/**
	 * @param $delayWhileIdle
	 */
	public function setDelayWhileIdle($delayWhileIdle)
	{
		$this->data['delay_while_idle'] = $delayWhileIdle;
	}

	/**
	 * @param $collapseKey
	 */
	public function setCollapseKey($collapseKey)
	{
		$this->data['collapse_key'] = $collapseKey;
	}

	/**
	 * @param $timeToLive
	 */
	public function setTimeToLive($timeToLive)
	{
		$this->data['time_to_live'] = $timeToLive;
	}

	/**
	 * @return array
	 */
	public function getData()
	{
		return $this->data;
	}
}
