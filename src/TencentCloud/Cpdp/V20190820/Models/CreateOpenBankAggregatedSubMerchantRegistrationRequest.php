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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateOpenBankAggregatedSubMerchantRegistration请求参数结构体
 *
 * @method string getOutRegistrationNo() 获取外部进件序列号。
 * @method void setOutRegistrationNo(string $OutRegistrationNo) 设置外部进件序列号。
 * @method string getChannelMerchantId() 获取渠道商户ID。
 * @method void setChannelMerchantId(string $ChannelMerchantId) 设置渠道商户ID。
 * @method string getOutSubMerchantId() 获取外部子商户ID。
 * @method void setOutSubMerchantId(string $OutSubMerchantId) 设置外部子商户ID。
 * @method string getChannelName() 获取渠道名称。详见附录-云企付枚举类说明-ChannelName。
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
 * @method void setChannelName(string $ChannelName) 设置渠道名称。详见附录-云企付枚举类说明-ChannelName。
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
 * @method string getOutSubMerchantType() 获取外部子商户类型。
ENTERPRISE：企业商户 
INSTITUTION：事业单位商户 
INDIVIDUALBISS：个体工商户 
PERSON：个人商户(小微商户) 
SUBJECT_TYPE_OTHERS：其他组织
 * @method void setOutSubMerchantType(string $OutSubMerchantType) 设置外部子商户类型。
ENTERPRISE：企业商户 
INSTITUTION：事业单位商户 
INDIVIDUALBISS：个体工商户 
PERSON：个人商户(小微商户) 
SUBJECT_TYPE_OTHERS：其他组织
 * @method string getOutSubMerchantName() 获取外部子商户名称。
HELIPAY渠道(长度不能小于5大于150)。
 * @method void setOutSubMerchantName(string $OutSubMerchantName) 设置外部子商户名称。
HELIPAY渠道(长度不能小于5大于150)。
 * @method LegalPersonInfo getLegalPersonInfo() 获取商户法人代表信息。
 * @method void setLegalPersonInfo(LegalPersonInfo $LegalPersonInfo) 设置商户法人代表信息。
 * @method BusinessLicenseInfo getBusinessLicenseInfo() 获取营业证件信息。
 * @method void setBusinessLicenseInfo(BusinessLicenseInfo $BusinessLicenseInfo) 设置营业证件信息。
 * @method string getInterConnectionSubMerchantData() 获取支付渠道子商户进件信息。
json字符串，详情见附录-复杂类型-InterConnectionSubMerchantData。
 * @method void setInterConnectionSubMerchantData(string $InterConnectionSubMerchantData) 设置支付渠道子商户进件信息。
json字符串，详情见附录-复杂类型-InterConnectionSubMerchantData。
 * @method string getPaymentMethod() 获取支付方式。详见附录-云企付枚举类说明-PaymentMethod。
合利宝渠道不需要传。
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式。详见附录-云企付枚举类说明-PaymentMethod。
合利宝渠道不需要传。
 * @method string getOutSubMerchantShortName() 获取外部子商户简称。
HELIPAY渠道必传(长度不能小于2大于20)。
 * @method void setOutSubMerchantShortName(string $OutSubMerchantShortName) 设置外部子商户简称。
HELIPAY渠道必传(长度不能小于2大于20)。
 * @method string getOutSubMerchantDescription() 获取外部子商户描述。
 * @method void setOutSubMerchantDescription(string $OutSubMerchantDescription) 设置外部子商户描述。
 * @method string getNotifyUrl() 获取通知地址。
 * @method void setNotifyUrl(string $NotifyUrl) 设置通知地址。
 * @method array getNaturalPersonList() 获取相关自然人信息列表。
HELIPAY渠道必传业务联系人。
 * @method void setNaturalPersonList(array $NaturalPersonList) 设置相关自然人信息列表。
HELIPAY渠道必传业务联系人。
 * @method SettleInfo getSettleInfo() 获取商户结算信息。
HELIPAY渠道必传。
 * @method void setSettleInfo(SettleInfo $SettleInfo) 设置商户结算信息。
