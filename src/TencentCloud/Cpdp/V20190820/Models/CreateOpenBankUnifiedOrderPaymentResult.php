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
 * 云企付-支付下单返回响应
 *
 * @method string getChannelOrderId() 获取云企付平台订单号。
 * @method void setChannelOrderId(string $ChannelOrderId) 设置云企付平台订单号。
 * @method string getThirdPayOrderId() 获取第三方支付平台返回支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdPayOrderId(string $ThirdPayOrderId) 设置第三方支付平台返回支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method OpenBankOrderRedirectInfo getRedirectInfo() 获取跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectInfo(OpenBankOrderRedirectInfo $RedirectInfo) 设置跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutOrderId() 获取外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
 * @method string getPayInfo() 获取渠道扩展支付信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayInfo(string $PayInfo) 设置渠道扩展支付信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPayInfoType() 获取渠道扩展支付信息类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPayInfoType(string $PayInfoType) 设置渠道扩展支付信息类型
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateOpenBankUnifiedOrderPaymentResult extends AbstractModel
{
    /**
     * @var string 云企付平台订单号。
     */
    public $ChannelOrderId;

    /**
     * @var string 第三方支付平台返回支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdPayOrderId;

    /**
     * @var OpenBankOrderRedirectInfo 跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectInfo;

    /**
     * @var string 外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
     */
    public $OutOrderId;

    /**
     * @var string 渠道扩展支付信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayInfo;

    /**
     * @var string 渠道扩展支付信息类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PayInfoType;

    /**
     * @param string $ChannelOrderId 云企付平台订单号。
     * @param string $ThirdPayOrderId 第三方支付平台返回支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OpenBankOrderRedirectInfo $RedirectInfo 跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutOrderId 外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
     * @param string $PayInfo 渠道扩展支付信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PayInfoType 渠道扩展支付信息类型
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
        if (array_key_exists("ChannelOrderId",$param) and $param["ChannelOrderId"] !== null) {
            $this->ChannelOrderId = $param["ChannelOrderId"];
        }

        if (array_key_exists("ThirdPayOrderId",$param) and $param["ThirdPayOrderId"] !== null) {
            $this->ThirdPayOrderId = $param["ThirdPayOrderId"];
        }

        if (array_key_exists("RedirectInfo",$param) and $param["RedirectInfo"] !== null) {
            $this->RedirectInfo = new OpenBankOrderRedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }

        if (array_key_exists("PayInfo",$param) and $param["PayInfo"] !== null) {
            $this->PayInfo = $param["PayInfo"];
        }

        if (array_key_exists("PayInfoType",$param) and $param["PayInfoType"] !== null) {
            $this->PayInfoType = $param["PayInfoType"];
        }
    }
}
