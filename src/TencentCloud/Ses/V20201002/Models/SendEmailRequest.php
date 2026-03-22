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
 * @method string getFromEmailAddress() 获取<p>发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+&lt;邮箱地址&gt;，别名中不能带有冒号(:)。</p>
 * @method void setFromEmailAddress(string $FromEmailAddress) 设置<p>发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+&lt;邮箱地址&gt;，别名中不能带有冒号(:)。</p>
 * @method string getSubject() 获取<p>邮件主题</p>
 * @method void setSubject(string $Subject) 设置<p>邮件主题</p>
 * @method array getDestination() 获取<p>收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。<br>Destination/Cc/Bcc三个参数必须至少存在一个。</p>
 * @method void setDestination(array $Destination) 设置<p>收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。<br>Destination/Cc/Bcc三个参数必须至少存在一个。</p>
 * @method string getReplyToAddresses() 获取<p>邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。</p>
 * @method void setReplyToAddresses(string $ReplyToAddresses) 设置<p>邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。</p>
 * @method array getCc() 获取<p>抄送人邮箱地址，最多支持抄送20人。</p>
 * @method void setCc(array $Cc) 设置<p>抄送人邮箱地址，最多支持抄送20人。</p>
 * @method array getBcc() 获取<p>密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。</p>
 * @method void setBcc(array $Bcc) 设置<p>密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。</p>
 * @method Template getTemplate() 获取<p>使用模板发送时，填写模板相关参数。</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>如您未申请过特殊配置，则该字段为必填</p></div>    </div></blockquote>
 * @method void setTemplate(Template $Template) 设置<p>使用模板发送时，填写模板相关参数。</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>如您未申请过特殊配置，则该字段为必填</p></div>    </div></blockquote>
 * @method Simple getSimple() 获取<p>已废弃</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><p>仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</p></div>    </div></blockquote>
 * @method void setSimple(Simple $Simple) 设置<p>已废弃</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><p>仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</p></div>    </div></blockquote>
 * @method array getAttachments() 获取<p>需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误</p>
 * @method void setAttachments(array $Attachments) 设置<p>需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误</p>
 * @method string getUnsubscribe() 获取<p>退订链接选项</p><p>枚举值：</p><ul><li>0： 不加入退订链接</li><li>1： 简体中文</li><li>2： 英文</li><li>3： 繁体中文</li><li>4： 西班牙语</li><li>5： 法语</li><li>6： 德语</li><li>7： 日语</li><li>8： 韩语</li><li>9： 阿拉伯语</li><li>10： 泰语</li><li>11： 印尼语</li></ul>
 * @method void setUnsubscribe(string $Unsubscribe) 设置<p>退订链接选项</p><p>枚举值：</p><ul><li>0： 不加入退订链接</li><li>1： 简体中文</li><li>2： 英文</li><li>3： 繁体中文</li><li>4： 西班牙语</li><li>5： 法语</li><li>6： 德语</li><li>7： 日语</li><li>8： 韩语</li><li>9： 阿拉伯语</li><li>10： 泰语</li><li>11： 印尼语</li></ul>
 * @method integer getTriggerType() 获取<p>邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道</p>
 * @method void setTriggerType(integer $TriggerType) 设置<p>邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道</p>
 * @method string getSmtpMessageId() 获取<p>smtp头中的Message-Id字段</p>
 * @method void setSmtpMessageId(string $SmtpMessageId) 设置<p>smtp头中的Message-Id字段</p>
 * @method string getSmtpHeaders() 获取<p>smtp头中可以设置的其它字段</p>
 * @method void setSmtpHeaders(string $SmtpHeaders) 设置<p>smtp头中可以设置的其它字段</p>
 * @method string getHeaderFrom() 获取<p>smtp头中的from字段，建议域名与FromEmailAddress保持一致</p>
 * @method void setHeaderFrom(string $HeaderFrom) 设置<p>smtp头中的from字段，建议域名与FromEmailAddress保持一致</p>
 */
class SendEmailRequest extends AbstractModel
{
    /**
     * @var string <p>发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+&lt;邮箱地址&gt;，别名中不能带有冒号(:)。</p>
     */
    public $FromEmailAddress;

    /**
     * @var string <p>邮件主题</p>
     */
    public $Subject;

    /**
     * @var array <p>收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。<br>Destination/Cc/Bcc三个参数必须至少存在一个。</p>
     */
    public $Destination;

