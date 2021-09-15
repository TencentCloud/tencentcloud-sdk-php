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
namespace TencentCloud\Essbasic\V20201222\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendFlow请求参数结构体
 *
 * @method Caller getCaller() 获取调用方信息
 * @method void setCaller(Caller $Caller) 设置调用方信息
 * @method string getFlowId() 获取需要推送合同的流程ID
 * @method void setFlowId(string $FlowId) 设置需要推送合同的流程ID
 * @method string getUserId() 获取签署人用户ID
 * @method void setUserId(string $UserId) 设置签署人用户ID
 * @method array getSignComponents() 获取签署控件信息 (支持添加多个控件)
 * @method void setSignComponents(array $SignComponents) 设置签署控件信息 (支持添加多个控件)
 * @method string getMobile() 获取签署人手机号 (如果选择短信验证码签署，则此字段必填)
 * @method void setMobile(string $Mobile) 设置签署人手机号 (如果选择短信验证码签署，则此字段必填)
 * @method string getSubOrganizationId() 获取签署人对应的子机构ID，个人签署者此字段不填
 * @method void setSubOrganizationId(string $SubOrganizationId) 设置签署人对应的子机构ID，个人签署者此字段不填
 * @method array getVerifyChannel() 获取签名后校验方式：
1. WEIXINAPP - 微信小程序；
2. FACEID - 慧眼 (默认) ；
3. VERIFYCODE - 验证码；
4. NONE - 无。此选项为白名单参数，暂不支持公开调用。如需开通权限，请通过客户经理或邮件至e-contract@tencent.com与我们联系；
5. THIRD - 第三方 (暂不支持)
 * @method void setVerifyChannel(array $VerifyChannel) 设置签名后校验方式：
1. WEIXINAPP - 微信小程序；
2. FACEID - 慧眼 (默认) ；
3. VERIFYCODE - 验证码；
4. NONE - 无。此选项为白名单参数，暂不支持公开调用。如需开通权限，请通过客户经理或邮件至e-contract@tencent.com与我们联系；
5. THIRD - 第三方 (暂不支持)
 * @method integer getDeadline() 获取签署链接失效截止时间，默认为7天
 * @method void setDeadline(integer $Deadline) 设置签署链接失效截止时间，默认为7天
 * @method boolean getIsLastApprover() 获取是否为最后一个签署人。若为最后一人，本次签署完成以后自动归档。
 * @method void setIsLastApprover(boolean $IsLastApprover) 设置是否为最后一个签署人。若为最后一人，本次签署完成以后自动归档。
 * @method string getJumpUrl() 获取签署完成后，前端跳转的URL
 * @method void setJumpUrl(string $JumpUrl) 设置签署完成后，前端跳转的URL
 * @method SmsTemplate getSmsTemplate() 获取短信模板。默认使用腾讯电子签官方短信模板，如有自定义需求，请通过客户经理或邮件至e-contract@tencent.com与我们联系。
 * @method void setSmsTemplate(SmsTemplate $SmsTemplate) 设置短信模板。默认使用腾讯电子签官方短信模板，如有自定义需求，请通过客户经理或邮件至e-contract@tencent.com与我们联系。
 * @method boolean getIsFullText() 获取签署前置条件：是否要全文阅读，默认否
 * @method void setIsFullText(boolean $IsFullText) 设置签署前置条件：是否要全文阅读，默认否
 * @method integer getPreReadTime() 获取签署前置条件：强制用户阅读待签署文件时长，默认不限制
 * @method void setPreReadTime(integer $PreReadTime) 设置签署前置条件：强制用户阅读待签署文件时长，默认不限制
 * @method boolean getCanOffLine() 获取当前参与者是否支持线下核身,默认为不支持
 * @method void setCanOffLine(boolean $CanOffLine) 设置当前参与者是否支持线下核身,默认为不支持
 * @method string getCallbackUrl() 获取签署任务的回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置签署任务的回调地址
 */
class SendFlowRequest extends AbstractModel
{
    /**
     * @var Caller 调用方信息
     */
    public $Caller;

    /**
     * @var string 需要推送合同的流程ID
     */
    public $FlowId;

    /**
     * @var string 签署人用户ID
     */
    public $UserId;

    /**
     * @var array 签署控件信息 (支持添加多个控件)
     */
    public $SignComponents;

    /**
     * @var string 签署人手机号 (如果选择短信验证码签署，则此字段必填)
     */
    public $Mobile;

    /**
     * @var string 签署人对应的子机构ID，个人签署者此字段不填
     */
    public $SubOrganizationId;

    /**
     * @var array 签名后校验方式：
1. WEIXINAPP - 微信小程序；
2. FACEID - 慧眼 (默认) ；
3. VERIFYCODE - 验证码；
4. NONE - 无。此选项为白名单参数，暂不支持公开调用。如需开通权限，请通过客户经理或邮件至e-contract@tencent.com与我们联系；
5. THIRD - 第三方 (暂不支持)
     */
    public $VerifyChannel;

