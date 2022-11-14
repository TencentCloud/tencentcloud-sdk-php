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
 * 规则模版
 *
 * @method integer getRuleTemplateId() 获取规则模版ID
 * @method void setRuleTemplateId(integer $RuleTemplateId) 设置规则模版ID
 * @method string getName() 获取规则模版名称
 * @method void setName(string $Name) 设置规则模版名称
 * @method string getDescription() 获取规则模版描述
 * @method void setDescription(string $Description) 设置规则模版描述
 * @method integer getType() 获取模版类型（1：系统模版，2：自定义）
 * @method void setType(integer $Type) 设置模版类型（1：系统模版，2：自定义）
 * @method integer getSourceObjectType() 获取规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
 * @method void setSourceObjectType(integer $SourceObjectType) 设置规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
 * @method integer getSourceObjectDataType() 获取规则适用的源数据对象类型（1：数值，2：字符串）
 * @method void setSourceObjectDataType(integer $SourceObjectDataType) 设置规则适用的源数据对象类型（1：数值，2：字符串）
 * @method string getSourceContent() 获取规则模版源侧内容，区分引擎，JSON 结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceContent(string $SourceContent) 设置规则模版源侧内容，区分引擎，JSON 结构
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceEngineTypes() 获取源数据适用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceEngineTypes(array $SourceEngineTypes) 设置源数据适用类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQualityDim() 获取规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQualityDim(integer $QualityDim) 设置规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCompareType() 获取规则支持的比较方式类型（1：固定值比较，大于、小于，大于等于等 2：波动值比较，绝对值、上升、下降）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompareType(integer $CompareType) 设置规则支持的比较方式类型（1：固定值比较，大于、小于，大于等于等 2：波动值比较，绝对值、上升、下降）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCitationCount() 获取引用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCitationCount(integer $CitationCount) 设置引用次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserId() 获取创建人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(integer $UserId) 设置创建人id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getWhereFlag() 获取是否添加where参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWhereFlag(boolean $WhereFlag) 设置是否添加where参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getMultiSourceFlag() 获取是否关联多个库表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMultiSourceFlag(boolean $MultiSourceFlag) 设置是否关联多个库表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSqlExpression() 获取自定义模板SQL表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlExpression(string $SqlExpression) 设置自定义模板SQL表达式
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSubQualityDim() 获取模版子维度，0.父维度类型,1.一致性: 枚举范围一致性,2.一致性：数值范围一致性,3.一致性：字段数据相关性
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubQualityDim(integer $SubQualityDim) 设置模版子维度，0.父维度类型,1.一致性: 枚举范围一致性,2.一致性：数值范围一致性,3.一致性：字段数据相关性
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleTemplate extends AbstractModel
{
    /**
     * @var integer 规则模版ID
     */
    public $RuleTemplateId;

    /**
     * @var string 规则模版名称
     */
    public $Name;

    /**
     * @var string 规则模版描述
     */
    public $Description;

    /**
     * @var integer 模版类型（1：系统模版，2：自定义）
     */
    public $Type;

    /**
     * @var integer 规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
     */
    public $SourceObjectType;

    /**
     * @var integer 规则适用的源数据对象类型（1：数值，2：字符串）
     */
    public $SourceObjectDataType;

    /**
     * @var string 规则模版源侧内容，区分引擎，JSON 结构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceContent;

    /**
     * @var array 源数据适用类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceEngineTypes;

    /**
     * @var integer 规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QualityDim;

    /**
     * @var integer 规则支持的比较方式类型（1：固定值比较，大于、小于，大于等于等 2：波动值比较，绝对值、上升、下降）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompareType;

    /**
     * @var integer 引用次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CitationCount;

    /**
     * @var integer 创建人id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @var string 更新时间yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var boolean 是否添加where参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WhereFlag;

    /**
     * @var boolean 是否关联多个库表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MultiSourceFlag;

    /**
     * @var string 自定义模板SQL表达式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlExpression;

    /**
     * @var integer 模版子维度，0.父维度类型,1.一致性: 枚举范围一致性,2.一致性：数值范围一致性,3.一致性：字段数据相关性
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubQualityDim;

    /**
     * @param integer $RuleTemplateId 规则模版ID
     * @param string $Name 规则模版名称
     * @param string $Description 规则模版描述
     * @param integer $Type 模版类型（1：系统模版，2：自定义）
     * @param integer $SourceObjectType 规则适用的源数据对象类型（1：常量，2：离线表级，3：离线字段级别）
     * @param integer $SourceObjectDataType 规则适用的源数据对象类型（1：数值，2：字符串）
     * @param string $SourceContent 规则模版源侧内容，区分引擎，JSON 结构
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceEngineTypes 源数据适用类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QualityDim 规则所属质量维度（1：准确性，2：唯一性，3：完整性，4：一致性，5：及时性，6：有效性）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CompareType 规则支持的比较方式类型（1：固定值比较，大于、小于，大于等于等 2：波动值比较，绝对值、上升、下降）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CitationCount 引用次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserId 创建人id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 创建人昵称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间yyyy-MM-dd HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $WhereFlag 是否添加where参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $MultiSourceFlag 是否关联多个库表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SqlExpression 自定义模板SQL表达式
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SubQualityDim 模版子维度，0.父维度类型,1.一致性: 枚举范围一致性,2.一致性：数值范围一致性,3.一致性：字段数据相关性
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
        if (array_key_exists("RuleTemplateId",$param) and $param["RuleTemplateId"] !== null) {
            $this->RuleTemplateId = $param["RuleTemplateId"];
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

        if (array_key_exists("SourceObjectType",$param) and $param["SourceObjectType"] !== null) {
            $this->SourceObjectType = $param["SourceObjectType"];
        }

        if (array_key_exists("SourceObjectDataType",$param) and $param["SourceObjectDataType"] !== null) {
            $this->SourceObjectDataType = $param["SourceObjectDataType"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("SourceEngineTypes",$param) and $param["SourceEngineTypes"] !== null) {
            $this->SourceEngineTypes = $param["SourceEngineTypes"];
        }

        if (array_key_exists("QualityDim",$param) and $param["QualityDim"] !== null) {
            $this->QualityDim = $param["QualityDim"];
        }

        if (array_key_exists("CompareType",$param) and $param["CompareType"] !== null) {
            $this->CompareType = $param["CompareType"];
        }

        if (array_key_exists("CitationCount",$param) and $param["CitationCount"] !== null) {
            $this->CitationCount = $param["CitationCount"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("WhereFlag",$param) and $param["WhereFlag"] !== null) {
            $this->WhereFlag = $param["WhereFlag"];
        }

        if (array_key_exists("MultiSourceFlag",$param) and $param["MultiSourceFlag"] !== null) {
            $this->MultiSourceFlag = $param["MultiSourceFlag"];
        }

        if (array_key_exists("SqlExpression",$param) and $param["SqlExpression"] !== null) {
            $this->SqlExpression = $param["SqlExpression"];
        }

        if (array_key_exists("SubQualityDim",$param) and $param["SubQualityDim"] !== null) {
            $this->SubQualityDim = $param["SubQualityDim"];
        }
    }
}
