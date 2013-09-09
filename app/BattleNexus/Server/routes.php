<?php

Route::resource('server', 'BattleNexus\Server\Controllers\ServerController', ['only' => ['index', 'show']]);