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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量修改参数
 *
 * @method string getName() 获取参数名
 * @method void setName(string $Name) 设置参数名
 * @method string getExpectedValue() 获取修改参数值。入参均以字符串形式传递，例如：小数”0.1“、整数”1000“、枚举”replica“
 * @method void setExpectedValue(string $ExpectedValue) 设置修改参数值。入参均以字符串形式传递，例如：小数”0.1“、整数”1000“、枚举”replica“
 */
class ParamEntry extends AbstractModel
{
    /**
     * @var string 参数名
     */
    public $Name;

    /**
     * @var string 修改参数值。入参均以字符串形式传递，例如：小数”0.1“、整数”1000“、枚举”replica“
     */
    public $ExpectedValue;

    /**
     * @param string $Name 参数名
     * @param string $ExpectedValue 修改参数值。入参均以字符串形式传递，例如：小数”0.1“、整数”1000“、枚举”replica“
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

        if (array_key_exists("ExpectedValue",$param) and $param["ExpectedValue"] !== null) {
            $this->ExpectedValue = $param["ExpectedValue"];
        }
    }
}
