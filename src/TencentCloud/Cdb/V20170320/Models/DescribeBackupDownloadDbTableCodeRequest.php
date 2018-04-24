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
 * @method string getInstanceId() 获取实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
 * @method string getStartTime() 获取开始时间，格式为：2017-07-12 10:29:20。
 * @method void setStartTime(string $StartTime) 设置开始时间，格式为：2017-07-12 10:29:20。
 * @method array getDatabaseTableList() 获取待下载的数据库和数据表列表。
 * @method void setDatabaseTableList(array $DatabaseTableList) 设置待下载的数据库和数据表列表。
 */

/**
 *DescribeBackupDownloadDbTableCode请求参数结构体
 */
class DescribeBackupDownloadDbTableCodeRequest extends AbstractModel
{
    /**
     * @var string 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var string 开始时间，格式为：2017-07-12 10:29:20。
     */
    public $StartTime;

    /**
     * @var array 待下载的数据库和数据表列表。
     */
    public $DatabaseTableList;
    /**
     * @param string $InstanceId 实例ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例ID相同。
     * @param string $StartTime 开始时间，格式为：2017-07-12 10:29:20。
     * @param array $DatabaseTableList 待下载的数据库和数据表列表。
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
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("DatabaseTableList",$param) and $param["DatabaseTableList"] !== null) {
            $this->DatabaseTableList = [];
            foreach ($param["DatabaseTableList"] as $key => $value){
                $obj = new DatabaseTableList();
                $obj->deserialize($value);
                array_push($this->DatabaseTableList, $obj);
            }
        }
    }
}
