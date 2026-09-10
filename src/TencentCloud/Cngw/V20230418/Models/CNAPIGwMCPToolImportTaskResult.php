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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MCP Tools导入任务的进度
 *
 * @method integer getFailedCount() 获取<p>导入失败的数量</p>
 * @method void setFailedCount(integer $FailedCount) 设置<p>导入失败的数量</p>
 * @method integer getProcessedCount() 获取<p>已处理导入Tool的总数</p>
 * @method void setProcessedCount(integer $ProcessedCount) 设置<p>已处理导入Tool的总数</p>
 * @method integer getSuccessCount() 获取<p>成功导入的Tool数量</p>
 * @method void setSuccessCount(integer $SuccessCount) 设置<p>成功导入的Tool数量</p>
 * @method string getTaskEndTime() 获取<p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskEndTime(string $TaskEndTime) 设置<p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取<p>任务ID</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务ID</p>
 * @method string getTaskStartTime() 获取<p>任务开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskStartTime(string $TaskStartTime) 设置<p>任务开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskStatus() 获取<p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>End： 结束</li></ul>
 * @method void setTaskStatus(string $TaskStatus) 设置<p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>End： 结束</li></ul>
 * @method array getToolsImportResult() 获取<p>导入结果详情</p>
 * @method void setToolsImportResult(array $ToolsImportResult) 设置<p>导入结果详情</p>
 * @method integer getTotalCount() 获取<p>待导入Tools的总数</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>待导入Tools的总数</p>
 */
class CNAPIGwMCPToolImportTaskResult extends AbstractModel
{
    /**
     * @var integer <p>导入失败的数量</p>
     */
    public $FailedCount;

    /**
     * @var integer <p>已处理导入Tool的总数</p>
     */
    public $ProcessedCount;

    /**
     * @var integer <p>成功导入的Tool数量</p>
     */
    public $SuccessCount;

    /**
     * @var string <p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskEndTime;

    /**
     * @var string <p>任务ID</p>
     */
    public $TaskId;

    /**
     * @var string <p>任务开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskStartTime;

    /**
     * @var string <p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>End： 结束</li></ul>
     */
    public $TaskStatus;

    /**
     * @var array <p>导入结果详情</p>
     */
    public $ToolsImportResult;

    /**
     * @var integer <p>待导入Tools的总数</p>
     */
    public $TotalCount;

    /**
     * @param integer $FailedCount <p>导入失败的数量</p>
     * @param integer $ProcessedCount <p>已处理导入Tool的总数</p>
     * @param integer $SuccessCount <p>成功导入的Tool数量</p>
     * @param string $TaskEndTime <p>任务结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId <p>任务ID</p>
     * @param string $TaskStartTime <p>任务开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskStatus <p>任务状态</p><p>枚举值：</p><ul><li>Running： 运行中</li><li>End： 结束</li></ul>
     * @param array $ToolsImportResult <p>导入结果详情</p>
     * @param integer $TotalCount <p>待导入Tools的总数</p>
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
        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("ProcessedCount",$param) and $param["ProcessedCount"] !== null) {
            $this->ProcessedCount = $param["ProcessedCount"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("TaskEndTime",$param) and $param["TaskEndTime"] !== null) {
            $this->TaskEndTime = $param["TaskEndTime"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskStartTime",$param) and $param["TaskStartTime"] !== null) {
            $this->TaskStartTime = $param["TaskStartTime"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("ToolsImportResult",$param) and $param["ToolsImportResult"] !== null) {
            $this->ToolsImportResult = [];
            foreach ($param["ToolsImportResult"] as $key => $value){
                $obj = new CNAPIGwMCPToolImportResult();
                $obj->deserialize($value);
                array_push($this->ToolsImportResult, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
