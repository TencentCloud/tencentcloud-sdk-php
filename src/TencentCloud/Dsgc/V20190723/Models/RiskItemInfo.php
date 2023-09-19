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
 * 最新的风险详情信息数据
 *
 * @method integer getId() 获取最新风险项id
 * @method void setId(integer $Id) 设置最新风险项id
 * @method string getDataSourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceName() 获取数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceName(string $DataSourceName) 设置数据源名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceType() 获取数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceType(string $DataSourceType) 设置数据源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceRegion() 获取资源地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceRegion(string $ResourceRegion) 设置资源地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskType() 获取风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskType(string $RiskType) 设置风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskName() 获取风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskName(string $RiskName) 设置风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskDescription() 获取风险描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDescription(string $RiskDescription) 设置风险描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestAction() 获取建议措施
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestAction(string $SuggestAction) 设置建议措施
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityProduct() 获取安全产品（可能有多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityProduct(array $SecurityProduct) 设置安全产品（可能有多个）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态(waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态(waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScanTime() 获取扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScanTime(string $ScanTime) 设置扫描时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastProcessTime() 获取最后处置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastProcessTime(string $LastProcessTime) 设置最后处置时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdentifyComplianceId() 获取分类分级合规组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifyComplianceId(integer $IdentifyComplianceId) 设置分类分级合规组Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemSubType() 获取类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemSubType(string $ItemSubType) 设置类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskSide() 获取风险面
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskSide(string $RiskSide) 设置风险面
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAPIRiskLinkURL() 获取API安全风险链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAPIRiskLinkURL(string $APIRiskLinkURL) 设置API安全风险链接
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 */
class RiskItemInfo extends AbstractModel
{
    /**
     * @var integer 最新风险项id
     */
    public $Id;

    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceId;

    /**
     * @var string 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceName;

    /**
     * @var string 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceType;

    /**
     * @var string 资源地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceRegion;

    /**
     * @var string 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var string 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskType;

    /**
     * @var string 风险项
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskName;

    /**
     * @var string 风险级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 风险描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDescription;

    /**
     * @var string 建议措施
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuggestAction;

    /**
     * @var array 安全产品（可能有多个）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityProduct;

    /**
     * @var integer 状态(waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScanTime;

    /**
     * @var string 最后处置时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastProcessTime;

    /**
     * @var integer 分类分级合规组Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentifyComplianceId;

    /**
     * @var string 类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemSubType;

    /**
     * @var string 风险面
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskSide;

    /**
     * @var string API安全风险链接
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $APIRiskLinkURL;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @param integer $Id 最新风险项id
     * @param string $DataSourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceName 数据源名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceType 数据源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceRegion 资源地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskType 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskName 风险项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskDescription 风险描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuggestAction 建议措施
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityProduct 安全产品（可能有多个）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态(waiting:待处理，processing:处理中，finished:已处理，ignored:已忽略)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScanTime 扫描时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastProcessTime 最后处置时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdentifyComplianceId 分类分级合规组Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemSubType 类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskSide 风险面
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $APIRiskLinkURL API安全风险链接
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
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

        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("SuggestAction",$param) and $param["SuggestAction"] !== null) {
            $this->SuggestAction = $param["SuggestAction"];
        }

        if (array_key_exists("SecurityProduct",$param) and $param["SecurityProduct"] !== null) {
            $this->SecurityProduct = [];
            foreach ($param["SecurityProduct"] as $key => $value){
                $obj = new SecurityProduct();
                $obj->deserialize($value);
                array_push($this->SecurityProduct, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScanTime",$param) and $param["ScanTime"] !== null) {
            $this->ScanTime = $param["ScanTime"];
        }

        if (array_key_exists("LastProcessTime",$param) and $param["LastProcessTime"] !== null) {
            $this->LastProcessTime = $param["LastProcessTime"];
        }

        if (array_key_exists("IdentifyComplianceId",$param) and $param["IdentifyComplianceId"] !== null) {
            $this->IdentifyComplianceId = $param["IdentifyComplianceId"];
        }

        if (array_key_exists("ItemSubType",$param) and $param["ItemSubType"] !== null) {
            $this->ItemSubType = $param["ItemSubType"];
        }

        if (array_key_exists("RiskSide",$param) and $param["RiskSide"] !== null) {
            $this->RiskSide = $param["RiskSide"];
        }

        if (array_key_exists("APIRiskLinkURL",$param) and $param["APIRiskLinkURL"] !== null) {
            $this->APIRiskLinkURL = $param["APIRiskLinkURL"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
