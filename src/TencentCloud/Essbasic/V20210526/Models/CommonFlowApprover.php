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
 * 通用签署人信息
 *
 * @method boolean getNotChannelOrganization() 获取指定当前签署人为第三方应用集成子客，默认false：当前签署人为第三方应用集成子客，true：当前签署人为saas企业用户
 * @method void setNotChannelOrganization(boolean $NotChannelOrganization) 设置指定当前签署人为第三方应用集成子客，默认false：当前签署人为第三方应用集成子客，true：当前签署人为saas企业用户
 * @method integer getApproverType() 获取签署人类型,目前支持：0-企业签署人，1-个人签署人，3-企业静默签署人
 * @method void setApproverType(integer $ApproverType) 设置签署人类型,目前支持：0-企业签署人，1-个人签署人，3-企业静默签署人
 * @method string getOrganizationId() 获取企业id
 * @method void setOrganizationId(string $OrganizationId) 设置企业id
 * @method string getOrganizationOpenId() 获取企业OpenId，第三方应用集成非静默签子客企业签署人发起合同毕传
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置企业OpenId，第三方应用集成非静默签子客企业签署人发起合同毕传
 * @method string getOrganizationName() 获取企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传
 * @method void setOrganizationName(string $OrganizationName) 设置企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传
 * @method string getUserId() 获取用户id
 * @method void setUserId(string $UserId) 设置用户id
 * @method string getOpenId() 获取用户openId，第三方应用集成非静默签子客企业签署人必传
 * @method void setOpenId(string $OpenId) 设置用户openId，第三方应用集成非静默签子客企业签署人必传
 * @method string getApproverName() 获取签署人名称，saas企业签署人，个人签署人必传
 * @method void setApproverName(string $ApproverName) 设置签署人名称，saas企业签署人，个人签署人必传
 * @method string getApproverMobile() 获取签署人手机号，saas企业签署人，个人签署人必传
 * @method void setApproverMobile(string $ApproverMobile) 设置签署人手机号，saas企业签署人，个人签署人必传
 * @method string getRecipientId() 获取签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId
注意：模板发起时该字段必填
 * @method void setRecipientId(string $RecipientId) 设置签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId
注意：模板发起时该字段必填
 * @method integer getPreReadTime() 获取签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s
 * @method void setPreReadTime(integer $PreReadTime) 设置签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s
 * @method boolean getIsFullText() 获取签署前置条件：阅读全文限制
 * @method void setIsFullText(boolean $IsFullText) 设置签署前置条件：阅读全文限制
 * @method string getNotifyType() 获取通知类型：SMS（短信） NONE（不做通知）, 不传 默认SMS
 * @method void setNotifyType(string $NotifyType) 设置通知类型：SMS（短信） NONE（不做通知）, 不传 默认SMS
 * @method CommonApproverOption getApproverOption() 获取签署人配置
 * @method void setApproverOption(CommonApproverOption $ApproverOption) 设置签署人配置
 */
class CommonFlowApprover extends AbstractModel
{
    /**
     * @var boolean 指定当前签署人为第三方应用集成子客，默认false：当前签署人为第三方应用集成子客，true：当前签署人为saas企业用户
     */
    public $NotChannelOrganization;

    /**
     * @var integer 签署人类型,目前支持：0-企业签署人，1-个人签署人，3-企业静默签署人
     */
    public $ApproverType;

    /**
     * @var string 企业id
     */
    public $OrganizationId;

    /**
     * @var string 企业OpenId，第三方应用集成非静默签子客企业签署人发起合同毕传
     */
    public $OrganizationOpenId;

    /**
     * @var string 企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传
     */
    public $OrganizationName;

    /**
     * @var string 用户id
     */
    public $UserId;

    /**
     * @var string 用户openId，第三方应用集成非静默签子客企业签署人必传
     */
    public $OpenId;

    /**
     * @var string 签署人名称，saas企业签署人，个人签署人必传
     */
    public $ApproverName;

    /**
     * @var string 签署人手机号，saas企业签署人，个人签署人必传
     */
    public $ApproverMobile;

    /**
     * @var string 签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId
注意：模板发起时该字段必填
     */
    public $RecipientId;

    /**
     * @var integer 签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s
     */
    public $PreReadTime;

    /**
     * @var boolean 签署前置条件：阅读全文限制
     */
    public $IsFullText;

    /**
     * @var string 通知类型：SMS（短信） NONE（不做通知）, 不传 默认SMS
     */
    public $NotifyType;

    /**
     * @var CommonApproverOption 签署人配置
     */
    public $ApproverOption;

    /**
     * @param boolean $NotChannelOrganization 指定当前签署人为第三方应用集成子客，默认false：当前签署人为第三方应用集成子客，true：当前签署人为saas企业用户
     * @param integer $ApproverType 签署人类型,目前支持：0-企业签署人，1-个人签署人，3-企业静默签署人
     * @param string $OrganizationId 企业id
     * @param string $OrganizationOpenId 企业OpenId，第三方应用集成非静默签子客企业签署人发起合同毕传
     * @param string $OrganizationName 企业名称，第三方应用集成非静默签子客企业签署人必传，saas企业签署人必传
     * @param string $UserId 用户id
     * @param string $OpenId 用户openId，第三方应用集成非静默签子客企业签署人必传
     * @param string $ApproverName 签署人名称，saas企业签署人，个人签署人必传
     * @param string $ApproverMobile 签署人手机号，saas企业签署人，个人签署人必传
     * @param string $RecipientId 签署人Id，使用模板发起是，对应模板配置中的签署人RecipientId
注意：模板发起时该字段必填
     * @param integer $PreReadTime 签署前置条件：阅读时长限制，不传默认10s,最大300s，最小3s
     * @param boolean $IsFullText 签署前置条件：阅读全文限制
     * @param string $NotifyType 通知类型：SMS（短信） NONE（不做通知）, 不传 默认SMS
     * @param CommonApproverOption $ApproverOption 签署人配置
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
    }
}
