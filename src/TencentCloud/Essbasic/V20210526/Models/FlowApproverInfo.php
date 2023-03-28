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
namespace TencentCloud\Essbasic\V20210526\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建签署流程签署人入参。

其中签署方FlowApproverInfo需要传递的参数
非单C、单B、B2C合同，ApproverType、RecipientId（模板发起合同时）必传，建议都传。其他身份标识
1-个人：Name、Mobile必传
2-第三方平台子客企业指定经办人：OpenId必传，OrgName必传、OrgOpenId必传；
3-第三方平台子客企业不指定经办人：OrgName必传、OrgOpenId必传；
4-非第三方平台子客企业：Name、Mobile必传，OrgName必传，且NotChannelOrganization=True。

RecipientId参数：
从DescribeTemplates接口中，可以得到模板下的签署方Recipient列表，根据模板自定义的Rolename在此结构体中确定其RecipientId
 *
 * @method string getName() 获取签署人姓名，最大长度50个字符
 * @method void setName(string $Name) 设置签署人姓名，最大长度50个字符
 * @method string getIdCardType() 获取签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
 * @method void setIdCardType(string $IdCardType) 设置签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
 * @method string getIdCardNumber() 获取签署人证件号
 * @method void setIdCardNumber(string $IdCardNumber) 设置签署人证件号
 * @method string getMobile() 获取签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号。
 * @method void setMobile(string $Mobile) 设置签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号。
 * @method string getOrganizationName() 获取企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符；
 * @method void setOrganizationName(string $OrganizationName) 设置企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符；
 * @method boolean getNotChannelOrganization() 获取指定签署人非第三方平台子客企业下员工，在ApproverType为ORGANIZATION时指定。
默认为false，即签署人位于同一个第三方平台应用号下；默认为false，即签署人位于同一个第三方应用号下；
 * @method void setNotChannelOrganization(boolean $NotChannelOrganization) 设置指定签署人非第三方平台子客企业下员工，在ApproverType为ORGANIZATION时指定。
默认为false，即签署人位于同一个第三方平台应用号下；默认为false，即签署人位于同一个第三方应用号下；
 * @method string getOpenId() 获取用户侧第三方id，最大长度64个字符
当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程
 * @method void setOpenId(string $OpenId) 设置用户侧第三方id，最大长度64个字符
当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程
 * @method string getOrganizationOpenId() 获取企业签署方在同一第三方平台应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符；
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置企业签署方在同一第三方平台应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符；
 * @method string getApproverType() 获取签署人类型
PERSON-个人/自然人；
PERSON_AUTO_SIGN-个人自动签（定制化场景下使用）；
ORGANIZATION-企业（企业签署方或模板发起时的企业静默签）；
ENTERPRISESERVER-企业静默签（文件发起时的企业静默签字）。
 * @method void setApproverType(string $ApproverType) 设置签署人类型
PERSON-个人/自然人；
PERSON_AUTO_SIGN-个人自动签（定制化场景下使用）；
ORGANIZATION-企业（企业签署方或模板发起时的企业静默签）；
ENTERPRISESERVER-企业静默签（文件发起时的企业静默签字）。
 * @method string getRecipientId() 获取签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；
 * @method void setRecipientId(string $RecipientId) 设置签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；
 * @method integer getDeadline() 获取签署截止时间，默认一年
 * @method void setDeadline(integer $Deadline) 设置签署截止时间，默认一年
 * @method string getCallbackUrl() 获取签署完回调url，最大长度1000个字符
 * @method void setCallbackUrl(string $CallbackUrl) 设置签署完回调url，最大长度1000个字符
 * @method array getSignComponents() 获取使用PDF文件直接发起合同时，签署人指定的签署控件
 * @method void setSignComponents(array $SignComponents) 设置使用PDF文件直接发起合同时，签署人指定的签署控件
 * @method array getComponentLimitType() 获取个人签署方指定签署控件类型，目前支持：OCR_ESIGN -AI智慧手写签名
HANDWRITE -手写签名
 * @method void setComponentLimitType(array $ComponentLimitType) 设置个人签署方指定签署控件类型，目前支持：OCR_ESIGN -AI智慧手写签名
HANDWRITE -手写签名
 * @method integer getPreReadTime() 获取合同的强制预览时间：3~300s，未指定则按合同页数计算
 * @method void setPreReadTime(integer $PreReadTime) 设置合同的强制预览时间：3~300s，未指定则按合同页数计算
 * @method string getJumpUrl() 获取签署完前端跳转的url，暂未使用
 * @method void setJumpUrl(string $JumpUrl) 设置签署完前端跳转的url，暂未使用
 * @method ApproverOption getApproverOption() 获取签署人个性化能力值
 * @method void setApproverOption(ApproverOption $ApproverOption) 设置签署人个性化能力值
 * @method boolean getApproverNeedSignReview() 获取当前签署方进行签署操作是否需要企业内部审批，true 则为需要
 * @method void setApproverNeedSignReview(boolean $ApproverNeedSignReview) 设置当前签署方进行签署操作是否需要企业内部审批，true 则为需要
 * @method array getApproverVerifyTypes() 获取签署人查看合同时认证方式, 1-实名查看 2-短信验证码查看(企业签署方不支持该方式) 如果不传默认为1
查看合同的认证方式 Flow层级的优先于approver层级的
 * @method void setApproverVerifyTypes(array $ApproverVerifyTypes) 设置签署人查看合同时认证方式, 1-实名查看 2-短信验证码查看(企业签署方不支持该方式) 如果不传默认为1
查看合同的认证方式 Flow层级的优先于approver层级的
 * @method array getApproverSignTypes() 获取签署人签署合同时的认证方式
