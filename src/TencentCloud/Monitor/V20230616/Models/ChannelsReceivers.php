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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接受人详情信息
 *
 * @method string getChannelName() 获取通知渠道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelName(string $ChannelName) 设置通知渠道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceivers() 获取接收者
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivers(array $Receivers) 设置接收者
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendStatus() 获取发送结果,0-无效,1-成功,2-失败,3-无需发送
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendStatus(string $SendStatus) 设置发送结果,0-无效,1-成功,2-失败,3-无需发送
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChannelsReceivers extends AbstractModel
{
    /**
     * @var string 通知渠道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelName;

    /**
     * @var array 接收者
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Receivers;

    /**
     * @var string 发送结果,0-无效,1-成功,2-失败,3-无需发送
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendStatus;

    /**
     * @param string $ChannelName 通知渠道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Receivers 接收者
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendStatus 发送结果,0-无效,1-成功,2-失败,3-无需发送
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = $param["Receivers"];
        }

        if (array_key_exists("SendStatus",$param) and $param["SendStatus"] !== null) {
            $this->SendStatus = $param["SendStatus"];
        }
    }
}
