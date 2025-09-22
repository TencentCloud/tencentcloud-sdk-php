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
 * 业务提交JOB的子任务
 *
 * @method string getJobId() 获取数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobExecutionId() 获取子查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobExecutionId(string $JobExecutionId) 设置子查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getJobExecutionName() 获取子查询名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobExecutionName(string $JobExecutionName) 设置子查询名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getScriptContent() 获取子查询sql内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContent(string $ScriptContent) 设置子查询sql内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取子查询状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置子查询状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExecuteStageInfo() 获取执行阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExecuteStageInfo(string $ExecuteStageInfo) 设置执行阶段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogFilePath() 获取日志路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogFilePath(string $LogFilePath) 设置日志路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultFilePath() 获取下载结果路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultFilePath(string $ResultFilePath) 设置下载结果路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResultPreviewFilePath() 获取预览结果路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultPreviewFilePath(string $ResultPreviewFilePath) 设置预览结果路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultTotalCount() 获取任务执行的结果总行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultTotalCount(integer $ResultTotalCount) 设置任务执行的结果总行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimeCost() 获取耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimeCost(integer $TimeCost) 设置耗时
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getContextScriptContent() 获取上下文SQL内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContextScriptContent(array $ContextScriptContent) 设置上下文SQL内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultPreviewCount() 获取任务执行的结果预览行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultPreviewCount(integer $ResultPreviewCount) 设置任务执行的结果预览行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResultEffectCount() 获取任务执行的结果影响行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultEffectCount(integer $ResultEffectCount) 设置任务执行的结果影响行数
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getCollectingTotalResult() 获取是否正在收集全量结果：默认false，true表示正在收集全量结果，用于前端判断是否需要继续轮询
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollectingTotalResult(boolean $CollectingTotalResult) 设置是否正在收集全量结果：默认false，true表示正在收集全量结果，用于前端判断是否需要继续轮询
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getScriptContentTruncate() 获取是否需要截断脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScriptContentTruncate(boolean $ScriptContentTruncate) 设置是否需要截断脚本内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class JobExecutionDto extends AbstractModel
{
    /**
     * @var string 数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 子查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobExecutionId;

    /**
     * @var string 子查询名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobExecutionName;

    /**
     * @var string 子查询sql内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContent;

    /**
     * @var string 子查询状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 执行阶段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExecuteStageInfo;

    /**
     * @var string 日志路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogFilePath;

    /**
     * @var string 下载结果路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultFilePath;

    /**
     * @var string 预览结果路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultPreviewFilePath;

    /**
     * @var integer 任务执行的结果总行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultTotalCount;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @var integer 耗时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimeCost;

    /**
     * @var array 上下文SQL内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContextScriptContent;

    /**
     * @var integer 任务执行的结果预览行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultPreviewCount;

    /**
     * @var integer 任务执行的结果影响行数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultEffectCount;

    /**
     * @var boolean 是否正在收集全量结果：默认false，true表示正在收集全量结果，用于前端判断是否需要继续轮询
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CollectingTotalResult;

    /**
     * @var boolean 是否需要截断脚本内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScriptContentTruncate;

    /**
     * @param string $JobId 数据探索任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobExecutionId 子查询任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $JobExecutionName 子查询名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ScriptContent 子查询sql内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 子查询状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExecuteStageInfo 执行阶段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogFilePath 日志路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultFilePath 下载结果路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResultPreviewFilePath 预览结果路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultTotalCount 任务执行的结果总行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime 结束时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TimeCost 耗时
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ContextScriptContent 上下文SQL内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultPreviewCount 任务执行的结果预览行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResultEffectCount 任务执行的结果影响行数
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $CollectingTotalResult 是否正在收集全量结果：默认false，true表示正在收集全量结果，用于前端判断是否需要继续轮询
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ScriptContentTruncate 是否需要截断脚本内容
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

        if (array_key_exists("JobExecutionId",$param) and $param["JobExecutionId"] !== null) {
            $this->JobExecutionId = $param["JobExecutionId"];
        }

        if (array_key_exists("JobExecutionName",$param) and $param["JobExecutionName"] !== null) {
            $this->JobExecutionName = $param["JobExecutionName"];
        }

        if (array_key_exists("ScriptContent",$param) and $param["ScriptContent"] !== null) {
            $this->ScriptContent = $param["ScriptContent"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExecuteStageInfo",$param) and $param["ExecuteStageInfo"] !== null) {
            $this->ExecuteStageInfo = $param["ExecuteStageInfo"];
        }

        if (array_key_exists("LogFilePath",$param) and $param["LogFilePath"] !== null) {
            $this->LogFilePath = $param["LogFilePath"];
        }

        if (array_key_exists("ResultFilePath",$param) and $param["ResultFilePath"] !== null) {
            $this->ResultFilePath = $param["ResultFilePath"];
        }

        if (array_key_exists("ResultPreviewFilePath",$param) and $param["ResultPreviewFilePath"] !== null) {
            $this->ResultPreviewFilePath = $param["ResultPreviewFilePath"];
        }

        if (array_key_exists("ResultTotalCount",$param) and $param["ResultTotalCount"] !== null) {
            $this->ResultTotalCount = $param["ResultTotalCount"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TimeCost",$param) and $param["TimeCost"] !== null) {
            $this->TimeCost = $param["TimeCost"];
        }

        if (array_key_exists("ContextScriptContent",$param) and $param["ContextScriptContent"] !== null) {
            $this->ContextScriptContent = $param["ContextScriptContent"];
        }

        if (array_key_exists("ResultPreviewCount",$param) and $param["ResultPreviewCount"] !== null) {
            $this->ResultPreviewCount = $param["ResultPreviewCount"];
        }

        if (array_key_exists("ResultEffectCount",$param) and $param["ResultEffectCount"] !== null) {
            $this->ResultEffectCount = $param["ResultEffectCount"];
        }

        if (array_key_exists("CollectingTotalResult",$param) and $param["CollectingTotalResult"] !== null) {
            $this->CollectingTotalResult = $param["CollectingTotalResult"];
        }

        if (array_key_exists("ScriptContentTruncate",$param) and $param["ScriptContentTruncate"] !== null) {
            $this->ScriptContentTruncate = $param["ScriptContentTruncate"];
        }
    }
}
