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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义树结构出参作业列表
 *
 * @method string getJobId() 获取作业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobId(string $JobId) 设置作业Id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取作业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置作业名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getJobType() 获取作业类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setJobType(integer $JobType) 设置作业类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取作业占用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置作业占用资源
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取作业状态 启动或者停止或者暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置作业状态 启动或者停止或者暂停
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScalingType() 获取0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScalingType(integer $ScalingType) 设置0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCpu() 获取RunningCpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCpu(float $RunningCpu) 设置RunningCpu
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningMem() 获取RunningMem
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningMem(float $RunningMem) 设置RunningMem
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDecodeSqlCode() 获取sql
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDecodeSqlCode(string $DecodeSqlCode) 设置sql
注意：此字段可能返回 null，表示取不到有效值。
 */
class TreeJobSets extends AbstractModel
{
    /**
     * @var string 作业Id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobId;

    /**
     * @var string 作业名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 作业类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $JobType;

    /**
     * @var float 作业占用资源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var integer 作业状态 启动或者停止或者暂停
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var integer 0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ScalingType;

    /**
     * @var float RunningCpu
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCpu;

    /**
     * @var float RunningMem
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningMem;

    /**
     * @var string sql
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DecodeSqlCode;

    /**
     * @param string $JobId 作业Id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 作业名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $JobType 作业类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu 作业占用资源
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 作业状态 启动或者停止或者暂停
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ScalingType 0:代表没开启调优任务，1:开启智能调优，2:代表定时调优

注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCpu RunningCpu
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningMem RunningMem
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DecodeSqlCode sql
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("JobType",$param) and $param["JobType"] !== null) {
            $this->JobType = $param["JobType"];
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ScalingType",$param) and $param["ScalingType"] !== null) {
            $this->ScalingType = $param["ScalingType"];
        }

        if (array_key_exists("RunningCpu",$param) and $param["RunningCpu"] !== null) {
            $this->RunningCpu = $param["RunningCpu"];
        }

        if (array_key_exists("RunningMem",$param) and $param["RunningMem"] !== null) {
            $this->RunningMem = $param["RunningMem"];
        }

        if (array_key_exists("DecodeSqlCode",$param) and $param["DecodeSqlCode"] !== null) {
            $this->DecodeSqlCode = $param["DecodeSqlCode"];
        }
    }
}
