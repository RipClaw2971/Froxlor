<?php

/**
 * This file is part of the Froxlor project.
 * Copyright (c) 2010 the Froxlor Team (see authors).
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, you can also view it online at
 * https://files.froxlor.org/misc/COPYING.txt
 *
 * @copyright  the authors
 * @author     Froxlor team <team@froxlor.org>
 * @license    https://files.froxlor.org/misc/COPYING.txt GPLv2
 */

use Froxlor\UI\Listing;

return [
	'mailtpl_list' => [
		'title' => lng('admin.templates.templates'),
		'icon' => 'fa-solid fa-envelope',
		'self_overview' => ['section' => 'templates', 'page' => 'email'],
		'columns' => [
			'language' => [
				'label' => lng('login.language'),
				'field' => 'language'
			],
			'template' => [
				'label' => lng('admin.templates.action'),
				'field' => 'template'
			],
		],
		'visible_columns' => Listing::getVisibleColumnsForListing('mailtpl_list', [
			'language',
			'template'
		]),
		'actions' => [
			'edit' => [
				'icon' => 'fa fa-edit',
				'title' => lng('panel.edit'),
				'href' => [
					'section' => 'templates',
					'page' => $page,
					'action' => 'edit',
					'subjectid' => ':subjectid',
					'mailbodyid' => ':mailbodyid'
				],
			],
			'delete' => [
				'icon' => 'fa fa-trash',
				'title' => lng('panel.delete'),
				'class' => 'btn-danger',
				'href' => [
					'section' => 'templates',
					'page' => $page,
					'action' => 'delete',
					'subjectid' => ':subjectid',
					'mailbodyid' => ':mailbodyid'
				],
			],
		],
	]
];