1-人脸认证 2-签署密码 3-运营商三要素(默认为1,2)
 * @method void setApproverSignTypes(array $ApproverSignTypes) 设置签署人签署合同时的认证方式
1-人脸认证 2-签署密码 3-运营商三要素(默认为1,2)
 */
class FlowApproverInfo extends AbstractModel
{
    /**
     * @var string 签署人姓名，最大长度50个字符
     */
    public $Name;

    /**
     * @var string 签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
     */
    public $IdCardType;

    /**
     * @var string 签署人证件号
     */
    public $IdCardNumber;

    /**
     * @var string 签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号。
     */
    public $Mobile;

    /**
     * @var string 企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符；
     */
    public $OrganizationName;

    /**
     * @var boolean 指定签署人非第三方平台子客企业下员工，在ApproverType为ORGANIZATION时指定。
默认为false，即签署人位于同一个第三方平台应用号下；默认为false，即签署人位于同一个第三方应用号下；
     */
    public $NotChannelOrganization;

    /**
     * @var string 用户侧第三方id，最大长度64个字符
当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程
     */
    public $OpenId;

    /**
     * @var string 企业签署方在同一第三方平台应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符；
     */
    public $OrganizationOpenId;

    /**
     * @var string 签署人类型
PERSON-个人/自然人；
PERSON_AUTO_SIGN-个人自动签（定制化场景下使用）；
ORGANIZATION-企业（企业签署方或模板发起时的企业静默签）；
ENTERPRISESERVER-企业静默签（文件发起时的企业静默签字）。
     */
    public $ApproverType;

    /**
     * @var string 签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；
     */
    public $RecipientId;

    /**
     * @var integer 签署截止时间，默认一年
     */
    public $Deadline;

    /**
     * @var string 签署完回调url，最大长度1000个字符
     */
    public $CallbackUrl;

    /**
     * @var array 使用PDF文件直接发起合同时，签署人指定的签署控件
     */
    public $SignComponents;

    /**
     * @var array 个人签署方指定签署控件类型，目前支持：OCR_ESIGN -AI智慧手写签名
HANDWRITE -手写签名
     */
    public $ComponentLimitType;

    /**
     * @var integer 合同的强制预览时间：3~300s，未指定则按合同页数计算
     */
    public $PreReadTime;

    /**
     * @var string 签署完前端跳转的url，暂未使用
     */
    public $JumpUrl;

    /**
     * @var ApproverOption 签署人个性化能力值
     */
    public $ApproverOption;

    /**
     * @var boolean 当前签署方进行签署操作是否需要企业内部审批，true 则为需要
     */
    public $ApproverNeedSignReview;

    /**
     * @var array 签署人查看合同时认证方式, 1-实名查看 2-短信验证码查看(企业签署方不支持该方式) 如果不传默认为1
查看合同的认证方式 Flow层级的优先于approver层级的
     */
    public $ApproverVerifyTypes;

    /**
     * @var array 签署人签署合同时的认证方式
1-人脸认证 2-签署密码 3-运营商三要素(默认为1,2)
     */
    public $ApproverSignTypes;

    /**
     * @param string $Name 签署人姓名，最大长度50个字符
     * @param string $IdCardType 签署人身份证件类型
1.ID_CARD 居民身份证
2.HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证
3.HONGKONG_AND_MACAO 港澳居民来往内地通行证
     * @param string $IdCardNumber 签署人证件号
     * @param string $Mobile 签署人手机号，脱敏显示。大陆手机号为11位，暂不支持海外手机号。
     * @param string $OrganizationName 企业签署方工商营业执照上的企业名称，签署方为非发起方企业场景下必传，最大长度64个字符；
     * @param boolean $NotChannelOrganization 指定签署人非第三方平台子客企业下员工，在ApproverType为ORGANIZATION时指定。
默认为false，即签署人位于同一个第三方平台应用号下；默认为false，即签署人位于同一个第三方应用号下；
     * @param string $OpenId 用户侧第三方id，最大长度64个字符
当签署方为同一第三方平台下的员工时，该字段若不指定，则发起【待领取】的流程
     * @param string $OrganizationOpenId 企业签署方在同一第三方平台应用下的其他合作企业OpenId，签署方为非发起方企业场景下必传，最大长度64个字符；
     * @param string $ApproverType 签署人类型
PERSON-个人/自然人；
PERSON_AUTO_SIGN-个人自动签（定制化场景下使用）；
ORGANIZATION-企业（企业签署方或模板发起时的企业静默签）；
ENTERPRISESERVER-企业静默签（文件发起时的企业静默签字）。
     * @param string $RecipientId 签署流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在签署流程中的位置；
     * @param integer $Deadline 签署截止时间，默认一年
     * @param string $CallbackUrl 签署完回调url，最大长度1000个字符
     * @param array $SignComponents 使用PDF文件直接发起合同时，签署人指定的签署控件
     * @param array $ComponentLimitType 个人签署方指定签署控件类型，目前支持：OCR_ESIGN -AI智慧手写签名
HANDWRITE -手写签名
     * @param integer $PreReadTime 合同的强制预览时间：3~300s，未指定则按合同页数计算
     * @param string $JumpUrl 签署完前端跳转的url，暂未使用
     * @param ApproverOption $ApproverOption 签署人个性化能力值
     * @param boolean $ApproverNeedSignReview 当前签署方进行签署操作是否需要企业内部审批，true 则为需要
     * @param array $ApproverVerifyTypes 签署人查看合同时认证方式, 1-实名查看 2-短信验证码查看(企业签署方不支持该方式) 如果不传默认为1
查看合同的认证方式 Flow层级的优先于approver层级的
     * @param array $ApproverSignTypes 签署人签署合同时的认证方式
1-人脸认证 2-签署密码 3-运营商三要素(默认为1,2)
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
    }
}
