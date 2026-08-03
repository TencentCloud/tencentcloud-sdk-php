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
 * CreateFlowForwards请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getTargetUserId() 获取<p>合同对应参与方需要修改的目标经办人。其UserId可在企业控制台中组织管理里面找到。或者使用获取员工信息接口得到。</p><p>注意：<code>需要保证目标经办人已经加入企业且已实名</code></p>
 * @method void setTargetUserId(string $TargetUserId) 设置<p>合同对应参与方需要修改的目标经办人。其UserId可在企业控制台中组织管理里面找到。或者使用获取员工信息接口得到。</p><p>注意：<code>需要保证目标经办人已经加入企业且已实名</code></p>
 * @method array getFlowForwardInfos() 获取<p>企业签署方的合同及对应签署方</p>
 * @method void setFlowForwardInfos(array $FlowForwardInfos) 设置<p>企业签署方的合同及对应签署方</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 */
class CreateFlowForwardsRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>合同对应参与方需要修改的目标经办人。其UserId可在企业控制台中组织管理里面找到。或者使用获取员工信息接口得到。</p><p>注意：<code>需要保证目标经办人已经加入企业且已实名</code></p>
     */
    public $TargetUserId;

    /**
     * @var array <p>企业签署方的合同及对应签署方</p>
     */
    public $FlowForwardInfos;

    /**
     * @var Agent <p>代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $TargetUserId <p>合同对应参与方需要修改的目标经办人。其UserId可在企业控制台中组织管理里面找到。或者使用获取员工信息接口得到。</p><p>注意：<code>需要保证目标经办人已经加入企业且已实名</code></p>
     * @param array $FlowForwardInfos <p>企业签署方的合同及对应签署方</p>
     * @param Agent $Agent <p>代理企业和员工的信息。在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
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

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }

        if (array_key_exists("FlowForwardInfos",$param) and $param["FlowForwardInfos"] !== null) {
            $this->FlowForwardInfos = [];
            foreach ($param["FlowForwardInfos"] as $key => $value){
                $obj = new FlowForwardInfo();
                $obj->deserialize($value);
                array_push($this->FlowForwardInfos, $obj);
            }
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
