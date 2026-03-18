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
 * CreateSignUrls请求参数结构体
 *
 * @method Agent getAgent() 获取<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经过实名认证
 * @method void setAgent(Agent $Agent) 设置<p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经过实名认证
 * @method array getFlowIds() 获取<p>合同流程ID数组，最多支持100个。</p><p>注: </p><ol><li>必须选择提供此参数或合同组编号中的一个。</li><li>当生成类型（GenerateType）设为“ALL”时，不可提供多个流程ID。</li></ol>
 * @method void setFlowIds(array $FlowIds) 设置<p>合同流程ID数组，最多支持100个。</p><p>注: </p><ol><li>必须选择提供此参数或合同组编号中的一个。</li><li>当生成类型（GenerateType）设为“ALL”时，不可提供多个流程ID。</li></ol>
 * @method string getFlowGroupId() 获取<p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
 * @method void setFlowGroupId(string $FlowGroupId) 设置<p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
 * @method string getEndpoint() 获取<p>签署链接类型,可以设置的参数如下</p><ul><li> **WEIXINAPP** :(默认)跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型 ，此时返回短链</li><li> **CHANNEL** :带有H5引导页的跳转电子签小程序的链接(<b>GenerateType非ALL时候不能设置成CHANNEL</b>)</li><li> **APP** :第三方App或小程序跳转电子签小程序的path, App或者小程序跳转适合此类型</li><li> **LONGURL2WEIXINAPP** :跳转电子签小程序的链接, H5跳转适合此类型，此时返回长链</li></ul><p><strong>注：</strong>动态签署人场景，如果签署链接类型设置为<code>APP</code>，则仅支持跳转到封面页。</p><p>详细使用场景可以参考接口描述说明中的 <strong>主要使用场景EndPoint分类</strong></p>
 * @method void setEndpoint(string $Endpoint) 设置<p>签署链接类型,可以设置的参数如下</p><ul><li> **WEIXINAPP** :(默认)跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型 ，此时返回短链</li><li> **CHANNEL** :带有H5引导页的跳转电子签小程序的链接(<b>GenerateType非ALL时候不能设置成CHANNEL</b>)</li><li> **APP** :第三方App或小程序跳转电子签小程序的path, App或者小程序跳转适合此类型</li><li> **LONGURL2WEIXINAPP** :跳转电子签小程序的链接, H5跳转适合此类型，此时返回长链</li></ul><p><strong>注：</strong>动态签署人场景，如果签署链接类型设置为<code>APP</code>，则仅支持跳转到封面页。</p><p>详细使用场景可以参考接口描述说明中的 <strong>主要使用场景EndPoint分类</strong></p>
 * @method string getGenerateType() 获取<p>签署链接生成类型，可以选择的类型如下</p><ul><li><strong>ALL</strong>：（默认）为所有签署方生成签署链接，但不包括自动签署（静默签署）的签署方。注意：<strong>此中类型不支持多个合同ID（FlowIds）</strong>。</li><li><strong>CHANNEL</strong>：适用于第三方子企业的员工签署方。</li><li><strong>NOT_CHANNEL</strong>：适用于SaaS平台企业的员工签署方。</li><li><strong>PERSON</strong>：适用于个人或自然人签署方。</li><li><strong>FOLLOWER</strong>：适用于关注方，目前指合同的抄送方。</li><li><strong>RECIPIENT</strong>：根据RecipientId生成对应的签署链接，适用于动态添加签署人的情况。</li></ul>
 * @method void setGenerateType(string $GenerateType) 设置<p>签署链接生成类型，可以选择的类型如下</p><ul><li><strong>ALL</strong>：（默认）为所有签署方生成签署链接，但不包括自动签署（静默签署）的签署方。注意：<strong>此中类型不支持多个合同ID（FlowIds）</strong>。</li><li><strong>CHANNEL</strong>：适用于第三方子企业的员工签署方。</li><li><strong>NOT_CHANNEL</strong>：适用于SaaS平台企业的员工签署方。</li><li><strong>PERSON</strong>：适用于个人或自然人签署方。</li><li><strong>FOLLOWER</strong>：适用于关注方，目前指合同的抄送方。</li><li><strong>RECIPIENT</strong>：根据RecipientId生成对应的签署链接，适用于动态添加签署人的情况。</li></ul>
 * @method string getOrganizationName() 获取<p>SaaS平台企业员工签署方的企业名称如果名称中包含英文括号()，请使用中文括号（）代替。  注:  <code>1.GenerateType为&quot;NOT_CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的企业,预设后只能以该企业身份去领取合同并完成签署</code></p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>SaaS平台企业员工签署方的企业名称如果名称中包含英文括号()，请使用中文括号（）代替。  注:  <code>1.GenerateType为&quot;NOT_CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的企业,预设后只能以该企业身份去领取合同并完成签署</code></p>
 * @method string getName() 获取<p>合同流程里边参与方的姓名。<br>注: </p><ol><li><code>GenerateType为&quot;PERSON&quot;(即个人签署方)时必填</code>。</li><li><code>在动态签署人补充链接场景中，可以通过传入这个值，对补充的个人参与方信息进行限制。仅匹配传入姓名的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
 * @method void setName(string $Name) 设置<p>合同流程里边参与方的姓名。<br>注: </p><ol><li><code>GenerateType为&quot;PERSON&quot;(即个人签署方)时必填</code>。</li><li><code>在动态签署人补充链接场景中，可以通过传入这个值，对补充的个人参与方信息进行限制。仅匹配传入姓名的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
 * @method string getMobile() 获取<p>合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。<br>注:  </p><ol><li><code>GenerateType为&quot;PERSON&quot;或&quot;FOLLOWER&quot;时必填。</code></li><li><code>在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入手机号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
 * @method void setMobile(string $Mobile) 设置<p>合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。<br>注:  </p><ol><li><code>GenerateType为&quot;PERSON&quot;或&quot;FOLLOWER&quot;时必填。</code></li><li><code>在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入手机号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
 * @method string getIdCardType() 获取<p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件类型的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方，且需要和证件号参数一同传递，不能单独进行限制。</code></p>
 * @method void setIdCardType(string $IdCardType) 设置<p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件类型的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方，且需要和证件号参数一同传递，不能单独进行限制。</code></p>
 * @method string getIdCardNumber() 获取<p>证件号码，应符合以下规则</p><ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></p>
 * @method void setIdCardNumber(string $IdCardNumber) 设置<p>证件号码，应符合以下规则</p><ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></p>
 * @method string getOrganizationOpenId() 获取<p>第三方平台子客企业的企业的标识, 即OrganizationOpenId。 注:  <code>1.GenerateType为&quot;CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的平台子客企业,预设后只能以该平台子客企业身份去领取合同并完成签署</code></p>
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置<p>第三方平台子客企业的企业的标识, 即OrganizationOpenId。 注:  <code>1.GenerateType为&quot;CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的平台子客企业,预设后只能以该平台子客企业身份去领取合同并完成签署</code></p>
 * @method string getOpenId() 获取<p>第三方平台子客企业员工的标识OpenId，GenerateType为&quot;CHANNEL&quot;时可用，指定到具体参与人, 仅展示已经实名的经办人信息</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
 * @method void setOpenId(string $OpenId) 设置<p>第三方平台子客企业员工的标识OpenId，GenerateType为&quot;CHANNEL&quot;时可用，指定到具体参与人, 仅展示已经实名的经办人信息</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
 * @method boolean getAutoJumpBack() 获取<p>签署完成后是否自动回跳</p><ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
 * @method void setAutoJumpBack(boolean $AutoJumpBack) 设置<p>签署完成后是否自动回跳</p><ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
 * @method string getJumpUrl() 获取<p>签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。</p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。</p>
 * @method UserInfo getOperator() 获取<p>暂未开放</p>
 * @method void setOperator(UserInfo $Operator) 设置<p>暂未开放</p>
 * @method array getHides() 获取<p>生成的签署链接在签署页面隐藏的按钮列表，可设置如下：</p><ul><li> **0** :合同签署页面更多操作按钮</li><li> **1** :合同签署页面更多操作的拒绝签署按钮</li><li> **2** :合同签署页面更多操作的转他人处理按钮</li><li> **3** :签署成功页的查看详情按钮</li><li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li><li> **5** :合同签署页面更多操作的撤销按钮</li></ul><p>注:  <code>字段为数组, 可以传值隐藏多个按钮</code></p>
 * @method void setHides(array $Hides) 设置<p>生成的签署链接在签署页面隐藏的按钮列表，可设置如下：</p><ul><li> **0** :合同签署页面更多操作按钮</li><li> **1** :合同签署页面更多操作的拒绝签署按钮</li><li> **2** :合同签署页面更多操作的转他人处理按钮</li><li> **3** :签署成功页的查看详情按钮</li><li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li><li> **5** :合同签署页面更多操作的撤销按钮</li></ul><p>注:  <code>字段为数组, 可以传值隐藏多个按钮</code></p>
 * @method array getRecipientIds() 获取<p>参与方角色ID，用于生成动态签署人链接完成领取。</p><p>注：<code>使用此参数需要与flow_ids数量一致并且一一对应, 表示在对应同序号的流程中的参与角色ID</code>，</p>
 * @method void setRecipientIds(array $RecipientIds) 设置<p>参与方角色ID，用于生成动态签署人链接完成领取。</p><p>注：<code>使用此参数需要与flow_ids数量一致并且一一对应, 表示在对应同序号的流程中的参与角色ID</code>，</p>
 * @method FlowGroupUrlInfo getFlowGroupUrlInfo() 获取<p>合同组相关信息，指定合同组子合同和签署方的信息，用于补充动态签署人。</p>
 * @method void setFlowGroupUrlInfo(FlowGroupUrlInfo $FlowGroupUrlInfo) 设置<p>合同组相关信息，指定合同组子合同和签署方的信息，用于补充动态签署人。</p>
 * @method string getUrlUseEnv() 获取<p><font color="red">仅公众号 H5 跳转电子签小程序时</font>，如需签署完成的“返回应用”功能，在获取签署链接接口的 UrlUseEnv 参数需设置为 <strong>WeChatOfficialAccounts</strong>，小程序签署成功的结果页面中才会出现“返回应用”按钮。在用户点击“返回应用”按钮之后，会返回到公众号 H5。 </p><p>参考 <a href="https://qian.tencent.com/developers/company/openwxminiprogram/#23-%E5%85%AC%E4%BC%97%E5%8F%B7-h5-%E4%B8%AD%E8%B7%B3%E8%BD%AC">公众号 H5 跳转电子签小程序</a>。</p>
 * @method void setUrlUseEnv(string $UrlUseEnv) 设置<p><font color="red">仅公众号 H5 跳转电子签小程序时</font>，如需签署完成的“返回应用”功能，在获取签署链接接口的 UrlUseEnv 参数需设置为 <strong>WeChatOfficialAccounts</strong>，小程序签署成功的结果页面中才会出现“返回应用”按钮。在用户点击“返回应用”按钮之后，会返回到公众号 H5。 </p><p>参考 <a href="https://qian.tencent.com/developers/company/openwxminiprogram/#23-%E5%85%AC%E4%BC%97%E5%8F%B7-h5-%E4%B8%AD%E8%B7%B3%E8%BD%AC">公众号 H5 跳转电子签小程序</a>。</p>
 * @method boolean getCanSkipReadFlow() 获取<p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul> 注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 使用此功能时，FlowIds参数必传。3. 对于企业签署方，如果对印章/签名控件有限制要求，需要保证所有印章/签名签署控件限制要求(印章id或印章/签名类型限制)一致，否则无法使用此功能。</code></p><p>默认值：false</p>
 * @method void setCanSkipReadFlow(boolean $CanSkipReadFlow) 设置<p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul> 注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 使用此功能时，FlowIds参数必传。3. 对于企业签署方，如果对印章/签名控件有限制要求，需要保证所有印章/签名签署控件限制要求(印章id或印章/签名类型限制)一致，否则无法使用此功能。</code></p><p>默认值：false</p>
 */
