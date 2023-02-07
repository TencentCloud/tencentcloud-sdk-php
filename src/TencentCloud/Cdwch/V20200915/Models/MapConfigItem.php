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
namespace TencentCloud\Cdwch\V20200915\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kv配置，多层级item
 *
 * @method string getConfKey() 获取key
 * @method void setConfKey(string $ConfKey) 设置key
 * @method array getItems() 获取列表
 * @method void setItems(array $Items) 设置列表
 */
class MapConfigItem extends AbstractModel
{
    /**
     * @var string key
     */
    public $ConfKey;

    /**
     * @var array 列表
     */
    public $Items;

    /**
     * @param string $ConfKey key
     * @param array $Items 列表
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
        if (array_key_exists("ConfKey",$param) and $param["ConfKey"] !== null) {
            $this->ConfKey = $param["ConfKey"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new InstanceConfigInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
