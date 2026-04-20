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
 * 合同参与者信息。
 *
 * @method integer getApproverType() 获取<p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人<br><strong>3</strong>：企业静默签署<br>注：<code>类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。</code><br><strong>7</strong>: 个人自动签署，适用于个人自动签场景。<br>注: <code>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
 * @method void setApproverType(integer $ApproverType) 设置<p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人<br><strong>3</strong>：企业静默签署<br>注：<code>类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。</code><br><strong>7</strong>: 个人自动签署，适用于个人自动签场景。<br>注: <code>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
 * @method string getApproverName() 获取<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
 * @method void setApproverName(string $ApproverName) 设置<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
 * @method string getApproverMobile() 获取<p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此合同签署方。</p>
 * @method void setApproverMobile(string $ApproverMobile) 设置<p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此合同签署方。</p>
 * @method string getOrganizationName() 获取<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。</p>
 * @method array getSignComponents() 获取<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】合同中的该名签署方的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
 * @method void setSignComponents(array $SignComponents) 设置<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】合同中的该名签署方的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
 * @method string getApproverIdCardType() 获取<p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul><p>注: </p><ol><li><b>其他证件类型为白名单功能</b>，使用前请联系对接的客户经理沟通。</li><li>港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</li></ol>
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置<p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul><p>注: </p><ol><li><b>其他证件类型为白名单功能</b>，使用前请联系对接的客户经理沟通。</li><li>港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</li></ol>
 * @method string getApproverIdCardNumber() 获取<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getNotifyType() 获取<p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮箱</li><li>  **all**  :  短信+邮箱</li><li>   **none**   : 不通知</li></ul><p>注意：<br><code>如果使用的是通过文件发起合同（CreateFlowByFiles），NotifyType必须 是 sms 才会发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 短信+邮件通知</li><li>none： 不做任何形式的通知</li></ul>
 * @method void setNotifyType(string $NotifyType) 设置<p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮箱</li><li>  **all**  :  短信+邮箱</li><li>   **none**   : 不通知</li></ul><p>注意：<br><code>如果使用的是通过文件发起合同（CreateFlowByFiles），NotifyType必须 是 sms 才会发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 短信+邮件通知</li><li>none： 不做任何形式的通知</li></ul>
 * @method integer getApproverRole() 获取<p>收据场景设置签署人角色类型, 可以设置如下<b>类型</b>:</p><ul><li> **1**  :收款人</li><li>   **2**   :开具人</li><li>   **3** :见证人</li></ul>注: <code>收据场景为白名单功能，使用前请联系对接的客户经理沟通。</code>
 * @method void setApproverRole(integer $ApproverRole) 设置<p>收据场景设置签署人角色类型, 可以设置如下<b>类型</b>:</p><ul><li> **1**  :收款人</li><li>   **2**   :开具人</li><li>   **3** :见证人</li></ul>注: <code>收据场景为白名单功能，使用前请联系对接的客户经理沟通。</code>
 * @method string getApproverRoleName() 获取<p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
 * @method void setApproverRoleName(string $ApproverRoleName) 设置<p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
 * @method array getVerifyChannel() 获取<p><font color="red">【已不再使用】</font>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: 该字段已不再使用, 请用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</p>
 * @method void setVerifyChannel(array $VerifyChannel) 设置<p><font color="red">【已不再使用】</font>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: 该字段已不再使用, 请用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</p>
 * @method integer getPreReadTime() 获取<p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method void setPreReadTime(integer $PreReadTime) 设置<p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method string getUserId() 获取<p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
 * @method void setUserId(string $UserId) 设置<p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
 * @method string getApproverSource() 获取<p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
 * @method void setApproverSource(string $ApproverSource) 设置<p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
 * @method string getCustomApproverTag() 获取<p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置<p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
 * @method ApproverOption getApproverOption() 获取<p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
 * @method void setApproverOption(ApproverOption $ApproverOption) 设置<p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
 * @method array getApproverVerifyTypes() 获取<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
 * @method array getApproverSignTypes() 获取<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注：</p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/company/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注：</p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/company/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
 * @method boolean getApproverNeedSignReview() 获取<p>此签署人（员工或者个人）签署前，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
 * @method void setApproverNeedSignReview(boolean $ApproverNeedSignReview) 设置<p>此签署人（员工或者个人）签署前，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
 * @method array getAddSignComponentsLimits() 获取<p>【在用文件发起合同场景下才有效】在调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a>创建合同时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
 * @method void setAddSignComponentsLimits(array $AddSignComponentsLimits) 设置<p>【在用文件发起合同场景下才有效】在调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a>创建合同时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
 * @method string getSignInstructionContent() 获取<p>签署须知：支持传入富文本，最长字数：500个中文字符</p>
 * @method void setSignInstructionContent(string $SignInstructionContent) 设置<p>签署须知：支持传入富文本，最长字数：500个中文字符</p>
 * @method integer getDeadline() 获取<p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
 * @method void setDeadline(integer $Deadline) 设置<p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
 * @method array getComponents() 获取<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/company/createFlowByFiles/#指定签署方填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method void setComponents(array $Components) 设置<p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/company/createFlowByFiles/#指定签署方填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
 * @method array getSignEndpoints() 获取<p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
 * @method void setSignEndpoints(array $SignEndpoints) 设置<p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
 * @method RegisterInfo getRegisterInfo() 获取<p>快速注册相关信息</p>
 * @method void setRegisterInfo(RegisterInfo $RegisterInfo) 设置<p>快速注册相关信息</p>
 * @method boolean getNotSaveContact() 获取<p>是否不保存联系人<br>默认 false 保存联系人  true 不保存联系人</p><p>设置这个参数为保存联系人的时候,他方企业签署人会被保存进发起人的联系人中。<br>联系人查看可登录<a href="https://test.qian.tencent.cn/console/">电子签控制台</a> 进行查看。<br>如下图位置：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/fb8a22cd615d24c21acfa0e37e2cd873.png" alt=""></p>
 * @method void setNotSaveContact(boolean $NotSaveContact) 设置<p>是否不保存联系人<br>默认 false 保存联系人  true 不保存联系人</p><p>设置这个参数为保存联系人的时候,他方企业签署人会被保存进发起人的联系人中。<br>联系人查看可登录<a href="https://test.qian.tencent.cn/console/">电子签控制台</a> 进行查看。<br>如下图位置：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/fb8a22cd615d24c21acfa0e37e2cd873.png" alt=""></p>
 * @method string getApproverEmail() 获取<p>客户指定的邮箱信息</p>
 * @method void setApproverEmail(string $ApproverEmail) 设置<p>客户指定的邮箱信息</p>
 */
