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
 * 创建签署流程签署人入参。

**各种场景传参说明**:

<table>     <thead>     <tr>         <th>场景编号</th>         <th>发起方类型</th>         <th>签署方类型</th>         <th>签署方传参说明</th>     </tr>     </thead>     <tbody>     <tr>         <td>场景一</td>         <td>第三方子企业A员工</td>         <td>第三方子企业A员工</td>         <td>             <ul>                 <li>（选填）IdCardNumber和IdCardType：证件类型和证件号</li>                 <li>（必传）Name：签署方的名字</li>                 <li>（必传）Mobile：签署方的手机号</li>                 <li>（必传）OpenId：企业员工标识</li>                 <li>（必传）OrganizationName：子企业名称</li>                 <li>（必传）OrganizationOpenId：子企业的标识</li>                 <li>（固定）ApproverType：需设置为ORGANIZATION</li>             </ul>         </td>     </tr>     <tr>         <td>场景二</td>         <td>第三方子企业A员工</td>         <td>第三方子企业B(不指定经办人走领取方式)</td>         <td>             <ul>                 <li>（必传）OrganizationName：子企业名称</li>                 <li>（必传）OrganizationOpenId：子企业的标识</li>                 <li>（固定）ApproverType：需设置为ORGANIZATION</li>                 <li>（固定）ApproverOption.FillType：需设置为1</li>             </ul>         </td>     </tr>     <tr>         <td>场景三</td>         <td>第三方子企业A员工</td>         <td>第三方子企业B员工</td>         <td>  <ul>             <li>（选填）IdCardNumber和IdCardType：证件类型和证件号</li>             <li>（必传）Name：签署方的名字</li>             <li>（必传）Mobile：签署方的手机号</li>             <li>（必传）OpenId：企业员工标识</li>             <li>（必传）OrganizationName：子企业名称</li>             <li>（必传）OrganizationOpenId：子企业的标识</li>             <li>（固定）ApproverType：需设置为ORGANIZATION</li>         </ul></td>     </tr>     <tr>         <td>场景四</td>         <td>第三方子企业A员工</td>         <td>个人/自然人</td>         <td>             <ul>                 <li>（选填）IdCardNumber和IdCardType：证件类型和证件号</li>                 <li>（必传）Name：签署方的名字</li>                 <li>（必传）Mobile：签署方的手机号</li>                 <li>（固定）ApproverType：需设置为PERSON</li>             </ul>         </td>     </tr>     <tr>         <td>场景五</td>         <td>第三方子企业A员工</td>         <td>SaaS平台企业员工</td>         <td>             <ul>                 <li>（选填）IdCardNumber和IdCardType：证件类型和证件号</li>                 <li>（必传）OrganizationName：SaaS企业的名字</li>                 <li>（必传）Name：签署方的名字</li>                 <li>（必传）Mobile：签署方的手机号</li>                 <li>（不传）OrganizationOpenId：子企业的标识</li>    <li>（不传）OpenId：企业员工标识</li>               <li>（固定）ApproverType：需设置为ORGANIZATION</li>                 <li>（固定）NotChannelOrganization：需设置为True</li>             </ul>         </td>     </tr>     </tbody> </table>


**注1**: `使用模板发起合同时，RecipientId（模板发起合同时）必传`

RecipientId参数获取：
从<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates" target="_blank">DescribeFlowTemplates接口</a>接口中，可以得到模板下的签署方Recipient列表，根据模板自定义的Rolename在此结构体中确定其RecipientId。

