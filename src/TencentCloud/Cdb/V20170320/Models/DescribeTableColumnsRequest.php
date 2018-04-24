<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用[查询实例列表](/doc/api/253/1266) 接口获取，其值为输出参数中字段 InstanceId 的值
 * @method void setInstanceId(string $instanceId) 设置实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用[查询实例列表](/doc/api/253/1266) 接口获取，其值为输出参数中字段 InstanceId 的值
 * @method string getDatabase() 获取数据库名称，可使用[查询数据库](/doc/api/253/7167)接口获得
 * @method void setDatabase(string $database) 设置数据库名称，可使用[查询数据库](/doc/api/253/7167)接口获得
 * @method string getTable() 获取数据库中的表的名称
 * @method void setTable(string $table) 设置数据库中的表的名称
 */

/**
 *DescribeTableColumns请求参数结构体
 */
class DescribeTableColumnsRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用[查询实例列表](/doc/api/253/1266) 接口获取，其值为输出参数中字段 InstanceId 的值
     */
    public $instanceId;

    /**
     * @var string 数据库名称，可使用[查询数据库](/doc/api/253/7167)接口获得
     */
    public $database;

    /**
     * @var string 数据库中的表的名称
     */
    public $table;
    /**
     * @param string $instanceId 实例ID，格式如：cdb-c1nl9rpv，与云数据库控制台页面中显示的实例ID相同，可使用[查询实例列表](/doc/api/253/1266) 接口获取，其值为输出参数中字段 InstanceId 的值
     * @param string $database 数据库名称，可使用[查询数据库](/doc/api/253/7167)接口获得
     * @param string $table 数据库中的表的名称
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->instanceId = $param["InstanceId"];
        }

        if (array_key_exists("Database",$param) and $param["Database"] !== null) {
            $this->database = $param["Database"];
        }

        if (array_key_exists("Table",$param) and $param["Table"] !== null) {
            $this->table = $param["Table"];
        }
    }
}
