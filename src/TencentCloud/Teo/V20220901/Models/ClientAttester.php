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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 认证选项配置。
 *
 * @method string getId() 获取认证选项 ID。
 * @method void setId(string $Id) 设置认证选项 ID。
 * @method string getName() 获取认证选项名称。
 * @method void setName(string $Name) 设置认证选项名称。
 * @method string getType() 获取认证规则类型。仅出参返回，取值有：
<li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li>
<li>CUSTOM: 用户自定义规则。</li>
 * @method void setType(string $Type) 设置认证规则类型。仅出参返回，取值有：
<li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li>
<li>CUSTOM: 用户自定义规则。</li>
 * @method string getAttesterSource() 获取认证方法。取值有：
<li>TC-RCE: 使用风险识别 RCE 进行认证；</li>
<li>TC-CAPTCHA: 使用天御验证码进行认证。</li>
 * @method void setAttesterSource(string $AttesterSource) 设置认证方法。取值有：
<li>TC-RCE: 使用风险识别 RCE 进行认证；</li>
<li>TC-CAPTCHA: 使用天御验证码进行认证。</li>
 * @method string getAttesterDuration() 获取认证有效时间。默认为 60s，支持的单位有：
<li>s：秒，取值范围 60～43200；</li>
<li>m：分，取值范围 1～720；</li>
<li>h：小时，取值范围 1～12。</li>
 * @method void setAttesterDuration(string $AttesterDuration) 设置认证有效时间。默认为 60s，支持的单位有：
<li>s：秒，取值范围 60～43200；</li>
<li>m：分，取值范围 1～720；</li>
<li>h：小时，取值范围 1～12。</li>
 * @method TCRCEOption getTCRCEOption() 获取TC-RCE 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
 * @method void setTCRCEOption(TCRCEOption $TCRCEOption) 设置TC-RCE 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
 * @method TCCaptchaOption getTCCaptchaOption() 获取TC-CAPTCHA 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
 * @method void setTCCaptchaOption(TCCaptchaOption $TCCaptchaOption) 设置TC-CAPTCHA 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
 */
class ClientAttester extends AbstractModel
{
    /**
     * @var string 认证选项 ID。
     */
    public $Id;

    /**
     * @var string 认证选项名称。
     */
    public $Name;

    /**
     * @var string 认证规则类型。仅出参返回，取值有：
<li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li>
<li>CUSTOM: 用户自定义规则。</li>
     */
    public $Type;

    /**
     * @var string 认证方法。取值有：
<li>TC-RCE: 使用风险识别 RCE 进行认证；</li>
<li>TC-CAPTCHA: 使用天御验证码进行认证。</li>
     */
    public $AttesterSource;

    /**
     * @var string 认证有效时间。默认为 60s，支持的单位有：
<li>s：秒，取值范围 60～43200；</li>
<li>m：分，取值范围 1～720；</li>
<li>h：小时，取值范围 1～12。</li>
     */
    public $AttesterDuration;

    /**
     * @var TCRCEOption TC-RCE 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
     */
    public $TCRCEOption;

    /**
     * @var TCCaptchaOption TC-CAPTCHA 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
     */
    public $TCCaptchaOption;

    /**
     * @param string $Id 认证选项 ID。
     * @param string $Name 认证选项名称。
     * @param string $Type 认证规则类型。仅出参返回，取值有：
<li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li>
<li>CUSTOM: 用户自定义规则。</li>
     * @param string $AttesterSource 认证方法。取值有：
<li>TC-RCE: 使用风险识别 RCE 进行认证；</li>
<li>TC-CAPTCHA: 使用天御验证码进行认证。</li>
     * @param string $AttesterDuration 认证有效时间。默认为 60s，支持的单位有：
<li>s：秒，取值范围 60～43200；</li>
<li>m：分，取值范围 1～720；</li>
<li>h：小时，取值范围 1～12。</li>
     * @param TCRCEOption $TCRCEOption TC-RCE 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
     * @param TCCaptchaOption $TCCaptchaOption TC-CAPTCHA 认证的配置信息。
<li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AttesterSource",$param) and $param["AttesterSource"] !== null) {
            $this->AttesterSource = $param["AttesterSource"];
        }

        if (array_key_exists("AttesterDuration",$param) and $param["AttesterDuration"] !== null) {
            $this->AttesterDuration = $param["AttesterDuration"];
        }

        if (array_key_exists("TCRCEOption",$param) and $param["TCRCEOption"] !== null) {
            $this->TCRCEOption = new TCRCEOption();
            $this->TCRCEOption->deserialize($param["TCRCEOption"]);
        }

        if (array_key_exists("TCCaptchaOption",$param) and $param["TCCaptchaOption"] !== null) {
            $this->TCCaptchaOption = new TCCaptchaOption();
            $this->TCCaptchaOption->deserialize($param["TCCaptchaOption"]);
        }
    }
}
