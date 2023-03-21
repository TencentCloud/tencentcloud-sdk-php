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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClasses请求参数结构体
 *
 * @method string getZone() 获取可用区ID。可以通过接口DescribeZones获取。
 * @method void setZone(string $Zone) 设置可用区ID。可以通过接口DescribeZones获取。
 * @method string getDBEngine() 获取数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
 * @method void setDBEngine(string $DBEngine) 设置数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
 * @method string getDBMajorVersion() 获取数据库主版本号。例如12，13，可以通过接口DescribeDBVersions获取。
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置数据库主版本号。例如12，13，可以通过接口DescribeDBVersions获取。
 */
class DescribeClassesRequest extends AbstractModel
{
    /**
     * @var string 可用区ID。可以通过接口DescribeZones获取。
     */
    public $Zone;

    /**
     * @var string 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
     */
    public $DBEngine;

    /**
     * @var string 数据库主版本号。例如12，13，可以通过接口DescribeDBVersions获取。
     */
    public $DBMajorVersion;

    /**
     * @param string $Zone 可用区ID。可以通过接口DescribeZones获取。
     * @param string $DBEngine 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
     * @param string $DBMajorVersion 数据库主版本号。例如12，13，可以通过接口DescribeDBVersions获取。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }
    }
}
