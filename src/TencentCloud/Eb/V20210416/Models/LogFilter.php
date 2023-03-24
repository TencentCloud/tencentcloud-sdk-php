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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志查询相关接口filter参数定义
 *
 * @method string getKey() 获取过滤字段名称
 * @method void setKey(string $Key) 设置过滤字段名称
 * @method string getOperator() 获取运算符，全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
 * @method void setOperator(string $Operator) 设置运算符，全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
 * @method string getValue() 获取过滤值,范围运算需要同时输入两个值，以英文逗号分隔

 * @method void setValue(string $Value) 设置过滤值,范围运算需要同时输入两个值，以英文逗号分隔

 * @method string getType() 获取该层级filters逻辑关系，取值 "AND" 或 "OR"
 * @method void setType(string $Type) 设置该层级filters逻辑关系，取值 "AND" 或 "OR"
 * @method array getFilters() 获取LogFilters数组
 * @method void setFilters(array $Filters) 设置LogFilters数组
 */
class LogFilter extends AbstractModel
{
    /**
     * @var string 过滤字段名称
     */
    public $Key;

    /**
     * @var string 运算符，全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
     */
    public $Operator;

    /**
     * @var string 过滤值,范围运算需要同时输入两个值，以英文逗号分隔

     */
    public $Value;

    /**
     * @var string 该层级filters逻辑关系，取值 "AND" 或 "OR"
     */
    public $Type;

    /**
     * @var array LogFilters数组
     */
    public $Filters;

    /**
     * @param string $Key 过滤字段名称
     * @param string $Operator 运算符，全等 eq，不等 neq，相似 like，排除相似 not like,  小于 lt，小于且等于 lte，大于 gt，大于且等于 gte，在范围内 range，不在范围内 norange
     * @param string $Value 过滤值,范围运算需要同时输入两个值，以英文逗号分隔

     * @param string $Type 该层级filters逻辑关系，取值 "AND" 或 "OR"
     * @param array $Filters LogFilters数组
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new LogFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
