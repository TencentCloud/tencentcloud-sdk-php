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
 * 机器核保结论子项
 *
 * @method string getName() 获取字段名
 * @method void setName(string $Name) 设置字段名
 * @method string getResult() 获取结果
 * @method void setResult(string $Result) 设置结果
 * @method string getValue() 获取风险值或者说明
 * @method void setValue(string $Value) 设置风险值或者说明
 */
class UnderwriteItem extends AbstractModel
{
    /**
     * @var string 字段名
     */
    public $Name;

    /**
     * @var string 结果
     */
    public $Result;

    /**
     * @var string 风险值或者说明
     */
    public $Value;

    /**
     * @param string $Name 字段名
     * @param string $Result 结果
     * @param string $Value 风险值或者说明
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

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
