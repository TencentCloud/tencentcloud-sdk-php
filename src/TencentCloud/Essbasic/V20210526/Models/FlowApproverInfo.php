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
 * 创建流程签署人入参
 *
 * @method string getName() 获取签署人姓名
 * @method void setName(string $Name) 设置签署人姓名
 * @method string getIdCardNumber() 获取经办人身份证号
 * @method void setIdCardNumber(string $IdCardNumber) 设置经办人身份证号
 * @method string getMobile() 获取签署人手机号，脱敏显示
 * @method void setMobile(string $Mobile) 设置签署人手机号，脱敏显示
 * @method string getJumpUrl() 获取签署完前端跳转的url，暂未使用
 * @method void setJumpUrl(string $JumpUrl) 设置签署完前端跳转的url，暂未使用
 * @method integer getDeadline() 获取签署截止时间
 * @method void setDeadline(integer $Deadline) 设置签署截止时间
 * @method string getCallbackUrl() 获取签署完回调url
 * @method void setCallbackUrl(string $CallbackUrl) 设置签署完回调url
 * @method string getApproverType() 获取签署人类型，PERSON和ORGANIZATION
 * @method void setApproverType(string $ApproverType) 设置签署人类型，PERSON和ORGANIZATION
 * @method string getOpenId() 获取用户侧第三方id
 * @method void setOpenId(string $OpenId) 设置用户侧第三方id
 * @method integer getPreReadTime() 获取合同的强制预览时间：3~300s，未指定则按合同页数计算
 * @method void setPreReadTime(integer $PreReadTime) 设置合同的强制预览时间：3~300s，未指定则按合同页数计算
 * @method array getComponentLimitType() 获取个人签署方指定签署控件类型，目前仅支持：OCR_ESIGN(AI智慧手写签名)
 * @method void setComponentLimitType(array $ComponentLimitType) 设置个人签署方指定签署控件类型，目前仅支持：OCR_ESIGN(AI智慧手写签名)
 * @method string getRecipientId() 获取流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在流程中的位置；
 * @method void setRecipientId(string $RecipientId) 设置流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在流程中的位置；
 * @method string getOrganizationName() 获取同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
 * @method void setOrganizationName(string $OrganizationName) 设置同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
 * @method string getOrganizationOpenId() 获取同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
 * @method void setOrganizationOpenId(string $OrganizationOpenId) 设置同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
 */
class FlowApproverInfo extends AbstractModel
{
    /**
     * @var string 签署人姓名
     */
    public $Name;

    /**
     * @var string 经办人身份证号
     */
    public $IdCardNumber;

    /**
     * @var string 签署人手机号，脱敏显示
     */
    public $Mobile;

    /**
     * @var string 签署完前端跳转的url，暂未使用
     */
    public $JumpUrl;

    /**
     * @var integer 签署截止时间
     */
    public $Deadline;

    /**
     * @var string 签署完回调url
     */
    public $CallbackUrl;

    /**
     * @var string 签署人类型，PERSON和ORGANIZATION
     */
    public $ApproverType;

    /**
     * @var string 用户侧第三方id
     */
    public $OpenId;

    /**
     * @var integer 合同的强制预览时间：3~300s，未指定则按合同页数计算
     */
    public $PreReadTime;

    /**
     * @var array 个人签署方指定签署控件类型，目前仅支持：OCR_ESIGN(AI智慧手写签名)
     */
    public $ComponentLimitType;

    /**
     * @var string 流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在流程中的位置；
     */
    public $RecipientId;

    /**
     * @var string 同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
     */
    public $OrganizationName;

    /**
     * @var string 同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
     */
    public $OrganizationOpenId;

    /**
     * @param string $Name 签署人姓名
     * @param string $IdCardNumber 经办人身份证号
     * @param string $Mobile 签署人手机号，脱敏显示
     * @param string $JumpUrl 签署完前端跳转的url，暂未使用
     * @param integer $Deadline 签署截止时间
     * @param string $CallbackUrl 签署完回调url
     * @param string $ApproverType 签署人类型，PERSON和ORGANIZATION
     * @param string $OpenId 用户侧第三方id
     * @param integer $PreReadTime 合同的强制预览时间：3~300s，未指定则按合同页数计算
     * @param array $ComponentLimitType 个人签署方指定签署控件类型，目前仅支持：OCR_ESIGN(AI智慧手写签名)
     * @param string $RecipientId 流程签署人在模板中对应的签署人Id；在非单方签署、以及非B2C签署的场景下必传，用于指定当前签署方在流程中的位置；
     * @param string $OrganizationName 同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
     * @param string $OrganizationOpenId 同一渠道下其他合作企业OpenId，签署人为非发起方企业员工场景下必传；
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

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ApproverType",$param) and $param["ApproverType"] !== null) {
            $this->ApproverType = $param["ApproverType"];
        }

        if (array_key_exists("OpenId",$param) and $param["OpenId"] !== null) {
            $this->OpenId = $param["OpenId"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("ComponentLimitType",$param) and $param["ComponentLimitType"] !== null) {
            $this->ComponentLimitType = $param["ComponentLimitType"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("OrganizationName",$param) and $param["OrganizationName"] !== null) {
            $this->OrganizationName = $param["OrganizationName"];
        }

        if (array_key_exists("OrganizationOpenId",$param) and $param["OrganizationOpenId"] !== null) {
            $this->OrganizationOpenId = $param["OrganizationOpenId"];
        }
    }
}
