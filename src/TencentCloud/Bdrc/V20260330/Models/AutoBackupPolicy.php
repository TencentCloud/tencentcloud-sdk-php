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
 * @method boolean getIsActivated() 获取<p>定期备份策略是否激活。</p>
 * @method void setIsActivated(boolean $IsActivated) 设置<p>定期备份策略是否激活。</p>
 * @method boolean getIsPermanent() 获取<p>使用该定期备份策略创建出来的备份是否永久保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPermanent(boolean $IsPermanent) 设置<p>使用该定期备份策略创建出来的备份是否永久保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNextTriggerTime() 获取<p>使用该定期备份策略创建出来的备份是否永久保留。</p>
 * @method void setNextTriggerTime(string $NextTriggerTime) 设置<p>使用该定期备份策略创建出来的备份是否永久保留。</p>
 * @method string getAutoBackupPolicyState() 获取<p>NORMAL</p>
 * @method void setAutoBackupPolicyState(string $AutoBackupPolicyState) 设置<p>NORMAL</p>
 * @method string getAutoBackupPolicyName() 获取<p>备份策略的名称。</p>
 * @method void setAutoBackupPolicyName(string $AutoBackupPolicyName) 设置<p>备份策略的名称。</p>
 * @method array getPolicy() 获取<p>定期备份的执行策略。</p>
 * @method void setPolicy(array $Policy) 设置<p>定期备份的执行策略。</p>
 * @method string getAutoBackupPolicyId() 获取<p>备份策略ID。</p>
 * @method void setAutoBackupPolicyId(string $AutoBackupPolicyId) 设置<p>备份策略ID。</p>
 * @method string getCreateTime() 获取<p>备份策略的创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>备份策略的创建时间。</p>
 * @method integer getRetentionDays() 获取<p>使用该定期备份策略创建出来的备份保留天数。</p>
 * @method void setRetentionDays(integer $RetentionDays) 设置<p>使用该定期备份策略创建出来的备份保留天数。</p>
 * @method integer getAppId() 获取<p>用户AppId。</p>
 * @method void setAppId(integer $AppId) 设置<p>用户AppId。</p>
 * @method array getInstanceIdSet() 获取<p>定期备份策略绑定的实例ID列表。</p>
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置<p>定期备份策略绑定的实例ID列表。</p>
 * @method integer getRetentionMonths() 获取<p>使用该定期备份策略创建的备份最大保留月数</p>
 * @method void setRetentionMonths(integer $RetentionMonths) 设置<p>使用该定期备份策略创建的备份最大保留月数</p>
 * @method integer getRetentionAmount() 获取<p>使用该定期备份策略创建的备份最大保留数量</p>
 * @method void setRetentionAmount(integer $RetentionAmount) 设置<p>使用该定期备份策略创建的备份最大保留数量</p>
 * @method string getAccountName() 获取<p>创建人。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountName(string $AccountName) 设置<p>创建人。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAccountUin() 获取<p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAccountUin(string $AccountUin) 设置<p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubAccountUin() 获取<p>子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubAccountUin(string $SubAccountUin) 设置<p>子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageType() 获取<p>策略存储类型</p>
 * @method void setStorageType(string $StorageType) 设置<p>策略存储类型</p>
 * @method string getVaultId() 获取<p>备份库ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVaultId(string $VaultId) 设置<p>备份库ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedRetentionPolicy getAdvancedRetentionPolicy() 获取<p>高级保留策略</p>
 * @method void setAdvancedRetentionPolicy(AdvancedRetentionPolicy $AdvancedRetentionPolicy) 设置<p>高级保留策略</p>
 * @method array getBackupResourceInfos() 获取<p>备份资源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBackupResourceInfos(array $BackupResourceInfos) 设置<p>备份资源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoBackupPolicy extends AbstractModel
{
    /**
     * @var boolean <p>定期备份策略是否激活。</p>
     */
    public $IsActivated;

    /**
     * @var boolean <p>使用该定期备份策略创建出来的备份是否永久保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPermanent;

    /**
     * @var string <p>使用该定期备份策略创建出来的备份是否永久保留。</p>
     */
    public $NextTriggerTime;

    /**
     * @var string <p>NORMAL</p>
     */
    public $AutoBackupPolicyState;

    /**
     * @var string <p>备份策略的名称。</p>
     */
    public $AutoBackupPolicyName;

    /**
     * @var array <p>定期备份的执行策略。</p>
     */
    public $Policy;

    /**
     * @var string <p>备份策略ID。</p>
     */
    public $AutoBackupPolicyId;

    /**
     * @var string <p>备份策略的创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>使用该定期备份策略创建出来的备份保留天数。</p>
     */
    public $RetentionDays;

    /**
     * @var integer <p>用户AppId。</p>
     */
    public $AppId;

    /**
     * @var array <p>定期备份策略绑定的实例ID列表。</p>
     */
    public $InstanceIdSet;

    /**
     * @var integer <p>使用该定期备份策略创建的备份最大保留月数</p>
     */
    public $RetentionMonths;

    /**
     * @var integer <p>使用该定期备份策略创建的备份最大保留数量</p>
     */
    public $RetentionAmount;

    /**
     * @var string <p>创建人。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountName;

    /**
     * @var string <p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AccountUin;

    /**
     * @var string <p>子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubAccountUin;

    /**
     * @var string <p>策略存储类型</p>
     */
    public $StorageType;

    /**
     * @var string <p>备份库ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VaultId;

    /**
     * @var AdvancedRetentionPolicy <p>高级保留策略</p>
     */
    public $AdvancedRetentionPolicy;

    /**
     * @var array <p>备份资源信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BackupResourceInfos;

    /**
     * @param boolean $IsActivated <p>定期备份策略是否激活。</p>
     * @param boolean $IsPermanent <p>使用该定期备份策略创建出来的备份是否永久保留。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NextTriggerTime <p>使用该定期备份策略创建出来的备份是否永久保留。</p>
     * @param string $AutoBackupPolicyState <p>NORMAL</p>
     * @param string $AutoBackupPolicyName <p>备份策略的名称。</p>
     * @param array $Policy <p>定期备份的执行策略。</p>
     * @param string $AutoBackupPolicyId <p>备份策略ID。</p>
     * @param string $CreateTime <p>备份策略的创建时间。</p>
     * @param integer $RetentionDays <p>使用该定期备份策略创建出来的备份保留天数。</p>
     * @param integer $AppId <p>用户AppId。</p>
     * @param array $InstanceIdSet <p>定期备份策略绑定的实例ID列表。</p>
     * @param integer $RetentionMonths <p>使用该定期备份策略创建的备份最大保留月数</p>
     * @param integer $RetentionAmount <p>使用该定期备份策略创建的备份最大保留数量</p>
     * @param string $AccountName <p>创建人。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AccountUin <p>主账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubAccountUin <p>子账号uin。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageType <p>策略存储类型</p>
     * @param string $VaultId <p>备份库ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedRetentionPolicy $AdvancedRetentionPolicy <p>高级保留策略</p>
     * @param array $BackupResourceInfos <p>备份资源信息</p>
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

        if (array_key_exists("BackupResourceInfos",$param) and $param["BackupResourceInfos"] !== null) {
            $this->BackupResourceInfos = [];
            foreach ($param["BackupResourceInfos"] as $key => $value){
                $obj = new BackupResourceInfo();
                $obj->deserialize($value);
                array_push($this->BackupResourceInfos, $obj);
            }
        }
    }
}
