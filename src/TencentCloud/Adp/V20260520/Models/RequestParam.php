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
 * 定义工具的请求参数
 *
 * @method string getDefaultValue() 获取默认值
 * @method void setDefaultValue(string $DefaultValue) 设置默认值
 * @method string getDescription() 获取参数描述
 * @method void setDescription(string $Description) 设置参数描述
 * @method boolean getIsGlobalHidden() 获取全局隐藏不可见（区别于Agent场景的agent_hidden），true-全局隐藏不可见，false-可见
 * @method void setIsGlobalHidden(boolean $IsGlobalHidden) 设置全局隐藏不可见（区别于Agent场景的agent_hidden），true-全局隐藏不可见，false-可见
 * @method boolean getIsRequired() 获取是否必选
 * @method void setIsRequired(boolean $IsRequired) 设置是否必选
 * @method string getName() 获取参数名称
 * @method void setName(string $Name) 设置参数名称
 * @method integer getType() 获取参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
 * @method void setType(integer $Type) 设置参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
 * @method array getAnyOf() 获取AnyOf类型的参数
 * @method void setAnyOf(array $AnyOf) 设置AnyOf类型的参数
 * @method array getOneOf() 获取OneOf类型的参数
 * @method void setOneOf(array $OneOf) 设置OneOf类型的参数
 * @method array getSubParams() 获取子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
 * @method void setSubParams(array $SubParams) 设置子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
 */
class RequestParam extends AbstractModel
{
    /**
     * @var string 默认值
     */
    public $DefaultValue;

    /**
     * @var string 参数描述
     */
    public $Description;

    /**
     * @var boolean 全局隐藏不可见（区别于Agent场景的agent_hidden），true-全局隐藏不可见，false-可见
     */
    public $IsGlobalHidden;

    /**
     * @var boolean 是否必选
     */
    public $IsRequired;

    /**
     * @var string 参数名称
     */
    public $Name;

    /**
     * @var integer 参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
     */
    public $Type;

    /**
     * @var array AnyOf类型的参数
     */
    public $AnyOf;

    /**
     * @var array OneOf类型的参数
     */
    public $OneOf;

    /**
     * @var array 子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
     */
    public $SubParams;

    /**
     * @param string $DefaultValue 默认值
     * @param string $Description 参数描述
     * @param boolean $IsGlobalHidden 全局隐藏不可见（区别于Agent场景的agent_hidden），true-全局隐藏不可见，false-可见
     * @param boolean $IsRequired 是否必选
     * @param string $Name 参数名称
     * @param integer $Type 参数类型

枚举值:
| uint | 描述 |
| --- | --- |
| 0 | 默认值是string，如果不填就按string处理 |
| 1 |  |
| 2 |  |
| 3 |  |
| 4 |  |
| 5 |  |
| 6 |  |
| 7 |  |
| 8 |  |
| 9 |  |
| 20 |  |
| 99 | 空值 |
| 100 | 未指定类型，用于类型为OneOf和AnyOf的场景 |
     * @param array $AnyOf AnyOf类型的参数
     * @param array $OneOf OneOf类型的参数
     * @param array $SubParams 子参数,ParamType 是OBJECT 或 ARRAY<>类型有用
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
        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsGlobalHidden",$param) and $param["IsGlobalHidden"] !== null) {
            $this->IsGlobalHidden = $param["IsGlobalHidden"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AnyOf",$param) and $param["AnyOf"] !== null) {
            $this->AnyOf = [];
            foreach ($param["AnyOf"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->AnyOf, $obj);
            }
        }

        if (array_key_exists("OneOf",$param) and $param["OneOf"] !== null) {
            $this->OneOf = [];
            foreach ($param["OneOf"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->OneOf, $obj);
            }
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new RequestParam();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }
    }
}
