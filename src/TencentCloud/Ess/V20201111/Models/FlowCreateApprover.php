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
 * 创建流程的签署方信息
 *
 * @method integer getApproverType() 获取<p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：</p><ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，自动签署可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">自动签署使用说明</a>文档。</li><li> <b>7</b> :个人C端自动签署，适用于个人自动签场景。注: <b>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul>
 * @method void setApproverType(integer $ApproverType) 设置<p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：</p><ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，自动签署可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">自动签署使用说明</a>文档。</li><li> <b>7</b> :个人C端自动签署，适用于个人自动签场景。注: <b>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul>
 * @method string getOrganizationName() 获取<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注: <code>当approverType=0(企业签署方) 或 approverType=3(企业静默签署)时，必须指定</code></p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注: <code>当approverType=0(企业签署方) 或 approverType=3(企业静默签署)时，必须指定</code></p>
 * @method string getApproverName() 获取<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
 * @method void setApproverName(string $ApproverName) 设置<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
 * @method string getApproverMobile() 获取<p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
 * @method void setApproverMobile(string $ApproverMobile) 设置<p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
 * @method string getApproverIdCardType() 获取<p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置<p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
 * @method string getApproverIdCardNumber() 获取<p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置<p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getRecipientId() 获取<p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
 * @method void setRecipientId(string $RecipientId) 设置<p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
 * @method array getVerifyChannel() 获取<p>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: &lt;font color=&quot;red&quot;&gt;不再使用, <code>用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</code></p>
 * @method void setVerifyChannel(array $VerifyChannel) 设置<p>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: &lt;font color=&quot;red&quot;&gt;不再使用, <code>用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</code></p>
 * @method string getNotifyType() 获取<p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮件</li><li>  **all**  :  邮件+短信</li><li>   **none**   : 不通知</li></ul><p>注: <code>既是发起方又是签署方时，不给此签署方发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 邮件通知+短信通知</li><li>none： 不做任何形式的通知</li></ul>
 * @method void setNotifyType(string $NotifyType) 设置<p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮件</li><li>  **all**  :  邮件+短信</li><li>   **none**   : 不通知</li></ul><p>注: <code>既是发起方又是签署方时，不给此签署方发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 邮件通知+短信通知</li><li>none： 不做任何形式的通知</li></ul>
 * @method boolean getIsFullText() 获取<p>合同强制需要阅读全文，无需传此参数</p>
 * @method void setIsFullText(boolean $IsFullText) 设置<p>合同强制需要阅读全文，无需传此参数</p>
 * @method integer getPreReadTime() 获取<p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method void setPreReadTime(integer $PreReadTime) 设置<p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method string getUserId() 获取<p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
 * @method void setUserId(string $UserId) 设置<p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
 * @method boolean getRequired() 获取<p><font color="red">字段不再使用</font>，当前只支持true，默认为true</p>
 * @method void setRequired(boolean $Required) 设置<p><font color="red">字段不再使用</font>，当前只支持true，默认为true</p>
 * @method string getApproverSource() 获取<p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
 * @method void setApproverSource(string $ApproverSource) 设置<p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
 * @method string getCustomApproverTag() 获取<p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置<p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
 * @method RegisterInfo getRegisterInfo() 获取<p>快速注册相关信息</p>
 * @method void setRegisterInfo(RegisterInfo $RegisterInfo) 设置<p>快速注册相关信息</p>
 * @method ApproverOption getApproverOption() 获取<p>签署人个性化能力值，如是否可以转发他人处理、是否可以拒签、是否为动态补充签署人等功能开关。</p>
 * @method void setApproverOption(ApproverOption $ApproverOption) 设置<p>签署人个性化能力值，如是否可以转发他人处理、是否可以拒签、是否为动态补充签署人等功能开关。</p>
 * @method string getJumpUrl() 获取<p>签署完前端跳转的url，暂未使用</p>
 * @method void setJumpUrl(string $JumpUrl) 设置<p>签署完前端跳转的url，暂未使用</p>
 * @method string getSignId() 获取<p>签署人的签署ID</p><ul><li>在CreateFlow、CreatePrepareFlow等发起流程时不需要传入此参数，电子签后台系统会自动生成。</li><li>在CreateFlowSignUrl、CreateBatchQuickSignUrl等生成签署链接时，可以通过查询详情接口获取签署人的SignId，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</li></ul>
 * @method void setSignId(string $SignId) 设置<p>签署人的签署ID</p><ul><li>在CreateFlow、CreatePrepareFlow等发起流程时不需要传入此参数，电子签后台系统会自动生成。</li><li>在CreateFlowSignUrl、CreateBatchQuickSignUrl等生成签署链接时，可以通过查询详情接口获取签署人的SignId，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</li></ul>
 * @method boolean getApproverNeedSignReview() 获取<p>此签署人(员工或者个人)签署时，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
 * @method void setApproverNeedSignReview(boolean $ApproverNeedSignReview) 设置<p>此签署人(员工或者个人)签署时，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
 * @method array getSignComponents() 获取<p>签署人签署控件， 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
 * @method void setSignComponents(array $SignComponents) 设置<p>签署人签署控件， 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
 * @method array getComponents() 获取<p>签署人填写控件 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
 * @method void setComponents(array $Components) 设置<p>签署人填写控件 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
 * @method array getComponentLimitType() 获取<p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
 * @method void setComponentLimitType(array $ComponentLimitType) 设置<p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
 * @method array getApproverVerifyTypes() 获取<p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p><p>.</p>
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置<p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p><p>.</p>
 * @method array getApproverSignTypes() 获取<p>您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>注：</p><ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li><li>您可以传递多种值，表示可用多种认证校验方式。</li><li>校验方式不允许只包含设备指纹识别和设备面容识别，至少需要再增加一种其他校验方式。</li><li>设备指纹识别和设备面容识别只支持小程序使用，其他端暂不支持。</li></ul><p>注:<br><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置<p>您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>注：</p><ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li><li>您可以传递多种值，表示可用多种认证校验方式。</li><li>校验方式不允许只包含设备指纹识别和设备面容识别，至少需要再增加一种其他校验方式。</li><li>设备指纹识别和设备面容识别只支持小程序使用，其他端暂不支持。</li></ul><p>注:<br><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
 * @method integer getSignTypeSelector() 获取<p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
 * @method void setSignTypeSelector(integer $SignTypeSelector) 设置<p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
 * @method integer getDeadline() 获取<p>签署人的签署截止时间，格式为Unix标准时间戳（秒）, 超过此时间未签署的合同变成已过期状态，不能在继续签署</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
 * @method void setDeadline(integer $Deadline) 设置<p>签署人的签署截止时间，格式为Unix标准时间戳（秒）, 超过此时间未签署的合同变成已过期状态，不能在继续签署</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
 * @method Intention getIntention() 获取<p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
 * @method void setIntention(Intention $Intention) 设置<p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
 * @method array getSignEndpoints() 获取<p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
 * @method void setSignEndpoints(array $SignEndpoints) 设置<p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
 * @method boolean getNotSaveContact() 获取<p>是否不保存联系人<br>默认 false 保存联系人  true 不保存联系人</p><p>设置这个参数为保存联系人的时候,他方企业签署人会被保存进发起人的联系人中。<br>联系人查看可登录<a href="https://test.qian.tencent.cn/console/">电子签控制台</a> 进行查看。<br>如下图位置：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/fb8a22cd615d24c21acfa0e37e2cd873.png" alt=""></p>
 * @method void setNotSaveContact(boolean $NotSaveContact) 设置<p>是否不保存联系人<br>默认 false 保存联系人  true 不保存联系人</p><p>设置这个参数为保存联系人的时候,他方企业签署人会被保存进发起人的联系人中。<br>联系人查看可登录<a href="https://test.qian.tencent.cn/console/">电子签控制台</a> 进行查看。<br>如下图位置：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/fb8a22cd615d24c21acfa0e37e2cd873.png" alt=""></p>
 * @method string getApproverEmail() 获取<p>客户指定的邮箱信息</p>
 * @method void setApproverEmail(string $ApproverEmail) 设置<p>客户指定的邮箱信息</p>
 */