HELIPAY渠道必传。
 * @method OutSubMerchantExtensionInfo getOutSubMerchantExtensionInfo() 获取外部子商户其他公用扩展信息。
HELIPAY渠道必传。
 * @method void setOutSubMerchantExtensionInfo(OutSubMerchantExtensionInfo $OutSubMerchantExtensionInfo) 设置外部子商户其他公用扩展信息。
HELIPAY渠道必传。
 * @method string getEnvironment() 获取环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 * @method void setEnvironment(string $Environment) 设置环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
 */
class CreateOpenBankAggregatedSubMerchantRegistrationRequest extends AbstractModel
{
    /**
     * @var string 外部进件序列号。
     */
    public $OutRegistrationNo;

    /**
     * @var string 渠道商户ID。
     */
    public $ChannelMerchantId;

    /**
     * @var string 外部子商户ID。
     */
    public $OutSubMerchantId;

    /**
     * @var string 渠道名称。详见附录-云企付枚举类说明-ChannelName。
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
     */
    public $ChannelName;

    /**
     * @var string 外部子商户类型。
ENTERPRISE：企业商户 
INSTITUTION：事业单位商户 
INDIVIDUALBISS：个体工商户 
PERSON：个人商户(小微商户) 
SUBJECT_TYPE_OTHERS：其他组织
     */
    public $OutSubMerchantType;

    /**
     * @var string 外部子商户名称。
HELIPAY渠道(长度不能小于5大于150)。
     */
    public $OutSubMerchantName;

    /**
     * @var LegalPersonInfo 商户法人代表信息。
     */
    public $LegalPersonInfo;

    /**
     * @var BusinessLicenseInfo 营业证件信息。
     */
    public $BusinessLicenseInfo;

    /**
     * @var string 支付渠道子商户进件信息。
json字符串，详情见附录-复杂类型-InterConnectionSubMerchantData。
     */
    public $InterConnectionSubMerchantData;

    /**
     * @var string 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
合利宝渠道不需要传。
     */
    public $PaymentMethod;

    /**
     * @var string 外部子商户简称。
HELIPAY渠道必传(长度不能小于2大于20)。
     */
    public $OutSubMerchantShortName;

    /**
     * @var string 外部子商户描述。
     */
    public $OutSubMerchantDescription;

    /**
     * @var string 通知地址。
     */
    public $NotifyUrl;

    /**
     * @var array 相关自然人信息列表。
HELIPAY渠道必传业务联系人。
     */
    public $NaturalPersonList;

    /**
     * @var SettleInfo 商户结算信息。
HELIPAY渠道必传。
     */
    public $SettleInfo;

    /**
     * @var OutSubMerchantExtensionInfo 外部子商户其他公用扩展信息。
HELIPAY渠道必传。
     */
    public $OutSubMerchantExtensionInfo;

    /**
     * @var string 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
     */
    public $Environment;

