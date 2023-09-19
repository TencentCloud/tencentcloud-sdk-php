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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DSPA评估模版
 *
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取评估模版Id
 * @method void setTemplateId(string $TemplateId) 设置评估模版Id
 * @method string getTemplateName() 获取评估模版名称
 * @method void setTemplateName(string $TemplateName) 设置评估模版名称
 * @method string getDescription() 获取描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取模版来源，内置/用户自定，取值（system，user）
 * @method void setSource(string $Source) 设置模版来源，内置/用户自定，取值（system，user）
 * @method string getUseType() 获取模版类型，自动化/半自动化/问卷，取值（auto，semi-auto，law）等
 * @method void setUseType(string $UseType) 设置模版类型，自动化/半自动化/问卷，取值（auto，semi-auto，law）等
 * @method string getCreatedTime() 获取评估模版创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置评估模版创建时间
 * @method integer getControlItemCount() 获取模版关联的评估项数量
 * @method void setControlItemCount(integer $ControlItemCount) 设置模版关联的评估项数量
 * @method integer getAppliedItemCount() 获取模版已启用的评估项数量
 * @method void setAppliedItemCount(integer $AppliedItemCount) 设置模版已启用的评估项数量
 * @method string getStatus() 获取模版启用状态，草稿/已启用，取值draft / launched
 * @method void setStatus(string $Status) 设置模版启用状态，草稿/已启用，取值draft / launched
 * @method array getSupportDataSource() 获取支持的数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSupportDataSource(array $SupportDataSource) 设置支持的数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsASMTemplate() 获取是否包含攻击面风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsASMTemplate(boolean $IsASMTemplate) 设置是否包含攻击面风险
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdentifyComplianceId() 获取合规组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifyComplianceId(integer $IdentifyComplianceId) 设置合规组id
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssessmentTemplate extends AbstractModel
{
    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 评估模版Id
     */
    public $TemplateId;

    /**
     * @var string 评估模版名称
     */
    public $TemplateName;

    /**
     * @var string 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 模版来源，内置/用户自定，取值（system，user）
     */
    public $Source;

    /**
     * @var string 模版类型，自动化/半自动化/问卷，取值（auto，semi-auto，law）等
     */
    public $UseType;

    /**
     * @var string 评估模版创建时间
     */
    public $CreatedTime;

    /**
     * @var integer 模版关联的评估项数量
     */
    public $ControlItemCount;

    /**
     * @var integer 模版已启用的评估项数量
     */
    public $AppliedItemCount;

    /**
     * @var string 模版启用状态，草稿/已启用，取值draft / launched
     */
    public $Status;

    /**
     * @var array 支持的数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SupportDataSource;

    /**
     * @var boolean 是否包含攻击面风险
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsASMTemplate;

    /**
     * @var integer 合规组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentifyComplianceId;

    /**
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId 评估模版Id
     * @param string $TemplateName 评估模版名称
     * @param string $Description 描述信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source 模版来源，内置/用户自定，取值（system，user）
     * @param string $UseType 模版类型，自动化/半自动化/问卷，取值（auto，semi-auto，law）等
     * @param string $CreatedTime 评估模版创建时间
     * @param integer $ControlItemCount 模版关联的评估项数量
     * @param integer $AppliedItemCount 模版已启用的评估项数量
     * @param string $Status 模版启用状态，草稿/已启用，取值draft / launched
     * @param array $SupportDataSource 支持的数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsASMTemplate 是否包含攻击面风险
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdentifyComplianceId 合规组id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("UseType",$param) and $param["UseType"] !== null) {
            $this->UseType = $param["UseType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("ControlItemCount",$param) and $param["ControlItemCount"] !== null) {
            $this->ControlItemCount = $param["ControlItemCount"];
        }

        if (array_key_exists("AppliedItemCount",$param) and $param["AppliedItemCount"] !== null) {
            $this->AppliedItemCount = $param["AppliedItemCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SupportDataSource",$param) and $param["SupportDataSource"] !== null) {
            $this->SupportDataSource = $param["SupportDataSource"];
        }

        if (array_key_exists("IsASMTemplate",$param) and $param["IsASMTemplate"] !== null) {
            $this->IsASMTemplate = $param["IsASMTemplate"];
        }

        if (array_key_exists("IdentifyComplianceId",$param) and $param["IdentifyComplianceId"] !== null) {
            $this->IdentifyComplianceId = $param["IdentifyComplianceId"];
        }
    }
}
