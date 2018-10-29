<?php
// Copyright (C) <2015>  <it-novum GmbH>
//
// This file is dual licensed
//
// 1.
//	This program is free software: you can redistribute it and/or modify
//	it under the terms of the GNU General Public License as published by
//	the Free Software Foundation, version 3 of the License.
//
//	This program is distributed in the hope that it will be useful,
//	but WITHOUT ANY WARRANTY; without even the implied warranty of
//	MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//	GNU General Public License for more details.
//
//	You should have received a copy of the GNU General Public License
//	along with this program.  If not, see <http://www.gnu.org/licenses/>.
//

// 2.
//	If you purchased an openITCOCKPIT Enterprise Edition you can use this file
//	under the terms of the openITCOCKPIT Enterprise Edition license agreement.
//	License agreement and license key will be shipped with the order
//	confirmation.

class Mapitem extends MapModuleAppModel {

    public $belongsTo = [
        'Map' => [
            'className' => 'MapModule.Map',
            'dependent' => true,
        ],
    ];


    public $validate = [
        'iconset'         => [
            'notBlank' => [
                'rule'     => 'notBlank',
                'message'  => 'Please select an iconset',
                'required' => true,
            ],
        ],
        'map_id'          => [
            'notBlank' => [
                'rule'     => 'notBlank',
                'message'  => 'No Map selected',
                'required' => true,
            ],
            'numeric'  => [
                'rule'    => 'numeric',
                'message' => 'No Map selected',
            ],
            'notZero'  => [
                'rule'     => ['comparison', '>', 0],
                'message'  => 'No Map selected',
                'required' => true,
            ],
        ],
        'object_id'       => [
            'notBlank' => [
                'rule'     => 'notBlank',
                'message'  => 'This field cannot be left blank.',
                'required' => true,
            ],
            'numeric'  => [
                'rule'    => 'numeric',
                'message' => 'This field needs to be numeric.',
            ],
            'notZero'  => [
                'rule'     => ['comparison', '>', 0],
                'message'  => 'This field needs to be > 0',
                'required' => true,
            ],
        ],
        'x'               => [
            'notBlank' => [
                'rule'     => 'notBlank',
                'message'  => 'This field cannot be left blank.',
                'required' => true,
            ],
            'numeric'  => [
                'rule'    => 'numeric',
                'message' => 'This field needs to be numeric.',
            ],
            'notZero'  => [
                'rule'     => ['comparison', '>', 0],
                'message'  => 'This field needs to be > 0',
                'required' => true,
            ],
        ],
        'y'               => [
            'notBlank' => [
                'rule'     => 'notBlank',
                'message'  => 'This field cannot be left blank.',
                'required' => true,
            ],
            'numeric'  => [
                'rule'    => 'numeric',
                'message' => 'This field needs to be numeric.',
            ],
            'notZero'  => [
                'rule'     => ['comparison', '>', 0],
                'message'  => 'This field needs to be > 0',
                'required' => true,
            ],
        ],
        'z_index'         => [
            'notBlank' => [
                'rule'     => 'notBlank',
                'message'  => 'This field cannot be left blank.',
                'required' => true,
            ],
            'numeric'  => [
                'rule'    => 'numeric',
                'message' => 'This field needs to be numeric.',
            ]
        ],
        'show_label'      => [
            'numeric' => [
                'rule'    => 'numeric',
                'message' => 'This field needs to be numeric.',
            ]
        ],
        'label_possition' => [
            'numeric' => [
                'rule'    => 'numeric',
                'message' => 'This field needs to be numeric.',
            ]
        ],
        'type'            => [
            'notBlank'       => [
                'rule'     => 'notBlank',
                'message'  => 'This field cannot be left blank.',
                'required' => true,
            ],
            'valObjectTypes' => [
                'rule'    => ['valObjectTypes'],
                'message' => 'Unsupported object type',
            ],

        ],
    ];

    public function valObjectTypes($data) {
        if (isset($data['type'])) {
            return in_array($data['type'], ['host', 'service', 'hostgroup', 'servicegroup', 'map'], true);
        }
        return false;
    }
}
