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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 快照文件信息
 *
 * @method string getSnapshotPolicyId() 获取快照策略Id。
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) 设置快照策略Id。
 * @method string getInstanceId() 获取实例Id。
 * @method void setInstanceId(string $InstanceId) 设置实例Id。
 * @method string getSnapshotFileId() 获取快照文件Id。
 * @method void setSnapshotFileId(string $SnapshotFileId) 设置快照文件Id。
 * @method string getBackupTime() 获取备份时间。
 * @method void setBackupTime(string $BackupTime) 设置备份时间。
 * @method string getOperator() 获取操作者Uin。
 * @method void setOperator(string $Operator) 设置操作者Uin。
 */
class SnapshotFileInfo extends AbstractModel
{
    /**
     * @var string 快照策略Id。
     */
    public $SnapshotPolicyId;

    /**
     * @var string 实例Id。
     */
    public $InstanceId;

    /**
     * @var string 快照文件Id。
     */
    public $SnapshotFileId;

    /**
     * @var string 备份时间。
     */
    public $BackupTime;

    /**
     * @var string 操作者Uin。
     */
    public $Operator;

    /**
     * @param string $SnapshotPolicyId 快照策略Id。
     * @param string $InstanceId 实例Id。
     * @param string $SnapshotFileId 快照文件Id。
     * @param string $BackupTime 备份时间。
     * @param string $Operator 操作者Uin。
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
        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotFileId",$param) and $param["SnapshotFileId"] !== null) {
            $this->SnapshotFileId = $param["SnapshotFileId"];
        }

        if (array_key_exists("BackupTime",$param) and $param["BackupTime"] !== null) {
            $this->BackupTime = $param["BackupTime"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
