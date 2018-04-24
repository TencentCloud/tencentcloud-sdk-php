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
 * @method string getInstanceId() 获取云数据库实例ID
 * @method void setInstanceId(string $instanceId) 设置云数据库实例ID
 * @method string getBackupMethod() 获取备份方式，可能的取值有：logical (逻辑备份)，physical (物理备份)
 * @method void setBackupMethod(string $backupMethod) 设置备份方式，可能的取值有：logical (逻辑备份)，physical (物理备份)
 */

/**
 *ModifyBackupInfo请求参数结构体
 */
class ModifyBackupInfoRequest extends AbstractModel
{
    /**
     * @var string 云数据库实例ID
     */
    public $instanceId;

    /**
     * @var string 备份方式，可能的取值有：logical (逻辑备份)，physical (物理备份)
     */
    public $backupMethod;
    /**
     * @param string $instanceId 云数据库实例ID
     * @param string $backupMethod 备份方式，可能的取值有：logical (逻辑备份)，physical (物理备份)
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

        if (array_key_exists("BackupMethod",$param) and $param["BackupMethod"] !== null) {
            $this->backupMethod = $param["BackupMethod"];
        }
    }
}
