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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateAggregator请求参数结构体
 *
 * @method string getName() 获取<p>账号组名称</p>
 * @method void setName(string $Name) 设置<p>账号组名称</p>
 * @method string getDescription() 获取<p>账号组描述</p>
 * @method void setDescription(string $Description) 设置<p>账号组描述</p>
 * @method string getType() 获取<p>账号组类型 </p><p>枚举值：</p><ul><li>RD： 全局账号组</li><li>CUSTOM： 自定义账号组</li></ul>
 * @method void setType(string $Type) 设置<p>账号组类型 </p><p>枚举值：</p><ul><li>RD： 全局账号组</li><li>CUSTOM： 自定义账号组</li></ul>
 * @method array getAggregatorAccounts() 获取<p>账号组成员信息列表，最多100个</p>
 * @method void setAggregatorAccounts(array $AggregatorAccounts) 设置<p>账号组成员信息列表，最多100个</p>
 */
class CreateAggregatorRequest extends AbstractModel
{
    /**
     * @var string <p>账号组名称</p>
     */
    public $Name;

    /**
     * @var string <p>账号组描述</p>
     */
    public $Description;

    /**
     * @var string <p>账号组类型 </p><p>枚举值：</p><ul><li>RD： 全局账号组</li><li>CUSTOM： 自定义账号组</li></ul>
     */
    public $Type;

    /**
     * @var array <p>账号组成员信息列表，最多100个</p>
     */
    public $AggregatorAccounts;

    /**
     * @param string $Name <p>账号组名称</p>
     * @param string $Description <p>账号组描述</p>
     * @param string $Type <p>账号组类型 </p><p>枚举值：</p><ul><li>RD： 全局账号组</li><li>CUSTOM： 自定义账号组</li></ul>
     * @param array $AggregatorAccounts <p>账号组成员信息列表，最多100个</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AggregatorAccounts",$param) and $param["AggregatorAccounts"] !== null) {
            $this->AggregatorAccounts = [];
            foreach ($param["AggregatorAccounts"] as $key => $value){
                $obj = new AggregatorAccount();
                $obj->deserialize($value);
                array_push($this->AggregatorAccounts, $obj);
            }
        }
    }
}
