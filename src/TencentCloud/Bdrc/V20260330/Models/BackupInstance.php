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
 * @method array getAutoBackupPolicyIdSet() 获取<p>实例绑定的定期备份策略列表。</p>
 * @method void setAutoBackupPolicyIdSet(array $AutoBackupPolicyIdSet) 设置<p>实例绑定的定期备份策略列表。</p>
 * @method string getInstanceId() 获取<p>实例ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID。</p>
 * @method integer getAppId() 获取<p>用户AppId。</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppId。</p>
 * @method string getLatestBackupTime() 获取<p>实例最新备份时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLatestBackupTime(string $LatestBackupTime) 设置<p>实例最新备份时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupGroupIdSet() 获取<p>实例的备份组ID列表。</p>
 * @method void setBackupGroupIdSet(array $BackupGroupIdSet) 设置<p>实例的备份组ID列表。</p>
 * @method string getModifyTime() 获取<p>修改时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getBackupSizeMb() 获取<p>备份数据量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupSizeMb(integer $BackupSizeMb) 设置<p>备份数据量</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupInstance extends AbstractModel
{
    /**
     * @var array <p>实例绑定的定期备份策略列表。</p>
     */
    public $AutoBackupPolicyIdSet;

    /**
     * @var string <p>实例ID。</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>用户AppId。</p>
     */
    public $AppId;

    /**
     * @var string <p>实例最新备份时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LatestBackupTime;

    /**
     * @var array <p>实例的备份组ID列表。</p>
     */
    public $BackupGroupIdSet;

    /**
     * @var string <p>修改时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>备份数据量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupSizeMb;

    /**
     * @param array $AutoBackupPolicyIdSet <p>实例绑定的定期备份策略列表。</p>
     * @param string $InstanceId <p>实例ID。</p>
     * @param integer $AppId <p>用户AppId。</p>
     * @param string $LatestBackupTime <p>实例最新备份时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupGroupIdSet <p>实例的备份组ID列表。</p>
     * @param string $ModifyTime <p>修改时间。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $BackupSizeMb <p>备份数据量</p>
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

        if (array_key_exists("BackupSizeMb",$param) and $param["BackupSizeMb"] !== null) {
            $this->BackupSizeMb = $param["BackupSizeMb"];
        }
    }
}
