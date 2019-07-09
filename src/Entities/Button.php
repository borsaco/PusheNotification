<?php
namespace Borsaco\PusheNotification\Entities;

/**
 * Class Button
 * @package Borsaco\PusheNotification\Entities
 */
class Button
{
	/**
	 * @var array
	 */
	private $button;

	/**
	 * @param $icon
	 */
	public function setIcon($icon) : void
	{
		$this->button['btn_icon'] = $icon;
	}

	/**
	 * @param int $order
	 */
	public function setOrder(int $order) : void
	{
		$this->button['btn_order'] = $order;
		$this->button['btn_id'] = $order;
	}

	/**
	 * @param $content
	 */
	public function setContent($content) : void
	{
		$this->button['btn_content'] = $content;
	}

	/**
	 * @param $url
	 * @param $actionType
	 */
	public function setAction($url, $actionType) : void
	{
		$this->button['btn_action'] = ['url' => $url, 'action_type' => $actionType];
	}

	/**
	 * @return mixed
	 */
	public function getButton()
	{
		return $this->button;
	}
}