class CreateSignUrlsRequest extends AbstractModel
{
    /**
     * @var Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经过实名认证
     */
    public $Agent;

    /**
     * @var array <p>合同流程ID数组，最多支持100个。</p><p>注: </p><ol><li>必须选择提供此参数或合同组编号中的一个。</li><li>当生成类型（GenerateType）设为“ALL”时，不可提供多个流程ID。</li></ol>
     */
    public $FlowIds;

    /**
     * @var string <p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
     */
    public $FlowGroupId;

    /**
     * @var string <p>签署链接类型,可以设置的参数如下</p><ul><li> **WEIXINAPP** :(默认)跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型 ，此时返回短链</li><li> **CHANNEL** :带有H5引导页的跳转电子签小程序的链接(<b>GenerateType非ALL时候不能设置成CHANNEL</b>)</li><li> **APP** :第三方App或小程序跳转电子签小程序的path, App或者小程序跳转适合此类型</li><li> **LONGURL2WEIXINAPP** :跳转电子签小程序的链接, H5跳转适合此类型，此时返回长链</li></ul><p><strong>注：</strong>动态签署人场景，如果签署链接类型设置为<code>APP</code>，则仅支持跳转到封面页。</p><p>详细使用场景可以参考接口描述说明中的 <strong>主要使用场景EndPoint分类</strong></p>
     */
    public $Endpoint;

