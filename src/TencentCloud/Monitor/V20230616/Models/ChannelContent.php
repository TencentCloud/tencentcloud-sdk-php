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
 * 消息正文
 *
 * @method string getSubChannel() 获取<p>本段正文所属的渠道或子渠道全名</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubChannel(string $SubChannel) 设置<p>本段正文所属的渠道或子渠道全名</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取<p>该渠道实际发送的消息正文，由 Ark 按写时捕获的内容还原</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置<p>该渠道实际发送的消息正文，由 Ark 按写时捕获的内容还原</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDeliverStatus() 获取<p>短信：SUCCESS / FAIL。电话：ANSWERED / UNANSWERED / ABNORMAL</p><p>枚举值：</p><ul><li>SUCCESS： 短信已送达</li><li>FAIL： 短信送达失败</li><li>ANSWERED： 电话已接听</li><li>UNANSWERED： 电话未接听</li><li>ABNORMAL： 电话拨打异常</li></ul>
 * @method void setDeliverStatus(string $DeliverStatus) 设置<p>短信：SUCCESS / FAIL。电话：ANSWERED / UNANSWERED / ABNORMAL</p><p>枚举值：</p><ul><li>SUCCESS： 短信已送达</li><li>FAIL： 短信送达失败</li><li>ANSWERED： 电话已接听</li><li>UNANSWERED： 电话未接听</li><li>ABNORMAL： 电话拨打异常</li></ul>
 * @method string getDeliverTime() 获取<p>原始时间字符串，不做时区转换。短信是收到时间；电话只在接听时有值</p><p>参数格式：短信为 YYYY-MM-DD hh:mm:ss，例如 2026-08-05 18:04:46。电话为 Unix 秒级时间戳的数字字符串，仅接听时有值，例如 1717824258。空字符串表示没有时间。</p>
 * @method void setDeliverTime(string $DeliverTime) 设置<p>原始时间字符串，不做时区转换。短信是收到时间；电话只在接听时有值</p><p>参数格式：短信为 YYYY-MM-DD hh:mm:ss，例如 2026-08-05 18:04:46。电话为 Unix 秒级时间戳的数字字符串，仅接听时有值，例如 1717824258。空字符串表示没有时间。</p>
 * @method string getDeliverErrMsg() 获取<p>短信回执的运营商错误码，原样透传。成功为 DELIVRD。失败为运营商原始码，如 EXPIRED、UNDELIV、MK:0001、MK:0012、24、29。电话为空。</p>
 * @method void setDeliverErrMsg(string $DeliverErrMsg) 设置<p>短信回执的运营商错误码，原样透传。成功为 DELIVRD。失败为运营商原始码，如 EXPIRED、UNDELIV、MK:0001、MK:0012、24、29。电话为空。</p>
 */
class ChannelContent extends AbstractModel
{
    /**
     * @var string <p>本段正文所属的渠道或子渠道全名</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubChannel;

    /**
     * @var string <p>该渠道实际发送的消息正文，由 Ark 按写时捕获的内容还原</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @var string <p>短信：SUCCESS / FAIL。电话：ANSWERED / UNANSWERED / ABNORMAL</p><p>枚举值：</p><ul><li>SUCCESS： 短信已送达</li><li>FAIL： 短信送达失败</li><li>ANSWERED： 电话已接听</li><li>UNANSWERED： 电话未接听</li><li>ABNORMAL： 电话拨打异常</li></ul>
     */
    public $DeliverStatus;

    /**
     * @var string <p>原始时间字符串，不做时区转换。短信是收到时间；电话只在接听时有值</p><p>参数格式：短信为 YYYY-MM-DD hh:mm:ss，例如 2026-08-05 18:04:46。电话为 Unix 秒级时间戳的数字字符串，仅接听时有值，例如 1717824258。空字符串表示没有时间。</p>
     */
    public $DeliverTime;

    /**
     * @var string <p>短信回执的运营商错误码，原样透传。成功为 DELIVRD。失败为运营商原始码，如 EXPIRED、UNDELIV、MK:0001、MK:0012、24、29。电话为空。</p>
     */
    public $DeliverErrMsg;

    /**
     * @param string $SubChannel <p>本段正文所属的渠道或子渠道全名</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li><li>WeWork： 企业微信机器人</li><li>WebHook： 自定义 WebHook</li><li>FeiShu： 飞书</li><li>DingDing： 钉钉</li><li>Slack： Slack</li><li>GoogleChat： Google Chat</li><li>Teams： Teams</li><li>TeamsWorkflow： Teams Workflow</li><li>PagerDuty： PagerDuty</li><li>CLS： 日志服务 CLS</li><li>AS： 弹性伸缩</li><li>TCSYehe： TCS 野鹤。正文的 SubChannel 取渠道名本身</li><li>SCF： 云函数。不返回 Contents</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content <p>该渠道实际发送的消息正文，由 Ark 按写时捕获的内容还原</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DeliverStatus <p>短信：SUCCESS / FAIL。电话：ANSWERED / UNANSWERED / ABNORMAL</p><p>枚举值：</p><ul><li>SUCCESS： 短信已送达</li><li>FAIL： 短信送达失败</li><li>ANSWERED： 电话已接听</li><li>UNANSWERED： 电话未接听</li><li>ABNORMAL： 电话拨打异常</li></ul>
     * @param string $DeliverTime <p>原始时间字符串，不做时区转换。短信是收到时间；电话只在接听时有值</p><p>参数格式：短信为 YYYY-MM-DD hh:mm:ss，例如 2026-08-05 18:04:46。电话为 Unix 秒级时间戳的数字字符串，仅接听时有值，例如 1717824258。空字符串表示没有时间。</p>
     * @param string $DeliverErrMsg <p>短信回执的运营商错误码，原样透传。成功为 DELIVRD。失败为运营商原始码，如 EXPIRED、UNDELIV、MK:0001、MK:0012、24、29。电话为空。</p>
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
        if (array_key_exists("SubChannel",$param) and $param["SubChannel"] !== null) {
            $this->SubChannel = $param["SubChannel"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("DeliverStatus",$param) and $param["DeliverStatus"] !== null) {
            $this->DeliverStatus = $param["DeliverStatus"];
        }

        if (array_key_exists("DeliverTime",$param) and $param["DeliverTime"] !== null) {
            $this->DeliverTime = $param["DeliverTime"];
        }

        if (array_key_exists("DeliverErrMsg",$param) and $param["DeliverErrMsg"] !== null) {
            $this->DeliverErrMsg = $param["DeliverErrMsg"];
        }
    }
}
