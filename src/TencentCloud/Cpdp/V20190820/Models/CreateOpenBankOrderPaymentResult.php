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
 * @method OpenBankRedirectInfo getRedirectInfo() 获取小程序跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectInfo(OpenBankRedirectInfo $RedirectInfo) 设置小程序跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutOrderId() 获取外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
 * @method void setOutOrderId(string $OutOrderId) 设置外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
 */
class CreateOpenBankOrderPaymentResult extends AbstractModel
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
     * @var OpenBankRedirectInfo 小程序跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectInfo;

    /**
     * @var string 外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
     */
    public $OutOrderId;

    /**
     * @param string $ChannelOrderId 云企付平台订单号。
     * @param string $ThirdPayOrderId 第三方支付平台返回支付订单号。
注意：此字段可能返回 null，表示取不到有效值。
     * @param OpenBankRedirectInfo $RedirectInfo 小程序跳转参数渠道为TENPAY，付款方式为EBANK_PAYMENT时必选。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutOrderId 外部商户订单号，只能是数字、大小写字母，且在同一个接入平台下唯一。
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
            $this->RedirectInfo = new OpenBankRedirectInfo();
            $this->RedirectInfo->deserialize($param["RedirectInfo"]);
        }

        if (array_key_exists("OutOrderId",$param) and $param["OutOrderId"] !== null) {
            $this->OutOrderId = $param["OutOrderId"];
        }
    }
}
