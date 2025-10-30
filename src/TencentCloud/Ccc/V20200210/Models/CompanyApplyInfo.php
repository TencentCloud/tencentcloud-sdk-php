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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 企业资质申请信息
 *
 * @method integer getApplicantType() 获取申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
 * @method void setApplicantType(integer $ApplicantType) 设置申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
 * @method string getCompanyName() 获取企业名称
 * @method void setCompanyName(string $CompanyName) 设置企业名称
 * @method string getBusinessId() 获取统一社会信用代码
 * @method void setBusinessId(string $BusinessId) 设置统一社会信用代码
 * @method string getBusinessIdPicUrl() 获取营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setBusinessIdPicUrl(string $BusinessIdPicUrl) 设置营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getCorporationName() 获取法定代表人名称
 * @method void setCorporationName(string $CorporationName) 设置法定代表人名称
 * @method string getCorporationId() 获取法定代表人身份证号码
 * @method void setCorporationId(string $CorporationId) 设置法定代表人身份证号码
 * @method string getCorporationIdPicUrl() 获取法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setCorporationIdPicUrl(string $CorporationIdPicUrl) 设置法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getNetworkCommitmentPicUrl() 获取安全合规使用承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setNetworkCommitmentPicUrl(string $NetworkCommitmentPicUrl) 设置安全合规使用承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method integer getIsEqualTencentCloud() 获取是否与腾讯云账号的资质一致,0-不一致,1-一致
 * @method void setIsEqualTencentCloud(integer $IsEqualTencentCloud) 设置是否与腾讯云账号的资质一致,0-不一致,1-一致
 * @method string getCorporationMobile() 获取法定代表人手机号
 * @method void setCorporationMobile(string $CorporationMobile) 设置法定代表人手机号
 * @method string getCorporationMobilePicUrl() 获取法定代表人手机号码实名认证。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setCorporationMobilePicUrl(string $CorporationMobilePicUrl) 设置法定代表人手机号码实名认证。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getUseDescribeFileUrl() 获取通话话术。(支持doc、docx格式的文档不超过50MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setUseDescribeFileUrl(string $UseDescribeFileUrl) 设置通话话术。(支持doc、docx格式的文档不超过50MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getCompanyAuthLetterPicUrl() 获取公司授权函。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setCompanyAuthLetterPicUrl(string $CompanyAuthLetterPicUrl) 设置公司授权函。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getAcceptPicUrl() 获取电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setAcceptPicUrl(string $AcceptPicUrl) 设置电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getCorporationHoldingOnIdPicUrl() 获取法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setCorporationHoldingOnIdPicUrl(string $CorporationHoldingOnIdPicUrl) 设置法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getOperatorName() 获取经办人名称，申请人类型为经办人时必填。
 * @method void setOperatorName(string $OperatorName) 设置经办人名称，申请人类型为经办人时必填。
 * @method string getOperatorId() 获取经办人证件号码，申请人类型为经办人时必填。
 * @method void setOperatorId(string $OperatorId) 设置经办人证件号码，申请人类型为经办人时必填。
 * @method string getOperatorIdPicUrl() 获取经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setOperatorIdPicUrl(string $OperatorIdPicUrl) 设置经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getOperatorHoldingOnIdPicUrl() 获取经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setOperatorHoldingOnIdPicUrl(string $OperatorHoldingOnIdPicUrl) 设置经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getCommissionPicUrl() 获取委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setCommissionPicUrl(string $CommissionPicUrl) 设置委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method string getOperatorMobile() 获取经办人手机号，申请人类型为经办人时必填。
 * @method void setOperatorMobile(string $OperatorMobile) 设置经办人手机号，申请人类型为经办人时必填。
 * @method string getOperatorEmail() 获取经办人邮箱，申请人类型为经办人时必填。
 * @method void setOperatorEmail(string $OperatorEmail) 设置经办人邮箱，申请人类型为经办人时必填。
 * @method string getOperatorMobilePicUrl() 获取经办人手机号码实名认证，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 * @method void setOperatorMobilePicUrl(string $OperatorMobilePicUrl) 设置经办人手机号码实名认证，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
 */
class CompanyApplyInfo extends AbstractModel
{
    /**
     * @var integer 申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
     */
    public $ApplicantType;

    /**
     * @var string 企业名称
     */
    public $CompanyName;

    /**
     * @var string 统一社会信用代码
     */
    public $BusinessId;

    /**
     * @var string 营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $BusinessIdPicUrl;

    /**
     * @var string 法定代表人名称
     */
    public $CorporationName;

    /**
     * @var string 法定代表人身份证号码
     */
    public $CorporationId;

    /**
     * @var string 法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $CorporationIdPicUrl;

    /**
     * @var string 安全合规使用承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $NetworkCommitmentPicUrl;

    /**
     * @var integer 是否与腾讯云账号的资质一致,0-不一致,1-一致
     */
    public $IsEqualTencentCloud;

    /**
     * @var string 法定代表人手机号
     */
    public $CorporationMobile;

    /**
     * @var string 法定代表人手机号码实名认证。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $CorporationMobilePicUrl;

    /**
     * @var string 通话话术。(支持doc、docx格式的文档不超过50MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $UseDescribeFileUrl;

    /**
     * @var string 公司授权函。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $CompanyAuthLetterPicUrl;

    /**
     * @var string 电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $AcceptPicUrl;

    /**
     * @var string 法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $CorporationHoldingOnIdPicUrl;

    /**
     * @var string 经办人名称，申请人类型为经办人时必填。
     */
    public $OperatorName;

    /**
     * @var string 经办人证件号码，申请人类型为经办人时必填。
     */
    public $OperatorId;

    /**
     * @var string 经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $OperatorIdPicUrl;

    /**
     * @var string 经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $OperatorHoldingOnIdPicUrl;

    /**
     * @var string 委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $CommissionPicUrl;

    /**
     * @var string 经办人手机号，申请人类型为经办人时必填。
     */
    public $OperatorMobile;

    /**
     * @var string 经办人邮箱，申请人类型为经办人时必填。
     */
    public $OperatorEmail;

    /**
     * @var string 经办人手机号码实名认证，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     */
    public $OperatorMobilePicUrl;

    /**
     * @param integer $ApplicantType 申请人身份，0-公司法定代表人，1-经办人（受法定代表人委托）
     * @param string $CompanyName 企业名称
     * @param string $BusinessId 统一社会信用代码
     * @param string $BusinessIdPicUrl 营业执照扫描件(加盖公章)。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $CorporationName 法定代表人名称
     * @param string $CorporationId 法定代表人身份证号码
     * @param string $CorporationIdPicUrl 法定代表人身份证正反面扫描件。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $NetworkCommitmentPicUrl 安全合规使用承诺书。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param integer $IsEqualTencentCloud 是否与腾讯云账号的资质一致,0-不一致,1-一致
     * @param string $CorporationMobile 法定代表人手机号
     * @param string $CorporationMobilePicUrl 法定代表人手机号码实名认证。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $UseDescribeFileUrl 通话话术。(支持doc、docx格式的文档不超过50MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $CompanyAuthLetterPicUrl 公司授权函。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $AcceptPicUrl 电话受理单。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $CorporationHoldingOnIdPicUrl 法定代表人手持身份证照，申请人类型为法定代表人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $OperatorName 经办人名称，申请人类型为经办人时必填。
     * @param string $OperatorId 经办人证件号码，申请人类型为经办人时必填。
     * @param string $OperatorIdPicUrl 经办人身份证正反面扫描件，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $OperatorHoldingOnIdPicUrl 经办人手持身份证照，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $CommissionPicUrl 委托授权书，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
     * @param string $OperatorMobile 经办人手机号，申请人类型为经办人时必填。
     * @param string $OperatorEmail 经办人邮箱，申请人类型为经办人时必填。
     * @param string $OperatorMobilePicUrl 经办人手机号码实名认证，申请人类型为经办人时必填。(支持jpg、png、gif、jpeg格式的图片，每张图片应大于50K，不超过5MB，模板参见控制台:https://console.cloud.tencent.com/ccc/enterprise/update)
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

        if (array_key_exists("NetworkCommitmentPicUrl",$param) and $param["NetworkCommitmentPicUrl"] !== null) {
            $this->NetworkCommitmentPicUrl = $param["NetworkCommitmentPicUrl"];
        }

        if (array_key_exists("IsEqualTencentCloud",$param) and $param["IsEqualTencentCloud"] !== null) {
            $this->IsEqualTencentCloud = $param["IsEqualTencentCloud"];
        }

        if (array_key_exists("CorporationMobile",$param) and $param["CorporationMobile"] !== null) {
            $this->CorporationMobile = $param["CorporationMobile"];
        }

        if (array_key_exists("CorporationMobilePicUrl",$param) and $param["CorporationMobilePicUrl"] !== null) {
            $this->CorporationMobilePicUrl = $param["CorporationMobilePicUrl"];
        }

        if (array_key_exists("UseDescribeFileUrl",$param) and $param["UseDescribeFileUrl"] !== null) {
            $this->UseDescribeFileUrl = $param["UseDescribeFileUrl"];
        }

        if (array_key_exists("CompanyAuthLetterPicUrl",$param) and $param["CompanyAuthLetterPicUrl"] !== null) {
            $this->CompanyAuthLetterPicUrl = $param["CompanyAuthLetterPicUrl"];
        }

        if (array_key_exists("AcceptPicUrl",$param) and $param["AcceptPicUrl"] !== null) {
            $this->AcceptPicUrl = $param["AcceptPicUrl"];
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

        if (array_key_exists("OperatorMobile",$param) and $param["OperatorMobile"] !== null) {
            $this->OperatorMobile = $param["OperatorMobile"];
        }

        if (array_key_exists("OperatorEmail",$param) and $param["OperatorEmail"] !== null) {
            $this->OperatorEmail = $param["OperatorEmail"];
        }

        if (array_key_exists("OperatorMobilePicUrl",$param) and $param["OperatorMobilePicUrl"] !== null) {
            $this->OperatorMobilePicUrl = $param["OperatorMobilePicUrl"];
        }
    }
}
