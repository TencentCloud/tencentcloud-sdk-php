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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRansomDefenseState返回参数结构体
 *
 * @method integer getStrategyCount() 获取已开启防御策略数量
 * @method void setStrategyCount(integer $StrategyCount) 设置已开启防御策略数量
 * @method integer getMachineCount() 获取已开启防御机器数
 * @method void setMachineCount(integer $MachineCount) 设置已开启防御机器数
 * @method integer getSnapshotSize() 获取快照总容量
 * @method void setSnapshotSize(integer $SnapshotSize) 设置快照总容量
 * @method integer getRollBackTaskCount() 获取恢复备份任务数量
 * @method void setRollBackTaskCount(integer $RollBackTaskCount) 设置恢复备份任务数量
 * @method integer getProgressingSnapshotTaskCount() 获取进行中的创建快照任务数
 * @method void setProgressingSnapshotTaskCount(integer $ProgressingSnapshotTaskCount) 设置进行中的创建快照任务数
 * @method integer getProgressingRollBackTaskCount() 获取进行中的恢复备份任务数
 * @method void setProgressingRollBackTaskCount(integer $ProgressingRollBackTaskCount) 设置进行中的恢复备份任务数
 * @method integer getMachineTotal() 获取机器总数
 * @method void setMachineTotal(integer $MachineTotal) 设置机器总数
 * @method integer getStrategyTotal() 获取策略总数
 * @method void setStrategyTotal(integer $StrategyTotal) 设置策略总数
 * @method integer getBalanceStatus() 获取账户状态：0未欠费，1已欠费
 * @method void setBalanceStatus(integer $BalanceStatus) 设置账户状态：0未欠费，1已欠费
 * @method integer getBackupMachineCount() 获取已备份主机数
 * @method void setBackupMachineCount(integer $BackupMachineCount) 设置已备份主机数
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRansomDefenseStateResponse extends AbstractModel
{
    /**
     * @var integer 已开启防御策略数量
     */
    public $StrategyCount;

    /**
     * @var integer 已开启防御机器数
     */
    public $MachineCount;

    /**
     * @var integer 快照总容量
     */
    public $SnapshotSize;

    /**
     * @var integer 恢复备份任务数量
     */
    public $RollBackTaskCount;

    /**
     * @var integer 进行中的创建快照任务数
     */
    public $ProgressingSnapshotTaskCount;

    /**
     * @var integer 进行中的恢复备份任务数
     */
    public $ProgressingRollBackTaskCount;

    /**
     * @var integer 机器总数
     */
    public $MachineTotal;

    /**
     * @var integer 策略总数
     */
    public $StrategyTotal;

    /**
     * @var integer 账户状态：0未欠费，1已欠费
     */
    public $BalanceStatus;

    /**
     * @var integer 已备份主机数
     */
    public $BackupMachineCount;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $StrategyCount 已开启防御策略数量
     * @param integer $MachineCount 已开启防御机器数
     * @param integer $SnapshotSize 快照总容量
     * @param integer $RollBackTaskCount 恢复备份任务数量
     * @param integer $ProgressingSnapshotTaskCount 进行中的创建快照任务数
     * @param integer $ProgressingRollBackTaskCount 进行中的恢复备份任务数
     * @param integer $MachineTotal 机器总数
     * @param integer $StrategyTotal 策略总数
     * @param integer $BalanceStatus 账户状态：0未欠费，1已欠费
     * @param integer $BackupMachineCount 已备份主机数
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("StrategyCount",$param) and $param["StrategyCount"] !== null) {
            $this->StrategyCount = $param["StrategyCount"];
        }

        if (array_key_exists("MachineCount",$param) and $param["MachineCount"] !== null) {
            $this->MachineCount = $param["MachineCount"];
        }

        if (array_key_exists("SnapshotSize",$param) and $param["SnapshotSize"] !== null) {
            $this->SnapshotSize = $param["SnapshotSize"];
        }

        if (array_key_exists("RollBackTaskCount",$param) and $param["RollBackTaskCount"] !== null) {
            $this->RollBackTaskCount = $param["RollBackTaskCount"];
        }

        if (array_key_exists("ProgressingSnapshotTaskCount",$param) and $param["ProgressingSnapshotTaskCount"] !== null) {
            $this->ProgressingSnapshotTaskCount = $param["ProgressingSnapshotTaskCount"];
        }

        if (array_key_exists("ProgressingRollBackTaskCount",$param) and $param["ProgressingRollBackTaskCount"] !== null) {
            $this->ProgressingRollBackTaskCount = $param["ProgressingRollBackTaskCount"];
        }

        if (array_key_exists("MachineTotal",$param) and $param["MachineTotal"] !== null) {
            $this->MachineTotal = $param["MachineTotal"];
        }

        if (array_key_exists("StrategyTotal",$param) and $param["StrategyTotal"] !== null) {
            $this->StrategyTotal = $param["StrategyTotal"];
        }

        if (array_key_exists("BalanceStatus",$param) and $param["BalanceStatus"] !== null) {
            $this->BalanceStatus = $param["BalanceStatus"];
        }

        if (array_key_exists("BackupMachineCount",$param) and $param["BackupMachineCount"] !== null) {
            $this->BackupMachineCount = $param["BackupMachineCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