**注2**:  `如果发起的是动态签署方（即ApproverOption.FillType指定为1），可以不指定具体签署人信息`,  动态签署方可以参考<a href="https://qian.tencent.com/developers/partner/dynamic_signer" target="_blank">此文档</a>
 *
 * @method string getName() 获取<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
 * @method void setName(string $Name) 设置<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
 * @method string getIdCardType() 获取<p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li><li>OTHER_CARD_TYPE : 其他证件</li></ul><p>注: <code>其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
 * @method void setIdCardType(string $IdCardType) 设置<p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li><li>OTHER_CARD_TYPE : 其他证件</li></ul><p>注: <code>其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
 * @method string getIdCardNumber() 获取<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setIdCardNumber(string $IdCardNumber) 设置<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getMobile() 获取<p>签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)， 不支持海外手机号。<br>请确认手机号所有方为此合同签署方。</p>
 * @method void setMobile(string $Mobile) 设置<p>签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)， 不支持海外手机号。<br>请确认手机号所有方为此合同签署方。</p>
 * @method string getOrganizationName() 获取<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
 * @method boolean getNotChannelOrganization() 获取<p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
 * @method void setNotChannelOrganization(boolean $NotChannelOrganization) 设置<p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
 * @method string getOpenId() 获取<p>第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成</p><p>当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
 * @method void setOpenId(string $OpenId) 设置<p>第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成</p><p>当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
 * @method string getOrganizationOpenId() 获取<p>同应用下第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样，签署方为非发起方企业场景下必传，最大长度64个字符</p>
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置<p>同应用下第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样，签署方为非发起方企业场景下必传，最大长度64个字符</p>
 * @method string getApproverType() 获取<p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><ul><li> **PERSON** :个人/自然人</li><li> **PERSON_AUTO_SIGN** :个人/自然人自动签署，适用于个人自动签场景</li><li> **ORGANIZATION** :企业/企业员工（企业签署方或模板发起时的企业静默签）</li><li> **ENTERPRISESERVER** :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</li></ul><p>注:<br><code>1. 个人自动签场景(PERSON_AUTO_SIGN)为白名单功能, 使用前请联系对接的客户经理沟通。</code><br><code>2. 若要实现他方企业（同一应用下）自动签，需要满足3个条件：</code></p><ul><li>条件1：ApproverType 设置为ENTERPRISESERVER</li><li>条件2：子客之间完成授权</li><li>条件3：联系对接的客户经理沟通如何使用</li></ul>
 * @method void setApproverType(string $ApproverType) 设置<p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><ul><li> **PERSON** :个人/自然人</li><li> **PERSON_AUTO_SIGN** :个人/自然人自动签署，适用于个人自动签场景</li><li> **ORGANIZATION** :企业/企业员工（企业签署方或模板发起时的企业静默签）</li><li> **ENTERPRISESERVER** :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</li></ul><p>注:<br><code>1. 个人自动签场景(PERSON_AUTO_SIGN)为白名单功能, 使用前请联系对接的客户经理沟通。</code><br><code>2. 若要实现他方企业（同一应用下）自动签，需要满足3个条件：</code></p><ul><li>条件1：ApproverType 设置为ENTERPRISESERVER</li><li>条件2：子客之间完成授权</li><li>条件3：联系对接的客户经理沟通如何使用</li></ul>
 * @method string getRecipientId() 获取<p>签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；</p>
 * @method void setRecipientId(string $RecipientId) 设置<p>签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；</p>
 * @method integer getDeadline() 获取<p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
 * @method void setDeadline(integer $Deadline) 设置<p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
 * @method string getCallbackUrl() 获取<p>签署完回调url，最大长度1000个字符</p>
 * @method void setCallbackUrl(string $CallbackUrl) 设置<p>签署完回调url，最大长度1000个字符</p>
 * @method array getSignComponents() 获取<p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID:注意：(如果模板里面指定了印章，默认使用模板里面配置的印章，不能进行变更) <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
 * @method void setSignComponents(array $SignComponents) 设置<p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID:注意：(如果模板里面指定了印章，默认使用模板里面配置的印章，不能进行变更) <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
 * @method array getComponentLimitType() 获取<p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
 * @method void setComponentLimitType(array $ComponentLimitType) 设置<p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
 * @method integer getPreReadTime() 获取<p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method void setPreReadTime(integer $PreReadTime) 设置<p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method string getJumpUrl() 获取<p>签署完前端跳转的url，此字段的用法场景请联系客户经理确认</p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>签署完前端跳转的url，此字段的用法场景请联系客户经理确认</p>
 * @method ApproverOption getApproverOption() 获取<p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人、是否为动态补充签署人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
 * @method void setApproverOption(ApproverOption $ApproverOption) 设置<p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人、是否为动态补充签署人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
 * @method boolean getApproverNeedSignReview() 获取<p>此签署人（员工或者个人）签署前，是否需要发起方企业进行审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待发起方企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
 * @method void setApproverNeedSignReview(boolean $ApproverNeedSignReview) 设置<p>此签署人（员工或者个人）签署前，是否需要发起方企业进行审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待发起方企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
 * @method array getApproverVerifyTypes() 获取<p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置<p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
 * @method array getApproverSignTypes() 获取<p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置<p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
 * @method string getSignId() 获取<p>签署ID</p><ul><li>发起流程时系统自动补充</li><li>创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息</li></ul>
 * @method void setSignId(string $SignId) 设置<p>签署ID</p><ul><li>发起流程时系统自动补充</li><li>创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息</li></ul>
 * @method string getNotifyType() 获取<p>通知签署方经办人的方式（仅在指定NotChannelOrganization=true时有效）, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **EMAIL** :邮件</li><li> **ALL** :短信+邮件</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p><p>枚举值：</p><ul><li>SMS： 发送短信</li><li>EMAIL： 发送邮件</li><li>ALL： 同时发送短信和邮件</li><li>NODE： 不做任何形式的通知</li></ul>
 * @method void setNotifyType(string $NotifyType) 设置<p>通知签署方经办人的方式（仅在指定NotChannelOrganization=true时有效）, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **EMAIL** :邮件</li><li> **ALL** :短信+邮件</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p><p>枚举值：</p><ul><li>SMS： 发送短信</li><li>EMAIL： 发送邮件</li><li>ALL： 同时发送短信和邮件</li><li>NODE： 不做任何形式的通知</li></ul>
 * @method array getAddSignComponentsLimits() 获取<p><a href="https://qian.tencent.com/developers/partnerApis/startFlows/ChannelCreateFlowByFiles">通过文件创建签署流程</a>时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID,或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
 * @method void setAddSignComponentsLimits(array $AddSignComponentsLimits) 设置<p><a href="https://qian.tencent.com/developers/partnerApis/startFlows/ChannelCreateFlowByFiles">通过文件创建签署流程</a>时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID,或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
 * @method string getApproverRoleName() 获取<p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
 * @method void setApproverRoleName(string $ApproverRoleName) 设置<p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
 * @method integer getSignTypeSelector() 获取<p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
 * @method void setSignTypeSelector(integer $SignTypeSelector) 设置<p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
 * @method array getComponents() 获取<p>签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/partner/createFlowByFiles#为签署方指定填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method void setComponents(array $Components) 设置<p>签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/partner/createFlowByFiles#为签署方指定填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method Intention getIntention() 获取<p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
 * @method void setIntention(Intention $Intention) 设置<p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
 * @method array getSignEndpoints() 获取<p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
 * @method void setSignEndpoints(array $SignEndpoints) 设置<p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
 * @method string getApproverEmail() 获取<p>用户指定的邮箱地址</p>
 * @method void setApproverEmail(string $ApproverEmail) 设置<p>用户指定的邮箱地址</p>
 */