    /**
     * @var string <p>邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。</p>
     */
    public $ReplyToAddresses;

    /**
     * @var array <p>抄送人邮箱地址，最多支持抄送20人。</p>
     */
    public $Cc;

    /**
     * @var array <p>密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。</p>
     */
    public $Bcc;

    /**
     * @var Template <p>使用模板发送时，填写模板相关参数。</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>如您未申请过特殊配置，则该字段为必填</p></div>    </div></blockquote>
     */
    public $Template;

    /**
     * @var Simple <p>已废弃</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><p>仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</p></div>    </div></blockquote>
     */
    public $Simple;

    /**
     * @var array <p>需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误</p>
     */
    public $Attachments;

    /**
     * @var string <p>退订链接选项</p><p>枚举值：</p><ul><li>0： 不加入退订链接</li><li>1： 简体中文</li><li>2： 英文</li><li>3： 繁体中文</li><li>4： 西班牙语</li><li>5： 法语</li><li>6： 德语</li><li>7： 日语</li><li>8： 韩语</li><li>9： 阿拉伯语</li><li>10： 泰语</li><li>11： 印尼语</li></ul>
     */
    public $Unsubscribe;

    /**
     * @var integer <p>邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道</p>
     */
    public $TriggerType;

    /**
     * @var string <p>smtp头中的Message-Id字段</p>
     */
    public $SmtpMessageId;

    /**
     * @var string <p>smtp头中可以设置的其它字段</p>
     */
    public $SmtpHeaders;

    /**
     * @var string <p>smtp头中的from字段，建议域名与FromEmailAddress保持一致</p>
     */
    public $HeaderFrom;

    /**
     * @param string $FromEmailAddress <p>发件人邮箱地址。不使用别名时请直接填写发件人邮箱地址，例如：noreply@mail.qcloud.com如需填写发件人别名时，请按照如下方式（注意别名与邮箱地址之间必须使用一个空格隔开）：别名+一个空格+&lt;邮箱地址&gt;，别名中不能带有冒号(:)。</p>
     * @param string $Subject <p>邮件主题</p>
     * @param array $Destination <p>收信人邮箱地址，最多支持群发50人。注意：邮件内容会显示所有收件人地址，非群发邮件请多次调用API发送。<br>Destination/Cc/Bcc三个参数必须至少存在一个。</p>
     * @param string $ReplyToAddresses <p>邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人的回复邮件将会发送失败。</p>
     * @param array $Cc <p>抄送人邮箱地址，最多支持抄送20人。</p>
     * @param array $Bcc <p>密送人邮箱地址，最多支持抄送20人,Bcc和Destination不能重复。</p>
     * @param Template $Template <p>使用模板发送时，填写模板相关参数。</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>如您未申请过特殊配置，则该字段为必填</p></div>    </div></blockquote>
     * @param Simple $Simple <p>已废弃</p><blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">说明</div>        <div class="rno-document-tip-desc"><p>仅部分历史上申请了特殊配置的客户需要使用。如您未申请过特殊配置，则不存在该字段。</p></div>    </div></blockquote>
     * @param array $Attachments <p>需要发送附件时，填写附件相关参数。腾讯云接口请求最大支持 8M 的请求包，附件内容经过 Base64 预期扩大1.5倍，应该控制所有附件的总大小最大在 4M 以内，整体请求超出 8M 时接口会返回错误</p>
     * @param string $Unsubscribe <p>退订链接选项</p><p>枚举值：</p><ul><li>0： 不加入退订链接</li><li>1： 简体中文</li><li>2： 英文</li><li>3： 繁体中文</li><li>4： 西班牙语</li><li>5： 法语</li><li>6： 德语</li><li>7： 日语</li><li>8： 韩语</li><li>9： 阿拉伯语</li><li>10： 泰语</li><li>11： 印尼语</li></ul>
     * @param integer $TriggerType <p>邮件触发类型 0:非触发类，默认类型，营销类邮件、非即时类邮件等选择此类型  1:触发类，验证码等即时发送类邮件，若邮件超过一定大小，系统会自动选择非触发类型通道</p>
     * @param string $SmtpMessageId <p>smtp头中的Message-Id字段</p>
     * @param string $SmtpHeaders <p>smtp头中可以设置的其它字段</p>
     * @param string $HeaderFrom <p>smtp头中的from字段，建议域名与FromEmailAddress保持一致</p>
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
