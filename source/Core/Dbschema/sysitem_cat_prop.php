<?php
return array(
	'columns' => array(
            'id' => array(
                        'lable'=>'主键',
                        'pk' => true,
                        'auto_increment' => true,
                        'type' => 'bigint',
                        'length'=>10,
                        'width' => '60',
                        'extra' =>'not null auto_increment',
                    ),
            'cat_id' => array(
                        'lable'=>'分类id',
                        'type' => 'varchar',
                        'length'=>10,
                        'width' => '30',
                    ),
            'prop_id' => array(
                        'lable'=>'属性ID',
                        'type' => 'int',
                        'length'=>10,
                        'width' => '30',
                    ),
        ),
);
