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
 * @method integer getApproverType() 获取签署方类型 (0为企业/1为个人)
 * @method void setApproverType(integer $ApproverType) 设置签署方类型 (0为企业/1为个人)
 * @method string getOrganizationName() 获取如果签署方为企业，需要填入企业全称
 * @method void setOrganizationName(string $OrganizationName) 设置如果签署方为企业，需要填入企业全称
 * @method boolean getRequired() 获取是否需要签署
- `false`: 不需要签署
-  `true`:  需要签署
 * @method void setRequired(boolean $Required) 设置是否需要签署
- `false`: 不需要签署
-  `true`:  需要签署
 * @method string getApproverName() 获取签署方经办人姓名
 * @method void setApproverName(string $ApproverName) 设置签署方经办人姓名
 * @method string getApproverMobile() 获取签署方经办人手机号码
 * @method void setApproverMobile(string $ApproverMobile) 设置签署方经办人手机号码
 * @method string getApproverIdCardNumber() 获取签署方经办人证件号码
 * @method void setApproverIdCardNumber(string $ApproverIdCardNumber) 设置签署方经办人证件号码
 * @method string getApproverIdCardType() 获取签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method void setApproverIdCardType(string $ApproverIdCardType) 设置签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
 * @method string getRecipientId() 获取签署方经办人在模板中的角色ID
 * @method void setRecipientId(string $RecipientId) 设置签署方经办人在模板中的角色ID
 * @method string getUserId() 获取签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个
 * @method void setUserId(string $UserId) 设置签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个
 * @method boolean getIsFullText() 获取签署前置条件：是否需要阅读全文，默认为不需要
 * @method void setIsFullText(boolean $IsFullText) 设置签署前置条件：是否需要阅读全文，默认为不需要
 * @method integer getPreReadTime() 获取签署前置条件：阅读时长限制，默认为不需要
 * @method void setPreReadTime(integer $PreReadTime) 设置签署前置条件：阅读时长限制，默认为不需要
 * @method string getNotifyType() 获取是否发送短信，sms--短信通知，none--不通知，默认为sms
 * @method void setNotifyType(string $NotifyType) 设置是否发送短信，sms--短信通知，none--不通知，默认为sms
 */
class FlowCreateApprover extends AbstractModel
{
    /**
     * @var integer 签署方类型 (0为企业/1为个人)
     */
    public $ApproverType;

    /**
     * @var string 如果签署方为企业，需要填入企业全称
     */
    public $OrganizationName;

    /**
     * @var boolean 是否需要签署
- `false`: 不需要签署
-  `true`:  需要签署
     */
    public $Required;

    /**
     * @var string 签署方经办人姓名
     */
    public $ApproverName;

    /**
     * @var string 签署方经办人手机号码
     */
    public $ApproverMobile;

    /**
     * @var string 签署方经办人证件号码
     */
    public $ApproverIdCardNumber;

    /**
     * @var string 签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     */
    public $ApproverIdCardType;

    /**
     * @var string 签署方经办人在模板中的角色ID
     */
    public $RecipientId;

    /**
     * @var string 签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个
     */
    public $UserId;

    /**
     * @var boolean 签署前置条件：是否需要阅读全文，默认为不需要
     */
    public $IsFullText;

    /**
     * @var integer 签署前置条件：阅读时长限制，默认为不需要
     */
    public $PreReadTime;

    /**
     * @var string 是否发送短信，sms--短信通知，none--不通知，默认为sms
     */
    public $NotifyType;

    /**
     * @param integer $ApproverType 签署方类型 (0为企业/1为个人)
     * @param string $OrganizationName 如果签署方为企业，需要填入企业全称
     * @param boolean $Required 是否需要签署
- `false`: 不需要签署
-  `true`:  需要签署
     * @param string $ApproverName 签署方经办人姓名
     * @param string $ApproverMobile 签署方经办人手机号码
     * @param string $ApproverIdCardNumber 签署方经办人证件号码
     * @param string $ApproverIdCardType 签署方经办人证件类型ID_CARD 身份证
HONGKONG_AND_MACAO 港澳居民来往内地通行证
HONGKONG_MACAO_AND_TAIWAN 港澳台居民居住证(格式同居民身份证)
     * @param string $RecipientId 签署方经办人在模板中的角色ID
     * @param string $UserId 签署方经办人的用户ID,和签署方经办人姓名+手机号+证件必须有一个
     * @param boolean $IsFullText 签署前置条件：是否需要阅读全文，默认为不需要
     * @param integer $PreReadTime 签署前置条件：阅读时长限制，默认为不需要
     * @param string $NotifyType 是否发送短信，sms--短信通知，none--不通知，默认为sms
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

        if (array_key_exists("Required",$param) and $param["Required"] !== null) {
            $this->Required = $param["Required"];
        }

        if (array_key_exists("ApproverName",$param) and $param["ApproverName"] !== null) {
            $this->ApproverName = $param["ApproverName"];
        }

        if (array_key_exists("ApproverMobile",$param) and $param["ApproverMobile"] !== null) {
            $this->ApproverMobile = $param["ApproverMobile"];
        }

        if (array_key_exists("ApproverIdCardNumber",$param) and $param["ApproverIdCardNumber"] !== null) {
            $this->ApproverIdCardNumber = $param["ApproverIdCardNumber"];
        }

        if (array_key_exists("ApproverIdCardType",$param) and $param["ApproverIdCardType"] !== null) {
            $this->ApproverIdCardType = $param["ApproverIdCardType"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("IsFullText",$param) and $param["IsFullText"] !== null) {
            $this->IsFullText = $param["IsFullText"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("NotifyType",$param) and $param["NotifyType"] !== null) {
            $this->NotifyType = $param["NotifyType"];
        }
    }
}
