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
 * @method array getDataBackupSize() 获取<p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDataBackupSize(array $DataBackupSize) 设置<p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getLogBackupSize() 获取<p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogBackupSize(array $LogBackupSize) 设置<p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupTypeStatisticsModel extends AbstractModel
{
    /**
     * @var array <p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DataBackupSize;

    /**
     * @var array <p>日志备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogBackupSize;

    /**
     * @param array $DataBackupSize <p>数据备份大小，单位Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $LogBackupSize <p>日志备份大小，单位Byte</p>
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
        if (array_key_exists("DataBackupSize",$param) and $param["DataBackupSize"] !== null) {
            $this->DataBackupSize = $param["DataBackupSize"];
        }

        if (array_key_exists("LogBackupSize",$param) and $param["LogBackupSize"] !== null) {
            $this->LogBackupSize = $param["LogBackupSize"];
        }
    }
}