    /**
     * @param string $OutRegistrationNo 外部进件序列号。
     * @param string $ChannelMerchantId 渠道商户ID。
     * @param string $OutSubMerchantId 外部子商户ID。
     * @param string $ChannelName 渠道名称。详见附录-云企付枚举类说明-ChannelName。
TENPAY: 商企付
WECHAT: 微信支付
ALIPAY: 支付宝
HELIPAY:合利宝
     * @param string $OutSubMerchantType 外部子商户类型。
ENTERPRISE：企业商户 
INSTITUTION：事业单位商户 
INDIVIDUALBISS：个体工商户 
PERSON：个人商户(小微商户) 
SUBJECT_TYPE_OTHERS：其他组织
     * @param string $OutSubMerchantName 外部子商户名称。
HELIPAY渠道(长度不能小于5大于150)。
     * @param LegalPersonInfo $LegalPersonInfo 商户法人代表信息。
     * @param BusinessLicenseInfo $BusinessLicenseInfo 营业证件信息。
     * @param string $InterConnectionSubMerchantData 支付渠道子商户进件信息。
json字符串，详情见附录-复杂类型-InterConnectionSubMerchantData。
     * @param string $PaymentMethod 支付方式。详见附录-云企付枚举类说明-PaymentMethod。
合利宝渠道不需要传。
     * @param string $OutSubMerchantShortName 外部子商户简称。
HELIPAY渠道必传(长度不能小于2大于20)。
     * @param string $OutSubMerchantDescription 外部子商户描述。
     * @param string $NotifyUrl 通知地址。
     * @param array $NaturalPersonList 相关自然人信息列表。
HELIPAY渠道必传业务联系人。
     * @param SettleInfo $SettleInfo 商户结算信息。
HELIPAY渠道必传。
     * @param OutSubMerchantExtensionInfo $OutSubMerchantExtensionInfo 外部子商户其他公用扩展信息。
HELIPAY渠道必传。
     * @param string $Environment 环境类型。
__release__:生产环境
__sandbox__:沙箱环境
_不填默认为生产环境_
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
        if (array_key_exists("OutRegistrationNo",$param) and $param["OutRegistrationNo"] !== null) {
            $this->OutRegistrationNo = $param["OutRegistrationNo"];
        }

        if (array_key_exists("ChannelMerchantId",$param) and $param["ChannelMerchantId"] !== null) {
            $this->ChannelMerchantId = $param["ChannelMerchantId"];
        }

        if (array_key_exists("OutSubMerchantId",$param) and $param["OutSubMerchantId"] !== null) {
            $this->OutSubMerchantId = $param["OutSubMerchantId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("OutSubMerchantType",$param) and $param["OutSubMerchantType"] !== null) {
            $this->OutSubMerchantType = $param["OutSubMerchantType"];
        }

        if (array_key_exists("OutSubMerchantName",$param) and $param["OutSubMerchantName"] !== null) {
            $this->OutSubMerchantName = $param["OutSubMerchantName"];
        }

        if (array_key_exists("LegalPersonInfo",$param) and $param["LegalPersonInfo"] !== null) {
            $this->LegalPersonInfo = new LegalPersonInfo();
            $this->LegalPersonInfo->deserialize($param["LegalPersonInfo"]);
        }

        if (array_key_exists("BusinessLicenseInfo",$param) and $param["BusinessLicenseInfo"] !== null) {
            $this->BusinessLicenseInfo = new BusinessLicenseInfo();
            $this->BusinessLicenseInfo->deserialize($param["BusinessLicenseInfo"]);
        }

        if (array_key_exists("InterConnectionSubMerchantData",$param) and $param["InterConnectionSubMerchantData"] !== null) {
            $this->InterConnectionSubMerchantData = $param["InterConnectionSubMerchantData"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("OutSubMerchantShortName",$param) and $param["OutSubMerchantShortName"] !== null) {
            $this->OutSubMerchantShortName = $param["OutSubMerchantShortName"];
        }

        if (array_key_exists("OutSubMerchantDescription",$param) and $param["OutSubMerchantDescription"] !== null) {
            $this->OutSubMerchantDescription = $param["OutSubMerchantDescription"];
        }

        if (array_key_exists("NotifyUrl",$param) and $param["NotifyUrl"] !== null) {
            $this->NotifyUrl = $param["NotifyUrl"];
        }

        if (array_key_exists("NaturalPersonList",$param) and $param["NaturalPersonList"] !== null) {
            $this->NaturalPersonList = [];
            foreach ($param["NaturalPersonList"] as $key => $value){
                $obj = new NaturalPersonInfo();
                $obj->deserialize($value);
                array_push($this->NaturalPersonList, $obj);
            }
        }

        if (array_key_exists("SettleInfo",$param) and $param["SettleInfo"] !== null) {
            $this->SettleInfo = new SettleInfo();
            $this->SettleInfo->deserialize($param["SettleInfo"]);
        }

        if (array_key_exists("OutSubMerchantExtensionInfo",$param) and $param["OutSubMerchantExtensionInfo"] !== null) {
            $this->OutSubMerchantExtensionInfo = new OutSubMerchantExtensionInfo();
            $this->OutSubMerchantExtensionInfo->deserialize($param["OutSubMerchantExtensionInfo"]);
        }

        if (array_key_exists("Environment",$param) and $param["Environment"] !== null) {
            $this->Environment = $param["Environment"];
        }
    }
}
