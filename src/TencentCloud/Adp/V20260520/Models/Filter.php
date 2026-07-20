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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 列表通用过滤条件（多个Filter之间为AND关系，同一Filter的多个value_list为OR关系）
 *
 * @method string getName() 获取过滤字段名
 * @method void setName(string $Name) 设置过滤字段名
 * @method integer getOperator() 获取操作符：0-属于，1-不属于
 * @method void setOperator(integer $Operator) 设置操作符：0-属于，1-不属于
 * @method array getValueList() 获取过滤值数组
 * @method void setValueList(array $ValueList) 设置过滤值数组
 */
class Filter extends AbstractModel
{
    /**
     * @var string 过滤字段名
     */
    public $Name;

    /**
     * @var integer 操作符：0-属于，1-不属于
     */
    public $Operator;

    /**
     * @var array 过滤值数组
     */
    public $ValueList;

    /**
     * @param string $Name 过滤字段名
     * @param integer $Operator 操作符：0-属于，1-不属于
     * @param array $ValueList 过滤值数组
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

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("ValueList",$param) and $param["ValueList"] !== null) {
            $this->ValueList = $param["ValueList"];
        }
    }
}
