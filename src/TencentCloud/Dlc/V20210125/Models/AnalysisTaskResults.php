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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 洞察分析结果返回体
 *
 * @method string getId() 获取<p>任务Id</p>
 * @method void setId(string $Id) 设置<p>任务Id</p>
 * @method integer getInstanceStartTime() 获取<p>任务创建时间，毫秒时间戳</p>
 * @method void setInstanceStartTime(integer $InstanceStartTime) 设置<p>任务创建时间，毫秒时间戳</p>
 * @method integer getInstanceCompleteTime() 获取<p>任务结束时间，毫秒时间戳</p>
 * @method void setInstanceCompleteTime(integer $InstanceCompleteTime) 设置<p>任务结束时间，毫秒时间戳</p>
 * @method integer getState() 获取<p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
 * @method void setState(integer $State) 设置<p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
 * @method string getSQL() 获取<p>任务SQL语句</p>
 * @method void setSQL(string $SQL) 设置<p>任务SQL语句</p>
 * @method string getDataEngineName() 获取<p>计算资源名字</p>
 * @method void setDataEngineName(string $DataEngineName) 设置<p>计算资源名字</p>
 * @method integer getJobTimeSum() 获取<p>单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。<br>具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。</p>
 * @method void setJobTimeSum(integer $JobTimeSum) 设置<p>单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。<br>具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。</p>
 * @method integer getTaskTimeSum() 获取<p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和</p>
 * @method void setTaskTimeSum(integer $TaskTimeSum) 设置<p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和</p>
 * @method integer getInputRecordsSum() 获取<p>数据扫描总行数</p>
 * @method void setInputRecordsSum(integer $InputRecordsSum) 设置<p>数据扫描总行数</p>
 * @method integer getInputBytesSum() 获取<p>数据扫描总 bytes</p>
 * @method void setInputBytesSum(integer $InputBytesSum) 设置<p>数据扫描总 bytes</p>
 * @method integer getOutputRecordsSum() 获取<p>输出总行数</p>
 * @method void setOutputRecordsSum(integer $OutputRecordsSum) 设置<p>输出总行数</p>
 * @method integer getOutputBytesSum() 获取<p>输出总 bytes</p>
 * @method void setOutputBytesSum(integer $OutputBytesSum) 设置<p>输出总 bytes</p>
 * @method integer getShuffleReadBytesSum() 获取<p>shuffle read 总 bytes</p>
 * @method void setShuffleReadBytesSum(integer $ShuffleReadBytesSum) 设置<p>shuffle read 总 bytes</p>
 * @method integer getShuffleReadRecordsSum() 获取<p>shuffle read 总行数</p>
 * @method void setShuffleReadRecordsSum(integer $ShuffleReadRecordsSum) 设置<p>shuffle read 总行数</p>
 * @method string getAnalysisStatus() 获取<p>洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）</p>
 * @method void setAnalysisStatus(string $AnalysisStatus) 设置<p>洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）</p>
 * @method integer getOutputFilesNum() 获取<p>任务输出文件总数</p>
 * @method void setOutputFilesNum(integer $OutputFilesNum) 设置<p>任务输出文件总数</p>
 * @method integer getOutputSmallFilesNum() 获取<p>任务输出小文件总数</p>
 * @method void setOutputSmallFilesNum(integer $OutputSmallFilesNum) 设置<p>任务输出小文件总数</p>
 * @method integer getShuffleWriteBytesSum() 获取<p>shuffle write 总 Bytes 大小</p><p>单位：Bytes</p><p>默认值：无</p>
 * @method void setShuffleWriteBytesSum(integer $ShuffleWriteBytesSum) 设置<p>shuffle write 总 Bytes 大小</p><p>单位：Bytes</p><p>默认值：无</p>
 */
class AnalysisTaskResults extends AbstractModel
{
    /**
     * @var string <p>任务Id</p>
     */
    public $Id;

    /**
     * @var integer <p>任务创建时间，毫秒时间戳</p>
     */
    public $InstanceStartTime;

    /**
     * @var integer <p>任务结束时间，毫秒时间戳</p>
     */
    public $InstanceCompleteTime;

    /**
     * @var integer <p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
     */
    public $State;

    /**
     * @var string <p>任务SQL语句</p>
     */
    public $SQL;

    /**
     * @var string <p>计算资源名字</p>
     */
    public $DataEngineName;

    /**
     * @var integer <p>单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。<br>具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。</p>
     */
    public $JobTimeSum;

    /**
     * @var integer <p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和</p>
     */
    public $TaskTimeSum;

    /**
     * @var integer <p>数据扫描总行数</p>
     */
    public $InputRecordsSum;

    /**
     * @var integer <p>数据扫描总 bytes</p>
     */
    public $InputBytesSum;

    /**
     * @var integer <p>输出总行数</p>
     */
    public $OutputRecordsSum;

    /**
     * @var integer <p>输出总 bytes</p>
     */
    public $OutputBytesSum;

