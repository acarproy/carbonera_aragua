<?php
return [
	'title_page' => [
		'index'  => 'Users',
		'create' => 'Create User',
		'update' => 'Update User'
	],
    'show' => [
		'id'           => 'Id',
		'name'         => 'Name',
		'email'        => 'Email',
		'username'     => 'Username',
		'status_title' => 'Status',
        'status' => [
			'enable'  => 'Enable',
			'disable' => 'Disable'
        ],
		'actions' => 'Actions',
		'edit'    => 'Edit',
		'delete'  => 'Delete'
    ],
    'form' => [
        'name' => [
			'title'       => 'Name:',
			'placeholder' => 'Enter a Name'
        ],
        'email' => [
			'title'       => 'Email:',
			'placeholder' => 'Enter an Email'
        ],
        'username' => [
			'title'       => 'Username:',
			'placeholder' => 'Enter an Username'
        ],
        'avatar' => 'Avatar:',
        'remove_avatar' => 'Remove',
        'phone' => [
			'title'       => 'Phone:',
			'placeholder' => 'Enter a Phone'
        ],
        'password' => [
			'title'       => 'Password:',
			'placeholder' => 'Enter a Password'
        ],
		'status'               => 'Status:',
		'assign_roles_section' => 'Assign Roles Section',
		'submit'               => 'Submit',
		'create_confirm'       => 'User successfully added!',
		'update_confirm'       => 'User successfully updated!',
		'delete_confirm'       => 'User successfully deleted!'
    ]
];
