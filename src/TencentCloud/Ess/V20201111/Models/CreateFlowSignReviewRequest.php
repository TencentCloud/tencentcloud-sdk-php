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
 * CreateFlowSignReview请求参数结构体
 *
 * @method UserInfo getOperator() 获取调用方用户信息，userId 必填
 * @method void setOperator(UserInfo $Operator) 设置调用方用户信息，userId 必填
 * @method string getFlowId() 获取签署流程编号
 * @method void setFlowId(string $FlowId) 设置签署流程编号
 * @method string getReviewType() 获取企业内部审核结果
PASS: 通过 
REJECT: 拒绝
 * @method void setReviewType(string $ReviewType) 设置企业内部审核结果
PASS: 通过 
REJECT: 拒绝
 * @method string getReviewMessage() 获取审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
 * @method void setReviewMessage(string $ReviewMessage) 设置审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method string getRecipientId() 获取审核签署节点使用 非必填 如果填写则审核该签署节点。给个人审核时必填。
 * @method void setRecipientId(string $RecipientId) 设置审核签署节点使用 非必填 如果填写则审核该签署节点。给个人审核时必填。
 * @method string getOperateType() 获取操作类型：
操作类型，默认：SignReview；SignReview:签署审核
注：接口通过该字段区分操作类型
该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程
若发起个人审核，则指定该字段为：SignReview（注意，给个人审核时，需联系客户经理开白使用）
 * @method void setOperateType(string $OperateType) 设置操作类型：
操作类型，默认：SignReview；SignReview:签署审核
注：接口通过该字段区分操作类型
该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程
若发起个人审核，则指定该字段为：SignReview（注意，给个人审核时，需联系客户经理开白使用）
 */
class CreateFlowSignReviewRequest extends AbstractModel
{
    /**
     * @var UserInfo 调用方用户信息，userId 必填
     */
    public $Operator;

    /**
     * @var string 签署流程编号
     */
    public $FlowId;

    /**
     * @var string 企业内部审核结果
PASS: 通过 
REJECT: 拒绝
     */
    public $ReviewType;

    /**
     * @var string 审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
     */
    public $ReviewMessage;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var string 审核签署节点使用 非必填 如果填写则审核该签署节点。给个人审核时必填。
     */
    public $RecipientId;

    /**
     * @var string 操作类型：
操作类型，默认：SignReview；SignReview:签署审核
注：接口通过该字段区分操作类型
该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程
若发起个人审核，则指定该字段为：SignReview（注意，给个人审核时，需联系客户经理开白使用）
     */
    public $OperateType;

    /**
     * @param UserInfo $Operator 调用方用户信息，userId 必填
     * @param string $FlowId 签署流程编号
     * @param string $ReviewType 企业内部审核结果
PASS: 通过 
REJECT: 拒绝
     * @param string $ReviewMessage 审核原因 
当ReviewType 是REJECT 时此字段必填,字符串长度不超过200
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param string $RecipientId 审核签署节点使用 非必填 如果填写则审核该签署节点。给个人审核时必填。
     * @param string $OperateType 操作类型：
操作类型，默认：SignReview；SignReview:签署审核
注：接口通过该字段区分操作类型
该字段不传或者为空，则默认为SignReview签署审核，走签署审核流程
若发起个人审核，则指定该字段为：SignReview（注意，给个人审核时，需联系客户经理开白使用）
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

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("ReviewType",$param) and $param["ReviewType"] !== null) {
            $this->ReviewType = $param["ReviewType"];
        }

        if (array_key_exists("ReviewMessage",$param) and $param["ReviewMessage"] !== null) {
            $this->ReviewMessage = $param["ReviewMessage"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("RecipientId",$param) and $param["RecipientId"] !== null) {
            $this->RecipientId = $param["RecipientId"];
        }

        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }
    }
}
