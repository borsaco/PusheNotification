<?php
namespace Borsaco\PusheNotification\Entities;

use Borsaco\PusheNotification\Entities\Button;

/**
 * Class Notification
 * @package Borsaco\PusheNotification\Entities
 */
class Notification
{
	/**
	 * @var array
	 */
	private $notification;

	/**
	 * @param $title
	 */
	public function setTitle($title) : void
	{
		$this->notification['title'] = $title;
	}

	/**
	 * @param $content
	 */
	public function setContent($content) : void
	{
		$this->notification['content'] = $content;
	}

	/**
	 * @param $big_title
	 */
	public function setBigTitle($big_title) : void
	{
		$this->notification['big_title'] = $big_title;
	}

	/**
	 * @param $big_content
	 */
	public function setBigContent($big_content) : void
	{
		$this->notification['big_content'] = $big_content;
	}

	/**
	 * @param $image_url
	 */
	public function setImage($image_url) : void
	{
		$this->notification['image'] = $image_url;
	}

	/**
	 * @param $icon_url
	 */
	public function setIcon($icon_url) : void
	{
		$this->notification['icon'] = $icon_url;
	}

	/**
	 * @param $ticker
	 */
	public function setTicker($ticker) : void
	{
		$this->notification['ticker'] = $ticker;
	}

	/**
	 * @param $icon
	 */
	public function setNotificationIcon($icon) : void
	{
		$this->notification['notif_icon'] = $icon;
	}

	/**
	 * @param bool $wakeScreen
	 */
	public function setWakeScreen(bool $wakeScreen) : void
	{
		$this->notification['wake_screen'] = $wakeScreen;
	}

	/**
	 * @param $soundUrl
	 */
	public function setSoundUrl($soundUrl) : void
	{
		$this->notification['sound_url'] = $soundUrl;
	}

	/**
	 * @param bool $visibility
	 */
	public function setVisibility(bool $visibility) : void
	{
		$this->notification['visibility'] = $visibility;
	}

	/**
	 * @param $ledColor
	 */
	public function setLedColor($ledColor) : void
	{
		$this->notification['led_color'] = $ledColor;
	}

	/**
	 * @param bool $showApp
	 */
	public function setShowApp(bool $showApp) : void
	{
		$this->notification['show_app'] = $showApp;
	}

	/**
	 * @param $time
	 */
	public function setLedOn($time) : void
	{
		$this->notification['led_on'] = $time;
	}

	/**
	 * @param $time
	 */
	public function setLedOff($time) : void
	{
		$this->notification['led_off'] = $time;
	}

	/**
	 * @param $url
	 * @param $actionType
	 */
	public function setAction($url, $actionType) : void
	{
		$this->notification['action'] = ['url' => $url, 'action_type' => $actionType];
	}

	/**
	 * @param \PusheNotification\Entities\Button $button
	 */
	public function addButton(Button $button)
	{
		$this->notification['buttons'][] = $button->getButton();
	}

	/**
	 * @return array
	 */
	public function getNotification()
	{
		return $this->notification;
	}
}
