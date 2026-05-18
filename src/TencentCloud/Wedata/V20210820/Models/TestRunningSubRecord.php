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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 试运行子记录
 *
 * @method string getStartTime() 获取<p>开发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>开发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionJobId() 获取<p>执行平台执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionJobId(string $ExecutionJobId) 设置<p>执行平台执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecutionSubJobId() 获取<p>执行平台子执行jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecutionSubJobId(string $ExecutionSubJobId) 设置<p>执行平台子执行jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobId() 获取<p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置<p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDetailId() 获取<p>子记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetailId(integer $DetailId) 设置<p>子记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRecordId() 获取<p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecordId(integer $RecordId) 设置<p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取<p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置<p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置<p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeCost() 获取<p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeCost(integer $TimeCost) 设置<p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultTotalCount() 获取<p>结果总行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultTotalCount(integer $ResultTotalCount) 设置<p>结果总行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultPreviewCount() 获取<p>预览结果行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultPreviewCount(integer $ResultPreviewCount) 设置<p>预览结果行数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultFilePath() 获取<p>结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultFilePath(string $ResultFilePath) 设置<p>结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultPreviewFilePath() 获取<p>预览结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultPreviewFilePath(string $ResultPreviewFilePath) 设置<p>预览结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSequence() 获取<p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSequence(string $Sequence) 设置<p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogFilePath() 获取<p>日志路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFilePath(string $LogFilePath) 设置<p>日志路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getHasSubResultSet() 获取<p>是否包含子结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHasSubResultSet(boolean $HasSubResultSet) 设置<p>是否包含子结果</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptContentTruncated() 获取<p>脚本内容是否被截断</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContentTruncated(boolean $ScriptContentTruncated) 设置<p>脚本内容是否被截断</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSchemaInfoFilePath() 获取<p>结果集表字符信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSchemaInfoFilePath(string $SchemaInfoFilePath) 设置<p>结果集表字符信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TestRunningSubRecord extends AbstractModel
{
    /**
     * @var string <p>开发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var string <p>执行平台执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionJobId;

    /**
     * @var string <p>执行平台子执行jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecutionSubJobId;

    /**
     * @var string <p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var integer <p>子记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DetailId;

    /**
     * @var integer <p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecordId;

    /**
     * @var string <p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer <p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeCost;

    /**
     * @var integer <p>结果总行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultTotalCount;

    /**
     * @var integer <p>预览结果行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultPreviewCount;

    /**
     * @var string <p>结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultFilePath;

    /**
     * @var string <p>预览结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultPreviewFilePath;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string <p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Sequence;

    /**
     * @var string <p>日志路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFilePath;

    /**
     * @var boolean <p>是否包含子结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HasSubResultSet;

    /**
     * @var boolean <p>脚本内容是否被截断</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContentTruncated;

    /**
     * @var string <p>结果集表字符信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SchemaInfoFilePath;

    /**
     * @param string $StartTime <p>开发时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionJobId <p>执行平台执行id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecutionSubJobId <p>执行平台子执行jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobId <p>开发侧提交的jobid</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DetailId <p>子记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RecordId <p>试运行记录id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent <p>脚本内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>状态</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeCost <p>耗时</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultTotalCount <p>结果总行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultPreviewCount <p>预览结果行数</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultFilePath <p>结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultPreviewFilePath <p>预览结果文件路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Sequence <p>序号</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogFilePath <p>日志路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $HasSubResultSet <p>是否包含子结果</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptContentTruncated <p>脚本内容是否被截断</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SchemaInfoFilePath <p>结果集表字符信息</p>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("ExecutionJobId",$param) and $param["ExecutionJobId"] !== null) {
            $this->ExecutionJobId = $param["ExecutionJobId"];
        }

        if (array_key_exists("ExecutionSubJobId",$param) and $param["ExecutionSubJobId"] !== null) {
            $this->ExecutionSubJobId = $param["ExecutionSubJobId"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("DetailId",$param) and $param["DetailId"] !== null) {
            $this->DetailId = $param["DetailId"];
        }

        if (array_key_exists("RecordId",$param) and $param["RecordId"] !== null) {
            $this->RecordId = $param["RecordId"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TimeCost",$param) and $param["TimeCost"] !== null) {
            $this->TimeCost = $param["TimeCost"];
        }

        if (array_key_exists("ResultTotalCount",$param) and $param["ResultTotalCount"] !== null) {
            $this->ResultTotalCount = $param["ResultTotalCount"];
        }

        if (array_key_exists("ResultPreviewCount",$param) and $param["ResultPreviewCount"] !== null) {
            $this->ResultPreviewCount = $param["ResultPreviewCount"];
        }

        if (array_key_exists("ResultFilePath",$param) and $param["ResultFilePath"] !== null) {
            $this->ResultFilePath = $param["ResultFilePath"];
        }

        if (array_key_exists("ResultPreviewFilePath",$param) and $param["ResultPreviewFilePath"] !== null) {
            $this->ResultPreviewFilePath = $param["ResultPreviewFilePath"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Sequence",$param) and $param["Sequence"] !== null) {
            $this->Sequence = $param["Sequence"];
        }

        if (array_key_exists("LogFilePath",$param) and $param["LogFilePath"] !== null) {
            $this->LogFilePath = $param["LogFilePath"];
        }

        if (array_key_exists("HasSubResultSet",$param) and $param["HasSubResultSet"] !== null) {
            $this->HasSubResultSet = $param["HasSubResultSet"];
        }

        if (array_key_exists("ScriptContentTruncated",$param) and $param["ScriptContentTruncated"] !== null) {
            $this->ScriptContentTruncated = $param["ScriptContentTruncated"];
        }

        if (array_key_exists("SchemaInfoFilePath",$param) and $param["SchemaInfoFilePath"] !== null) {
            $this->SchemaInfoFilePath = $param["SchemaInfoFilePath"];
        }
    }
}
