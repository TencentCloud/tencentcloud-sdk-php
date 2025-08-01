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
namespace TencentCloud\Ctsdb\V20230202\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabases请求参数结构体
 *
 * @method Database getDatabase() 获取数据库参数
 * @method void setDatabase(Database $Database) 设置数据库参数
 * @method integer getPageSize() 获取分页大小
 * @method void setPageSize(integer $PageSize) 设置分页大小
 * @method integer getPageNumber() 获取分页页面
 * @method void setPageNumber(integer $PageNumber) 设置分页页面
 */
class DescribeDatabasesRequest extends AbstractModel
{
    /**
     * @var Database 数据库参数
     */
    public $Database;

    /**
     * @var integer 分页大小
     */
    public $PageSize;

    /**
     * @var integer 分页页面
     */
    public $PageNumber;

    /**
     * @param Database $Database 数据库参数
     * @param integer $PageSize 分页大小
     * @param integer $PageNumber 分页页面
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
        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->Database = new Database();
            $this->Database->deserialize($param["Database"]);
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }
    }
}
