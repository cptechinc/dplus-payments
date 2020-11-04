<?php
	$db_modules = array(
		'dplusdata' => array(
			'module'   => 'DplusDatabase',
			'default'  => true
		),
		'payments' => array(
			'module'          => 'DplusPaymentsDatabase',
			'default'  => false
		)
	);

	foreach ($db_modules as $key => $connection) {
		$module = $modules->get($connection['module']);
		$module->connectPropel();

		try {
			$propel_name  = $module->dbConnectionName();
			$$propel_name = $module->propelWriteConnection();
			$$propel_name->useDebug(true);
		} catch (Exception $e) {
			$module->logError($e->getMessage());
			$session->redirect($pages->get($config->errorpage_dplusdb)->url, $http301 = false);
		}
	}