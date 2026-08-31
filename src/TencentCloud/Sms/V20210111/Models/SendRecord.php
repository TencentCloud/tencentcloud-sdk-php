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
 * 短信发送记录信息
 *
 * @method string getPhoneNumber() 获取<p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
 * @method string getSerialNo() 获取<p>发送流水号，与短信发送接口返回的发送流水号一致。</p>
 * @method void setSerialNo(string $SerialNo) 设置<p>发送流水号，与短信发送接口返回的发送流水号一致。</p>
 * @method integer getSendStatus() 获取<p>发送状态。</p><p>枚举值：</p><ul><li>1： 提交失败</li><li>2： 提交成功，送达成功</li><li>3： 提交成功，发送中</li><li>4： 提交成功，送达失败</li></ul>
 * @method void setSendStatus(integer $SendStatus) 设置<p>发送状态。</p><p>枚举值：</p><ul><li>1： 提交失败</li><li>2： 提交成功，送达成功</li><li>3： 提交成功，发送中</li><li>4： 提交成功，送达失败</li></ul>
 * @method string getRequestCode() 获取<p>请求状态码，可参考 <a href="https://cloud.tencent.com/document/api/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">短信 API 3.0 发送错误码</a>。</p>
 * @method void setRequestCode(string $RequestCode) 设置<p>请求状态码，可参考 <a href="https://cloud.tencent.com/document/api/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">短信 API 3.0 发送错误码</a>。</p>
 * @method string getStatusCode() 获取<p>回执状态码，仅发送状态为 2（提交成功，送达成功）和 4（提交成功，送达失败）时有值，其余状态为空字符串，可参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E5.9B.9E.E6.89.A7.E7.8A.B6.E6.80.81.E9.94.99.E8.AF.AF.E7.A0.81">回执状态错误码</a>。</p>
 * @method void setStatusCode(string $StatusCode) 设置<p>回执状态码，仅发送状态为 2（提交成功，送达成功）和 4（提交成功，送达失败）时有值，其余状态为空字符串，可参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E5.9B.9E.E6.89.A7.E7.8A.B6.E6.80.81.E9.94.99.E8.AF.AF.E7.A0.81">回执状态错误码</a>。</p>
 * @method string getIsoCode() 获取<p>国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051#402a55da-83ac-4e79-a604-b9de0c507756">国际/港澳台短信价格总览</a>。</p>
 * @method void setIsoCode(string $IsoCode) 设置<p>国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051#402a55da-83ac-4e79-a604-b9de0c507756">国际/港澳台短信价格总览</a>。</p>
 * @method string getContent() 获取<p>短信下发内容，为保证信息安全，短信中的部分入参信息会脱敏存储，对应发送记录查询结果中包含的打码内容，用户实际接收到的短信内容为正常完整内容。有疑问可咨询 <a href="https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81">腾讯云小助手</a> 。</p>
 * @method void setContent(string $Content) 设置<p>短信下发内容，为保证信息安全，短信中的部分入参信息会脱敏存储，对应发送记录查询结果中包含的打码内容，用户实际接收到的短信内容为正常完整内容。有疑问可咨询 <a href="https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81">腾讯云小助手</a> 。</p>
 * @method integer getSendTime() 获取<p>发送时间，UNIX 时间戳（秒）。</p><p>单位：秒</p>
 * @method void setSendTime(integer $SendTime) 设置<p>发送时间，UNIX 时间戳（秒）。</p><p>单位：秒</p>
 * @method integer getUserReceiveTime() 获取<p>用户实际收到短信的时间，UNIX 时间戳（秒），仅发送状态为2（提交成功，送达成功）时有值 ，其余状态默认为 0 。</p><p>单位：秒</p>
 * @method void setUserReceiveTime(integer $UserReceiveTime) 设置<p>用户实际收到短信的时间，UNIX 时间戳（秒），仅发送状态为2（提交成功，送达成功）时有值 ，其余状态默认为 0 。</p><p>单位：秒</p>
 */
class SendRecord extends AbstractModel
{
    /**
     * @var string <p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
     */
    public $PhoneNumber;

    /**
     * @var string <p>发送流水号，与短信发送接口返回的发送流水号一致。</p>
     */
    public $SerialNo;

    /**
     * @var integer <p>发送状态。</p><p>枚举值：</p><ul><li>1： 提交失败</li><li>2： 提交成功，送达成功</li><li>3： 提交成功，发送中</li><li>4： 提交成功，送达失败</li></ul>
     */
    public $SendStatus;

    /**
     * @var string <p>请求状态码，可参考 <a href="https://cloud.tencent.com/document/api/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">短信 API 3.0 发送错误码</a>。</p>
     */
    public $RequestCode;

