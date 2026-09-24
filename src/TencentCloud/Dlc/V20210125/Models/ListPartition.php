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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcc ListPartition定义
 *
 * @method string getName() 获取<p>分区名</p>
 * @method void setName(string $Name) 设置<p>分区名</p>
 * @method array getLists() 获取<p>分区列表</p>
 * @method void setLists(array $Lists) 设置<p>分区列表</p>
 * @method array getProperties() 获取<p>属性</p>
 * @method void setProperties(array $Properties) 设置<p>属性</p>
 */
class ListPartition extends AbstractModel
{
    /**
     * @var string <p>分区名</p>
     */
    public $Name;

    /**
     * @var array <p>分区列表</p>
     */
    public $Lists;

    /**
     * @var array <p>属性</p>
     */
    public $Properties;

    /**
     * @param string $Name <p>分区名</p>
     * @param array $Lists <p>分区列表</p>
     * @param array $Properties <p>属性</p>
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

        if (array_key_exists("Lists",$param) and $param["Lists"] !== null) {
            $this->Lists = [];
            foreach ($param["Lists"] as $key => $value){
                $obj = new Literal();
                $obj->deserialize($value);
                array_push($this->Lists, $obj);
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
