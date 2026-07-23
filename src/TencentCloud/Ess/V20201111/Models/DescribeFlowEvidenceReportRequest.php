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
 * DescribeFlowEvidenceReport请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getReportId() 获取<p>签署报告编号, 由<a href="https://qian.tencent.com/developers/companyApis/certificate/CreateFlowEvidenceReport" target="_blank">提交申请出证报告任务</a>产生</p>
 * @method void setReportId(string $ReportId) 设置<p>签署报告编号, 由<a href="https://qian.tencent.com/developers/companyApis/certificate/CreateFlowEvidenceReport" target="_blank">提交申请出证报告任务</a>产生</p>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method integer getReportType() 获取<p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
 * @method void setReportType(integer $ReportType) 设置<p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
 */
class DescribeFlowEvidenceReportRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>签署报告编号, 由<a href="https://qian.tencent.com/developers/companyApis/certificate/CreateFlowEvidenceReport" target="_blank">提交申请出证报告任务</a>产生</p>
     */
    public $ReportId;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @var integer <p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
     */
    public $ReportType;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $ReportId <p>签署报告编号, 由<a href="https://qian.tencent.com/developers/companyApis/certificate/CreateFlowEvidenceReport" target="_blank">提交申请出证报告任务</a>产生</p>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     * @param integer $ReportType <p>指定申请的报告类型，可选类型如下：<ul><li> <strong>0</strong> :合同签署报告（默认）</li></ul></p><p>枚举值：</p><ul><li>0： 合同签署报告</li></ul>
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

        if (array_key_exists("ReportId",$param) and $param["ReportId"] !== null) {
            $this->ReportId = $param["ReportId"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }

        if (array_key_exists("ReportType",$param) and $param["ReportType"] !== null) {
            $this->ReportType = $param["ReportType"];
        }
    }
}
