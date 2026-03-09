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
 * DescribeContractComparisonTask请求参数结构体
 *
 * @method UserInfo getOperator() 获取执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method void setOperator(UserInfo $Operator) 设置执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
 * @method string getTaskId() 获取合同对比任务ID，该参数通过调用接口CreateContractComparisonTask获取。
 * @method void setTaskId(string $TaskId) 设置合同对比任务ID，该参数通过调用接口CreateContractComparisonTask获取。
 * @method boolean getShowDetail() 获取是否返回详细的对比结果。为 true时，响应中将包含详细的对比信息，如相似度、文本差异具体内容等；为 false时，仅返回任务基本状态信息。
注：`详细结果数据量可能较大，请按需开启。`
 * @method void setShowDetail(boolean $ShowDetail) 设置是否返回详细的对比结果。为 true时，响应中将包含详细的对比信息，如相似度、文本差异具体内容等；为 false时，仅返回任务基本状态信息。
注：`详细结果数据量可能较大，请按需开启。`
 * @method array getFilters() 获取搜索条件，具体参考Filter结构体。本接口取值：

1. **format-type：**
按照【 合同文本格式类型 】进行过滤；
类型：String；
是否必填项：否；
类型如下：
<ul><li> **0**：段落（正文）</li>
<li> **1**：标点符号</li>
<li> **2**：页眉页脚</li>
<li> **3**：目录</li>
<li> **4**：印章</li>
<li> **5**：序号</li>
<li> **7**：下划线内容（填写区）</li>
</ul>
 * @method void setFilters(array $Filters) 设置搜索条件，具体参考Filter结构体。本接口取值：

1. **format-type：**
按照【 合同文本格式类型 】进行过滤；
类型：String；
是否必填项：否；
类型如下：
<ul><li> **0**：段落（正文）</li>
<li> **1**：标点符号</li>
<li> **2**：页眉页脚</li>
<li> **3**：目录</li>
<li> **4**：印章</li>
<li> **5**：序号</li>
<li> **7**：下划线内容（填写区）</li>
</ul>
 */
class DescribeContractComparisonTaskRequest extends AbstractModel
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
     * @var boolean 是否返回详细的对比结果。为 true时，响应中将包含详细的对比信息，如相似度、文本差异具体内容等；为 false时，仅返回任务基本状态信息。
注：`详细结果数据量可能较大，请按需开启。`
     */
    public $ShowDetail;

    /**
     * @var array 搜索条件，具体参考Filter结构体。本接口取值：

1. **format-type：**
按照【 合同文本格式类型 】进行过滤；
类型：String；
是否必填项：否；
类型如下：
<ul><li> **0**：段落（正文）</li>
<li> **1**：标点符号</li>
<li> **2**：页眉页脚</li>
<li> **3**：目录</li>
<li> **4**：印章</li>
<li> **5**：序号</li>
<li> **7**：下划线内容（填写区）</li>
</ul>
     */
    public $Filters;

    /**
     * @param UserInfo $Operator 执行合同审查任务的员工信息。
注: `在调用此接口时，请确保指定的员工已获得所需的接口调用权限，并具备接口传入的相应资源的数据权限。`
     * @param string $TaskId 合同对比任务ID，该参数通过调用接口CreateContractComparisonTask获取。
     * @param boolean $ShowDetail 是否返回详细的对比结果。为 true时，响应中将包含详细的对比信息，如相似度、文本差异具体内容等；为 false时，仅返回任务基本状态信息。
注：`详细结果数据量可能较大，请按需开启。`
     * @param array $Filters 搜索条件，具体参考Filter结构体。本接口取值：

1. **format-type：**
按照【 合同文本格式类型 】进行过滤；
类型：String；
是否必填项：否；
类型如下：
<ul><li> **0**：段落（正文）</li>
<li> **1**：标点符号</li>
<li> **2**：页眉页脚</li>
<li> **3**：目录</li>
<li> **4**：印章</li>
<li> **5**：序号</li>
<li> **7**：下划线内容（填写区）</li>
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

        if (array_key_exists("ShowDetail",$param) and $param["ShowDetail"] !== null) {
            $this->ShowDetail = $param["ShowDetail"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
