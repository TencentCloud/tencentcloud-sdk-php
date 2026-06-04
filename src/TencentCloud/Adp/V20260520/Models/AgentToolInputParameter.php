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
 * Agent 工具输入参数定义
 *
 * @method string getName() 获取<p>工具名称</p>
 * @method void setName(string $Name) 设置<p>工具名称</p>
 * @method string getDescription() 获取<p>工具描述</p>
 * @method void setDescription(string $Description) 设置<p>工具描述</p>
 * @method integer getType() 获取<p>工具参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
 * @method void setType(integer $Type) 设置<p>工具参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
 * @method boolean getIsRequired() 获取<p>是否必填</p>
 * @method void setIsRequired(boolean $IsRequired) 设置<p>是否必填</p>
 * @method array getSubParameterList() 获取<p>子参数，仅 OBJECT 或 ARRAY&lt;&gt; 类型时使用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubParameterList(array $SubParameterList) 设置<p>子参数，仅 OBJECT 或 ARRAY&lt;&gt; 类型时使用</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsHidden() 获取<p>模式下是否对模型隐藏</p>
 * @method void setIsHidden(boolean $IsHidden) 设置<p>模式下是否对模型隐藏</p>
 * @method array getOneOfList() 获取<p>OneOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOneOfList(array $OneOfList) 设置<p>OneOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAnyOfList() 获取<p>AnyOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAnyOfList(array $AnyOfList) 设置<p>AnyOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AgentInput getInput() 获取<p>参数取值来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInput(AgentInput $Input) 设置<p>参数取值来源</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentToolInputParameter extends AbstractModel
{
    /**
     * @var string <p>工具名称</p>
     */
    public $Name;

    /**
     * @var string <p>工具描述</p>
     */
    public $Description;

    /**
     * @var integer <p>工具参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
     */
    public $Type;

    /**
     * @var boolean <p>是否必填</p>
     */
    public $IsRequired;

    /**
     * @var array <p>子参数，仅 OBJECT 或 ARRAY&lt;&gt; 类型时使用</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubParameterList;

    /**
     * @var boolean <p>模式下是否对模型隐藏</p>
     */
    public $IsHidden;

    /**
     * @var array <p>OneOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OneOfList;

    /**
     * @var array <p>AnyOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AnyOfList;

    /**
     * @var AgentInput <p>参数取值来源</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Input;

    /**
     * @param string $Name <p>工具名称</p>
     * @param string $Description <p>工具描述</p>
     * @param integer $Type <p>工具参数类型</p><p>枚举值：</p><ul><li>0： STRING</li><li>1： INT</li><li>2： FLOAT</li><li>3： BOOL</li><li>4： OBJECT</li><li>5： ARRAY_STRING</li><li>6： ARRAY_INT</li><li>7： ARRAY_FLOAT</li><li>8： ARRAY_BOOL</li><li>9： ARRAY_OBJECT</li><li>20： ARRAY_ARRAY</li><li>99： NULL</li></ul>
     * @param boolean $IsRequired <p>是否必填</p>
     * @param array $SubParameterList <p>子参数，仅 OBJECT 或 ARRAY&lt;&gt; 类型时使用</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsHidden <p>模式下是否对模型隐藏</p>
     * @param array $OneOfList <p>OneOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AnyOfList <p>AnyOf类型的参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AgentInput $Input <p>参数取值来源</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("SubParameterList",$param) and $param["SubParameterList"] !== null) {
            $this->SubParameterList = [];
            foreach ($param["SubParameterList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->SubParameterList, $obj);
            }
        }

        if (array_key_exists("IsHidden",$param) and $param["IsHidden"] !== null) {
            $this->IsHidden = $param["IsHidden"];
        }

        if (array_key_exists("OneOfList",$param) and $param["OneOfList"] !== null) {
            $this->OneOfList = [];
            foreach ($param["OneOfList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->OneOfList, $obj);
            }
        }

        if (array_key_exists("AnyOfList",$param) and $param["AnyOfList"] !== null) {
            $this->AnyOfList = [];
            foreach ($param["AnyOfList"] as $key => $value){
                $obj = new AgentToolInputParameter();
                $obj->deserialize($value);
                array_push($this->AnyOfList, $obj);
            }
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = new AgentInput();
            $this->Input->deserialize($param["Input"]);
        }
    }
}
