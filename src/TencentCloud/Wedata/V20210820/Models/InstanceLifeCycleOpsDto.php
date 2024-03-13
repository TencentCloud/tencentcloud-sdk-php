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
 * 实例生命周期详情
 *
 * @method string getTaskId() 获取任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置任务id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurRunDate() 获取数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurRunDate(string $CurRunDate) 设置数据时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLifeRound() 获取实例生命次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifeRound(integer $LifeRound) 设置实例生命次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunType() 获取运行类型 重跑/补录/周期/非周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunType(string $RunType) 设置运行类型 重跑/补录/周期/非周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTries() 获取重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTries(integer $Tries) 设置重跑次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceLifeDetailDtoList() 获取实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceLifeDetailDtoList(array $InstanceLifeDetailDtoList) 设置实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRunnerState() 获取Runner运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunnerState(string $RunnerState) 设置Runner运行状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorDesc() 获取错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorDesc(string $ErrorDesc) 设置错误码
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrorCodeLevel() 获取错误告警级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrorCodeLevel(string $ErrorCodeLevel) 设置错误告警级别
注意：此字段可能返回 null，表示取不到有效值。
 * @method InstanceLogInfo getInstanceLogListOpsDto() 获取实例日志简略信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceLogListOpsDto(InstanceLogInfo $InstanceLogListOpsDto) 设置实例日志简略信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceState() 获取实例状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceState(string $InstanceState) 设置实例状态
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceLifeCycleOpsDto extends AbstractModel
{
    /**
     * @var string 任务id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var string 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurRunDate;

    /**
     * @var integer 实例生命次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifeRound;

    /**
     * @var string 运行类型 重跑/补录/周期/非周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunType;

    /**
     * @var integer 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tries;

    /**
     * @var array 实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceLifeDetailDtoList;

    /**
     * @var string Runner运行状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunnerState;

    /**
     * @var string 错误码
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorDesc;

    /**
     * @var string 错误告警级别
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrorCodeLevel;

    /**
     * @var InstanceLogInfo 实例日志简略信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceLogListOpsDto;

    /**
     * @var string 实例状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceState;

    /**
     * @param string $TaskId 任务id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurRunDate 数据时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LifeRound 实例生命次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunType 运行类型 重跑/补录/周期/非周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Tries 重跑次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceLifeDetailDtoList 实例生命周期
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RunnerState Runner运行状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorDesc 错误码
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrorCodeLevel 错误告警级别
注意：此字段可能返回 null，表示取不到有效值。
     * @param InstanceLogInfo $InstanceLogListOpsDto 实例日志简略信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceState 实例状态
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("CurRunDate",$param) and $param["CurRunDate"] !== null) {
            $this->CurRunDate = $param["CurRunDate"];
        }

        if (array_key_exists("LifeRound",$param) and $param["LifeRound"] !== null) {
            $this->LifeRound = $param["LifeRound"];
        }

        if (array_key_exists("RunType",$param) and $param["RunType"] !== null) {
            $this->RunType = $param["RunType"];
        }

        if (array_key_exists("Tries",$param) and $param["Tries"] !== null) {
            $this->Tries = $param["Tries"];
        }

        if (array_key_exists("InstanceLifeDetailDtoList",$param) and $param["InstanceLifeDetailDtoList"] !== null) {
            $this->InstanceLifeDetailDtoList = [];
            foreach ($param["InstanceLifeDetailDtoList"] as $key => $value){
                $obj = new InstanceLifeDetailDto();
                $obj->deserialize($value);
                array_push($this->InstanceLifeDetailDtoList, $obj);
            }
        }

        if (array_key_exists("RunnerState",$param) and $param["RunnerState"] !== null) {
            $this->RunnerState = $param["RunnerState"];
        }

        if (array_key_exists("ErrorDesc",$param) and $param["ErrorDesc"] !== null) {
            $this->ErrorDesc = $param["ErrorDesc"];
        }

        if (array_key_exists("ErrorCodeLevel",$param) and $param["ErrorCodeLevel"] !== null) {
            $this->ErrorCodeLevel = $param["ErrorCodeLevel"];
        }

        if (array_key_exists("InstanceLogListOpsDto",$param) and $param["InstanceLogListOpsDto"] !== null) {
            $this->InstanceLogListOpsDto = new InstanceLogInfo();
            $this->InstanceLogListOpsDto->deserialize($param["InstanceLogListOpsDto"]);
        }

        if (array_key_exists("InstanceState",$param) and $param["InstanceState"] !== null) {
            $this->InstanceState = $param["InstanceState"];
        }
    }
}
