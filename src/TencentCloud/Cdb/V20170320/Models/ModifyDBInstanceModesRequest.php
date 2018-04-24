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
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $instanceId) 设置实例Id
 * @method string getMode() 获取云数据库的模式
 * @method void setMode(string $mode) 设置云数据库的模式
 * @method integer getProtectMode() 获取数据同步方式
 * @method void setProtectMode(integer $protectMode) 设置数据同步方式
 * @method integer getDeployMode() 获取可用区部署方式
 * @method void setDeployMode(integer $deployMode) 设置可用区部署方式
 * @method string getSlaveZone() 获取第二可用区信息
 * @method void setSlaveZone(string $slaveZone) 设置第二可用区信息
 * @method integer getWaitSwitch() 获取切换时间
 * @method void setWaitSwitch(integer $waitSwitch) 设置切换时间
 */

/**
 *ModifyDBInstanceModes请求参数结构体
 */
class ModifyDBInstanceModesRequest extends AbstractModel
{
    /**
     * @var string 实例Id
     */
    public $instanceId;

    /**
     * @var string 云数据库的模式
     */
    public $mode;

    /**
     * @var integer 数据同步方式
     */
    public $protectMode;

    /**
     * @var integer 可用区部署方式
     */
    public $deployMode;

    /**
     * @var string 第二可用区信息
     */
    public $slaveZone;

    /**
     * @var integer 切换时间
     */
    public $waitSwitch;
    /**
     * @param string $instanceId 实例Id
     * @param string $mode 云数据库的模式
     * @param integer $protectMode 数据同步方式
     * @param integer $deployMode 可用区部署方式
     * @param string $slaveZone 第二可用区信息
     * @param integer $waitSwitch 切换时间
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

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->mode = $param["Mode"];
        }

        if (array_key_exists("ProtectMode",$param) and $param["ProtectMode"] !== null) {
            $this->protectMode = $param["ProtectMode"];
        }

        if (array_key_exists("DeployMode",$param) and $param["DeployMode"] !== null) {
            $this->deployMode = $param["DeployMode"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->slaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("WaitSwitch",$param) and $param["WaitSwitch"] !== null) {
            $this->waitSwitch = $param["WaitSwitch"];
        }
    }
}
