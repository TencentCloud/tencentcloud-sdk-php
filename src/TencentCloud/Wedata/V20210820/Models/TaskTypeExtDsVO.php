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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 属性类型扩展
 *
 * @method integer getTypeId() 获取类型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTypeId(integer $TypeId) 设置类型ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropName() 获取属性名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropName(string $PropName) 设置属性名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropLabel() 获取属性标签(ui展示用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropLabel(string $PropLabel) 设置属性标签(ui展示用)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDefaultFlag() 获取缺省标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultFlag(integer $DefaultFlag) 设置缺省标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVisibleFlag() 获取可视标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVisibleFlag(integer $VisibleFlag) 设置可视标志
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPropDesc() 获取属性描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPropDesc(string $PropDesc) 设置属性描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRankId() 获取排列id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRankId(integer $RankId) 设置排列id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInputType() 获取控件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputType(string $InputType) 设置控件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValueType() 获取值类型(integer，string)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueType(string $ValueType) 设置值类型(integer，string)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDefaultValue() 获取缺省值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefaultValue(string $DefaultValue) 设置缺省值
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCandidateValues() 获取候选值列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCandidateValues(string $CandidateValues) 设置候选值列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsMandatory() 获取是否必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsMandatory(integer $IsMandatory) 设置是否必填
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxValue() 获取最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxValue(integer $MaxValue) 设置最大值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMinValue() 获取最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMinValue(integer $MinValue) 设置最小值
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getConfLevel() 获取配置等级(1-普通，2-高级，3-管理员)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfLevel(integer $ConfLevel) 设置配置等级(1-普通，2-高级，3-管理员)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCandidateTexts() 获取候选文本列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCandidateTexts(string $CandidateTexts) 设置候选文本列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCopyKey() 获取复制时是否需要修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCopyKey(integer $CopyKey) 设置复制时是否需要修改
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegex() 获取字段正则表达式校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegex(string $Regex) 设置字段正则表达式校验
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTip() 获取字段正则表达式校验证提示tip
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTip(string $Tip) 设置字段正则表达式校验证提示tip
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCandidates() 获取可选值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCandidates(array $Candidates) 设置可选值
注意：此字段可能返回 null，表示取不到有效值。
 */
class TaskTypeExtDsVO extends AbstractModel
{
    /**
     * @var integer 类型ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TypeId;

    /**
     * @var string 属性名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropName;

    /**
     * @var string 属性标签(ui展示用)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropLabel;

    /**
     * @var integer 缺省标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultFlag;

    /**
     * @var integer 可视标志
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VisibleFlag;

    /**
     * @var string 属性描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PropDesc;

    /**
     * @var integer 排列id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RankId;

    /**
     * @var string 控件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputType;

    /**
     * @var string 值类型(integer，string)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueType;

    /**
     * @var string 缺省值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DefaultValue;

    /**
     * @var string 候选值列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CandidateValues;

    /**
     * @var integer 是否必填
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsMandatory;

    /**
     * @var integer 最大值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxValue;

    /**
     * @var integer 最小值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MinValue;

    /**
     * @var integer 配置等级(1-普通，2-高级，3-管理员)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfLevel;

    /**
     * @var string 候选文本列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CandidateTexts;

    /**
     * @var integer 复制时是否需要修改
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CopyKey;

    /**
     * @var string 字段正则表达式校验
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Regex;

    /**
     * @var string 字段正则表达式校验证提示tip
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tip;

    /**
     * @var array 可选值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Candidates;

    /**
     * @param integer $TypeId 类型ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PropName 属性名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PropLabel 属性标签(ui展示用)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DefaultFlag 缺省标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VisibleFlag 可视标志
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PropDesc 属性描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RankId 排列id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InputType 控件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ValueType 值类型(integer，string)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DefaultValue 缺省值
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CandidateValues 候选值列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsMandatory 是否必填
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxValue 最大值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MinValue 最小值
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ConfLevel 配置等级(1-普通，2-高级，3-管理员)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CandidateTexts 候选文本列表(，分隔)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CopyKey 复制时是否需要修改
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Regex 字段正则表达式校验
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Tip 字段正则表达式校验证提示tip
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Candidates 可选值
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
        if (array_key_exists("TypeId",$param) and $param["TypeId"] !== null) {
            $this->TypeId = $param["TypeId"];
        }

        if (array_key_exists("PropName",$param) and $param["PropName"] !== null) {
            $this->PropName = $param["PropName"];
        }

        if (array_key_exists("PropLabel",$param) and $param["PropLabel"] !== null) {
            $this->PropLabel = $param["PropLabel"];
        }

        if (array_key_exists("DefaultFlag",$param) and $param["DefaultFlag"] !== null) {
            $this->DefaultFlag = $param["DefaultFlag"];
        }

        if (array_key_exists("VisibleFlag",$param) and $param["VisibleFlag"] !== null) {
            $this->VisibleFlag = $param["VisibleFlag"];
        }

        if (array_key_exists("PropDesc",$param) and $param["PropDesc"] !== null) {
            $this->PropDesc = $param["PropDesc"];
        }

        if (array_key_exists("RankId",$param) and $param["RankId"] !== null) {
            $this->RankId = $param["RankId"];
        }

        if (array_key_exists("InputType",$param) and $param["InputType"] !== null) {
            $this->InputType = $param["InputType"];
        }

        if (array_key_exists("ValueType",$param) and $param["ValueType"] !== null) {
            $this->ValueType = $param["ValueType"];
        }

        if (array_key_exists("DefaultValue",$param) and $param["DefaultValue"] !== null) {
            $this->DefaultValue = $param["DefaultValue"];
        }

        if (array_key_exists("CandidateValues",$param) and $param["CandidateValues"] !== null) {
            $this->CandidateValues = $param["CandidateValues"];
        }

        if (array_key_exists("IsMandatory",$param) and $param["IsMandatory"] !== null) {
            $this->IsMandatory = $param["IsMandatory"];
        }

        if (array_key_exists("MaxValue",$param) and $param["MaxValue"] !== null) {
            $this->MaxValue = $param["MaxValue"];
        }

        if (array_key_exists("MinValue",$param) and $param["MinValue"] !== null) {
            $this->MinValue = $param["MinValue"];
        }

        if (array_key_exists("ConfLevel",$param) and $param["ConfLevel"] !== null) {
            $this->ConfLevel = $param["ConfLevel"];
        }

        if (array_key_exists("CandidateTexts",$param) and $param["CandidateTexts"] !== null) {
            $this->CandidateTexts = $param["CandidateTexts"];
        }

        if (array_key_exists("CopyKey",$param) and $param["CopyKey"] !== null) {
            $this->CopyKey = $param["CopyKey"];
        }

        if (array_key_exists("Regex",$param) and $param["Regex"] !== null) {
            $this->Regex = $param["Regex"];
        }

        if (array_key_exists("Tip",$param) and $param["Tip"] !== null) {
            $this->Tip = $param["Tip"];
        }

        if (array_key_exists("Candidates",$param) and $param["Candidates"] !== null) {
            $this->Candidates = [];
            foreach ($param["Candidates"] as $key => $value){
                $obj = new CandidateDsDTo();
                $obj->deserialize($value);
                array_push($this->Candidates, $obj);
            }
        }
    }
}
