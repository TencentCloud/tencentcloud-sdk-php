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
 * MongoDB 产品表级（集合级）空间对象项，描述单个集合的空间使用统计信息。
 *
 * @method integer getAppId() 获取<p>应用 Id（AppId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(integer $AppId) 设置<p>应用 Id（AppId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInstanceId() 获取<p>实例 Id。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 Id。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDb() 获取<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDb(string $Db) 设置<p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取<p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置<p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSizeOnDisk() 获取<p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSizeOnDisk(integer $SizeOnDisk) 设置<p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongoCollectionDetail getCollection() 获取<p>集合级空间使用明细。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCollection(MongoCollectionDetail $Collection) 设置<p>集合级空间使用明细。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongoDBTableSpaceItem extends AbstractModel
{
    /**
     * @var integer <p>应用 Id（AppId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var string <p>实例 Id。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var string <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Db;

    /**
     * @var integer <p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var integer <p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SizeOnDisk;

    /**
     * @var MongoCollectionDetail <p>集合级空间使用明细。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Collection;

    /**
     * @param integer $AppId <p>应用 Id（AppId）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InstanceId <p>实例 Id。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Db <p>数据库名。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp <p>数据采集时间戳（毫秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SizeOnDisk <p>磁盘占用大小（字节）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongoCollectionDetail $Collection <p>集合级空间使用明细。</p>
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
