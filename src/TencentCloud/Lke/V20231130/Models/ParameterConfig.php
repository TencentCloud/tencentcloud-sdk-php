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
 * 参数配置列表
 *
 * @method string getName() 获取字段名称
 * @method void setName(string $Name) 设置字段名称
 * @method string getDescription() 获取字段描述
 * @method void setDescription(string $Description) 设置字段描述
 * @method integer getType() 获取字段类型
 * @method void setType(integer $Type) 设置字段类型
 * @method boolean getIsRequired() 获取是否必填
 * @method void setIsRequired(boolean $IsRequired) 设置是否必填
 * @method array getSubParams() 获取子参数
 * @method void setSubParams(array $SubParams) 设置子参数
 * @method array getOneOf() 获取OneOf类型的参数
 * @method void setOneOf(array $OneOf) 设置OneOf类型的参数
 * @method array getAnyOf() 获取AnyOf类型的参数
 * @method void setAnyOf(array $AnyOf) 设置AnyOf类型的参数
 */
class ParameterConfig extends AbstractModel
{
    /**
     * @var string 字段名称
     */
    public $Name;

    /**
     * @var string 字段描述
     */
    public $Description;

    /**
     * @var integer 字段类型
     */
    public $Type;

    /**
     * @var boolean 是否必填
     */
    public $IsRequired;

    /**
     * @var array 子参数
     */
    public $SubParams;

    /**
     * @var array OneOf类型的参数
     */
    public $OneOf;

    /**
     * @var array AnyOf类型的参数
     */
    public $AnyOf;

    /**
     * @param string $Name 字段名称
     * @param string $Description 字段描述
     * @param integer $Type 字段类型
     * @param boolean $IsRequired 是否必填
     * @param array $SubParams 子参数
     * @param array $OneOf OneOf类型的参数
     * @param array $AnyOf AnyOf类型的参数
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("IsRequired",$param) and $param["IsRequired"] !== null) {
            $this->IsRequired = $param["IsRequired"];
        }

        if (array_key_exists("SubParams",$param) and $param["SubParams"] !== null) {
            $this->SubParams = [];
            foreach ($param["SubParams"] as $key => $value){
                $obj = new ParameterConfig();
                $obj->deserialize($value);
                array_push($this->SubParams, $obj);
            }
        }

        if (array_key_exists("OneOf",$param) and $param["OneOf"] !== null) {
            $this->OneOf = [];
            foreach ($param["OneOf"] as $key => $value){
                $obj = new ParameterConfig();
                $obj->deserialize($value);
                array_push($this->OneOf, $obj);
            }
        }

        if (array_key_exists("AnyOf",$param) and $param["AnyOf"] !== null) {
            $this->AnyOf = [];
            foreach ($param["AnyOf"] as $key => $value){
                $obj = new ParameterConfig();
                $obj->deserialize($value);
                array_push($this->AnyOf, $obj);
            }
        }
    }
}