    /**
     * @var string <p>签署链接生成类型，可以选择的类型如下</p><ul><li><strong>ALL</strong>：（默认）为所有签署方生成签署链接，但不包括自动签署（静默签署）的签署方。注意：<strong>此中类型不支持多个合同ID（FlowIds）</strong>。</li><li><strong>CHANNEL</strong>：适用于第三方子企业的员工签署方。</li><li><strong>NOT_CHANNEL</strong>：适用于SaaS平台企业的员工签署方。</li><li><strong>PERSON</strong>：适用于个人或自然人签署方。</li><li><strong>FOLLOWER</strong>：适用于关注方，目前指合同的抄送方。</li><li><strong>RECIPIENT</strong>：根据RecipientId生成对应的签署链接，适用于动态添加签署人的情况。</li></ul>
     */
    public $GenerateType;

    /**
     * @var string <p>SaaS平台企业员工签署方的企业名称如果名称中包含英文括号()，请使用中文括号（）代替。  注:  <code>1.GenerateType为&quot;NOT_CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的企业,预设后只能以该企业身份去领取合同并完成签署</code></p>
     */
    public $OrganizationName;

    /**
     * @var string <p>合同流程里边参与方的姓名。<br>注: </p><ol><li><code>GenerateType为&quot;PERSON&quot;(即个人签署方)时必填</code>。</li><li><code>在动态签署人补充链接场景中，可以通过传入这个值，对补充的个人参与方信息进行限制。仅匹配传入姓名的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
     */
    public $Name;

