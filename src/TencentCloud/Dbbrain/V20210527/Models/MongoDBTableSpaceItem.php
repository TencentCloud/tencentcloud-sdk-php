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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MongoDB 产品集合级空间对象项，包含顶层标识字段与嵌套 Collection 明细。
 *
 * @method integer getAppId() 获取应用 Id（AppId）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置应用 Id（AppId）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取实例 Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例 Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDb() 获取数据库名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDb(string $Db) 设置数据库名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取数据采集时间戳（毫秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置数据采集时间戳（毫秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSizeOnDisk() 获取磁盘占用大小（字节）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeOnDisk(integer $SizeOnDisk) 设置磁盘占用大小（字节）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongoCollectionDetail getCollection() 获取集合级空间使用明细。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollection(MongoCollectionDetail $Collection) 设置集合级空间使用明细。
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongoDBTableSpaceItem extends AbstractModel
{
    /**
     * @var integer 应用 Id（AppId）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string 实例 Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string 数据库名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Db;

    /**
     * @var integer 数据采集时间戳（毫秒）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var integer 磁盘占用大小（字节）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeOnDisk;

    /**
     * @var MongoCollectionDetail 集合级空间使用明细。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Collection;

    /**
     * @param integer $AppId 应用 Id（AppId）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId 实例 Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Db 数据库名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp 数据采集时间戳（毫秒）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SizeOnDisk 磁盘占用大小（字节）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongoCollectionDetail $Collection 集合级空间使用明细。
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Db",$param) and $param["Db"] !== null) {
            $this->Db = $param["Db"];
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("SizeOnDisk",$param) and $param["SizeOnDisk"] !== null) {
            $this->SizeOnDisk = $param["SizeOnDisk"];
        }

        if (array_key_exists("Collection",$param) and $param["Collection"] !== null) {
            $this->Collection = new MongoCollectionDetail();
            $this->Collection->deserialize($param["Collection"]);
        }
    }
}
