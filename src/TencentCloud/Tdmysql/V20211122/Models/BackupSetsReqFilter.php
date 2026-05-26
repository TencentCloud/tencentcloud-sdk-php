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
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 备份集查询的filter
 *
 * @method string getBackupMethod() 获取<p>备份方式,多个值用逗号隔开</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>snapshot： 快照备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupMethod(string $BackupMethod) 设置<p>备份方式,多个值用逗号隔开</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>snapshot： 快照备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupStatus() 获取<p>备份状态，多个值用逗号隔开，含义说明：等待调度pending， 运行中 running, 成功success,失败 failed</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupStatus(string $BackupStatus) 设置<p>备份状态，多个值用逗号隔开，含义说明：等待调度pending， 运行中 running, 成功success,失败 failed</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupType() 获取<p>备份类型，多个值用逗号隔开，含义说明：全量备份 full</p><p>枚举值：</p><ul><li>full： 全量备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupType(string $BackupType) 设置<p>备份类型，多个值用逗号隔开，含义说明：全量备份 full</p><p>枚举值：</p><ul><li>full： 全量备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManualBackup() 获取<p>备份触发方式</p><p>枚举值：</p><ul><li>0： 自动备份</li><li>1： 手工备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualBackup(string $ManualBackup) 设置<p>备份触发方式</p><p>枚举值：</p><ul><li>0： 自动备份</li><li>1： 手工备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupSetsReqFilter extends AbstractModel
{
    /**
     * @var string <p>备份方式,多个值用逗号隔开</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>snapshot： 快照备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupMethod;

    /**
     * @var string <p>备份状态，多个值用逗号隔开，含义说明：等待调度pending， 运行中 running, 成功success,失败 failed</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupStatus;

    /**
     * @var string <p>备份类型，多个值用逗号隔开，含义说明：全量备份 full</p><p>枚举值：</p><ul><li>full： 全量备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupType;

    /**
     * @var string <p>备份触发方式</p><p>枚举值：</p><ul><li>0： 自动备份</li><li>1： 手工备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualBackup;

    /**
     * @param string $BackupMethod <p>备份方式,多个值用逗号隔开</p><p>枚举值：</p><ul><li>physical： 物理备份</li><li>snapshot： 快照备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupStatus <p>备份状态，多个值用逗号隔开，含义说明：等待调度pending， 运行中 running, 成功success,失败 failed</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupType <p>备份类型，多个值用逗号隔开，含义说明：全量备份 full</p><p>枚举值：</p><ul><li>full： 全量备份</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManualBackup <p>备份触发方式</p><p>枚举值：</p><ul><li>0： 自动备份</li><li>1： 手工备份</li></ul>
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
        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("BackupStatus",$param) and $param["BackupStatus"] !== null) {
            $this->BackupStatus = $param["BackupStatus"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("ManualBackup",$param) and $param["ManualBackup"] !== null) {
            $this->ManualBackup = $param["ManualBackup"];
        }
    }
}