class ApproverInfo extends AbstractModel
{
    /**
     * @var integer <p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人<br><strong>3</strong>：企业静默签署<br>注：<code>类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。</code><br><strong>7</strong>: 个人自动签署，适用于个人自动签场景。<br>注: <code>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
     */
    public $ApproverType;

    /**
     * @var string <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
     */
    public $ApproverName;

    /**
     * @var string <p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此合同签署方。</p>
     */
    public $ApproverMobile;

    /**
     * @var string <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。</p>
     */
    public $OrganizationName;

    /**
     * @var array <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】合同中的该名签署方的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
     */
    public $SignComponents;

    /**
     * @var string <p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul><p>注: </p><ol><li><b>其他证件类型为白名单功能</b>，使用前请联系对接的客户经理沟通。</li><li>港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</li></ol>
     */
    public $ApproverIdCardType;

    /**
     * @var string <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $ApproverIdCardNumber;

    /**
     * @var string <p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮箱</li><li>  **all**  :  短信+邮箱</li><li>   **none**   : 不通知</li></ul><p>注意：<br><code>如果使用的是通过文件发起合同（CreateFlowByFiles），NotifyType必须 是 sms 才会发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 短信+邮件通知</li><li>none： 不做任何形式的通知</li></ul>
     */
    public $NotifyType;

    /**
     * @var integer <p>收据场景设置签署人角色类型, 可以设置如下<b>类型</b>:</p><ul><li> **1**  :收款人</li><li>   **2**   :开具人</li><li>   **3** :见证人</li></ul>注: <code>收据场景为白名单功能，使用前请联系对接的客户经理沟通。</code>
     */
    public $ApproverRole;

    /**
     * @var string <p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
     */
    public $ApproverRoleName;

    /**
     * @var array <p><font color="red">【已不再使用】</font>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: 该字段已不再使用, 请用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</p>
     */
    public $VerifyChannel;

    /**
     * @var integer <p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     */
    public $PreReadTime;

    /**
     * @var string <p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
     */
    public $UserId;

    /**
     * @var string <p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
     */
    public $ApproverSource;

    /**
     * @var string <p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
     */
    public $CustomApproverTag;

    /**
     * @var ApproverOption <p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
     */
    public $ApproverOption;

    /**
     * @var array <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
     */
    public $ApproverVerifyTypes;

    /**
     * @var array <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注：</p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/company/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
     */
    public $ApproverSignTypes;

