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
 * DescribeTableSpaceDataV2返回参数结构体
 *
 * @method MysqlSpaceObjectItem getMysqlTableSpaceData() 获取<p>MySQL 系列产品表空间数据。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMysqlTableSpaceData(MysqlSpaceObjectItem $MysqlTableSpaceData) 设置<p>MySQL 系列产品表空间数据。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method PostgresSpaceObjectItem getPostgresTableSpaceData() 获取<p>PostgreSQL 产品表空间数据。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPostgresTableSpaceData(PostgresSpaceObjectItem $PostgresTableSpaceData) 设置<p>PostgreSQL 产品表空间数据。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method MongodbSpaceObjectItem getMongodbTableSpaceData() 获取<p>MongoDB 产品表空间数据。当产品为 mongodb 时返回。包含集合级明细数组 SpaceSchemas 以及外层采集时间戳 Timestamp（秒级）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMongodbTableSpaceData(MongodbSpaceObjectItem $MongodbTableSpaceData) 设置<p>MongoDB 产品表空间数据。当产品为 mongodb 时返回。包含集合级明细数组 SpaceSchemas 以及外层采集时间戳 Timestamp（秒级）。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SqlServerSpaceObjectItem getSqlServerTableSpaceData() 获取<p>SQL Server 产品表空间数据。当产品为 sqlserver 时返回。字段结构与 MysqlSpaceObjectItem 同构，无 FragRatio / PhysicalFileSize。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSqlServerTableSpaceData(SqlServerSpaceObjectItem $SqlServerTableSpaceData) 设置<p>SQL Server 产品表空间数据。当产品为 sqlserver 时返回。字段结构与 MysqlSpaceObjectItem 同构，无 FragRatio / PhysicalFileSize。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTimestamp() 获取<p>数据采集时间戳（秒）。可能为空（部分产品分支/异常场景下不保证返回），调用方请做空值兼容。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimestamp(integer $Timestamp) 设置<p>数据采集时间戳（秒）。可能为空（部分产品分支/异常场景下不保证返回），调用方请做空值兼容。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTableSpaceDataV2Response extends AbstractModel
{
    /**
     * @var MysqlSpaceObjectItem <p>MySQL 系列产品表空间数据。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MysqlTableSpaceData;

    /**
     * @var PostgresSpaceObjectItem <p>PostgreSQL 产品表空间数据。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PostgresTableSpaceData;

    /**
     * @var MongodbSpaceObjectItem <p>MongoDB 产品表空间数据。当产品为 mongodb 时返回。包含集合级明细数组 SpaceSchemas 以及外层采集时间戳 Timestamp（秒级）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MongodbTableSpaceData;

    /**
     * @var SqlServerSpaceObjectItem <p>SQL Server 产品表空间数据。当产品为 sqlserver 时返回。字段结构与 MysqlSpaceObjectItem 同构，无 FragRatio / PhysicalFileSize。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SqlServerTableSpaceData;

    /**
     * @var integer <p>数据采集时间戳（秒）。可能为空（部分产品分支/异常场景下不保证返回），调用方请做空值兼容。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Timestamp;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param MysqlSpaceObjectItem $MysqlTableSpaceData <p>MySQL 系列产品表空间数据。当产品为 mysql/cynosdb/tdsql/dcdb/mariadb 时返回。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param PostgresSpaceObjectItem $PostgresTableSpaceData <p>PostgreSQL 产品表空间数据。当产品为 postgres 时返回。字段语义与 MySQL 不同：使用 RelationSize / TableSize / IndexSize / TotalRelationSize / TableBloat 等 PG 特有指标。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param MongodbSpaceObjectItem $MongodbTableSpaceData <p>MongoDB 产品表空间数据。当产品为 mongodb 时返回。包含集合级明细数组 SpaceSchemas 以及外层采集时间戳 Timestamp（秒级）。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SqlServerSpaceObjectItem $SqlServerTableSpaceData <p>SQL Server 产品表空间数据。当产品为 sqlserver 时返回。字段结构与 MysqlSpaceObjectItem 同构，无 FragRatio / PhysicalFileSize。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Timestamp <p>数据采集时间戳（秒）。可能为空（部分产品分支/异常场景下不保证返回），调用方请做空值兼容。</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("MysqlTableSpaceData",$param) and $param["MysqlTableSpaceData"] !== null) {
            $this->MysqlTableSpaceData = new MysqlSpaceObjectItem();
            $this->MysqlTableSpaceData->deserialize($param["MysqlTableSpaceData"]);
        }

        if (array_key_exists("PostgresTableSpaceData",$param) and $param["PostgresTableSpaceData"] !== null) {
            $this->PostgresTableSpaceData = new PostgresSpaceObjectItem();
            $this->PostgresTableSpaceData->deserialize($param["PostgresTableSpaceData"]);
        }

        if (array_key_exists("MongodbTableSpaceData",$param) and $param["MongodbTableSpaceData"] !== null) {
            $this->MongodbTableSpaceData = new MongodbSpaceObjectItem();
            $this->MongodbTableSpaceData->deserialize($param["MongodbTableSpaceData"]);
        }

        if (array_key_exists("SqlServerTableSpaceData",$param) and $param["SqlServerTableSpaceData"] !== null) {
            $this->SqlServerTableSpaceData = new SqlServerSpaceObjectItem();
            $this->SqlServerTableSpaceData->deserialize($param["SqlServerTableSpaceData"]);
        }

        if (array_key_exists("Timestamp",$param) and $param["Timestamp"] !== null) {
            $this->Timestamp = $param["Timestamp"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
