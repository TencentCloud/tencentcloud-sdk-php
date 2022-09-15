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
 * 云企付-核销确认收货申请响应结果
 *
 * @method string getChannelVerificationId() 获取云企付渠道核销订单号
 * @method void setChannelVerificationId(string $ChannelVerificationId) 设置云企付渠道核销订单号
 * @method string getThirdVerificationId() 获取第三方支付渠道核销订单号
 * @method void setThirdVerificationId(string $ThirdVerificationId) 设置第三方支付渠道核销订单号
 * @method string getVerificationStatus() 获取核销状态
INIT("INIT","初始化"),
SUCCESS("SUCCESS","核销成功"),
FAILED("FAILED","核销失败"),
PROCESSING("PROCESSING","核销中");
 * @method void setVerificationStatus(string $VerificationStatus) 设置核销状态
INIT("INIT","初始化"),
SUCCESS("SUCCESS","核销成功"),
FAILED("FAILED","核销失败"),
PROCESSING("PROCESSING","核销中");
 * @method integer getVerificationAmount() 获取核销金额，单位分
 * @method void setVerificationAmount(integer $VerificationAmount) 设置核销金额，单位分
 * @method string getThirdVerificationReturnInfo() 获取渠道附加返回信息，一般情况可以不关注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setThirdVerificationReturnInfo(string $ThirdVerificationReturnInfo) 设置渠道附加返回信息，一般情况可以不关注
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateOpenBankVerificationResult extends AbstractModel
{
    /**
     * @var string 云企付渠道核销订单号
     */
    public $ChannelVerificationId;

    /**
     * @var string 第三方支付渠道核销订单号
     */
    public $ThirdVerificationId;

    /**
     * @var string 核销状态
INIT("INIT","初始化"),
SUCCESS("SUCCESS","核销成功"),
FAILED("FAILED","核销失败"),
PROCESSING("PROCESSING","核销中");
     */
    public $VerificationStatus;

    /**
     * @var integer 核销金额，单位分
     */
    public $VerificationAmount;

    /**
     * @var string 渠道附加返回信息，一般情况可以不关注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ThirdVerificationReturnInfo;

    /**
     * @param string $ChannelVerificationId 云企付渠道核销订单号
     * @param string $ThirdVerificationId 第三方支付渠道核销订单号
     * @param string $VerificationStatus 核销状态
INIT("INIT","初始化"),
SUCCESS("SUCCESS","核销成功"),
FAILED("FAILED","核销失败"),
PROCESSING("PROCESSING","核销中");
     * @param integer $VerificationAmount 核销金额，单位分
     * @param string $ThirdVerificationReturnInfo 渠道附加返回信息，一般情况可以不关注
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
        if (array_key_exists("ChannelVerificationId",$param) and $param["ChannelVerificationId"] !== null) {
            $this->ChannelVerificationId = $param["ChannelVerificationId"];
        }

        if (array_key_exists("ThirdVerificationId",$param) and $param["ThirdVerificationId"] !== null) {
            $this->ThirdVerificationId = $param["ThirdVerificationId"];
        }

        if (array_key_exists("VerificationStatus",$param) and $param["VerificationStatus"] !== null) {
            $this->VerificationStatus = $param["VerificationStatus"];
        }

        if (array_key_exists("VerificationAmount",$param) and $param["VerificationAmount"] !== null) {
            $this->VerificationAmount = $param["VerificationAmount"];
        }

        if (array_key_exists("ThirdVerificationReturnInfo",$param) and $param["ThirdVerificationReturnInfo"] !== null) {
            $this->ThirdVerificationReturnInfo = $param["ThirdVerificationReturnInfo"];
        }
    }
}
