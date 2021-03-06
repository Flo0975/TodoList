<?php

class HomeController extends BaseController {


	public function getIndex()
	{

		$items = Auth::user()->items;
		return View::make('home', array(
			'items'=> $items
			));
	}
	public function postIndex() {

		$id = Input::get('id');
		$userId = Auth::user()->id;
		$item = Item::findOrFail($id);
		if ($item->owner_id == $userId) {
		$item->mark();
		}
		return Redirect::route('home');
	}

	public function getCredits() {
		return View::make('credits');
	}
	public function getNew() {
		return View::make('new');


	}
	public function postNew() {
		$rules = array('name' => 'required|min:3|max:25');
		$validator = Validator::make(Input::all(), $rules);

		if ($validator->fails()) {
			return Redirect::route('new')->withErrors($validator);
		}
		$item = new Item;
		$item->name = Input::get('name');
		$item->owner_id = Auth::user()->id;
		$item->save();

		return Redirect::route('home');
	}

	public function getdelete(Item $task) {
		$task->delete();
		return Redirect::route('home');

	}
}
