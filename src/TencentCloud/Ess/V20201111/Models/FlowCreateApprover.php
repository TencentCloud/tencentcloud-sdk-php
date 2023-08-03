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
 * 创建流程的签署方信息
 *
 * @method integer getApproverType() 获取参与者类型：
0：企业
1：个人
3：企业自动签署
注：类型为3（企业自动签署）时，会自动完成该签署方的签署。
自动签署仅进行盖章操作，不能是手写签名。
本方企业自动签署的签署人会默认是当前的发起人
他方企业自动签署的签署人是自动签模板的他方企业授权人
 * @method void setApproverType(integer $ApproverType) 设置参与者类型：
0：企业
1：个人
3：企业自动签署
注：类型为3（企业自动签署）时，会自动完成该签署方的签署。
自动签署仅进行盖章操作，不能是手写签名。
本方企业自动签署的签署人会默认是当前的发起人
他方企业自动签署的签署人是自动签模板的他方企业授权人
 * @method string getOrganizationName() 获取签署人企业名称
<br/>当approverType=1 或 approverType=3时，必须指定


 * @method void setOrganizationName(string $OrganizationName) 设置签署人企业名称
<br/>当approverType=1 或 approverType=3时，必须指定


 * @method string getApproverName() 获取签署方经办人姓名
<br/>在未指定签署人电子签UserId情况下，为必填参数
 * @method void setApproverName(string $ApproverName) 设置签署方经办人姓名
<br/>在未指定签署人电子签UserId情况下，为必填参数
 * @method string getApproverMobile() 获取签署方经办人手机号码
<br/>在未指定签署人电子签UserId情况下，为必填参数

 * @method void setApproverMobile(string $ApproverMobile) 设置签署方经办人手机号码
<br/>在未指定签署人电子签UserId情况下，为必填参数

 * @method string getApproverIdCardType() 获取签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method string getApproverIdCardNumber() 获取签署方经办人证件号码
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置签署方经办人证件号码
 * @method string getRecipientId() 获取签署方经办人在模板中的参与方ID
<br/>模板发起合同时，该参数为必填项
<br/>文件发起合同是，该参数无序传值

 * @method void setRecipientId(string $RecipientId) 设置签署方经办人在模板中的参与方ID
<br/>模板发起合同时，该参数为必填项
<br/>文件发起合同是，该参数无序传值

 * @method array getVerifyChannel() 获取签署意愿确认渠道,WEIXINAPP:人脸识别
 * @method void setVerifyChannel(array $VerifyChannel) 设置签署意愿确认渠道,WEIXINAPP:人脸识别
 * @method string getNotifyType() 获取是否发送短信
<br/>sms--短信通知
<br/>none--不通知
<br/>默认为sms
<br/>发起方=签署方时不发送短信
 * @method void setNotifyType(string $NotifyType) 设置是否发送短信
<br/>sms--短信通知
<br/>none--不通知
<br/>默认为sms
<br/>发起方=签署方时不发送短信
 * @method boolean getIsFullText() 获取合同强制需要阅读全文，无需传此参数
 * @method void setIsFullText(boolean $IsFullText) 设置合同强制需要阅读全文，无需传此参数
 * @method integer getPreReadTime() 获取合同的强制预览时间：3~300s，未指定则按合同页数计算
 * @method void setPreReadTime(integer $PreReadTime) 设置合同的强制预览时间：3~300s，未指定则按合同页数计算
 * @method string getUserId() 获取签署方经办人的电子签用户ID
<br/>当未指定签署人姓名+手机号的情况下，该字段毕传

 * @method void setUserId(string $UserId) 设置签署方经办人的电子签用户ID
<br/>当未指定签署人姓名+手机号的情况下，该字段毕传

 * @method boolean getRequired() 获取当前只支持true，默认为true
 * @method void setRequired(boolean $Required) 设置当前只支持true，默认为true
 * @method string getApproverSource() 获取签署人用户来源
<br/>企微侧用户请传入：WEWORKAPP
 * @method void setApproverSource(string $ApproverSource) 设置签署人用户来源
