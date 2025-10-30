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
 * ExportContractComparisonTask请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getTaskId() 获取合同对比任务ID，该参数通过调用接口CreateContractComparisonTask获取。
 * @method void setTaskId(string $TaskId) 设置合同对比任务ID，该参数通过调用接口CreateContractComparisonTask获取。
 * @method integer getExportType() 获取导出对比结果文件类型。
类型如下：
<ul>
<li> **0**：【PDF】以新合同文件为基础，导出带有可视化对比点标注的PDF文件。</li>
<li> **1**：【EXCEL】导出结构化的对比点明细表格，以列表形式罗列每一个差异点，包含改动位置、类型、标签及修改前后的完整内容。</li>
</ul>
 * @method void setExportType(integer $ExportType) 设置导出对比结果文件类型。
类型如下：
<ul>
<li> **0**：【PDF】以新合同文件为基础，导出带有可视化对比点标注的PDF文件。</li>
<li> **1**：【EXCEL】导出结构化的对比点明细表格，以列表形式罗列每一个差异点，包含改动位置、类型、标签及修改前后的完整内容。</li>
</ul>
 * @method boolean getIgnore() 获取是否忽略，适用于PDF。
<ul>
<li> **true**：导出文件标注去掉忽略项。</li>
<li> **false**：导出文件包含所有对比点。</li>
</ul>
 * @method void setIgnore(boolean $Ignore) 设置是否忽略，适用于PDF。
<ul>
<li> **true**：导出文件标注去掉忽略项。</li>
<li> **false**：导出文件包含所有对比点。</li>
</ul>
 */
class ExportContractComparisonTaskRequest extends AbstractModel
{
    /**
     * @var UserInfo 执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     */
    public $Operator;

    /**
     * @var string 合同对比任务ID，该参数通过调用接口CreateContractComparisonTask获取。
     */
    public $TaskId;

    /**
     * @var integer 导出对比结果文件类型。
类型如下：
<ul>
<li> **0**：【PDF】以新合同文件为基础，导出带有可视化对比点标注的PDF文件。</li>
<li> **1**：【EXCEL】导出结构化的对比点明细表格，以列表形式罗列每一个差异点，包含改动位置、类型、标签及修改前后的完整内容。</li>
</ul>
     */
    public $ExportType;

    /**
     * @var boolean 是否忽略，适用于PDF。
<ul>
<li> **true**：导出文件标注去掉忽略项。</li>
<li> **false**：导出文件包含所有对比点。</li>
</ul>
     */
    public $Ignore;

    /**
     * @param UserInfo $Operator 执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $TaskId 合同对比任务ID，该参数通过调用接口CreateContractComparisonTask获取。
     * @param integer $ExportType 导出对比结果文件类型。
类型如下：
<ul>
<li> **0**：【PDF】以新合同文件为基础，导出带有可视化对比点标注的PDF文件。</li>
<li> **1**：【EXCEL】导出结构化的对比点明细表格，以列表形式罗列每一个差异点，包含改动位置、类型、标签及修改前后的完整内容。</li>
</ul>
     * @param boolean $Ignore 是否忽略，适用于PDF。
<ul>
<li> **true**：导出文件标注去掉忽略项。</li>
<li> **false**：导出文件包含所有对比点。</li>
</ul>
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

        if (array_key_exists("ExportType",$param) and $param["ExportType"] !== null) {
            $this->ExportType = $param["ExportType"];
        }

        if (array_key_exists("Ignore",$param) and $param["Ignore"] !== null) {
            $this->Ignore = $param["Ignore"];
        }
    }
}
