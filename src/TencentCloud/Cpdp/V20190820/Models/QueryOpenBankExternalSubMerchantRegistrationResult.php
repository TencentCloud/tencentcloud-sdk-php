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
 * 第三方子商户进件结果查询返回结果
 *
 * @method string getRegistrationStatus() 获取进件状态。
__SUCCESS__: 进件成功
__FAILED__: 进件失败
__PROCESSING__: 进件中
 * @method void setRegistrationStatus(string $RegistrationStatus) 设置进件状态。
__SUCCESS__: 进件成功
__FAILED__: 进件失败
__PROCESSING__: 进件中
 * @method string getRegistrationMessage() 获取进件返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegistrationMessage(string $RegistrationMessage) 设置进件返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelRegistrationNo() 获取渠道进件号。
 * @method void setChannelRegistrationNo(string $ChannelRegistrationNo) 设置渠道进件号。
 * @method string getChannelSubMerchantId() 获取渠道子商户ID（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelSubMerchantId(string $ChannelSubMerchantId) 设置渠道子商户ID（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutSubMerchantName() 获取外部子商户名称（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutSubMerchantName(string $OutSubMerchantName) 设置外部子商户名称（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelName() 获取渠道名称（进件成功返回）。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelName(string $ChannelName) 设置渠道名称（进件成功返回）。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPaymentMethod() 获取支付方式（进件成功返回）。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPaymentMethod(string $PaymentMethod) 设置支付方式（进件成功返回）。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBusinessLicenseNumber() 获取社会信用代码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBusinessLicenseNumber(string $BusinessLicenseNumber) 设置社会信用代码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLegalName() 获取法人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLegalName(string $LegalName) 设置法人姓名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalReturnData() 获取第三方渠道查询进件返回数据。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalReturnData(string $ExternalReturnData) 设置第三方渠道查询进件返回数据。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankExternalSubMerchantRegistrationResult extends AbstractModel
{
    /**
     * @var string 进件状态。
__SUCCESS__: 进件成功
__FAILED__: 进件失败
__PROCESSING__: 进件中
     */
    public $RegistrationStatus;

    /**
     * @var string 进件返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RegistrationMessage;

    /**
     * @var string 渠道进件号。
     */
    public $ChannelRegistrationNo;

    /**
     * @var string 渠道子商户ID（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelSubMerchantId;

    /**
     * @var string 外部子商户名称（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutSubMerchantName;

    /**
     * @var string 渠道名称（进件成功返回）。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelName;

    /**
     * @var string 支付方式（进件成功返回）。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PaymentMethod;

    /**
     * @var string 社会信用代码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BusinessLicenseNumber;

    /**
     * @var string 法人姓名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LegalName;

    /**
     * @var string 第三方渠道查询进件返回数据。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalReturnData;

    /**
     * @param string $RegistrationStatus 进件状态。
__SUCCESS__: 进件成功
__FAILED__: 进件失败
__PROCESSING__: 进件中
     * @param string $RegistrationMessage 进件返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelRegistrationNo 渠道进件号。
     * @param string $ChannelSubMerchantId 渠道子商户ID（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutSubMerchantName 外部子商户名称（进件成功返回）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelName 渠道名称（进件成功返回）。
__TENPAY__: 商企付
__WECHAT__: 微信支付
__ALIPAY__: 支付宝
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PaymentMethod 支付方式（进件成功返回）。
__EBANK_PAYMENT__: ebank支付
__OPENBANK_PAYMENT__: openbank支付
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BusinessLicenseNumber 社会信用代码。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LegalName 法人姓名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalReturnData 第三方渠道查询进件返回数据。详情见附录-复杂类型。
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
        if (array_key_exists("RegistrationStatus",$param) and $param["RegistrationStatus"] !== null) {
            $this->RegistrationStatus = $param["RegistrationStatus"];
        }

        if (array_key_exists("RegistrationMessage",$param) and $param["RegistrationMessage"] !== null) {
            $this->RegistrationMessage = $param["RegistrationMessage"];
        }

        if (array_key_exists("ChannelRegistrationNo",$param) and $param["ChannelRegistrationNo"] !== null) {
            $this->ChannelRegistrationNo = $param["ChannelRegistrationNo"];
        }

        if (array_key_exists("ChannelSubMerchantId",$param) and $param["ChannelSubMerchantId"] !== null) {
            $this->ChannelSubMerchantId = $param["ChannelSubMerchantId"];
        }

        if (array_key_exists("OutSubMerchantName",$param) and $param["OutSubMerchantName"] !== null) {
            $this->OutSubMerchantName = $param["OutSubMerchantName"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("PaymentMethod",$param) and $param["PaymentMethod"] !== null) {
            $this->PaymentMethod = $param["PaymentMethod"];
        }

        if (array_key_exists("BusinessLicenseNumber",$param) and $param["BusinessLicenseNumber"] !== null) {
            $this->BusinessLicenseNumber = $param["BusinessLicenseNumber"];
        }

        if (array_key_exists("LegalName",$param) and $param["LegalName"] !== null) {
            $this->LegalName = $param["LegalName"];
        }

        if (array_key_exists("ExternalReturnData",$param) and $param["ExternalReturnData"] !== null) {
            $this->ExternalReturnData = $param["ExternalReturnData"];
        }
    }
}
