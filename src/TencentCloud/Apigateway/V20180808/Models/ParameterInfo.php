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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 独享实例配置参数
 *
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method integer getValue() 获取当前值
 * @method void setValue(integer $Value) 设置当前值
 * @method integer getDefault() 获取默认值
 * @method void setDefault(integer $Default) 设置默认值
 * @method string getUnit() 获取单位
 * @method void setUnit(string $Unit) 设置单位
 * @method string getType() 获取类型
 * @method void setType(string $Type) 设置类型
 * @method integer getMinimum() 获取最小
 * @method void setMinimum(integer $Minimum) 设置最小
 * @method integer getMaximum() 获取最大
 * @method void setMaximum(integer $Maximum) 设置最大
 * @method string getModifedTime() 获取修改时间
 * @method void setModifedTime(string $ModifedTime) 设置修改时间
 */
class ParameterInfo extends AbstractModel
{
    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var integer 当前值
     */
    public $Value;

    /**
     * @var integer 默认值
     */
    public $Default;

    /**
     * @var string 单位
     */
    public $Unit;

    /**
     * @var string 类型
     */
    public $Type;

    /**
     * @var integer 最小
     */
    public $Minimum;

    /**
     * @var integer 最大
     */
    public $Maximum;

    /**
     * @var string 修改时间
     */
    public $ModifedTime;

    /**
     * @param string $Name 名字
     * @param integer $Value 当前值
     * @param integer $Default 默认值
     * @param string $Unit 单位
     * @param string $Type 类型
     * @param integer $Minimum 最小
     * @param integer $Maximum 最大
     * @param string $ModifedTime 修改时间
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Default",$param) and $param["Default"] !== null) {
            $this->Default = $param["Default"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Minimum",$param) and $param["Minimum"] !== null) {
            $this->Minimum = $param["Minimum"];
        }

        if (array_key_exists("Maximum",$param) and $param["Maximum"] !== null) {
            $this->Maximum = $param["Maximum"];
        }

        if (array_key_exists("ModifedTime",$param) and $param["ModifedTime"] !== null) {
            $this->ModifedTime = $param["ModifedTime"];
        }
    }
}
