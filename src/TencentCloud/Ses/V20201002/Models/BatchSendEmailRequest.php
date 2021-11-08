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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BatchSendEmail请求参数结构体
 *
 * @method string getFromEmailAddress() 获取发信邮件地址。请填写发件人邮箱地址，例如：noreply@mail.qcloud.com。如需填写发件人说明，请按照
发信人 <邮件地址> 的方式填写，例如：
腾讯云团队 <noreply@mail.qcloud.com>
 * @method void setFromEmailAddress(string $FromEmailAddress) 设置发信邮件地址。请填写发件人邮箱地址，例如：noreply@mail.qcloud.com。如需填写发件人说明，请按照
发信人 <邮件地址> 的方式填写，例如：
腾讯云团队 <noreply@mail.qcloud.com>
 * @method integer getReceiverId() 获取收件人列表ID
 * @method void setReceiverId(integer $ReceiverId) 设置收件人列表ID
 * @method string getSubject() 获取邮件主题
 * @method void setSubject(string $Subject) 设置邮件主题
 * @method integer getTaskType() 获取任务类型 1: 立即发送 2: 定时发送 3: 周期（频率）发送
 * @method void setTaskType(integer $TaskType) 设置任务类型 1: 立即发送 2: 定时发送 3: 周期（频率）发送
 * @method string getReplyToAddresses() 获取邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人将会回复到腾讯云。
 * @method void setReplyToAddresses(string $ReplyToAddresses) 设置邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人将会回复到腾讯云。
 * @method Template getTemplate() 获取使用模板发送时，填写的模板相关参数
 * @method void setTemplate(Template $Template) 设置使用模板发送时，填写的模板相关参数
 * @method Simple getSimple() 获取使用API直接发送内容时，填写的邮件内容
 * @method void setSimple(Simple $Simple) 设置使用API直接发送内容时，填写的邮件内容
 * @method array getAttachments() 获取需要发送附件时，填写附件相关参数。
 * @method void setAttachments(array $Attachments) 设置需要发送附件时，填写附件相关参数。
 * @method CycleEmailParam getCycleParam() 获取周期发送任务的必要参数
 * @method void setCycleParam(CycleEmailParam $CycleParam) 设置周期发送任务的必要参数
 * @method TimedEmailParam getTimedParam() 获取定时发送任务的必要参数
 * @method void setTimedParam(TimedEmailParam $TimedParam) 设置定时发送任务的必要参数
 */
class BatchSendEmailRequest extends AbstractModel
{
    /**
     * @var string 发信邮件地址。请填写发件人邮箱地址，例如：noreply@mail.qcloud.com。如需填写发件人说明，请按照
发信人 <邮件地址> 的方式填写，例如：
腾讯云团队 <noreply@mail.qcloud.com>
     */
    public $FromEmailAddress;

    /**
     * @var integer 收件人列表ID
     */
    public $ReceiverId;

    /**
     * @var string 邮件主题
     */
    public $Subject;

    /**
     * @var integer 任务类型 1: 立即发送 2: 定时发送 3: 周期（频率）发送
     */
    public $TaskType;

    /**
     * @var string 邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人将会回复到腾讯云。
     */
    public $ReplyToAddresses;

    /**
     * @var Template 使用模板发送时，填写的模板相关参数
     */
    public $Template;

    /**
     * @var Simple 使用API直接发送内容时，填写的邮件内容
     */
    public $Simple;

    /**
     * @var array 需要发送附件时，填写附件相关参数。
     */
    public $Attachments;

    /**
     * @var CycleEmailParam 周期发送任务的必要参数
     */
    public $CycleParam;

    /**
     * @var TimedEmailParam 定时发送任务的必要参数
     */
    public $TimedParam;

    /**
     * @param string $FromEmailAddress 发信邮件地址。请填写发件人邮箱地址，例如：noreply@mail.qcloud.com。如需填写发件人说明，请按照
发信人 <邮件地址> 的方式填写，例如：
腾讯云团队 <noreply@mail.qcloud.com>
     * @param integer $ReceiverId 收件人列表ID
     * @param string $Subject 邮件主题
     * @param integer $TaskType 任务类型 1: 立即发送 2: 定时发送 3: 周期（频率）发送
     * @param string $ReplyToAddresses 邮件的“回复”电子邮件地址。可以填写您能收到邮件的邮箱地址，可以是个人邮箱。如果不填，收件人将会回复到腾讯云。
     * @param Template $Template 使用模板发送时，填写的模板相关参数
     * @param Simple $Simple 使用API直接发送内容时，填写的邮件内容
     * @param array $Attachments 需要发送附件时，填写附件相关参数。
     * @param CycleEmailParam $CycleParam 周期发送任务的必要参数
     * @param TimedEmailParam $TimedParam 定时发送任务的必要参数
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

        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("ReplyToAddresses",$param) and $param["ReplyToAddresses"] !== null) {
            $this->ReplyToAddresses = $param["ReplyToAddresses"];
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

        if (array_key_exists("CycleParam",$param) and $param["CycleParam"] !== null) {
            $this->CycleParam = new CycleEmailParam();
            $this->CycleParam->deserialize($param["CycleParam"]);
        }

        if (array_key_exists("TimedParam",$param) and $param["TimedParam"] !== null) {
            $this->TimedParam = new TimedEmailParam();
            $this->TimedParam->deserialize($param["TimedParam"]);
        }
    }
}
