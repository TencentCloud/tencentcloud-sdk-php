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
 * 定期备份策略的详细信息
 *
 * @method boolean getIsActivated() 获取定期备份策略是否激活。
 * @method void setIsActivated(boolean $IsActivated) 设置定期备份策略是否激活。
 * @method boolean getIsPermanent() 获取使用该定期备份策略创建出来的备份是否永久保留。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPermanent(boolean $IsPermanent) 设置使用该定期备份策略创建出来的备份是否永久保留。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextTriggerTime() 获取使用该定期备份策略创建出来的备份是否永久保留。
 * @method void setNextTriggerTime(string $NextTriggerTime) 设置使用该定期备份策略创建出来的备份是否永久保留。
 * @method string getAutoBackupPolicyState() 获取NORMAL
 * @method void setAutoBackupPolicyState(string $AutoBackupPolicyState) 设置NORMAL
 * @method string getAutoBackupPolicyName() 获取备份策略的名称。
 * @method void setAutoBackupPolicyName(string $AutoBackupPolicyName) 设置备份策略的名称。
 * @method array getPolicy() 获取定期备份的执行策略。
 * @method void setPolicy(array $Policy) 设置定期备份的执行策略。
 * @method string getAutoBackupPolicyId() 获取备份策略ID。
 * @method void setAutoBackupPolicyId(string $AutoBackupPolicyId) 设置备份策略ID。
 * @method string getCreateTime() 获取备份策略的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置备份策略的创建时间。
 * @method integer getRetentionDays() 获取使用该定期备份策略创建出来的备份保留天数。
 * @method void setRetentionDays(integer $RetentionDays) 设置使用该定期备份策略创建出来的备份保留天数。
 * @method integer getAppId() 获取用户AppId。
 * @method void setAppId(integer $AppId) 设置用户AppId。
 * @method array getInstanceIdSet() 获取定期备份策略绑定的实例ID列表。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置定期备份策略绑定的实例ID列表。
 * @method integer getRetentionMonths() 获取该定期快照创建的快照最大保留月数
 * @method void setRetentionMonths(integer $RetentionMonths) 设置该定期快照创建的快照最大保留月数
 * @method integer getRetentionAmount() 获取该定期快照创建的快照最大保留数量
 * @method void setRetentionAmount(integer $RetentionAmount) 设置该定期快照创建的快照最大保留数量
 * @method string getAccountName() 获取创建人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置创建人。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountUin() 获取主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取策略存储类型
 * @method void setStorageType(string $StorageType) 设置策略存储类型
 * @method string getVaultId() 获取备份库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVaultId(string $VaultId) 设置备份库ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedRetentionPolicy getAdvancedRetentionPolicy() 获取高级保留策略
 * @method void setAdvancedRetentionPolicy(AdvancedRetentionPolicy $AdvancedRetentionPolicy) 设置高级保留策略
 */
class AutoBackupPolicy extends AbstractModel
{
    /**
     * @var boolean 定期备份策略是否激活。
     */
    public $IsActivated;

    /**
     * @var boolean 使用该定期备份策略创建出来的备份是否永久保留。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPermanent;

    /**
     * @var string 使用该定期备份策略创建出来的备份是否永久保留。
     */
    public $NextTriggerTime;

    /**
     * @var string NORMAL
     */
    public $AutoBackupPolicyState;

    /**
     * @var string 备份策略的名称。
     */
    public $AutoBackupPolicyName;

    /**
     * @var array 定期备份的执行策略。
     */
    public $Policy;

    /**
     * @var string 备份策略ID。
     */
    public $AutoBackupPolicyId;

    /**
     * @var string 备份策略的创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 使用该定期备份策略创建出来的备份保留天数。
     */
    public $RetentionDays;

    /**
     * @var integer 用户AppId。
     */
    public $AppId;

    /**
     * @var array 定期备份策略绑定的实例ID列表。
     */
    public $InstanceIdSet;

    /**
     * @var integer 该定期快照创建的快照最大保留月数
     */
    public $RetentionMonths;

    /**
     * @var integer 该定期快照创建的快照最大保留数量
     */
    public $RetentionAmount;

    /**
     * @var string 创建人。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var string 主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string 子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string 策略存储类型
     */
    public $StorageType;

    /**
     * @var string 备份库ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VaultId;

    /**
     * @var AdvancedRetentionPolicy 高级保留策略
     */
    public $AdvancedRetentionPolicy;

    /**
     * @param boolean $IsActivated 定期备份策略是否激活。
     * @param boolean $IsPermanent 使用该定期备份策略创建出来的备份是否永久保留。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextTriggerTime 使用该定期备份策略创建出来的备份是否永久保留。
     * @param string $AutoBackupPolicyState NORMAL
     * @param string $AutoBackupPolicyName 备份策略的名称。
     * @param array $Policy 定期备份的执行策略。
     * @param string $AutoBackupPolicyId 备份策略ID。
     * @param string $CreateTime 备份策略的创建时间。
     * @param integer $RetentionDays 使用该定期备份策略创建出来的备份保留天数。
     * @param integer $AppId 用户AppId。
     * @param array $InstanceIdSet 定期备份策略绑定的实例ID列表。
     * @param integer $RetentionMonths 该定期快照创建的快照最大保留月数
     * @param integer $RetentionAmount 该定期快照创建的快照最大保留数量
     * @param string $AccountName 创建人。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountUin 主账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin 子账号uin。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType 策略存储类型
     * @param string $VaultId 备份库ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedRetentionPolicy $AdvancedRetentionPolicy 高级保留策略
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
        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("NextTriggerTime",$param) and $param["NextTriggerTime"] !== null) {
            $this->NextTriggerTime = $param["NextTriggerTime"];
        }

        if (array_key_exists("AutoBackupPolicyState",$param) and $param["AutoBackupPolicyState"] !== null) {
            $this->AutoBackupPolicyState = $param["AutoBackupPolicyState"];
        }

        if (array_key_exists("AutoBackupPolicyName",$param) and $param["AutoBackupPolicyName"] !== null) {
            $this->AutoBackupPolicyName = $param["AutoBackupPolicyName"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("AutoBackupPolicyId",$param) and $param["AutoBackupPolicyId"] !== null) {
            $this->AutoBackupPolicyId = $param["AutoBackupPolicyId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("RetentionMonths",$param) and $param["RetentionMonths"] !== null) {
            $this->RetentionMonths = $param["RetentionMonths"];
        }

        if (array_key_exists("RetentionAmount",$param) and $param["RetentionAmount"] !== null) {
            $this->RetentionAmount = $param["RetentionAmount"];
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("VaultId",$param) and $param["VaultId"] !== null) {
            $this->VaultId = $param["VaultId"];
        }

        if (array_key_exists("AdvancedRetentionPolicy",$param) and $param["AdvancedRetentionPolicy"] !== null) {
            $this->AdvancedRetentionPolicy = new AdvancedRetentionPolicy();
            $this->AdvancedRetentionPolicy->deserialize($param["AdvancedRetentionPolicy"]);
        }
    }
}
