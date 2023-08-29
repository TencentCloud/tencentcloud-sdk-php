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
 * CreateMultiFlowSignQRCode请求参数结构体
 *
 * @method UserInfo getOperator() 获取用户信息，其中UserId为必填参数
 * @method void setOperator(UserInfo $Operator) 设置用户信息，其中UserId为必填参数
 * @method string getTemplateId() 获取模板ID
 * @method void setTemplateId(string $TemplateId) 设置模板ID
 * @method string getFlowName() 获取签署流程名称，最大长度不超过200字符
 * @method void setFlowName(string $FlowName) 设置签署流程名称，最大长度不超过200字符
 * @method integer getMaxFlowNum() 获取最大可发起签署流程份数，默认5份 
<br/>发起流程数量超过此上限后二维码自动失效
 * @method void setMaxFlowNum(integer $MaxFlowNum) 设置最大可发起签署流程份数，默认5份 
<br/>发起流程数量超过此上限后二维码自动失效
 * @method integer getFlowEffectiveDay() 获取签署流程有效天数 
<br/>默认7天 
<br/>最高设置不超过30天
 * @method void setFlowEffectiveDay(integer $FlowEffectiveDay) 设置签署流程有效天数 
<br/>默认7天 
<br/>最高设置不超过30天
 * @method integer getQrEffectiveDay() 获取二维码有效天数 默认7天 最高设置不超过90天
 * @method void setQrEffectiveDay(integer $QrEffectiveDay) 设置二维码有效天数 默认7天 最高设置不超过90天
 * @method array getRestrictions() 获取指定的签署人信息
<br/>指定后，则只允许指定的签署人扫码签署
 * @method void setRestrictions(array $Restrictions) 设置指定的签署人信息
<br/>指定后，则只允许指定的签署人扫码签署
 * @method string getUserData() 获取用户自定义字段
<br/>回调的时候会进行透传，长度需要小于20480
 * @method void setUserData(string $UserData) 设置用户自定义字段
<br/>回调的时候会进行透传，长度需要小于20480
 * @method string getCallbackUrl() 获取已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

 * @method void setCallbackUrl(string $CallbackUrl) 设置已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method ApproverRestriction getApproverRestrictions() 获取限制二维码用户条件（已弃用）
 * @method void setApproverRestrictions(ApproverRestriction $ApproverRestrictions) 设置限制二维码用户条件（已弃用）
 */
class CreateMultiFlowSignQRCodeRequest extends AbstractModel
{
    /**
     * @var UserInfo 用户信息，其中UserId为必填参数
     */
    public $Operator;

    /**
     * @var string 模板ID
     */
    public $TemplateId;

    /**
     * @var string 签署流程名称，最大长度不超过200字符
     */
    public $FlowName;

    /**
     * @var integer 最大可发起签署流程份数，默认5份 
<br/>发起流程数量超过此上限后二维码自动失效
     */
    public $MaxFlowNum;

    /**
     * @var integer 签署流程有效天数 
<br/>默认7天 
<br/>最高设置不超过30天
     */
    public $FlowEffectiveDay;

    /**
     * @var integer 二维码有效天数 默认7天 最高设置不超过90天
     */
    public $QrEffectiveDay;

    /**
     * @var array 指定的签署人信息
<br/>指定后，则只允许指定的签署人扫码签署
     */
    public $Restrictions;

    /**
     * @var string 用户自定义字段
<br/>回调的时候会进行透传，长度需要小于20480
     */
    public $UserData;

    /**
     * @var string 已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

     * @deprecated
     */
    public $CallbackUrl;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var ApproverRestriction 限制二维码用户条件（已弃用）
     * @deprecated
     */
    public $ApproverRestrictions;

    /**
     * @param UserInfo $Operator 用户信息，其中UserId为必填参数
     * @param string $TemplateId 模板ID
     * @param string $FlowName 签署流程名称，最大长度不超过200字符
     * @param integer $MaxFlowNum 最大可发起签署流程份数，默认5份 
<br/>发起流程数量超过此上限后二维码自动失效
     * @param integer $FlowEffectiveDay 签署流程有效天数 
<br/>默认7天 
<br/>最高设置不超过30天
     * @param integer $QrEffectiveDay 二维码有效天数 默认7天 最高设置不超过90天
     * @param array $Restrictions 指定的签署人信息
<br/>指定后，则只允许指定的签署人扫码签署
     * @param string $UserData 用户自定义字段
<br/>回调的时候会进行透传，长度需要小于20480
     * @param string $CallbackUrl 已废弃，回调配置统一使用企业应用管理-应用集成-企业版应用中的配置 
<br/> 通过一码多扫二维码发起的合同，回调消息可参考文档 https://qian.tencent.com/developers/company/callback_types_contracts_sign
<br/> 用户通过签署二维码发起合同时，因企业额度不足导致失败 会触发签署二维码相关回调,具体参考文档 https://qian.tencent.com/developers/company/callback_types_commons#%E7%AD%BE%E7%BD%B2%E4%BA%8C%E7%BB%B4%E7%A0%81%E7%9B%B8%E5%85%B3%E5%9B%9E%E8%B0%83

     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param ApproverRestriction $ApproverRestrictions 限制二维码用户条件（已弃用）
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("FlowName",$param) and $param["FlowName"] !== null) {
            $this->FlowName = $param["FlowName"];
        }

        if (array_key_exists("MaxFlowNum",$param) and $param["MaxFlowNum"] !== null) {
            $this->MaxFlowNum = $param["MaxFlowNum"];
        }

        if (array_key_exists("FlowEffectiveDay",$param) and $param["FlowEffectiveDay"] !== null) {
            $this->FlowEffectiveDay = $param["FlowEffectiveDay"];
        }

        if (array_key_exists("QrEffectiveDay",$param) and $param["QrEffectiveDay"] !== null) {
            $this->QrEffectiveDay = $param["QrEffectiveDay"];
        }

        if (array_key_exists("Restrictions",$param) and $param["Restrictions"] !== null) {
            $this->Restrictions = [];
            foreach ($param["Restrictions"] as $key => $value){
                $obj = new ApproverRestriction();
                $obj->deserialize($value);
                array_push($this->Restrictions, $obj);
            }
        }

        if (array_key_exists("UserData",$param) and $param["UserData"] !== null) {
            $this->UserData = $param["UserData"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ApproverRestrictions",$param) and $param["ApproverRestrictions"] !== null) {
            $this->ApproverRestrictions = new ApproverRestriction();
            $this->ApproverRestrictions->deserialize($param["ApproverRestrictions"]);
        }
    }
}
