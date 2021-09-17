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
 * @method string getMobile() 获取签署人手机号，脱敏显示
 * @method void setMobile(string $Mobile) 设置签署人手机号，脱敏显示
 * @method string getIdCardNumber() 获取经办人身份证号
 * @method void setIdCardNumber(string $IdCardNumber) 设置经办人身份证号
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
 */
class FlowApproverInfo extends AbstractModel
{
    /**
     * @var string 签署人姓名
     */
    public $Name;

    /**
     * @var string 签署人手机号，脱敏显示
     */
    public $Mobile;

    /**
     * @var string 经办人身份证号
     */
    public $IdCardNumber;

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
     * @param string $Name 签署人姓名
     * @param string $Mobile 签署人手机号，脱敏显示
     * @param string $IdCardNumber 经办人身份证号
     * @param string $JumpUrl 签署完前端跳转的url，暂未使用
     * @param integer $Deadline 签署截止时间
     * @param string $CallbackUrl 签署完回调url
     * @param string $ApproverType 签署人类型，PERSON和ORGANIZATION
     * @param string $OpenId 用户侧第三方id
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

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("IdCardNumber",$param) and $param["IdCardNumber"] !== null) {
            $this->IdCardNumber = $param["IdCardNumber"];
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
    }
}
