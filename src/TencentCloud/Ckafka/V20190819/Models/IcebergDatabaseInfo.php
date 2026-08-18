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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * iceberg数据
 *
 * @method string getName() 获取<p>数据库名</p>
 * @method void setName(string $Name) 设置<p>数据库名</p>
 * @method array getTables() 获取<p>表名称</p>
 * @method void setTables(array $Tables) 设置<p>表名称</p>
 */
class IcebergDatabaseInfo extends AbstractModel
{
    /**
     * @var string <p>数据库名</p>
     */
    public $Name;

    /**
     * @var array <p>表名称</p>
     */
    public $Tables;

    /**
     * @param string $Name <p>数据库名</p>
     * @param array $Tables <p>表名称</p>
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

        if (array_key_exists("Tables",$param) and $param["Tables"] !== null) {
            $this->Tables = $param["Tables"];
        }
    }
}
