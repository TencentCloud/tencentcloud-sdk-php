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
 * 通用签署人信息
 *
 * @method boolean getNotChannelOrganization() 获取<p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
 * @method void setNotChannelOrganization(boolean $NotChannelOrganization) 设置<p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
 * @method integer getApproverType() 获取<p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><p> <strong>0</strong> :企业/企业员工（企业签署方或模板发起时的企业静默签）<br> <strong>1</strong> :个人/自然人<br><strong>3</strong> :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</p><p>注：类型为3（企业/企业员工自动签）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。<br>使用自动签时，请确保企业已经开通自动签功能，开通方式：控制台 -&gt; 企业设置 -&gt; 扩展服务 -&gt; 企业自动签。<br>使用文件发起自动签时使用前请联系对接的客户经理沟通。</p>
 * @method void setApproverType(integer $ApproverType) 设置<p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><p> <strong>0</strong> :企业/企业员工（企业签署方或模板发起时的企业静默签）<br> <strong>1</strong> :个人/自然人<br><strong>3</strong> :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</p><p>注：类型为3（企业/企业员工自动签）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。<br>使用自动签时，请确保企业已经开通自动签功能，开通方式：控制台 -&gt; 企业设置 -&gt; 扩展服务 -&gt; 企业自动签。<br>使用文件发起自动签时使用前请联系对接的客户经理沟通。</p>
 * @method string getOrganizationId() 获取<p>电子签平台给企业生成的企业id</p>
 * @method void setOrganizationId(string $OrganizationId) 设置<p>电子签平台给企业生成的企业id</p>
 * @method string getOrganizationOpenId() 获取<p>企业OpenId，第三方应用集成非静默签子客企业签署人发起合同必传</p>
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置<p>企业OpenId，第三方应用集成非静默签子客企业签署人发起合同必传</p>
 * @method string getOrganizationName() 获取<p>企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传</p>
 * @method void setOrganizationName(string $OrganizationName) 设置<p>企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传</p>
 * @method string getUserId() 获取<p>电子签平台给企业员工或者自热人生成的用户id</p>
 * @method void setUserId(string $UserId) 设置<p>电子签平台给企业员工或者自热人生成的用户id</p>
 * @method string getOpenId() 获取<p>第三方平台子客企业员工的唯一标识</p>
 * @method void setOpenId(string $OpenId) 设置<p>第三方平台子客企业员工的唯一标识</p>
 * @method string getApproverName() 获取<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
 * @method void setApproverName(string $ApproverName) 设置<p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
 * @method string getApproverMobile() 获取<p>签署人手机号，saas企业签署人，个人签署人必传</p>
 * @method void setApproverMobile(string $ApproverMobile) 设置<p>签署人手机号，saas企业签署人，个人签署人必传</p>
 * @method string getApproverIdCardType() 获取<p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置<p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
 * @method string getApproverIdCardNumber() 获取<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置<p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getRecipientId() 获取<p>签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId<br>注意：模板发起时该字段必填</p>
 * @method void setRecipientId(string $RecipientId) 设置<p>签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId<br>注意：模板发起时该字段必填</p>
 * @method integer getPreReadTime() 获取<p>签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s</p>
 * @method void setPreReadTime(integer $PreReadTime) 设置<p>签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s</p>
 * @method boolean getIsFullText() 获取<p>签署前置条件：阅读全文限制</p>
 * @method void setIsFullText(boolean $IsFullText) 设置<p>签署前置条件：阅读全文限制</p>
 * @method string getNotifyType() 获取<p>通知签署方经办人的方式, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p>
 * @method void setNotifyType(string $NotifyType) 设置<p>通知签署方经办人的方式, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p>
 * @method CommonApproverOption getApproverOption() 获取<p>签署人配置，用于控制签署人相关属性</p>
 * @method void setApproverOption(CommonApproverOption $ApproverOption) 设置<p>签署人配置，用于控制签署人相关属性</p>
 * @method array getSignComponents() 获取<p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID: <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p>
 * @method void setSignComponents(array $SignComponents) 设置<p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID: <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p>
 * @method array getApproverVerifyTypes() 获取<p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置<p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
 * @method array getApproverSignTypes() 获取<p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素</li><li> **5** :设备指纹识别</li><li> **6** :设备面容识别</li></ul><p>默认为1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置<p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素</li><li> **5** :设备指纹识别</li><li> **6** :设备面容识别</li></ul><p>默认为1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
 * @method array getComponentLimitType() 获取<p>签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p><p>枚举值：</p><ul><li>HANDWRITE： 手写签名</li><li>ESIGN： 个人印章类型</li><li>OCR_ESIGN： AI智能识别手写签名</li><li>SYSTEM_ESIGN： 系统签名</li></ul>
 * @method void setComponentLimitType(array $ComponentLimitType) 设置<p>签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p><p>枚举值：</p><ul><li>HANDWRITE： 手写签名</li><li>ESIGN： 个人印章类型</li><li>OCR_ESIGN： AI智能识别手写签名</li><li>SYSTEM_ESIGN： 系统签名</li></ul>
 */