class FlowCreateApprover extends AbstractModel
{
    /**
     * @var integer <p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：</p><ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，自动签署可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">自动签署使用说明</a>文档。</li><li> <b>7</b> :个人C端自动签署，适用于个人自动签场景。注: <b>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul>
     */
    public $ApproverType;

    /**
     * @var string <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注: <code>当approverType=0(企业签署方) 或 approverType=3(企业静默签署)时，必须指定</code></p>
     */
    public $OrganizationName;

    /**
     * @var string <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
     */
    public $ApproverName;

    /**
     * @var string <p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
     */
    public $ApproverMobile;

    /**
     * @var string <p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
     */
    public $ApproverIdCardType;

    /**
     * @var string <p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $ApproverIdCardNumber;

    /**
     * @var string <p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
     */
    public $RecipientId;

    /**
     * @var array <p>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: &lt;font color=&quot;red&quot;&gt;不再使用, <code>用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</code></p>
     */
    public $VerifyChannel;

    /**
     * @var string <p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮件</li><li>  **all**  :  邮件+短信</li><li>   **none**   : 不通知</li></ul><p>注: <code>既是发起方又是签署方时，不给此签署方发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 邮件通知+短信通知</li><li>none： 不做任何形式的通知</li></ul>
     */
    public $NotifyType;