    /**
     * @var boolean <p>此签署人（员工或者个人）签署前，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
     */
    public $ApproverNeedSignReview;

    /**
     * @var array <p>【在用文件发起合同场景下才有效】在调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a>创建合同时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
     */
    public $AddSignComponentsLimits;

    /**
     * @var string <p>签署须知：支持传入富文本，最长字数：500个中文字符</p>
     */
    public $SignInstructionContent;

    /**
     * @var integer <p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
     */
    public $Deadline;

    /**
     * @var array <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/company/createFlowByFiles/#指定签署方填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     */
    public $Components;

    /**
     * @var array <p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
     */
    public $SignEndpoints;

    /**
     * @var RegisterInfo <p>快速注册相关信息</p>
     */
    public $RegisterInfo;

    /**
     * @var boolean <p>是否不保存联系人<br>默认 false 保存联系人  true 不保存联系人</p><p>设置这个参数为保存联系人的时候,他方企业签署人会被保存进发起人的联系人中。<br>联系人查看可登录<a href="https://test.qian.tencent.cn/console/">电子签控制台</a> 进行查看。<br>如下图位置：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/fb8a22cd615d24c21acfa0e37e2cd873.png" alt=""></p>
     */
    public $NotSaveContact;

    /**
     * @var string <p>客户指定的邮箱信息</p>
     */
    public $ApproverEmail;

