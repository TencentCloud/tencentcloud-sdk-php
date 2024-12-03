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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 空目录选项
 *
 * @method boolean getEnableMemory() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableMemory(boolean $EnableMemory) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageCapacity() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageCapacity(integer $StorageCapacity) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStorageUnit() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageUnit(string $StorageUnit) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSizeLimit() 获取-
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeLimit(string $SizeLimit) 设置-
注意：此字段可能返回 null，表示取不到有效值。
 */
class EmptyDirOption extends AbstractModel
{
    /**
     * @var boolean -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableMemory;

    /**
     * @var integer -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageCapacity;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageUnit;

    /**
     * @var string -
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeLimit;

    /**
     * @param boolean $EnableMemory -
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageCapacity -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StorageUnit -
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SizeLimit -
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
        if (array_key_exists("EnableMemory",$param) and $param["EnableMemory"] !== null) {
            $this->EnableMemory = $param["EnableMemory"];
        }

        if (array_key_exists("StorageCapacity",$param) and $param["StorageCapacity"] !== null) {
            $this->StorageCapacity = $param["StorageCapacity"];
        }

        if (array_key_exists("StorageUnit",$param) and $param["StorageUnit"] !== null) {
            $this->StorageUnit = $param["StorageUnit"];
        }

        if (array_key_exists("SizeLimit",$param) and $param["SizeLimit"] !== null) {
            $this->SizeLimit = $param["SizeLimit"];
        }
    }
}
