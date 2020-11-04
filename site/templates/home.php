<?php
$ordn = $input->get->text('ordn');
$paym = $modules->get('Payments');
$paym->process($ordn);
echo $paym->response->toJson();