<br/>企微侧用户请传入：WEWORKAPP
 * @method string getCustomApproverTag() 获取企业签署方或签标识，客户自定义，64位长度
<br>用于发起含有或签签署人的合同。或签参与人必须有此字段。
<br/>合同内不同或签参与人CustomApproverTag需要保证唯一。
<br/>如果或签签署人为本方企微参与人，ApproverSource参数需要指定WEWORKAPP
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置企业签署方或签标识，客户自定义，64位长度
<br>用于发起含有或签签署人的合同。或签参与人必须有此字段。
<br/>合同内不同或签参与人CustomApproverTag需要保证唯一。
<br/>如果或签签署人为本方企微参与人，ApproverSource参数需要指定WEWORKAPP
 * @method RegisterInfo getRegisterInfo() 获取快速注册相关信息，目前暂未开放！
 * @method void setRegisterInfo(RegisterInfo $RegisterInfo) 设置快速注册相关信息，目前暂未开放！
 * @method ApproverOption getApproverOption() 获取签署人个性化能力值
 * @method void setApproverOption(ApproverOption $ApproverOption) 设置签署人个性化能力值
 * @method string getJumpUrl() 获取签署完前端跳转的url，暂未使用
 * @method void setJumpUrl(string $JumpUrl) 设置签署完前端跳转的url，暂未使用
 * @method string getSignId() 获取签署ID
- 发起流程时系统自动补充
- 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息
 * @method void setSignId(string $SignId) 设置签署ID
- 发起流程时系统自动补充
- 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息
 * @method boolean getApproverNeedSignReview() 获取当前签署方进行签署操作是否需要企业内部审批
<br>true 则为需要
<br/>false,无序企业内部审批（默认）
<br/>为个人签署方时则由发起方企业审核。
 * @method void setApproverNeedSignReview(boolean $ApproverNeedSignReview) 设置当前签署方进行签署操作是否需要企业内部审批
<br>true 则为需要
<br/>false,无序企业内部审批（默认）
<br/>为个人签署方时则由发起方企业审核。
 * @method array getSignComponents() 获取签署人签署控件
<br/>文件发起时，可通过该参数为签署人指定签署控件类型以及位置
 * @method void setSignComponents(array $SignComponents) 设置签署人签署控件
<br/>文件发起时，可通过该参数为签署人指定签署控件类型以及位置
 * @method array getComponents() 获取签署人填写控件
<br/>文件发起时，可通过该参数为签署人指定填写控件类型以及位置
 * @method void setComponents(array $Components) 设置签署人填写控件
<br/>文件发起时，可通过该参数为签署人指定填写控件类型以及位置
 * @method array getComponentLimitType() 获取签署方控件类型为 SIGN_SIGNATURE时，可以指定签署方签名方式
	HANDWRITE – 手写签名
	OCR_ESIGN -- AI智能识别手写签名
	ESIGN -- 个人印章类型
	SYSTEM_ESIGN -- 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）
 * @method void setComponentLimitType(array $ComponentLimitType) 设置签署方控件类型为 SIGN_SIGNATURE时，可以指定签署方签名方式
	HANDWRITE – 手写签名
	OCR_ESIGN -- AI智能识别手写签名
	ESIGN -- 个人印章类型
	SYSTEM_ESIGN -- 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）
 * @method array getApproverVerifyTypes() 获取合同查看方式<br/>默认1 -实名查看 <br/>2-短信验证码查看(企业签署方暂不支持该方式)
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置合同查看方式<br/>默认1 -实名查看 <br/>2-短信验证码查看(企业签署方暂不支持该方式)
 * @method array getApproverSignTypes() 获取合同签署方式(默认1,2) <br/>1-人脸认证 <br/>2-签署密码 <br/>3-运营商三要素
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置合同签署方式(默认1,2) <br/>1-人脸认证 <br/>2-签署密码 <br/>3-运营商三要素
 */