class FlowApproverInfo extends AbstractModel
{
    /**
     * @var string <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
     */
    public $Name;

    /**
     * @var string <p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li><li>OTHER_CARD_TYPE : 其他证件</li></ul><p>注: <code>其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
     */
    public $IdCardType;

    /**
     * @var string <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $IdCardNumber;

    /**
     * @var string <p>签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)， 不支持海外手机号。<br>请确认手机号所有方为此合同签署方。</p>
     */
    public $Mobile;

    /**
     * @var string <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
     */
    public $OrganizationName;

    /**
     * @var boolean <p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
     */
    public $NotChannelOrganization;

    /**
     * @var string <p>第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成</p><p>当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
     */
    public $OpenId;

    /**
     * @var string <p>同应用下第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样，签署方为非发起方企业场景下必传，最大长度64个字符</p>
     */
    public $OrganizationOpenId;

    /**
     * @var string <p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><ul><li> **PERSON** :个人/自然人</li><li> **PERSON_AUTO_SIGN** :个人/自然人自动签署，适用于个人自动签场景</li><li> **ORGANIZATION** :企业/企业员工（企业签署方或模板发起时的企业静默签）</li><li> **ENTERPRISESERVER** :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</li></ul><p>注:<br><code>1. 个人自动签场景(PERSON_AUTO_SIGN)为白名单功能, 使用前请联系对接的客户经理沟通。</code><br><code>2. 若要实现他方企业（同一应用下）自动签，需要满足3个条件：</code></p><ul><li>条件1：ApproverType 设置为ENTERPRISESERVER</li><li>条件2：子客之间完成授权</li><li>条件3：联系对接的客户经理沟通如何使用</li></ul>
     */
    public $ApproverType;

