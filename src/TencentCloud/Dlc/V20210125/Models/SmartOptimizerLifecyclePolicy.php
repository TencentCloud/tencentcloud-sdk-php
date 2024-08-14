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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SmartOptimizerLifecyclePolicy
 *
 * @method string getLifecycleEnable() 获取生命周期启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLifecycleEnable(string $LifecycleEnable) 设置生命周期启用
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExpiration() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiration(integer $Expiration) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getDropTable() 获取是否删表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropTable(boolean $DropTable) 设置是否删表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredField() 获取过期字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredField(string $ExpiredField) 设置过期字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpiredFieldFormat() 获取过期字段格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpiredFieldFormat(string $ExpiredFieldFormat) 设置过期字段格式
注意：此字段可能返回 null，表示取不到有效值。
 */
class SmartOptimizerLifecyclePolicy extends AbstractModel
{
    /**
     * @var string 生命周期启用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LifecycleEnable;

    /**
     * @var integer 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Expiration;

    /**
     * @var boolean 是否删表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropTable;

    /**
     * @var string 过期字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredField;

    /**
     * @var string 过期字段格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpiredFieldFormat;

    /**
     * @param string $LifecycleEnable 生命周期启用
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Expiration 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $DropTable 是否删表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredField 过期字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpiredFieldFormat 过期字段格式
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
        if (array_key_exists("LifecycleEnable",$param) and $param["LifecycleEnable"] !== null) {
            $this->LifecycleEnable = $param["LifecycleEnable"];
        }

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }

        if (array_key_exists("DropTable",$param) and $param["DropTable"] !== null) {
            $this->DropTable = $param["DropTable"];
        }

        if (array_key_exists("ExpiredField",$param) and $param["ExpiredField"] !== null) {
            $this->ExpiredField = $param["ExpiredField"];
        }

        if (array_key_exists("ExpiredFieldFormat",$param) and $param["ExpiredFieldFormat"] !== null) {
            $this->ExpiredFieldFormat = $param["ExpiredFieldFormat"];
        }
    }
}
