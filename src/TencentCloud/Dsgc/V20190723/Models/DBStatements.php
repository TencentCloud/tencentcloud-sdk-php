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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 数据库信息
 *
 * @method string getDBName() 获取数据库名称
 * @method void setDBName(string $DBName) 设置数据库名称
 * @method string getDBSchema() 获取数据库Schema
 * @method void setDBSchema(string $DBSchema) 设置数据库Schema
 */
class DBStatements extends AbstractModel
{
    /**
     * @var string 数据库名称
     */
    public $DBName;

    /**
     * @var string 数据库Schema
     */
    public $DBSchema;

    /**
     * @param string $DBName 数据库名称
     * @param string $DBSchema 数据库Schema
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
        if (array_key_exists("DBName",$param) and $param["DBName"] !== null) {
            $this->DBName = $param["DBName"];
        }

        if (array_key_exists("DBSchema",$param) and $param["DBSchema"] !== null) {
            $this->DBSchema = $param["DBSchema"];
        }
    }
}
