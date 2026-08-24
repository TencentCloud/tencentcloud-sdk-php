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
 * @method array getPolicy() 获取定期备份的执行策略。
 * @method void setPolicy(array $Policy) 设置定期备份的执行策略。
 * @method boolean getIsPermanent() 获取通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。
 * @method void setIsPermanent(boolean $IsPermanent) 设置通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。
 * @method string getAutoBackupPolicyName() 获取定期备份策略的名称。
 * @method void setAutoBackupPolicyName(string $AutoBackupPolicyName) 设置定期备份策略的名称。
 * @method boolean getIsActivated() 获取是否激活定期备份策略。
 * @method void setIsActivated(boolean $IsActivated) 设置是否激活定期备份策略。
 * @method integer getRetentionDays() 获取通过定期备份策略创建出的备份保留时间。
 * @method void setRetentionDays(integer $RetentionDays) 设置通过定期备份策略创建出的备份保留时间。
 * @method integer getRetentionMonths() 获取该定期备份策略创建的备份可以保留的月数，该参数不可与IsPermanent/RetentionDays参数冲突。
 * @method void setRetentionMonths(integer $RetentionMonths) 设置该定期备份策略创建的备份可以保留的月数，该参数不可与IsPermanent/RetentionDays参数冲突。
 * @method integer getRetentionAmount() 获取通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份，该参数不可与IsPermanent参数冲突。
 * @method void setRetentionAmount(integer $RetentionAmount) 设置通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份，该参数不可与IsPermanent参数冲突。
 * @method string getStorageType() 获取备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON
 * @method void setStorageType(string $StorageType) 设置备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON
 * @method string getVaultId() 获取备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。
 * @method void setVaultId(string $VaultId) 设置备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。
 * @method AdvancedRetentionPolicy getAdvancedRetentionPolicy() 获取定期备份高级保留策略，该参数不可与IsPermanent参数冲突。
 * @method void setAdvancedRetentionPolicy(AdvancedRetentionPolicy $AdvancedRetentionPolicy) 设置定期备份高级保留策略，该参数不可与IsPermanent参数冲突。
 */
class CreateAutoBackupPolicyRequest extends AbstractModel
{
    /**
     * @var array 定期备份的执行策略。
     */
    public $Policy;

    /**
     * @var boolean 通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。
     */
    public $IsPermanent;

    /**
     * @var string 定期备份策略的名称。
     */
    public $AutoBackupPolicyName;

    /**
     * @var boolean 是否激活定期备份策略。
     */
    public $IsActivated;

    /**
     * @var integer 通过定期备份策略创建出的备份保留时间。
     */
    public $RetentionDays;

    /**
     * @var integer 该定期备份策略创建的备份可以保留的月数，该参数不可与IsPermanent/RetentionDays参数冲突。
     */
    public $RetentionMonths;

    /**
     * @var integer 通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份，该参数不可与IsPermanent参数冲突。
     */
    public $RetentionAmount;

    /**
     * @var string 备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON
     */
    public $StorageType;

    /**
     * @var string 备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。
     */
    public $VaultId;

    /**
     * @var AdvancedRetentionPolicy 定期备份高级保留策略，该参数不可与IsPermanent参数冲突。
     */
    public $AdvancedRetentionPolicy;

    /**
     * @param array $Policy 定期备份的执行策略。
     * @param boolean $IsPermanent 通过该定期备份策略创建的备份是否永久保留。false表示非永久保留，true表示永久保留，默认为false。
     * @param string $AutoBackupPolicyName 定期备份策略的名称。
     * @param boolean $IsActivated 是否激活定期备份策略。
     * @param integer $RetentionDays 通过定期备份策略创建出的备份保留时间。
     * @param integer $RetentionMonths 该定期备份策略创建的备份可以保留的月数，该参数不可与IsPermanent/RetentionDays参数冲突。
     * @param integer $RetentionAmount 通过该定期备份策略最多保留的备份个数，超过该个数限制后自动删除最先创建的备份，该参数不可与IsPermanent参数冲突。
     * @param string $StorageType 备份存储类型。COMMON表示走普通模式（不需要备份库），VAULT表示走备份库（必须关联一个备份库）。默认为COMMON
     * @param string $VaultId 备份库ID，创建agent备份策略时必须指定。当StorageType为VAULT时必传。
     * @param AdvancedRetentionPolicy $AdvancedRetentionPolicy 定期备份高级保留策略，该参数不可与IsPermanent参数冲突。
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
