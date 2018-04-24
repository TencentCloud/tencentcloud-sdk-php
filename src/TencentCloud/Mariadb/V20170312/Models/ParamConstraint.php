<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Mariadb\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getType() 获取约束类型,如枚举enum，区间section
 * @method void setType(string $Type) 设置约束类型,如枚举enum，区间section
 * @method string getEnum() 获取约束类型为enum时的可选值列表
 * @method void setEnum(string $Enum) 设置约束类型为enum时的可选值列表
 * @method ConstraintRange getRange() 获取约束类型为section时的范围
 * @method void setRange(ConstraintRange $Range) 设置约束类型为section时的范围
 */

/**
 *参数约束
 */
class ParamConstraint extends AbstractModel
{
    /**
     * @var string 约束类型,如枚举enum，区间section
     */
    public $Type;

    /**
     * @var string 约束类型为enum时的可选值列表
     */
    public $Enum;

    /**
     * @var ConstraintRange 约束类型为section时的范围
     */
    public $Range;
    /**
     * @param string $Type 约束类型,如枚举enum，区间section
     * @param string $Enum 约束类型为enum时的可选值列表
     * @param ConstraintRange $Range 约束类型为section时的范围
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Enum",$param) and $param["Enum"] !== null) {
            $this->Enum = $param["Enum"];
        }

        if (array_key_exists("Range",$param) and $param["Range"] !== null) {
            $this->Range = new ConstraintRange();
            $this->Range->deserialize($param["Range"]);
        }
    }
}
