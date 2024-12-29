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
 * 混合计费
 *
 * @method string getSerialId() 获取集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSerialId(string $SerialId) 设置集群id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCuNum() 获取cu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCuNum(integer $CuNum) 设置cu数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatusDesc() 获取状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatusDesc(string $StatusDesc) 设置状态描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRunningCu() 获取运行cu
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningCu(float $RunningCu) 设置运行cu
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getTotalCpu() 获取总的CPU
 * @method void setTotalCpu(float $TotalCpu) 设置总的CPU
 * @method float getTotalMem() 获取总的内存
 * @method void setTotalMem(float $TotalMem) 设置总的内存
 * @method float getRunningCpu() 获取运行的CPU
 * @method void setRunningCpu(float $RunningCpu) 设置运行的CPU
 * @method float getRunningMem() 获取运行的内存
 * @method void setRunningMem(float $RunningMem) 设置运行的内存
 */
class SubEks extends AbstractModel
{
    /**
     * @var string 集群id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SerialId;

    /**
     * @var integer cu数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CuNum;

    /**
     * @var integer 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StatusDesc;

    /**
     * @var float 运行cu
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningCu;

    /**
     * @var float 总的CPU
     */
    public $TotalCpu;

    /**
     * @var float 总的内存
     */
    public $TotalMem;

    /**
     * @var float 运行的CPU
     */
    public $RunningCpu;

    /**
     * @var float 运行的内存
     */
    public $RunningMem;

    /**
     * @param string $SerialId 集群id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CuNum cu数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StatusDesc 状态描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $RunningCu 运行cu
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $TotalCpu 总的CPU
     * @param float $TotalMem 总的内存
     * @param float $RunningCpu 运行的CPU
     * @param float $RunningMem 运行的内存
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
        if (array_key_exists("SerialId",$param) and $param["SerialId"] !== null) {
            $this->SerialId = $param["SerialId"];
        }

        if (array_key_exists("CuNum",$param) and $param["CuNum"] !== null) {
            $this->CuNum = $param["CuNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusDesc",$param) and $param["StatusDesc"] !== null) {
            $this->StatusDesc = $param["StatusDesc"];
        }

        if (array_key_exists("RunningCu",$param) and $param["RunningCu"] !== null) {
            $this->RunningCu = $param["RunningCu"];
        }

        if (array_key_exists("TotalCpu",$param) and $param["TotalCpu"] !== null) {
            $this->TotalCpu = $param["TotalCpu"];
        }

        if (array_key_exists("TotalMem",$param) and $param["TotalMem"] !== null) {
            $this->TotalMem = $param["TotalMem"];
        }

        if (array_key_exists("RunningCpu",$param) and $param["RunningCpu"] !== null) {
            $this->RunningCpu = $param["RunningCpu"];
        }

        if (array_key_exists("RunningMem",$param) and $param["RunningMem"] !== null) {
            $this->RunningMem = $param["RunningMem"];
        }
    }
}
