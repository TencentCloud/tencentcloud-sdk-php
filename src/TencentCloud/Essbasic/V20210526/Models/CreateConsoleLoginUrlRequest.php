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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateConsoleLoginUrl请求参数结构体
 *
 * @method Agent getAgent() 获取关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容
此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>注:
`1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。 `
`2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。 `
`3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。 `
 * @method void setAgent(Agent $Agent) 设置关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容
此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>注:
`1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。 `
`2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。 `
`3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。 `
 * @method string getProxyOrganizationName() 获取第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。
<font color="red">
在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。
企业名称请使用以下名称, 以下名称可以不用走收录。
**子客测试专用企业1 - 子客测试专用企业9**</font>

注:
 `1. 如果名称中包含英文括号()，请使用中文括号（）代替。`
 `2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。 `
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。
<font color="red">
在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。
企业名称请使用以下名称, 以下名称可以不用走收录。
**子客测试专用企业1 - 子客测试专用企业9**</font>

注:
 `1. 如果名称中包含英文括号()，请使用中文括号（）代替。`
 `2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。 `
 * @method string getUniformSocialCreditCode() 获取子客企业统一社会信用代码，最大长度200个字符
注意：`如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效`。
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置子客企业统一社会信用代码，最大长度200个字符
注意：`如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效`。
 * @method string getProxyOperatorName() 获取子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效`
 * @method void setProxyOperatorName(string $ProxyOperatorName) 设置子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效`
 * @method string getProxyOperatorMobile() 获取子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：`该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效`
 * @method void setProxyOperatorMobile(string $ProxyOperatorMobile) 设置子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：`该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效`
 * @method string getModule() 获取Web控制台登录后进入的功能模块,  支持的模块包括：
<ul>
<li> **空值** :(默认)企业中心模块</li>
<li> **DOCUMENT** :合同管理模块</li>
<li> **TEMPLATE** :企业模板管理模块</li>
<li> **SEAL** :印章管理模块</li>
<li> **OPERATOR** :组织管理模块</li></ul>
注意：
1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块
2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
 * @method void setModule(string $Module) 设置Web控制台登录后进入的功能模块,  支持的模块包括：
<ul>
<li> **空值** :(默认)企业中心模块</li>
<li> **DOCUMENT** :合同管理模块</li>
<li> **TEMPLATE** :企业模板管理模块</li>
<li> **SEAL** :印章管理模块</li>
<li> **OPERATOR** :组织管理模块</li></ul>
注意：
1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块
2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
 * @method string getModuleId() 获取该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。

根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：
<table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>
注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

 * @method void setModuleId(string $ModuleId) 设置该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。

根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：
<table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>
注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

 * @method string getMenuStatus() 获取是否展示左侧菜单栏 
<ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li>
<li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>
注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
 * @method void setMenuStatus(string $MenuStatus) 设置是否展示左侧菜单栏 
<ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li>
<li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>
注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
 * @method string getEndpoint() 获取生成链接的类型：
<ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li>
<li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
<li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li>
<li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li>
<li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
 * @method void setEndpoint(string $Endpoint) 设置生成链接的类型：
<ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li>
<li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
<li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li>
<li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li>
<li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
 * @method string getAutoJumpBackEvent() 获取<font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：
<ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
 * @method void setAutoJumpBackEvent(string $AutoJumpBackEvent) 设置<font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：
<ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
 * @method array getAuthorizationTypes() 获取可选的此企业允许的授权方式, 可以设置的方式有:
<ul>
<li>2：转法定代表人授权</li>
<li>5：授权书+对公打款</li>
</ul>
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置可选的此企业允许的授权方式, 可以设置的方式有:
<ul>
<li>2：转法定代表人授权</li>
<li>5：授权书+对公打款</li>
</ul>
 * @method string getProxyOperatorIdCardNumber() 获取子客经办人身份证
注意：`如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型`。
 * @method void setProxyOperatorIdCardNumber(string $ProxyOperatorIdCardNumber) 设置子客经办人身份证
注意：`如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型`。
 * @method string getAutoJumpUrl() 获取<font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
认证完成跳转链接。
注意：`此功能仅在Endpoint参数设置成 H5 或 PC时才有效`。
 * @method void setAutoJumpUrl(string $AutoJumpUrl) 设置<font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
认证完成跳转链接。
注意：`此功能仅在Endpoint参数设置成 H5 或 PC时才有效`。
 * @method string getTopNavigationStatus() 获取是否展示头顶导航栏  <ul><li> **ENABLE** : (默认)进入web控制台展示头顶导航栏</li> <li> **DISABLE** : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

