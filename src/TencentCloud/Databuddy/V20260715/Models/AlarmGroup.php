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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警组
 *
 * @method string getChannelId() 获取通知渠道ID，可通过基础平台通知渠道相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelId(string $ChannelId) 设置通知渠道ID，可通过基础平台通知渠道相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelName() 获取通知渠道名称，可以是用户组名称或邮箱地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelName(string $ChannelName) 设置通知渠道名称，可以是用户组名称或邮箱地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsEmailChannel() 获取是否启用邮件渠道，默认值：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsEmailChannel(boolean $IsEmailChannel) 设置是否启用邮件渠道，默认值：false
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlarmConditions() 获取一组告警条件，有 启动，成功，失败和任务超时告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlarmConditions(array $AlarmConditions) 设置一组告警条件，有 启动，成功，失败和任务超时告警
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChannelType() 获取通知渠道类型。取值：0 未指定，1 Email，2 Webhook，3 Teams，4 Slack
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelType(integer $ChannelType) 设置通知渠道类型。取值：0 未指定，1 Email，2 Webhook，3 Teams，4 Slack
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmGroup extends AbstractModel
{
    /**
     * @var string 通知渠道ID，可通过基础平台通知渠道相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelId;

    /**
     * @var string 通知渠道名称，可以是用户组名称或邮箱地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelName;

    /**
     * @var boolean 是否启用邮件渠道，默认值：false
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsEmailChannel;

    /**
     * @var array 一组告警条件，有 启动，成功，失败和任务超时告警
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlarmConditions;

    /**
     * @var integer 通知渠道类型。取值：0 未指定，1 Email，2 Webhook，3 Teams，4 Slack
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelType;

    /**
     * @param string $ChannelId 通知渠道ID，可通过基础平台通知渠道相关接口获取
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelName 通知渠道名称，可以是用户组名称或邮箱地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsEmailChannel 是否启用邮件渠道，默认值：false
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlarmConditions 一组告警条件，有 启动，成功，失败和任务超时告警
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChannelType 通知渠道类型。取值：0 未指定，1 Email，2 Webhook，3 Teams，4 Slack
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("IsEmailChannel",$param) and $param["IsEmailChannel"] !== null) {
            $this->IsEmailChannel = $param["IsEmailChannel"];
        }

        if (array_key_exists("AlarmConditions",$param) and $param["AlarmConditions"] !== null) {
            $this->AlarmConditions = $param["AlarmConditions"];
        }

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }
    }
}
