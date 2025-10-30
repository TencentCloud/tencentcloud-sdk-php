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
 * DescribeUDFPolicy请求参数结构体
 *
 * @method string getName() 获取udf名称
 * @method void setName(string $Name) 设置udf名称
 * @method string getDatabaseName() 获取数据库名(全局UDF：global-function)
 * @method void setDatabaseName(string $DatabaseName) 设置数据库名(全局UDF：global-function)
 * @method string getCatalogName() 获取数据目录名
 * @method void setCatalogName(string $CatalogName) 设置数据目录名
 */
class DescribeUDFPolicyRequest extends AbstractModel
{
    /**
     * @var string udf名称
     */
    public $Name;

    /**
     * @var string 数据库名(全局UDF：global-function)
     */
    public $DatabaseName;

    /**
     * @var string 数据目录名
     */
    public $CatalogName;

    /**
     * @param string $Name udf名称
     * @param string $DatabaseName 数据库名(全局UDF：global-function)
     * @param string $CatalogName 数据目录名
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("CatalogName",$param) and $param["CatalogName"] !== null) {
            $this->CatalogName = $param["CatalogName"];
        }
    }
}
