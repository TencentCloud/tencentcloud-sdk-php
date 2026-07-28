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
 * @method string getId() 获取<p>认证选项 ID。</p>
 * @method void setId(string $Id) 设置<p>认证选项 ID。</p>
 * @method string getName() 获取<p>认证选项名称。</p>
 * @method void setName(string $Name) 设置<p>认证选项名称。</p>
 * @method string getType() 获取<p>认证规则类型。仅出参返回，取值有：</p><li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li><li>CUSTOM: 用户自定义规则。</li>
 * @method void setType(string $Type) 设置<p>认证规则类型。仅出参返回，取值有：</p><li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li><li>CUSTOM: 用户自定义规则。</li>
 * @method string getAttesterSource() 获取<p>认证方法。取值有：</p><li>TC-RCE: 使用风险识别 RCE 进行认证；</li><li>TC-CAPTCHA: 使用天御验证码进行认证；</li><li>TC-EO-CAPTCHA: 使用 EdgeOne 人机校验进行认证。</li>
 * @method void setAttesterSource(string $AttesterSource) 设置<p>认证方法。取值有：</p><li>TC-RCE: 使用风险识别 RCE 进行认证；</li><li>TC-CAPTCHA: 使用天御验证码进行认证；</li><li>TC-EO-CAPTCHA: 使用 EdgeOne 人机校验进行认证。</li>
 * @method string getAttesterDuration() 获取<p>认证有效时间。默认为 60s，支持的单位有：</p><li>s：秒，取值范围 60～43200；</li><li>m：分，取值范围 1～720；</li><li>h：小时，取值范围 1～12。</li>
 * @method void setAttesterDuration(string $AttesterDuration) 设置<p>认证有效时间。默认为 60s，支持的单位有：</p><li>s：秒，取值范围 60～43200；</li><li>m：分，取值范围 1～720；</li><li>h：小时，取值范围 1～12。</li>
 * @method string getUsageLimit() 获取<p>是否开启认证结果使用限制。 </p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
 * @method void setUsageLimit(string $UsageLimit) 设置<p>是否开启认证结果使用限制。 </p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
 * @method integer getMaxUsageCount() 获取<p>认证结果最大使用次数。当 UsageLimit 为 on 时，此字段必填。</p><p>取值范围：[1, 100000]</p>
 * @method void setMaxUsageCount(integer $MaxUsageCount) 设置<p>认证结果最大使用次数。当 UsageLimit 为 on 时，此字段必填。</p><p>取值范围：[1, 100000]</p>
 * @method TCRCEOption getTCRCEOption() 获取<p>TC-RCE 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
 * @method void setTCRCEOption(TCRCEOption $TCRCEOption) 设置<p>TC-RCE 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
 * @method TCCaptchaOption getTCCaptchaOption() 获取<p>TC-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
 * @method void setTCCaptchaOption(TCCaptchaOption $TCCaptchaOption) 设置<p>TC-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
 * @method TCEOCaptchaOption getTCEOCaptchaOption() 获取<p>TC-EO-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-EO-CAPTCHA 时，此字段必填。</li>
 * @method void setTCEOCaptchaOption(TCEOCaptchaOption $TCEOCaptchaOption) 设置<p>TC-EO-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-EO-CAPTCHA 时，此字段必填。</li>
 */
class ClientAttester extends AbstractModel
{
    /**
     * @var string <p>认证选项 ID。</p>
     */
    public $Id;

    /**
     * @var string <p>认证选项名称。</p>
     */
    public $Name;

    /**
     * @var string <p>认证规则类型。仅出参返回，取值有：</p><li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li><li>CUSTOM: 用户自定义规则。</li>
     */
    public $Type;

    /**
     * @var string <p>认证方法。取值有：</p><li>TC-RCE: 使用风险识别 RCE 进行认证；</li><li>TC-CAPTCHA: 使用天御验证码进行认证；</li><li>TC-EO-CAPTCHA: 使用 EdgeOne 人机校验进行认证。</li>
     */
    public $AttesterSource;

