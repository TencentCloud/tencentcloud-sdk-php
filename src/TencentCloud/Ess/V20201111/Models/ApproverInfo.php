<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 参与者信息。
 *
 * @method integer getApproverType() 获取在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:
**0**：企业
**1**：个人
**3**：企业静默签署
注：`类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。`
**7**: 个人自动签署，适用于个人自动签场景。
注: `个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method void setApproverType(integer $ApproverType) 设置在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:
**0**：企业
**1**：个人
**3**：企业静默签署
注：`类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。`
**7**: 个人自动签署，适用于个人自动签场景。
注: `个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method string getApproverName() 获取签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
 * @method void setApproverName(string $ApproverName) 设置签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
 * @method string getApproverMobile() 获取签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此合同签署方。
 * @method void setApproverMobile(string $ApproverMobile) 设置签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此合同签署方。
 * @method string getOrganizationName() 获取组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。

 * @method void setOrganizationName(string $OrganizationName) 设置组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。

 * @method array getSignComponents() 获取合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体
<ul><li> 个人签名/印章</li>
<li> 企业印章</li>
<li> 骑缝章等签署控件</li></ul>
 * @method void setSignComponents(array $SignComponents) 设置合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体
<ul><li> 个人签名/印章</li>
<li> 企业印章</li>
<li> 骑缝章等签署控件</li></ul>
 * @method string getApproverIdCardType() 获取签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li>
<li>OTHER_CARD_TYPE 其他证件</li></ul>

注: `其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li>
<li>OTHER_CARD_TYPE 其他证件</li></ul>

注: `其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method string getApproverIdCardNumber() 获取签署方经办人的证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码应为9位字符串，第1位为“C”，第2位为英文字母（但“I”、“O”除外），后7位为阿拉伯数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置签署方经办人的证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码应为9位字符串，第1位为“C”，第2位为英文字母（但“I”、“O”除外），后7位为阿拉伯数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
 * @method string getNotifyType() 获取通知签署方经办人的方式,  有以下途径:
<ul><li>  **sms**  :  (默认)短信</li>
<li>   **none**   : 不通知</li></ul>
 * @method void setNotifyType(string $NotifyType) 设置通知签署方经办人的方式,  有以下途径:
<ul><li>  **sms**  :  (默认)短信</li>
<li>   **none**   : 不通知</li></ul>
 * @method integer getApproverRole() 获取收据场景设置签署人角色类型, 可以设置如下****类型****:
<ul><li> **1**  :收款人</li>
<li>   **2**   :开具人</li>
<li>   **3** :见证人</li></ul>
注: `收据场景为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method void setApproverRole(integer $ApproverRole) 设置收据场景设置签署人角色类型, 可以设置如下****类型****:
<ul><li> **1**  :收款人</li>
<li>   **2**   :开具人</li>
<li>   **3** :见证人</li></ul>
注: `收据场景为白名单功能，使用前请联系对接的客户经理沟通。`
 * @method string getApproverRoleName() 获取自定义签署人角色名：收款人、开具人、见证人
 * @method void setApproverRoleName(string $ApproverRoleName) 设置自定义签署人角色名：收款人、开具人、见证人
 * @method array getVerifyChannel() 获取签署意愿确认渠道，默认为WEIXINAPP:人脸识别

注: 将要废弃, 用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置
 * @method void setVerifyChannel(array $VerifyChannel) 设置签署意愿确认渠道，默认为WEIXINAPP:人脸识别

注: 将要废弃, 用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置
 * @method integer getPreReadTime() 获取签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。

若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：
<ul><li>合同页数少于等于2页，阅读时间为3秒；</li>
<li>合同页数为3到5页，阅读时间为5秒；</li>
<li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method void setPreReadTime(integer $PreReadTime) 设置签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。

若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：
<ul><li>合同页数少于等于2页，阅读时间为3秒；</li>
<li>合同页数为3到5页，阅读时间为5秒；</li>
<li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
 * @method string getUserId() 获取签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得

注: `若传此字段 则以userid的信息为主，会覆盖传递过来的签署人基本信息， 包括姓名，手机号，证件类型等信息`
 * @method void setUserId(string $UserId) 设置签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得

注: `若传此字段 则以userid的信息为主，会覆盖传递过来的签署人基本信息， 包括姓名，手机号，证件类型等信息`
 * @method string getApproverSource() 获取在企微场景下使用，需设置参数为**WEWORKAPP**，以表明合同来源于企微。
 * @method void setApproverSource(string $ApproverSource) 设置在企微场景下使用，需设置参数为**WEWORKAPP**，以表明合同来源于企微。
 * @method string getCustomApproverTag() 获取在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。
所有参与或签的人员均需具备该标识。
注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。
如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。
所有参与或签的人员均需具备该标识。
注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。
如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。
 * @method ApproverOption getApproverOption() 获取可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。
详细操作可以参考开发者中心的ApproverOption结构体。
 * @method void setApproverOption(ApproverOption $ApproverOption) 设置可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。
详细操作可以参考开发者中心的ApproverOption结构体。
 * @method array getApproverVerifyTypes() 获取指定个人签署方查看合同的校验方式,可以传值如下:
<ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li>
<li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）
</li></ul>
注: 
<ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li>
<li>此字段不可传多个校验方式</li></ul>
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置指定个人签署方查看合同的校验方式,可以传值如下:
<ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li>
<li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）
</li></ul>
注: 
<ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li>
<li>此字段不可传多个校验方式</li></ul>
 * @method array getApproverSignTypes() 获取您可以指定签署方签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li>
<li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置您可以指定签署方签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li>
<li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
 * @method boolean getApproverNeedSignReview() 获取发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li>**false**：（默认）不需要审批，直接签署。</li>
<li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>

注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
 * @method void setApproverNeedSignReview(boolean $ApproverNeedSignReview) 设置发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li>**false**：（默认）不需要审批，直接签署。</li>
<li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>

注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
 * @method array getAddSignComponentsLimits() 获取[用PDF文件创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles)时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID）或签名方式。

注：`限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。`
 * @method void setAddSignComponentsLimits(array $AddSignComponentsLimits) 设置[用PDF文件创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles)时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID）或签名方式。

注：`限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。`
 */
class ApproverInfo extends AbstractModel
{
    /**
     * @var integer 在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:
**0**：企业
**1**：个人
**3**：企业静默签署
注：`类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。`
**7**: 个人自动签署，适用于个人自动签场景。
注: `个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。`
     */
    public $ApproverType;

    /**
     * @var string 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
     */
    public $ApproverName;

    /**
     * @var string 签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此合同签署方。
     */
    public $ApproverMobile;

    /**
     * @var string 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。

     */
    public $OrganizationName;

    /**
     * @var array 合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体
<ul><li> 个人签名/印章</li>
<li> 企业印章</li>
<li> 骑缝章等签署控件</li></ul>
     */
    public $SignComponents;

    /**
     * @var string 签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li>
<li>OTHER_CARD_TYPE 其他证件</li></ul>

注: `其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。`
     */
    public $ApproverIdCardType;

    /**
     * @var string 签署方经办人的证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码应为9位字符串，第1位为“C”，第2位为英文字母（但“I”、“O”除外），后7位为阿拉伯数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     */
    public $ApproverIdCardNumber;

    /**
     * @var string 通知签署方经办人的方式,  有以下途径:
<ul><li>  **sms**  :  (默认)短信</li>
<li>   **none**   : 不通知</li></ul>
     */
    public $NotifyType;

    /**
     * @var integer 收据场景设置签署人角色类型, 可以设置如下****类型****:
<ul><li> **1**  :收款人</li>
<li>   **2**   :开具人</li>
<li>   **3** :见证人</li></ul>
注: `收据场景为白名单功能，使用前请联系对接的客户经理沟通。`
     */
    public $ApproverRole;

    /**
     * @var string 自定义签署人角色名：收款人、开具人、见证人
     */
    public $ApproverRoleName;

    /**
     * @var array 签署意愿确认渠道，默认为WEIXINAPP:人脸识别

注: 将要废弃, 用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置
     */
    public $VerifyChannel;

    /**
     * @var integer 签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。

若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：
<ul><li>合同页数少于等于2页，阅读时间为3秒；</li>
<li>合同页数为3到5页，阅读时间为5秒；</li>
<li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     */
    public $PreReadTime;

    /**
     * @var string 签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得

注: `若传此字段 则以userid的信息为主，会覆盖传递过来的签署人基本信息， 包括姓名，手机号，证件类型等信息`
     */
    public $UserId;

    /**
     * @var string 在企微场景下使用，需设置参数为**WEWORKAPP**，以表明合同来源于企微。
     */
    public $ApproverSource;

    /**
     * @var string 在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。
所有参与或签的人员均需具备该标识。
注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。
如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。
     */
    public $CustomApproverTag;

    /**
     * @var ApproverOption 可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。
详细操作可以参考开发者中心的ApproverOption结构体。
     */
    public $ApproverOption;

    /**
     * @var array 指定个人签署方查看合同的校验方式,可以传值如下:
<ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li>
<li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）
</li></ul>
注: 
<ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li>
<li>此字段不可传多个校验方式</li></ul>
     */
    public $ApproverVerifyTypes;

    /**
     * @var array 您可以指定签署方签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li>
<li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
     */
    public $ApproverSignTypes;

    /**
     * @var boolean 发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li>**false**：（默认）不需要审批，直接签署。</li>
<li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>

注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
     */
    public $ApproverNeedSignReview;

    /**
     * @var array [用PDF文件创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles)时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID）或签名方式。

注：`限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。`
     */
    public $AddSignComponentsLimits;

    /**
     * @param integer $ApproverType 在指定签署方时，可选择企业B端或个人C端等不同的参与者类型，可选类型如下:
**0**：企业
**1**：个人
**3**：企业静默签署
注：`类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。`
**7**: 个人自动签署，适用于个人自动签场景。
注: `个人自动签场景为白名单功能，使用前请联系对接的客户经理沟通。`
     * @param string $ApproverName 签署方经办人的姓名。
经办人的姓名将用于身份认证和电子签名，请确保填写的姓名为签署方的真实姓名，而非昵称等代名。
     * @param string $ApproverMobile 签署方经办人手机号码， 支持国内手机号11位数字(无需加+86前缀或其他字符)。
请确认手机号所有方为此合同签署方。
     * @param string $OrganizationName 组织机构名称。
请确认该名称与企业营业执照中注册的名称一致。
如果名称中包含英文括号()，请使用中文括号（）代替。
如果签署方是企业签署方(approverType = 0 或者 approverType = 3)， 则企业名称必填。

     * @param array $SignComponents 合同中的签署控件列表，列表中可支持下列多种签署控件,控件的详细定义参考开发者中心的Component结构体
<ul><li> 个人签名/印章</li>
<li> 企业印章</li>
<li> 骑缝章等签署控件</li></ul>
     * @param string $ApproverIdCardType 签署方经办人的证件类型，支持以下类型
<ul><li>ID_CARD 居民身份证  (默认值)</li>
<li>HONGKONG_AND_MACAO 港澳居民来往内地通行证</li>
<li>HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)</li>
<li>OTHER_CARD_TYPE 其他证件</li></ul>

注: `其他证件类型为白名单功能，使用前请联系对接的客户经理沟通。`
     * @param string $ApproverIdCardNumber 签署方经办人的证件号码，应符合以下规则
<ul><li>居民身份证号码应为18位字符串，由数字和大写字母X组成（如存在X，请大写）。</li>
<li>港澳居民来往内地通行证号码应为9位字符串，第1位为“C”，第2位为英文字母（但“I”、“O”除外），后7位为阿拉伯数字。</li>
<li>港澳台居民居住证号码编码规则与中国大陆身份证相同，应为18位字符串。</li></ul>
     * @param string $NotifyType 通知签署方经办人的方式,  有以下途径:
<ul><li>  **sms**  :  (默认)短信</li>
<li>   **none**   : 不通知</li></ul>
     * @param integer $ApproverRole 收据场景设置签署人角色类型, 可以设置如下****类型****:
<ul><li> **1**  :收款人</li>
<li>   **2**   :开具人</li>
<li>   **3** :见证人</li></ul>
注: `收据场景为白名单功能，使用前请联系对接的客户经理沟通。`
     * @param string $ApproverRoleName 自定义签署人角色名：收款人、开具人、见证人
     * @param array $VerifyChannel 签署意愿确认渠道，默认为WEIXINAPP:人脸识别

注: 将要废弃, 用ApproverSignTypes签署人签署合同时的认证方式代替, 新客户可请用ApproverSignTypes来设置
     * @param integer $PreReadTime 签署方在签署合同之前，需要强制阅读合同的时长，可指定为3秒至300秒之间的任意值。

若未指定阅读时间，则会按照合同页数大小计算阅读时间，计算规则如下：
<ul><li>合同页数少于等于2页，阅读时间为3秒；</li>
<li>合同页数为3到5页，阅读时间为5秒；</li>
<li>合同页数大于等于6页，阅读时间为10秒。</li></ul>
     * @param string $UserId 签署人userId，仅支持本企业的员工userid， 可在控制台组织管理处获得

注: `若传此字段 则以userid的信息为主，会覆盖传递过来的签署人基本信息， 包括姓名，手机号，证件类型等信息`
     * @param string $ApproverSource 在企微场景下使用，需设置参数为**WEWORKAPP**，以表明合同来源于企微。
     * @param string $CustomApproverTag 在企业微信场景下，表明该合同流程为或签，其最大长度为64位字符串。
所有参与或签的人员均需具备该标识。
注意，在合同中，不同的或签参与人必须保证其CustomApproverTag唯一。
如果或签签署人为本方企业微信参与人，则需要指定ApproverSource参数为WEWORKAPP。
     * @param ApproverOption $ApproverOption 可以控制签署方在签署合同时能否进行某些操作，例如拒签、转交他人等。
详细操作可以参考开发者中心的ApproverOption结构体。
     * @param array $ApproverVerifyTypes 指定个人签署方查看合同的校验方式,可以传值如下:
<ul><li>  **1**   : （默认）人脸识别,人脸识别后才能合同内容</li>
<li>  **2**  : 手机号验证, 用户手机号和参与方手机号(ApproverMobile)相同即可查看合同内容（当手写签名方式为OCR_ESIGN时，该校验方式无效，因为这种签名方式依赖实名认证）
</li></ul>
注: 
<ul><li>如果合同流程设置ApproverVerifyType查看合同的校验方式,    则忽略此签署人的查看合同的校验方式</li>
<li>此字段不可传多个校验方式</li></ul>
     * @param array $ApproverSignTypes 您可以指定签署方签署合同的认证校验方式，可传递以下值：
<ul><li>**1**：人脸认证，需进行人脸识别成功后才能签署合同；</li>
<li>**2**：签署密码，需输入与用户在腾讯电子签设置的密码一致才能校验成功进行合同签署；</li>
<li>**3**：运营商三要素，需到运营商处比对手机号实名信息（名字、手机号、证件号）校验一致才能成功进行合同签署。</li></ul>
注：
<ul><li>默认情况下，认证校验方式为人脸认证和签署密码两种形式；</li>
<li>您可以传递多种值，表示可用多种认证校验方式。</li></ul>
     * @param boolean $ApproverNeedSignReview 发起方企业的签署人进行签署操作前，是否需要企业内部走审批流程，取值如下：
<ul><li>**false**：（默认）不需要审批，直接签署。</li>
<li>**true**：需要走审批流程。当到对应参与人签署时，会阻塞其签署操作，等待企业内部审批完成。</li></ul>
企业可以通过CreateFlowSignReview审批接口通知腾讯电子签平台企业内部审批结果
<ul><li>如果企业通知腾讯电子签平台审核通过，签署方可继续签署动作。</li>
<li>如果企业通知腾讯电子签平台审核未通过，平台将继续阻塞签署方的签署动作，直到企业通知平台审核通过。</li></ul>

注：`此功能可用于与企业内部的审批流程进行关联，支持手动、静默签署合同`
     * @param array $AddSignComponentsLimits [用PDF文件创建签署流程](https://qian.tencent.com/developers/companyApis/startFlows/CreateFlowByFiles)时,如果设置了外层参数SignBeanTag=1(允许签署过程中添加签署控件),则可通过此参数明确规定合同所使用的签署控件类型（骑缝章、普通章法人章等）和具体的印章（印章ID）或签名方式。

注：`限制印章控件或骑缝章控件情况下,仅本企业签署方可以指定具体印章（通过传递ComponentValue,支持多个），他方企业或个人只支持限制控件类型。`
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
    }
}
