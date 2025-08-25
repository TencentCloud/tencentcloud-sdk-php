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
 * 引擎任务信息
 *
 * @method string getEngineSubmitTime() 获取引擎提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineSubmitTime(string $EngineSubmitTime) 设置引擎提交时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeTime() 获取引擎执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeTime(string $EngineExeTime) 设置引擎执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEngineExeTimes() 获取引擎执行总时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeTimes(integer $EngineExeTimes) 设置引擎执行总时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCuConsume() 获取cu消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCuConsume(integer $CuConsume) 设置cu消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceUsage() 获取资源消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceUsage(integer $ResourceUsage) 设置资源消耗
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineName() 获取引擎名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineName(string $EngineName) 设置引擎名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeStatus() 获取引擎执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeStatus(string $EngineExeStatus) 设置引擎执行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskKind() 获取任务种类
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskKind(string $TaskKind) 设置任务种类
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置任务类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskContent() 获取任务SQL语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskContent(string $TaskContent) 设置任务SQL语句
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInputBytesSum() 获取数据扫描总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputBytesSum(integer $InputBytesSum) 设置数据扫描总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShuffleReadBytesSum() 获取shuffle read 总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShuffleReadBytesSum(integer $ShuffleReadBytesSum) 设置shuffle read 总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShuffleReadRecordsSum() 获取shuffle read 总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShuffleReadRecordsSum(integer $ShuffleReadRecordsSum) 设置shuffle read 总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputRecordsSum() 获取输出总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputRecordsSum(integer $OutputRecordsSum) 设置输出总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputBytesSum() 获取输出总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputBytesSum(integer $OutputBytesSum) 设置输出总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputFilesNum() 获取输出文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputFilesNum(integer $OutputFilesNum) 设置输出文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputSmallFilesNum() 获取输出小文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputSmallFilesNum(integer $OutputSmallFilesNum) 设置输出小文件数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitTime() 获取执行等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitTime(integer $WaitTime) 设置执行等待时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueryResultTime() 获取查询结果时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryResultTime(integer $QueryResultTime) 设置查询结果时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmdArgs() 获取入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdArgs(string $CmdArgs) 设置入参
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getVCoreSeconds() 获取使用虚拟核心秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVCoreSeconds(integer $VCoreSeconds) 设置使用虚拟核心秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemorySeconds() 获取使用的内存秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemorySeconds(integer $MemorySeconds) 设置使用的内存秒数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEmrUserName() 获取EMR用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEmrUserName(string $EmrUserName) 设置EMR用户名
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getQueryId() 获取任务的查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryId(string $QueryId) 设置任务的查询ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApplicationId() 获取应用程序ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApplicationId(string $ApplicationId) 设置应用程序ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class EngineTaskInfo extends AbstractModel
{
    /**
     * @var string 引擎提交时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineSubmitTime;

    /**
     * @var string 引擎执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeTime;

    /**
     * @var integer 引擎执行总时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeTimes;

    /**
     * @var integer cu消耗
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CuConsume;

    /**
     * @var integer 资源消耗
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceUsage;

    /**
     * @var string 引擎名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineName;

    /**
     * @var string 引擎执行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeStatus;

    /**
     * @var string 任务种类
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskKind;

    /**
     * @var string 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 任务SQL语句
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskContent;

    /**
     * @var integer 数据扫描总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputBytesSum;

    /**
     * @var integer shuffle read 总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShuffleReadBytesSum;

    /**
     * @var integer shuffle read 总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShuffleReadRecordsSum;

    /**
     * @var integer 输出总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputRecordsSum;

    /**
     * @var integer 输出总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputBytesSum;

    /**
     * @var integer 输出文件数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputFilesNum;

    /**
     * @var integer 输出小文件数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputSmallFilesNum;

    /**
     * @var integer 执行等待时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitTime;

    /**
     * @var integer 查询结果时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryResultTime;

    /**
     * @var string 入参
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdArgs;

    /**
     * @var integer 使用虚拟核心秒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VCoreSeconds;

    /**
     * @var integer 使用的内存秒数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemorySeconds;

    /**
     * @var string EMR用户名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EmrUserName;

    /**
     * @var string 任务的查询ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryId;

    /**
     * @var string 应用程序ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApplicationId;

    /**
     * @param string $EngineSubmitTime 引擎提交时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeTime 引擎执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EngineExeTimes 引擎执行总时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CuConsume cu消耗
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceUsage 资源消耗
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineName 引擎名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeStatus 引擎执行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskKind 任务种类
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 任务类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskContent 任务SQL语句
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InputBytesSum 数据扫描总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShuffleReadBytesSum shuffle read 总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShuffleReadRecordsSum shuffle read 总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputRecordsSum 输出总行数
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputBytesSum 输出总 bytes
注意：此字段可能返回 null，表示取不到有效值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputFilesNum 输出文件数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputSmallFilesNum 输出小文件数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitTime 执行等待时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueryResultTime 查询结果时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CmdArgs 入参
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $VCoreSeconds 使用虚拟核心秒数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemorySeconds 使用的内存秒数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EmrUserName EMR用户名
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $QueryId 任务的查询ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApplicationId 应用程序ID
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
        if (array_key_exists("EngineSubmitTime",$param) and $param["EngineSubmitTime"] !== null) {
            $this->EngineSubmitTime = $param["EngineSubmitTime"];
        }

        if (array_key_exists("EngineExeTime",$param) and $param["EngineExeTime"] !== null) {
            $this->EngineExeTime = $param["EngineExeTime"];
        }

        if (array_key_exists("EngineExeTimes",$param) and $param["EngineExeTimes"] !== null) {
            $this->EngineExeTimes = $param["EngineExeTimes"];
        }

        if (array_key_exists("CuConsume",$param) and $param["CuConsume"] !== null) {
            $this->CuConsume = $param["CuConsume"];
        }

        if (array_key_exists("ResourceUsage",$param) and $param["ResourceUsage"] !== null) {
            $this->ResourceUsage = $param["ResourceUsage"];
        }

        if (array_key_exists("EngineName",$param) and $param["EngineName"] !== null) {
            $this->EngineName = $param["EngineName"];
        }

        if (array_key_exists("EngineExeStatus",$param) and $param["EngineExeStatus"] !== null) {
            $this->EngineExeStatus = $param["EngineExeStatus"];
        }

        if (array_key_exists("TaskKind",$param) and $param["TaskKind"] !== null) {
            $this->TaskKind = $param["TaskKind"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("TaskContent",$param) and $param["TaskContent"] !== null) {
            $this->TaskContent = $param["TaskContent"];
        }

        if (array_key_exists("InputBytesSum",$param) and $param["InputBytesSum"] !== null) {
            $this->InputBytesSum = $param["InputBytesSum"];
        }

        if (array_key_exists("ShuffleReadBytesSum",$param) and $param["ShuffleReadBytesSum"] !== null) {
            $this->ShuffleReadBytesSum = $param["ShuffleReadBytesSum"];
        }

        if (array_key_exists("ShuffleReadRecordsSum",$param) and $param["ShuffleReadRecordsSum"] !== null) {
            $this->ShuffleReadRecordsSum = $param["ShuffleReadRecordsSum"];
        }

        if (array_key_exists("OutputRecordsSum",$param) and $param["OutputRecordsSum"] !== null) {
            $this->OutputRecordsSum = $param["OutputRecordsSum"];
        }

        if (array_key_exists("OutputBytesSum",$param) and $param["OutputBytesSum"] !== null) {
            $this->OutputBytesSum = $param["OutputBytesSum"];
        }

        if (array_key_exists("OutputFilesNum",$param) and $param["OutputFilesNum"] !== null) {
            $this->OutputFilesNum = $param["OutputFilesNum"];
        }

        if (array_key_exists("OutputSmallFilesNum",$param) and $param["OutputSmallFilesNum"] !== null) {
            $this->OutputSmallFilesNum = $param["OutputSmallFilesNum"];
        }

        if (array_key_exists("WaitTime",$param) and $param["WaitTime"] !== null) {
            $this->WaitTime = $param["WaitTime"];
        }

        if (array_key_exists("QueryResultTime",$param) and $param["QueryResultTime"] !== null) {
            $this->QueryResultTime = $param["QueryResultTime"];
        }

        if (array_key_exists("CmdArgs",$param) and $param["CmdArgs"] !== null) {
            $this->CmdArgs = $param["CmdArgs"];
        }

        if (array_key_exists("VCoreSeconds",$param) and $param["VCoreSeconds"] !== null) {
            $this->VCoreSeconds = $param["VCoreSeconds"];
        }

        if (array_key_exists("MemorySeconds",$param) and $param["MemorySeconds"] !== null) {
            $this->MemorySeconds = $param["MemorySeconds"];
        }

        if (array_key_exists("EmrUserName",$param) and $param["EmrUserName"] !== null) {
            $this->EmrUserName = $param["EmrUserName"];
        }

        if (array_key_exists("QueryId",$param) and $param["QueryId"] !== null) {
            $this->QueryId = $param["QueryId"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }
    }
}