    /**
     * @var integer 签署链接失效截止时间，默认为7天
     */
    public $Deadline;

    /**
     * @var boolean 是否为最后一个签署人。若为最后一人，本次签署完成以后自动归档。
     */
    public $IsLastApprover;

    /**
     * @var string 签署完成后，前端跳转的URL
     */
    public $JumpUrl;

    /**
     * @var SmsTemplate 短信模板。默认使用腾讯电子签官方短信模板，如有自定义需求，请通过客户经理或邮件至e-contract@tencent.com与我们联系。
     */
    public $SmsTemplate;

    /**
     * @var boolean 签署前置条件：是否要全文阅读，默认否
     */
    public $IsFullText;

    /**
     * @var integer 签署前置条件：强制用户阅读待签署文件时长，默认不限制
     */
    public $PreReadTime;

    /**
     * @var boolean 当前参与者是否支持线下核身,默认为不支持
     */
    public $CanOffLine;

    /**
     * @var string 签署任务的回调地址
     */
    public $CallbackUrl;

    /**
     * @param Caller $Caller 调用方信息
     * @param string $FlowId 需要推送合同的流程ID
     * @param string $UserId 签署人用户ID
     * @param array $SignComponents 签署控件信息 (支持添加多个控件)
     * @param string $Mobile 签署人手机号 (如果选择短信验证码签署，则此字段必填)
     * @param string $SubOrganizationId 签署人对应的子机构ID，个人签署者此字段不填
     * @param array $VerifyChannel 签名后校验方式：
1. WEIXINAPP - 微信小程序；
2. FACEID - 慧眼 (默认) ；
3. VERIFYCODE - 验证码；
4. NONE - 无。此选项为白名单参数，暂不支持公开调用。如需开通权限，请通过客户经理或邮件至e-contract@tencent.com与我们联系；
5. THIRD - 第三方 (暂不支持)
     * @param integer $Deadline 签署链接失效截止时间，默认为7天
     * @param boolean $IsLastApprover 是否为最后一个签署人。若为最后一人，本次签署完成以后自动归档。
     * @param string $JumpUrl 签署完成后，前端跳转的URL
     * @param SmsTemplate $SmsTemplate 短信模板。默认使用腾讯电子签官方短信模板，如有自定义需求，请通过客户经理或邮件至e-contract@tencent.com与我们联系。
     * @param boolean $IsFullText 签署前置条件：是否要全文阅读，默认否
     * @param integer $PreReadTime 签署前置条件：强制用户阅读待签署文件时长，默认不限制
     * @param boolean $CanOffLine 当前参与者是否支持线下核身,默认为不支持
     * @param string $CallbackUrl 签署任务的回调地址
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
        if (array_key_exists("Caller",$param) and $param["Caller"] !== null) {
            $this->Caller = new Caller();
            $this->Caller->deserialize($param["Caller"]);
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("SignComponents",$param) and $param["SignComponents"] !== null) {
            $this->SignComponents = [];
            foreach ($param["SignComponents"] as $key => $value){
                $obj = new Component();
                $obj->deserialize($value);
                array_push($this->SignComponents, $obj);
            }
        }

        if (array_key_exists("Mobile",$param) and $param["Mobile"] !== null) {
            $this->Mobile = $param["Mobile"];
        }

        if (array_key_exists("SubOrganizationId",$param) and $param["SubOrganizationId"] !== null) {
            $this->SubOrganizationId = $param["SubOrganizationId"];
        }

        if (array_key_exists("VerifyChannel",$param) and $param["VerifyChannel"] !== null) {
            $this->VerifyChannel = $param["VerifyChannel"];
        }

        if (array_key_exists("Deadline",$param) and $param["Deadline"] !== null) {
            $this->Deadline = $param["Deadline"];
        }

        if (array_key_exists("IsLastApprover",$param) and $param["IsLastApprover"] !== null) {
            $this->IsLastApprover = $param["IsLastApprover"];
        }

        if (array_key_exists("JumpUrl",$param) and $param["JumpUrl"] !== null) {
            $this->JumpUrl = $param["JumpUrl"];
        }

        if (array_key_exists("SmsTemplate",$param) and $param["SmsTemplate"] !== null) {
            $this->SmsTemplate = new SmsTemplate();
            $this->SmsTemplate->deserialize($param["SmsTemplate"]);
        }

        if (array_key_exists("IsFullText",$param) and $param["IsFullText"] !== null) {
            $this->IsFullText = $param["IsFullText"];
        }

        if (array_key_exists("PreReadTime",$param) and $param["PreReadTime"] !== null) {
            $this->PreReadTime = $param["PreReadTime"];
        }

        if (array_key_exists("CanOffLine",$param) and $param["CanOffLine"] !== null) {
            $this->CanOffLine = $param["CanOffLine"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