<a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a>
 * @method void setTopNavigationStatus(string $TopNavigationStatus) 设置是否展示头顶导航栏  <ul><li> **ENABLE** : (默认)进入web控制台展示头顶导航栏</li> <li> **DISABLE** : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

<a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a>
 * @method boolean getAutoActive() 获取是否自动激活子客企业，有下面两种选项：

**false（默认设置）**：不自动激活子客户。您需要通过控制台或调用[激活或者续期子企业](https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive)接口手动完成激活过程。

**true**：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。

<b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：
![image](https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png)
 * @method void setAutoActive(boolean $AutoActive) 设置是否自动激活子客企业，有下面两种选项：

**false（默认设置）**：不自动激活子客户。您需要通过控制台或调用[激活或者续期子企业](https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive)接口手动完成激活过程。

**true**：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。

<b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：
![image](https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png)
 * @method string getBusinessLicense() 获取营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
 * @method void setBusinessLicense(string $BusinessLicense) 设置营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
 * @method string getProxyAddress() 获取组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。	
 * @method void setProxyAddress(string $ProxyAddress) 设置组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。	
 * @method string getProxyLegalName() 获取组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。	
 * @method void setProxyLegalName(string $ProxyLegalName) 设置组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。	
 * @method array getPowerOfAttorneys() 获取授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
 p.s. 如果上传授权书 ，需遵循以下条件 
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。 
2. 认证方式AuthorizationTypes必须只能是上传授权书方式	
 * @method void setPowerOfAttorneys(array $PowerOfAttorneys) 设置授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
 p.s. 如果上传授权书 ，需遵循以下条件 
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。 
2. 认证方式AuthorizationTypes必须只能是上传授权书方式	
 * @method OrganizationAuthorizationOptions getOrganizationAuthorizationOptions() 获取企业认证时个性化能力信息
 * @method void setOrganizationAuthorizationOptions(OrganizationAuthorizationOptions $OrganizationAuthorizationOptions) 设置企业认证时个性化能力信息
 * @method string getBankAccountNumber() 获取组织机构对公打款 账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置组织机构对公打款 账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
 * @method UserInfo getOperator() 获取无
 * @method void setOperator(UserInfo $Operator) 设置无
 * @method array getJumpEvents() 获取跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
 * @method void setJumpEvents(array $JumpEvents) 设置跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
 * @method string getProxyOrganizationIdCardType() 获取企业证照类型：
<ul>
<li> **USCC** :(默认)工商组织营业执照</li>
<li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li>
</ul>

 * @method void setProxyOrganizationIdCardType(string $ProxyOrganizationIdCardType) 设置企业证照类型：
<ul>
<li> **USCC** :(默认)工商组织营业执照</li>
<li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li>
</ul>
 */
class CreateConsoleLoginUrlRequest extends AbstractModel
{
    /**
     * @var Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容
此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>注:
`1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。 `
`2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。 `
`3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。 `
     */
    public $Agent;

    /**
     * @var string 第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。
<font color="red">
在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。
企业名称请使用以下名称, 以下名称可以不用走收录。
**子客测试专用企业1 - 子客测试专用企业9**</font>

注:
 `1. 如果名称中包含英文括号()，请使用中文括号（）代替。`
 `2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。 `
     */
    public $ProxyOrganizationName;

    /**
     * @var string 子客企业统一社会信用代码，最大长度200个字符
注意：`如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效`。
     */
    public $UniformSocialCreditCode;

    /**
     * @var string 子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效`
     */
    public $ProxyOperatorName;

    /**
     * @var string 子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：`该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效`
     */
    public $ProxyOperatorMobile;

    /**
     * @var string Web控制台登录后进入的功能模块,  支持的模块包括：
<ul>
<li> **空值** :(默认)企业中心模块</li>
<li> **DOCUMENT** :合同管理模块</li>
<li> **TEMPLATE** :企业模板管理模块</li>
<li> **SEAL** :印章管理模块</li>
<li> **OPERATOR** :组织管理模块</li></ul>
注意：
1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块
2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
     */
    public $Module;

    /**
     * @var string 该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。

根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：
<table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>
注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

     */
    public $ModuleId;

    /**
     * @var string 是否展示左侧菜单栏 
<ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li>
<li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>
注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
     */
    public $MenuStatus;

    /**
     * @var string 生成链接的类型：
<ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li>
<li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
<li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li>
<li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li>
<li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
     */
    public $Endpoint;

    /**
     * @var string <font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：
<ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
     */
    public $AutoJumpBackEvent;

    /**
     * @var array 可选的此企业允许的授权方式, 可以设置的方式有:
<ul>
<li>2：转法定代表人授权</li>
<li>5：授权书+对公打款</li>
</ul>
     */
    public $AuthorizationTypes;

