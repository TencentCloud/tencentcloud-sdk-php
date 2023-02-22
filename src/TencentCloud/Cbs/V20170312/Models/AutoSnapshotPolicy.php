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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了定期快照策略的详细信息
 *
 * @method array getDiskIdSet() 获取已绑定当前定期快照策略的云盘ID列表。
 * @method void setDiskIdSet(array $DiskIdSet) 设置已绑定当前定期快照策略的云盘ID列表。
 * @method boolean getIsActivated() 获取定期快照策略是否激活。
 * @method void setIsActivated(boolean $IsActivated) 设置定期快照策略是否激活。
 * @method string getAutoSnapshotPolicyState() 获取定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
 * @method void setAutoSnapshotPolicyState(string $AutoSnapshotPolicyState) 设置定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
 * @method integer getIsCopyToRemote() 获取是否是跨账号复制快照快照, 1：是, 0: 不是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsCopyToRemote(integer $IsCopyToRemote) 设置是否是跨账号复制快照快照, 1：是, 0: 不是
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsPermanent() 获取使用该定期快照策略创建出来的快照是否永久保留。
 * @method void setIsPermanent(boolean $IsPermanent) 设置使用该定期快照策略创建出来的快照是否永久保留。
 * @method string getNextTriggerTime() 获取定期快照下次触发的时间。
 * @method void setNextTriggerTime(string $NextTriggerTime) 设置定期快照下次触发的时间。
 * @method string getAutoSnapshotPolicyName() 获取定期快照策略名称。
 * @method void setAutoSnapshotPolicyName(string $AutoSnapshotPolicyName) 设置定期快照策略名称。
 * @method string getAutoSnapshotPolicyId() 获取定期快照策略ID。
 * @method void setAutoSnapshotPolicyId(string $AutoSnapshotPolicyId) 设置定期快照策略ID。
 * @method array getPolicy() 获取定期快照的执行策略。
 * @method void setPolicy(array $Policy) 设置定期快照的执行策略。
 * @method string getCreateTime() 获取定期快照策略的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置定期快照策略的创建时间。
 * @method integer getRetentionDays() 获取使用该定期快照策略创建出来的快照保留天数。
 * @method void setRetentionDays(integer $RetentionDays) 设置使用该定期快照策略创建出来的快照保留天数。
 * @method string getCopyToAccountUin() 获取复制的目标账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCopyToAccountUin(string $CopyToAccountUin) 设置复制的目标账户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInstanceIdSet() 获取已绑定当前定期快照策略的实例ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置已绑定当前定期快照策略的实例ID列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetentionMonths() 获取该定期快照创建的快照可以保留的月数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionMonths(integer $RetentionMonths) 设置该定期快照创建的快照可以保留的月数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRetentionAmount() 获取该定期快照创建的快照最大保留数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRetentionAmount(integer $RetentionAmount) 设置该定期快照创建的快照最大保留数量。