    /**
     * @var string <p>签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；</p>
     */
    public $RecipientId;

    /**
     * @var integer <p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
     */
    public $Deadline;

    /**
     * @var string <p>签署完回调url，最大长度1000个字符</p>
     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var array <p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID:注意：(如果模板里面指定了印章，默认使用模板里面配置的印章，不能进行变更) <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
     */
    public $SignComponents;

    /**
     * @var array <p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
     */
    public $ComponentLimitType;

    /**
     * @var integer <p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     */
    public $PreReadTime;

    /**
     * @var string <p>签署完前端跳转的url，此字段的用法场景请联系客户经理确认</p>
     */
    public $JumpUrl;

    /**
     * @var ApproverOption <p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人、是否为动态补充签署人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
     */
    public $ApproverOption;

    /**
     * @var boolean <p>此签署人（员工或者个人）签署前，是否需要发起方企业进行审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待发起方企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
     */
    public $ApproverNeedSignReview;

    /**
     * @var array <p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
     */
    public $ApproverVerifyTypes;

    /**
     * @var array <p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
     */
    public $ApproverSignTypes;

    /**
     * @var string <p>签署ID</p><ul><li>发起流程时系统自动补充</li><li>创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息</li></ul>
     */
    public $SignId;

    /**
     * @var string <p>通知签署方经办人的方式（仅在指定NotChannelOrganization=true时有效）, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **EMAIL** :邮件</li><li> **ALL** :短信+邮件</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p><p>枚举值：</p><ul><li>SMS： 发送短信</li><li>EMAIL： 发送邮件</li><li>ALL： 同时发送短信和邮件</li><li>NODE： 不做任何形式的通知</li></ul>
     */
    public $NotifyType;

    /**
     * @var array <p><a href="https://qian.tencent.com/developers/partnerApis/startFlows/ChannelCreateFlowByFiles">通过文件创建签署流程</a>时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID,或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
     */
    public $AddSignComponentsLimits;

    /**
     * @var string <p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
     */
    public $ApproverRoleName;

    /**
     * @var integer <p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
     */
    public $SignTypeSelector;

    /**
     * @var array <p>签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/partner/createFlowByFiles#为签署方指定填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     */
    public $Components;

    /**
     * @var Intention <p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
     */
    public $Intention;

    /**
     * @var array <p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
     */
    public $SignEndpoints;

    /**
     * @var string <p>用户指定的邮箱地址</p>
     */
    public $ApproverEmail;

