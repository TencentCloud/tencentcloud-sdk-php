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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列表分区
 *
 * @method string getName() 获取分区名
 * @method void setName(string $Name) 设置分区名
 * @method array getList() 获取分区列表
 * @method void setList(array $List) 设置分区列表
 * @method array getProperties() 获取属性
 * @method void setProperties(array $Properties) 设置属性
 */
class ListPartition extends AbstractModel
{
    /**
     * @var string 分区名
     */
    public $Name;

    /**
     * @var array 分区列表
     */
    public $List;

    /**
     * @var array 属性
     */
    public $Properties;

    /**
     * @param string $Name 分区名
     * @param array $List 分区列表
     * @param array $Properties 属性
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

        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new Literal();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = [];
            foreach ($param["Properties"] as $key => $value){
                $obj = new KVPair();
                $obj->deserialize($value);
                array_push($this->Properties, $obj);
            }
        }
    }
}
