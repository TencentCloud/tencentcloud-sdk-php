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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendEmail请求参数结构体
 *
 * @method string getFromEmailAddress() 获取发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+<邮箱地址>，别名中不能带有冒号(:)。
 * @method void setFromEmailAddress(string $FromEmailAddress) 设置发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+<邮箱地址>，别名中不能带有冒号(:)。
 * @method string getSubject() 获取邮件主题
 * @method void setSubject(string $Subject) 设置邮件主题
 * @method array getDestination() 获取收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。
Destination/Cc/Bcc三个参数必须至少存在一个。
 * @method void setDestination(array $Destination) 设置收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。
Destination/Cc/Bcc三个参数必须至少存在一个。
 * @method string getReplyToAddresses() 获取邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。
 * @method void setReplyToAddresses(string $ReplyToAddresses) 设置邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。
 * @method array getCc() 获取抄送人邮箱地址，最多支持抄送20人。
 * @method void setCc(array $Cc) 设置抄送人邮箱地址，最多支持抄送20人。
 * @method array getBcc() 获取密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。
 * @method void setBcc(array $Bcc) 设置密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。
 * @method Template getTemplate() 获取使用模板发送时，填写模板相关参数。
<dx-alert infotype="notice" title="注意"> 如您未申请过特殊配置，则该字段为必填 </dx-alert>
 * @method void setTemplate(Template $Template) 设置使用模板发送时，填写模板相关参数。
<dx-alert infotype="notice" title="注意"> 如您未申请过特殊配置，则该字段为必填 </dx-alert>
 * @method Simple getSimple() 获取已废弃
<dx-alert infotype="notice" title="说明"> 仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</dx-alert>
 * @method void setSimple(Simple $Simple) 设置已废弃
<dx-alert infotype="notice" title="说明"> 仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</dx-alert>
 * @method array getAttachments() 获取需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误
 * @method void setAttachments(array $Attachments) 设置需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误
 * @method string getUnsubscribe() 获取退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
 * @method void setUnsubscribe(string $Unsubscribe) 设置退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
 * @method integer getTriggerType() 获取邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道
 * @method void setTriggerType(integer $TriggerType) 设置邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道
 * @method string getSmtpMessageId() 获取smtp头中的Message-Id字段
 * @method void setSmtpMessageId(string $SmtpMessageId) 设置smtp头中的Message-Id字段
 * @method string getSmtpHeaders() 获取smtp头中可以设置的其它字段
 * @method void setSmtpHeaders(string $SmtpHeaders) 设置smtp头中可以设置的其它字段
 * @method string getHeaderFrom() 获取smtp头中的from字段，建议域名与FromEmailAddress保持一致
 * @method void setHeaderFrom(string $HeaderFrom) 设置smtp头中的from字段，建议域名与FromEmailAddress保持一致
 */
class SendEmailRequest extends AbstractModel
{
    /**
     * @var string 发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+<邮箱地址>，别名中不能带有冒号(:)。
     */
    public $FromEmailAddress;

    /**
     * @var string 邮件主题
     */
    public $Subject;

    /**
     * @var array 收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。
Destination/Cc/Bcc三个参数必须至少存在一个。
     */
    public $Destination;

    /**
     * @var string 邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。
     */
    public $ReplyToAddresses;

    /**
     * @var array 抄送人邮箱地址，最多支持抄送20人。
     */
    public $Cc;

    /**
     * @var array 密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。
     */
    public $Bcc;

    /**
     * @var Template 使用模板发送时，填写模板相关参数。
<dx-alert infotype="notice" title="注意"> 如您未申请过特殊配置，则该字段为必填 </dx-alert>
     */
    public $Template;

    /**
     * @var Simple 已废弃
<dx-alert infotype="notice" title="说明"> 仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</dx-alert>
     */
    public $Simple;

    /**
     * @var array 需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误
     */
    public $Attachments;

