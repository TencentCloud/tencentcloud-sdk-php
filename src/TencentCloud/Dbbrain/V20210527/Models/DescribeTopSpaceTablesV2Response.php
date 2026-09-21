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
 * DescribeTopSpaceTablesV2返回参数结构体
 *
 * @method array getMysqlObjects() 获取<p>MySQL/PG/TDSQL 系列产品表级空间对象列表。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb/postgres 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMysqlObjects(array $MysqlObjects) 设置<p>MySQL/PG/TDSQL 系列产品表级空间对象列表。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb/postgres 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPostgresObjects() 获取<p>PostgreSQL 产品表级空间对象列表。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgresObjects(array $PostgresObjects) 设置<p>PostgreSQL 产品表级空间对象列表。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMongodbObjects() 获取<p>MongoDB 产品表级（集合级）空间对象列表。当产品为 mongodb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMongodbObjects(array $MongodbObjects) 设置<p>MongoDB 产品表级（集合级）空间对象列表。当产品为 mongodb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取<p>数据采集时间戳（秒）。</p>
 * @method void setTimestamp(integer $Timestamp) 设置<p>数据采集时间戳（秒）。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTopSpaceTablesV2Response extends AbstractModel
{
    /**
     * @var array <p>MySQL/PG/TDSQL 系列产品表级空间对象列表。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb/postgres 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MysqlObjects;

    /**
     * @var array <p>PostgreSQL 产品表级空间对象列表。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgresObjects;

    /**
     * @var array <p>MongoDB 产品表级（集合级）空间对象列表。当产品为 mongodb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MongodbObjects;

    /**
     * @var integer <p>数据采集时间戳（秒）。</p>
     */
    public $Timestamp;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $MysqlObjects <p>MySQL/PG/TDSQL 系列产品表级空间对象列表。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb/postgres 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PostgresObjects <p>PostgreSQL 产品表级空间对象列表。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MongodbObjects <p>MongoDB 产品表级（集合级）空间对象列表。当产品为 mongodb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp <p>数据采集时间戳（秒）。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("MysqlObjects",$param) and $param["MysqlObjects"] !== null) {
            $this->MysqlObjects = [];
            foreach ($param["MysqlObjects"] as $key => $value){
                $obj = new MysqlSpaceObjectItem();
                $obj->deserialize($value);
                array_push($this->MysqlObjects, $obj);
            }
        }

        if (array_key_exists("PostgresObjects",$param) and $param["PostgresObjects"] !== null) {
            $this->PostgresObjects = [];
            foreach ($param["PostgresObjects"] as $key => $value){
                $obj = new PostgresSpaceObjectItem();
                $obj->deserialize($value);
                array_push($this->PostgresObjects, $obj);
            }
        }

        if (array_key_exists("MongodbObjects",$param) and $param["MongodbObjects"] !== null) {
            $this->MongodbObjects = [];
            foreach ($param["MongodbObjects"] as $key => $value){
                $obj = new MongoDBTableSpaceItem();
                $obj->deserialize($value);
                array_push($this->MongodbObjects, $obj);
            }
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
