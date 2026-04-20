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
 * CreateFlowReminds请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method array getFlowIds() 获取<p>需执行催办的签署流程ID数组，最多包含100个。</p>
 * @method void setFlowIds(array $FlowIds) 设置<p>需执行催办的签署流程ID数组，最多包含100个。</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method array getRemindTypes() 获取<p>指定通知方式，枚举值：SMS / EMAIL；为空则按签署人原始 NotifyType 处理</p>
 * @method void setRemindTypes(array $RemindTypes) 设置<p>指定通知方式，枚举值：SMS / EMAIL；为空则按签署人原始 NotifyType 处理</p>
 * @method array getRemindEmailInfos() 获取<p>邮箱覆盖列表，为指定签署人使用特定邮箱发送邮件催办</p>
 * @method void setRemindEmailInfos(array $RemindEmailInfos) 设置<p>邮箱覆盖列表，为指定签署人使用特定邮箱发送邮件催办</p>
 */
class CreateFlowRemindsRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var array <p>需执行催办的签署流程ID数组，最多包含100个。</p>
     */
    public $FlowIds;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var array <p>指定通知方式，枚举值：SMS / EMAIL；为空则按签署人原始 NotifyType 处理</p>
     */
    public $RemindTypes;

    /**
     * @var array <p>邮箱覆盖列表，为指定签署人使用特定邮箱发送邮件催办</p>
     */
    public $RemindEmailInfos;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param array $FlowIds <p>需执行催办的签署流程ID数组，最多包含100个。</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param array $RemindTypes <p>指定通知方式，枚举值：SMS / EMAIL；为空则按签署人原始 NotifyType 处理</p>
     * @param array $RemindEmailInfos <p>邮箱覆盖列表，为指定签署人使用特定邮箱发送邮件催办</p>
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

        if (array_key_exists("FlowIds",$param) and $param["FlowIds"] !== null) {
            $this->FlowIds = $param["FlowIds"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("RemindTypes",$param) and $param["RemindTypes"] !== null) {
            $this->RemindTypes = $param["RemindTypes"];
        }

        if (array_key_exists("RemindEmailInfos",$param) and $param["RemindEmailInfos"] !== null) {
            $this->RemindEmailInfos = [];
            foreach ($param["RemindEmailInfos"] as $key => $value){
                $obj = new RemindEmailInfo();
                $obj->deserialize($value);
                array_push($this->RemindEmailInfos, $obj);
            }
        }
    }
}