注意：此字段可能返回 null，表示取不到有效值。
 * @method AdvancedRetentionPolicy getAdvancedRetentionPolicy() 获取定期快照高级保留策略。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAdvancedRetentionPolicy(AdvancedRetentionPolicy $AdvancedRetentionPolicy) 设置定期快照高级保留策略。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AutoSnapshotPolicy extends AbstractModel
{
    /**
     * @var array 已绑定当前定期快照策略的云盘ID列表。
     */
    public $DiskIdSet;

    /**
     * @var boolean 定期快照策略是否激活。
     */
    public $IsActivated;

    /**
     * @var string 定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
     */
    public $AutoSnapshotPolicyState;

    /**
     * @var integer 是否是跨账号复制快照快照, 1：是, 0: 不是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsCopyToRemote;

    /**
     * @var boolean 使用该定期快照策略创建出来的快照是否永久保留。
     */
    public $IsPermanent;

    /**
     * @var string 定期快照下次触发的时间。
     */
    public $NextTriggerTime;

    /**
     * @var string 定期快照策略名称。
     */
    public $AutoSnapshotPolicyName;

    /**
     * @var string 定期快照策略ID。
     */
    public $AutoSnapshotPolicyId;

    /**
     * @var array 定期快照的执行策略。
     */
    public $Policy;

    /**
     * @var string 定期快照策略的创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 使用该定期快照策略创建出来的快照保留天数。
     */
    public $RetentionDays;

    /**
     * @var string 复制的目标账户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CopyToAccountUin;

    /**
     * @var array 已绑定当前定期快照策略的实例ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceIdSet;

    /**
     * @var integer 该定期快照创建的快照可以保留的月数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionMonths;

    /**
     * @var integer 该定期快照创建的快照最大保留数量。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RetentionAmount;

    /**
     * @var AdvancedRetentionPolicy 定期快照高级保留策略。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AdvancedRetentionPolicy;

    /**
     * @param array $DiskIdSet 已绑定当前定期快照策略的云盘ID列表。
     * @param boolean $IsActivated 定期快照策略是否激活。
     * @param string $AutoSnapshotPolicyState 定期快照策略的状态。取值范围：<br><li>NORMAL：正常<br><li>ISOLATED：已隔离。
     * @param integer $IsCopyToRemote 是否是跨账号复制快照快照, 1：是, 0: 不是
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsPermanent 使用该定期快照策略创建出来的快照是否永久保留。
     * @param string $NextTriggerTime 定期快照下次触发的时间。
     * @param string $AutoSnapshotPolicyName 定期快照策略名称。
     * @param string $AutoSnapshotPolicyId 定期快照策略ID。
     * @param array $Policy 定期快照的执行策略。
     * @param string $CreateTime 定期快照策略的创建时间。
     * @param integer $RetentionDays 使用该定期快照策略创建出来的快照保留天数。
     * @param string $CopyToAccountUin 复制的目标账户ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InstanceIdSet 已绑定当前定期快照策略的实例ID列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetentionMonths 该定期快照创建的快照可以保留的月数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RetentionAmount 该定期快照创建的快照最大保留数量。
注意：此字段可能返回 null，表示取不到有效值。
     * @param AdvancedRetentionPolicy $AdvancedRetentionPolicy 定期快照高级保留策略。
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
        if (array_key_exists("DiskIdSet",$param) and $param["DiskIdSet"] !== null) {
            $this->DiskIdSet = $param["DiskIdSet"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("AutoSnapshotPolicyState",$param) and $param["AutoSnapshotPolicyState"] !== null) {
            $this->AutoSnapshotPolicyState = $param["AutoSnapshotPolicyState"];
        }

        if (array_key_exists("IsCopyToRemote",$param) and $param["IsCopyToRemote"] !== null) {
            $this->IsCopyToRemote = $param["IsCopyToRemote"];
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("NextTriggerTime",$param) and $param["NextTriggerTime"] !== null) {
            $this->NextTriggerTime = $param["NextTriggerTime"];
        }

        if (array_key_exists("AutoSnapshotPolicyName",$param) and $param["AutoSnapshotPolicyName"] !== null) {
            $this->AutoSnapshotPolicyName = $param["AutoSnapshotPolicyName"];
        }

        if (array_key_exists("AutoSnapshotPolicyId",$param) and $param["AutoSnapshotPolicyId"] !== null) {
            $this->AutoSnapshotPolicyId = $param["AutoSnapshotPolicyId"];
        }

        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("CopyToAccountUin",$param) and $param["CopyToAccountUin"] !== null) {
            $this->CopyToAccountUin = $param["CopyToAccountUin"];
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

        if (array_key_exists("AdvancedRetentionPolicy",$param) and $param["AdvancedRetentionPolicy"] !== null) {
            $this->AdvancedRetentionPolicy = new AdvancedRetentionPolicy();
            $this->AdvancedRetentionPolicy->deserialize($param["AdvancedRetentionPolicy"]);
        }
    }
}
