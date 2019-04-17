<?php 

namespace Observers;


interface IObserver

{

    public function handle(string $comment);

}