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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAAssessmentLatestRiskDetailInfo返回参数结构体
 *
 * @method string getDataSourceId() 获取数据源id
 * @method void setDataSourceId(string $DataSourceId) 设置数据源id
 * @method string getDataSourceName() 获取数据源name
 * @method void setDataSourceName(string $DataSourceName) 设置数据源name
 * @method string getAssetName() 获取资产对象名称
 * @method void setAssetName(string $AssetName) 设置资产对象名称
 * @method integer getAssessmentTemplateId() 获取风险评估模板id
 * @method void setAssessmentTemplateId(integer $AssessmentTemplateId) 设置风险评估模板id
 * @method integer getIdentifyTemplateId() 获取分类分级的模板id
 * @method void setIdentifyTemplateId(integer $IdentifyTemplateId) 设置分类分级的模板id
 * @method string getRiskType() 获取风险类型
 * @method void setRiskType(string $RiskType) 设置风险类型
 * @method string getRiskName() 获取风险项
 * @method void setRiskName(string $RiskName) 设置风险项
 * @method string getRiskDescription() 获取风险的描述
 * @method void setRiskDescription(string $RiskDescription) 设置风险的描述
 * @method string getRiskLevel() 获取风险的级别
 * @method void setRiskLevel(string $RiskLevel) 设置风险的级别
 * @method string getSuggestAction() 获取处置的建议
 * @method void setSuggestAction(string $SuggestAction) 设置处置的建议
 * @method integer getStatus() 获取处置状态
 * @method void setStatus(integer $Status) 设置处置状态
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method array getSecurityProduct() 获取安全产品
 * @method void setSecurityProduct(array $SecurityProduct) 设置安全产品
 * @method string getRiskDimension() 获取风险归属
 * @method void setRiskDimension(string $RiskDimension) 设置风险归属
 * @method array getRelationAsset() 获取关联数据库（如果风险归属是instance）
 * @method void setRelationAsset(array $RelationAsset) 设置关联数据库（如果风险归属是instance）
 * @method array getAccountRiskDetail() 获取风险账号详情
 * @method void setAccountRiskDetail(array $AccountRiskDetail) 设置风险账号详情
 * @method array getPrivilegeRiskDetail() 获取权限风险详情
 * @method void setPrivilegeRiskDetail(array $PrivilegeRiskDetail) 设置权限风险详情
 * @method array getPolicyRiskCosFileList() 获取策略风险的cos风险文件列表
 * @method void setPolicyRiskCosFileList(array $PolicyRiskCosFileList) 设置策略风险的cos风险文件列表
 * @method array getAKSKLeak() 获取AKSK泄漏列表
 * @method void setAKSKLeak(array $AKSKLeak) 设置AKSK泄漏列表
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDSPAAssessmentLatestRiskDetailInfoResponse extends AbstractModel
{
    /**
     * @var string 数据源id
     */
    public $DataSourceId;

    /**
     * @var string 数据源name
     */
    public $DataSourceName;

    /**
     * @var string 资产对象名称
     */
    public $AssetName;

    /**
     * @var integer 风险评估模板id
     */
    public $AssessmentTemplateId;

    /**
     * @var integer 分类分级的模板id
     */
    public $IdentifyTemplateId;

    /**
     * @var string 风险类型
     */
    public $RiskType;

    /**
     * @var string 风险项
     */
    public $RiskName;

    /**
     * @var string 风险的描述
     */
    public $RiskDescription;

    /**
     * @var string 风险的级别
     */
    public $RiskLevel;

    /**
     * @var string 处置的建议
     */
    public $SuggestAction;

    /**
     * @var integer 处置状态
     */
    public $Status;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var array 安全产品
     */
    public $SecurityProduct;

    /**
     * @var string 风险归属
     */
    public $RiskDimension;

    /**
     * @var array 关联数据库（如果风险归属是instance）
     */
    public $RelationAsset;

    /**
     * @var array 风险账号详情
     */
    public $AccountRiskDetail;

    /**
     * @var array 权限风险详情
     */
    public $PrivilegeRiskDetail;

    /**
     * @var array 策略风险的cos风险文件列表
     */
    public $PolicyRiskCosFileList;

    /**
     * @var array AKSK泄漏列表
     */
    public $AKSKLeak;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $DataSourceId 数据源id
     * @param string $DataSourceName 数据源name
     * @param string $AssetName 资产对象名称
     * @param integer $AssessmentTemplateId 风险评估模板id
     * @param integer $IdentifyTemplateId 分类分级的模板id
     * @param string $RiskType 风险类型
     * @param string $RiskName 风险项
     * @param string $RiskDescription 风险的描述
     * @param string $RiskLevel 风险的级别
     * @param string $SuggestAction 处置的建议
     * @param integer $Status 处置状态
     * @param string $Remark 备注
     * @param array $SecurityProduct 安全产品
     * @param string $RiskDimension 风险归属
     * @param array $RelationAsset 关联数据库（如果风险归属是instance）
     * @param array $AccountRiskDetail 风险账号详情
     * @param array $PrivilegeRiskDetail 权限风险详情
     * @param array $PolicyRiskCosFileList 策略风险的cos风险文件列表
     * @param array $AKSKLeak AKSK泄漏列表
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
