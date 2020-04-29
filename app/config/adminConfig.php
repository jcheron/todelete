<?php
return array(
	"devtools-path"=>"Ubiquity",
	"info"=>array(),
	"display-cache-types"=>array(
			"controllers",
			"models"
			),
	"maintenance"=>array(
			"on"=>false,
			"modes"=>array(
					"maintenance"=>array(
							"excluded"=>array(
									"urls"=>array(
											"admin",
											"Admin"
											),
									"ports"=>array(
											8080,
											8090
											),
									"hosts"=>array(
											"127.0.0.1"
											)
									),
							"controller"=>"\\controllers\\MaintenanceController",
							"action"=>"index",
							"title"=>"Maintenance mode",
							"icon"=>"recycle",
							"message"=>"Our application is currently undergoing sheduled maintenance.<br>Thank you for your understanding."
							)
					)
			),
	"part1"=>array(
			"routes",
			"controllers",
			"cache",
			"rest",
			"config",
			"models"
			),
	"part2"=>array(
			"composer",
			"git",
			"seo",
			"logs"
			),
	"git-macros"=>array(
			"Status"=>"git status",
			"commit & push"=>"git+add+.%0Agit+commit+-m+%22message%22%0Agit+pull%0A",
			"checkout"=>"git checkout "
			)
	);