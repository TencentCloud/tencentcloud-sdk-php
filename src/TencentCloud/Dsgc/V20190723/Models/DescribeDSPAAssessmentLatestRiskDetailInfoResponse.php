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
 * DescribeDSPAAssessmentLatestRiskDetailInfo返回参数结构体
 *
 * @method string getDataSourceId() 获取数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDataSourceName() 获取数据源name
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataSourceName(string $DataSourceName) 设置数据源name
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAssetName() 获取资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetName(string $AssetName) 设置资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAssessmentTemplateId() 获取风险评估模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssessmentTemplateId(integer $AssessmentTemplateId) 设置风险评估模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIdentifyTemplateId() 获取分类分级的模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdentifyTemplateId(integer $IdentifyTemplateId) 设置分类分级的模版id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskType() 获取风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskType(string $RiskType) 设置风险类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskName() 获取风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskName(string $RiskName) 设置风险项
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskDescription() 获取风险的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDescription(string $RiskDescription) 设置风险的描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskLevel() 获取风险的级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskLevel(string $RiskLevel) 设置风险的级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSuggestAction() 获取处置的建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuggestAction(string $SuggestAction) 设置处置的建议
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取处置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置处置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSecurityProduct() 获取安全产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecurityProduct(array $SecurityProduct) 设置安全产品
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRiskDimension() 获取风险归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRiskDimension(string $RiskDimension) 设置风险归属
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRelationAsset() 获取关联数据库（如果风险归属是instance）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelationAsset(array $RelationAsset) 设置关联数据库（如果风险归属是instance）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAccountRiskDetail() 获取风险账号详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountRiskDetail(array $AccountRiskDetail) 设置风险账号详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPrivilegeRiskDetail() 获取权限风险详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPrivilegeRiskDetail(array $PrivilegeRiskDetail) 设置权限风险详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPolicyRiskCosFileList() 获取策略风险的cos风险文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPolicyRiskCosFileList(array $PolicyRiskCosFileList) 设置策略风险的cos风险文件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAKSKLeak() 获取AKSK泄漏列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAKSKLeak(array $AKSKLeak) 设置AKSK泄漏列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentLatestRiskDetailInfoResponse extends AbstractModel
{
    /**
     * @var string 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceId;

    /**
     * @var string 数据源name
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataSourceName;

    /**
     * @var string 资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetName;

    /**
     * @var integer 风险评估模版id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssessmentTemplateId;

    /**
     * @var integer 分类分级的模版id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdentifyTemplateId;

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
     * @var string 风险的描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDescription;

    /**
     * @var string 风险的级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskLevel;

    /**
     * @var string 处置的建议
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuggestAction;

    /**
     * @var integer 处置状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var array 安全产品
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecurityProduct;

    /**
     * @var string 风险归属
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RiskDimension;

    /**
     * @var array 关联数据库（如果风险归属是instance）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelationAsset;

    /**
     * @var array 风险账号详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountRiskDetail;

    /**
     * @var array 权限风险详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PrivilegeRiskDetail;

    /**
     * @var array 策略风险的cos风险文件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PolicyRiskCosFileList;

    /**
     * @var array AKSK泄漏列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AKSKLeak;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DataSourceId 数据源id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DataSourceName 数据源name
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AssetName 资产对象名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AssessmentTemplateId 风险评估模版id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IdentifyTemplateId 分类分级的模版id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskType 风险类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskName 风险项
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskDescription 风险的描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskLevel 风险的级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SuggestAction 处置的建议
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 处置状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SecurityProduct 安全产品
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RiskDimension 风险归属
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RelationAsset 关联数据库（如果风险归属是instance）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AccountRiskDetail 风险账号详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PrivilegeRiskDetail 权限风险详情
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PolicyRiskCosFileList 策略风险的cos风险文件列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AKSKLeak AKSK泄漏列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DataSourceName",$param) and $param["DataSourceName"] !== null) {
            $this->DataSourceName = $param["DataSourceName"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }

        if (array_key_exists("AssessmentTemplateId",$param) and $param["AssessmentTemplateId"] !== null) {
            $this->AssessmentTemplateId = $param["AssessmentTemplateId"];
        }

        if (array_key_exists("IdentifyTemplateId",$param) and $param["IdentifyTemplateId"] !== null) {
            $this->IdentifyTemplateId = $param["IdentifyTemplateId"];
        }

        if (array_key_exists("RiskType",$param) and $param["RiskType"] !== null) {
            $this->RiskType = $param["RiskType"];
        }

        if (array_key_exists("RiskName",$param) and $param["RiskName"] !== null) {
            $this->RiskName = $param["RiskName"];
        }

        if (array_key_exists("RiskDescription",$param) and $param["RiskDescription"] !== null) {
            $this->RiskDescription = $param["RiskDescription"];
        }

        if (array_key_exists("RiskLevel",$param) and $param["RiskLevel"] !== null) {
            $this->RiskLevel = $param["RiskLevel"];
        }

        if (array_key_exists("SuggestAction",$param) and $param["SuggestAction"] !== null) {
            $this->SuggestAction = $param["SuggestAction"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("SecurityProduct",$param) and $param["SecurityProduct"] !== null) {
            $this->SecurityProduct = [];
            foreach ($param["SecurityProduct"] as $key => $value){
                $obj = new SecurityProduct();
                $obj->deserialize($value);
                array_push($this->SecurityProduct, $obj);
            }
        }

        if (array_key_exists("RiskDimension",$param) and $param["RiskDimension"] !== null) {
            $this->RiskDimension = $param["RiskDimension"];
        }

        if (array_key_exists("RelationAsset",$param) and $param["RelationAsset"] !== null) {
            $this->RelationAsset = $param["RelationAsset"];
        }

        if (array_key_exists("AccountRiskDetail",$param) and $param["AccountRiskDetail"] !== null) {
            $this->AccountRiskDetail = [];
            foreach ($param["AccountRiskDetail"] as $key => $value){
                $obj = new AccountRisk();
                $obj->deserialize($value);
                array_push($this->AccountRiskDetail, $obj);
            }
        }

        if (array_key_exists("PrivilegeRiskDetail",$param) and $param["PrivilegeRiskDetail"] !== null) {
            $this->PrivilegeRiskDetail = [];
            foreach ($param["PrivilegeRiskDetail"] as $key => $value){
                $obj = new PrivilegeRisk();
                $obj->deserialize($value);
                array_push($this->PrivilegeRiskDetail, $obj);
            }
        }

        if (array_key_exists("PolicyRiskCosFileList",$param) and $param["PolicyRiskCosFileList"] !== null) {
            $this->PolicyRiskCosFileList = $param["PolicyRiskCosFileList"];
        }

        if (array_key_exists("AKSKLeak",$param) and $param["AKSKLeak"] !== null) {
            $this->AKSKLeak = [];
            foreach ($param["AKSKLeak"] as $key => $value){
                $obj = new AKSKLeak();
                $obj->deserialize($value);
                array_push($this->AKSKLeak, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
