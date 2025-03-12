<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getEngineSubmitTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineSubmitTime(string $EngineSubmitTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeTime(string $EngineExeTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEngineExeTimes() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeTimes(integer $EngineExeTimes) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCuConsume() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCuConsume(integer $CuConsume) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResourceUsage() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceUsage(integer $ResourceUsage) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineName() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineName(string $EngineName) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEngineExeStatus() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEngineExeStatus(string $EngineExeStatus) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskKind() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskKind(string $TaskKind) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskType() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskType(string $TaskType) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskContent() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskContent(string $TaskContent) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInputBytesSum() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputBytesSum(integer $InputBytesSum) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShuffleReadBytesSum() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShuffleReadBytesSum(integer $ShuffleReadBytesSum) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getShuffleReadRecordsSum() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShuffleReadRecordsSum(integer $ShuffleReadRecordsSum) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputRecordsSum() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputRecordsSum(integer $OutputRecordsSum) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputBytesSum() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputBytesSum(integer $OutputBytesSum) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputFilesNum() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputFilesNum(integer $OutputFilesNum) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOutputSmallFilesNum() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputSmallFilesNum(integer $OutputSmallFilesNum) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWaitTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWaitTime(integer $WaitTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getQueryResultTime() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryResultTime(integer $QueryResultTime) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCmdArgs() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCmdArgs(string $CmdArgs) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 */
class EngineTaskInfo extends AbstractModel
{
    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineSubmitTime;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeTime;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeTimes;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CuConsume;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceUsage;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineName;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EngineExeStatus;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskKind;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskType;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskContent;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputBytesSum;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShuffleReadBytesSum;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShuffleReadRecordsSum;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputRecordsSum;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputBytesSum;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputFilesNum;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputSmallFilesNum;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WaitTime;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryResultTime;

    /**
     * @var string 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CmdArgs;

    /**
     * @param string $EngineSubmitTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EngineExeTimes 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CuConsume 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResourceUsage 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineName 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EngineExeStatus 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskKind 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskType 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskContent 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $InputBytesSum 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShuffleReadBytesSum 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ShuffleReadRecordsSum 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputRecordsSum 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputBytesSum 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputFilesNum 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OutputSmallFilesNum 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WaitTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $QueryResultTime 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CmdArgs 1
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
    }
}
