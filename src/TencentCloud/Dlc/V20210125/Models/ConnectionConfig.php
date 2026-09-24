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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * tcc链接信息
 *
 * @method MysqlConnection getMysqlConnection() 获取<p>mysql数据源连接信息</p>
 * @method void setMysqlConnection(MysqlConnection $MysqlConnection) 设置<p>mysql数据源连接信息</p>
 * @method HiveConnection getEmrHiveConnection() 获取<p>hive数据源连接信息</p>
 * @method void setEmrHiveConnection(HiveConnection $EmrHiveConnection) 设置<p>hive数据源连接信息</p>
 * @method DorisConnection getTCHouseDConnection() 获取<p>doris数据源连接信息</p>
 * @method void setTCHouseDConnection(DorisConnection $TCHouseDConnection) 设置<p>doris数据源连接信息</p>
 * @method VolumeConnection getVolumeConnection() 获取<p>数据卷连接信息</p>
 * @method void setVolumeConnection(VolumeConnection $VolumeConnection) 设置<p>数据卷连接信息</p>
 * @method LakeHouseConnection getLakeHouseConnection() 获取<p>lakehouse连接信息</p>
 * @method void setLakeHouseConnection(LakeHouseConnection $LakeHouseConnection) 设置<p>lakehouse连接信息</p>
 * @method PostgreSQLConnection getPostgreSQLConnection() 获取<p>PostgreSQL数据源连接信息</p>
 * @method void setPostgreSQLConnection(PostgreSQLConnection $PostgreSQLConnection) 设置<p>PostgreSQL数据源连接信息</p>
 * @method DlcConnection getDlcConnection() 获取<p>dlc数据源连接信息</p>
 * @method void setDlcConnection(DlcConnection $DlcConnection) 设置<p>dlc数据源连接信息</p>
 */
class ConnectionConfig extends AbstractModel
{
    /**
     * @var MysqlConnection <p>mysql数据源连接信息</p>
     */
    public $MysqlConnection;

    /**
     * @var HiveConnection <p>hive数据源连接信息</p>
     */
    public $EmrHiveConnection;

    /**
     * @var DorisConnection <p>doris数据源连接信息</p>
     */
    public $TCHouseDConnection;

    /**
     * @var VolumeConnection <p>数据卷连接信息</p>
     */
    public $VolumeConnection;

    /**
     * @var LakeHouseConnection <p>lakehouse连接信息</p>
     */
    public $LakeHouseConnection;

    /**
     * @var PostgreSQLConnection <p>PostgreSQL数据源连接信息</p>
     */
    public $PostgreSQLConnection;

    /**
     * @var DlcConnection <p>dlc数据源连接信息</p>
     */
    public $DlcConnection;

    /**
     * @param MysqlConnection $MysqlConnection <p>mysql数据源连接信息</p>
     * @param HiveConnection $EmrHiveConnection <p>hive数据源连接信息</p>
     * @param DorisConnection $TCHouseDConnection <p>doris数据源连接信息</p>
     * @param VolumeConnection $VolumeConnection <p>数据卷连接信息</p>
     * @param LakeHouseConnection $LakeHouseConnection <p>lakehouse连接信息</p>
     * @param PostgreSQLConnection $PostgreSQLConnection <p>PostgreSQL数据源连接信息</p>
     * @param DlcConnection $DlcConnection <p>dlc数据源连接信息</p>
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
        if (array_key_exists("MysqlConnection",$param) and $param["MysqlConnection"] !== null) {
            $this->MysqlConnection = new MysqlConnection();
            $this->MysqlConnection->deserialize($param["MysqlConnection"]);
        }

        if (array_key_exists("EmrHiveConnection",$param) and $param["EmrHiveConnection"] !== null) {
            $this->EmrHiveConnection = new HiveConnection();
            $this->EmrHiveConnection->deserialize($param["EmrHiveConnection"]);
        }

        if (array_key_exists("TCHouseDConnection",$param) and $param["TCHouseDConnection"] !== null) {
            $this->TCHouseDConnection = new DorisConnection();
            $this->TCHouseDConnection->deserialize($param["TCHouseDConnection"]);
        }

        if (array_key_exists("VolumeConnection",$param) and $param["VolumeConnection"] !== null) {
            $this->VolumeConnection = new VolumeConnection();
            $this->VolumeConnection->deserialize($param["VolumeConnection"]);
        }

        if (array_key_exists("LakeHouseConnection",$param) and $param["LakeHouseConnection"] !== null) {
            $this->LakeHouseConnection = new LakeHouseConnection();
            $this->LakeHouseConnection->deserialize($param["LakeHouseConnection"]);
        }

        if (array_key_exists("PostgreSQLConnection",$param) and $param["PostgreSQLConnection"] !== null) {
            $this->PostgreSQLConnection = new PostgreSQLConnection();
            $this->PostgreSQLConnection->deserialize($param["PostgreSQLConnection"]);
        }

        if (array_key_exists("DlcConnection",$param) and $param["DlcConnection"] !== null) {
            $this->DlcConnection = new DlcConnection();
            $this->DlcConnection->deserialize($param["DlcConnection"]);
        }
    }
}