class CommonFlowApprover extends AbstractModel
{
    /**
     * @var boolean <p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
     */
    public $NotChannelOrganization;

    /**
     * @var integer <p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><p> <strong>0</strong> :企业/企业员工（企业签署方或模板发起时的企业静默签）<br> <strong>1</strong> :个人/自然人<br><strong>3</strong> :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</p><p>注：类型为3（企业/企业员工自动签）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。<br>使用自动签时，请确保企业已经开通自动签功能，开通方式：控制台 -&gt; 企业设置 -&gt; 扩展服务 -&gt; 企业自动签。<br>使用文件发起自动签时使用前请联系对接的客户经理沟通。</p>
     */
    public $ApproverType;

    /**
     * @var string <p>电子签平台给企业生成的企业id</p>
     */
    public $OrganizationId;

    /**
     * @var string <p>企业OpenId，第三方应用集成非静默签子客企业签署人发起合同必传</p>
     */
    public $OrganizationOpenId;

    /**
     * @var string <p>企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传</p>
     */
    public $OrganizationName;

    /**
     * @var string <p>电子签平台给企业员工或者自热人生成的用户id</p>
     */
    public $UserId;

    /**
     * @var string <p>第三方平台子客企业员工的唯一标识</p>
     */
    public $OpenId;

    /**
     * @var string <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
     */
    public $ApproverName;

    /**
     * @var string <p>签署人手机号，saas企业签署人，个人签署人必传</p>
     */
    public $ApproverMobile;

    /**
     * @var string <p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     */
    public $ApproverIdCardType;

    /**
     * @var string <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $ApproverIdCardNumber;

    /**
     * @var string <p>签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId<br>注意：模板发起时该字段必填</p>
     */
    public $RecipientId;

    /**
     * @var integer <p>签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s</p>
     */
    public $PreReadTime;

    /**
     * @var boolean <p>签署前置条件：阅读全文限制</p>
     */
    public $IsFullText;

    /**
     * @var string <p>通知签署方经办人的方式, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p>
     */
    public $NotifyType;

    /**
     * @var CommonApproverOption <p>签署人配置，用于控制签署人相关属性</p>
     */
    public $ApproverOption;

    /**
     * @var array <p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID: <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p>
     */
    public $SignComponents;

    /**
     * @var array <p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
     */
    public $ApproverVerifyTypes;

    /**
     * @var array <p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素</li><li> **5** :设备指纹识别</li><li> **6** :设备面容识别</li></ul><p>默认为1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
     */
    public $ApproverSignTypes;

    /**
     * @var array <p>签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p><p>枚举值：</p><ul><li>HANDWRITE： 手写签名</li><li>ESIGN： 个人印章类型</li><li>OCR_ESIGN： AI智能识别手写签名</li><li>SYSTEM_ESIGN： 系统签名</li></ul>
     */
    public $ComponentLimitType;

