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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetMetaTable请求参数结构体
 *
 * @method string getCatalog() 获取目录名
 * @method void setCatalog(string $Catalog) 设置目录名
 * @method string getDatabase() 获取库名
 * @method void setDatabase(string $Database) 设置库名
 * @method string getTable() 获取表名
 * @method void setTable(string $Table) 设置表名
 * @method string getWorkSpaceId() 获取空间唯一标识
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置空间唯一标识
 */
class GetMetaTableRequest extends AbstractModel
{
    /**
     * @var string 目录名
     */
    public $Catalog;

    /**
     * @var string 库名
     */
    public $Database;

    /**
     * @var string 表名
     */
    public $Table;

    /**
     * @var string 空间唯一标识
     */
    public $WorkSpaceId;

    /**
     * @param string $Catalog 目录名
     * @param string $Database 库名
     * @param string $Table 表名
     * @param string $WorkSpaceId 空间唯一标识
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
        if (array_key_exists("Catalog",$param) and $param["Catalog"] !== null) {
            $this->Catalog = $param["Catalog"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->Table = $param["Table"];
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
