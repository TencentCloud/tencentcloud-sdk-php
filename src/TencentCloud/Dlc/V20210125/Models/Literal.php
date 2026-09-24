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
 * tcc Literal定义
 *
 * @method string getValue() 获取<p>数值</p>
 * @method void setValue(string $Value) 设置<p>数值</p>
 * @method string getDataType() 获取<p>类型</p><p>枚举值：</p><ul><li>integer： 整数类型</li></ul>
 * @method void setDataType(string $DataType) 设置<p>类型</p><p>枚举值：</p><ul><li>integer： 整数类型</li></ul>
 */
class Literal extends AbstractModel
{
    /**
     * @var string <p>数值</p>
     */
    public $Value;

    /**
     * @var string <p>类型</p><p>枚举值：</p><ul><li>integer： 整数类型</li></ul>
     */
    public $DataType;

    /**
     * @param string $Value <p>数值</p>
     * @param string $DataType <p>类型</p><p>枚举值：</p><ul><li>integer： 整数类型</li></ul>
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }
    }
}
