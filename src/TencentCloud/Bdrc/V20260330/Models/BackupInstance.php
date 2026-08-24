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
 * 描述实例的备份信息
 *
 * @method array getAutoBackupPolicyIdSet() 获取实例绑定的定期备份策略列表。
 * @method void setAutoBackupPolicyIdSet(array $AutoBackupPolicyIdSet) 设置实例绑定的定期备份策略列表。
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method integer getAppId() 获取用户AppId。
 * @method void setAppId(integer $AppId) 设置用户AppId。
 * @method string getLatestBackupTime() 获取实例最新备份时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestBackupTime(string $LatestBackupTime) 设置实例最新备份时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupGroupIdSet() 获取实例的备份组ID列表。
 * @method void setBackupGroupIdSet(array $BackupGroupIdSet) 设置实例的备份组ID列表。
 * @method string getModifyTime() 获取修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置修改时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 */
class BackupInstance extends AbstractModel
{
    /**
     * @var array 实例绑定的定期备份策略列表。
     */
    public $AutoBackupPolicyIdSet;

    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var integer 用户AppId。
     */
    public $AppId;

    /**
     * @var string 实例最新备份时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestBackupTime;

    /**
     * @var array 实例的备份组ID列表。
     */
    public $BackupGroupIdSet;

    /**
     * @var string 修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @param array $AutoBackupPolicyIdSet 实例绑定的定期备份策略列表。
     * @param string $InstanceId 实例ID。
     * @param integer $AppId 用户AppId。
     * @param string $LatestBackupTime 实例最新备份时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupGroupIdSet 实例的备份组ID列表。
     * @param string $ModifyTime 修改时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
     * @param string $InstanceName 实例名称
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
        if (array_key_exists("AutoBackupPolicyIdSet",$param) and $param["AutoBackupPolicyIdSet"] !== null) {
            $this->AutoBackupPolicyIdSet = $param["AutoBackupPolicyIdSet"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("LatestBackupTime",$param) and $param["LatestBackupTime"] !== null) {
            $this->LatestBackupTime = $param["LatestBackupTime"];
        }

        if (array_key_exists("BackupGroupIdSet",$param) and $param["BackupGroupIdSet"] !== null) {
            $this->BackupGroupIdSet = $param["BackupGroupIdSet"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
