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
 * DescribeProductConfig请求参数结构体
 *
 * @method string getZone() 获取<p>可用区名称</p>
 * @method void setZone(string $Zone) 设置<p>可用区名称</p>
 * @method string getDBEngine() 获取<p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；<br>如不指定默认使用postgresql。</p>
 * @method void setDBEngine(string $DBEngine) 设置<p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；<br>如不指定默认使用postgresql。</p>
 */
class DescribeProductConfigRequest extends AbstractModel
{
    /**
     * @var string <p>可用区名称</p>
     */
    public $Zone;

    /**
     * @var string <p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；<br>如不指定默认使用postgresql。</p>
     */
    public $DBEngine;

    /**
     * @param string $Zone <p>可用区名称</p>
     * @param string $DBEngine <p>数据库引擎，支持：<br>1、postgresql（云数据库PostgreSQL）；<br>2、mssql_compatible（MSSQL兼容-云数据库PostgreSQL）；<br>如不指定默认使用postgresql。</p>
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
    }
}
