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
 * @method string getBackupGroupId() 获取<p>备份组ID。</p>
 * @method void setBackupGroupId(string $BackupGroupId) 设置<p>备份组ID。</p>
 * @method integer getPercent() 获取<p>备份组创建进度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPercent(integer $Percent) 设置<p>备份组创建进度。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getBackupBindDisk() 获取<p>备份和云盘绑定关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupBindDisk(array $BackupBindDisk) 设置<p>备份和云盘绑定关系</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getBackupGroupName() 获取<p>备份组名称。</p>
 * @method void setBackupGroupName(string $BackupGroupName) 设置<p>备份组名称。</p>
 * @method string getBackupGroupState() 获取<p>备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中</p>
 * @method void setBackupGroupState(string $BackupGroupState) 设置<p>备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method integer getAppId() 获取<p>用户AppId。</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppId。</p>
 * @method boolean getIsPermanent() 获取<p>是否为永久备份组。</p>
 * @method void setIsPermanent(boolean $IsPermanent) 设置<p>是否为永久备份组。</p>
 * @method string getDeadlineTime() 获取<p>备份组的到期时间。如果为永久备份组，则取值为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeadlineTime(string $DeadlineTime) 设置<p>备份组的到期时间。如果为永久备份组，则取值为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>创建备份组的实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>创建备份组的实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceDetails() 获取<p>创建备份组时刻实例的详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceDetails(string $InstanceDetails) 设置<p>创建备份组时刻实例的详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountName() 获取<p>创建人名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置<p>创建人名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountUin() 获取<p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置<p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取<p>创建备份的子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>创建备份的子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAutoBackupPolicyId() 获取<p>创建当前备份的定期备份策略ID，为null则为手动创建的备份。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoBackupPolicyId(string $AutoBackupPolicyId) 设置<p>创建当前备份的定期备份策略ID，为null则为手动创建的备份。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStartTime() 获取<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置<p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEndTime() 获取<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEndTime(string $EndTime) 设置<p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class BackupGroup extends AbstractModel
{
    /**
     * @var string <p>备份组ID。</p>
     */
    public $BackupGroupId;

    /**
     * @var integer <p>备份组创建进度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Percent;

    /**
     * @var array <p>备份和云盘绑定关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupBindDisk;

    /**
     * @var string <p>备份组名称。</p>
     */
    public $BackupGroupName;

    /**
     * @var string <p>备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中</p>
     */
    public $BackupGroupState;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>用户AppId。</p>
     */
    public $AppId;

    /**
     * @var boolean <p>是否为永久备份组。</p>
     */
    public $IsPermanent;

    /**
     * @var string <p>备份组的到期时间。如果为永久备份组，则取值为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeadlineTime;

    /**
     * @var string <p>创建备份组的实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>创建备份组时刻实例的详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceDetails;

    /**
     * @var string <p>创建人名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var string <p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string <p>创建备份的子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string <p>创建当前备份的定期备份策略ID，为null则为手动创建的备份。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoBackupPolicyId;

    /**
     * @var string <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var string <p>结束时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EndTime;

    /**
     * @param string $BackupGroupId <p>备份组ID。</p>
     * @param integer $Percent <p>备份组创建进度。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $BackupBindDisk <p>备份和云盘绑定关系</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $BackupGroupName <p>备份组名称。</p>
     * @param string $BackupGroupState <p>备份组状态。NORMAL: 正常；CREATING: 创建中；ROLLBACKING: 回滚中</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param integer $AppId <p>用户AppId。</p>
     * @param boolean $IsPermanent <p>是否为永久备份组。</p>
     * @param string $DeadlineTime <p>备份组的到期时间。如果为永久备份组，则取值为null。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>创建备份组的实例ID。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceDetails <p>创建备份组时刻实例的详情。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountName <p>创建人名称。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountUin <p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin <p>创建备份的子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AutoBackupPolicyId <p>创建当前备份的定期备份策略ID，为null则为手动创建的备份。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StartTime <p>开始时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EndTime <p>结束时间</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
