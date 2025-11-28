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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 变配类型查询出参
 *
 * @method integer getModifyType() 获取变配类型
 * @method void setModifyType(integer $ModifyType) 设置变配类型
 * @method boolean getMigrateFlag() 获取是否迁移标志
 * @method void setMigrateFlag(boolean $MigrateFlag) 设置是否迁移标志
 * @method integer getMigrateCostTime() 获取迁移预计耗时(稳定模式)秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrateCostTime(integer $MigrateCostTime) 设置迁移预计耗时(稳定模式)秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpgradeStrategy() 获取升配模式(1:稳定模式，2:高速模式)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpgradeStrategy(integer $UpgradeStrategy) 设置升配模式(1:稳定模式，2:高速模式)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMigrateCostTimeHighSpeed() 获取迁移预计耗时(高速模式)秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMigrateCostTimeHighSpeed(integer $MigrateCostTimeHighSpeed) 设置迁移预计耗时(高速模式)秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescModifyType extends AbstractModel
{
    /**
     * @var integer 变配类型
     */
    public $ModifyType;

    /**
     * @var boolean 是否迁移标志
     */
    public $MigrateFlag;

    /**
     * @var integer 迁移预计耗时(稳定模式)秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrateCostTime;

    /**
     * @var integer 升配模式(1:稳定模式，2:高速模式)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpgradeStrategy;

    /**
     * @var integer 迁移预计耗时(高速模式)秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MigrateCostTimeHighSpeed;

    /**
     * @param integer $ModifyType 变配类型
     * @param boolean $MigrateFlag 是否迁移标志
     * @param integer $MigrateCostTime 迁移预计耗时(稳定模式)秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpgradeStrategy 升配模式(1:稳定模式，2:高速模式)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MigrateCostTimeHighSpeed 迁移预计耗时(高速模式)秒
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
        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("MigrateFlag",$param) and $param["MigrateFlag"] !== null) {
            $this->MigrateFlag = $param["MigrateFlag"];
        }

        if (array_key_exists("MigrateCostTime",$param) and $param["MigrateCostTime"] !== null) {
            $this->MigrateCostTime = $param["MigrateCostTime"];
        }

        if (array_key_exists("UpgradeStrategy",$param) and $param["UpgradeStrategy"] !== null) {
            $this->UpgradeStrategy = $param["UpgradeStrategy"];
        }

        if (array_key_exists("MigrateCostTimeHighSpeed",$param) and $param["MigrateCostTimeHighSpeed"] !== null) {
            $this->MigrateCostTimeHighSpeed = $param["MigrateCostTimeHighSpeed"];
        }
    }
}