    /**
     * @param integer $ApproverType <p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:<br><strong>0</strong>：企业<br><strong>1</strong>：个人<br><strong>3</strong>：企业静默签署<br>注：<code>类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。</code><br><strong>7</strong>: 个人自动签署，适用于个人自动签场景。<br>注: <code>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</code></p>
     * @param string $ApproverName <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
     * @param string $ApproverMobile <p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。<br>请确认手机号所有方为此合同签署方。</p>
     * @param string $OrganizationName <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。<br>如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。</p>
     * @param array $SignComponents <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】合同中的该名签署方的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><img src="https://qcloudimg.tencent-cloud.cn/raw/91757a7f9188ccf3057a4a8979cf3f93.png" alt="image"></p>
     * @param string $ApproverIdCardType <p>签署方经办人的证件类型，支持以下类型，样式可以参考<a href="https://qian.tencent.com/developers/partner/id_card_support/" target="_blank">常见个人证件类型介绍</a></p><ul><li>ID_CARD 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li><li>OTHER_CARD_TYPE 其他证件</li></ul><p>注: </p><ol><li><b>其他证件类型为白名单功能</b>，使用前请联系对接的客户经理沟通。</li><li>港澳居民来往内地通行证 和  港澳台居民居住证 类型的签署人<b>至少要过一次大陆的海关</b>才能使用。</li></ol>
     * @param string $ApproverIdCardNumber <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $NotifyType <p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮箱</li><li>  **all**  :  短信+邮箱</li><li>   **none**   : 不通知</li></ul><p>注意：<br><code>如果使用的是通过文件发起合同（CreateFlowByFiles），NotifyType必须 是 sms 才会发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 短信+邮件通知</li><li>none： 不做任何形式的通知</li></ul>
     * @param integer $ApproverRole <p>收据场景设置签署人角色类型, 可以设置如下<b>类型</b>:</p><ul><li> **1**  :收款人</li><li>   **2**   :开具人</li><li>   **3** :见证人</li></ul>注: <code>收据场景为白名单功能，使用前请联系对接的客户经理沟通。</code>
     * @param string $ApproverRoleName <p>可以自定义签署人角色名：收款人、开具人、见证人等，长度不能超过20，只能由中文、字母、数字和下划线组成。</p><p>注: <code>如果是用模板发起, 优先使用此处上传的, 如果不传则用模板的配置的</code></p>
     * @param array $VerifyChannel <p><font color="red">【已不再使用】</font>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: 该字段已不再使用, 请用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</p>
     * @param integer $PreReadTime <p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     * @param string $UserId <p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
     * @param string $ApproverSource <p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
     * @param string $CustomApproverTag <p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
     * @param ApproverOption $ApproverOption <p>可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。<br>详细操作可以参考开发者中心的ApproverOption结构体。</p>
     * @param array $ApproverVerifyTypes <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
     * @param array $ApproverSignTypes <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>默认为：<br>1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注：</p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/company/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
     * @param boolean $ApproverNeedSignReview <p>此签署人（员工或者个人）签署前，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
     * @param array $AddSignComponentsLimits <p>【在用文件发起合同场景下才有效】在调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles">用PDF文件创建签署流程</a>创建合同时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID或者印章类型）或签名方式。</p><p>注：<code>限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。</code></p>
     * @param string $SignInstructionContent <p>签署须知：支持传入富文本，最长字数：500个中文字符</p>
     * @param integer $Deadline <p>签署人的签署截止时间，格式为Unix标准时间戳（秒）</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
     * @param array $Components <p>【在用文件发起合同场景下才有效，模板发起场景下需要在模板中配置】签署人在合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li></ul><p>具体使用说明可参考<a href="https://qian.tencent.cn/developers/company/createFlowByFiles/#指定签署方填写控件">为签署方指定填写控件</a></p><p>注：<code>此参数仅在通过文件发起合同或者合同组时生效</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/e004195ee4cb98a7f9bc12eb4a0a0b77.png" alt="image"></p>
     * @param array $SignEndpoints <p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
     * @param RegisterInfo $RegisterInfo <p>快速注册相关信息</p>
     * @param boolean $NotSaveContact <p>是否不保存联系人<br>默认 false 保存联系人  true 不保存联系人</p><p>设置这个参数为保存联系人的时候,他方企业签署人会被保存进发起人的联系人中。<br>联系人查看可登录<a href="https://test.qian.tencent.cn/console/">电子签控制台</a> 进行查看。<br>如下图位置：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/fb8a22cd615d24c21acfa0e37e2cd873.png" alt=""></p>
     * @param string $ApproverEmail <p>客户指定的邮箱信息</p>
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
        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("ApproverIdCardType",$param) and $param["ApproverIdCardType"] !== null) {
            $this->ApproverIdCardType = $param["ApproverIdCardType"];
        }

        if (array_key_exists("ApproverIdCardNumber",$param) and $param["ApproverIdCardNumber"] !== null) {
            $this->ApproverIdCardNumber = $param["ApproverIdCardNumber"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("ApproverRole",$param) and $param["ApproverRole"] !== null) {
            $this->ApproverRole = $param["ApproverRole"];
        }

        if (array_key_exists("ApproverRoleName",$param) and $param["ApproverRoleName"] !== null) {
            $this->ApproverRoleName = $param["ApproverRoleName"];
        }

        if (array_key_exists("VerifyChannel",$param) and $param["VerifyChannel"] !== null) {
            $this->VerifyChannel = $param["VerifyChannel"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("ApproverSource",$param) and $param["ApproverSource"] !== null) {
            $this->ApproverSource = $param["ApproverSource"];
        }

        if (array_key_exists("CustomApproverTag",$param) and $param["CustomApproverTag"] !== null) {
            $this->CustomApproverTag = $param["CustomApproverTag"];
        }

        if (array_key_exists("ApproverOption",$param) and $param["ApproverOption"] !== null) {
            $this->ApproverOption = new ApproverOption();
            $this->ApproverOption->deserialize($param["ApproverOption"]);
        }

        if (array_key_exists("ApproverVerifyTypes",$param) and $param["ApproverVerifyTypes"] !== null) {
            $this->ApproverVerifyTypes = $param["ApproverVerifyTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }

        if (array_key_exists("ApproverNeedSignReview",$param) and $param["ApproverNeedSignReview"] !== null) {
            $this->ApproverNeedSignReview = $param["ApproverNeedSignReview"];
        }

        if (array_key_exists("AddSignComponentsLimits",$param) and $param["AddSignComponentsLimits"] !== null) {
            $this->AddSignComponentsLimits = [];
            foreach ($param["AddSignComponentsLimits"] as $key => $value){
                $obj = new ComponentLimit();
                $obj->deserialize($value);
                array_push($this->AddSignComponentsLimits, $obj);
            }
        }

        if (array_key_exists("SignInstructionContent",$param) and $param["SignInstructionContent"] !== null) {
            $this->SignInstructionContent = $param["SignInstructionContent"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("SignEndpoints",$param) and $param["SignEndpoints"] !== null) {
            $this->SignEndpoints = $param["SignEndpoints"];
        }

        if (array_key_exists("RegisterInfo",$param) and $param["RegisterInfo"] !== null) {
            $this->RegisterInfo = new RegisterInfo();
            $this->RegisterInfo->deserialize($param["RegisterInfo"]);
        }

        if (array_key_exists("NotSaveContact",$param) and $param["NotSaveContact"] !== null) {
            $this->NotSaveContact = $param["NotSaveContact"];
        }

        if (array_key_exists("ApproverEmail",$param) and $param["ApproverEmail"] !== null) {
            $this->ApproverEmail = $param["ApproverEmail"];
        }
    }
}
