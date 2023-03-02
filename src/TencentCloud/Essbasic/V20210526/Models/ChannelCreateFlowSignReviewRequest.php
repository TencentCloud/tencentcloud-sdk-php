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
 * ChannelCreateFlowSignReview请求参数结构体
 *
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
 * @method string getFlowId() 获取签署流程编号
 * @method void setFlowId(string $FlowId) 设置签署流程编号
 * @method string getReviewType() 获取企业内部审核结果
PASS: 通过
REJECT: 拒绝
SIGN_REJECT:拒签(流程结束)
 * @method void setReviewType(string $ReviewType) 设置企业内部审核结果
PASS: 通过
REJECT: 拒绝
SIGN_REJECT:拒签(流程结束)
 * @method string getReviewMessage() 获取审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
 * @method void setReviewMessage(string $ReviewMessage) 设置审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
 * @method string getRecipientId() 获取签署节点审核时需要指定
 * @method void setRecipientId(string $RecipientId) 设置签署节点审核时需要指定
 */
class ChannelCreateFlowSignReviewRequest extends AbstractModel
{
    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     */
    public $Agent;

    /**
     * @var string 签署流程编号
     */
    public $FlowId;

    /**
     * @var string 企业内部审核结果
PASS: 通过
REJECT: 拒绝
SIGN_REJECT:拒签(流程结束)
     */
    public $ReviewType;

    /**
     * @var string 审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
     */
    public $ReviewMessage;

    /**
     * @var string 签署节点审核时需要指定
     */
    public $RecipientId;

    /**
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填。
     * @param string $FlowId 签署流程编号
     * @param string $ReviewType 企业内部审核结果
PASS: 通过
REJECT: 拒绝
SIGN_REJECT:拒签(流程结束)
     * @param string $ReviewMessage 审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
     * @param string $RecipientId 签署节点审核时需要指定
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("ReviewType",$param) and $param["ReviewType"] !== null) {
            $this->ReviewType = $param["ReviewType"];
        }

        if (array_key_exists("ReviewMessage",$param) and $param["ReviewMessage"] !== null) {
            $this->ReviewMessage = $param["ReviewMessage"];
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }
    }
}
