<?php

require_once("./_include/permissions.php");
require_once("./_include/Summary.php");
require_once "_include/QxDirectory.php";

function do_list_action(Action $action)
{
    _debug("do_list_action($action->directory)");

    $qxdir = new QxDirectory($action->directory);
    $files = $qxdir->read();
    $totals = new Summary();
    foreach ($files as $file)
        $totals->add($file->fullpath);

    do_list_show($files, $totals);
}

function do_list_show($files, $totals)
{
	QxSmarty::assign('files', $files);
	QxSmarty::assign('totals', $totals);
	QxSmarty::assign('buttons', _get_buttons(".."));
    QxSmarty::display('list');
}

function _get_buttons ($dir_up)
{
	$buttons = array
	(
		array
		(
			'id' => 'up',
			'link' => new QxLink("list", $dir_up),
			'enabled' => true,
			'alt' => $GLOBALS["messages"]["uplink"]
		),
		array
		(
			'id' => 'home',
			'link' => new QxLink("list"),
			'enabled' => true,
			'alt' => $GLOBALS["messages"]["homelink"]
		),
		array
		(
			'id' => 'reload',
			'link' => 'javascript:location.reload()',
			'enabled' => true,
			'alt' => $GLOBALS["messages"]["reloadlink"]
		),
		array
		(
			'id' => 'search',
			'link' => new QxLink('search', $dir),
			'enabled' => true,
			'alt' => $GLOBALS["messages"]["searchlink"]
		),
		array ( 'id' => "separator" ),
		array
		(
			'id' => 'copy',
			"link" => "javascript:Copy();",
			'alt' => $GLOBALS["messages"]["copylink"],
			'enabled' => permissions_grant_all($dir, NULL, array("create", "read"))
		),
		array
		(
			'id' => 'move',
		 	'enabled' => permissions_grant($dir, NULL, "change"),
			'link' => "javascript:Move();",
			'alt' => $GLOBALS["messages"]["movelink"]
		),
		array
		(
			'id' => 'delete',
		 	'enabled' => permissions_grant($dir, NULL, "delete"),
			'link' => 'javascript:Delete();',
			'alt' => $GLOBALS["messages"]["dellink"],
		),
		array
		(
			'id' => 'upload',
		 	'enabled' => permissions_grant($dir, NULL, "create") && get_cfg_var("file_uploads"),
			'link' => new QxLink("upload", $dir),
			"alt" => $GLOBALS["messages"]["uploadlink"],
		),
		array
		(
			'id' => 'archive',
			'link' => "javascript:Archive();",
			'alt' => $GLOBALS["messages"]["comprlink"],
			'enabled' => permissions_grant_all($dir, NULL, array("create", "read"))
				&& ($GLOBALS["zip"] || $GLOBALS["tar"] || $GLOBALS["tgz"])
		)
	);


	// ADMIN & LOGOUT
	array_push($buttons,
			array ( 'id' => 'separator' ));
	array_push($buttons,
			array
			(
			 	'id' => 'admin',
				'link' => new QxLink("admin", $dir),
				"alt" => $GLOBALS["messages"]["adminlink"],
				'enabled' => permissions_grant(NULL, NULL, "admin")
						|| permissions_grant(NULL, NULL, "password"),
			));
	array_push($buttons,
			array
			(
			 	'id' => 'logout',
				'link' => new QxLink("logout", $dir),
				"alt" => $GLOBALS["messages"]["logoutlink"],
                // FIXME determine if user is logged in (session)
				'enabled' => false,
			));

	// Create File / Dir
	if (permissions_grant($dir, NULL, "create"))
	{
		array_push($buttons,
				array
				(
				 	'id' => 'createdir',
					'link' => new QxLink("mkitem", $dir),
					"alt" => $GLOBALS["messages"]["createfile"],
					'enabled' => true,
				));
		array_push($buttons,
				array
				(
				 	'id' => 'createfile',
					'link' => new QxLink("mkitem", $dir),
					"alt" => $GLOBALS["messages"]["createdir"],
					'enabled' => true,
				));
	}

	return $buttons;
}
?>
