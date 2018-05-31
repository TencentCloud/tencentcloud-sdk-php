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
 * @method integer getProtectMode() 获取主库数据保护方式，主实例属性，可能的返回值：0-异步复制方式，1-半同步复制方式，2-强同步复制方式。
 * @method void setProtectMode(integer $ProtectMode) 设置主库数据保护方式，主实例属性，可能的返回值：0-异步复制方式，1-半同步复制方式，2-强同步复制方式。
 * @method integer getDeployMode() 获取主库部署方式，主实例属性，可能的返回值：0-单可用部署，1-多可用区部署。
 * @method void setDeployMode(integer $DeployMode) 设置主库部署方式，主实例属性，可能的返回值：0-单可用部署，1-多可用区部署。
 * @method string getZone() 获取主库可用区的正式名称，如ap-shanghai-1。
 * @method void setZone(string $Zone) 设置主库可用区的正式名称，如ap-shanghai-1。
 * @method SlaveConfig getSlaveConfig() 获取从库的配置信息。
 * @method void setSlaveConfig(SlaveConfig $SlaveConfig) 设置从库的配置信息。
 * @method BackupConfig getBackupConfig() 获取ECDB第二个从库的配置信息，只有ECDB实例才有这个字段。
 * @method void setBackupConfig(BackupConfig $BackupConfig) 设置ECDB第二个从库的配置信息，只有ECDB实例才有这个字段。
 * @method string getRequestId() 获取唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
 */

/**
 *DescribeDBInstanceConfig返回参数结构体
 */
class DescribeDBInstanceConfigResponse extends AbstractModel
{
    /**
     * @var integer 主库数据保护方式，主实例属性，可能的返回值：0-异步复制方式，1-半同步复制方式，2-强同步复制方式。
     */
    public $ProtectMode;

    /**
     * @var integer 主库部署方式，主实例属性，可能的返回值：0-单可用部署，1-多可用区部署。
     */
    public $DeployMode;

    /**
     * @var string 主库可用区的正式名称，如ap-shanghai-1。
     */
    public $Zone;

    /**
     * @var SlaveConfig 从库的配置信息。
     */
    public $SlaveConfig;

    /**
     * @var BackupConfig ECDB第二个从库的配置信息，只有ECDB实例才有这个字段。
     */
    public $BackupConfig;

    /**
     * @var string 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
     */
    public $RequestId;
    /**
     * @param integer $ProtectMode 主库数据保护方式，主实例属性，可能的返回值：0-异步复制方式，1-半同步复制方式，2-强同步复制方式。
     * @param integer $DeployMode 主库部署方式，主实例属性，可能的返回值：0-单可用部署，1-多可用区部署。
     * @param string $Zone 主库可用区的正式名称，如ap-shanghai-1。
     * @param SlaveConfig $SlaveConfig 从库的配置信息。
     * @param BackupConfig $BackupConfig ECDB第二个从库的配置信息，只有ECDB实例才有这个字段。
     * @param string $RequestId 唯一请求ID，每次请求都会返回。定位问题时需要提供该次请求的RequestId。
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
        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->ProtectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->DeployMode = $param["DeployMode"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("SlaveConfig",$param) and $param["SlaveConfig"] !== null) {
            $this->SlaveConfig = new SlaveConfig();
            $this->SlaveConfig->deserialize($param["SlaveConfig"]);
        }

        if (array_key_exists("BackupConfig",$param) and $param["BackupConfig"] !== null) {
            $this->BackupConfig = new BackupConfig();
            $this->BackupConfig->deserialize($param["BackupConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
