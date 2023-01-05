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
 * 快照策略
 *
 * @method string getSnapshotPolicyName() 获取快照策略名称。
 * @method void setSnapshotPolicyName(string $SnapshotPolicyName) 设置快照策略名称。
 * @method string getBackupType() 获取备份策略类型，operate-操作备份，time-定时备份。
 * @method void setBackupType(string $BackupType) 设置备份策略类型，operate-操作备份，time-定时备份。
 * @method integer getKeepTime() 获取保留时间，支持1～365天。
 * @method void setKeepTime(integer $KeepTime) 设置保留时间，支持1～365天。
 * @method boolean getCreateNewCos() 获取是否创建新的cos桶，默认为False。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateNewCos(boolean $CreateNewCos) 设置是否创建新的cos桶，默认为False。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCosRegion() 获取cos桶所在地域。
 * @method void setCosRegion(string $CosRegion) 设置cos桶所在地域。
 * @method string getCosBucket() 获取cos桶。
 * @method void setCosBucket(string $CosBucket) 设置cos桶。
 * @method string getSnapshotPolicyId() 获取快照策略Id。
 * @method void setSnapshotPolicyId(string $SnapshotPolicyId) 设置快照策略Id。
 * @method array getBackupPolicies() 获取时间备份策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupPolicies(array $BackupPolicies) 设置时间备份策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnable() 获取启用状态，True-启用，False-停用，默认为True。
 * @method void setEnable(boolean $Enable) 设置启用状态，True-启用，False-停用，默认为True。
 * @method string getCreateTime() 获取创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间。
注意：此字段可能返回 null，表示取不到有效值。
 */
class SnapshotPolicy extends AbstractModel
{
    /**
     * @var string 快照策略名称。
     */
    public $SnapshotPolicyName;

    /**
     * @var string 备份策略类型，operate-操作备份，time-定时备份。
     */
    public $BackupType;

    /**
     * @var integer 保留时间，支持1～365天。
     */
    public $KeepTime;

    /**
     * @var boolean 是否创建新的cos桶，默认为False。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateNewCos;

    /**
     * @var string cos桶所在地域。
     */
    public $CosRegion;

    /**
     * @var string cos桶。
     */
    public $CosBucket;

    /**
     * @var string 快照策略Id。
     */
    public $SnapshotPolicyId;

    /**
     * @var array 时间备份策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupPolicies;

    /**
     * @var boolean 启用状态，True-启用，False-停用，默认为True。
     */
    public $Enable;

    /**
     * @var string 创建时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $SnapshotPolicyName 快照策略名称。
     * @param string $BackupType 备份策略类型，operate-操作备份，time-定时备份。
     * @param integer $KeepTime 保留时间，支持1～365天。
     * @param boolean $CreateNewCos 是否创建新的cos桶，默认为False。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CosRegion cos桶所在地域。
     * @param string $CosBucket cos桶。
     * @param string $SnapshotPolicyId 快照策略Id。
     * @param array $BackupPolicies 时间备份策略。
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Enable 启用状态，True-启用，False-停用，默认为True。
     * @param string $CreateTime 创建时间。
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
        if (array_key_exists("SnapshotPolicyName",$param) and $param["SnapshotPolicyName"] !== null) {
            $this->SnapshotPolicyName = $param["SnapshotPolicyName"];
        }

        if (array_key_exists("BackupType",$param) and $param["BackupType"] !== null) {
            $this->BackupType = $param["BackupType"];
        }

        if (array_key_exists("KeepTime",$param) and $param["KeepTime"] !== null) {
            $this->KeepTime = $param["KeepTime"];
        }

        if (array_key_exists("CreateNewCos",$param) and $param["CreateNewCos"] !== null) {
            $this->CreateNewCos = $param["CreateNewCos"];
        }

        if (array_key_exists("CosRegion",$param) and $param["CosRegion"] !== null) {
            $this->CosRegion = $param["CosRegion"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("SnapshotPolicyId",$param) and $param["SnapshotPolicyId"] !== null) {
            $this->SnapshotPolicyId = $param["SnapshotPolicyId"];
        }

        if (array_key_exists("BackupPolicies",$param) and $param["BackupPolicies"] !== null) {
            $this->BackupPolicies = [];
            foreach ($param["BackupPolicies"] as $key => $value){
                $obj = new BackupPolicy();
                $obj->deserialize($value);
                array_push($this->BackupPolicies, $obj);
            }
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
