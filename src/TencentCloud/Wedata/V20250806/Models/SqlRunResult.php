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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetSQLRunResult 出参：一个查询任务下全部（或指定）子查询的结果集合
 *
 * @method string getJobId() 获取查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取查询任务状态。终态取值：SUCCESS（成功）、FAILED（失败）、TERMINATED（已终止）、CANCELED（已取消）；非终态取值：QUEUED（排队中）、RUNNING（执行中）。非终态时不报错，Results 返回空数组，调用方应指数退避轮询直至进入终态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置查询任务状态。终态取值：SUCCESS（成功）、FAILED（失败）、TERMINATED（已终止）、CANCELED（已取消）；非终态取值：QUEUED（排队中）、RUNNING（执行中）。非终态时不报错，Results 返回空数组，调用方应指数退避轮询直至进入终态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusMessage() 获取当前状态的可读说明，任意状态下均有值。用于说明 Results 为空的具体原因并给出下一步动作建议：任务未完成时提示稍后以相同 JobId 重试；任务失败/终止/取消时提示无结果数据及后续处理；成功且结果被截断时提示缩小查询范围。命名上与云API错误响应的 Error.Message 区分，本字段描述的是业务状态而非错误信息。随 Language 参数国际化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusMessage(string $StatusMessage) 设置当前状态的可读说明，任意状态下均有值。用于说明 Results 为空的具体原因并给出下一步动作建议：任务未完成时提示稍后以相同 JobId 重试；任务失败/终止/取消时提示无结果数据及后续处理；成功且结果被截断时提示缩小查询范围。命名上与云API错误响应的 Error.Message 区分，本字段描述的是业务状态而非错误信息。随 Language 参数国际化
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCostMs() 获取查询任务总耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCostMs(integer $CostMs) 设置查询任务总耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getTruncated() 获取是否存在结果不完整的子查询。任一子查询的 Truncated 为 true 时本字段为 true
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTruncated(boolean $Truncated) 设置是否存在结果不完整的子查询。任一子查询的 Truncated 为 true 时本字段为 true
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getResults() 获取各子查询的结果列表，顺序与 SQL 语句执行顺序一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResults(array $Results) 设置各子查询的结果列表，顺序与 SQL 语句执行顺序一致
注意：此字段可能返回 null，表示取不到有效值。
 */
class SqlRunResult extends AbstractModel
{
    /**
     * @var string 查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 查询任务状态。终态取值：SUCCESS（成功）、FAILED（失败）、TERMINATED（已终止）、CANCELED（已取消）；非终态取值：QUEUED（排队中）、RUNNING（执行中）。非终态时不报错，Results 返回空数组，调用方应指数退避轮询直至进入终态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 当前状态的可读说明，任意状态下均有值。用于说明 Results 为空的具体原因并给出下一步动作建议：任务未完成时提示稍后以相同 JobId 重试；任务失败/终止/取消时提示无结果数据及后续处理；成功且结果被截断时提示缩小查询范围。命名上与云API错误响应的 Error.Message 区分，本字段描述的是业务状态而非错误信息。随 Language 参数国际化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusMessage;

    /**
     * @var integer 查询任务总耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CostMs;

    /**
     * @var boolean 是否存在结果不完整的子查询。任一子查询的 Truncated 为 true 时本字段为 true
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Truncated;

    /**
     * @var array 各子查询的结果列表，顺序与 SQL 语句执行顺序一致
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Results;

    /**
     * @param string $JobId 查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 查询任务状态。终态取值：SUCCESS（成功）、FAILED（失败）、TERMINATED（已终止）、CANCELED（已取消）；非终态取值：QUEUED（排队中）、RUNNING（执行中）。非终态时不报错，Results 返回空数组，调用方应指数退避轮询直至进入终态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusMessage 当前状态的可读说明，任意状态下均有值。用于说明 Results 为空的具体原因并给出下一步动作建议：任务未完成时提示稍后以相同 JobId 重试；任务失败/终止/取消时提示无结果数据及后续处理；成功且结果被截断时提示缩小查询范围。命名上与云API错误响应的 Error.Message 区分，本字段描述的是业务状态而非错误信息。随 Language 参数国际化
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CostMs 查询任务总耗时，单位毫秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Truncated 是否存在结果不完整的子查询。任一子查询的 Truncated 为 true 时本字段为 true
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Results 各子查询的结果列表，顺序与 SQL 语句执行顺序一致
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusMessage",$param) and $param["StatusMessage"] !== null) {
            $this->StatusMessage = $param["StatusMessage"];
        }

        if (array_key_exists("CostMs",$param) and $param["CostMs"] !== null) {
            $this->CostMs = $param["CostMs"];
        }

        if (array_key_exists("Truncated",$param) and $param["Truncated"] !== null) {
            $this->Truncated = $param["Truncated"];
        }

        if (array_key_exists("Results",$param) and $param["Results"] !== null) {
            $this->Results = [];
            foreach ($param["Results"] as $key => $value){
                $obj = new SqlRunExecutionResult();
                $obj->deserialize($value);
                array_push($this->Results, $obj);
            }
        }
    }
}
