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
 * CreateFlowEvidenceReport请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getFlowId() 获取<p>合同流程ID，为32位字符串。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
 * @method void setFlowId(string $FlowId) 设置<p>合同流程ID，为32位字符串。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method integer getReportType() 获取<p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
 * @method void setReportType(integer $ReportType) 设置<p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
 * @method boolean getHybridEvidenceFlowFile() 获取<p>混合云模式获取合同文件合并出证，默认：不同意。注：此参数需要联系腾讯电子签运营进行开通后生效</p>
 * @method void setHybridEvidenceFlowFile(boolean $HybridEvidenceFlowFile) 设置<p>混合云模式获取合同文件合并出证，默认：不同意。注：此参数需要联系腾讯电子签运营进行开通后生效</p>
 */
class CreateFlowEvidenceReportRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>合同流程ID，为32位字符串。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
     */
    public $FlowId;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var integer <p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
     */
    public $ReportType;

    /**
     * @var boolean <p>混合云模式获取合同文件合并出证，默认：不同意。注：此参数需要联系腾讯电子签运营进行开通后生效</p>
     */
    public $HybridEvidenceFlowFile;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $FlowId <p>合同流程ID，为32位字符串。<br>可登录腾讯电子签控制台，在 &quot;合同&quot;-&gt;&quot;合同中心&quot; 中查看某个合同的FlowId(在页面中展示为合同ID)。</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param integer $ReportType <p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
     * @param boolean $HybridEvidenceFlowFile <p>混合云模式获取合同文件合并出证，默认：不同意。注：此参数需要联系腾讯电子签运营进行开通后生效</p>
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

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }

        if (array_key_exists("HybridEvidenceFlowFile",$param) and $param["HybridEvidenceFlowFile"] !== null) {
            $this->HybridEvidenceFlowFile = $param["HybridEvidenceFlowFile"];
        }
    }
}
