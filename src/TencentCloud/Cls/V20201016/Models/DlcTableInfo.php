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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据湖计算服务（Data Lake Compute，简称DLC）数据表配置信息
 *
 * @method string getDataDirectory() 获取数据目录
 * @method void setDataDirectory(string $DataDirectory) 设置数据目录
 * @method string getDatabaseName() 获取数据库
 * @method void setDatabaseName(string $DatabaseName) 设置数据库
 * @method string getTableName() 获取数据表
 * @method void setTableName(string $TableName) 设置数据表
 */
class DlcTableInfo extends AbstractModel
{
    /**
     * @var string 数据目录
     */
    public $DataDirectory;

    /**
     * @var string 数据库
     */
    public $DatabaseName;

    /**
     * @var string 数据表
     */
    public $TableName;

    /**
     * @param string $DataDirectory 数据目录
     * @param string $DatabaseName 数据库
     * @param string $TableName 数据表
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
        if (array_key_exists("DataDirectory",$param) and $param["DataDirectory"] !== null) {
            $this->DataDirectory = $param["DataDirectory"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }
    }
}
