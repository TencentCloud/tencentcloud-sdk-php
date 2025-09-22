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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 预算提醒
 *
 * @method array getWeekDays() 获取通知周期,逗号隔开。
枚举值:
周一:1,
周二:2,
周天:7
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeekDays(array $WeekDays) 设置通知周期,逗号隔开。
枚举值:
周一:1,
周二:2,
周天:7
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiverType() 获取接收类型。
枚举值:
UIN 默认模式,
USER 用户,
GROUP 用户组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverType(string $ReceiverType) 设置接收类型。
枚举值:
UIN 默认模式,
USER 用户,
GROUP 用户组。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取发送接收窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置发送接收窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBudgetId() 获取预算配置id（预算名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBudgetId(integer $BudgetId) 设置预算配置id（预算名称）
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNoticeWays() 获取接收渠道,逗号隔开;
枚举值:
TITLE 标题，
SITE 站内信,
EMAIL 邮件,
SMS 短信,
WECHAT 微信,
VOICE 语音,
QYWX 企业微信;
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeWays(array $NoticeWays) 设置接收渠道,逗号隔开;
枚举值:
TITLE 标题，
SITE 站内信,
EMAIL 邮件,
SMS 短信,
WECHAT 微信,
VOICE 语音,
QYWX 企业微信;
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取发送开始窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置发送开始窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverIds() 获取用户id,用户组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverIds(array $ReceiverIds) 设置用户id,用户组id
注意：此字段可能返回 null，表示取不到有效值。
 */
class BudgetSendInfoDto extends AbstractModel
{
    /**
     * @var array 通知周期,逗号隔开。
枚举值:
周一:1,
周二:2,
周天:7
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeekDays;

    /**
     * @var string 接收类型。
枚举值:
UIN 默认模式,
USER 用户,
GROUP 用户组。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverType;

    /**
     * @var string 发送接收窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 预算配置id（预算名称）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BudgetId;

    /**
     * @var array 接收渠道,逗号隔开;
枚举值:
TITLE 标题，
SITE 站内信,
EMAIL 邮件,
SMS 短信,
WECHAT 微信,
VOICE 语音,
QYWX 企业微信;
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeWays;

    /**
     * @var string 发送开始窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var array 用户id,用户组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverIds;

    /**
     * @param array $WeekDays 通知周期,逗号隔开。
枚举值:
周一:1,
周二:2,
周天:7
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiverType 接收类型。
枚举值:
UIN 默认模式,
USER 用户,
GROUP 用户组。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 发送接收窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BudgetId 预算配置id（预算名称）
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $NoticeWays 接收渠道,逗号隔开;
枚举值:
TITLE 标题，
SITE 站内信,
EMAIL 邮件,
SMS 短信,
WECHAT 微信,
VOICE 语音,
QYWX 企业微信;
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime 发送开始窗口HH:mm:ss
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverIds 用户id,用户组id
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
        if (array_key_exists("WeekDays",$param) and $param["WeekDays"] !== null) {
            $this->WeekDays = $param["WeekDays"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("NoticeWays",$param) and $param["NoticeWays"] !== null) {
            $this->NoticeWays = $param["NoticeWays"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ReceiverIds",$param) and $param["ReceiverIds"] !== null) {
            $this->ReceiverIds = $param["ReceiverIds"];
        }
    }
}