    /**
     * @var string 退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
     */
    public $Unsubscribe;

    /**
     * @var integer 邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道
     */
    public $TriggerType;

    /**
     * @var string smtp头中的Message-Id字段
     */
    public $SmtpMessageId;

    /**
     * @var string smtp头中可以设置的其它字段
     */
    public $SmtpHeaders;

    /**
     * @var string smtp头中的from字段，建议域名与FromEmailAddress保持一致
     */
    public $HeaderFrom;

    /**
     * @param string $FromEmailAddress 发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+<邮箱地址>，别名中不能带有冒号(:)。
     * @param string $Subject 邮件主题
     * @param array $Destination 收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。
Destination/Cc/Bcc三个参数必须至少存在一个。
     * @param string $ReplyToAddresses 邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。
     * @param array $Cc 抄送人邮箱地址，最多支持抄送20人。
     * @param array $Bcc 密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。
     * @param Template $Template 使用模板发送时，填写模板相关参数。
<dx-alert infotype="notice" title="注意"> 如您未申请过特殊配置，则该字段为必填 </dx-alert>
     * @param Simple $Simple 已废弃
<dx-alert infotype="notice" title="说明"> 仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</dx-alert>
     * @param array $Attachments 需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误
     * @param string $Unsubscribe 退订链接选项 0: 不加入退订链接 1: 简体中文 2: 英文 3: 繁体中文 4: 西班牙语 5: 法语 6: 德语 7: 日语 8: 韩语 9: 阿拉伯语 10: 泰语
     * @param integer $TriggerType 邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道
     * @param string $SmtpMessageId smtp头中的Message-Id字段
     * @param string $SmtpHeaders smtp头中可以设置的其它字段
     * @param string $HeaderFrom smtp头中的from字段，建议域名与FromEmailAddress保持一致
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
        if (array_key_exists("FromEmailAddress",$param) and $param["FromEmailAddress"] !== null) {
            $this->FromEmailAddress = $param["FromEmailAddress"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Destination",$param) and $param["Destination"] !== null) {
            $this->Destination = $param["Destination"];
        }

        if (array_key_exists("ReplyToAddresses",$param) and $param["ReplyToAddresses"] !== null) {
            $this->ReplyToAddresses = $param["ReplyToAddresses"];
        }

        if (array_key_exists("Cc",$param) and $param["Cc"] !== null) {
            $this->Cc = $param["Cc"];
        }

        if (array_key_exists("Bcc",$param) and $param["Bcc"] !== null) {
            $this->Bcc = $param["Bcc"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new Template();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("Simple",$param) and $param["Simple"] !== null) {
            $this->Simple = new Simple();
            $this->Simple->deserialize($param["Simple"]);
        }

        if (array_key_exists("Attachments",$param) and $param["Attachments"] !== null) {
            $this->Attachments = [];
            foreach ($param["Attachments"] as $key => $value){
                $obj = new Attachment();
                $obj->deserialize($value);
                array_push($this->Attachments, $obj);
            }
        }

        if (array_key_exists("Unsubscribe",$param) and $param["Unsubscribe"] !== null) {
            $this->Unsubscribe = $param["Unsubscribe"];
        }

        if (array_key_exists("TriggerType",$param) and $param["TriggerType"] !== null) {
            $this->TriggerType = $param["TriggerType"];
        }

        if (array_key_exists("SmtpMessageId",$param) and $param["SmtpMessageId"] !== null) {
            $this->SmtpMessageId = $param["SmtpMessageId"];
        }

        if (array_key_exists("SmtpHeaders",$param) and $param["SmtpHeaders"] !== null) {
            $this->SmtpHeaders = $param["SmtpHeaders"];
        }

        if (array_key_exists("HeaderFrom",$param) and $param["HeaderFrom"] !== null) {
            $this->HeaderFrom = $param["HeaderFrom"];
        }
    }
}
