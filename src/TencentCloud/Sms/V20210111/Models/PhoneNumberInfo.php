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
 * 号码信息。
 *
 * @method string getCode() 获取号码信息查询错误码，查询成功返回 "Ok"。
 * @method void setCode(string $Code) 设置号码信息查询错误码，查询成功返回 "Ok"。
 * @method string getMessage() 获取号码信息查询错误码描述。
 * @method void setMessage(string $Message) 设置号码信息查询错误码描述。
 * @method string getNationCode() 获取国家（或地区）码。
 * @method void setNationCode(string $NationCode) 设置国家（或地区）码。
 * @method string getSubscriberNumber() 获取用户号码，去除国家或地区码前缀的普通格式，示例如：13711112222。
 * @method void setSubscriberNumber(string $SubscriberNumber) 设置用户号码，去除国家或地区码前缀的普通格式，示例如：13711112222。
 * @method string getPhoneNumber() 获取解析后的规范的 E.164 号码，与下发短信的号码解析结果一致。解析失败时会原样返回。
 * @method void setPhoneNumber(string $PhoneNumber) 设置解析后的规范的 E.164 号码，与下发短信的号码解析结果一致。解析失败时会原样返回。
 * @method string getIsoCode() 获取国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF。
 * @method void setIsoCode(string $IsoCode) 设置国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF。
 * @method string getIsoName() 获取国家码或地区名，例如 China，可参考 [国际/港澳台短信价格总览](https://cloud.tencent.com/document/product/382/18051#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
 * @method void setIsoName(string $IsoName) 设置国家码或地区名，例如 China，可参考 [国际/港澳台短信价格总览](https://cloud.tencent.com/document/product/382/18051#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
 */
class PhoneNumberInfo extends AbstractModel
{
    /**
     * @var string 号码信息查询错误码，查询成功返回 "Ok"。
     */
    public $Code;

    /**
     * @var string 号码信息查询错误码描述。
     */
    public $Message;

    /**
     * @var string 国家（或地区）码。
     */
    public $NationCode;

    /**
     * @var string 用户号码，去除国家或地区码前缀的普通格式，示例如：13711112222。
     */
    public $SubscriberNumber;

    /**
     * @var string 解析后的规范的 E.164 号码，与下发短信的号码解析结果一致。解析失败时会原样返回。
     */
    public $PhoneNumber;

    /**
     * @var string 国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF。
     */
    public $IsoCode;

    /**
     * @var string 国家码或地区名，例如 China，可参考 [国际/港澳台短信价格总览](https://cloud.tencent.com/document/product/382/18051#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
     */
    public $IsoName;

    /**
     * @param string $Code 号码信息查询错误码，查询成功返回 "Ok"。
     * @param string $Message 号码信息查询错误码描述。
     * @param string $NationCode 国家（或地区）码。
     * @param string $SubscriberNumber 用户号码，去除国家或地区码前缀的普通格式，示例如：13711112222。
     * @param string $PhoneNumber 解析后的规范的 E.164 号码，与下发短信的号码解析结果一致。解析失败时会原样返回。
     * @param string $IsoCode 国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF。
     * @param string $IsoName 国家码或地区名，例如 China，可参考 [国际/港澳台短信价格总览](https://cloud.tencent.com/document/product/382/18051#.E6.97.A5.E7.BB.93.E5.90.8E.E4.BB.98.E8.B4.B9.3Ca-id.3D.22post-payment.22.3E.3C.2Fa.3E)
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("NationCode",$param) and $param["NationCode"] !== null) {
            $this->NationCode = $param["NationCode"];
        }

        if (array_key_exists("SubscriberNumber",$param) and $param["SubscriberNumber"] !== null) {
            $this->SubscriberNumber = $param["SubscriberNumber"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("IsoCode",$param) and $param["IsoCode"] !== null) {
            $this->IsoCode = $param["IsoCode"];
        }

        if (array_key_exists("IsoName",$param) and $param["IsoName"] !== null) {
            $this->IsoName = $param["IsoName"];
        }
    }
}