    /**
     * @var boolean <p>合同强制需要阅读全文，无需传此参数</p>
     */
    public $IsFullText;

    /**
     * @var integer <p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     */
    public $PreReadTime;

    /**
     * @var string <p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
     */
    public $UserId;

    /**
     * @var boolean <p><font color="red">字段不再使用</font>，当前只支持true，默认为true</p>
     */
    public $Required;

    /**
     * @var string <p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
     */
    public $ApproverSource;

    /**
     * @var string <p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
     */
    public $CustomApproverTag;

    /**
     * @var RegisterInfo <p>快速注册相关信息</p>
     */
    public $RegisterInfo;

    /**
     * @var ApproverOption <p>签署人个性化能力值，如是否可以转发他人处理、是否可以拒签、是否为动态补充签署人等功能开关。</p>
     */
    public $ApproverOption;

    /**
     * @var string <p>签署完前端跳转的url，暂未使用</p>
     * @deprecated
     */
    public $JumpUrl;

    /**
     * @var string <p>签署人的签署ID</p><ul><li>在CreateFlow、CreatePrepareFlow等发起流程时不需要传入此参数，电子签后台系统会自动生成。</li><li>在CreateFlowSignUrl、CreateBatchQuickSignUrl等生成签署链接时，可以通过查询详情接口获取签署人的SignId，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</li></ul>
     */
    public $SignId;

    /**
     * @var boolean <p>此签署人(员工或者个人)签署时，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
     */
    public $ApproverNeedSignReview;

    /**
     * @var array <p>签署人签署控件， 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
     */
    public $SignComponents;

    /**
     * @var array <p>签署人填写控件 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
     */
    public $Components;

    /**
     * @var array <p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
     */
    public $ComponentLimitType;

    /**
     * @var array <p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p><p>.</p>
     */
    public $ApproverVerifyTypes;

    /**
     * @var array <p>您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>注：</p><ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li><li>您可以传递多种值，表示可用多种认证校验方式。</li><li>校验方式不允许只包含设备指纹识别和设备面容识别，至少需要再增加一种其他校验方式。</li><li>设备指纹识别和设备面容识别只支持小程序使用，其他端暂不支持。</li></ul><p>注:<br><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
     */
    public $ApproverSignTypes;

    /**
     * @var integer <p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
     */
    public $SignTypeSelector;

    /**
     * @var integer <p>签署人的签署截止时间，格式为Unix标准时间戳（秒）, 超过此时间未签署的合同变成已过期状态，不能在继续签署</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
     */
    public $Deadline;

    /**
     * @var Intention <p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
     */
    public $Intention;

    /**
     * @var array <p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
     */
    public $SignEndpoints;

    /**
     * @var boolean <p>是否不保存联系人<br>默认 false 保存联系人  true 不保存联系人</p><p>设置这个参数为保存联系人的时候,他方企业签署人会被保存进发起人的联系人中。<br>联系人查看可登录<a href="https://test.qian.tencent.cn/console/">电子签控制台</a> 进行查看。<br>如下图位置：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/fb8a22cd615d24c21acfa0e37e2cd873.png" alt=""></p>
     */
    public $NotSaveContact;

    /**
     * @var string <p>客户指定的邮箱信息</p>
     */
    public $ApproverEmail;

