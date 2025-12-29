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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Widget参数配置
 *
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method integer getType() 获取参数类型
 * @method void setType(integer $Type) 设置参数类型
 * @method array getSubParams() 获取子参数
 * @method void setSubParams(array $SubParams) 设置子参数
 * @method string getDefaultValue() 获取默认值, Input未指定时，使用该值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值, Input未指定时，使用该值
 * @method AgentInput getInput() 获取输入的值
 * @method void setInput(AgentInput $Input) 设置输入的值
 */
class WidgetParam extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var integer 参数类型
     */
    public $Type;

    /**
     * @var array 子参数
     */
    public $SubParams;

    /**
     * @var string 默认值, Input未指定时，使用该值
     */
    public $DefaultValue;

    /**
     * @var AgentInput 输入的值
     */
    public $Input;

    /**
     * @param string $Name 参数名称
     * @param integer $Type 参数类型
     * @param array $SubParams 子参数
     * @param string $DefaultValue 默认值, Input未指定时，使用该值
     * @param AgentInput $Input 输入的值
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new WidgetParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
