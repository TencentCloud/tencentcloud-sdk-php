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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤条件
 *
 * @method string getKey() 获取筛选维度
 * @method void setKey(string $Key) 设置筛选维度
 * @method string getOperator() 获取操作符
 * @method void setOperator(string $Operator) 设置操作符
 * @method array getValue() 获取筛选维度值
 * @method void setValue(array $Value) 设置筛选维度值
 */
class Filter extends AbstractModel
{
    /**
     * @var string 筛选维度
     */
    public $Key;

    /**
     * @var string 操作符
     */
    public $Operator;

    /**
     * @var array 筛选维度值
     */
    public $Value;

    /**
     * @param string $Key 筛选维度
     * @param string $Operator 操作符
     * @param array $Value 筛选维度值
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
