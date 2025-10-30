<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设备类型列表
 *
 * @method array getSet() 获取设备类型列表
 * @method void setSet(array $Set) 设置设备类型列表
 */
class DeviceTypeSet extends AbstractModel
{
    /**
     * @var array 设备类型列表
     */
    public $Set;

    /**
     * @param array $Set 设备类型列表
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
        if (array_key_exists("Set",$param) and $param["Set"] !== null) {
            $this->Set = [];
            foreach ($param["Set"] as $key => $value){
                $obj = new DeviceType();
                $obj->deserialize($value);
                array_push($this->Set, $obj);
            }
        }
    }
}
