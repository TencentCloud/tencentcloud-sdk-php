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
 * DescribeDatabase请求参数结构体
 *
 * @method string getDatabaseName() 获取数据库名称
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名称
 * @method string getDatasourceConnectionName() 获取数据连接名称，不填默认为DataLakeCatalog
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置数据连接名称，不填默认为DataLakeCatalog
 */
class DescribeDatabaseRequest extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DatabaseName;

    /**
     * @var string 数据连接名称，不填默认为DataLakeCatalog
     */
    public $DatasourceConnectionName;

    /**
     * @param string $DatabaseName 数据库名称
     * @param string $DatasourceConnectionName 数据连接名称，不填默认为DataLakeCatalog
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
        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }
    }
}