    /**
     * @param string $Name <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
     * @param string $IdCardType <p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li><li>OTHER_CARD_TYPE : 其他证件</li></ul><p>注: <code>其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
     * @param string $IdCardNumber <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $Mobile <p>签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)， 不支持海外手机号。<br>请确认手机号所有方为此合同签署方。</p>
     * @param string $OrganizationName <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p>
     * @param boolean $NotChannelOrganization <p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
     * @param string $OpenId <p>第三方平台子客企业员工的唯一标识，长度不能超过64，只能由字母和数字组成</p><p>当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程</p><p>注：<br>如果传进来的<font color="red">OpenId已经实名并且加入企业， 则忽略Name，IdCardType，IdCardNumber，Mobile这四个入参</font>（会用此OpenId实名的身份证和登录的手机号覆盖）</p>
     * @param string $OrganizationOpenId <p>同应用下第三方平台子客企业的唯一标识，定义Agent中的ProxyOrganizationOpenId一样，签署方为非发起方企业场景下必传，最大长度64个字符</p>
     * @param string $ApproverType <p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><ul><li> **PERSON** :个人/自然人</li><li> **PERSON_AUTO_SIGN** :个人/自然人自动签署，适用于个人自动签场景</li><li> **ORGANIZATION** :企业/企业员工（企业签署方或模板发起时的企业静默签）</li><li> **ENTERPRISESERVER** :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</li></ul><p>注:<br><code>1. 个人自动签场景(PERSON_AUTO_SIGN)为白名单功能, 使用前请联系对接的客户经理沟通。</code><br><code>2. 若要实现他方企业（同一应用下）自动签，需要满足3个条件：</code></p><ul><li>条件1：ApproverType 设置为ENTERPRISESERVER</li><li>条件2：子客之间完成授权</li><li>条件3：联系对接的客户经理沟通如何使用</li></ul>
     * @param string $RecipientId <p>签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；</p>
     * @param integer $Deadline <p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
     * @param string $CallbackUrl <p>签署完回调url，最大长度1000个字符</p>
     * @param array $SignComponents <p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID:注意：(如果模板里面指定了印章，默认使用模板里面配置的印章，不能进行变更) <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
     * @param array $ComponentLimitType <p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
     * @param integer $PreReadTime <p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     * @param string $JumpUrl <p>签署完前端跳转的url，此字段的用法场景请联系客户经理确认</p>
     * @param ApproverOption $ApproverOption <p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人、是否为动态补充签署人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
     * @param boolean $ApproverNeedSignReview <p>此签署人（员工或者个人）签署前，是否需要发起方企业进行审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待发起方企业内部审批完成。</li></ul>企业可以通过ChannelCreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
     * @param array $ApproverVerifyTypes <p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
     * @param array $ApproverSignTypes <p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
     * @param string $SignId <p>签署ID</p><ul><li>发起流程时系统自动补充</li><li>创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息</li></ul>
     * @param string $NotifyType <p>通知签署方经办人的方式（仅在指定NotChannelOrganization=true时有效）, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **EMAIL** :邮件</li><li> **ALL** :短信+邮件</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p><p>枚举值：</p><ul><li>SMS： 发送短信</li><li>EMAIL： 发送邮件</li><li>ALL： 同时发送短信和邮件</li><li>NODE： 不做任何形式的通知</li></ul>
     * @param array $AddSignComponentsLimits <p><a href="https://qian.tencent.com/developers/partnerApis/startFlows/ChannelCreateFlowByFiles">通过文件创建签署流程</a>时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID,或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
     * @param string $ApproverRoleName <p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
     * @param integer $SignTypeSelector <p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
     * @param array $Components <p>签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>数据表格等填写控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/partner/createFlowByFiles#为签署方指定填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     * @param Intention $Intention <p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/partnerApis/operateFlows/ChannelCreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接的时候必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/partnerApis/flows/ChannelDescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
     * @param array $SignEndpoints <p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
     * @param string $ApproverEmail <p>用户指定的邮箱地址</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdCardType",$param) and $param["IdCardType"] !== null) {
            $this->IdCardType = $param["IdCardType"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("NotChannelOrganization",$param) and $param["NotChannelOrganization"] !== null) {
            $this->NotChannelOrganization = $param["NotChannelOrganization"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("ComponentLimitType",$param) and $param["ComponentLimitType"] !== null) {
            $this->ComponentLimitType = $param["ComponentLimitType"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("ApproverOption",$param) and $param["ApproverOption"] !== null) {
            $this->ApproverOption = new ApproverOption();
            $this->ApproverOption->deserialize($param["ApproverOption"]);
        }

        if (array_key_exists("ApproverNeedSignReview",$param) and $param["ApproverNeedSignReview"] !== null) {
            $this->ApproverNeedSignReview = $param["ApproverNeedSignReview"];
        }

        if (array_key_exists("ApproverVerifyTypes",$param) and $param["ApproverVerifyTypes"] !== null) {
            $this->ApproverVerifyTypes = $param["ApproverVerifyTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("AddSignComponentsLimits",$param) and $param["AddSignComponentsLimits"] !== null) {
            $this->AddSignComponentsLimits = [];
            foreach ($param["AddSignComponentsLimits"] as $key => $value){
                $obj = new ComponentLimit();
                $obj->deserialize($value);
                array_push($this->AddSignComponentsLimits, $obj);
            }
        }

        if (array_key_exists("ApproverRoleName",$param) and $param["ApproverRoleName"] !== null) {
            $this->ApproverRoleName = $param["ApproverRoleName"];
        }

        if (array_key_exists("SignTypeSelector",$param) and $param["SignTypeSelector"] !== null) {
            $this->SignTypeSelector = $param["SignTypeSelector"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = new Intention();
            $this->Intention->deserialize($param["Intention"]);
        }

        if (array_key_exists("SignEndpoints",$param) and $param["SignEndpoints"] !== null) {
            $this->SignEndpoints = $param["SignEndpoints"];
        }

        if (array_key_exists("ApproverEmail",$param) and $param["ApproverEmail"] !== null) {
            $this->ApproverEmail = $param["ApproverEmail"];
        }
    }
}
