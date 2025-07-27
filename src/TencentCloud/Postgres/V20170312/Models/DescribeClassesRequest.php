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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClasses请求参数结构体
 *
 * @method string getZone() 获取可用区名称。可以通过接口[DescribeZones](https://cloud.tencent.com/document/product/409/16769)获取。
 * @method void setZone(string $Zone) 设置可用区名称。可以通过接口[DescribeZones](https://cloud.tencent.com/document/product/409/16769)获取。
 * @method string getDBEngine() 获取数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
 * @method void setDBEngine(string $DBEngine) 设置数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
 * @method string getDBMajorVersion() 获取数据库主版本号。例如12，13，可以通过接口[DescribeDBVersions](https://cloud.tencent.com/document/product/409/89018)获取。
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置数据库主版本号。例如12，13，可以通过接口[DescribeDBVersions](https://cloud.tencent.com/document/product/409/89018)获取。
 */
class DescribeClassesRequest extends AbstractModel
{
    /**
     * @var string 可用区名称。可以通过接口[DescribeZones](https://cloud.tencent.com/document/product/409/16769)获取。
     */
    public $Zone;

    /**
     * @var string 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
     */
    public $DBEngine;

    /**
     * @var string 数据库主版本号。例如12，13，可以通过接口[DescribeDBVersions](https://cloud.tencent.com/document/product/409/89018)获取。
     */
    public $DBMajorVersion;

    /**
     * @param string $Zone 可用区名称。可以通过接口[DescribeZones](https://cloud.tencent.com/document/product/409/16769)获取。
     * @param string $DBEngine 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
     * @param string $DBMajorVersion 数据库主版本号。例如12，13，可以通过接口[DescribeDBVersions](https://cloud.tencent.com/document/product/409/89018)获取。
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
