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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigMap挂载卷
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method array getItems() 获取Key列表配置
 * @method void setItems(array $Items) 设置Key列表配置
 */
class VolumeConfigMap extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var array Key列表配置
     */
    public $Items;

    /**
     * @param string $Name 名称
     * @param array $Items Key列表配置
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new VolumeConfigMapKeyToPath();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
