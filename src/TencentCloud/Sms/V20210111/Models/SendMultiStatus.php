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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发送短信状态
 *
 * @method string getSerialNo() 获取<p>发送流水号。</p>
 * @method void setSerialNo(string $SerialNo) 设置<p>发送流水号。</p>
 * @method string getPhoneNumber() 获取<p>手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
 * @method integer getFee() 获取<p>计费条数，计费规则请查询 <a href="https://cloud.tencent.com/document/product/382/36135">计费策略</a>。</p>
 * @method void setFee(integer $Fee) 设置<p>计费条数，计费规则请查询 <a href="https://cloud.tencent.com/document/product/382/36135">计费策略</a>。</p>
 * @method string getSessionContext() 获取<p>用户 session 内容。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>用户 session 内容。</p>
 * @method string getCode() 获取<p>短信请求错误码，具体含义请参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">错误码</a>，发送成功返回 &quot;Ok&quot;。</p>
 * @method void setCode(string $Code) 设置<p>短信请求错误码，具体含义请参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">错误码</a>，发送成功返回 &quot;Ok&quot;。</p>
 * @method string getMessage() 获取<p>短信请求错误码描述。</p>
 * @method void setMessage(string $Message) 设置<p>短信请求错误码描述。</p>
 * @method string getIsoCode() 获取<p>国家码或地区码，例如 US、MY 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051">国际/港澳台短信价格总览</a>。</p>
 * @method void setIsoCode(string $IsoCode) 设置<p>国家码或地区码，例如 US、MY 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051">国际/港澳台短信价格总览</a>。</p>
 */
class SendMultiStatus extends AbstractModel
{
    /**
     * @var string <p>发送流水号。</p>
     */
    public $SerialNo;

    /**
     * @var string <p>手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
     */
    public $PhoneNumber;

    /**
     * @var integer <p>计费条数，计费规则请查询 <a href="https://cloud.tencent.com/document/product/382/36135">计费策略</a>。</p>
     */
    public $Fee;

    /**
     * @var string <p>用户 session 内容。</p>
     */
    public $SessionContext;

    /**
     * @var string <p>短信请求错误码，具体含义请参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">错误码</a>，发送成功返回 &quot;Ok&quot;。</p>
     */
    public $Code;

    /**
     * @var string <p>短信请求错误码描述。</p>
     */
    public $Message;

    /**
     * @var string <p>国家码或地区码，例如 US、MY 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051">国际/港澳台短信价格总览</a>。</p>
     */
    public $IsoCode;

    /**
     * @param string $SerialNo <p>发送流水号。</p>
     * @param string $PhoneNumber <p>手机号码，E.164标准，+[国家或地区码][手机号] ，示例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
     * @param integer $Fee <p>计费条数，计费规则请查询 <a href="https://cloud.tencent.com/document/product/382/36135">计费策略</a>。</p>
     * @param string $SessionContext <p>用户 session 内容。</p>
     * @param string $Code <p>短信请求错误码，具体含义请参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">错误码</a>，发送成功返回 &quot;Ok&quot;。</p>
     * @param string $Message <p>短信请求错误码描述。</p>
     * @param string $IsoCode <p>国家码或地区码，例如 US、MY 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051">国际/港澳台短信价格总览</a>。</p>
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
        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("Fee",$param) and $param["Fee"] !== null) {
            $this->Fee = $param["Fee"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("IsoCode",$param) and $param["IsoCode"] !== null) {
            $this->IsoCode = $param["IsoCode"];
        }
    }
}
