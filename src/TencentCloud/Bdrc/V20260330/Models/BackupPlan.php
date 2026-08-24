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
 * 整机备份计划
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getAutoBackupPolicyId() 获取备份策略ID
 * @method void setAutoBackupPolicyId(string $AutoBackupPolicyId) 设置备份策略ID
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getAppId() 获取APP ID
 * @method void setAppId(integer $AppId) 设置APP ID
 * @method integer getBackupCount() 获取备份数量
 * @method void setBackupCount(integer $BackupCount) 设置备份数量
 * @method string getLastTriggerTime() 获取上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerTime(string $LastTriggerTime) 设置上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastTriggerError() 获取上次执行错误信息，如果为空表示上次执行成功。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastTriggerError(string $LastTriggerError) 设置上次执行错误信息，如果为空表示上次执行成功。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupPlan extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 备份策略ID
     */
    public $AutoBackupPolicyId;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer APP ID
     */
    public $AppId;

    /**
     * @var integer 备份数量
     */
    public $BackupCount;

    /**
     * @var string 上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerTime;

    /**
     * @var string 上次执行错误信息，如果为空表示上次执行成功。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastTriggerError;

    /**
     * @param string $InstanceId 实例ID
     * @param string $AutoBackupPolicyId 备份策略ID
     * @param string $ModifyTime 修改时间
     * @param string $CreateTime 创建时间
     * @param integer $AppId APP ID
     * @param integer $BackupCount 备份数量
     * @param string $LastTriggerTime 上次执行时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastTriggerError 上次执行错误信息，如果为空表示上次执行成功。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("AutoBackupPolicyId",$param) and $param["AutoBackupPolicyId"] !== null) {
            $this->AutoBackupPolicyId = $param["AutoBackupPolicyId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("BackupCount",$param) and $param["BackupCount"] !== null) {
            $this->BackupCount = $param["BackupCount"];
        }

        if (array_key_exists("LastTriggerTime",$param) and $param["LastTriggerTime"] !== null) {
            $this->LastTriggerTime = $param["LastTriggerTime"];
        }

        if (array_key_exists("LastTriggerError",$param) and $param["LastTriggerError"] !== null) {
            $this->LastTriggerError = $param["LastTriggerError"];
        }
    }
}