    /**
     * @var string <p>合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。<br>注:  </p><ol><li><code>GenerateType为&quot;PERSON&quot;或&quot;FOLLOWER&quot;时必填。</code></li><li><code>在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入手机号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
     */
    public $Mobile;

    /**
     * @var string <p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件类型的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方，且需要和证件号参数一同传递，不能单独进行限制。</code></p>
     */
    public $IdCardType;

    /**
     * @var string <p>证件号码，应符合以下规则</p><ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></p>
     */
    public $IdCardNumber;

    /**
     * @var string <p>第三方平台子客企业的企业的标识, 即OrganizationOpenId。 注:  <code>1.GenerateType为&quot;CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的平台子客企业,预设后只能以该平台子客企业身份去领取合同并完成签署</code></p>
     */
    public $OrganizationOpenId;

    /**
     * @var string <p>第三方平台子客企业员工的标识OpenId，GenerateType为&quot;CHANNEL&quot;时可用，指定到具体参与人, 仅展示已经实名的经办人信息</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
     */
    public $OpenId;

    /**
     * @var boolean <p>签署完成后是否自动回跳</p><ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
     */
    public $AutoJumpBack;

    /**
     * @var string <p>签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。</p>
     */
    public $JumpUrl;

    /**
     * @var UserInfo <p>暂未开放</p>
     * @deprecated
     */
    public $Operator;

