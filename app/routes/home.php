<?php

$app->get('/', $authenticated(), function() use($app) {

	echo "Inicio";
});
