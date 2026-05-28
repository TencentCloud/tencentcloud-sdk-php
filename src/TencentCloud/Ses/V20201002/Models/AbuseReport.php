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
 * 垃圾投诉数据
 *
 * @method string getDeliverTime() 获取<p>发送时间</p>
 * @method void setDeliverTime(string $DeliverTime) 设置<p>发送时间</p>
 * @method string getOriginalMailFrom() 获取<p>发信地址</p>
 * @method void setOriginalMailFrom(string $OriginalMailFrom) 设置<p>发信地址</p>
 * @method string getOriginalRcptTo() 获取<p>收信地址</p>
 * @method void setOriginalRcptTo(string $OriginalRcptTo) 设置<p>收信地址</p>
 * @method string getFromDomain() 获取<p>发信域名</p>
 * @method void setFromDomain(string $FromDomain) 设置<p>发信域名</p>
 * @method string getComplainTime() 获取<p>投诉时间</p>
 * @method void setComplainTime(string $ComplainTime) 设置<p>投诉时间</p>
 * @method string getMta() 获取<p>收信域名</p>
 * @method void setMta(string $Mta) 设置<p>收信域名</p>
 * @method string getSourceIp() 获取<p>来源ip</p>
 * @method void setSourceIp(string $SourceIp) 设置<p>来源ip</p>
 * @method string getInsertTime() 获取<p>数据时间</p>
 * @method void setInsertTime(string $InsertTime) 设置<p>数据时间</p>
 * @method string getTemplateId() 获取<p>模板ID</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板ID</p>
 * @method string getBulkId() 获取<p>bulkId</p>
 * @method void setBulkId(string $BulkId) 设置<p>bulkId</p>
 * @method string getMessageId() 获取<p>邮件Message-Id</p>
 * @method void setMessageId(string $MessageId) 设置<p>邮件Message-Id</p>
 * @method string getAbuseTime() 获取<p>投诉时间</p>
 * @method void setAbuseTime(string $AbuseTime) 设置<p>投诉时间</p>
 * @method string getSubject() 获取<p>邮件主题</p>
 * @method void setSubject(string $Subject) 设置<p>邮件主题</p>
 */
class AbuseReport extends AbstractModel
{
    /**
     * @var string <p>发送时间</p>
     */
    public $DeliverTime;

    /**
     * @var string <p>发信地址</p>
     */
    public $OriginalMailFrom;

    /**
     * @var string <p>收信地址</p>
     */
    public $OriginalRcptTo;

    /**
     * @var string <p>发信域名</p>
     */
    public $FromDomain;

    /**
     * @var string <p>投诉时间</p>
     */
    public $ComplainTime;

    /**
     * @var string <p>收信域名</p>
     */
    public $Mta;

    /**
     * @var string <p>来源ip</p>
     */
    public $SourceIp;

    /**
     * @var string <p>数据时间</p>
     */
    public $InsertTime;

    /**
     * @var string <p>模板ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>bulkId</p>
     */
    public $BulkId;

    /**
     * @var string <p>邮件Message-Id</p>
     */
    public $MessageId;

    /**
     * @var string <p>投诉时间</p>
     */
    public $AbuseTime;

    /**
     * @var string <p>邮件主题</p>
     */
    public $Subject;

    /**
     * @param string $DeliverTime <p>发送时间</p>
     * @param string $OriginalMailFrom <p>发信地址</p>
     * @param string $OriginalRcptTo <p>收信地址</p>
     * @param string $FromDomain <p>发信域名</p>
     * @param string $ComplainTime <p>投诉时间</p>
     * @param string $Mta <p>收信域名</p>
     * @param string $SourceIp <p>来源ip</p>
     * @param string $InsertTime <p>数据时间</p>
     * @param string $TemplateId <p>模板ID</p>
     * @param string $BulkId <p>bulkId</p>
     * @param string $MessageId <p>邮件Message-Id</p>
     * @param string $AbuseTime <p>投诉时间</p>
     * @param string $Subject <p>邮件主题</p>
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
        if (array_key_exists("DeliverTime",$param) and $param["DeliverTime"] !== null) {
            $this->DeliverTime = $param["DeliverTime"];
        }

        if (array_key_exists("OriginalMailFrom",$param) and $param["OriginalMailFrom"] !== null) {
            $this->OriginalMailFrom = $param["OriginalMailFrom"];
        }

        if (array_key_exists("OriginalRcptTo",$param) and $param["OriginalRcptTo"] !== null) {
            $this->OriginalRcptTo = $param["OriginalRcptTo"];
        }

        if (array_key_exists("FromDomain",$param) and $param["FromDomain"] !== null) {
            $this->FromDomain = $param["FromDomain"];
        }

        if (array_key_exists("ComplainTime",$param) and $param["ComplainTime"] !== null) {
            $this->ComplainTime = $param["ComplainTime"];
        }

        if (array_key_exists("Mta",$param) and $param["Mta"] !== null) {
            $this->Mta = $param["Mta"];
        }

        if (array_key_exists("SourceIp",$param) and $param["SourceIp"] !== null) {
            $this->SourceIp = $param["SourceIp"];
        }

        if (array_key_exists("InsertTime",$param) and $param["InsertTime"] !== null) {
            $this->InsertTime = $param["InsertTime"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("BulkId",$param) and $param["BulkId"] !== null) {
            $this->BulkId = $param["BulkId"];
        }

        if (array_key_exists("MessageId",$param) and $param["MessageId"] !== null) {
            $this->MessageId = $param["MessageId"];
        }

        if (array_key_exists("AbuseTime",$param) and $param["AbuseTime"] !== null) {
            $this->AbuseTime = $param["AbuseTime"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }
    }
}
