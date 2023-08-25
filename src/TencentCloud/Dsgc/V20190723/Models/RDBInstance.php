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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RDB实例信息
 *
 * @method string getDataSourceId() 获取数据源Id
 * @method void setDataSourceId(string $DataSourceId) 设置数据源Id
 * @method string getDataSourceType() 获取cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto
 * @method void setDataSourceType(string $DataSourceType) 设置cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto
 * @method string getResourceRegion() 获取资源所在地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源所在地域
 * @method array getDBs() 获取若未来扩展到DBName粒度，可采用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDBs(array $DBs) 设置若未来扩展到DBName粒度，可采用
注意：此字段可能返回 null，表示取不到有效值。
 */
class RDBInstance extends AbstractModel
{
    /**
     * @var string 数据源Id
     */
    public $DataSourceId;

    /**
     * @var string cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto
     */
    public $DataSourceType;

    /**
     * @var string 资源所在地域
     */
    public $ResourceRegion;

    /**
     * @var array 若未来扩展到DBName粒度，可采用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DBs;

    /**
     * @param string $DataSourceId 数据源Id
     * @param string $DataSourceType cdb, dcdb, mariadb, postgres, cynosdbpg, cynosdbmysql, cos, mysql_like_proto, postgre_like_proto
     * @param string $ResourceRegion 资源所在地域
     * @param array $DBs 若未来扩展到DBName粒度，可采用
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
        if (array_key_exists("DataSourceId",$param) and $param["DataSourceId"] !== null) {
            $this->DataSourceId = $param["DataSourceId"];
        }

        if (array_key_exists("DataSourceType",$param) and $param["DataSourceType"] !== null) {
            $this->DataSourceType = $param["DataSourceType"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("DBs",$param) and $param["DBs"] !== null) {
            $this->DBs = [];
            foreach ($param["DBs"] as $key => $value){
                $obj = new DBStatements();
                $obj->deserialize($value);
                array_push($this->DBs, $obj);
            }
        }
    }
}
