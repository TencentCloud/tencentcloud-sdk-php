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
 * CreateFlowSignUrl请求参数结构体
 *
 * @method string getFlowId() 获取流程编号
 * @method void setFlowId(string $FlowId) 设置流程编号
 * @method array getFlowApproverInfos() 获取流程签署人，其中ApproverName，ApproverMobile和ApproverType必传，其他可不传，ApproverType目前只支持个人类型的签署人。还需注意签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。
 * @method void setFlowApproverInfos(array $FlowApproverInfos) 设置流程签署人，其中ApproverName，ApproverMobile和ApproverType必传，其他可不传，ApproverType目前只支持个人类型的签署人。还需注意签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。
 * @method UserInfo getOperator() 获取用户信息，此结构体UserId必填
 * @method void setOperator(UserInfo $Operator) 设置用户信息，此结构体UserId必填
 * @method Agent getAgent() 获取代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method void setAgent(Agent $Agent) 设置代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
 * @method OrganizationInfo getOrganization() 获取机构信息，暂未开放
 * @method void setOrganization(OrganizationInfo $Organization) 设置机构信息，暂未开放
 */
class CreateFlowSignUrlRequest extends AbstractModel
{
    /**
     * @var string 流程编号
     */
    public $FlowId;

    /**
     * @var array 流程签署人，其中ApproverName，ApproverMobile和ApproverType必传，其他可不传，ApproverType目前只支持个人类型的签署人。还需注意签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。
     */
    public $FlowApproverInfos;

    /**
     * @var UserInfo 用户信息，此结构体UserId必填
     */
    public $Operator;

    /**
     * @var Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     */
    public $Agent;

    /**
     * @var OrganizationInfo 机构信息，暂未开放
     */
    public $Organization;

    /**
     * @param string $FlowId 流程编号
     * @param array $FlowApproverInfos 流程签署人，其中ApproverName，ApproverMobile和ApproverType必传，其他可不传，ApproverType目前只支持个人类型的签署人。还需注意签署人只能有手写签名和时间类型的签署控件，其他类型的填写控件和签署控件暂时都未支持。
     * @param UserInfo $Operator 用户信息，此结构体UserId必填
     * @param Agent $Agent 代理相关应用信息，如集团主企业代子企业操作的场景中ProxyOrganizationId必填
     * @param OrganizationInfo $Organization 机构信息，暂未开放
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
        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("FlowApproverInfos",$param) and $param["FlowApproverInfos"] !== null) {
            $this->FlowApproverInfos = [];
            foreach ($param["FlowApproverInfos"] as $key => $value){
                $obj = new FlowCreateApprover();
                $obj->deserialize($value);
                array_push($this->FlowApproverInfos, $obj);
            }
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }
    }
}