    /**
     * @var string 子客经办人身份证
注意：`如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型`。
     */
    public $ProxyOperatorIdCardNumber;

    /**
     * @var string <font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
认证完成跳转链接。
注意：`此功能仅在Endpoint参数设置成 H5 或 PC时才有效`。
     */
    public $AutoJumpUrl;

    /**
     * @var string 是否展示头顶导航栏  <ul><li> **ENABLE** : (默认)进入web控制台展示头顶导航栏</li> <li> **DISABLE** : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

<a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a>
     */
    public $TopNavigationStatus;

    /**
     * @var boolean 是否自动激活子客企业，有下面两种选项：

**false（默认设置）**：不自动激活子客户。您需要通过控制台或调用[激活或者续期子企业](https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive)接口手动完成激活过程。

**true**：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。

<b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：
![image](https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png)
     */
    public $AutoActive;

    /**
     * @var string 营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
     */
    public $BusinessLicense;

    /**
     * @var string 组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。	
     */
    public $ProxyAddress;

    /**
     * @var string 组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。	
     */
    public $ProxyLegalName;

    /**
     * @var array 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
 p.s. 如果上传授权书 ，需遵循以下条件 
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。 
2. 认证方式AuthorizationTypes必须只能是上传授权书方式	
     */
    public $PowerOfAttorneys;

    /**
     * @var OrganizationAuthorizationOptions 企业认证时个性化能力信息
     */
    public $OrganizationAuthorizationOptions;

    /**
     * @var string 组织机构对公打款 账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
     */
    public $BankAccountNumber;

    /**
     * @var UserInfo 无
     * @deprecated
     */
    public $Operator;

    /**
     * @var array 跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
     */
    public $JumpEvents;

    /**
     * @var string 企业证照类型：
<ul>
<li> **USCC** :(默认)工商组织营业执照</li>
<li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li>
</ul>

     */
    public $ProxyOrganizationIdCardType;

