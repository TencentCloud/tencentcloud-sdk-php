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
 * 备份组详情
 *
 * @method string getBackupGroupId() 获取备份组ID。
 * @method void setBackupGroupId(string $BackupGroupId) 设置备份组ID。
 * @method integer getPercent() 获取备份组创建进度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置备份组创建进度。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupBindDisk() 获取备份和云盘绑定关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupBindDisk(array $BackupBindDisk) 设置备份和云盘绑定关系
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupGroupName() 获取备份组名称。
 * @method void setBackupGroupName(string $BackupGroupName) 设置备份组名称。
 * @method string getBackupGroupState() 获取备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中
 * @method void setBackupGroupState(string $BackupGroupState) 设置备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getAppId() 获取用户AppId。
 * @method void setAppId(integer $AppId) 设置用户AppId。
 * @method boolean getIsPermanent() 获取是否为永久备份组。
 * @method void setIsPermanent(boolean $IsPermanent) 设置是否为永久备份组。
 * @method string getDeadlineTime() 获取备份组的到期时间。如果为永久备份组，则取值为null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineTime(string $DeadlineTime) 设置备份组的到期时间。如果为永久备份组，则取值为null。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取创建备份组的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置创建备份组的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceDetails() 获取创建备份组时刻实例的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceDetails(string $InstanceDetails) 设置创建备份组时刻实例的详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取创建人名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置创建人名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountUin() 获取主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取创建备份的子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置创建备份的子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoBackupPolicyId() 获取创建当前备份的定期备份策略ID，为null则为手动创建的备份。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupPolicyId(string $AutoBackupPolicyId) 设置创建当前备份的定期备份策略ID，为null则为手动创建的备份。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupGroup extends AbstractModel
{
    /**
     * @var string 备份组ID。
     */
    public $BackupGroupId;

    /**
     * @var integer 备份组创建进度。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var array 备份和云盘绑定关系
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupBindDisk;

    /**
     * @var string 备份组名称。
     */
    public $BackupGroupName;

    /**
     * @var string 备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中
     */
    public $BackupGroupState;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 用户AppId。
     */
    public $AppId;

    /**
     * @var boolean 是否为永久备份组。
     */
    public $IsPermanent;

    /**
     * @var string 备份组的到期时间。如果为永久备份组，则取值为null。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineTime;

    /**
     * @var string 创建备份组的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 创建备份组时刻实例的详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceDetails;

    /**
     * @var string 创建人名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var string 主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string 创建备份的子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 创建当前备份的定期备份策略ID，为null则为手动创建的备份。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupPolicyId;

    /**
     * @param string $BackupGroupId 备份组ID。
     * @param integer $Percent 备份组创建进度。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupBindDisk 备份和云盘绑定关系
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupGroupName 备份组名称。
     * @param string $BackupGroupState 备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中
     * @param string $ModifyTime 修改时间
     * @param string $CreateTime 创建时间
     * @param integer $AppId 用户AppId。
     * @param boolean $IsPermanent 是否为永久备份组。
     * @param string $DeadlineTime 备份组的到期时间。如果为永久备份组，则取值为null。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 创建备份组的实例ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceDetails 创建备份组时刻实例的详情。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName 创建人名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountUin 主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 创建备份的子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoBackupPolicyId 创建当前备份的定期备份策略ID，为null则为手动创建的备份。
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
        if (array_key_exists("BackupGroupId",$param) and $param["BackupGroupId"] !== null) {
            $this->BackupGroupId = $param["BackupGroupId"];
        }

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("BackupBindDisk",$param) and $param["BackupBindDisk"] !== null) {
            $this->BackupBindDisk = [];
            foreach ($param["BackupBindDisk"] as $key => $value){
                $obj = new ApplyDisk();
                $obj->deserialize($value);
                array_push($this->BackupBindDisk, $obj);
            }
        }

        if (array_key_exists("BackupGroupName",$param) and $param["BackupGroupName"] !== null) {
            $this->BackupGroupName = $param["BackupGroupName"];
        }

        if (array_key_exists("BackupGroupState",$param) and $param["BackupGroupState"] !== null) {
            $this->BackupGroupState = $param["BackupGroupState"];
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

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("DeadlineTime",$param) and $param["DeadlineTime"] !== null) {
            $this->DeadlineTime = $param["DeadlineTime"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceDetails",$param) and $param["InstanceDetails"] !== null) {
            $this->InstanceDetails = $param["InstanceDetails"];
        }

        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("AccountUin",$param) and $param["AccountUin"] !== null) {
            $this->AccountUin = $param["AccountUin"];
        }

        if (array_key_exists("SubAccountUin",$param) and $param["SubAccountUin"] !== null) {
            $this->SubAccountUin = $param["SubAccountUin"];
        }

        if (array_key_exists("AutoBackupPolicyId",$param) and $param["AutoBackupPolicyId"] !== null) {
            $this->AutoBackupPolicyId = $param["AutoBackupPolicyId"];
        }
    }
}
