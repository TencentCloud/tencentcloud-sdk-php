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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志存储过滤条件
 *
 * @method string getKey() 获取过滤字段名称，取值范围如下:region(地域)，type(事件类型)，source(事件源)，status(事件状态)
 * @method void setKey(string $Key) 设置过滤字段名称，取值范围如下:region(地域)，type(事件类型)，source(事件源)，status(事件状态)
 * @method string getOperator() 获取运算符, 全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
 * @method void setOperator(string $Operator) 设置运算符, 全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
 * @method string getValue() 获取过滤值，范围运算需要同时输入两个值，以英文逗号分隔

 * @method void setValue(string $Value) 设置过滤值，范围运算需要同时输入两个值，以英文逗号分隔
 */
class LogFilters extends AbstractModel
{
    /**
     * @var string 过滤字段名称，取值范围如下:region(地域)，type(事件类型)，source(事件源)，status(事件状态)
     */
    public $Key;

    /**
     * @var string 运算符, 全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
     */
    public $Operator;

    /**
     * @var string 过滤值，范围运算需要同时输入两个值，以英文逗号分隔

     */
    public $Value;

    /**
     * @param string $Key 过滤字段名称，取值范围如下:region(地域)，type(事件类型)，source(事件源)，status(事件状态)
     * @param string $Operator 运算符, 全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
     * @param string $Value 过滤值，范围运算需要同时输入两个值，以英文逗号分隔
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
