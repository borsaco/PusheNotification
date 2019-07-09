<?php
namespace Borsaco\PusheNotification;

use Borsaco\PusheNotification\Entities;

/**
 * Class PushNotification
 * @package Borsaco\PusheNotification
 */
class PushNotification
{
	/**
	 * @var string
	 */
	private $url = 'https://panel.pushe.co/api/v1/notifications/';

	/**
	 * @var string
	 */
	private $token;

	/**
	 * @var mixed
	 */
	private $content;

	/**
	 * PushNotification constructor.
	 *
	 * @param $token
	 */
	public function __construct($token)
	{
		$this->token = $token;
	}

	/**
	 * @param $customContent
	 */
	public function setCustomContent($customContent)
	{
		$this->content['custom_content'] = (object) $customContent;
	}

	/**
	 * @param $applications
	 */
	public function addApplication($applications): void
	{
		$this->content['applications'][] = $applications;
	}

	/**
	 * @param Entities\Notification $notification
	 */
	public function setNotification(Entities\Notification $notification) : void
	{
		$this->content['notification'] = $notification->getNotification();
	}

	/**
	 * @param Entities\Data $data
	 */
	public function setData(Entities\Data $data) : void
	{
		$this->content['data'] = $data->getData();
	}

	/**
	 * @param Entities\Filter $filter
	 */
	public function setFilter(Entities\Filter $filter)
	{
		$this->content['filter'] = $filter->getFilter();
	}

	/**
	 * @param $topic
	 */
	public function addTopic($topic)
	{
		$this->content['topics'][] = $topic;
	}

	/**
	 * @param bool $unique
	 */
	public function setUnique(bool $unique)
	{
		$this->content['unique'] = $unique;
	}

	/**
	 * @param $datetime
	 */
	public function setEta($datetime)
	{
		$this->content['eta'] = $datetime;
	}

	/**
	 * @return mixed
	 */
	public function send()
	{
		return json_decode($this->execute($this->content), JSON_UNESCAPED_UNICODE);
	}

	/**
	 * @param $content
	 *
	 * @return mixed
	 */
	public function sendRaw($content)
	{
		return json_decode($this->execute($content), JSON_UNESCAPED_UNICODE);
	}

	/**
	 * @param $content
	 *
	 * @return mixed|string
	 */
	private function execute($content)
	{
		$ch = curl_init();

		curl_setopt($ch, CURLOPT_URL, $this->url);
		curl_setopt($ch, CURLOPT_HTTPHEADER, ['Authorization: Token '.$this->token, 'Content-Type: application/json', 'Accept: application/json']);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode((object) $content));

		curl_setopt($ch, CURLOPT_POST, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$result = curl_exec($ch);

		if(!$result)
			return curl_error( $ch );

		return $result;

	}
}