    /**
     * @var string <p>回执状态码，仅发送状态为 2（提交成功，送达成功）和 4（提交成功，送达失败）时有值，其余状态为空字符串，可参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E5.9B.9E.E6.89.A7.E7.8A.B6.E6.80.81.E9.94.99.E8.AF.AF.E7.A0.81">回执状态错误码</a>。</p>
     */
    public $StatusCode;

    /**
     * @var string <p>国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051#402a55da-83ac-4e79-a604-b9de0c507756">国际/港澳台短信价格总览</a>。</p>
     */
    public $IsoCode;

    /**
     * @var string <p>短信下发内容，为保证信息安全，短信中的部分入参信息会脱敏存储，对应发送记录查询结果中包含的打码内容，用户实际接收到的短信内容为正常完整内容。有疑问可咨询 <a href="https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81">腾讯云小助手</a> 。</p>
     */
    public $Content;

    /**
     * @var integer <p>发送时间，UNIX 时间戳（秒）。</p><p>单位：秒</p>
     */
    public $SendTime;

    /**
     * @var integer <p>用户实际收到短信的时间，UNIX 时间戳（秒），仅发送状态为2（提交成功，送达成功）时有值 ，其余状态默认为 0 。</p><p>单位：秒</p>
     */
    public $UserReceiveTime;

    /**
     * @param string $PhoneNumber <p>下发的手机号码，依据 E.164 标准为：+[国家（或地区）码][手机号] ，示例如：+8613601238015， 其中前面有一个+号 ，86为国家码，13601238015为手机号。</p>
     * @param string $SerialNo <p>发送流水号，与短信发送接口返回的发送流水号一致。</p>
     * @param integer $SendStatus <p>发送状态。</p><p>枚举值：</p><ul><li>1： 提交失败</li><li>2： 提交成功，送达成功</li><li>3： 提交成功，发送中</li><li>4： 提交成功，送达失败</li></ul>
     * @param string $RequestCode <p>请求状态码，可参考 <a href="https://cloud.tencent.com/document/api/382/59177#.E7.9F.AD.E4.BF.A1-API-3.0-.E5.8F.91.E9.80.81.E9.94.99.E8.AF.AF.E7.A0.81">短信 API 3.0 发送错误码</a>。</p>
     * @param string $StatusCode <p>回执状态码，仅发送状态为 2（提交成功，送达成功）和 4（提交成功，送达失败）时有值，其余状态为空字符串，可参考 <a href="https://cloud.tencent.com/document/product/382/59177#.E5.9B.9E.E6.89.A7.E7.8A.B6.E6.80.81.E9.94.99.E8.AF.AF.E7.A0.81">回执状态错误码</a>。</p>
     * @param string $IsoCode <p>国家码或地区码，例如 CN、US 等，对于未识别出国家码或者地区码，默认返回 DEF，具体支持列表请参考 <a href="https://cloud.tencent.com/document/product/382/18051#402a55da-83ac-4e79-a604-b9de0c507756">国际/港澳台短信价格总览</a>。</p>
     * @param string $Content <p>短信下发内容，为保证信息安全，短信中的部分入参信息会脱敏存储，对应发送记录查询结果中包含的打码内容，用户实际接收到的短信内容为正常完整内容。有疑问可咨询 <a href="https://cloud.tencent.com/document/product/382/3773#.E6.8A.80.E6.9C.AF.E4.BA.A4.E6.B5.81">腾讯云小助手</a> 。</p>
     * @param integer $SendTime <p>发送时间，UNIX 时间戳（秒）。</p><p>单位：秒</p>
     * @param integer $UserReceiveTime <p>用户实际收到短信的时间，UNIX 时间戳（秒），仅发送状态为2（提交成功，送达成功）时有值 ，其余状态默认为 0 。</p><p>单位：秒</p>
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
        if (array_key_exists("PhoneNumber",$param) and $param["PhoneNumber"] !== null) {
            $this->PhoneNumber = $param["PhoneNumber"];
        }

        if (array_key_exists("SerialNo",$param) and $param["SerialNo"] !== null) {
            $this->SerialNo = $param["SerialNo"];
        }

        if (array_key_exists("SendStatus",$param) and $param["SendStatus"] !== null) {
            $this->SendStatus = $param["SendStatus"];
        }

        if (array_key_exists("RequestCode",$param) and $param["RequestCode"] !== null) {
            $this->RequestCode = $param["RequestCode"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("IsoCode",$param) and $param["IsoCode"] !== null) {
            $this->IsoCode = $param["IsoCode"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("SendTime",$param) and $param["SendTime"] !== null) {
            $this->SendTime = $param["SendTime"];
        }

        if (array_key_exists("UserReceiveTime",$param) and $param["UserReceiveTime"] !== null) {
            $this->UserReceiveTime = $param["UserReceiveTime"];
        }
    }
}
