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
 * Agent工具的请求参数定义
 *
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method string getDesc() 获取参数描述
 * @method void setDesc(string $Desc) 设置参数描述
 * @method integer getType() 获取参数类型，0:string, 1:int, 2:float，3:bool 4:object 5:array_string, 6:array_int, 7:array_float, 8:array_bool, 9:array_object
 * @method void setType(integer $Type) 设置参数类型，0:string, 1:int, 2:float，3:bool 4:object 5:array_string, 6:array_int, 7:array_float, 8:array_bool, 9:array_object
 * @method boolean getIsRequired() 获取参数是否必填
 * @method void setIsRequired(boolean $IsRequired) 设置参数是否必填
 * @method string getDefaultValue() 获取参数默认值
 * @method void setDefaultValue(string $DefaultValue) 设置参数默认值
 * @method array getSubParams() 获取子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
 * @method void setSubParams(array $SubParams) 设置子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
 * @method boolean getGlobalHidden() 获取是否隐藏不可见
 * @method void setGlobalHidden(boolean $GlobalHidden) 设置是否隐藏不可见
 * @method boolean getAgentHidden() 获取agent模式下模型是否可见
 * @method void setAgentHidden(boolean $AgentHidden) 设置agent模式下模型是否可见
 * @method array getAnyOf() 获取其中任意
 * @method void setAnyOf(array $AnyOf) 设置其中任意
 * @method array getOneOf() 获取其中一个
 * @method void setOneOf(array $OneOf) 设置其中一个
 * @method AgentInput getInput() 获取输入
 * @method void setInput(AgentInput $Input) 设置输入
 */
class AgentToolReqParam extends AbstractModel
{
    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var string 参数描述
     */
    public $Desc;

    /**
     * @var integer 参数类型，0:string, 1:int, 2:float，3:bool 4:object 5:array_string, 6:array_int, 7:array_float, 8:array_bool, 9:array_object
     */
    public $Type;

    /**
     * @var boolean 参数是否必填
     */
    public $IsRequired;

    /**
     * @var string 参数默认值
     */
    public $DefaultValue;

    /**
     * @var array 子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
     */
    public $SubParams;

    /**
     * @var boolean 是否隐藏不可见
     */
    public $GlobalHidden;

    /**
     * @var boolean agent模式下模型是否可见
     */
    public $AgentHidden;

    /**
     * @var array 其中任意
     */
    public $AnyOf;

    /**
     * @var array 其中一个
     */
    public $OneOf;

    /**
     * @var AgentInput 输入
     */
    public $Input;

    /**
     * @param string $Name 参数名称
     * @param string $Desc 参数描述
     * @param integer $Type 参数类型，0:string, 1:int, 2:float，3:bool 4:object 5:array_string, 6:array_int, 7:array_float, 8:array_bool, 9:array_object
     * @param boolean $IsRequired 参数是否必填
     * @param string $DefaultValue 参数默认值
     * @param array $SubParams 子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
     * @param boolean $GlobalHidden 是否隐藏不可见
     * @param boolean $AgentHidden agent模式下模型是否可见
     * @param array $AnyOf 其中任意
     * @param array $OneOf 其中一个
     * @param AgentInput $Input 输入
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

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new AgentToolReqParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }

        if (array_key_exists("GlobalHidden",$param) and $param["GlobalHidden"] !== null) {
            $this->GlobalHidden = $param["GlobalHidden"];
        }

        if (array_key_exists("AgentHidden",$param) and $param["AgentHidden"] !== null) {
            $this->AgentHidden = $param["AgentHidden"];
        }

        if (array_key_exists("AnyOf",$param) and $param["AnyOf"] !== null) {
            $this->AnyOf = [];
            foreach ($param["AnyOf"] as $key => $value){
                $obj = new AgentToolReqParam();
                $obj->deserialize($value);
                array_push($this->AnyOf, $obj);
            }
        }

        if (array_key_exists("OneOf",$param) and $param["OneOf"] !== null) {
            $this->OneOf = [];
            foreach ($param["OneOf"] as $key => $value){
                $obj = new AgentToolReqParam();
                $obj->deserialize($value);
                array_push($this->OneOf, $obj);
            }
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
