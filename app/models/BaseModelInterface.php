<?php

interface BaseModelInterface
{
	/**
	 * Saves the model
	 *
	 * @return void
	 */
	public function save();

	/**
	 * Validates the models fields
	 *
	 * @return bool
	 */
	public function validate();

	/**
	 * Returns the errors encountered by the validate method
	 *
	 * @return array
	 */
	public function getErrors();

	/**
	 * Fills the models with an array of attributes
	 *
	 * @param array $attributes
	 * @return void
	 */
	public function fill(array $attributes);
}