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
 * 手动备份任务信息
 *
 * @method string getBackupType() 获取备份类型。snapshot-快照备份
 * @method void setBackupType(string $BackupType) 设置备份类型。snapshot-快照备份
 * @method string getBackupMethod() 获取备份方式。auto-自动备份，manual-手动
 * @method void setBackupMethod(string $BackupMethod) 设置备份方式。auto-自动备份，manual-手动
 * @method string getSnapshotTime() 获取备份时间
 * @method void setSnapshotTime(string $SnapshotTime) 设置备份时间
 * @method array getCrossRegionBackupInfos() 获取跨地域备份项详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCrossRegionBackupInfos(array $CrossRegionBackupInfos) 设置跨地域备份项详细信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class ManualBackupData extends AbstractModel
{
    /**
     * @var string 备份类型。snapshot-快照备份
     */
    public $BackupType;

    /**
     * @var string 备份方式。auto-自动备份，manual-手动
     */
    public $BackupMethod;

    /**
     * @var string 备份时间
     */
    public $SnapshotTime;

    /**
     * @var array 跨地域备份项详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CrossRegionBackupInfos;

    /**
     * @param string $BackupType 备份类型。snapshot-快照备份
     * @param string $BackupMethod 备份方式。auto-自动备份，manual-手动
     * @param string $SnapshotTime 备份时间
     * @param array $CrossRegionBackupInfos 跨地域备份项详细信息
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
        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->BackupMethod = $param["BackupMethod"];
        }

        if (array_key_exists("SnapshotTime",$param) and $param["SnapshotTime"] !== null) {
            $this->SnapshotTime = $param["SnapshotTime"];
        }

        if (array_key_exists("CrossRegionBackupInfos",$param) and $param["CrossRegionBackupInfos"] !== null) {
            $this->CrossRegionBackupInfos = [];
            foreach ($param["CrossRegionBackupInfos"] as $key => $value){
                $obj = new CrossRegionBackupItem();
                $obj->deserialize($value);
                array_push($this->CrossRegionBackupInfos, $obj);
            }
        }
    }
}
