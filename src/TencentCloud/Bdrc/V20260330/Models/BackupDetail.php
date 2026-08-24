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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份详情
 *
 * @method string getBackupId() 获取备份组ID
 * @method void setBackupId(string $BackupId) 设置备份组ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getAutoBackupPolicyId() 获取备份策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupPolicyId(string $AutoBackupPolicyId) 设置备份策略ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupBindDisk() 获取备份和云盘绑定关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupBindDisk(array $BackupBindDisk) 设置备份和云盘绑定关系
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupDetail extends AbstractModel
{
    /**
     * @var string 备份组ID
     */
    public $BackupId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 备份策略ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupPolicyId;

    /**
     * @var array 备份和云盘绑定关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupBindDisk;

    /**
     * @param string $BackupId 备份组ID
     * @param string $InstanceId 实例ID
     * @param string $CreateTime 创建时间
     * @param string $AutoBackupPolicyId 备份策略ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupBindDisk 备份和云盘绑定关系
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
        if (array_key_exists("BackupId",$param) and $param["BackupId"] !== null) {
            $this->BackupId = $param["BackupId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AutoBackupPolicyId",$param) and $param["AutoBackupPolicyId"] !== null) {
            $this->AutoBackupPolicyId = $param["AutoBackupPolicyId"];
        }

        if (array_key_exists("BackupBindDisk",$param) and $param["BackupBindDisk"] !== null) {
            $this->BackupBindDisk = [];
            foreach ($param["BackupBindDisk"] as $key => $value){
                $obj = new ApplyDisk();
                $obj->deserialize($value);
                array_push($this->BackupBindDisk, $obj);
            }
        }
    }
}
