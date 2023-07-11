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
 * 此结构体(FlowGroupOptions)描述的是合同组的个性化配置，支持控制是否发送短信、未实名个人签署方查看合同组时是否需要实名认证（仅在合同组文件发起配置时生效）
 *
 * @method string getApproverVerifyType() 获取发起合同（流程）组的合同（流程）签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method void setApproverVerifyType(string $ApproverVerifyType) 设置发起合同（流程）组的合同（流程）签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
 * @method string getSelfOrganizationApproverNotifyType() 获取发起合同（流程）组本方企业经办人通知方式
签署通知类型：sms--短信，none--不通知
 * @method void setSelfOrganizationApproverNotifyType(string $SelfOrganizationApproverNotifyType) 设置发起合同（流程）组本方企业经办人通知方式
签署通知类型：sms--短信，none--不通知
 * @method string getOtherApproverNotifyType() 获取发起合同（流程）组他方经办人通知方式
签署通知类型：sms--短信，none--不通知
 * @method void setOtherApproverNotifyType(string $OtherApproverNotifyType) 设置发起合同（流程）组他方经办人通知方式
签署通知类型：sms--短信，none--不通知
 */
class FlowGroupOptions extends AbstractModel
{
    /**
     * @var string 发起合同（流程）组的合同（流程）签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     */
    public $ApproverVerifyType;

    /**
     * @var string 发起合同（流程）组本方企业经办人通知方式
签署通知类型：sms--短信，none--不通知
     */
    public $SelfOrganizationApproverNotifyType;

    /**
     * @var string 发起合同（流程）组他方经办人通知方式
签署通知类型：sms--短信，none--不通知
     */
    public $OtherApproverNotifyType;

    /**
     * @param string $ApproverVerifyType 发起合同（流程）组的合同（流程）签署人校验方式
VerifyCheck: 人脸识别（默认）
MobileCheck：手机号验证
参数说明：此参数仅在合同组文件发起有效，可选人脸识别或手机号验证两种方式，若选择后者，未实名个人签署方在签署合同时，无需经过实名认证和意愿确认两次人脸识别，该能力仅适用于个人签署方。
     * @param string $SelfOrganizationApproverNotifyType 发起合同（流程）组本方企业经办人通知方式
签署通知类型：sms--短信，none--不通知
     * @param string $OtherApproverNotifyType 发起合同（流程）组他方经办人通知方式
签署通知类型：sms--短信，none--不通知
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
        if (array_key_exists("ApproverVerifyType",$param) and $param["ApproverVerifyType"] !== null) {
            $this->ApproverVerifyType = $param["ApproverVerifyType"];
        }

        if (array_key_exists("SelfOrganizationApproverNotifyType",$param) and $param["SelfOrganizationApproverNotifyType"] !== null) {
            $this->SelfOrganizationApproverNotifyType = $param["SelfOrganizationApproverNotifyType"];
        }

        if (array_key_exists("OtherApproverNotifyType",$param) and $param["OtherApproverNotifyType"] !== null) {
            $this->OtherApproverNotifyType = $param["OtherApproverNotifyType"];
        }
    }
}
