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
 * @method string getDeliverTime() 获取发送时间
 * @method void setDeliverTime(string $DeliverTime) 设置发送时间
 * @method string getOriginalMailFrom() 获取发信地址
 * @method void setOriginalMailFrom(string $OriginalMailFrom) 设置发信地址
 * @method string getOriginalRcptTo() 获取收信地址
 * @method void setOriginalRcptTo(string $OriginalRcptTo) 设置收信地址
 * @method string getFromDomain() 获取发信域名
 * @method void setFromDomain(string $FromDomain) 设置发信域名
 * @method string getComplainTime() 获取投诉时间
 * @method void setComplainTime(string $ComplainTime) 设置投诉时间
 * @method string getMta() 获取收信域名
 * @method void setMta(string $Mta) 设置收信域名
 * @method string getSourceIp() 获取来源ip
 * @method void setSourceIp(string $SourceIp) 设置来源ip
 * @method string getInsertTime() 获取数据时间
 * @method void setInsertTime(string $InsertTime) 设置数据时间
 * @method string getTemplateId() 获取模板id
 * @method void setTemplateId(string $TemplateId) 设置模板id
 * @method string getBulkId() 获取bulkId
 * @method void setBulkId(string $BulkId) 设置bulkId
 * @method string getMessageId() 获取邮件Message-Id
 * @method void setMessageId(string $MessageId) 设置邮件Message-Id
 * @method string getAbuseTime() 获取投诉时间
 * @method void setAbuseTime(string $AbuseTime) 设置投诉时间
 * @method string getSubject() 获取邮件主题
 * @method void setSubject(string $Subject) 设置邮件主题
 */
class AbuseReport extends AbstractModel
{
    /**
     * @var string 发送时间
     */
    public $DeliverTime;

    /**
     * @var string 发信地址
     */
    public $OriginalMailFrom;

    /**
     * @var string 收信地址
     */
    public $OriginalRcptTo;

    /**
     * @var string 发信域名
     */
    public $FromDomain;

    /**
     * @var string 投诉时间
     */
    public $ComplainTime;

    /**
     * @var string 收信域名
     */
    public $Mta;

    /**
     * @var string 来源ip
     */
    public $SourceIp;

    /**
     * @var string 数据时间
     */
    public $InsertTime;

    /**
     * @var string 模板id
     */
    public $TemplateId;

    /**
     * @var string bulkId
     */
    public $BulkId;

    /**
     * @var string 邮件Message-Id
     */
    public $MessageId;

    /**
     * @var string 投诉时间
     */
    public $AbuseTime;

    /**
     * @var string 邮件主题
     */
    public $Subject;

    /**
     * @param string $DeliverTime 发送时间
     * @param string $OriginalMailFrom 发信地址
     * @param string $OriginalRcptTo 收信地址
     * @param string $FromDomain 发信域名
     * @param string $ComplainTime 投诉时间
     * @param string $Mta 收信域名
     * @param string $SourceIp 来源ip
     * @param string $InsertTime 数据时间
     * @param string $TemplateId 模板id
     * @param string $BulkId bulkId
     * @param string $MessageId 邮件Message-Id
     * @param string $AbuseTime 投诉时间
     * @param string $Subject 邮件主题
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
