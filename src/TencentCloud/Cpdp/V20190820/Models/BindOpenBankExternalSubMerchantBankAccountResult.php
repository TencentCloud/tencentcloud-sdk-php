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
 * 第三方子商户银行卡绑定返回结果
 *
 * @method string getChannelApplyId() 获取渠道申请编号。
 * @method void setChannelApplyId(string $ChannelApplyId) 设置渠道申请编号。
 * @method string getBindStatus() 获取绑定状态。
__SUCCESS__: 绑定成功
__FAILED__: 绑定失败
__PROCESSING__: 绑定中。
注意：若返回绑定中，需要再次调用绑定结果查询接口,查询结果。
 * @method void setBindStatus(string $BindStatus) 设置绑定状态。
__SUCCESS__: 绑定成功
__FAILED__: 绑定失败
__PROCESSING__: 绑定中。
注意：若返回绑定中，需要再次调用绑定结果查询接口,查询结果。
 * @method string getBindMessage() 获取绑定返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindMessage(string $BindMessage) 设置绑定返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExternalSubMerchantBankAccountReturnData() 获取渠道子商户银行账户信息, 为JSON格式字符串（绑定成功状态下返回）。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExternalSubMerchantBankAccountReturnData(string $ExternalSubMerchantBankAccountReturnData) 设置渠道子商户银行账户信息, 为JSON格式字符串（绑定成功状态下返回）。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBindSerialNo() 获取绑卡序列号。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindSerialNo(string $BindSerialNo) 设置绑卡序列号。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BindOpenBankExternalSubMerchantBankAccountResult extends AbstractModel
{
    /**
     * @var string 渠道申请编号。
     */
    public $ChannelApplyId;

    /**
     * @var string 绑定状态。
__SUCCESS__: 绑定成功
__FAILED__: 绑定失败
__PROCESSING__: 绑定中。
注意：若返回绑定中，需要再次调用绑定结果查询接口,查询结果。
     */
    public $BindStatus;

    /**
     * @var string 绑定返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindMessage;

    /**
     * @var string 渠道子商户银行账户信息, 为JSON格式字符串（绑定成功状态下返回）。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExternalSubMerchantBankAccountReturnData;

    /**
     * @var string 绑卡序列号。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindSerialNo;

    /**
     * @param string $ChannelApplyId 渠道申请编号。
     * @param string $BindStatus 绑定状态。
__SUCCESS__: 绑定成功
__FAILED__: 绑定失败
__PROCESSING__: 绑定中。
注意：若返回绑定中，需要再次调用绑定结果查询接口,查询结果。
     * @param string $BindMessage 绑定返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExternalSubMerchantBankAccountReturnData 渠道子商户银行账户信息, 为JSON格式字符串（绑定成功状态下返回）。详情见附录-复杂类型。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BindSerialNo 绑卡序列号。
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
        if (array_key_exists("ChannelApplyId",$param) and $param["ChannelApplyId"] !== null) {
            $this->ChannelApplyId = $param["ChannelApplyId"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }

        if (array_key_exists("BindMessage",$param) and $param["BindMessage"] !== null) {
            $this->BindMessage = $param["BindMessage"];
        }

        if (array_key_exists("ExternalSubMerchantBankAccountReturnData",$param) and $param["ExternalSubMerchantBankAccountReturnData"] !== null) {
            $this->ExternalSubMerchantBankAccountReturnData = $param["ExternalSubMerchantBankAccountReturnData"];
        }

        if (array_key_exists("BindSerialNo",$param) and $param["BindSerialNo"] !== null) {
            $this->BindSerialNo = $param["BindSerialNo"];
        }
    }
}
