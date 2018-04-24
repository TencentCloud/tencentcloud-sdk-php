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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getInstanceId() 获取待操作的实例ID。可通过[`DescribeInstances`](document/api/213/9388)接口返回值中的`InstanceId`获取。
 * @method void setInstanceId(string $InstanceId) 设置待操作的实例ID。可通过[`DescribeInstances`](document/api/213/9388)接口返回值中的`InstanceId`获取。
 * @method VirtualPrivateCloud getVirtualPrivateCloud() 获取私有网络相关信息配置。通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。
 * @method void setVirtualPrivateCloud(VirtualPrivateCloud $VirtualPrivateCloud) 设置私有网络相关信息配置。通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。
 * @method boolean getForceStop() 获取是否对运行中的实例选择强制关机。默认为TRUE。
 * @method void setForceStop(boolean $ForceStop) 设置是否对运行中的实例选择强制关机。默认为TRUE。
 */

/**
 *UpdateInstanceVpcConfig请求参数结构体
 */
class UpdateInstanceVpcConfigRequest extends AbstractModel
{
    /**
     * @var string 待操作的实例ID。可通过[`DescribeInstances`](document/api/213/9388)接口返回值中的`InstanceId`获取。
     */
    public $InstanceId;

    /**
     * @var VirtualPrivateCloud 私有网络相关信息配置。通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。
     */
    public $VirtualPrivateCloud;

    /**
     * @var boolean 是否对运行中的实例选择强制关机。默认为TRUE。
     */
    public $ForceStop;
    /**
     * @param string $InstanceId 待操作的实例ID。可通过[`DescribeInstances`](document/api/213/9388)接口返回值中的`InstanceId`获取。
     * @param VirtualPrivateCloud $VirtualPrivateCloud 私有网络相关信息配置。通过该参数指定私有网络的ID，子网ID，私有网络ip等信息。
     * @param boolean $ForceStop 是否对运行中的实例选择强制关机。默认为TRUE。
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

        if (array_key_exists("VirtualPrivateCloud",$param) and $param["VirtualPrivateCloud"] !== null) {
            $this->VirtualPrivateCloud = new VirtualPrivateCloud();
            $this->VirtualPrivateCloud->deserialize($param["VirtualPrivateCloud"]);
        }

        if (array_key_exists("ForceStop",$param) and $param["ForceStop"] !== null) {
            $this->ForceStop = $param["ForceStop"];
        }
    }
}