class FlowCreateApprover extends AbstractModel
{
    /**
     * @var integer 参与者类型：
0：企业
1：个人
3：企业自动签署
注：类型为3（企业自动签署）时，会自动完成该签署方的签署。
自动签署仅进行盖章操作，不能是手写签名。
本方企业自动签署的签署人会默认是当前的发起人
他方企业自动签署的签署人是自动签模板的他方企业授权人
     */
    public $ApproverType;

    /**
     * @var string 签署人企业名称
<br/>当approverType=1 或 approverType=3时，必须指定


     */
    public $OrganizationName;

    /**
     * @var string 签署方经办人姓名
<br/>在未指定签署人电子签UserId情况下，为必填参数
     */
    public $ApproverName;

    /**
     * @var string 签署方经办人手机号码
<br/>在未指定签署人电子签UserId情况下，为必填参数

     */
    public $ApproverMobile;

    /**
     * @var string 签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     */
    public $ApproverIdCardType;

    /**
     * @var string 签署方经办人证件号码
     */
    public $ApproverIdCardNumber;

    /**
     * @var string 签署方经办人在模板中的参与方ID
<br/>模板发起合同时，该参数为必填项
<br/>文件发起合同是，该参数无序传值

     */
    public $RecipientId;

    /**
     * @var array 签署意愿确认渠道,WEIXINAPP:人脸识别
     */
    public $VerifyChannel;

    /**
     * @var string 是否发送短信
<br/>sms--短信通知
<br/>none--不通知
<br/>默认为sms
<br/>发起方=签署方时不发送短信
     */
    public $NotifyType;

    /**
     * @var boolean 合同强制需要阅读全文，无需传此参数
     */
    public $IsFullText;

    /**
     * @var integer 合同的强制预览时间：3~300s，未指定则按合同页数计算
     */
    public $PreReadTime;

    /**
     * @var string 签署方经办人的电子签用户ID
<br/>当未指定签署人姓名+手机号的情况下，该字段毕传

     */
    public $UserId;

    /**
     * @var boolean 当前只支持true，默认为true
     */
    public $Required;

    /**
     * @var string 签署人用户来源
<br/>企微侧用户请传入：WEWORKAPP
     */
    public $ApproverSource;

    /**
     * @var string 企业签署方或签标识，客户自定义，64位长度
<br>用于发起含有或签签署人的合同。或签参与人必须有此字段。
<br/>合同内不同或签参与人CustomApproverTag需要保证唯一。
<br/>如果或签签署人为本方企微参与人，ApproverSource参数需要指定WEWORKAPP
     */
    public $CustomApproverTag;

    /**
     * @var RegisterInfo 快速注册相关信息，目前暂未开放！
     */
    public $RegisterInfo;

    /**
     * @var ApproverOption 签署人个性化能力值
     */
    public $ApproverOption;

    /**
     * @var string 签署完前端跳转的url，暂未使用
     * @deprecated
     */
    public $JumpUrl;

    /**
     * @var string 签署ID
- 发起流程时系统自动补充
- 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息
     */
    public $SignId;

    /**
     * @var boolean 当前签署方进行签署操作是否需要企业内部审批
<br>true 则为需要
<br/>false,无序企业内部审批（默认）
<br/>为个人签署方时则由发起方企业审核。
     */
    public $ApproverNeedSignReview;

    /**
     * @var array 签署人签署控件
<br/>文件发起时，可通过该参数为签署人指定签署控件类型以及位置
     */
    public $SignComponents;

    /**
     * @var array 签署人填写控件
<br/>文件发起时，可通过该参数为签署人指定填写控件类型以及位置
     */
    public $Components;

    /**
     * @var array 签署方控件类型为 SIGN_SIGNATURE时，可以指定签署方签名方式
	HANDWRITE – 手写签名
	OCR_ESIGN -- AI智能识别手写签名
	ESIGN -- 个人印章类型
	SYSTEM_ESIGN -- 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）
     */
    public $ComponentLimitType;

    /**
     * @var array 合同查看方式<br/>默认1 -实名查看 <br/>2-短信验证码查看(企业签署方暂不支持该方式)
     */
    public $ApproverVerifyTypes;

