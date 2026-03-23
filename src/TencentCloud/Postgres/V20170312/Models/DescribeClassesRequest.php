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
 * @method string getZone() 获取<p>可用区名称。可以通过接口<a href="https://cloud.tencent.com/document/product/409/16769">DescribeZones</a>获取。</p>
 * @method void setZone(string $Zone) 设置<p>可用区名称。可以通过接口<a href="https://cloud.tencent.com/document/product/409/16769">DescribeZones</a>获取。</p>
 * @method string getDBEngine() 获取<p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；</p>
 * @method void setDBEngine(string $DBEngine) 设置<p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；</p>
 * @method string getDBMajorVersion() 获取<p>数据库主版本号。例如12，13，可以通过接口<a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取。</p>
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置<p>数据库主版本号。例如12，13，可以通过接口<a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取。</p>
 * @method string getStorageType() 获取<p>实例存储类型，根据存储类型返回支持的规格。</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 物理机本地ssd硬盘</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： ssd云硬盘</li><li>CLOUD_HSSD： 增强型ssd云硬盘</li></ul><p>默认值：PHYSICAL_LOCAL_SSD</p>
 * @method void setStorageType(string $StorageType) 设置<p>实例存储类型，根据存储类型返回支持的规格。</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 物理机本地ssd硬盘</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： ssd云硬盘</li><li>CLOUD_HSSD： 增强型ssd云硬盘</li></ul><p>默认值：PHYSICAL_LOCAL_SSD</p>
 */
class DescribeClassesRequest extends AbstractModel
{
    /**
     * @var string <p>可用区名称。可以通过接口<a href="https://cloud.tencent.com/document/product/409/16769">DescribeZones</a>获取。</p>
     */
    public $Zone;

    /**
     * @var string <p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；</p>
     */
    public $DBEngine;

    /**
     * @var string <p>数据库主版本号。例如12，13，可以通过接口<a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取。</p>
     */
    public $DBMajorVersion;

    /**
     * @var string <p>实例存储类型，根据存储类型返回支持的规格。</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 物理机本地ssd硬盘</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： ssd云硬盘</li><li>CLOUD_HSSD： 增强型ssd云硬盘</li></ul><p>默认值：PHYSICAL_LOCAL_SSD</p>
     */
    public $StorageType;

    /**
     * @param string $Zone <p>可用区名称。可以通过接口<a href="https://cloud.tencent.com/document/product/409/16769">DescribeZones</a>获取。</p>
     * @param string $DBEngine <p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；</p>
     * @param string $DBMajorVersion <p>数据库主版本号。例如12，13，可以通过接口<a href="https://cloud.tencent.com/document/product/409/89018">DescribeDBVersions</a>获取。</p>
     * @param string $StorageType <p>实例存储类型，根据存储类型返回支持的规格。</p><p>枚举值：</p><ul><li>PHYSICAL_LOCAL_SSD： 物理机本地ssd硬盘</li><li>CLOUD_PREMIUM： 高性能云硬盘</li><li>CLOUD_SSD： ssd云硬盘</li><li>CLOUD_HSSD： 增强型ssd云硬盘</li></ul><p>默认值：PHYSICAL_LOCAL_SSD</p>
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

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }
    }
}
