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
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容<br>此接口下面信息必填。</p><ul><li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code>
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容<br>此接口下面信息必填。</p><ul><li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code>
 * @method string getProxyOrganizationName() 获取<p>第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。<br><font color="red"><br>在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。<br>企业名称请使用以下名称, 以下名称可以不用走收录。<br><strong>子客测试专用企业1 - 子客测试专用企业9</strong></font></p><p>注:<br> <code>1. 如果名称中包含英文括号()，请使用中文括号（）代替。</code><br> <code>2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。</code></p>
 * @method void setProxyOrganizationName(string $ProxyOrganizationName) 设置<p>第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。<br><font color="red"><br>在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。<br>企业名称请使用以下名称, 以下名称可以不用走收录。<br><strong>子客测试专用企业1 - 子客测试专用企业9</strong></font></p><p>注:<br> <code>1. 如果名称中包含英文括号()，请使用中文括号（）代替。</code><br> <code>2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。</code></p>
 * @method string getUniformSocialCreditCode() 获取<p>子客企业统一社会信用代码，最大长度200个字符<br>注意：<code>如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效</code>。</p>
 * @method void setUniformSocialCreditCode(string $UniformSocialCreditCode) 设置<p>子客企业统一社会信用代码，最大长度200个字符<br>注意：<code>如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效</code>。</p>
 * @method string getProxyOperatorName() 获取<p>子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效</code></p>
 * @method void setProxyOperatorName(string $ProxyOperatorName) 设置<p>子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效</code></p>
 * @method string getProxyOperatorMobile() 获取<p>子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：<code>该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效</code></p>
 * @method void setProxyOperatorMobile(string $ProxyOperatorMobile) 设置<p>子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：<code>该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效</code></p>
 * @method string getModule() 获取<p>Web控制台登录后进入的功能模块,  支持的模块包括：</p><ul><li> **空值** :(默认)企业中心模块</li><li> **DOCUMENT** :合同管理模块</li><li> **TEMPLATE** :企业模板管理模块</li><li> **SEAL** :印章管理模块</li><li> **OPERATOR** :组织管理模块</li></ul>注意：1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
 * @method void setModule(string $Module) 设置<p>Web控制台登录后进入的功能模块,  支持的模块包括：</p><ul><li> **空值** :(默认)企业中心模块</li><li> **DOCUMENT** :合同管理模块</li><li> **TEMPLATE** :企业模板管理模块</li><li> **SEAL** :印章管理模块</li><li> **OPERATOR** :组织管理模块</li></ul>注意：1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
 * @method string getModuleId() 获取<p>该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。</p><p>根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：</p><table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
 * @method void setModuleId(string $ModuleId) 设置<p>该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。</p><p>根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：</p><table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
 * @method string getMenuStatus() 获取<p>是否展示左侧菜单栏 </p><ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li><li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
 * @method void setMenuStatus(string $MenuStatus) 设置<p>是否展示左侧菜单栏 </p><ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li><li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
 * @method string getEndpoint() 获取<p>生成链接的类型：</p><ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li><li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li><li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li><li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li><li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
 * @method void setEndpoint(string $Endpoint) 设置<p>生成链接的类型：</p><ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li><li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li><li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li><li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li><li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
 * @method string getAutoJumpBackEvent() 获取<p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：</p><ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
 * @method void setAutoJumpBackEvent(string $AutoJumpBackEvent) 设置<p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：</p><ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
 * @method array getAuthorizationTypes() 获取<p>可选的此企业允许的授权方式, 可以设置的方式有:</p><ul><li>2：转法定代表人授权</li><li>5：授权书+对公打款</li></ul>
 * @method void setAuthorizationTypes(array $AuthorizationTypes) 设置<p>可选的此企业允许的授权方式, 可以设置的方式有:</p><ul><li>2：转法定代表人授权</li><li>5：授权书+对公打款</li></ul>
 * @method string getProxyOperatorIdCardNumber() 获取<p>子客经办人身份证<br>注意：<code>如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型</code>。</p>
 * @method void setProxyOperatorIdCardNumber(string $ProxyOperatorIdCardNumber) 设置<p>子客经办人身份证<br>注意：<code>如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型</code>。</p>
 * @method string getAutoJumpUrl() 获取<p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>认证完成跳转链接。<br>注意：<code>此功能仅在Endpoint参数设置成 H5 或 PC时才有效</code>。</p>
 * @method void setAutoJumpUrl(string $AutoJumpUrl) 设置<p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>认证完成跳转链接。<br>注意：<code>此功能仅在Endpoint参数设置成 H5 或 PC时才有效</code>。</p>
 * @method string getTopNavigationStatus() 获取<p>是否展示头顶导航栏  <ul><li> <strong>ENABLE</strong> : (默认)进入web控制台展示头顶导航栏</li> <li> <strong>DISABLE</strong> : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数<strong>仅在企业和员工激活完成，登录控制台场景才生效</strong>。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a></p>
 * @method void setTopNavigationStatus(string $TopNavigationStatus) 设置<p>是否展示头顶导航栏  <ul><li> <strong>ENABLE</strong> : (默认)进入web控制台展示头顶导航栏</li> <li> <strong>DISABLE</strong> : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数<strong>仅在企业和员工激活完成，登录控制台场景才生效</strong>。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a></p>
 * @method boolean getAutoActive() 获取<p>是否自动激活子客企业，有下面两种选项：</p><p><strong>false（默认设置）</strong>：不自动激活子客户。您需要通过控制台或调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive">激活或者续期子企业</a>接口手动完成激活过程。</p><p><strong>true</strong>：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。</p><p><b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png" alt="image"></p>
 * @method void setAutoActive(boolean $AutoActive) 设置<p>是否自动激活子客企业，有下面两种选项：</p><p><strong>false（默认设置）</strong>：不自动激活子客户。您需要通过控制台或调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive">激活或者续期子企业</a>接口手动完成激活过程。</p><p><strong>true</strong>：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。</p><p><b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png" alt="image"></p>
 * @method string getBusinessLicense() 获取<p>营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。</p>
 * @method void setBusinessLicense(string $BusinessLicense) 设置<p>营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。</p>
 * @method string getProxyAddress() 获取<p>组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。</p>
 * @method void setProxyAddress(string $ProxyAddress) 设置<p>组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。</p>
 * @method string getProxyLegalName() 获取<p>组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
 * @method void setProxyLegalName(string $ProxyLegalName) 设置<p>组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
 * @method array getPowerOfAttorneys() 获取<p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。<br> p.s. 如果上传授权书 ，需遵循以下条件 </p><ol><li>超管的信息（超管姓名，超管手机号）必须为必填参数。 </li><li>认证方式AuthorizationTypes必须只能是上传授权书方式</li></ol>
 * @method void setPowerOfAttorneys(array $PowerOfAttorneys) 设置<p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。<br> p.s. 如果上传授权书 ，需遵循以下条件 </p><ol><li>超管的信息（超管姓名，超管手机号）必须为必填参数。 </li><li>认证方式AuthorizationTypes必须只能是上传授权书方式</li></ol>
 * @method OrganizationAuthorizationOptions getOrganizationAuthorizationOptions() 获取<p>企业认证时个性化能力信息</p>
 * @method void setOrganizationAuthorizationOptions(OrganizationAuthorizationOptions $OrganizationAuthorizationOptions) 设置<p>企业认证时个性化能力信息</p>
 * @method string getBankAccountNumber() 获取<p>组织机构对公打款 账号，账户名跟企业名称一致。</p><p>p.s.<br>只有认证方式是授权书+对公打款时才生效。</p>
 * @method void setBankAccountNumber(string $BankAccountNumber) 设置<p>组织机构对公打款 账号，账户名跟企业名称一致。</p><p>p.s.<br>只有认证方式是授权书+对公打款时才生效。</p>
 * @method UserInfo getOperator() 获取<p>无</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>无</p>
 * @method array getJumpEvents() 获取<p>跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。<br>p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">&quot;true&quot; </font><br>如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
 * @method void setJumpEvents(array $JumpEvents) 设置<p>跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。<br>p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">&quot;true&quot; </font><br>如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
 * @method string getProxyOrganizationIdCardType() 获取<p>企业证照类型：</p><ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE* :诊所备案证</li></ul><p>枚举值：</p><ul><li>USCC： 工商组织营业执照</li><li>PRACTICELICENSEOFMEDICALINSTITUTION： 医疗机构执业许可证</li><li>CLINICFILLINGCERTIFICATE： 诊所备案证</li></ul>
 * @method void setProxyOrganizationIdCardType(string $ProxyOrganizationIdCardType) 设置<p>企业证照类型：</p><ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE* :诊所备案证</li></ul><p>枚举值：</p><ul><li>USCC： 工商组织营业执照</li><li>PRACTICELICENSEOFMEDICALINSTITUTION： 医疗机构执业许可证</li><li>CLINICFILLINGCERTIFICATE： 诊所备案证</li></ul>
 */
class CreateConsoleLoginUrlRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容<br>此接口下面信息必填。</p><ul><li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code>
     */
    public $Agent;

    /**
     * @var string <p>第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。<br><font color="red"><br>在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。<br>企业名称请使用以下名称, 以下名称可以不用走收录。<br><strong>子客测试专用企业1 - 子客测试专用企业9</strong></font></p><p>注:<br> <code>1. 如果名称中包含英文括号()，请使用中文括号（）代替。</code><br> <code>2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。</code></p>
     */
    public $ProxyOrganizationName;

    /**
     * @var string <p>子客企业统一社会信用代码，最大长度200个字符<br>注意：<code>如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效</code>。</p>
     */
    public $UniformSocialCreditCode;

    /**
     * @var string <p>子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效</code></p>
     */
    public $ProxyOperatorName;

    /**
     * @var string <p>子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：<code>该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效</code></p>
     */
    public $ProxyOperatorMobile;

    /**
     * @var string <p>Web控制台登录后进入的功能模块,  支持的模块包括：</p><ul><li> **空值** :(默认)企业中心模块</li><li> **DOCUMENT** :合同管理模块</li><li> **TEMPLATE** :企业模板管理模块</li><li> **SEAL** :印章管理模块</li><li> **OPERATOR** :组织管理模块</li></ul>注意：1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
     */
    public $Module;

    /**
     * @var string <p>该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。</p><p>根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：</p><table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
     */
    public $ModuleId;

    /**
     * @var string <p>是否展示左侧菜单栏 </p><ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li><li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
     */
    public $MenuStatus;

    /**
     * @var string <p>生成链接的类型：</p><ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li><li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li><li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li><li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li><li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
     */
    public $Endpoint;

    /**
     * @var string <p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：</p><ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
     */
    public $AutoJumpBackEvent;

    /**
     * @var array <p>可选的此企业允许的授权方式, 可以设置的方式有:</p><ul><li>2：转法定代表人授权</li><li>5：授权书+对公打款</li></ul>
     */
    public $AuthorizationTypes;

    /**
     * @var string <p>子客经办人身份证<br>注意：<code>如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型</code>。</p>
     */
    public $ProxyOperatorIdCardNumber;

    /**
     * @var string <p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>认证完成跳转链接。<br>注意：<code>此功能仅在Endpoint参数设置成 H5 或 PC时才有效</code>。</p>
     */
    public $AutoJumpUrl;

    /**
     * @var string <p>是否展示头顶导航栏  <ul><li> <strong>ENABLE</strong> : (默认)进入web控制台展示头顶导航栏</li> <li> <strong>DISABLE</strong> : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数<strong>仅在企业和员工激活完成，登录控制台场景才生效</strong>。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a></p>
     */
    public $TopNavigationStatus;

    /**
     * @var boolean <p>是否自动激活子客企业，有下面两种选项：</p><p><strong>false（默认设置）</strong>：不自动激活子客户。您需要通过控制台或调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive">激活或者续期子企业</a>接口手动完成激活过程。</p><p><strong>true</strong>：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。</p><p><b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png" alt="image"></p>
     */
    public $AutoActive;

    /**
     * @var string <p>营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。</p>
     */
    public $BusinessLicense;

    /**
     * @var string <p>组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。</p>
     */
    public $ProxyAddress;

    /**
     * @var string <p>组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
     */
    public $ProxyLegalName;

    /**
     * @var array <p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。<br> p.s. 如果上传授权书 ，需遵循以下条件 </p><ol><li>超管的信息（超管姓名，超管手机号）必须为必填参数。 </li><li>认证方式AuthorizationTypes必须只能是上传授权书方式</li></ol>
     */
    public $PowerOfAttorneys;

    /**
     * @var OrganizationAuthorizationOptions <p>企业认证时个性化能力信息</p>
     */
    public $OrganizationAuthorizationOptions;

    /**
     * @var string <p>组织机构对公打款 账号，账户名跟企业名称一致。</p><p>p.s.<br>只有认证方式是授权书+对公打款时才生效。</p>
     */
    public $BankAccountNumber;

    /**
     * @var UserInfo <p>无</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var array <p>跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。<br>p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">&quot;true&quot; </font><br>如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
     */
    public $JumpEvents;

    /**
     * @var string <p>企业证照类型：</p><ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE* :诊所备案证</li></ul><p>枚举值：</p><ul><li>USCC： 工商组织营业执照</li><li>PRACTICELICENSEOFMEDICALINSTITUTION： 医疗机构执业许可证</li><li>CLINICFILLINGCERTIFICATE： 诊所备案证</li></ul>
     */
    public $ProxyOrganizationIdCardType;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容<br>此接口下面信息必填。</p><ul><li>渠道应用标识:  <a href="https://qcloudimg.tencent-cloud.cn/raw/a71872de3d540d55451e3e73a2ad1a6e.png" target="_blank">Agent.AppId</a></li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>注:<code>1. 企业激活时， 此时的Agent.ProxyOrganizationOpenId将会是企业激活后企业的唯一标识，建议开发者保存企业ProxyOrganizationOpenId，后续各项接口调用皆需要此参数。</code><code>2. 员工认证时， 此时的Agent.ProxyOperator.OpenId将会是员工认证加入企业后的唯一标识，建议开发者保存此员工的OpenId，后续各项接口调用皆需要此参数。</code><code>3. 同渠道应用(Agent.AppId)下，企业唯一标识ProxyOrganizationOpenId需要保持唯一，员工唯一标识OpenId也要保持唯一 (而不是企业下唯一)。</code>
     * @param string $ProxyOrganizationName <p>第三方平台子客的企业名称，请确认该企业名称与企业营业执照中注册的名称完全一致。<br><font color="red"><br>在测试环境联调的过程中，企业名称请统一加上“测试”二字，如：典子谦示例企业测试，否则将无法审核通过。<br>企业名称请使用以下名称, 以下名称可以不用走收录。<br><strong>子客测试专用企业1 - 子客测试专用企业9</strong></font></p><p>注:<br> <code>1. 如果名称中包含英文括号()，请使用中文括号（）代替。</code><br> <code>2、该名称需要与Agent.ProxyOrganizationOpenId相匹配,  企业激活后Agent.ProxyOrganizationOpenId会跟此企业名称一一绑定; 如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效。</code></p>
     * @param string $UniformSocialCreditCode <p>子客企业统一社会信用代码，最大长度200个字符<br>注意：<code>如果您的企业已经在认证授权中或者激活完成，这里修改子客企业名字将不会生效</code>。</p>
     * @param string $ProxyOperatorName <p>子客企业员工的姓名，最大长度50个字符,  员工的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>注：<code>该姓名需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该姓名会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人名字传入将不会生效</code></p>
     * @param string $ProxyOperatorMobile <p>子客企业员工的手机码,  支持国内手机号11位数字(无需加+86前缀或其他字符)。注：<code>该手机号需要和Agent.ProxyOperator.OpenId相匹配,  当员工完成认证后该手机号会和Agent.ProxyOperator.OpenId一一绑定, 若员工已认证加入企业，这里修改经办人手机号传入将不会生效</code></p>
     * @param string $Module <p>Web控制台登录后进入的功能模块,  支持的模块包括：</p><ul><li> **空值** :(默认)企业中心模块</li><li> **DOCUMENT** :合同管理模块</li><li> **TEMPLATE** :企业模板管理模块</li><li> **SEAL** :印章管理模块</li><li> **OPERATOR** :组织管理模块</li></ul>注意：1、如果EndPoint选择"CHANNEL"或"APP"，该参数仅支持传递"SEAL"，进入印章管理模块2、该参数**仅在企业和员工激活已经完成，登录控制台场景才生效**。
     * @param string $ModuleId <p>该参数和Module参数配合使用，用于指定模块下的资源Id，指定后链接登录将展示该资源的详情。</p><p>根据Module参数的不同所代表的含义不同(ModuleId需要和Module对应，ModuleId可以通过API或者控制台获取到)。当前支持：</p><table> <thead> <tr> <th>Module传值</th> <th>ModuleId传值</th> <th>进入的目标页面</th> </tr> </thead> <tbody> <tr> <td>SEAL</td> <td>印章ID</td> <td>查看指定印章的详情页面</td> </tr> <tr> <td>TEMPLATE</td> <td>合同模板ID</td> <td>指定模板的详情页面</td> </tr> <tr> <td>DOCUMENT</td> <td>合同ID</td> <td>指定合同的详情页面</td> </tr> </tbody> </table>注意：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
     * @param string $MenuStatus <p>是否展示左侧菜单栏 </p><ul><li> **ENABLE** : (默认)进入web控制台展示左侧菜单栏</li><li> **DISABLE** : 进入web控制台不展示左侧菜单栏</li></ul>注：该参数**仅在企业和员工激活完成，登录控制台场景才生效**。
     * @param string $Endpoint <p>生成链接的类型：</p><ul><li>**PC**：(默认)<font color="red">web控制台</font>链接, 需要在PC浏览器中打开</li><li>**CHANNEL**：H5跳转到电子签小程序链接, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**SHORT_URL**：<font color="red">H5</font>跳转到电子签小程序链接的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签小程序</li><li>**WEIXIN_QRCODE_URL**：直接跳转至电子签小程序的二维码链接，无需通过中转页。<font color="red">您需要自行将其转换为二维码，使用微信扫码后可直接进入。请注意，直接点击链接是无效的。</font></li><li>**APP**：<font color="red">APP或小程序</font>跳转电子签小程序链接, 一般用于贵方小程序或者APP跳转过来,  打开后进入腾讯电子签小程序</li><li>**H5**：<font color="red">H5长链接</font>跳转H5链接, 一般用于贵方H5跳转过来,  打开后进入腾讯电子签H5页面</li><li>**SHORT_H5**：<font color="red">H5短链</font>跳转H5的短链形式, 一般用于发送短信中带的链接, 打开后进入腾讯电子签H5页面</li></ul>
     * @param string $AutoJumpBackEvent <p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>触发自动跳转事件，仅对EndPoint为App类型有效，可选值包括：</p><ul><li> **VERIFIED** :企业认证完成/员工认证完成后跳回原App/小程序</li></ul>
     * @param array $AuthorizationTypes <p>可选的此企业允许的授权方式, 可以设置的方式有:</p><ul><li>2：转法定代表人授权</li><li>5：授权书+对公打款</li></ul>
     * @param string $ProxyOperatorIdCardNumber <p>子客经办人身份证<br>注意：<code>如果已同步，这里非空会更新同步的经办人身份证号，暂时只支持中国大陆居民身份证类型</code>。</p>
     * @param string $AutoJumpUrl <p><font color="red">已废弃</font> 请使用 JumpEvents 参数，进行替换。<br>认证完成跳转链接。<br>注意：<code>此功能仅在Endpoint参数设置成 H5 或 PC时才有效</code>。</p>
     * @param string $TopNavigationStatus <p>是否展示头顶导航栏  <ul><li> <strong>ENABLE</strong> : (默认)进入web控制台展示头顶导航栏</li> <li> <strong>DISABLE</strong> : 进入web控制台不展示头顶导航栏</li></ul> 注：该参数<strong>仅在企业和员工激活完成，登录控制台场景才生效</strong>。</p><p><a href="https://qcloudimg.tencent-cloud.cn/raw/dd54f333140c711cf6a88e3801bcd178.png" target="_blank">点击查看头顶导航栏位置</a></p>
     * @param boolean $AutoActive <p>是否自动激活子客企业，有下面两种选项：</p><p><strong>false（默认设置）</strong>：不自动激活子客户。您需要通过控制台或调用<a href="https://qian.tencent.com/developers/partnerApis/accounts/CreateChannelSubOrganizationActive">激活或者续期子企业</a>接口手动完成激活过程。</p><p><strong>true</strong>：若持有的许可证充足，子客户企业注册完成后将自动激活，无需手动操作或访问控制台。</p><p><b>注</b>：如果<b>应用扩展服务</b>中的<b>自动激活子客企业</b>为打开态， 则忽略本接口的AutoActive这个参数（若持有的许可证充足，子客户企业注册完成后将自动激活），具体位置参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/c3639b05503d3735bac483d17aa6b0a3.png" alt="image"></p>
     * @param string $BusinessLicense <p>营业执照正面照（支持PNG或JPG格式）需以base64格式提供，且文件大小不得超过5MB。</p>
     * @param string $ProxyAddress <p>组织机构企业注册地址。 请确认该企业注册地址与企业营业执照中注册的地址一致。</p>
     * @param string $ProxyLegalName <p>组织机构法人的姓名。 请确认该企业统一社会信用代码与企业营业执照中注册的法人姓名一致。</p>
     * @param array $PowerOfAttorneys <p>授权书(PNG或JPG或PDF) base64格式, 大小不超过8M 。<br> p.s. 如果上传授权书 ，需遵循以下条件 </p><ol><li>超管的信息（超管姓名，超管手机号）必须为必填参数。 </li><li>认证方式AuthorizationTypes必须只能是上传授权书方式</li></ol>
     * @param OrganizationAuthorizationOptions $OrganizationAuthorizationOptions <p>企业认证时个性化能力信息</p>
     * @param string $BankAccountNumber <p>组织机构对公打款 账号，账户名跟企业名称一致。</p><p>p.s.<br>只有认证方式是授权书+对公打款时才生效。</p>
     * @param UserInfo $Operator <p>无</p>
     * @param array $JumpEvents <p>跳转事件，其中包括认证期间收录，授权书审核，企业认证的回跳事件。<br>p.s.Endpoint如果是APP 类型，请传递JumpUrl为<font color="red">&quot;true&quot; </font><br>如果 Endpoint 是 H5 类型，请参考文档跳转电子签H5 p.s. 如果Endpoint是 APP，传递的跳转地址无效，不会进行跳转，仅会进行回跳。</p>
     * @param string $ProxyOrganizationIdCardType <p>企业证照类型：</p><ul><li> **USCC** :(默认)工商组织营业执照</li><li> **PRACTICELICENSEOFMEDICALINSTITUTION** :医疗机构执业许可证</li><li> **CLINICFILLINGCERTIFICATE* :诊所备案证</li></ul><p>枚举值：</p><ul><li>USCC： 工商组织营业执照</li><li>PRACTICELICENSEOFMEDICALINSTITUTION： 医疗机构执业许可证</li><li>CLINICFILLINGCERTIFICATE： 诊所备案证</li></ul>
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
