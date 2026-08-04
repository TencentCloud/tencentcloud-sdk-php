<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * CreatePrepareFlowGroup请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getFlowGroupName() 获取<p>合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method void setFlowGroupName(string $FlowGroupName) 设置<p>合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
 * @method array getFlowGroupInfos() 获取<p>合同（流程）组的子合同信息，支持2-50个子合同</p>
 * @method void setFlowGroupInfos(array $FlowGroupInfos) 设置<p>合同（流程）组的子合同信息，支持2-50个子合同</p>
 * @method integer getResourceType() 获取<p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
 * @method void setResourceType(integer $ResourceType) 设置<p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method FlowGroupOptions getFlowGroupOptions() 获取<p>合同组发起控制参数，例如FlowGroupNeedWorkflow，表示开启嵌入式合同组发起审批</p>
 * @method void setFlowGroupOptions(FlowGroupOptions $FlowGroupOptions) 设置<p>合同组发起控制参数，例如FlowGroupNeedWorkflow，表示开启嵌入式合同组发起审批</p>
 * @method string getFlowGroupType() 获取<p>合同组类型，发起合同组后会应用到所有子合同</p>
 * @method void setFlowGroupType(string $FlowGroupType) 设置<p>合同组类型，发起合同组后会应用到所有子合同</p>
 * @method integer getFlowGroupDeadline() 获取<p>合同组过期时间，发起合同组后会应用到所有子合同</p>
 * @method void setFlowGroupDeadline(integer $FlowGroupDeadline) 设置<p>合同组过期时间，发起合同组后会应用到所有子合同</p>
 */
class CreatePrepareFlowGroupRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     */
    public $FlowGroupName;

    /**
     * @var array <p>合同（流程）组的子合同信息，支持2-50个子合同</p>
     */
    public $FlowGroupInfos;

    /**
     * @var integer <p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
     */
    public $ResourceType;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var FlowGroupOptions <p>合同组发起控制参数，例如FlowGroupNeedWorkflow，表示开启嵌入式合同组发起审批</p>
     */
    public $FlowGroupOptions;

    /**
     * @var string <p>合同组类型，发起合同组后会应用到所有子合同</p>
     */
    public $FlowGroupType;

    /**
     * @var integer <p>合同组过期时间，发起合同组后会应用到所有子合同</p>
     */
    public $FlowGroupDeadline;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $FlowGroupName <p>合同（流程）组名称（可自定义此名称），长度不能超过200，只能由中文、字母、数字和下划线组成。</p>
     * @param array $FlowGroupInfos <p>合同（流程）组的子合同信息，支持2-50个子合同</p>
     * @param integer $ResourceType <p>资源类型，取值有： <ul><li> <strong>1</strong>：模板</li> <li> <strong>2</strong>：文件</li></ul></p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param FlowGroupOptions $FlowGroupOptions <p>合同组发起控制参数，例如FlowGroupNeedWorkflow，表示开启嵌入式合同组发起审批</p>
     * @param string $FlowGroupType <p>合同组类型，发起合同组后会应用到所有子合同</p>
     * @param integer $FlowGroupDeadline <p>合同组过期时间，发起合同组后会应用到所有子合同</p>
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

        if (array_key_exists("FlowGroupName",$param) and $param["FlowGroupName"] !== null) {
            $this->FlowGroupName = $param["FlowGroupName"];
        }

        if (array_key_exists("FlowGroupInfos",$param) and $param["FlowGroupInfos"] !== null) {
            $this->FlowGroupInfos = [];
            foreach ($param["FlowGroupInfos"] as $key => $value){
                $obj = new FlowGroupInfo();
                $obj->deserialize($value);
                array_push($this->FlowGroupInfos, $obj);
            }
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("FlowGroupOptions",$param) and $param["FlowGroupOptions"] !== null) {
            $this->FlowGroupOptions = new FlowGroupOptions();
            $this->FlowGroupOptions->deserialize($param["FlowGroupOptions"]);
        }

        if (array_key_exists("FlowGroupType",$param) and $param["FlowGroupType"] !== null) {
            $this->FlowGroupType = $param["FlowGroupType"];
        }

        if (array_key_exists("FlowGroupDeadline",$param) and $param["FlowGroupDeadline"] !== null) {
            $this->FlowGroupDeadline = $param["FlowGroupDeadline"];
        }
    }
}