    /**
     * @param Agent $Agent 关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容
此接口下面信息必填。
<ul>
<li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li>
<li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li>
<li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li>
</ul>注:
`1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。 `
`2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。 `
`3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。 `
     * @param string $ProxyOrganizationName 第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。
<font color="red">
在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。
企业名称请使用以下名称, 以下名称可以不用走收录。
**子客测试专用企业1 - 子客测试专用企业9**</font>

注:
 `1. 如果名称中包含英文括号()，请使用中文括号（）代替。`
 `2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。 `
     * @param string $UniformSocialCreditCode 子客企业统一社会信用代码，最大长度200个字符
注意：`如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效`。
     * @param string $ProxyOperatorName 子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。

注：`该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效`
     * @param string $ProxyOperatorMobile 子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：`该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效`
     * @param string $Module Web控制台登录后进入的功能模块,  支持的模块包括：
<ul>
<li> **空值** :(默认)企业中心模块</li>
<li> **DOCUMENT** :合同管理模块</li>
<li> **TEMPLATE** :企业模板管理模块</li>
<li> **SEAL** :印章管理模块</li>
<li> **OPERATOR** :组织管理模块</li></ul>
注意：
1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块
2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
     * @param string $ModuleId 该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。

根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：
<table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>
注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

     * @param string $MenuStatus 是否展示左侧菜单栏 
<ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li>
<li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>
注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
     * @param string $Endpoint 生成链接的类型：
<ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li>
<li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li>
<li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li>
<li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li>
<li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li>
<li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
     * @param string $AutoJumpBackEvent <font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：
<ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
     * @param array $AuthorizationTypes 可选的此企业允许的授权方式, 可以设置的方式有:
<ul>
<li>2：转法定代表人授权</li>
<li>5：授权书+对公打款</li>
</ul>
     * @param string $ProxyOperatorIdCardNumber 子客经办人身份证
注意：`如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型`。
     * @param string $AutoJumpUrl <font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。
认证完成跳转链接。
注意：`此功能仅在Endpoint参数设置成 H5 或 PC时才有效`。
     * @param string $TopNavigationStatus 是否展示头顶导航栏  <ul><li> **ENABLE** : (默认)进入web控制台展示头顶导航栏</li> <li> **DISABLE** : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。

<a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a>
     * @param boolean $AutoActive 是否自动激活子客企业，有下面两种选项：

**false（默认设置）**：不自动激活子客户。您需要通过控制台或调用[激活或者续期子企业](https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive)接口手动完成激活过程。

**true**：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。

<b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：
![image](https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png)
     * @param string $BusinessLicense 营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。
     * @param string $ProxyAddress 组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。	
     * @param string $ProxyLegalName 组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。	
     * @param array $PowerOfAttorneys 授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。
 p.s. 如果上传授权书 ，需遵循以下条件 
1. 超管的信息（超管姓名，超管手机号）必须为必填参数。 
2. 认证方式AuthorizationTypes必须只能是上传授权书方式	
     * @param OrganizationAuthorizationOptions $OrganizationAuthorizationOptions 企业认证时个性化能力信息
     * @param string $BankAccountNumber 组织机构对公打款 账号，账户名跟企业名称一致。

p.s.
只有认证方式是授权书+对公打款时才生效。
     * @param UserInfo $Operator 无
     * @param array $JumpEvents 跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。
p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">"true" </font>
如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。
     * @param string $ProxyOrganizationIdCardType 企业证照类型：
<ul>
<li> **USCC** :(默认)工商组织营业执照</li>
<li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li>
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ProxyOrganizationName",$param) and $param["ProxyOrganizationName"] !== null) {
            $this->ProxyOrganizationName = $param["ProxyOrganizationName"];
        }

        if (array_key_exists("UniformSocialCreditCode",$param) and $param["UniformSocialCreditCode"] !== null) {
            $this->UniformSocialCreditCode = $param["UniformSocialCreditCode"];
        }

        if (array_key_exists("ProxyOperatorName",$param) and $param["ProxyOperatorName"] !== null) {
            $this->ProxyOperatorName = $param["ProxyOperatorName"];
        }

        if (array_key_exists("ProxyOperatorMobile",$param) and $param["ProxyOperatorMobile"] !== null) {
            $this->ProxyOperatorMobile = $param["ProxyOperatorMobile"];
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("ModuleId",$param) and $param["ModuleId"] !== null) {
            $this->ModuleId = $param["ModuleId"];
        }

        if (array_key_exists("MenuStatus",$param) and $param["MenuStatus"] !== null) {
            $this->MenuStatus = $param["MenuStatus"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("AutoJumpBackEvent",$param) and $param["AutoJumpBackEvent"] !== null) {
            $this->AutoJumpBackEvent = $param["AutoJumpBackEvent"];
        }

        if (array_key_exists("AuthorizationTypes",$param) and $param["AuthorizationTypes"] !== null) {
            $this->AuthorizationTypes = $param["AuthorizationTypes"];
        }

        if (array_key_exists("ProxyOperatorIdCardNumber",$param) and $param["ProxyOperatorIdCardNumber"] !== null) {
            $this->ProxyOperatorIdCardNumber = $param["ProxyOperatorIdCardNumber"];
        }

        if (array_key_exists("AutoJumpUrl",$param) and $param["AutoJumpUrl"] !== null) {
            $this->AutoJumpUrl = $param["AutoJumpUrl"];
        }

        if (array_key_exists("TopNavigationStatus",$param) and $param["TopNavigationStatus"] !== null) {
            $this->TopNavigationStatus = $param["TopNavigationStatus"];
        }

        if (array_key_exists("AutoActive",$param) and $param["AutoActive"] !== null) {
            $this->AutoActive = $param["AutoActive"];
        }

        if (array_key_exists("BusinessLicense",$param) and $param["BusinessLicense"] !== null) {
            $this->BusinessLicense = $param["BusinessLicense"];
        }

        if (array_key_exists("ProxyAddress",$param) and $param["ProxyAddress"] !== null) {
            $this->ProxyAddress = $param["ProxyAddress"];
        }

        if (array_key_exists("ProxyLegalName",$param) and $param["ProxyLegalName"] !== null) {
            $this->ProxyLegalName = $param["ProxyLegalName"];
        }

        if (array_key_exists("PowerOfAttorneys",$param) and $param["PowerOfAttorneys"] !== null) {
            $this->PowerOfAttorneys = $param["PowerOfAttorneys"];
        }

        if (array_key_exists("OrganizationAuthorizationOptions",$param) and $param["OrganizationAuthorizationOptions"] !== null) {
            $this->OrganizationAuthorizationOptions = new OrganizationAuthorizationOptions();
            $this->OrganizationAuthorizationOptions->deserialize($param["OrganizationAuthorizationOptions"]);
        }

        if (array_key_exists("BankAccountNumber",$param) and $param["BankAccountNumber"] !== null) {
            $this->BankAccountNumber = $param["BankAccountNumber"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("JumpEvents",$param) and $param["JumpEvents"] !== null) {
            $this->JumpEvents = [];
            foreach ($param["JumpEvents"] as $key => $value){
                $obj = new JumpEvent();
                $obj->deserialize($value);
                array_push($this->JumpEvents, $obj);
            }
        }

        if (array_key_exists("ProxyOrganizationIdCardType",$param) and $param["ProxyOrganizationIdCardType"] !== null) {
            $this->ProxyOrganizationIdCardType = $param["ProxyOrganizationIdCardType"];
        }
    }
}
