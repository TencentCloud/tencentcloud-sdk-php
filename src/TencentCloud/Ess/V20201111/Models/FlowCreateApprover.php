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
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。
 * @method void setApproverType(integer $ApproverType) 设置参与者类型：
0：企业
1：个人
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。
 * @method string getOrganizationName() 获取如果签署方为企业，需要填入企业全称
 * @method void setOrganizationName(string $OrganizationName) 设置如果签署方为企业，需要填入企业全称
 * @method string getApproverName() 获取签署方经办人姓名
 * @method void setApproverName(string $ApproverName) 设置签署方经办人姓名
 * @method string getApproverMobile() 获取签署方经办人手机号码
 * @method void setApproverMobile(string $ApproverMobile) 设置签署方经办人手机号码
 * @method string getApproverIdCardType() 获取签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method string getApproverIdCardNumber() 获取签署方经办人证件号码
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置签署方经办人证件号码
 * @method string getRecipientId() 获取签署方经办人在模板中的角色ID
 * @method void setRecipientId(string $RecipientId) 设置签署方经办人在模板中的角色ID
 * @method array getVerifyChannel() 获取签署意愿确认渠道,WEIXINAPP:人脸识别
 * @method void setVerifyChannel(array $VerifyChannel) 设置签署意愿确认渠道,WEIXINAPP:人脸识别
 * @method string getNotifyType() 获取是否发送短信，sms--短信通知，none--不通知，默认为sms；发起方=签署方时不发送短信
 * @method void setNotifyType(string $NotifyType) 设置是否发送短信，sms--短信通知，none--不通知，默认为sms；发起方=签署方时不发送短信
 * @method boolean getIsFullText() 获取签署前置条件：是否需要阅读全文，默认为不需要
 * @method void setIsFullText(boolean $IsFullText) 设置签署前置条件：是否需要阅读全文，默认为不需要
 * @method integer getPreReadTime() 获取签署前置条件：阅读时长限制，单位秒，默认为不需要
 * @method void setPreReadTime(integer $PreReadTime) 设置签署前置条件：阅读时长限制，单位秒，默认为不需要
 * @method string getUserId() 获取签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个。
 * @method void setUserId(string $UserId) 设置签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个。
 * @method boolean getRequired() 获取当前只支持true，默认为true
 * @method void setRequired(boolean $Required) 设置当前只支持true，默认为true
 * @method string getApproverSource() 获取签署人用户来源,企微侧用户请传入：WEWORKAPP
 * @method void setApproverSource(string $ApproverSource) 设置签署人用户来源,企微侧用户请传入：WEWORKAPP
 * @method string getCustomApproverTag() 获取客户自定义签署人标识，64位长度，保证唯一。非企微场景不使用此字段
 * @method void setCustomApproverTag(string $CustomApproverTag) 设置客户自定义签署人标识，64位长度，保证唯一。非企微场景不使用此字段
 * @method RegisterInfo getRegisterInfo() 获取快速注册相关信息，目前暂未开放！
 * @method void setRegisterInfo(RegisterInfo $RegisterInfo) 设置快速注册相关信息，目前暂未开放！
 * @method ApproverOption getApproverOption() 获取签署人个性化能力值
 * @method void setApproverOption(ApproverOption $ApproverOption) 设置签署人个性化能力值
 */
class FlowCreateApprover extends AbstractModel
{
    /**
     * @var integer 参与者类型：
0：企业
1：个人
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。
     */
    public $ApproverType;

    /**
     * @var string 如果签署方为企业，需要填入企业全称
     */
    public $OrganizationName;

    /**
     * @var string 签署方经办人姓名
     */
    public $ApproverName;

    /**
     * @var string 签署方经办人手机号码
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
     * @var string 签署方经办人在模板中的角色ID
     */
    public $RecipientId;

    /**
     * @var array 签署意愿确认渠道,WEIXINAPP:人脸识别
     */
    public $VerifyChannel;

    /**
     * @var string 是否发送短信，sms--短信通知，none--不通知，默认为sms；发起方=签署方时不发送短信
     */
    public $NotifyType;

    /**
     * @var boolean 签署前置条件：是否需要阅读全文，默认为不需要
     */
    public $IsFullText;

    /**
     * @var integer 签署前置条件：阅读时长限制，单位秒，默认为不需要
     */
    public $PreReadTime;

    /**
     * @var string 签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个。
     */
    public $UserId;

    /**
     * @var boolean 当前只支持true，默认为true
     */
    public $Required;

    /**
     * @var string 签署人用户来源,企微侧用户请传入：WEWORKAPP
     */
    public $ApproverSource;

    /**
     * @var string 客户自定义签署人标识，64位长度，保证唯一。非企微场景不使用此字段
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
     * @param integer $ApproverType 参与者类型：
0：企业
1：个人
3：企业静默签署
注：类型为3（企业静默签署）时，此接口会默认完成该签署方的签署。静默签署仅进行盖章操作，不能自动签名。
     * @param string $OrganizationName 如果签署方为企业，需要填入企业全称
     * @param string $ApproverName 签署方经办人姓名
     * @param string $ApproverMobile 签署方经办人手机号码
     * @param string $ApproverIdCardType 签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     * @param string $ApproverIdCardNumber 签署方经办人证件号码
     * @param string $RecipientId 签署方经办人在模板中的角色ID
     * @param array $VerifyChannel 签署意愿确认渠道,WEIXINAPP:人脸识别
     * @param string $NotifyType 是否发送短信，sms--短信通知，none--不通知，默认为sms；发起方=签署方时不发送短信
     * @param boolean $IsFullText 签署前置条件：是否需要阅读全文，默认为不需要
     * @param integer $PreReadTime 签署前置条件：阅读时长限制，单位秒，默认为不需要
     * @param string $UserId 签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个。
     * @param boolean $Required 当前只支持true，默认为true
     * @param string $ApproverSource 签署人用户来源,企微侧用户请传入：WEWORKAPP
     * @param string $CustomApproverTag 客户自定义签署人标识，64位长度，保证唯一。非企微场景不使用此字段
     * @param RegisterInfo $RegisterInfo 快速注册相关信息，目前暂未开放！
     * @param ApproverOption $ApproverOption 签署人个性化能力值
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
    }
}
