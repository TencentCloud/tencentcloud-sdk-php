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
 * ChannelCreatePrepareFlow请求参数结构体
 *
 * @method string getResourceId() 获取资源id，与ResourceType对应
 * @method void setResourceId(string $ResourceId) 设置资源id，与ResourceType对应
 * @method integer getResourceType() 获取资源类型，1：模板，目前仅支持模板，与ResourceId对应
 * @method void setResourceType(integer $ResourceType) 设置资源类型，1：模板，目前仅支持模板，与ResourceId对应
 * @method BaseFlowInfo getFlowInfo() 获取合同流程基础信息
 * @method void setFlowInfo(BaseFlowInfo $FlowInfo) 设置合同流程基础信息
 * @method array getFlowApproverList() 获取合同签署人信息
 * @method void setFlowApproverList(array $FlowApproverList) 设置合同签署人信息
 * @method Agent getAgent() 获取应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填
 * @method void setAgent(Agent $Agent) 设置应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填
 * @method CreateFlowOption getFlowOption() 获取合同流程配置信息
 * @method void setFlowOption(CreateFlowOption $FlowOption) 设置合同流程配置信息
 * @method string getFlowId() 获取该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
 * @method void setFlowId(string $FlowId) 设置该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
 * @method boolean getNeedPreview() 获取该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
 * @method void setNeedPreview(boolean $NeedPreview) 设置该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
 * @method OrganizationInfo getOrganization() 获取企业机构信息，不用传
 * @method void setOrganization(OrganizationInfo $Organization) 设置企业机构信息，不用传
 * @method UserInfo getOperator() 获取操作人（用户）信息，不用传
 * @method void setOperator(UserInfo $Operator) 设置操作人（用户）信息，不用传
 */
class ChannelCreatePrepareFlowRequest extends AbstractModel
{
    /**
     * @var string 资源id，与ResourceType对应
     */
    public $ResourceId;

    /**
     * @var integer 资源类型，1：模板，目前仅支持模板，与ResourceId对应
     */
    public $ResourceType;

    /**
     * @var BaseFlowInfo 合同流程基础信息
     */
    public $FlowInfo;

    /**
     * @var array 合同签署人信息
     */
    public $FlowApproverList;

    /**
     * @var Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填
     */
    public $Agent;

    /**
     * @var CreateFlowOption 合同流程配置信息
     */
    public $FlowOption;

    /**
     * @var string 该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
     */
    public $FlowId;

    /**
     * @var boolean 该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
     */
    public $NeedPreview;

    /**
     * @var OrganizationInfo 企业机构信息，不用传
     */
    public $Organization;

    /**
     * @var UserInfo 操作人（用户）信息，不用传
     */
    public $Operator;

    /**
     * @param string $ResourceId 资源id，与ResourceType对应
     * @param integer $ResourceType 资源类型，1：模板，目前仅支持模板，与ResourceId对应
     * @param BaseFlowInfo $FlowInfo 合同流程基础信息
     * @param array $FlowApproverList 合同签署人信息
     * @param Agent $Agent 应用相关信息。 此接口Agent.ProxyOrganizationOpenId、Agent. ProxyOperator.OpenId、Agent.AppId 和 Agent.ProxyAppId 均必填
     * @param CreateFlowOption $FlowOption 合同流程配置信息
     * @param string $FlowId 该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
     * @param boolean $NeedPreview 该参数不可用，请通过获取 web 可嵌入接口获取合同流程预览 URL
     * @param OrganizationInfo $Organization 企业机构信息，不用传
     * @param UserInfo $Operator 操作人（用户）信息，不用传
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("FlowInfo",$param) and $param["FlowInfo"] !== null) {
            $this->FlowInfo = new BaseFlowInfo();
            $this->FlowInfo->deserialize($param["FlowInfo"]);
        }

        if (array_key_exists("FlowApproverList",$param) and $param["FlowApproverList"] !== null) {
            $this->FlowApproverList = [];
            foreach ($param["FlowApproverList"] as $key => $value){
                $obj = new CommonFlowApprover();
                $obj->deserialize($value);
                array_push($this->FlowApproverList, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowOption",$param) and $param["FlowOption"] !== null) {
            $this->FlowOption = new CreateFlowOption();
            $this->FlowOption->deserialize($param["FlowOption"]);
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("NeedPreview",$param) and $param["NeedPreview"] !== null) {
            $this->NeedPreview = $param["NeedPreview"];
        }

        if (array_key_exists("Organization",$param) and $param["Organization"] !== null) {
            $this->Organization = new OrganizationInfo();
            $this->Organization->deserialize($param["Organization"]);
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = new UserInfo();
            $this->Operator->deserialize($param["Operator"]);
        }
    }
}
