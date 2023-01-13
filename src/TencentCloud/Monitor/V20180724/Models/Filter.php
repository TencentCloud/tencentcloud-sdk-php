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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询过滤参数
 *
 * @method string getType() 获取过滤方式（=, !=, in）
 * @method void setType(string $Type) 设置过滤方式（=, !=, in）
 * @method string getKey() 获取过滤维度名
 * @method void setKey(string $Key) 设置过滤维度名
 * @method string getValue() 获取过滤值，in过滤方式用逗号分割多个值
 * @method void setValue(string $Value) 设置过滤值，in过滤方式用逗号分割多个值
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤方式（=, !=, in）
     */
    public $Type;

    /**
     * @var string 过滤维度名
     */
    public $Key;

    /**
     * @var string 过滤值，in过滤方式用逗号分割多个值
     */
    public $Value;

    /**
     * @param string $Type 过滤方式（=, !=, in）
     * @param string $Key 过滤维度名
     * @param string $Value 过滤值，in过滤方式用逗号分割多个值
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
