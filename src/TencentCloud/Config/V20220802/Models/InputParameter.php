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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 参数值
 *
 * @method string getParameterKey() 获取参数名
 * @method void setParameterKey(string $ParameterKey) 设置参数名
 * @method string getType() 获取参数类型。必填类型：Require，可选类型：Optional。
 * @method void setType(string $Type) 设置参数类型。必填类型：Require，可选类型：Optional。
 * @method string getValue() 获取参数值
 * @method void setValue(string $Value) 设置参数值
 */
class InputParameter extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $ParameterKey;

    /**
     * @var string 参数类型。必填类型：Require，可选类型：Optional。
     */
    public $Type;

    /**
     * @var string 参数值
     */
    public $Value;

    /**
     * @param string $ParameterKey 参数名
     * @param string $Type 参数类型。必填类型：Require，可选类型：Optional。
     * @param string $Value 参数值
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
        if (array_key_exists("ParameterKey",$param) and $param["ParameterKey"] !== null) {
            $this->ParameterKey = $param["ParameterKey"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