    /**
     * @var integer <p>shuffle read 总 bytes</p>
     */
    public $ShuffleReadBytesSum;

    /**
     * @var integer <p>shuffle read 总行数</p>
     */
    public $ShuffleReadRecordsSum;

    /**
     * @var string <p>洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）</p>
     */
    public $AnalysisStatus;

    /**
     * @var integer <p>任务输出文件总数</p>
     */
    public $OutputFilesNum;

    /**
     * @var integer <p>任务输出小文件总数</p>
     */
    public $OutputSmallFilesNum;

    /**
     * @var integer <p>shuffle write 总 Bytes 大小</p><p>单位：Bytes</p><p>默认值：无</p>
     */
    public $ShuffleWriteBytesSum;

    /**
     * @param string $Id <p>任务Id</p>
     * @param integer $InstanceStartTime <p>任务创建时间，毫秒时间戳</p>
     * @param integer $InstanceCompleteTime <p>任务结束时间，毫秒时间戳</p>
     * @param integer $State <p>任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。</p>
     * @param string $SQL <p>任务SQL语句</p>
     * @param string $DataEngineName <p>计算资源名字</p>
     * @param integer $JobTimeSum <p>单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。<br>具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。</p>
     * @param integer $TaskTimeSum <p>单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和</p>
     * @param integer $InputRecordsSum <p>数据扫描总行数</p>
     * @param integer $InputBytesSum <p>数据扫描总 bytes</p>
     * @param integer $OutputRecordsSum <p>输出总行数</p>
     * @param integer $OutputBytesSum <p>输出总 bytes</p>
     * @param integer $ShuffleReadBytesSum <p>shuffle read 总 bytes</p>
     * @param integer $ShuffleReadRecordsSum <p>shuffle read 总行数</p>
     * @param string $AnalysisStatus <p>洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）</p>
     * @param integer $OutputFilesNum <p>任务输出文件总数</p>
     * @param integer $OutputSmallFilesNum <p>任务输出小文件总数</p>
     * @param integer $ShuffleWriteBytesSum <p>shuffle write 总 Bytes 大小</p><p>单位：Bytes</p><p>默认值：无</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceStartTime",$param) and $param["InstanceStartTime"] !== null) {
            $this->InstanceStartTime = $param["InstanceStartTime"];
        }

        if (array_key_exists("InstanceCompleteTime",$param) and $param["InstanceCompleteTime"] !== null) {
            $this->InstanceCompleteTime = $param["InstanceCompleteTime"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SQL",$param) and $param["SQL"] !== null) {
            $this->SQL = $param["SQL"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("JobTimeSum",$param) and $param["JobTimeSum"] !== null) {
            $this->JobTimeSum = $param["JobTimeSum"];
        }

        if (array_key_exists("TaskTimeSum",$param) and $param["TaskTimeSum"] !== null) {
            $this->TaskTimeSum = $param["TaskTimeSum"];
        }

        if (array_key_exists("InputRecordsSum",$param) and $param["InputRecordsSum"] !== null) {
            $this->InputRecordsSum = $param["InputRecordsSum"];
        }

        if (array_key_exists("InputBytesSum",$param) and $param["InputBytesSum"] !== null) {
            $this->InputBytesSum = $param["InputBytesSum"];
        }

        if (array_key_exists("OutputRecordsSum",$param) and $param["OutputRecordsSum"] !== null) {
            $this->OutputRecordsSum = $param["OutputRecordsSum"];
        }

        if (array_key_exists("OutputBytesSum",$param) and $param["OutputBytesSum"] !== null) {
            $this->OutputBytesSum = $param["OutputBytesSum"];
        }

        if (array_key_exists("ShuffleReadBytesSum",$param) and $param["ShuffleReadBytesSum"] !== null) {
            $this->ShuffleReadBytesSum = $param["ShuffleReadBytesSum"];
        }

        if (array_key_exists("ShuffleReadRecordsSum",$param) and $param["ShuffleReadRecordsSum"] !== null) {
            $this->ShuffleReadRecordsSum = $param["ShuffleReadRecordsSum"];
        }

        if (array_key_exists("AnalysisStatus",$param) and $param["AnalysisStatus"] !== null) {
            $this->AnalysisStatus = $param["AnalysisStatus"];
        }

        if (array_key_exists("OutputFilesNum",$param) and $param["OutputFilesNum"] !== null) {
            $this->OutputFilesNum = $param["OutputFilesNum"];
        }

        if (array_key_exists("OutputSmallFilesNum",$param) and $param["OutputSmallFilesNum"] !== null) {
            $this->OutputSmallFilesNum = $param["OutputSmallFilesNum"];
        }

        if (array_key_exists("ShuffleWriteBytesSum",$param) and $param["ShuffleWriteBytesSum"] !== null) {
            $this->ShuffleWriteBytesSum = $param["ShuffleWriteBytesSum"];
        }
    }
}
