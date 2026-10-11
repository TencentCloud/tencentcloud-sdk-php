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
 * 承载消息接收人/组明细
 *
 * @method string getReceiverType() 获取<p>本条发送规则的接收者类型</p><p>枚举值：</p><ul><li>UIDs： 按用户 UID</li><li>UINs： 按账号 UIN</li><li>Group： 按用户分组。ReceiverIds 为分组 ID</li><li>Oncall： 按值班表，且未被发送时的真实接收人覆盖</li><li>RtxName： 发送时解析出的员工 RTX 英文名</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverType(string $ReceiverType) 设置<p>本条发送规则的接收者类型</p><p>枚举值：</p><ul><li>UIDs： 按用户 UID</li><li>UINs： 按账号 UIN</li><li>Group： 按用户分组。ReceiverIds 为分组 ID</li><li>Oncall： 按值班表，且未被发送时的真实接收人覆盖</li><li>RtxName： 发送时解析出的员工 RTX 英文名</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiverIds() 获取<p>本条规则配置的原始接收者 ID 列表。具体是哪一种 ID，由 ReceiverType 决定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverIds(array $ReceiverIds) 设置<p>本条规则配置的原始接收者 ID 列表。具体是哪一种 ID，由 ReceiverType 决定</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNames() 获取<p>接收者展示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNames(array $Names) 设置<p>接收者展示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMemberIds() 获取<p>用户分组展开后的成员用户 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberIds(array $MemberIds) 设置<p>用户分组展开后的成员用户 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeekDay() 获取<p>该规则允许通知的星期。语义与 time.Weekday 一致</p><p>枚举值：</p><ul><li>0： 周日</li><li>1： 周一</li><li>2： 周二</li><li>3： 周三</li><li>4： 周四</li><li>5： 周五</li><li>6： 周六</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeekDay(array $WeekDay) 设置<p>该规则允许通知的星期。语义与 time.Weekday 一致</p><p>枚举值：</p><ul><li>0： 周日</li><li>1： 周一</li><li>2： 周二</li><li>3： 周三</li><li>4： 周四</li><li>5： 周五</li><li>6： 周六</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDayStartSeconds() 获取<p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayStartSeconds(integer $DayStartSeconds) 设置<p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDayEndSeconds() 获取<p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDayEndSeconds(integer $DayEndSeconds) 设置<p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTimeZoneName() 获取<p>DayStartSeconds、DayEndSeconds 所属时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeZoneName(string $TimeZoneName) 设置<p>DayStartSeconds、DayEndSeconds 所属时区</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getChannelNames() 获取<p>该规则实际发送的接收渠道全名列表</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelNames(array $ChannelNames) 设置<p>该规则实际发送的接收渠道全名列表</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReceiverGroup extends AbstractModel
{
    /**
     * @var string <p>本条发送规则的接收者类型</p><p>枚举值：</p><ul><li>UIDs： 按用户 UID</li><li>UINs： 按账号 UIN</li><li>Group： 按用户分组。ReceiverIds 为分组 ID</li><li>Oncall： 按值班表，且未被发送时的真实接收人覆盖</li><li>RtxName： 发送时解析出的员工 RTX 英文名</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverType;

    /**
     * @var array <p>本条规则配置的原始接收者 ID 列表。具体是哪一种 ID，由 ReceiverType 决定</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverIds;

    /**
     * @var array <p>接收者展示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Names;

    /**
     * @var array <p>用户分组展开后的成员用户 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberIds;

    /**
     * @var array <p>该规则允许通知的星期。语义与 time.Weekday 一致</p><p>枚举值：</p><ul><li>0： 周日</li><li>1： 周一</li><li>2： 周二</li><li>3： 周三</li><li>4： 周四</li><li>5： 周五</li><li>6： 周六</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeekDay;

    /**
     * @var integer <p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayStartSeconds;

    /**
     * @var integer <p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DayEndSeconds;

    /**
     * @var string <p>DayStartSeconds、DayEndSeconds 所属时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeZoneName;

    /**
     * @var array <p>该规则实际发送的接收渠道全名列表</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelNames;

    /**
     * @param string $ReceiverType <p>本条发送规则的接收者类型</p><p>枚举值：</p><ul><li>UIDs： 按用户 UID</li><li>UINs： 按账号 UIN</li><li>Group： 按用户分组。ReceiverIds 为分组 ID</li><li>Oncall： 按值班表，且未被发送时的真实接收人覆盖</li><li>RtxName： 发送时解析出的员工 RTX 英文名</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiverIds <p>本条规则配置的原始接收者 ID 列表。具体是哪一种 ID，由 ReceiverType 决定</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Names <p>接收者展示名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MemberIds <p>用户分组展开后的成员用户 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WeekDay <p>该规则允许通知的星期。语义与 time.Weekday 一致</p><p>枚举值：</p><ul><li>0： 周日</li><li>1： 周一</li><li>2： 周二</li><li>3： 周三</li><li>4： 周四</li><li>5： 周五</li><li>6： 周六</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DayStartSeconds <p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DayEndSeconds <p>通知时段相对当日零点的秒数偏移，需配合 TimeZoneName 解读</p><p>单位：秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TimeZoneName <p>DayStartSeconds、DayEndSeconds 所属时区</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ChannelNames <p>该规则实际发送的接收渠道全名列表</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("ReceiverIds",$param) and $param["ReceiverIds"] !== null) {
            $this->ReceiverIds = $param["ReceiverIds"];
        }

        if (array_key_exists("Names",$param) and $param["Names"] !== null) {
            $this->Names = $param["Names"];
        }

        if (array_key_exists("MemberIds",$param) and $param["MemberIds"] !== null) {
            $this->MemberIds = $param["MemberIds"];
        }

        if (array_key_exists("WeekDay",$param) and $param["WeekDay"] !== null) {
            $this->WeekDay = $param["WeekDay"];
        }

        if (array_key_exists("DayStartSeconds",$param) and $param["DayStartSeconds"] !== null) {
            $this->DayStartSeconds = $param["DayStartSeconds"];
        }

        if (array_key_exists("DayEndSeconds",$param) and $param["DayEndSeconds"] !== null) {
            $this->DayEndSeconds = $param["DayEndSeconds"];
        }

        if (array_key_exists("TimeZoneName",$param) and $param["TimeZoneName"] !== null) {
            $this->TimeZoneName = $param["TimeZoneName"];
        }

        if (array_key_exists("ChannelNames",$param) and $param["ChannelNames"] !== null) {
            $this->ChannelNames = $param["ChannelNames"];
        }
    }
}
