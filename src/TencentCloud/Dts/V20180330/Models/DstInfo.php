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
namespace TencentCloud\Dts\V20180330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取目标实例Id
 * @method void setInstanceId(string $InstanceId) 设置目标实例Id
 * @method string getIp() 获取目标实例vip
 * @method void setIp(string $Ip) 设置目标实例vip
 * @method integer getPort() 获取目标实例vport
 * @method void setPort(integer $Port) 设置目标实例vport
 * @method string getRegion() 获取目标实例Id
 * @method void setRegion(string $Region) 设置目标实例Id
 * @method integer getReadOnly() 获取只读开关
 * @method void setReadOnly(integer $ReadOnly) 设置只读开关
 */

/**
 *目的实例信息，具体内容跟迁移任务类型相关
 */
class DstInfo extends AbstractModel
{
    /**
     * @var string 目标实例Id
     */
    public $InstanceId;

    /**
     * @var string 目标实例vip
     */
    public $Ip;

    /**
     * @var integer 目标实例vport
     */
    public $Port;

    /**
     * @var string 目标实例Id
     */
    public $Region;

    /**
     * @var integer 只读开关
     */
    public $ReadOnly;
    /**
     * @param string $InstanceId 目标实例Id
     * @param string $Ip 目标实例vip
     * @param integer $Port 目标实例vport
     * @param string $Region 目标实例Id
     * @param integer $ReadOnly 只读开关
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

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }
    }
}
