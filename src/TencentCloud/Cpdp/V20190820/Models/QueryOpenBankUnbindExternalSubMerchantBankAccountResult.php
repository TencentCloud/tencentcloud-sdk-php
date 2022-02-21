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
 * 第三方子商户银行卡解绑结果查询返回结果
 *
 * @method string getChannelApplyId() 获取渠道申请编号。
 * @method void setChannelApplyId(string $ChannelApplyId) 设置渠道申请编号。
 * @method string getUnbindStatus() 获取解绑状态。
__SUCCESS__: 解绑成功
__FAILED__: 解绑失败
__PROCESSING__: 解绑中
 * @method void setUnbindStatus(string $UnbindStatus) 设置解绑状态。
__SUCCESS__: 解绑成功
__FAILED__: 解绑失败
__PROCESSING__: 解绑中
 * @method string getUnbindMessage() 获取解绑返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnbindMessage(string $UnbindMessage) 设置解绑返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryOpenBankUnbindExternalSubMerchantBankAccountResult extends AbstractModel
{
    /**
     * @var string 渠道申请编号。
     */
    public $ChannelApplyId;

    /**
     * @var string 解绑状态。
__SUCCESS__: 解绑成功
__FAILED__: 解绑失败
__PROCESSING__: 解绑中
     */
    public $UnbindStatus;

    /**
     * @var string 解绑返回描述, 例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnbindMessage;

    /**
     * @param string $ChannelApplyId 渠道申请编号。
     * @param string $UnbindStatus 解绑状态。
__SUCCESS__: 解绑成功
__FAILED__: 解绑失败
__PROCESSING__: 解绑中
     * @param string $UnbindMessage 解绑返回描述, 例如失败原因等。
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

        if (array_key_exists("UnbindStatus",$param) and $param["UnbindStatus"] !== null) {
            $this->UnbindStatus = $param["UnbindStatus"];
        }

        if (array_key_exists("UnbindMessage",$param) and $param["UnbindMessage"] !== null) {
            $this->UnbindMessage = $param["UnbindMessage"];
        }
    }
}
