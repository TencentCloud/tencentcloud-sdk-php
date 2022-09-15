<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Cii\V20210408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 位置信息
 *
 * @method array getPoints() 获取位置信息
 * @method void setPoints(array $Points) 设置位置信息
 */
class Location extends AbstractModel
{
    /**
     * @var array 位置信息
     */
    public $Points;

    /**
     * @param array $Points 位置信息
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Points",$param) and $param["Points"] !== null) {
            $this->Points = [];
            foreach ($param["Points"] as $key => $value){
                $obj = new Point();
                $obj->deserialize($value);
                array_push($this->Points, $obj);
            }
        }
    }
}