    /**
     * @var array <p>生成的签署链接在签署页面隐藏的按钮列表，可设置如下：</p><ul><li> **0** :合同签署页面更多操作按钮</li><li> **1** :合同签署页面更多操作的拒绝签署按钮</li><li> **2** :合同签署页面更多操作的转他人处理按钮</li><li> **3** :签署成功页的查看详情按钮</li><li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li><li> **5** :合同签署页面更多操作的撤销按钮</li></ul><p>注:  <code>字段为数组, 可以传值隐藏多个按钮</code></p>
     */
    public $Hides;

    /**
     * @var array <p>参与方角色ID，用于生成动态签署人链接完成领取。</p><p>注：<code>使用此参数需要与flow_ids数量一致并且一一对应, 表示在对应同序号的流程中的参与角色ID</code>，</p>
     */
    public $RecipientIds;

    /**
     * @var FlowGroupUrlInfo <p>合同组相关信息，指定合同组子合同和签署方的信息，用于补充动态签署人。</p>
     */
    public $FlowGroupUrlInfo;

    /**
     * @var string <p><font color="red">仅公众号 H5 跳转电子签小程序时</font>，如需签署完成的“返回应用”功能，在获取签署链接接口的 UrlUseEnv 参数需设置为 <strong>WeChatOfficialAccounts</strong>，小程序签署成功的结果页面中才会出现“返回应用”按钮。在用户点击“返回应用”按钮之后，会返回到公众号 H5。 </p><p>参考 <a href="https://qian.tencent.com/developers/company/openwxminiprogram/#23-%E5%85%AC%E4%BC%97%E5%8F%B7-h5-%E4%B8%AD%E8%B7%B3%E8%BD%AC">公众号 H5 跳转电子签小程序</a>。</p>
     */
    public $UrlUseEnv;

    /**
     * @var boolean <p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul> 注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 使用此功能时，FlowIds参数必传。3. 对于企业签署方，如果对印章/签名控件有限制要求，需要保证所有印章/签名签署控件限制要求(印章id或印章/签名类型限制)一致，否则无法使用此功能。</code></p><p>默认值：false</p>
     */
    public $CanSkipReadFlow;