    /**
     * @param integer $ApproverType <p>在指定签署方时，可以选择企业B端或个人C端等不同的参与者类型，可选类型如下：</p><ul><li> <b>0</b> :企业B端。</li><li> <b>1</b> :个人C端。</li><li> <b>3</b> :企业B端静默（自动）签署，无需签署人参与，自动签署可以参考<a href="https://qian.tencent.com/developers/company/autosign_guide" target="_blank" rel="noopener noreferrer">自动签署使用说明</a>文档。</li><li> <b>7</b> :个人C端自动签署，适用于个人自动签场景。注: <b>个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。</b> </li></ul>
     * @param string $OrganizationName <p>组织机构名称。<br>请确认该名称与企业营业执照中注册的名称一致。<br>如果名称中包含英文括号()，请使用中文括号（）代替。</p><p>注: <code>当approverType=0(企业签署方) 或 approverType=3(企业静默签署)时，必须指定</code></p>
     * @param string $ApproverName <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p><p>在未指定签署人电子签UserId情况下，为必填参数</p>
     * @param string $ApproverMobile <p>签署方经办人手机号码， 支持中国大陆手机号11位数字(无需加+86前缀或其他字符)。 此手机号用于通知和用户的实名认证等环境，请确认手机号所有方为此合同签署方。</p><p>注：<code>在未指定签署人电子签UserId情况下，为必填参数</code></p>
     * @param string $ApproverIdCardType <p>证件类型，支持以下类型</p><ul><li><b>ID_CARD</b>: 居民身份证 (默认值)</li><li><b>HONGKONG_AND_MACAO</b> : 港澳居民来往内地通行证</li><li><b>HONGKONG_MACAO_AND_TAIWAN</b> : 港澳台居民居住证(格式同居民身份证)</li></ul>
     * @param string $ApproverIdCardNumber <p>证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $RecipientId <p>签署方经办人在模板中配置的参与方ID，与控件绑定，是控件的归属方，ID为32位字符串。</p><p><b>模板发起合同时，该参数为必填项，可以通过<a href="https://qian.tencent.com/developers/companyApis/templatesAndFiles/DescribeFlowTemplates">查询模板信息接口</a>获得。</b><br><b>文件发起合同时，该参数无需传值。</b></p><p>如果开发者后续用合同模板发起合同，建议保存此值，在用合同模板发起合同中需此值绑定对应的签署经办人 。</p>
     * @param array $VerifyChannel <p>签署意愿确认渠道，默认为WEIXINAPP:人脸识别</p><p>注: &lt;font color=&quot;red&quot;&gt;不再使用, <code>用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置</code></p>
     * @param string $NotifyType <p>通知签署方经办人的方式,  有以下途径:</p><ul><li>  **sms**  :  (默认)短信</li><li>  **email**  :  邮件</li><li>  **all**  :  邮件+短信</li><li>   **none**   : 不通知</li></ul><p>注: <code>既是发起方又是签署方时，不给此签署方发送短信</code></p><p>枚举值：</p><ul><li>sms： 短信通知</li><li>email： 邮件通知</li><li>all： 邮件通知+短信通知</li><li>none： 不做任何形式的通知</li></ul>
     * @param boolean $IsFullText <p>合同强制需要阅读全文，无需传此参数</p>
     * @param integer $PreReadTime <p>签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。</p><p>若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：</p><ul><li>合同页数少于等于2页，阅读时间为3秒；</li><li>合同页数为3到5页，阅读时间为5秒；</li><li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     * @param string $UserId <p>签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得</p><p>注：<br>如果传进来的<font color="red">UserId已经实名， 则忽略ApproverName，ApproverIdCardType，ApproverIdCardNumber，ApproverMobile这四个入参</font>（会用此UserId实名的身份证和登录的手机号覆盖）</p>
     * @param boolean $Required <p><font color="red">字段不再使用</font>，当前只支持true，默认为true</p>
     * @param string $ApproverSource <p>在企微场景下使用，需设置参数为<strong>WEWORKAPP</strong>，以表明合同来源于企微。</p>
     * @param string $CustomApproverTag <p>在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。<br>所有参与或签的人员均需具备该标识。<br>注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。<br>如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。</p>
     * @param RegisterInfo $RegisterInfo <p>快速注册相关信息</p>
     * @param ApproverOption $ApproverOption <p>签署人个性化能力值，如是否可以转发他人处理、是否可以拒签、是否为动态补充签署人等功能开关。</p>
     * @param string $JumpUrl <p>签署完前端跳转的url，暂未使用</p>
     * @param string $SignId <p>签署人的签署ID</p><ul><li>在CreateFlow、CreatePrepareFlow等发起流程时不需要传入此参数，电子签后台系统会自动生成。</li><li>在CreateFlowSignUrl、CreateBatchQuickSignUrl等生成签署链接时，可以通过查询详情接口获取签署人的SignId，然后可以将此值传入，为该签署人创建签署链接。这样可以避免重复传输姓名、手机号、证件号等其他信息。</li></ul>
     * @param boolean $ApproverNeedSignReview <p>此签署人(员工或者个人)签署时，是否需要发起方企业审批，取值如下：</p><ul><li>**false**：（默认）不需要审批，直接签署。</li><li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li><li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul><p>注：<code>此功能可用于与发起方企业内部的审批流程进行关联，支持手动、静默签署合同</code></p><p><img src="https://qcloudimg.tencent-cloud.cn/raw/b14d5188ed0229d1401e74a9a49cab6d.png" alt="image"></p>
     * @param array $SignComponents <p>签署人签署控件， 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体</p><ul><li> 个人签名/印章</li><li> 企业印章</li><li> 骑缝章等签署控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
     * @param array $Components <p>签署人填写控件 此参数仅针对文件发起（CreateFlowByFiles）生效</p><p>合同中的填写控件列表，列表中可支持下列多种填写控件，控件的详细定义参考开发者中心的Component结构体</p><ul><li>单行文本控件</li><li>多行文本控件</li><li>勾选框控件</li><li>数字控件</li><li>图片控件</li><li>动态表格等填写控件</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
     * @param array $ComponentLimitType <p>当签署方控件类型为 <b>SIGN_SIGNATURE</b> 时，可以指定签署方签名方式。如果不指定，签署人可以使用所有的签名类型，可指定的签名类型包括：</p><ul><li> <b>HANDWRITE</b> :需要实时手写的手写签名。</li><li> <b>HANDWRITTEN_ESIGN</b> :长效手写签名， 是使用保存到个人中心的印章列表的手写签名。(并且包含HANDWRITE)</li><li> <b>OCR_ESIGN</b> :AI智能识别手写签名。</li><li> <b>ESIGN</b> :个人印章类型。</li><li> <b>IMG_ESIGN</b>  : 图片印章。该类型支持用户在签署将上传的PNG格式的图片作为签名。</li><li> <b>SYSTEM_ESIGN</b> :系统签名。该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署。</li></ul><p>各种签名的样式可以参考下图：<br><img src="https://qcloudimg.tencent-cloud.cn/raw/ee0498856c060c065628a0c5ba780d6b.jpg" alt="image"></p>
     * @param array $ApproverVerifyTypes <p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul><p><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p><p>.</p>
     * @param array $ApproverSignTypes <p>您可以指定签署方签署合同的认证校验方式，可传递以下值：</p><ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li><li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li><li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。（如果是港澳台客户，建议不要选择这个）</li><li>**5**：设备指纹识别，需要对比手机机主预留的指纹信息，校验一致才能成功进行合同签署。（iOS系统暂不支持该校验方式）</li><li>**6**：设备面容识别，需要对比手机机主预留的人脸信息，校验一致才能成功进行合同签署。（Android系统暂不支持该校验方式）</li></ul><p>注：</p><ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li><li>您可以传递多种值，表示可用多种认证校验方式。</li><li>校验方式不允许只包含设备指纹识别和设备面容识别，至少需要再增加一种其他校验方式。</li><li>设备指纹识别和设备面容识别只支持小程序使用，其他端暂不支持。</li></ul><p>注:<br><code>此参数仅针对文件发起设置生效,模板发起合同签署流程, 请以模板配置为主</code></p>
     * @param integer $SignTypeSelector <p>生成H5签署链接时，您可以指定签署方签署合同的认证校验方式的选择模式，可传递一下值：</p><ul><li>**0**：签署方自行选择，签署方可以从预先指定的认证方式中自由选择；</li><li>**1**：自动按顺序首位推荐，签署方无需选择，系统会优先推荐使用第一种认证方式。</li></ul>注：<code>不指定该值时，默认为签署方自行选择。</code>
     * @param integer $Deadline <p>签署人的签署截止时间，格式为Unix标准时间戳（秒）, 超过此时间未签署的合同变成已过期状态，不能在继续签署</p><p>注: <code>若不设置此参数，则默认使用合同的截止时间，此参数暂不支持合同组子合同</code></p>
     * @param Intention $Intention <p><b>只有在生成H5签署链接的情形下</b>（ 如调用<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowSignUrl" target="_blank">获取H5签署链接</a>、<a href="https://qian.tencent.com/developers/companyApis/startFlows/CreateBatchQuickSignUrl" target="_blank">获取H5批量签署链接</a>等接口），该配置才会生效。</p><p>您可以指定H5签署视频核身的意图配置，选择问答模式或点头模式的语音文本。</p><p>注意：</p><ol><li>视频认证为<b>白名单功能，使用前请联系对接的客户经理沟通</b>。</li><li>使用视频认证时，<b>生成H5签署链接必须将签署认证方式指定为人脸</b>（即ApproverSignTypes设置成人脸签署）。</li><li>签署完成后，可以通过<a href="https://qian.tencent.com/developers/companyApis/queryFlows/DescribeSignFaceVideo" target="_blank">查询签署认证人脸视频</a>获取到当时的视频。</li></ol>
     * @param array $SignEndpoints <p>进入签署流程的限制，目前支持以下选项：</p><ul><li> <b>空值（默认）</b> :无限制，可在任何场景进入签署流程。</li><li> <b>link</b> :选择此选项后，将无法通过控制台或电子签小程序列表进入填写或签署操作，仅可预览合同。填写或签署流程只能通过短信或发起方提供的专用链接进行。</li></ul>
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

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("ApproverIdCardType",$param) and $param["ApproverIdCardType"] !== null) {
            $this->ApproverIdCardType = $param["ApproverIdCardType"];
        }

        if (array_key_exists("ApproverIdCardNumber",$param) and $param["ApproverIdCardNumber"] !== null) {
            $this->ApproverIdCardNumber = $param["ApproverIdCardNumber"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("VerifyChannel",$param) and $param["VerifyChannel"] !== null) {
            $this->VerifyChannel = $param["VerifyChannel"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("IsFullText",$param) and $param["IsFullText"] !== null) {
            $this->IsFullText = $param["IsFullText"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("ApproverSource",$param) and $param["ApproverSource"] !== null) {
            $this->ApproverSource = $param["ApproverSource"];
        }

        if (array_key_exists("CustomApproverTag",$param) and $param["CustomApproverTag"] !== null) {
            $this->CustomApproverTag = $param["CustomApproverTag"];
        }

        if (array_key_exists("RegisterInfo",$param) and $param["RegisterInfo"] !== null) {
            $this->RegisterInfo = new RegisterInfo();
            $this->RegisterInfo->deserialize($param["RegisterInfo"]);
        }

        if (array_key_exists("ApproverOption",$param) and $param["ApproverOption"] !== null) {
            $this->ApproverOption = new ApproverOption();
            $this->ApproverOption->deserialize($param["ApproverOption"]);
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("SignId",$param) and $param["SignId"] !== null) {
            $this->SignId = $param["SignId"];
        }

        if (array_key_exists("ApproverNeedSignReview",$param) and $param["ApproverNeedSignReview"] !== null) {
            $this->ApproverNeedSignReview = $param["ApproverNeedSignReview"];
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("Components",$param) and $param["Components"] !== null) {
            $this->Components = [];
            foreach ($param["Components"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->Components, $obj);
            }
        }

        if (array_key_exists("ComponentLimitType",$param) and $param["ComponentLimitType"] !== null) {
            $this->ComponentLimitType = $param["ComponentLimitType"];
        }

        if (array_key_exists("ApproverVerifyTypes",$param) and $param["ApproverVerifyTypes"] !== null) {
            $this->ApproverVerifyTypes = $param["ApproverVerifyTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }

        if (array_key_exists("SignTypeSelector",$param) and $param["SignTypeSelector"] !== null) {
            $this->SignTypeSelector = $param["SignTypeSelector"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("Intention",$param) and $param["Intention"] !== null) {
            $this->Intention = new Intention();
            $this->Intention->deserialize($param["Intention"]);
        }

        if (array_key_exists("SignEndpoints",$param) and $param["SignEndpoints"] !== null) {
            $this->SignEndpoints = $param["SignEndpoints"];
        }

        if (array_key_exists("NotSaveContact",$param) and $param["NotSaveContact"] !== null) {
            $this->NotSaveContact = $param["NotSaveContact"];
        }

        if (array_key_exists("ApproverEmail",$param) and $param["ApproverEmail"] !== null) {
            $this->ApproverEmail = $param["ApproverEmail"];
        }
    }
}
