<?php
namespace Borsaco\PusheNotification\Entities;

/**
 * Class Filter
 * @package Borsaco\PusheNotification\Entities
 */
class Filter
{
	/**
	 * @var array
	 */
	private $filter;

	/**
	 * @param $operator
	 */
	public function addOperator($operator)
	{
		$this->filter['operator'][] = $operator;
	}

	/**
	 * @param $brand
	 */
	public function addBrand($brand)
	{
		$this->filter['brand'][] = $brand;
	}

	/**
	 * @param $mobileNet
	 */
	public function addMobileNet($mobileNet)
	{
		$this->filter['mobile_net'][] = $mobileNet;
	}

	/**
	 * @param $state
	 */
	public function addState($state)
	{
		$this->filter['state'][] = $state;
	}

	/**
	 * @param $instanceId
	 */
	public function setInstanceId($instanceId)
	{
		$this->filter['instance_id'] = $instanceId;
	}

	/**
	 * @param $deviceId
	 */
	public function setDeviceId($deviceId)
	{
		$this->filter['device_id'] = $deviceId;
	}

	/**
	 * @param $imei
	 */
	public function addImei($imei)
	{
		$this->filter['imei'][] = $imei;
	}

	/**
	 * @return array
	 */
	public function getFilter()
	{
		return $this->filter;
	}
}
