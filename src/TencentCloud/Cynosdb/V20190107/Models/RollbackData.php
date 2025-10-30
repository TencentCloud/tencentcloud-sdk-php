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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回档任务信息
 *
 * @method integer getCpu() 获取实例CPU
 * @method void setCpu(integer $Cpu) 设置实例CPU
 * @method integer getMemory() 获取实例内存
 * @method void setMemory(integer $Memory) 设置实例内存
 * @method integer getStorageLimit() 获取集群存储上限
 * @method void setStorageLimit(integer $StorageLimit) 设置集群存储上限
 * @method string getOriginalClusterId() 获取原集群id
 * @method void setOriginalClusterId(string $OriginalClusterId) 设置原集群id
 * @method string getOriginalClusterName() 获取原集群名
 * @method void setOriginalClusterName(string $OriginalClusterName) 设置原集群名
 * @method string getRollbackStrategy() 获取回档方式
 * @method void setRollbackStrategy(string $RollbackStrategy) 设置回档方式
 * @method string getSnapshotTime() 获取快照时间
 * @method void setSnapshotTime(string $SnapshotTime) 设置快照时间
 * @method integer getMinCpu() 获取回档到 Serverless 集群时最小 CPU
 * @method void setMinCpu(integer $MinCpu) 设置回档到 Serverless 集群时最小 CPU
 * @method integer getMaxCpu() 获取回档到 Serverless 集群时最大 CPU
 * @method void setMaxCpu(integer $MaxCpu) 设置回档到 Serverless 集群时最大 CPU
 * @method integer getSnapShotId() 获取快照ID
 * @method void setSnapShotId(integer $SnapShotId) 设置快照ID
 * @method array getRollbackDatabases() 获取回档数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollbackDatabases(array $RollbackDatabases) 设置回档数据库
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRollbackTables() 获取回档数据表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRollbackTables(array $RollbackTables) 设置回档数据表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupFileName() 获取备份文件名称
 * @method void setBackupFileName(string $BackupFileName) 设置备份文件名称
 * @method RollbackProcessInfo getRollbackProcess() 获取回档进程
 * @method void setRollbackProcess(RollbackProcessInfo $RollbackProcess) 设置回档进程
 */
class RollbackData extends AbstractModel
{
    /**
     * @var integer 实例CPU
     */
    public $Cpu;

    /**
     * @var integer 实例内存
     */
    public $Memory;

    /**
     * @var integer 集群存储上限
     */
    public $StorageLimit;

    /**
     * @var string 原集群id
     */
    public $OriginalClusterId;

    /**
     * @var string 原集群名
     */
    public $OriginalClusterName;

    /**
     * @var string 回档方式
     */
    public $RollbackStrategy;

    /**
     * @var string 快照时间
     */
    public $SnapshotTime;

    /**
     * @var integer 回档到 Serverless 集群时最小 CPU
     */
    public $MinCpu;

    /**
     * @var integer 回档到 Serverless 集群时最大 CPU
     */
    public $MaxCpu;

    /**
     * @var integer 快照ID
     */
    public $SnapShotId;

    /**
     * @var array 回档数据库
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RollbackDatabases;

    /**
     * @var array 回档数据表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RollbackTables;

    /**
     * @var string 备份文件名称
     */
    public $BackupFileName;

    /**
     * @var RollbackProcessInfo 回档进程
     */
    public $RollbackProcess;

    /**
     * @param integer $Cpu 实例CPU
     * @param integer $Memory 实例内存
     * @param integer $StorageLimit 集群存储上限
     * @param string $OriginalClusterId 原集群id
     * @param string $OriginalClusterName 原集群名
     * @param string $RollbackStrategy 回档方式
     * @param string $SnapshotTime 快照时间
     * @param integer $MinCpu 回档到 Serverless 集群时最小 CPU
     * @param integer $MaxCpu 回档到 Serverless 集群时最大 CPU
     * @param integer $SnapShotId 快照ID
     * @param array $RollbackDatabases 回档数据库
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RollbackTables 回档数据表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupFileName 备份文件名称
     * @param RollbackProcessInfo $RollbackProcess 回档进程
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("OriginalClusterId",$param) and $param["OriginalClusterId"] !== null) {
            $this->OriginalClusterId = $param["OriginalClusterId"];
        }

        if (array_key_exists("OriginalClusterName",$param) and $param["OriginalClusterName"] !== null) {
            $this->OriginalClusterName = $param["OriginalClusterName"];
        }

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("MinCpu",$param) and $param["MinCpu"] !== null) {
            $this->MinCpu = $param["MinCpu"];
        }

        if (array_key_exists("MaxCpu",$param) and $param["MaxCpu"] !== null) {
            $this->MaxCpu = $param["MaxCpu"];
        }

        if (array_key_exists("SnapShotId",$param) and $param["SnapShotId"] !== null) {
            $this->SnapShotId = $param["SnapShotId"];
        }

        if (array_key_exists("RollbackDatabases",$param) and $param["RollbackDatabases"] !== null) {
            $this->RollbackDatabases = [];
            foreach ($param["RollbackDatabases"] as $key => $value){
                $obj = new RollbackDatabase();
                $obj->deserialize($value);
                array_push($this->RollbackDatabases, $obj);
            }
        }

        if (array_key_exists("RollbackTables",$param) and $param["RollbackTables"] !== null) {
            $this->RollbackTables = [];
            foreach ($param["RollbackTables"] as $key => $value){
                $obj = new RollbackTable();
                $obj->deserialize($value);
                array_push($this->RollbackTables, $obj);
            }
        }

        if (array_key_exists("BackupFileName",$param) and $param["BackupFileName"] !== null) {
            $this->BackupFileName = $param["BackupFileName"];
        }

        if (array_key_exists("RollbackProcess",$param) and $param["RollbackProcess"] !== null) {
            $this->RollbackProcess = new RollbackProcessInfo();
            $this->RollbackProcess->deserialize($param["RollbackProcess"]);
        }
    }
}
