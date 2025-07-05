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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 签署方在使用个人印章签署控件（SIGN_SIGNATURE） 时可使用的签署方式
 *
 * @method string getRecipientId() 获取签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
 * @method void setRecipientId(string $RecipientId) 设置签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
 * @method array getValues() 获取签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式，可多选

签名方式：
<ul>
<li>HANDWRITE-手写签名</li>
<li>ESIGN-个人印章类型</li>
<li>OCR_ESIGN-AI智能识别手写签名</li>
<li>SYSTEM_ESIGN-系统签名</li>
</ul>
 * @method void setValues(array $Values) 设置签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式，可多选

签名方式：
<ul>
<li>HANDWRITE-手写签名</li>
<li>ESIGN-个人印章类型</li>
<li>OCR_ESIGN-AI智能识别手写签名</li>
<li>SYSTEM_ESIGN-系统签名</li>
</ul>
 */
class ApproverComponentLimitType extends AbstractModel
{
    /**
     * @var string 签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
     */
    public $RecipientId;

    /**
     * @var array 签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式，可多选

签名方式：
<ul>
<li>HANDWRITE-手写签名</li>
<li>ESIGN-个人印章类型</li>
<li>OCR_ESIGN-AI智能识别手写签名</li>
<li>SYSTEM_ESIGN-系统签名</li>
</ul>
     */
    public $Values;

    /**
     * @param string $RecipientId 签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。
     * @param array $Values 签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式，可多选

签名方式：
<ul>
<li>HANDWRITE-手写签名</li>
<li>ESIGN-个人印章类型</li>
<li>OCR_ESIGN-AI智能识别手写签名</li>
<li>SYSTEM_ESIGN-系统签名</li>
</ul>
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
        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
