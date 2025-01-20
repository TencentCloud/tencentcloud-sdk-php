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
 * 批量修改快照策略信息
 *
 * @method string getSnapshotPolicyId() 获取快照策略Id。
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) 设置快照策略Id。
 * @method string getSnapshotPolicyName() 获取快照策略名称。
 * @method void setSnapshotPolicyName(string $SnapshotPolicyName) 设置快照策略名称。
 * @method array getBackupPolicies() 获取备份策略。
 * @method void setBackupPolicies(array $BackupPolicies) 设置备份策略。
 * @method integer getKeepTime() 获取快照保留时间，支持1～365天。
 * @method void setKeepTime(integer $KeepTime) 设置快照保留时间，支持1～365天。
 */
class BatchModifySnapshotPolicy extends AbstractModel
{
    /**
     * @var string 快照策略Id。
     */
    public $SnapshotPolicyId;

    /**
     * @var string 快照策略名称。
     */
    public $SnapshotPolicyName;

    /**
     * @var array 备份策略。
     */
    public $BackupPolicies;

    /**
     * @var integer 快照保留时间，支持1～365天。
     */
    public $KeepTime;

    /**
     * @param string $SnapshotPolicyId 快照策略Id。
     * @param string $SnapshotPolicyName 快照策略名称。
     * @param array $BackupPolicies 备份策略。
     * @param integer $KeepTime 快照保留时间，支持1～365天。
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

        if (array_key_exists("SnapshotPolicyName",$param) and $param["SnapshotPolicyName"] !== null) {
            $this->SnapshotPolicyName = $param["SnapshotPolicyName"];
        }

        if (array_key_exists("BackupPolicies",$param) and $param["BackupPolicies"] !== null) {
            $this->BackupPolicies = [];
            foreach ($param["BackupPolicies"] as $key => $value){
                $obj = new BackupPolicy();
                $obj->deserialize($value);
                array_push($this->BackupPolicies, $obj);
            }
        }

        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }
    }
}
