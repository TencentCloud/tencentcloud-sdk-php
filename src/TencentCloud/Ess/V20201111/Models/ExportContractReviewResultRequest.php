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
 * ExportContractReviewResult请求参数结构体
 *
 * @method UserInfo getOperator() 获取<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method void setOperator(UserInfo $Operator) 设置<p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
 * @method string getTaskId() 获取<p>合同审查任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>合同审查任务ID</p>
 * @method integer getFileType() 获取<p>导出文件类型</p><p>枚举值：</p><ul><li>1： WORD、PDF当前带风险批注文件</li><li>2： 审查结果＆摘要（.xIsx）</li><li>3： WORD、PDF审查合同内容时的文件（最原始文件）</li><li>4： WORD、PDF当前无风险批注文件</li></ul>
 * @method void setFileType(integer $FileType) 设置<p>导出文件类型</p><p>枚举值：</p><ul><li>1： WORD、PDF当前带风险批注文件</li><li>2： 审查结果＆摘要（.xIsx）</li><li>3： WORD、PDF审查合同内容时的文件（最原始文件）</li><li>4： WORD、PDF当前无风险批注文件</li></ul>
 * @method Agent getAgent() 获取<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 * @method void setAgent(Agent $Agent) 设置<p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
 */
class ExportContractReviewResultRequest extends AbstractModel
{
    /**
     * @var UserInfo <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     */
    public $Operator;

    /**
     * @var string <p>合同审查任务ID</p>
     */
    public $TaskId;

    /**
     * @var integer <p>导出文件类型</p><p>枚举值：</p><ul><li>1： WORD、PDF当前带风险批注文件</li><li>2： 审查结果＆摘要（.xIsx）</li><li>3： WORD、PDF审查合同内容时的文件（最原始文件）</li><li>4： WORD、PDF当前无风险批注文件</li></ul>
     */
    public $FileType;

    /**
     * @var Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
     */
    public $Agent;

    /**
     * @param UserInfo $Operator <p>执行本接口操作的员工信息。<br>注: <code>在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。</code></p>
     * @param string $TaskId <p>合同审查任务ID</p>
     * @param integer $FileType <p>导出文件类型</p><p>枚举值：</p><ul><li>1： WORD、PDF当前带风险批注文件</li><li>2： 审查结果＆摘要（.xIsx）</li><li>3： WORD、PDF审查合同内容时的文件（最原始文件）</li><li>4： WORD、PDF当前无风险批注文件</li></ul>
     * @param Agent $Agent <p>代理企业和员工的信息。<br>在集团企业代理子企业操作的场景中，需设置此参数。在此情境下，ProxyOrganizationId（子企业的组织ID）为必填项。</p>
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

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = new Agent();
            $this->Agent->deserialize($param["Agent"]);
        }
    }
}
