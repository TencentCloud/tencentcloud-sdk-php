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
 * ChannelCreateMultiFlowSignQRCode请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
 * @method string getTemplateId() 获取模版ID
 * @method void setTemplateId(string $TemplateId) 设置模版ID
 * @method string getFlowName() 获取签署流程名称，最大长度200个字符。
 * @method void setFlowName(string $FlowName) 设置签署流程名称，最大长度200个字符。
 * @method integer getMaxFlowNum() 获取最大可发起签署流程份数，默认5份；发起签署流程数量超过此上限后，二维码自动失效。
 * @method void setMaxFlowNum(integer $MaxFlowNum) 设置最大可发起签署流程份数，默认5份；发起签署流程数量超过此上限后，二维码自动失效。
 * @method integer getFlowEffectiveDay() 获取签署流程有效天数 默认7天 最高设置不超过30天
 * @method void setFlowEffectiveDay(integer $FlowEffectiveDay) 设置签署流程有效天数 默认7天 最高设置不超过30天
 * @method integer getQrEffectiveDay() 获取二维码有效天数 默认7天 最高设置不超过90天
 * @method void setQrEffectiveDay(integer $QrEffectiveDay) 设置二维码有效天数 默认7天 最高设置不超过90天
 * @method array getRestrictions() 获取限制二维码用户条件
 * @method void setRestrictions(array $Restrictions) 设置限制二维码用户条件
 * @method string getCallbackUrl() 获取回调地址，最大长度1000个字符
不传默认使用第三方应用号配置的回调地址
回调时机:用户通过签署二维码发起合同时，企业额度不足导致失败
 * @method void setCallbackUrl(string $CallbackUrl) 设置回调地址，最大长度1000个字符
不传默认使用第三方应用号配置的回调地址
回调时机:用户通过签署二维码发起合同时，企业额度不足导致失败
 * @method ApproverRestriction getApproverRestrictions() 获取限制二维码用户条件（已弃用）
 * @method void setApproverRestrictions(ApproverRestriction $ApproverRestrictions) 设置限制二维码用户条件（已弃用）
 * @method UserInfo getOperator() 获取暂未开放
 * @method void setOperator(UserInfo $Operator) 设置暂未开放
 */
class ChannelCreateMultiFlowSignQRCodeRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     */
    public $Agent;

    /**
     * @var string 模版ID
     */
    public $TemplateId;

    /**
     * @var string 签署流程名称，最大长度200个字符。
     */
    public $FlowName;

    /**
     * @var integer 最大可发起签署流程份数，默认5份；发起签署流程数量超过此上限后，二维码自动失效。
     */
    public $MaxFlowNum;

    /**
     * @var integer 签署流程有效天数 默认7天 最高设置不超过30天
     */
    public $FlowEffectiveDay;

    /**
     * @var integer 二维码有效天数 默认7天 最高设置不超过90天
     */
    public $QrEffectiveDay;

    /**
     * @var array 限制二维码用户条件
     */
    public $Restrictions;

    /**
     * @var string 回调地址，最大长度1000个字符
不传默认使用第三方应用号配置的回调地址
回调时机:用户通过签署二维码发起合同时，企业额度不足导致失败
     */
    public $CallbackUrl;

    /**
     * @var ApproverRestriction 限制二维码用户条件（已弃用）
     */
    public $ApproverRestrictions;

    /**
     * @var UserInfo 暂未开放
     */
    public $Operator;

    /**
     * @param Agent $Agent 应用相关信息。
此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 必填。
     * @param string $TemplateId 模版ID
     * @param string $FlowName 签署流程名称，最大长度200个字符。
     * @param integer $MaxFlowNum 最大可发起签署流程份数，默认5份；发起签署流程数量超过此上限后，二维码自动失效。
     * @param integer $FlowEffectiveDay 签署流程有效天数 默认7天 最高设置不超过30天
     * @param integer $QrEffectiveDay 二维码有效天数 默认7天 最高设置不超过90天
     * @param array $Restrictions 限制二维码用户条件
     * @param string $CallbackUrl 回调地址，最大长度1000个字符
不传默认使用第三方应用号配置的回调地址
回调时机:用户通过签署二维码发起合同时，企业额度不足导致失败
     * @param ApproverRestriction $ApproverRestrictions 限制二维码用户条件（已弃用）
     * @param UserInfo $Operator 暂未开放
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
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

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }

        if (array_key_exists("ApproverRestrictions",$param) and $param["ApproverRestrictions"] !== null) {
            $this->ApproverRestrictions = new ApproverRestriction();
            $this->ApproverRestrictions->deserialize($param["ApproverRestrictions"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
