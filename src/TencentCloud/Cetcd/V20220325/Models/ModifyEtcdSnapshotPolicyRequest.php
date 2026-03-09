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
namespace TencentCloud\Cetcd\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEtcdSnapshotPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取etcd实例id
 * @method void setInstanceId(string $InstanceId) 设置etcd实例id
 * @method string getSnapshotPolicyName() 获取快照策略名称
 * @method void setSnapshotPolicyName(string $SnapshotPolicyName) 设置快照策略名称
 * @method EtcdBackupSettings getBackupSettings() 获取备份参数设置
 * @method void setBackupSettings(EtcdBackupSettings $BackupSettings) 设置备份参数设置
 */
class ModifyEtcdSnapshotPolicyRequest extends AbstractModel
{
    /**
     * @var string etcd实例id
     */
    public $InstanceId;

    /**
     * @var string 快照策略名称
     */
    public $SnapshotPolicyName;

    /**
     * @var EtcdBackupSettings 备份参数设置
     */
    public $BackupSettings;

    /**
     * @param string $InstanceId etcd实例id
     * @param string $SnapshotPolicyName 快照策略名称
     * @param EtcdBackupSettings $BackupSettings 备份参数设置
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

        if (array_key_exists("SnapshotPolicyName",$param) and $param["SnapshotPolicyName"] !== null) {
            $this->SnapshotPolicyName = $param["SnapshotPolicyName"];
        }

        if (array_key_exists("BackupSettings",$param) and $param["BackupSettings"] !== null) {
            $this->BackupSettings = new EtcdBackupSettings();
            $this->BackupSettings->deserialize($param["BackupSettings"]);
        }
    }
}