    /**
     * @param boolean $NotChannelOrganization <p>指定签署人非第三方平台子客企业下员工还是SaaS平台企业，在ApproverType为ORGANIZATION时指定。</p><ul><li>false: 默认值，第三方平台子客企业下员工</li><li>true: SaaS平台企业下的员工</li></ul>
     * @param integer $ApproverType <p>在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:</p><p> <strong>0</strong> :企业/企业员工（企业签署方或模板发起时的企业静默签）<br> <strong>1</strong> :个人/自然人<br><strong>3</strong> :企业/企业员工自动签（他方企业自动签署或文件发起时的本方企业自动签）</p><p>注：类型为3（企业/企业员工自动签）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。<br>使用自动签时，请确保企业已经开通自动签功能，开通方式：控制台 -&gt; 企业设置 -&gt; 扩展服务 -&gt; 企业自动签。<br>使用文件发起自动签时使用前请联系对接的客户经理沟通。</p>
     * @param string $OrganizationId <p>电子签平台给企业生成的企业id</p>
     * @param string $OrganizationOpenId <p>企业OpenId，第三方应用集成非静默签子客企业签署人发起合同必传</p>
     * @param string $OrganizationName <p>企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传</p>
     * @param string $UserId <p>电子签平台给企业员工或者自热人生成的用户id</p>
     * @param string $OpenId <p>第三方平台子客企业员工的唯一标识</p>
     * @param string $ApproverName <p>签署方经办人的姓名。<br>经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。</p>
     * @param string $ApproverMobile <p>签署人手机号，saas企业签署人，个人签署人必传</p>
     * @param string $ApproverIdCardType <p>签署方经办人的证件类型，支持以下类型</p><ul><li>ID_CARD : 中国大陆居民身份证  (默认值)</li><li>HONGKONG_AND_MACAO : 中国港澳居民来往内地通行证</li><li>HONGKONG_MACAO_AND_TAIWAN : 中国港澳台居民居住证(格式同中国大陆居民身份证)</li></ul>
     * @param string $ApproverIdCardNumber <p>签署方经办人的证件号码，应符合以下规则</p><ul><li>中国大陆居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li><li>中国港澳居民来往内地通行证号码共11位。第1位为字母，“H”字头签发给中国香港居民，“M”字头签发给中国澳门居民；第2位至第11位为数字。</li><li>中国港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $RecipientId <p>签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId<br>注意：模板发起时该字段必填</p>
     * @param integer $PreReadTime <p>签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s</p>
     * @param boolean $IsFullText <p>签署前置条件：阅读全文限制</p>
     * @param string $NotifyType <p>通知签署方经办人的方式, 有以下途径:</p><ul><li> **SMS** :(默认)短信</li><li> **NONE** : 不通知</li></ul><p>注: <code>签署方为第三方子客企业时会被置为NONE,   不会发短信通知</code></p>
     * @param CommonApproverOption $ApproverOption <p>签署人配置，用于控制签署人相关属性</p>
     * @param array $SignComponents <p>使用PDF文件直接发起合同时，签署人指定的签署控件；<br>使用模板发起合同时，指定本企业印章签署控件的印章ID: <br>通过ComponentId或ComponenetName指定签署控件，ComponentValue为印章ID。</p>
     * @param array $ApproverVerifyTypes <p>指定个人签署方查看合同的校验方式,可以传值如下:</p><ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li><li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）</li></ul>注: <ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li><li>此字段可传多个校验方式</li></ul>
     * @param array $ApproverSignTypes <p>签署人签署合同时的认证方式</p><ul><li> **1** :人脸认证</li><li> **2** :签署密码</li><li> **3** :运营商三要素</li><li> **5** :设备指纹识别</li><li> **6** :设备面容识别</li></ul><p>默认为1(人脸认证 ),2(签署密码),3(运营商三要素),5(设备指纹识别),6(设备面容识别)</p><p>注: </p><ol><li>用<font color="red">模板创建合同场景</font>, 签署人的认证方式需要在配置模板的时候指定, <font color="red">在创建合同重新指定无效</font></li><li>运营商三要素认证方式对手机号运营商及前缀有限制,可以参考<a href="https://qian.tencent.com/developers/partner/mobile_support">运营商支持列表类</a>得到具体的支持说明</li><li>校验方式不允许只包含<font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>，至少需要再增加一种其他校验方式。</li><li><font color="red">设备指纹识别</font>和<font color="red">设备面容识别</font>只支持小程序使用，其他端暂不支持。</li></ol>
     * @param array $ComponentLimitType <p>签署方经办人控件类型是个人印章签署控件（SIGN_SIGNATURE） 时，可选的签名方式。</p><p>枚举值：</p><ul><li>HANDWRITE： 手写签名</li><li>ESIGN： 个人印章类型</li><li>OCR_ESIGN： AI智能识别手写签名</li><li>SYSTEM_ESIGN： 系统签名</li></ul>
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
        if (array_key_exists("NotChannelOrganization",$param) and $param["NotChannelOrganization"] !== null) {
            $this->NotChannelOrganization = $param["NotChannelOrganization"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("OrganizationId",$param) and $param["OrganizationId"] !== null) {
            $this->OrganizationId = $param["OrganizationId"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
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

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("IsFullText",$param) and $param["IsFullText"] !== null) {
            $this->IsFullText = $param["IsFullText"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }

        if (array_key_exists("ApproverOption",$param) and $param["ApproverOption"] !== null) {
            $this->ApproverOption = new CommonApproverOption();
            $this->ApproverOption->deserialize($param["ApproverOption"]);
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("ApproverVerifyTypes",$param) and $param["ApproverVerifyTypes"] !== null) {
            $this->ApproverVerifyTypes = $param["ApproverVerifyTypes"];
        }

        if (array_key_exists("ApproverSignTypes",$param) and $param["ApproverSignTypes"] !== null) {
            $this->ApproverSignTypes = $param["ApproverSignTypes"];
        }

        if (array_key_exists("ComponentLimitType",$param) and $param["ComponentLimitType"] !== null) {
            $this->ComponentLimitType = $param["ComponentLimitType"];
        }
    }
}
