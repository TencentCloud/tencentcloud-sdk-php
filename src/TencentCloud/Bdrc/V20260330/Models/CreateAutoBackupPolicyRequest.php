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
 * CreateAutoBackupPolicy请求参数结构体
 *
 * @method array getPolicy() 获取<p>定期备份的执行策略。</p>
 * @method void setPolicy(array $Policy) 设置<p>定期备份的执行策略。</p>
 * @method boolean getIsPermanent() 获取<p>通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。</p>
 * @method void setIsPermanent(boolean $IsPermanent) 设置<p>通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。</p>
 * @method string getAutoBackupPolicyName() 获取<p>定期备份策略的名称。</p>
 * @method void setAutoBackupPolicyName(string $AutoBackupPolicyName) 设置<p>定期备份策略的名称。</p>
 * @method boolean getIsActivated() 获取<p>是否激活定期备份策略。</p>
 * @method void setIsActivated(boolean $IsActivated) 设置<p>是否激活定期备份策略。</p>
 * @method integer getRetentionDays() 获取<p>通过定期备份策略创建出的备份保留时间。本参数与 RetentionMonths、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
 * @method void setRetentionDays(integer $RetentionDays) 设置<p>通过定期备份策略创建出的备份保留时间。本参数与 RetentionMonths、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
 * @method integer getRetentionMonths() 获取<p>该定期备份策略创建的备份可以保留的月数。本参数与 RetentionDays、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
 * @method void setRetentionMonths(integer $RetentionMonths) 设置<p>该定期备份策略创建的备份可以保留的月数。本参数与 RetentionDays、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
 * @method integer getRetentionAmount() 获取<p>通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份。本参数与 RetentionDays、RetentionMonths互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
 * @method void setRetentionAmount(integer $RetentionAmount) 设置<p>通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份。本参数与 RetentionDays、RetentionMonths互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
 * @method string getStorageType() 获取<p>备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON</p>
 * @method void setStorageType(string $StorageType) 设置<p>备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON</p>
 * @method string getVaultId() 获取<p>备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。</p>
 * @method void setVaultId(string $VaultId) 设置<p>备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。</p>
 * @method AdvancedRetentionPolicy getAdvancedRetentionPolicy() 获取<p>定期备份高级保留策略，该参数不可与 IsPermanent 参数冲突。当 IsPermanent 为 false 或不传、且未传入 RetentionDays / RetentionMonths / RetentionAmount 时，必须传入本参数。</p>
 * @method void setAdvancedRetentionPolicy(AdvancedRetentionPolicy $AdvancedRetentionPolicy) 设置<p>定期备份高级保留策略，该参数不可与 IsPermanent 参数冲突。当 IsPermanent 为 false 或不传、且未传入 RetentionDays / RetentionMonths / RetentionAmount 时，必须传入本参数。</p>
 */
class CreateAutoBackupPolicyRequest extends AbstractModel
{
    /**
     * @var array <p>定期备份的执行策略。</p>
     */
    public $Policy;

    /**
     * @var boolean <p>通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。</p>
     */
    public $IsPermanent;

    /**
     * @var string <p>定期备份策略的名称。</p>
     */
    public $AutoBackupPolicyName;

    /**
     * @var boolean <p>是否激活定期备份策略。</p>
     */
    public $IsActivated;

    /**
     * @var integer <p>通过定期备份策略创建出的备份保留时间。本参数与 RetentionMonths、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
     */
    public $RetentionDays;

    /**
     * @var integer <p>该定期备份策略创建的备份可以保留的月数。本参数与 RetentionDays、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
     */
    public $RetentionMonths;

    /**
     * @var integer <p>通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份。本参数与 RetentionDays、RetentionMonths互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
     */
    public $RetentionAmount;

    /**
     * @var string <p>备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON</p>
     */
    public $StorageType;

    /**
     * @var string <p>备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。</p>
     */
    public $VaultId;

    /**
     * @var AdvancedRetentionPolicy <p>定期备份高级保留策略，该参数不可与 IsPermanent 参数冲突。当 IsPermanent 为 false 或不传、且未传入 RetentionDays / RetentionMonths / RetentionAmount 时，必须传入本参数。</p>
     */
    public $AdvancedRetentionPolicy;

    /**
     * @param array $Policy <p>定期备份的执行策略。</p>
     * @param boolean $IsPermanent <p>通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。</p>
     * @param string $AutoBackupPolicyName <p>定期备份策略的名称。</p>
     * @param boolean $IsActivated <p>是否激活定期备份策略。</p>
     * @param integer $RetentionDays <p>通过定期备份策略创建出的备份保留时间。本参数与 RetentionMonths、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
     * @param integer $RetentionMonths <p>该定期备份策略创建的备份可以保留的月数。本参数与 RetentionDays、RetentionAmount 互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
     * @param integer $RetentionAmount <p>通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份。本参数与 RetentionDays、RetentionMonths互斥，不可同时传入。当 IsPermanent 为 false 或不传时，RetentionDays / RetentionMonths / RetentionAmount / AdvancedRetentionPolicy 必须传入至少一项有效值。</p>
     * @param string $StorageType <p>备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON</p>
     * @param string $VaultId <p>备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。</p>
     * @param AdvancedRetentionPolicy $AdvancedRetentionPolicy <p>定期备份高级保留策略，该参数不可与 IsPermanent 参数冲突。当 IsPermanent 为 false 或不传、且未传入 RetentionDays / RetentionMonths / RetentionAmount 时，必须传入本参数。</p>
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
        if (array_key_exists("Policy",$param) and $param["Policy"] !== null) {
            $this->Policy = [];
            foreach ($param["Policy"] as $key => $value){
                $obj = new Policy();
                $obj->deserialize($value);
                array_push($this->Policy, $obj);
            }
        }

        if (array_key_exists("IsPermanent",$param) and $param["IsPermanent"] !== null) {
            $this->IsPermanent = $param["IsPermanent"];
        }

        if (array_key_exists("AutoBackupPolicyName",$param) and $param["AutoBackupPolicyName"] !== null) {
            $this->AutoBackupPolicyName = $param["AutoBackupPolicyName"];
        }

        if (array_key_exists("IsActivated",$param) and $param["IsActivated"] !== null) {
            $this->IsActivated = $param["IsActivated"];
        }

        if (array_key_exists("RetentionDays",$param) and $param["RetentionDays"] !== null) {
            $this->RetentionDays = $param["RetentionDays"];
        }

        if (array_key_exists("RetentionMonths",$param) and $param["RetentionMonths"] !== null) {
            $this->RetentionMonths = $param["RetentionMonths"];
        }

        if (array_key_exists("RetentionAmount",$param) and $param["RetentionAmount"] !== null) {
            $this->RetentionAmount = $param["RetentionAmount"];
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
