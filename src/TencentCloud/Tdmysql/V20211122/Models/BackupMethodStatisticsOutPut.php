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
 * 备份方式统计对象，提供给 备份集统计详情 接口
 *
 * @method array getAutoBackupSize() 获取<p>自动备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupSize(array $AutoBackupSize) 设置<p>自动备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getManualBackupSize() 获取<p>手动备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManualBackupSize(array $ManualBackupSize) 设置<p>手动备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupMethodStatisticsOutPut extends AbstractModel
{
    /**
     * @var array <p>自动备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupSize;

    /**
     * @var array <p>手动备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManualBackupSize;

    /**
     * @param array $AutoBackupSize <p>自动备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ManualBackupSize <p>手动备份大小，单位Byte</p>
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
        if (array_key_exists("AutoBackupSize",$param) and $param["AutoBackupSize"] !== null) {
            $this->AutoBackupSize = $param["AutoBackupSize"];
        }

        if (array_key_exists("ManualBackupSize",$param) and $param["ManualBackupSize"] !== null) {
            $this->ManualBackupSize = $param["ManualBackupSize"];
        }
    }
}
