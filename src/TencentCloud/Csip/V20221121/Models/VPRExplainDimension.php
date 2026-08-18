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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPR解释卡片中的单个维度
 *
 * @method string getKey() 获取<p>标签key</p>
 * @method void setKey(string $Key) 设置<p>标签key</p>
 * @method string getName() 获取<p>标签名称</p>
 * @method void setName(string $Name) 设置<p>标签名称</p>
 * @method array getItems() 获取<p>标签子项</p>
 * @method void setItems(array $Items) 设置<p>标签子项</p>
 */
class VPRExplainDimension extends AbstractModel
{
    /**
     * @var string <p>标签key</p>
     */
    public $Key;

    /**
     * @var string <p>标签名称</p>
     */
    public $Name;

    /**
     * @var array <p>标签子项</p>
     */
    public $Items;

    /**
     * @param string $Key <p>标签key</p>
     * @param string $Name <p>标签名称</p>
     * @param array $Items <p>标签子项</p>
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
        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new VPRExplainDimensionItem();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