    /**
     * @var array 合同签署方式(默认1,2) <br/>1-人脸认证 <br/>2-签署密码 <br/>3-运营商三要素
     */
    public $ApproverSignTypes;

    /**
     * @param integer $ApproverType 参与者类型：
0：企业
1：个人
3：企业自动签署
注：类型为3（企业自动签署）时，会自动完成该签署方的签署。
自动签署仅进行盖章操作，不能是手写签名。
本方企业自动签署的签署人会默认是当前的发起人
他方企业自动签署的签署人是自动签模板的他方企业授权人
     * @param string $OrganizationName 签署人企业名称
<br/>当approverType=1 或 approverType=3时，必须指定


     * @param string $ApproverName 签署方经办人姓名
<br/>在未指定签署人电子签UserId情况下，为必填参数
     * @param string $ApproverMobile 签署方经办人手机号码
<br/>在未指定签署人电子签UserId情况下，为必填参数

     * @param string $ApproverIdCardType 签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     * @param string $ApproverIdCardNumber 签署方经办人证件号码
     * @param string $RecipientId 签署方经办人在模板中的参与方ID
<br/>模板发起合同时，该参数为必填项
<br/>文件发起合同是，该参数无序传值

     * @param array $VerifyChannel 签署意愿确认渠道,WEIXINAPP:人脸识别
     * @param string $NotifyType 是否发送短信
<br/>sms--短信通知
<br/>none--不通知
<br/>默认为sms
<br/>发起方=签署方时不发送短信
     * @param boolean $IsFullText 合同强制需要阅读全文，无需传此参数
     * @param integer $PreReadTime 合同的强制预览时间：3~300s，未指定则按合同页数计算
     * @param string $UserId 签署方经办人的电子签用户ID
<br/>当未指定签署人姓名+手机号的情况下，该字段毕传

     * @param boolean $Required 当前只支持true，默认为true
     * @param string $ApproverSource 签署人用户来源
<br/>企微侧用户请传入：WEWORKAPP
     * @param string $CustomApproverTag 企业签署方或签标识，客户自定义，64位长度
<br>用于发起含有或签签署人的合同。或签参与人必须有此字段。
<br/>合同内不同或签参与人CustomApproverTag需要保证唯一。
<br/>如果或签签署人为本方企微参与人，ApproverSource参数需要指定WEWORKAPP
     * @param RegisterInfo $RegisterInfo 快速注册相关信息，目前暂未开放！
     * @param ApproverOption $ApproverOption 签署人个性化能力值
     * @param string $JumpUrl 签署完前端跳转的url，暂未使用
     * @param string $SignId 签署ID
- 发起流程时系统自动补充
- 创建签署链接时，可以通过查询详情接口获得签署人的SignId，然后可传入此值为该签署人创建签署链接，无需再传姓名、手机号、证件号等其他信息
     * @param boolean $ApproverNeedSignReview 当前签署方进行签署操作是否需要企业内部审批
<br>true 则为需要
<br/>false,无序企业内部审批（默认）
<br/>为个人签署方时则由发起方企业审核。
     * @param array $SignComponents 签署人签署控件
<br/>文件发起时，可通过该参数为签署人指定签署控件类型以及位置
     * @param array $Components 签署人填写控件
<br/>文件发起时，可通过该参数为签署人指定填写控件类型以及位置
     * @param array $ComponentLimitType 签署方控件类型为 SIGN_SIGNATURE时，可以指定签署方签名方式
	HANDWRITE – 手写签名
	OCR_ESIGN -- AI智能识别手写签名
	ESIGN -- 个人印章类型
	SYSTEM_ESIGN -- 系统签名（该类型可以在用户签署时根据用户姓名一键生成一个签名来进行签署）
     * @param array $ApproverVerifyTypes 合同查看方式<br/>默认1 -实名查看 <br/>2-短信验证码查看(企业签署方暂不支持该方式)
     * @param array $ApproverSignTypes 合同签署方式(默认1,2) <br/>1-人脸认证 <br/>2-签署密码 <br/>3-运营商三要素
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
    }
}
