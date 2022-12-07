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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeInstance请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getCpu() 获取数据库CPU
 * @method void setCpu(integer $Cpu) 设置数据库CPU
 * @method integer getMemory() 获取数据库内存，单位GB
 * @method void setMemory(integer $Memory) 设置数据库内存，单位GB
 * @method string getUpgradeType() 获取升级类型：upgradeImmediate，upgradeInMaintain
 * @method void setUpgradeType(string $UpgradeType) 设置升级类型：upgradeImmediate，upgradeInMaintain
 * @method integer getStorageLimit() 获取该参数已废弃
 * @method void setStorageLimit(integer $StorageLimit) 设置该参数已废弃
 * @method integer getAutoVoucher() 获取是否自动选择代金券 1是 0否 默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券 1是 0否 默认为0
 * @method string getDbType() 获取该参数已废弃
 * @method void setDbType(string $DbType) 设置该参数已废弃
 * @method integer getDealMode() 获取交易模式 0-下单并支付 1-下单
 * @method void setDealMode(integer $DealMode) 设置交易模式 0-下单并支付 1-下单
 * @method string getUpgradeMode() 获取NormalUpgrade：普通变配，FastUpgrade：极速变配，若变配过程判断会造成闪断，变配流程会终止。
 * @method void setUpgradeMode(string $UpgradeMode) 设置NormalUpgrade：普通变配，FastUpgrade：极速变配，若变配过程判断会造成闪断，变配流程会终止。
 */
class UpgradeInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 数据库CPU
     */
    public $Cpu;

    /**
     * @var integer 数据库内存，单位GB
     */
    public $Memory;

    /**
     * @var string 升级类型：upgradeImmediate，upgradeInMaintain
     */
    public $UpgradeType;

    /**
     * @var integer 该参数已废弃
     */
    public $StorageLimit;

    /**
     * @var integer 是否自动选择代金券 1是 0否 默认为0
     */
    public $AutoVoucher;

    /**
     * @var string 该参数已废弃
     */
    public $DbType;

    /**
     * @var integer 交易模式 0-下单并支付 1-下单
     */
    public $DealMode;

    /**
     * @var string NormalUpgrade：普通变配，FastUpgrade：极速变配，若变配过程判断会造成闪断，变配流程会终止。
     */
    public $UpgradeMode;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $Cpu 数据库CPU
     * @param integer $Memory 数据库内存，单位GB
     * @param string $UpgradeType 升级类型：upgradeImmediate，upgradeInMaintain
     * @param integer $StorageLimit 该参数已废弃
     * @param integer $AutoVoucher 是否自动选择代金券 1是 0否 默认为0
     * @param string $DbType 该参数已废弃
     * @param integer $DealMode 交易模式 0-下单并支付 1-下单
     * @param string $UpgradeMode NormalUpgrade：普通变配，FastUpgrade：极速变配，若变配过程判断会造成闪断，变配流程会终止。
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("UpgradeType",$param) and $param["UpgradeType"] !== null) {
            $this->UpgradeType = $param["UpgradeType"];
        }

        if (array_key_exists("StorageLimit",$param) and $param["StorageLimit"] !== null) {
            $this->StorageLimit = $param["StorageLimit"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("DbType",$param) and $param["DbType"] !== null) {
            $this->DbType = $param["DbType"];
        }

        if (array_key_exists("DealMode",$param) and $param["DealMode"] !== null) {
            $this->DealMode = $param["DealMode"];
        }

        if (array_key_exists("UpgradeMode",$param) and $param["UpgradeMode"] !== null) {
            $this->UpgradeMode = $param["UpgradeMode"];
        }
    }
}
