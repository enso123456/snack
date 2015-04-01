<?php namespace Directory\Facades;
 
use Illuminate\Support\Facades\Facade;
 
class Directory extends Facade {
 
  /**
   * Get the registered name of the component.
   *
   * @return string
   */
  protected static function getFacadeAccessor() { return 'Directory'; }
 
}