    /**
     * @param Agent $Agent <p>关于渠道应用的相关信息，包括渠道应用标识、第三方平台子客企业标识及第三方平台子客企业中的员工标识等内容，您可以参阅开发者中心所提供的 Agent 结构体以获取详细定义。</p><p>此接口下面信息必填。</p><ul><li>渠道应用标识:  Agent.AppId</li><li>第三方平台子客企业标识: Agent.ProxyOrganizationOpenId</li><li>第三方平台子客企业中的员工标识: Agent.ProxyOperator.OpenId</li></ul>第三方平台子客企业和员工必须已经过实名认证
     * @param array $FlowIds <p>合同流程ID数组，最多支持100个。</p><p>注: </p><ol><li>必须选择提供此参数或合同组编号中的一个。</li><li>当生成类型（GenerateType）设为“ALL”时，不可提供多个流程ID。</li></ol>
     * @param string $FlowGroupId <p>合同组编号<br>注：<code>该参数和合同流程ID数组必须二选一</code></p>
     * @param string $Endpoint <p>签署链接类型,可以设置的参数如下</p><ul><li> **WEIXINAPP** :(默认)跳转电子签小程序的http_url, 短信通知或者H5跳转适合此类型 ，此时返回短链</li><li> **CHANNEL** :带有H5引导页的跳转电子签小程序的链接(<b>GenerateType非ALL时候不能设置成CHANNEL</b>)</li><li> **APP** :第三方App或小程序跳转电子签小程序的path, App或者小程序跳转适合此类型</li><li> **LONGURL2WEIXINAPP** :跳转电子签小程序的链接, H5跳转适合此类型，此时返回长链</li></ul><p><strong>注：</strong>动态签署人场景，如果签署链接类型设置为<code>APP</code>，则仅支持跳转到封面页。</p><p>详细使用场景可以参考接口描述说明中的 <strong>主要使用场景EndPoint分类</strong></p>
     * @param string $GenerateType <p>签署链接生成类型，可以选择的类型如下</p><ul><li><strong>ALL</strong>：（默认）为所有签署方生成签署链接，但不包括自动签署（静默签署）的签署方。注意：<strong>此中类型不支持多个合同ID（FlowIds）</strong>。</li><li><strong>CHANNEL</strong>：适用于第三方子企业的员工签署方。</li><li><strong>NOT_CHANNEL</strong>：适用于SaaS平台企业的员工签署方。</li><li><strong>PERSON</strong>：适用于个人或自然人签署方。</li><li><strong>FOLLOWER</strong>：适用于关注方，目前指合同的抄送方。</li><li><strong>RECIPIENT</strong>：根据RecipientId生成对应的签署链接，适用于动态添加签署人的情况。</li></ul>
     * @param string $OrganizationName <p>SaaS平台企业员工签署方的企业名称如果名称中包含英文括号()，请使用中文括号（）代替。  注:  <code>1.GenerateType为&quot;NOT_CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的企业,预设后只能以该企业身份去领取合同并完成签署</code></p>
     * @param string $Name <p>合同流程里边参与方的姓名。<br>注: </p><ol><li><code>GenerateType为&quot;PERSON&quot;(即个人签署方)时必填</code>。</li><li><code>在动态签署人补充链接场景中，可以通过传入这个值，对补充的个人参与方信息进行限制。仅匹配传入姓名的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
     * @param string $Mobile <p>合同流程里边签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。<br>注:  </p><ol><li><code>GenerateType为&quot;PERSON&quot;或&quot;FOLLOWER&quot;时必填。</code></li><li><code>在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入手机号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></li></ol>
     * @param string $IdCardType <p>证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件类型的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方，且需要和证件号参数一同传递，不能单独进行限制。</code></p>
     * @param string $IdCardNumber <p>证件号码，应符合以下规则</p><ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成(如存在X，请大写)。</li><li>港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul><p><code>注：在动态签署人补充链接场景中，可以通过传入此值，对补充的个人参与方信息进行限制。仅匹配传入证件号的参与方才能补充合同。此参数预设信息功能暂时仅支持个人动态参与方。</code></p>
     * @param string $OrganizationOpenId <p>第三方平台子客企业的企业的标识, 即OrganizationOpenId。 注:  <code>1.GenerateType为&quot;CHANNEL&quot;时必填</code> <code>2.获取B端动态签署人领取链接时,可指定此字段来预先设定签署人的平台子客企业,预设后只能以该平台子客企业身份去领取合同并完成签署</code></p>
     * @param string $OpenId <p>第三方平台子客企业员工的标识OpenId，GenerateType为&quot;CHANNEL&quot;时可用，指定到具体参与人, 仅展示已经实名的经办人信息</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
     * @param boolean $AutoJumpBack <p>签署完成后是否自动回跳</p><ul><li>false：否, 签署完成不会自动跳转回来(默认)</li><li>true：是, 签署完成会自动跳转回来</li></ul><p>注: </p><ol><li>该参数<font color="red">只针对APP类型（电子签小程序跳转贵方小程序）场景</font> 的签署链接有效</li><li><font color="red">手机应用APP 或 微信小程序需要监控界面的返回走后序逻辑</font>, 微信小程序的文档可以参考<a href="https://developers.weixin.qq.com/miniprogram/dev/reference/api/App.html#onShow-Object-object">这个</a></li><li><font color="red">电子签小程序跳转贵方APP，不支持自动跳转，必需用户手动点击完成按钮（微信的限制）</font></li></ol>
     * @param string $JumpUrl <p>签署完之后的H5页面的跳转链接，针对Endpoint为CHANNEL时有效，最大长度1000个字符。</p>
     * @param UserInfo $Operator <p>暂未开放</p>
     * @param array $Hides <p>生成的签署链接在签署页面隐藏的按钮列表，可设置如下：</p><ul><li> **0** :合同签署页面更多操作按钮</li><li> **1** :合同签署页面更多操作的拒绝签署按钮</li><li> **2** :合同签署页面更多操作的转他人处理按钮</li><li> **3** :签署成功页的查看详情按钮</li><li> **4** :合同签署页面更多操作的查看合同基本信息按钮</li><li> **5** :合同签署页面更多操作的撤销按钮</li></ul><p>注:  <code>字段为数组, 可以传值隐藏多个按钮</code></p>
     * @param array $RecipientIds <p>参与方角色ID，用于生成动态签署人链接完成领取。</p><p>注：<code>使用此参数需要与flow_ids数量一致并且一一对应, 表示在对应同序号的流程中的参与角色ID</code>，</p>
     * @param FlowGroupUrlInfo $FlowGroupUrlInfo <p>合同组相关信息，指定合同组子合同和签署方的信息，用于补充动态签署人。</p>
     * @param string $UrlUseEnv <p><font color="red">仅公众号 H5 跳转电子签小程序时</font>，如需签署完成的“返回应用”功能，在获取签署链接接口的 UrlUseEnv 参数需设置为 <strong>WeChatOfficialAccounts</strong>，小程序签署成功的结果页面中才会出现“返回应用”按钮。在用户点击“返回应用”按钮之后，会返回到公众号 H5。 </p><p>参考 <a href="https://qian.tencent.com/developers/company/openwxminiprogram/#23-%E5%85%AC%E4%BC%97%E5%8F%B7-h5-%E4%B8%AD%E8%B7%B3%E8%BD%AC">公众号 H5 跳转电子签小程序</a>。</p>
     * @param boolean $CanSkipReadFlow <p>是否允许此链接中签署方批量确认已读文件。 <ul><li>false (默认): 不允许批量确认已读文件。</li> <li>true : 允许批量确认已读文件。</li></ul> 注：<code>1. 此功能为白名单功能，使用前请联系对应客户经理进行开通。2. 使用此功能时，FlowIds参数必传。3. 对于企业签署方，如果对印章/签名控件有限制要求，需要保证所有印章/签名签署控件限制要求(印章id或印章/签名类型限制)一致，否则无法使用此功能。</code></p><p>默认值：false</p>
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

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("FlowGroupId",$param) and $param["FlowGroupId"] !== null) {
            $this->FlowGroupId = $param["FlowGroupId"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("GenerateType",$param) and $param["GenerateType"] !== null) {
            $this->GenerateType = $param["GenerateType"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("AutoJumpBack",$param) and $param["AutoJumpBack"] !== null) {
            $this->AutoJumpBack = $param["AutoJumpBack"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Hides",$param) and $param["Hides"] !== null) {
            $this->Hides = $param["Hides"];
        }

        if (array_key_exists("RecipientIds",$param) and $param["RecipientIds"] !== null) {
            $this->RecipientIds = $param["RecipientIds"];
        }

        if (array_key_exists("FlowGroupUrlInfo",$param) and $param["FlowGroupUrlInfo"] !== null) {
            $this->FlowGroupUrlInfo = new FlowGroupUrlInfo();
            $this->FlowGroupUrlInfo->deserialize($param["FlowGroupUrlInfo"]);
        }

        if (array_key_exists("UrlUseEnv",$param) and $param["UrlUseEnv"] !== null) {
            $this->UrlUseEnv = $param["UrlUseEnv"];
        }

        if (array_key_exists("CanSkipReadFlow",$param) and $param["CanSkipReadFlow"] !== null) {
            $this->CanSkipReadFlow = $param["CanSkipReadFlow"];
        }
    }
}
