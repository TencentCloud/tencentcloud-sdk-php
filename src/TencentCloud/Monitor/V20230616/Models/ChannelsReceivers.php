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
 * 接受人详情信息和通知详情页展示
 *
 * @method string getChannelName() 获取<p>通知渠道名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelName(string $ChannelName) 设置<p>通知渠道名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceivers() 获取<p>接收者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivers(array $Receivers) 设置<p>接收者</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendStatus() 获取<p>发送结果,0-无效,1-成功,2-失败,3-无需发送</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendStatus(string $SendStatus) 设置<p>发送结果,0-无效,1-成功,2-失败,3-无需发送</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSendStatusCode() 获取<p>参数定义 渠道返回的原始状态码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendStatusCode(string $SendStatusCode) 设置<p>参数定义 渠道返回的原始状态码。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSendTime() 获取<p>Ark 发起该渠道调用的时间</p><p>单位：Unix 秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendTime(integer $SendTime) 设置<p>Ark 发起该渠道调用的时间</p><p>单位：Unix 秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSubChannels() 获取<p>该渠道本次实际发送的子渠道全名，格式为 父渠道_子渠道</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubChannels(array $SubChannels) 设置<p>该渠道本次实际发送的子渠道全名，格式为 父渠道_子渠道</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecDetail() 获取<p>该渠道本次执行情况的文字描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecDetail(string $ExecDetail) 设置<p>该渠道本次执行情况的文字描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealDeliverStatus() 获取<p>短信真实投递状态，来自野鹤 smsStatus 回调的 reportStatus 原值</p><p>枚举值：</p><ul><li>SUCCESS： 短信已真实送达</li><li>FAIL： 短信真实投递失败，失败原因见 RealDeliverErrMsg</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealDeliverStatus(string $RealDeliverStatus) 设置<p>短信真实投递状态，来自野鹤 smsStatus 回调的 reportStatus 原值</p><p>枚举值：</p><ul><li>SUCCESS： 短信已真实送达</li><li>FAIL： 短信真实投递失败，失败原因见 RealDeliverErrMsg</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealDeliverTime() 获取<p>用户真实收到短信的时间，取野鹤回调 userReceiverTime 原文字符串</p><p>参数格式：YYYY-MM-DD HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealDeliverTime(string $RealDeliverTime) 设置<p>用户真实收到短信的时间，取野鹤回调 userReceiverTime 原文字符串</p><p>参数格式：YYYY-MM-DD HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRealDeliverErrMsg() 获取<p>短信真实投递回执中的结果码，取野鹤回调 errmsg 原值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRealDeliverErrMsg(string $RealDeliverErrMsg) 设置<p>短信真实投递回执中的结果码，取野鹤回调 errmsg 原值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContents() 获取<p>该渠道下各子渠道的消息正文明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContents(array $Contents) 设置<p>该渠道下各子渠道的消息正文明细</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChannelsReceivers extends AbstractModel
{
    /**
     * @var string <p>通知渠道名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelName;

    /**
     * @var array <p>接收者</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Receivers;

    /**
     * @var string <p>发送结果,0-无效,1-成功,2-失败,3-无需发送</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendStatus;

    /**
     * @var string <p>参数定义 渠道返回的原始状态码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendStatusCode;

    /**
     * @var integer <p>Ark 发起该渠道调用的时间</p><p>单位：Unix 秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendTime;

    /**
     * @var array <p>该渠道本次实际发送的子渠道全名，格式为 父渠道_子渠道</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubChannels;

    /**
     * @var string <p>该渠道本次执行情况的文字描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecDetail;

    /**
     * @var string <p>短信真实投递状态，来自野鹤 smsStatus 回调的 reportStatus 原值</p><p>枚举值：</p><ul><li>SUCCESS： 短信已真实送达</li><li>FAIL： 短信真实投递失败，失败原因见 RealDeliverErrMsg</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealDeliverStatus;

    /**
     * @var string <p>用户真实收到短信的时间，取野鹤回调 userReceiverTime 原文字符串</p><p>参数格式：YYYY-MM-DD HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealDeliverTime;

    /**
     * @var string <p>短信真实投递回执中的结果码，取野鹤回调 errmsg 原值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RealDeliverErrMsg;

    /**
     * @var array <p>该渠道下各子渠道的消息正文明细</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Contents;

    /**
     * @param string $ChannelName <p>通知渠道名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Receivers <p>接收者</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendStatus <p>发送结果,0-无效,1-成功,2-失败,3-无需发送</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SendStatusCode <p>参数定义 渠道返回的原始状态码。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SendTime <p>Ark 发起该渠道调用的时间</p><p>单位：Unix 秒级时间戳</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SubChannels <p>该渠道本次实际发送的子渠道全名，格式为 父渠道_子渠道</p><p>枚举值：</p><ul><li>QCloudYehe_site： 腾讯云野鹤，站内信</li><li>QCloudYehe_email： 腾讯云野鹤，电子邮件</li><li>QCloudYehe_sms： 腾讯云野鹤，短信</li><li>QCloudYehe_wechat： 腾讯云野鹤，微信</li><li>QCloudYehe_voice： 腾讯云野鹤，语音</li><li>QCloudYehe_qywx： 腾讯云野鹤，企业微信</li><li>QCloudYehe_andon： 腾讯云野鹤，安灯</li><li>TOF_weWorkMessage： TOF，企业微信消息</li><li>TOF_email： TOF，企业邮箱</li><li>TOF_phoneCall： TOF，电话</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecDetail <p>该渠道本次执行情况的文字描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealDeliverStatus <p>短信真实投递状态，来自野鹤 smsStatus 回调的 reportStatus 原值</p><p>枚举值：</p><ul><li>SUCCESS： 短信已真实送达</li><li>FAIL： 短信真实投递失败，失败原因见 RealDeliverErrMsg</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealDeliverTime <p>用户真实收到短信的时间，取野鹤回调 userReceiverTime 原文字符串</p><p>参数格式：YYYY-MM-DD HH:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RealDeliverErrMsg <p>短信真实投递回执中的结果码，取野鹤回调 errmsg 原值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Contents <p>该渠道下各子渠道的消息正文明细</p>
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

        if (array_key_exists("SendStatusCode",$param) and $param["SendStatusCode"] !== null) {
            $this->SendStatusCode = $param["SendStatusCode"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("SubChannels",$param) and $param["SubChannels"] !== null) {
            $this->SubChannels = $param["SubChannels"];
        }

        if (array_key_exists("ExecDetail",$param) and $param["ExecDetail"] !== null) {
            $this->ExecDetail = $param["ExecDetail"];
        }

        if (array_key_exists("RealDeliverStatus",$param) and $param["RealDeliverStatus"] !== null) {
            $this->RealDeliverStatus = $param["RealDeliverStatus"];
        }

        if (array_key_exists("RealDeliverTime",$param) and $param["RealDeliverTime"] !== null) {
            $this->RealDeliverTime = $param["RealDeliverTime"];
        }

        if (array_key_exists("RealDeliverErrMsg",$param) and $param["RealDeliverErrMsg"] !== null) {
            $this->RealDeliverErrMsg = $param["RealDeliverErrMsg"];
        }

        if (array_key_exists("Contents",$param) and $param["Contents"] !== null) {
            $this->Contents = [];
            foreach ($param["Contents"] as $key => $value){
                $obj = new ChannelContent();
                $obj->deserialize($value);
                array_push($this->Contents, $obj);
            }
        }
    }
}
