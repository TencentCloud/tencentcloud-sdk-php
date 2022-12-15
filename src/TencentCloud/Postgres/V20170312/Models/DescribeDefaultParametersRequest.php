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
 * DescribeDefaultParameters请求参数结构体
 *
 * @method string getDBMajorVersion() 获取数据库版本，大版本号，例如11，12，13
 * @method void setDBMajorVersion(string $DBMajorVersion) 设置数据库版本，大版本号，例如11，12，13
 * @method string getDBEngine() 获取数据库引擎，例如：postgresql,mssql_compatible
 * @method void setDBEngine(string $DBEngine) 设置数据库引擎，例如：postgresql,mssql_compatible
 */
class DescribeDefaultParametersRequest extends AbstractModel
{
    /**
     * @var string 数据库版本，大版本号，例如11，12，13
     */
    public $DBMajorVersion;

    /**
     * @var string 数据库引擎，例如：postgresql,mssql_compatible
     */
    public $DBEngine;

    /**
     * @param string $DBMajorVersion 数据库版本，大版本号，例如11，12，13
     * @param string $DBEngine 数据库引擎，例如：postgresql,mssql_compatible
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
        if (array_key_exists("DBMajorVersion",$param) and $param["DBMajorVersion"] !== null) {
            $this->DBMajorVersion = $param["DBMajorVersion"];
        }

        if (array_key_exists("DBEngine",$param) and $param["DBEngine"] !== null) {
            $this->DBEngine = $param["DBEngine"];
        }
    }
}
