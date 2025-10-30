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
 * @method string getId() 获取任务Id
 * @method void setId(string $Id) 设置任务Id
 * @method integer getInstanceStartTime() 获取任务创建时间，毫秒时间戳
 * @method void setInstanceStartTime(integer $InstanceStartTime) 设置任务创建时间，毫秒时间戳
 * @method integer getInstanceCompleteTime() 获取任务结束时间，毫秒时间戳
 * @method void setInstanceCompleteTime(integer $InstanceCompleteTime) 设置任务结束时间，毫秒时间戳
 * @method integer getState() 获取任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
 * @method void setState(integer $State) 设置任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
 * @method string getSQL() 获取任务SQL语句
 * @method void setSQL(string $SQL) 设置任务SQL语句
 * @method string getDataEngineName() 获取计算资源名字
 * @method void setDataEngineName(string $DataEngineName) 设置计算资源名字
 * @method integer getJobTimeSum() 获取单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。
具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。
 * @method void setJobTimeSum(integer $JobTimeSum) 设置单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。
具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。
 * @method integer getTaskTimeSum() 获取单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
 * @method void setTaskTimeSum(integer $TaskTimeSum) 设置单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
 * @method integer getInputRecordsSum() 获取数据扫描总行数
 * @method void setInputRecordsSum(integer $InputRecordsSum) 设置数据扫描总行数
 * @method integer getInputBytesSum() 获取数据扫描总 bytes
 * @method void setInputBytesSum(integer $InputBytesSum) 设置数据扫描总 bytes
 * @method integer getOutputRecordsSum() 获取输出总行数
 * @method void setOutputRecordsSum(integer $OutputRecordsSum) 设置输出总行数
 * @method integer getOutputBytesSum() 获取输出总 bytes
 * @method void setOutputBytesSum(integer $OutputBytesSum) 设置输出总 bytes
 * @method integer getShuffleReadBytesSum() 获取shuffle read 总 bytes
 * @method void setShuffleReadBytesSum(integer $ShuffleReadBytesSum) 设置shuffle read 总 bytes
 * @method integer getShuffleReadRecordsSum() 获取shuffle read 总行数
 * @method void setShuffleReadRecordsSum(integer $ShuffleReadRecordsSum) 设置shuffle read 总行数
 * @method string getAnalysisStatus() 获取洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）
 * @method void setAnalysisStatus(string $AnalysisStatus) 设置洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）
 * @method integer getOutputFilesNum() 获取任务输出文件总数
 * @method void setOutputFilesNum(integer $OutputFilesNum) 设置任务输出文件总数
 * @method integer getOutputSmallFilesNum() 获取任务输出小文件总数
 * @method void setOutputSmallFilesNum(integer $OutputSmallFilesNum) 设置任务输出小文件总数
 */
class AnalysisTaskResults extends AbstractModel
{
    /**
     * @var string 任务Id
     */
    public $Id;

    /**
     * @var integer 任务创建时间，毫秒时间戳
     */
    public $InstanceStartTime;

    /**
     * @var integer 任务结束时间，毫秒时间戳
     */
    public $InstanceCompleteTime;

    /**
     * @var integer 任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
     */
    public $State;

    /**
     * @var string 任务SQL语句
     */
    public $SQL;

    /**
     * @var string 计算资源名字
     */
    public $DataEngineName;

    /**
     * @var integer 单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。
具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。
     */
    public $JobTimeSum;

    /**
     * @var integer 单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
     */
    public $TaskTimeSum;

    /**
     * @var integer 数据扫描总行数
     */
    public $InputRecordsSum;

    /**
     * @var integer 数据扫描总 bytes
     */
    public $InputBytesSum;

    /**
     * @var integer 输出总行数
     */
    public $OutputRecordsSum;

    /**
     * @var integer 输出总 bytes
     */
    public $OutputBytesSum;

    /**
     * @var integer shuffle read 总 bytes
     */
    public $ShuffleReadBytesSum;

    /**
     * @var integer shuffle read 总行数
     */
    public $ShuffleReadRecordsSum;

    /**
     * @var string 洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）
     */
    public $AnalysisStatus;

    /**
     * @var integer 任务输出文件总数
     */
    public $OutputFilesNum;

    /**
     * @var integer 任务输出小文件总数
     */
    public $OutputSmallFilesNum;

    /**
     * @param string $Id 任务Id
     * @param integer $InstanceStartTime 任务创建时间，毫秒时间戳
     * @param integer $InstanceCompleteTime 任务结束时间，毫秒时间戳
     * @param integer $State 任务状态：0 初始化， 1 执行中， 2 执行成功，3 数据写入中，4 排队中。-1 执行失败，-3 已取消。
     * @param string $SQL 任务SQL语句
     * @param string $DataEngineName 计算资源名字
     * @param integer $JobTimeSum 单位毫秒，引擎内执行耗时, 反映真正用于计算所需的耗时，即从  Spark 任务第一个 Task  开始执行到任务结束之间的耗时。
具体的：会统计任务的每个 Spark Stage 第一个 Task 到最后一个 Task 完成时长之和，不包含任务开始的排队耗时（即剔除从任务提交到 Spark Task 开始执行之间的调度等其他耗时），也不包含任务执行过程中多个 Spark Stage 之间因 executor 资源不足而等待执行 Task 所消耗的时间。
     * @param integer $TaskTimeSum 单位秒，累计 CPU* 秒 ( 累计 CPU * 时 = 累计 CPU* 秒/ 3600)，统计参与计算所用 Spark Executor 每个 core 的 CPU 执行时长总和
     * @param integer $InputRecordsSum 数据扫描总行数
     * @param integer $InputBytesSum 数据扫描总 bytes
     * @param integer $OutputRecordsSum 输出总行数
     * @param integer $OutputBytesSum 输出总 bytes
     * @param integer $ShuffleReadBytesSum shuffle read 总 bytes
     * @param integer $ShuffleReadRecordsSum shuffle read 总行数
     * @param string $AnalysisStatus 洞察结果类型分类，一个 json 数组，有如下几种类型：SPARK-StageScheduleDelay（资源抢占）, SPARK-ShuffleFailure（Shuffle异常）, SPARK-SlowTask（慢task）, SPARK-DataSkew（数据倾斜）, SPARK-InsufficientResource（磁盘或内存不足）
     * @param integer $OutputFilesNum 任务输出文件总数
     * @param integer $OutputSmallFilesNum 任务输出小文件总数
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
    }
}
