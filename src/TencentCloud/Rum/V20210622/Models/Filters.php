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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BugLY筛选结构体
 *
 * @method boolean getIsReversed() 获取是否反转
 * @method void setIsReversed(boolean $IsReversed) 设置是否反转
 * @method string getKey() 获取键
 * @method void setKey(string $Key) 设置键
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getOperator() 获取运算符
 * @method void setOperator(string $Operator) 设置运算符
 * @method integer getType() 获取类型
 * @method void setType(integer $Type) 设置类型
 * @method array getValues() 获取值
 * @method void setValues(array $Values) 设置值
 */
class Filters extends AbstractModel
{
    /**
     * @var boolean 是否反转
     */
    public $IsReversed;

    /**
     * @var string 键
     */
    public $Key;

    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 运算符
     */
    public $Operator;

    /**
     * @var integer 类型
     */
    public $Type;

    /**
     * @var array 值
     */
    public $Values;

    /**
     * @param boolean $IsReversed 是否反转
     * @param string $Key 键
     * @param string $Name 名称
     * @param string $Operator 运算符
     * @param integer $Type 类型
     * @param array $Values 值
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
        if (array_key_exists("IsReversed",$param) and $param["IsReversed"] !== null) {
            $this->IsReversed = $param["IsReversed"];
        }

        if (array_key_exists("Key",$param) and $param["Key"] !== null) {
            $this->Key = $param["Key"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
