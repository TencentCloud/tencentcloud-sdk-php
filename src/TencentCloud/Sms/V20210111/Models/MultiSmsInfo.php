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
 * 批量发送中每个手机号的发送信息。
 *
 * @method string getPhoneNumber() 获取<p>下发手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为国际/港澳台手机号。 例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
 * @method void setPhoneNumber(string $PhoneNumber) 设置<p>下发手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为国际/港澳台手机号。 例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
 * @method string getTemplateId() 获取<p>模板 ID，必须填写已审核通过的模板 ID。模板 ID 可前往 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，仅支持使用国际/港澳台短信模板。</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模板 ID，必须填写已审核通过的模板 ID。模板 ID 可前往 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，仅支持使用国际/港澳台短信模板。</p>
 * @method array getTemplateParamSet() 获取<p>模板参数，若无模板参数，则设置为空。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>模板参数的个数需要与 TemplateId 对应模板的变量个数保持一致。</p></div>    </div></blockquote></p>
 * @method void setTemplateParamSet(array $TemplateParamSet) 设置<p>模板参数，若无模板参数，则设置为空。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>模板参数的个数需要与 TemplateId 对应模板的变量个数保持一致。</p></div>    </div></blockquote></p>
 * @method string getSenderId() 获取<p>国际/港澳台短信 Sender ID。可参考 <a href="https://cloud.tencent.com/document/product/382/102831">Sender ID 说明</a>。注：国际/港澳台短信已申请独立 SenderId 需要填写该字段，默认使用公共 SenderId，无需填写该字段。</p>
 * @method void setSenderId(string $SenderId) 设置<p>国际/港澳台短信 Sender ID。可参考 <a href="https://cloud.tencent.com/document/product/382/102831">Sender ID 说明</a>。注：国际/港澳台短信已申请独立 SenderId 需要填写该字段，默认使用公共 SenderId，无需填写该字段。</p>
 * @method string getSessionContext() 获取<p>用户的 session 内容，可以携带用户侧 ID 等上下文信息，server 会原样返回。注意长度需小于512字节。</p>
 * @method void setSessionContext(string $SessionContext) 设置<p>用户的 session 内容，可以携带用户侧 ID 等上下文信息，server 会原样返回。注意长度需小于512字节。</p>
 */
class MultiSmsInfo extends AbstractModel
{
    /**
     * @var string <p>下发手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为国际/港澳台手机号。 例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
     */
    public $PhoneNumber;

    /**
     * @var string <p>模板 ID，必须填写已审核通过的模板 ID。模板 ID 可前往 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，仅支持使用国际/港澳台短信模板。</p>
     */
    public $TemplateId;

    /**
     * @var array <p>模板参数，若无模板参数，则设置为空。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>模板参数的个数需要与 TemplateId 对应模板的变量个数保持一致。</p></div>    </div></blockquote></p>
     */
    public $TemplateParamSet;

    /**
     * @var string <p>国际/港澳台短信 Sender ID。可参考 <a href="https://cloud.tencent.com/document/product/382/102831">Sender ID 说明</a>。注：国际/港澳台短信已申请独立 SenderId 需要填写该字段，默认使用公共 SenderId，无需填写该字段。</p>
     */
    public $SenderId;

    /**
     * @var string <p>用户的 session 内容，可以携带用户侧 ID 等上下文信息，server 会原样返回。注意长度需小于512字节。</p>
     */
    public $SessionContext;

    /**
     * @param string $PhoneNumber <p>下发手机号码，采用 E.164 标准，格式为+[国家或地区码][手机号]，单次请求最多支持200个手机号且要求全为国际/港澳台手机号。 例如：+60198890000， 其中前面有一个+号 ，60为国家码，198890000为手机号。</p>
     * @param string $TemplateId <p>模板 ID，必须填写已审核通过的模板 ID。模板 ID 可前往 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，仅支持使用国际/港澳台短信模板。</p>
     * @param array $TemplateParamSet <p>模板参数，若无模板参数，则设置为空。<blockquote class="rno-document-tips rno-document-tips-notice">    <div class="rno-document-tips-body">        <i class="rno-document-tip-icon"></i>        <div class="rno-document-tip-title">注意</div>        <div class="rno-document-tip-desc"><p>模板参数的个数需要与 TemplateId 对应模板的变量个数保持一致。</p></div>    </div></blockquote></p>
     * @param string $SenderId <p>国际/港澳台短信 Sender ID。可参考 <a href="https://cloud.tencent.com/document/product/382/102831">Sender ID 说明</a>。注：国际/港澳台短信已申请独立 SenderId 需要填写该字段，默认使用公共 SenderId，无需填写该字段。</p>
     * @param string $SessionContext <p>用户的 session 内容，可以携带用户侧 ID 等上下文信息，server 会原样返回。注意长度需小于512字节。</p>
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

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("TemplateParamSet",$param) and $param["TemplateParamSet"] !== null) {
            $this->TemplateParamSet = $param["TemplateParamSet"];
        }

        if (array_key_exists("SenderId",$param) and $param["SenderId"] !== null) {
            $this->SenderId = $param["SenderId"];
        }

        if (array_key_exists("SessionContext",$param) and $param["SessionContext"] !== null) {
            $this->SessionContext = $param["SessionContext"];
        }
    }
}
