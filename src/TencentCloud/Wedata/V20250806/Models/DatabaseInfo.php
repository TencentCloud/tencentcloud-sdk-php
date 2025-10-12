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
 * 数据库信息
 *
 * @method string getGuid() 获取数据库GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGuid(string $Guid) 设置数据库GUID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置数据库名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCatalogName() 获取数据库目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCatalogName(string $CatalogName) 设置数据库目录
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取数据库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置数据库描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLocation() 获取数据库位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLocation(string $Location) 设置数据库位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStorageSize() 获取数据库存储大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStorageSize(integer $StorageSize) 设置数据库存储大小
注意：此字段可能返回 null，表示取不到有效值。
 */
class DatabaseInfo extends AbstractModel
{
    /**
     * @var string 数据库GUID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Guid;

    /**
     * @var string 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 数据库目录
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CatalogName;

    /**
     * @var string 数据库描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 数据库位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Location;

    /**
     * @var integer 数据库存储大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StorageSize;

    /**
     * @param string $Guid 数据库GUID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 数据库名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CatalogName 数据库目录
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 数据库描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Location 数据库位置
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $StorageSize 数据库存储大小
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
        if (array_key_exists("Guid",$param) and $param["Guid"] !== null) {
            $this->Guid = $param["Guid"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = $param["Location"];
        }

        if (array_key_exists("StorageSize",$param) and $param["StorageSize"] !== null) {
            $this->StorageSize = $param["StorageSize"];
        }
    }
}
