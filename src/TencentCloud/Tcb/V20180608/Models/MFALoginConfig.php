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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 多因子认证登录配置，用于管理 MFA（Multi-Factor Authentication）相关设置。包括 MFA 总开关、短信验证、邮箱验证、强制绑定手机号、TOTP 动态验证码等认证方式的独立开关配置。当 MFA 总开关（On）开启时，用户在登录后需完成额外的身份验证步骤。各子开关可独立控制具体的验证方式。不传则不修改当前配置。
 *
 * @method string getOn() 获取MFA 多因子认证开关。取值范围：
TRUE：开启 MFA 多因子认证
FALSE：关闭 MFA 多因子认证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOn(string $On) 设置MFA 多因子认证开关。取值范围：
TRUE：开启 MFA 多因子认证
FALSE：关闭 MFA 多因子认证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSms() 获取短信验证开关，控制是否在 MFA 流程中启用短信验证码校验。取值范围：
TRUE：开启短信验证
FALSE：关闭短信验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSms(string $Sms) 设置短信验证开关，控制是否在 MFA 流程中启用短信验证码校验。取值范围：
TRUE：开启短信验证
FALSE：关闭短信验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmail() 获取邮箱验证开关，控制是否在 MFA 流程中启用邮箱验证码校验。取值范围：
TRUE：开启邮箱验证
FALSE：关闭邮箱验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmail(string $Email) 设置邮箱验证开关，控制是否在 MFA 流程中启用邮箱验证码校验。取值范围：
TRUE：开启邮箱验证
FALSE：关闭邮箱验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequiredBindPhone() 获取强制绑定手机号开关，控制用户在完成 MFA 认证前是否必须绑定手机号。取值范围：
TRUE：要求绑定手机号
FALSE：不要求绑定手机号
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRequiredBindPhone(string $RequiredBindPhone) 设置强制绑定手机号开关，控制用户在完成 MFA 认证前是否必须绑定手机号。取值范围：
TRUE：要求绑定手机号
FALSE：不要求绑定手机号
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MFALoginConfig extends AbstractModel
{
    /**
     * @var string MFA 多因子认证开关。取值范围：
TRUE：开启 MFA 多因子认证
FALSE：关闭 MFA 多因子认证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $On;

    /**
     * @var string 短信验证开关，控制是否在 MFA 流程中启用短信验证码校验。取值范围：
TRUE：开启短信验证
FALSE：关闭短信验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sms;

    /**
     * @var string 邮箱验证开关，控制是否在 MFA 流程中启用邮箱验证码校验。取值范围：
TRUE：开启邮箱验证
FALSE：关闭邮箱验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Email;

    /**
     * @var string 强制绑定手机号开关，控制用户在完成 MFA 认证前是否必须绑定手机号。取值范围：
TRUE：要求绑定手机号
FALSE：不要求绑定手机号
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RequiredBindPhone;

    /**
     * @param string $On MFA 多因子认证开关。取值范围：
TRUE：开启 MFA 多因子认证
FALSE：关闭 MFA 多因子认证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sms 短信验证开关，控制是否在 MFA 流程中启用短信验证码校验。取值范围：
TRUE：开启短信验证
FALSE：关闭短信验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Email 邮箱验证开关，控制是否在 MFA 流程中启用邮箱验证码校验。取值范围：
TRUE：开启邮箱验证
FALSE：关闭邮箱验证
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequiredBindPhone 强制绑定手机号开关，控制用户在完成 MFA 认证前是否必须绑定手机号。取值范围：
TRUE：要求绑定手机号
FALSE：不要求绑定手机号
不传则不修改当前配置。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("On",$param) and $param["On"] !== null) {
            $this->On = $param["On"];
        }

        if (array_key_exists("Sms",$param) and $param["Sms"] !== null) {
            $this->Sms = $param["Sms"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("RequiredBindPhone",$param) and $param["RequiredBindPhone"] !== null) {
            $this->RequiredBindPhone = $param["RequiredBindPhone"];
        }
    }
}
