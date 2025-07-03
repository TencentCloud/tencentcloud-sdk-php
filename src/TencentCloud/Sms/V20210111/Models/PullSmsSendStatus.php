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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 短信的下发状态详细信息
 *
 * @method integer getUserReceiveTime() 获取用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
 * @method void setUserReceiveTime(integer $UserReceiveTime) 设置用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
 * @method string getCountryCode() 获取国家（或地区）码。
 * @method void setCountryCode(string $CountryCode) 设置国家（或地区）码。
 * @method string getSubscriberNumber() 获取用户号码，普通格式，示例如：18501234444。
 * @method void setSubscriberNumber(string $SubscriberNumber) 设置用户号码，普通格式，示例如：18501234444。
 * @method string getPhoneNumber() 获取手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8618501234444， 其中前面有一个+号 ，86为国家码，18501234444为手机号。
 * @method void setPhoneNumber(string $PhoneNumber) 设置手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8618501234444， 其中前面有一个+号 ，86为国家码，18501234444为手机号。
 * @method string getSerialNo() 获取本次发送标识 ID。
 * @method void setSerialNo(string $SerialNo) 设置本次发送标识 ID。
 * @method string getReportStatus() 获取实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
 * @method void setReportStatus(string $ReportStatus) 设置实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
 * @method string getDescription() 获取用户接收短信状态描述。
 * @method void setDescription(string $Description) 设置用户接收短信状态描述。
 * @method string getSessionContext() 获取用户的 session 内容。与请求中的 SessionContext 一致，默认为空，如需开通请联系 [腾讯云短信小助手](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81) 评估。
 * @method void setSessionContext(string $SessionContext) 设置用户的 session 内容。与请求中的 SessionContext 一致，默认为空，如需开通请联系 [腾讯云短信小助手](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81) 评估。
 */
class PullSmsSendStatus extends AbstractModel
{
    /**
     * @var integer 用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
     */
    public $UserReceiveTime;

    /**
     * @var string 国家（或地区）码。
     */
    public $CountryCode;

    /**
     * @var string 用户号码，普通格式，示例如：18501234444。
     */
    public $SubscriberNumber;

    /**
     * @var string 手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8618501234444， 其中前面有一个+号 ，86为国家码，18501234444为手机号。
     */
    public $PhoneNumber;

    /**
     * @var string 本次发送标识 ID。
     */
    public $SerialNo;

    /**
     * @var string 实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
     */
    public $ReportStatus;

    /**
     * @var string 用户接收短信状态描述。
     */
    public $Description;

    /**
     * @var string 用户的 session 内容。与请求中的 SessionContext 一致，默认为空，如需开通请联系 [腾讯云短信小助手](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81) 评估。
     */
    public $SessionContext;

    /**
     * @param integer $UserReceiveTime 用户实际接收到短信的时间，UNIX 时间戳（单位：秒）。
     * @param string $CountryCode 国家（或地区）码。
     * @param string $SubscriberNumber 用户号码，普通格式，示例如：18501234444。
     * @param string $PhoneNumber 手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+8618501234444， 其中前面有一个+号 ，86为国家码，18501234444为手机号。
     * @param string $SerialNo 本次发送标识 ID。
     * @param string $ReportStatus 实际是否收到短信接收状态，SUCCESS（成功）、FAIL（失败）。
     * @param string $Description 用户接收短信状态描述。
     * @param string $SessionContext 用户的 session 内容。与请求中的 SessionContext 一致，默认为空，如需开通请联系 [腾讯云短信小助手](https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81) 评估。
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
        if (array_key_exists("UserReceiveTime",$param) and $param["UserReceiveTime"] !== null) {
            $this->UserReceiveTime = $param["UserReceiveTime"];
        }

        if (array_key_exists("CountryCode",$param) and $param["CountryCode"] !== null) {
            $this->CountryCode = $param["CountryCode"];
        }

        if (array_key_exists("SubscriberNumber",$param) and $param["SubscriberNumber"] !== null) {
            $this->SubscriberNumber = $param["SubscriberNumber"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("ReportStatus",$param) and $param["ReportStatus"] !== null) {
            $this->ReportStatus = $param["ReportStatus"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
