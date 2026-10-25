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
 * MongoDB 产品表空间数据对象。对应 V1 底层返回的顶层包装结构，包含集合级空间明细数组 SpaceSchemas 与外层采集时间戳 Timestamp。
 *
 * @method array getSpaceSchemas() 获取<p>集合级空间明细数组。每项含顶层标识字段（AppId/InstanceId/Db/Timestamp/SizeOnDisk）与嵌套 Collection 明细。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSpaceSchemas(array $SpaceSchemas) 设置<p>集合级空间明细数组。每项含顶层标识字段（AppId/InstanceId/Db/Timestamp/SizeOnDisk）与嵌套 Collection 明细。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取<p>数据采集时间戳（秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置<p>数据采集时间戳（秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class MongodbSpaceObjectItem extends AbstractModel
{
    /**
     * @var array <p>集合级空间明细数组。每项含顶层标识字段（AppId/InstanceId/Db/Timestamp/SizeOnDisk）与嵌套 Collection 明细。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SpaceSchemas;

    /**
     * @var integer <p>数据采集时间戳（秒）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @param array $SpaceSchemas <p>集合级空间明细数组。每项含顶层标识字段（AppId/InstanceId/Db/Timestamp/SizeOnDisk）与嵌套 Collection 明细。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp <p>数据采集时间戳（秒）。</p>
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
        if (array_key_exists("SpaceSchemas",$param) and $param["SpaceSchemas"] !== null) {
            $this->SpaceSchemas = [];
            foreach ($param["SpaceSchemas"] as $key => $value){
                $obj = new MongoDBTableSpaceItem();
                $obj->deserialize($value);
                array_push($this->SpaceSchemas, $obj);
            }
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }
    }
}
