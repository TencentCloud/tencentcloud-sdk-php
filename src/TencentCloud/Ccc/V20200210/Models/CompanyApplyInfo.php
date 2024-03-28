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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业资质申请信息
 *
 * @method integer getApplicantType() 获取申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicantType(integer $ApplicantType) 设置申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCompanyName() 获取企业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCompanyName(string $CompanyName) 设置企业名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessId() 获取统一社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessId(string $BusinessId) 设置统一社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessIdPicUrl() 获取营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessIdPicUrl(string $BusinessIdPicUrl) 设置营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorporationName() 获取法定代表人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorporationName(string $CorporationName) 设置法定代表人名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorporationId() 获取法定代表人身份证号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorporationId(string $CorporationId) 设置法定代表人身份证号码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorporationIdPicUrl() 获取法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorporationIdPicUrl(string $CorporationIdPicUrl) 设置法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessScope() 获取业务经营范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessScope(string $BusinessScope) 设置业务经营范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAcceptPicUrl() 获取电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAcceptPicUrl(string $AcceptPicUrl) 设置电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNetworkCommitmentPicUrl() 获取电信入网承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetworkCommitmentPicUrl(string $NetworkCommitmentPicUrl) 设置电信入网承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorporationHoldingOnIdPicUrl() 获取法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorporationHoldingOnIdPicUrl(string $CorporationHoldingOnIdPicUrl) 设置法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorName() 获取经办人名称，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorName(string $OperatorName) 设置经办人名称，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorId() 获取经办人证件号码，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorId(string $OperatorId) 设置经办人证件号码，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorIdPicUrl() 获取经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorIdPicUrl(string $OperatorIdPicUrl) 设置经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperatorHoldingOnIdPicUrl() 获取经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperatorHoldingOnIdPicUrl(string $OperatorHoldingOnIdPicUrl) 设置经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCommissionPicUrl() 获取委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCommissionPicUrl(string $CommissionPicUrl) 设置委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
 */
class CompanyApplyInfo extends AbstractModel
{
    /**
     * @var integer 申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicantType;

    /**
     * @var string 企业名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CompanyName;

    /**
     * @var string 统一社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessId;

    /**
     * @var string 营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessIdPicUrl;

    /**
     * @var string 法定代表人名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorporationName;

    /**
     * @var string 法定代表人身份证号码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorporationId;

    /**
     * @var string 法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorporationIdPicUrl;

    /**
     * @var string 业务经营范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessScope;

    /**
     * @var string 电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AcceptPicUrl;

    /**
     * @var string 电信入网承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetworkCommitmentPicUrl;

    /**
     * @var string 法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorporationHoldingOnIdPicUrl;

    /**
     * @var string 经办人名称，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorName;

    /**
     * @var string 经办人证件号码，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorId;

    /**
     * @var string 经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorIdPicUrl;

    /**
     * @var string 经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperatorHoldingOnIdPicUrl;

    /**
     * @var string 委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CommissionPicUrl;

    /**
     * @param integer $ApplicantType 申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CompanyName 企业名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessId 统一社会信用代码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessIdPicUrl 营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CorporationName 法定代表人名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CorporationId 法定代表人身份证号码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CorporationIdPicUrl 法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessScope 业务经营范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AcceptPicUrl 电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NetworkCommitmentPicUrl 电信入网承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CorporationHoldingOnIdPicUrl 法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorName 经办人名称，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorId 经办人证件号码，申请人类型为经办人时必填。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorIdPicUrl 经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperatorHoldingOnIdPicUrl 经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CommissionPicUrl 委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模版参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
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
        if (array_key_exists("ApplicantType",$param) and $param["ApplicantType"] !== null) {
            $this->ApplicantType = $param["ApplicantType"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("BusinessId",$param) and $param["BusinessId"] !== null) {
            $this->BusinessId = $param["BusinessId"];
        }

        if (array_key_exists("BusinessIdPicUrl",$param) and $param["BusinessIdPicUrl"] !== null) {
            $this->BusinessIdPicUrl = $param["BusinessIdPicUrl"];
        }

        if (array_key_exists("CorporationName",$param) and $param["CorporationName"] !== null) {
            $this->CorporationName = $param["CorporationName"];
        }

        if (array_key_exists("CorporationId",$param) and $param["CorporationId"] !== null) {
            $this->CorporationId = $param["CorporationId"];
        }

        if (array_key_exists("CorporationIdPicUrl",$param) and $param["CorporationIdPicUrl"] !== null) {
            $this->CorporationIdPicUrl = $param["CorporationIdPicUrl"];
        }

        if (array_key_exists("BusinessScope",$param) and $param["BusinessScope"] !== null) {
            $this->BusinessScope = $param["BusinessScope"];
        }

        if (array_key_exists("AcceptPicUrl",$param) and $param["AcceptPicUrl"] !== null) {
            $this->AcceptPicUrl = $param["AcceptPicUrl"];
        }

        if (array_key_exists("NetworkCommitmentPicUrl",$param) and $param["NetworkCommitmentPicUrl"] !== null) {
            $this->NetworkCommitmentPicUrl = $param["NetworkCommitmentPicUrl"];
        }

        if (array_key_exists("CorporationHoldingOnIdPicUrl",$param) and $param["CorporationHoldingOnIdPicUrl"] !== null) {
            $this->CorporationHoldingOnIdPicUrl = $param["CorporationHoldingOnIdPicUrl"];
        }

        if (array_key_exists("OperatorName",$param) and $param["OperatorName"] !== null) {
            $this->OperatorName = $param["OperatorName"];
        }

        if (array_key_exists("OperatorId",$param) and $param["OperatorId"] !== null) {
            $this->OperatorId = $param["OperatorId"];
        }

        if (array_key_exists("OperatorIdPicUrl",$param) and $param["OperatorIdPicUrl"] !== null) {
            $this->OperatorIdPicUrl = $param["OperatorIdPicUrl"];
        }

        if (array_key_exists("OperatorHoldingOnIdPicUrl",$param) and $param["OperatorHoldingOnIdPicUrl"] !== null) {
            $this->OperatorHoldingOnIdPicUrl = $param["OperatorHoldingOnIdPicUrl"];
        }

        if (array_key_exists("CommissionPicUrl",$param) and $param["CommissionPicUrl"] !== null) {
            $this->CommissionPicUrl = $param["CommissionPicUrl"];
        }
    }
}
