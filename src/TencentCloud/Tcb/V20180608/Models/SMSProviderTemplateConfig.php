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
 * 自定义短信服务商模板配置
 *
 * @method string getVendor() 获取<p>短信服务商类型</p><p>枚举值：</p><ul><li>TENCENT_CN： 腾讯云国内短信</li><li>TENCENT_INTL： 腾讯云国际短信</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVendor(string $Vendor) 设置<p>短信服务商类型</p><p>枚举值：</p><ul><li>TENCENT_CN： 腾讯云国内短信</li><li>TENCENT_INTL： 腾讯云国际短信</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateId() 获取<p>短信服务商侧申请并审核通过的模板ID。</p><ul><li>腾讯云短信模板ID可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-template">腾讯云国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，若向境外手机号发送短信，仅支持使用国际/港澳台短信模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(string $TemplateId) 设置<p>短信服务商侧申请并审核通过的模板ID。</p><ul><li>腾讯云短信模板ID可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-template">腾讯云国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，若向境外手机号发送短信，仅支持使用国际/港澳台短信模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSdkAppId() 获取<p>短信服务商侧为应用分配的ID，按照服务商文档和要求需要此参数的，填写该参数。</p><ul><li>腾讯云国内短信和国际短信此参数必填，可以在<a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>的应用列表中查看对应的应用id。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSdkAppId(string $SdkAppId) 设置<p>短信服务商侧为应用分配的ID，按照服务商文档和要求需要此参数的，填写该参数。</p><ul><li>腾讯云国内短信和国际短信此参数必填，可以在<a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>的应用列表中查看对应的应用id。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSignName() 获取<p>短信服务商侧申请并审核通过的签名，按照服务商的文档和要求填写。</p><ul><li>腾讯云短信服务商，签名信息可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-sign">国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-sign">国际/港澳台短信</a> 的签名管理查看。<br> 注意：<ol><li>发送国内短信该参数必填，且需填写签名内容而非签名ID。</li><li>发送国际/港澳台短信该参数非必填。</li></ol></li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSignName(string $SignName) 设置<p>短信服务商侧申请并审核通过的签名，按照服务商的文档和要求填写。</p><ul><li>腾讯云短信服务商，签名信息可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-sign">国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-sign">国际/港澳台短信</a> 的签名管理查看。<br> 注意：<ol><li>发送国内短信该参数必填，且需填写签名内容而非签名ID。</li><li>发送国际/港澳台短信该参数非必填。</li></ol></li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAuthType() 获取<p>凭证获取方式，不传默认为 SMS_AUTH_SECRET_KEY。</p><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>默认值：SMS_AUTH_SECRET_KEY</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthType(string $AuthType) 设置<p>凭证获取方式，不传默认为 SMS_AUTH_SECRET_KEY。</p><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>默认值：SMS_AUTH_SECRET_KEY</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretId() 获取<p>调用短信服务商发送短信接口的调用秘钥对应的ID。</p><ul><li>调用api秘钥会保存在云开发平台控制台—扩展功能—授权管理中，如果对于短信调用的api秘钥有删除需求，可在此处进行删除，删除后，短信将无法正常发送。</li><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID，并且按照最小权限配置。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretId(string $SecretId) 设置<p>调用短信服务商发送短信接口的调用秘钥对应的ID。</p><ul><li>调用api秘钥会保存在云开发平台控制台—扩展功能—授权管理中，如果对于短信调用的api秘钥有删除需求，可在此处进行删除，删除后，短信将无法正常发送。</li><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID，并且按照最小权限配置。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取<p>调用短信服务商发送短信接口的调用api秘钥对应的秘钥Key。</p><ul><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID, 并且按照最小权限配置。平台对于调用api秘钥key是加密存储的，不会明文存储。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置<p>调用短信服务商发送短信接口的调用api秘钥对应的秘钥Key。</p><ul><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID, 并且按照最小权限配置。平台对于调用api秘钥key是加密存储的，不会明文存储。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSenderId() 获取<p>短信服务商侧自定义短信发送的senderID，按照服务商文档和要求传参。</p><ul><li>仅国际化场景使用。部分国家/运营商支持自定义 Sender ID替代默认主叫号码。国内站点忽略此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSenderId(string $SenderId) 设置<p>短信服务商侧自定义短信发送的senderID，按照服务商文档和要求传参。</p><ul><li>仅国际化场景使用。部分国家/运营商支持自定义 Sender ID替代默认主叫号码。国内站点忽略此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTemplateExtendParam() 获取<p>当短信自定义模板含多个占位符时，平台只负责生成验证码值，其余占位符由调用方在此提供。</p><ul><li>无需提供验证码对应的占位的值，验证码由云开发平台侧生成。</li><li>如果是命名占位的服务商的短信模板，这里的参数按照需要对应的占位的key和value，会按照对应的key和value在发送短信时，填充到模板中。</li><li>如果是序号占位的服务商的短信模板，这里的参数不需要key, 只需要填写对应的value, 会按照填写的顺序依次填充到模板中。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateExtendParam(array $TemplateExtendParam) 设置<p>当短信自定义模板含多个占位符时，平台只负责生成验证码值，其余占位符由调用方在此提供。</p><ul><li>无需提供验证码对应的占位的值，验证码由云开发平台侧生成。</li><li>如果是命名占位的服务商的短信模板，这里的参数按照需要对应的占位的key和value，会按照对应的key和value在发送短信时，填充到模板中。</li><li>如果是序号占位的服务商的短信模板，这里的参数不需要key, 只需要填写对应的value, 会按照填写的顺序依次填充到模板中。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCredentialAuthKeyId() 获取<p>授权管理中密钥的自定义标识（创建 / 引用二合一），与 SecretId / SecretKey 组合决定行为：</p><ul><li>非空 + 带 SecretId/SecretKey → 以该标识创建新密钥；标识已存在时报错（keyID already exists）</li><li>非空 + 不带 SecretId/SecretKey → 引用授权管理中已存在的密钥（需归属当前环境）</li><li>空 + 带 SecretId/SecretKey → 使用平台按服务商生成的固定标识，覆盖更新（存量兼容）</li><li>空 + 不带 SecretId/SecretKey → 不修改密钥，沿用既有配置</li></ul><p>AuthType 为 SMS_AUTH_ASSUME_ROLE 时此参数必须为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCredentialAuthKeyId(string $CredentialAuthKeyId) 设置<p>授权管理中密钥的自定义标识（创建 / 引用二合一），与 SecretId / SecretKey 组合决定行为：</p><ul><li>非空 + 带 SecretId/SecretKey → 以该标识创建新密钥；标识已存在时报错（keyID already exists）</li><li>非空 + 不带 SecretId/SecretKey → 引用授权管理中已存在的密钥（需归属当前环境）</li><li>空 + 带 SecretId/SecretKey → 使用平台按服务商生成的固定标识，覆盖更新（存量兼容）</li><li>空 + 不带 SecretId/SecretKey → 不修改密钥，沿用既有配置</li></ul><p>AuthType 为 SMS_AUTH_ASSUME_ROLE 时此参数必须为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class SMSProviderTemplateConfig extends AbstractModel
{
    /**
     * @var string <p>短信服务商类型</p><p>枚举值：</p><ul><li>TENCENT_CN： 腾讯云国内短信</li><li>TENCENT_INTL： 腾讯云国际短信</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Vendor;

    /**
     * @var string <p>短信服务商侧申请并审核通过的模板ID。</p><ul><li>腾讯云短信模板ID可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-template">腾讯云国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，若向境外手机号发送短信，仅支持使用国际/港澳台短信模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var string <p>短信服务商侧为应用分配的ID，按照服务商文档和要求需要此参数的，填写该参数。</p><ul><li>腾讯云国内短信和国际短信此参数必填，可以在<a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>的应用列表中查看对应的应用id。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SdkAppId;

    /**
     * @var string <p>短信服务商侧申请并审核通过的签名，按照服务商的文档和要求填写。</p><ul><li>腾讯云短信服务商，签名信息可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-sign">国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-sign">国际/港澳台短信</a> 的签名管理查看。<br> 注意：<ol><li>发送国内短信该参数必填，且需填写签名内容而非签名ID。</li><li>发送国际/港澳台短信该参数非必填。</li></ol></li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SignName;

    /**
     * @var string <p>凭证获取方式，不传默认为 SMS_AUTH_SECRET_KEY。</p><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>默认值：SMS_AUTH_SECRET_KEY</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthType;

    /**
     * @var string <p>调用短信服务商发送短信接口的调用秘钥对应的ID。</p><ul><li>调用api秘钥会保存在云开发平台控制台—扩展功能—授权管理中，如果对于短信调用的api秘钥有删除需求，可在此处进行删除，删除后，短信将无法正常发送。</li><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID，并且按照最小权限配置。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretId;

    /**
     * @var string <p>调用短信服务商发送短信接口的调用api秘钥对应的秘钥Key。</p><ul><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID, 并且按照最小权限配置。平台对于调用api秘钥key是加密存储的，不会明文存储。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string <p>短信服务商侧自定义短信发送的senderID，按照服务商文档和要求传参。</p><ul><li>仅国际化场景使用。部分国家/运营商支持自定义 Sender ID替代默认主叫号码。国内站点忽略此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SenderId;

    /**
     * @var array <p>当短信自定义模板含多个占位符时，平台只负责生成验证码值，其余占位符由调用方在此提供。</p><ul><li>无需提供验证码对应的占位的值，验证码由云开发平台侧生成。</li><li>如果是命名占位的服务商的短信模板，这里的参数按照需要对应的占位的key和value，会按照对应的key和value在发送短信时，填充到模板中。</li><li>如果是序号占位的服务商的短信模板，这里的参数不需要key, 只需要填写对应的value, 会按照填写的顺序依次填充到模板中。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateExtendParam;

    /**
     * @var string <p>授权管理中密钥的自定义标识（创建 / 引用二合一），与 SecretId / SecretKey 组合决定行为：</p><ul><li>非空 + 带 SecretId/SecretKey → 以该标识创建新密钥；标识已存在时报错（keyID already exists）</li><li>非空 + 不带 SecretId/SecretKey → 引用授权管理中已存在的密钥（需归属当前环境）</li><li>空 + 带 SecretId/SecretKey → 使用平台按服务商生成的固定标识，覆盖更新（存量兼容）</li><li>空 + 不带 SecretId/SecretKey → 不修改密钥，沿用既有配置</li></ul><p>AuthType 为 SMS_AUTH_ASSUME_ROLE 时此参数必须为空。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CredentialAuthKeyId;

    /**
     * @param string $Vendor <p>短信服务商类型</p><p>枚举值：</p><ul><li>TENCENT_CN： 腾讯云国内短信</li><li>TENCENT_INTL： 腾讯云国际短信</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateId <p>短信服务商侧申请并审核通过的模板ID。</p><ul><li>腾讯云短信模板ID可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-template">腾讯云国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-template">国际/港澳台短信</a> 的正文模板管理查看，若向境外手机号发送短信，仅支持使用国际/港澳台短信模板。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SdkAppId <p>短信服务商侧为应用分配的ID，按照服务商文档和要求需要此参数的，填写该参数。</p><ul><li>腾讯云国内短信和国际短信此参数必填，可以在<a href="https://console.cloud.tencent.com/smsv2/app-manage">短信控制台</a>的应用列表中查看对应的应用id。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SignName <p>短信服务商侧申请并审核通过的签名，按照服务商的文档和要求填写。</p><ul><li>腾讯云短信服务商，签名信息可前往 <a href="https://console.cloud.tencent.com/smsv2/csms-sign">国内短信</a> 或 <a href="https://console.cloud.tencent.com/smsv2/isms-sign">国际/港澳台短信</a> 的签名管理查看。<br> 注意：<ol><li>发送国内短信该参数必填，且需填写签名内容而非签名ID。</li><li>发送国际/港澳台短信该参数非必填。</li></ol></li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AuthType <p>凭证获取方式，不传默认为 SMS_AUTH_SECRET_KEY。</p><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>枚举值：</p><ul><li>SMS_AUTH_SECRET_KEY： 密钥授权，适用于跨账号腾讯云短信 / 其它厂商短信，AK/SK 加密托管至云开发平台控制台—扩展功能—授权管理</li><li>SMS_AUTH_ASSUME_ROLE： 策略授权（角色扮演），适用于同账号腾讯云短信，需预先将短信预设策略 QcloudSMSFullAccess 授权给云开发服务角色，平台以临时凭证代发，不保存任何长期密钥。选择该方式时 SecretId / SecretKey / CredentialAuthKeyId 必须为空</li></ul><p>默认值：SMS_AUTH_SECRET_KEY</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretId <p>调用短信服务商发送短信接口的调用秘钥对应的ID。</p><ul><li>调用api秘钥会保存在云开发平台控制台—扩展功能—授权管理中，如果对于短信调用的api秘钥有删除需求，可在此处进行删除，删除后，短信将无法正常发送。</li><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID，并且按照最小权限配置。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey <p>调用短信服务商发送短信接口的调用api秘钥对应的秘钥Key。</p><ul><li>腾讯云的调用api秘钥在腾讯云控制台获取，建议使用子账号的秘钥ID, 并且按照最小权限配置。平台对于调用api秘钥key是加密存储的，不会明文存储。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SenderId <p>短信服务商侧自定义短信发送的senderID，按照服务商文档和要求传参。</p><ul><li>仅国际化场景使用。部分国家/运营商支持自定义 Sender ID替代默认主叫号码。国内站点忽略此字段。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TemplateExtendParam <p>当短信自定义模板含多个占位符时，平台只负责生成验证码值，其余占位符由调用方在此提供。</p><ul><li>无需提供验证码对应的占位的值，验证码由云开发平台侧生成。</li><li>如果是命名占位的服务商的短信模板，这里的参数按照需要对应的占位的key和value，会按照对应的key和value在发送短信时，填充到模板中。</li><li>如果是序号占位的服务商的短信模板，这里的参数不需要key, 只需要填写对应的value, 会按照填写的顺序依次填充到模板中。</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CredentialAuthKeyId <p>授权管理中密钥的自定义标识（创建 / 引用二合一），与 SecretId / SecretKey 组合决定行为：</p><ul><li>非空 + 带 SecretId/SecretKey → 以该标识创建新密钥；标识已存在时报错（keyID already exists）</li><li>非空 + 不带 SecretId/SecretKey → 引用授权管理中已存在的密钥（需归属当前环境）</li><li>空 + 带 SecretId/SecretKey → 使用平台按服务商生成的固定标识，覆盖更新（存量兼容）</li><li>空 + 不带 SecretId/SecretKey → 不修改密钥，沿用既有配置</li></ul><p>AuthType 为 SMS_AUTH_ASSUME_ROLE 时此参数必须为空。</p>
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
        if (array_key_exists("Vendor",$param) and $param["Vendor"] !== null) {
            $this->Vendor = $param["Vendor"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("SignName",$param) and $param["SignName"] !== null) {
            $this->SignName = $param["SignName"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("SenderId",$param) and $param["SenderId"] !== null) {
            $this->SenderId = $param["SenderId"];
        }

        if (array_key_exists("TemplateExtendParam",$param) and $param["TemplateExtendParam"] !== null) {
            $this->TemplateExtendParam = [];
            foreach ($param["TemplateExtendParam"] as $key => $value){
                $obj = new SMSTemplateParams();
                $obj->deserialize($value);
                array_push($this->TemplateExtendParam, $obj);
            }
        }

        if (array_key_exists("CredentialAuthKeyId",$param) and $param["CredentialAuthKeyId"] !== null) {
            $this->CredentialAuthKeyId = $param["CredentialAuthKeyId"];
        }
    }
}
