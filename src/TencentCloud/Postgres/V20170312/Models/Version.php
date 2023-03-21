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
 * 数据库版本号信息
 *
 * @method string getDBEngine() 获取数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
 * @method void setDBEngine(string $DBEngine) 设置数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
 * @method string getDBVersion() 获取数据库版本，例如：12.4
 * @method void setDBVersion(string $DBVersion) 设置数据库版本，例如：12.4
 * @method string getDBMajorVersion() 获取数据库主要版本，例如：12
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置数据库主要版本，例如：12
 * @method string getDBKernelVersion() 获取数据库内核版本，例如：v12.4_r1.3
 * @method void setDBKernelVersion(string $DBKernelVersion) 设置数据库内核版本，例如：v12.4_r1.3
 * @method array getSupportedFeatureNames() 获取数据库内核支持的特性列表。例如，
TDE：支持数据加密。
 * @method void setSupportedFeatureNames(array $SupportedFeatureNames) 设置数据库内核支持的特性列表。例如，
TDE：支持数据加密。
 * @method string getStatus() 获取数据库版本状态，包括：
AVAILABLE：可用；
DEPRECATED：已弃用。
 * @method void setStatus(string $Status) 设置数据库版本状态，包括：
AVAILABLE：可用；
DEPRECATED：已弃用。
 * @method array getAvailableUpgradeTarget() 获取该数据库版本（DBKernelVersion）可以升级到的版本号列表。
 * @method void setAvailableUpgradeTarget(array $AvailableUpgradeTarget) 设置该数据库版本（DBKernelVersion）可以升级到的版本号列表。
 */
class Version extends AbstractModel
{
    /**
     * @var string 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
     */
    public $DBEngine;

    /**
     * @var string 数据库版本，例如：12.4
     */
    public $DBVersion;

    /**
     * @var string 数据库主要版本，例如：12
     */
    public $DBMajorVersion;

    /**
     * @var string 数据库内核版本，例如：v12.4_r1.3
     */
    public $DBKernelVersion;

    /**
     * @var array 数据库内核支持的特性列表。例如，
TDE：支持数据加密。
     */
    public $SupportedFeatureNames;

    /**
     * @var string 数据库版本状态，包括：
AVAILABLE：可用；
DEPRECATED：已弃用。
     */
    public $Status;

    /**
     * @var array 该数据库版本（DBKernelVersion）可以升级到的版本号列表。
     */
    public $AvailableUpgradeTarget;

    /**
     * @param string $DBEngine 数据库引擎，支持：
1、postgresql（云数据库PostgreSQL）；
2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；
     * @param string $DBVersion 数据库版本，例如：12.4
     * @param string $DBMajorVersion 数据库主要版本，例如：12
     * @param string $DBKernelVersion 数据库内核版本，例如：v12.4_r1.3
     * @param array $SupportedFeatureNames 数据库内核支持的特性列表。例如，
TDE：支持数据加密。
     * @param string $Status 数据库版本状态，包括：
AVAILABLE：可用；
DEPRECATED：已弃用。
     * @param array $AvailableUpgradeTarget 该数据库版本（DBKernelVersion）可以升级到的版本号列表。
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
        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }

        if (array_key_exists("DBVersion",$param) and $param["DBVersion"] !== null) {
            $this->DBVersion = $param["DBVersion"];
        }

        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBKernelVersion",$param) and $param["DBKernelVersion"] !== null) {
            $this->DBKernelVersion = $param["DBKernelVersion"];
        }

        if (array_key_exists("SupportedFeatureNames",$param) and $param["SupportedFeatureNames"] !== null) {
            $this->SupportedFeatureNames = $param["SupportedFeatureNames"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AvailableUpgradeTarget",$param) and $param["AvailableUpgradeTarget"] !== null) {
            $this->AvailableUpgradeTarget = $param["AvailableUpgradeTarget"];
        }
    }
}