    /**
     * @var string <p>认证有效时间。默认为 60s，支持的单位有：</p><li>s：秒，取值范围 60～43200；</li><li>m：分，取值范围 1～720；</li><li>h：小时，取值范围 1～12。</li>
     */
    public $AttesterDuration;

    /**
     * @var string <p>是否开启认证结果使用限制。 </p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
     */
    public $UsageLimit;

    /**
     * @var integer <p>认证结果最大使用次数。当 UsageLimit 为 on 时，此字段必填。</p><p>取值范围：[1, 100000]</p>
     */
    public $MaxUsageCount;

    /**
     * @var TCRCEOption <p>TC-RCE 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
     */
    public $TCRCEOption;

    /**
     * @var TCCaptchaOption <p>TC-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
     */
    public $TCCaptchaOption;

    /**
     * @var TCEOCaptchaOption <p>TC-EO-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-EO-CAPTCHA 时，此字段必填。</li>
     */
    public $TCEOCaptchaOption;

    /**
     * @param string $Id <p>认证选项 ID。</p>
     * @param string $Name <p>认证选项名称。</p>
     * @param string $Type <p>认证规则类型。仅出参返回，取值有：</p><li>PRESET: 系统预置规则，仅允许修改 AttesterDuration；</li><li>CUSTOM: 用户自定义规则。</li>
     * @param string $AttesterSource <p>认证方法。取值有：</p><li>TC-RCE: 使用风险识别 RCE 进行认证；</li><li>TC-CAPTCHA: 使用天御验证码进行认证；</li><li>TC-EO-CAPTCHA: 使用 EdgeOne 人机校验进行认证。</li>
     * @param string $AttesterDuration <p>认证有效时间。默认为 60s，支持的单位有：</p><li>s：秒，取值范围 60～43200；</li><li>m：分，取值范围 1～720；</li><li>h：小时，取值范围 1～12。</li>
     * @param string $UsageLimit <p>是否开启认证结果使用限制。 </p><p>枚举值：</p><ul><li>on： 开启</li><li>off： 关闭</li></ul><p>默认值：off</p>
     * @param integer $MaxUsageCount <p>认证结果最大使用次数。当 UsageLimit 为 on 时，此字段必填。</p><p>取值范围：[1, 100000]</p>
     * @param TCRCEOption $TCRCEOption <p>TC-RCE 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-RCE 时，此字段必填。</li>
     * @param TCCaptchaOption $TCCaptchaOption <p>TC-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-CAPTCHA 时，此字段必填。</li>
     * @param TCEOCaptchaOption $TCEOCaptchaOption <p>TC-EO-CAPTCHA 认证的配置信息。</p><li>当 AttesterSource 参数值为 TC-EO-CAPTCHA 时，此字段必填。</li>
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

        if (array_key_exists("UsageLimit",$param) and $param["UsageLimit"] !== null) {
            $this->UsageLimit = $param["UsageLimit"];
        }

        if (array_key_exists("MaxUsageCount",$param) and $param["MaxUsageCount"] !== null) {
            $this->MaxUsageCount = $param["MaxUsageCount"];
        }

        if (array_key_exists("TCRCEOption",$param) and $param["TCRCEOption"] !== null) {
            $this->TCRCEOption = new TCRCEOption();
            $this->TCRCEOption->deserialize($param["TCRCEOption"]);
        }

        if (array_key_exists("TCCaptchaOption",$param) and $param["TCCaptchaOption"] !== null) {
            $this->TCCaptchaOption = new TCCaptchaOption();
            $this->TCCaptchaOption->deserialize($param["TCCaptchaOption"]);
        }

        if (array_key_exists("TCEOCaptchaOption",$param) and $param["TCEOCaptchaOption"] !== null) {
            $this->TCEOCaptchaOption = new TCEOCaptchaOption();
            $this->TCEOCaptchaOption->deserialize($param["TCEOCaptchaOption"]);
        }
    }
}
