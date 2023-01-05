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
 * DescribeSgSnapshotFileContent返回参数结构体
 *
 * @method string getInstanceId() 获取实例Id，即安全组Id。
 * @method void setInstanceId(string $InstanceId) 设置实例Id，即安全组Id。
 * @method string getSnapshotPolicyId() 获取快照策略Id。
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) 设置快照策略Id。
 * @method string getSnapshotFileId() 获取快照文件Id。
 * @method void setSnapshotFileId(string $SnapshotFileId) 设置快照文件Id。
 * @method string getBackupTime() 获取备份时间。
 * @method void setBackupTime(string $BackupTime) 设置备份时间。
 * @method string getOperator() 获取操作者。
 * @method void setOperator(string $Operator) 设置操作者。
 * @method array getOriginalData() 获取原始数据。
 * @method void setOriginalData(array $OriginalData) 设置原始数据。
 * @method array getBackupData() 获取备份数据。
 * @method void setBackupData(array $BackupData) 设置备份数据。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSgSnapshotFileContentResponse extends AbstractModel
{
    /**
     * @var string 实例Id，即安全组Id。
     */
    public $InstanceId;

    /**
     * @var string 快照策略Id。
     */
    public $SnapshotPolicyId;

    /**
     * @var string 快照文件Id。
     */
    public $SnapshotFileId;

    /**
     * @var string 备份时间。
     */
    public $BackupTime;

    /**
     * @var string 操作者。
     */
    public $Operator;

    /**
     * @var array 原始数据。
     */
    public $OriginalData;

    /**
     * @var array 备份数据。
     */
    public $BackupData;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例Id，即安全组Id。
     * @param string $SnapshotPolicyId 快照策略Id。
     * @param string $SnapshotFileId 快照文件Id。
     * @param string $BackupTime 备份时间。
     * @param string $Operator 操作者。
     * @param array $OriginalData 原始数据。
     * @param array $BackupData 备份数据。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
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

        if (array_key_exists("OriginalData",$param) and $param["OriginalData"] !== null) {
            $this->OriginalData = [];
            foreach ($param["OriginalData"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->OriginalData, $obj);
            }
        }

        if (array_key_exists("BackupData",$param) and $param["BackupData"] !== null) {
            $this->BackupData = [];
            foreach ($param["BackupData"] as $key => $value){
                $obj = new SecurityGroupPolicy();
                $obj->deserialize($value);
                array_push($this->BackupData, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
