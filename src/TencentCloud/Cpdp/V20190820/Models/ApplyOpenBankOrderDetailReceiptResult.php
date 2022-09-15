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
 * 申请单笔交易回单结果
 *
 * @method string getChannelApplyId() 获取渠道回单申请ID
 * @method void setChannelApplyId(string $ChannelApplyId) 设置渠道回单申请ID
 * @method string getReceiptStatus() 获取申请状态。
SUCCESS：申请成功；
FAILED：申请失败；
PROCESSING：申请中。
注意：若返回申请中，需要再次调用回单申请结果查询接口，查询结果。
 * @method void setReceiptStatus(string $ReceiptStatus) 设置申请状态。
SUCCESS：申请成功；
FAILED：申请失败；
PROCESSING：申请中。
注意：若返回申请中，需要再次调用回单申请结果查询接口，查询结果。
 * @method string getReceiptMessage() 获取申请返回描述，例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiptMessage(string $ReceiptMessage) 设置申请返回描述，例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDownloadUrl() 获取回单下载链接，申请成功时返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDownloadUrl(string $DownloadUrl) 设置回单下载链接，申请成功时返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间，yyyy-MM-dd HH:mm:ss格式。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间，yyyy-MM-dd HH:mm:ss格式。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplyOpenBankOrderDetailReceiptResult extends AbstractModel
{
    /**
     * @var string 渠道回单申请ID
     */
    public $ChannelApplyId;

    /**
     * @var string 申请状态。
SUCCESS：申请成功；
FAILED：申请失败；
PROCESSING：申请中。
注意：若返回申请中，需要再次调用回单申请结果查询接口，查询结果。
     */
    public $ReceiptStatus;

    /**
     * @var string 申请返回描述，例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiptMessage;

    /**
     * @var string 回单下载链接，申请成功时返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DownloadUrl;

    /**
     * @var string 过期时间，yyyy-MM-dd HH:mm:ss格式。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @param string $ChannelApplyId 渠道回单申请ID
     * @param string $ReceiptStatus 申请状态。
SUCCESS：申请成功；
FAILED：申请失败；
PROCESSING：申请中。
注意：若返回申请中，需要再次调用回单申请结果查询接口，查询结果。
     * @param string $ReceiptMessage 申请返回描述，例如失败原因等。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DownloadUrl 回单下载链接，申请成功时返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间，yyyy-MM-dd HH:mm:ss格式。
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

        if (array_key_exists("ReceiptStatus",$param) and $param["ReceiptStatus"] !== null) {
            $this->ReceiptStatus = $param["ReceiptStatus"];
        }

        if (array_key_exists("ReceiptMessage",$param) and $param["ReceiptMessage"] !== null) {
            $this->ReceiptMessage = $param["ReceiptMessage"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
