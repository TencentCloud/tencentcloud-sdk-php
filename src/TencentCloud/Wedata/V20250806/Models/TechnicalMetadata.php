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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TechnicalMetadata
 *
 * @method string getOwner() 获取责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOwner(string $Owner) 设置责任人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取数据表位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置数据表位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置存储大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class TechnicalMetadata extends AbstractModel
{
    /**
     * @var string 责任人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Owner;

    /**
     * @var string 数据表位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var integer 存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @param string $Owner 责任人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location 数据表位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 存储大小
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
        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = $param["Owner"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }
    }
}
