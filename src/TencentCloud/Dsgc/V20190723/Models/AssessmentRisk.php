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
 * DSPA评估风险项
 *
 * @method string getRiskId() 获取风险项Id
 * @method void setRiskId(string $RiskId) 设置风险项Id
 * @method string getRiskDescription() 获取风险项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDescription(string $RiskDescription) 设置风险项描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取评估模版Id
 * @method void setTemplateId(string $TemplateId) 设置评估模版Id
 * @method string getTemplateName() 获取评估模版名称
 * @method void setTemplateName(string $TemplateName) 设置评估模版名称
 * @method string getControlItemId() 获取评估项Id
 * @method void setControlItemId(string $ControlItemId) 设置评估项Id
 * @method string getControlItemName() 获取评估项名称
 * @method void setControlItemName(string $ControlItemName) 设置评估项名称
 * @method string getControlItemDesc() 获取评估描述
 * @method void setControlItemDesc(string $ControlItemDesc) 设置评估描述
 * @method string getRiskLevel() 获取风险等级，取值（high，medium，low）
 * @method void setRiskLevel(string $RiskLevel) 设置风险等级，取值（high，medium，low）
 * @method string getRiskMitigation() 获取风险缓解措施
 * @method void setRiskMitigation(string $RiskMitigation) 设置风险缓解措施
 * @method string getStatus() 获取风险处理状态。(waiting待处理, processing处理中, finished已处理)
 * @method void setStatus(string $Status) 设置风险处理状态。(waiting待处理, processing处理中, finished已处理)
 * @method string getCreatedTime() 获取风险生成时间
 * @method void setCreatedTime(string $CreatedTime) 设置风险生成时间
 * @method string getRiskOwner() 获取风险负责人
 * @method void setRiskOwner(string $RiskOwner) 设置风险负责人
 * @method string getRelatedAsset() 获取风险涉及资产
 * @method void setRelatedAsset(string $RelatedAsset) 设置风险涉及资产
 * @method string getDataSourceId() 获取风险涉及资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceId(string $DataSourceId) 设置风险涉及资产id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceName() 获取风险涉及资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceName(string $DataSourceName) 设置风险涉及资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityProduct() 获取建议使用安全产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityProduct(array $SecurityProduct) 设置建议使用安全产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskType() 获取风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskType(string $RiskType) 设置风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskSide() 获取风险面
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskSide(string $RiskSide) 设置风险面
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class AssessmentRisk extends AbstractModel
{
    /**
     * @var string 风险项Id
     */
    public $RiskId;

    /**
     * @var string 风险项描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDescription;

    /**
     * @var string 评估模版Id
     */
    public $TemplateId;

    /**
     * @var string 评估模版名称
     */
    public $TemplateName;

    /**
     * @var string 评估项Id
     */
    public $ControlItemId;

    /**
     * @var string 评估项名称
     */
    public $ControlItemName;

    /**
     * @var string 评估描述
     */
    public $ControlItemDesc;

    /**
     * @var string 风险等级，取值（high，medium，low）
     */
    public $RiskLevel;

    /**
     * @var string 风险缓解措施
     */
    public $RiskMitigation;

    /**
     * @var string 风险处理状态。(waiting待处理, processing处理中, finished已处理)
     */
    public $Status;

    /**
     * @var string 风险生成时间
     */
    public $CreatedTime;

    /**
     * @var string 风险负责人
     */
    public $RiskOwner;

    /**
     * @var string 风险涉及资产
     */
    public $RelatedAsset;

    /**
     * @var string 风险涉及资产id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceId;

    /**
     * @var string 风险涉及资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceName;

    /**
     * @var string 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var array 建议使用安全产品
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityProduct;

    /**
     * @var string 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskType;

    /**
     * @var string 风险面
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskSide;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceType;

    /**
     * @param string $RiskId 风险项Id
     * @param string $RiskDescription 风险项描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId 评估模版Id
     * @param string $TemplateName 评估模版名称
     * @param string $ControlItemId 评估项Id
     * @param string $ControlItemName 评估项名称
     * @param string $ControlItemDesc 评估描述
     * @param string $RiskLevel 风险等级，取值（high，medium，low）
     * @param string $RiskMitigation 风险缓解措施
     * @param string $Status 风险处理状态。(waiting待处理, processing处理中, finished已处理)
     * @param string $CreatedTime 风险生成时间
     * @param string $RiskOwner 风险负责人
     * @param string $RelatedAsset 风险涉及资产
     * @param string $DataSourceId 风险涉及资产id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceName 风险涉及资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityProduct 建议使用安全产品
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskType 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskSide 风险面
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceType 数据源类型
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
        if (array_key_exists("RiskId",$param) and $param["RiskId"] !== null) {
            $this->RiskId = $param["RiskId"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("ControlItemId",$param) and $param["ControlItemId"] !== null) {
            $this->ControlItemId = $param["ControlItemId"];
        }

        if (array_key_exists("ControlItemName",$param) and $param["ControlItemName"] !== null) {
            $this->ControlItemName = $param["ControlItemName"];
        }

        if (array_key_exists("ControlItemDesc",$param) and $param["ControlItemDesc"] !== null) {
            $this->ControlItemDesc = $param["ControlItemDesc"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskMitigation",$param) and $param["RiskMitigation"] !== null) {
            $this->RiskMitigation = $param["RiskMitigation"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("RiskOwner",$param) and $param["RiskOwner"] !== null) {
            $this->RiskOwner = $param["RiskOwner"];
        }

        if (array_key_exists("RelatedAsset",$param) and $param["RelatedAsset"] !== null) {
            $this->RelatedAsset = $param["RelatedAsset"];
        }

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("SecurityProduct",$param) and $param["SecurityProduct"] !== null) {
            $this->SecurityProduct = [];
            foreach ($param["SecurityProduct"] as $key => $value){
                $obj = new SecurityProduct();
                $obj->deserialize($value);
                array_push($this->SecurityProduct, $obj);
            }
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RiskSide",$param) and $param["RiskSide"] !== null) {
            $this->RiskSide = $param["RiskSide"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }
    }
}
