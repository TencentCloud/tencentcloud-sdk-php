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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 客户端节点属性
 *
 * @method string getClientNodeIp() 获取客户端节点IP
 * @method void setClientNodeIp(string $ClientNodeIp) 设置客户端节点IP
 * @method string getStatus() 获取客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)
 * @method void setStatus(string $Status) 设置客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)
 * @method string getClientType() 获取客户端节点类型，extend(扩展节点)，manager(管理节点)
 * @method void setClientType(string $ClientType) 设置客户端节点类型，extend(扩展节点)，manager(管理节点)
 * @method string getVpcId() 获取节点所属vpcid	
 * @method void setVpcId(string $VpcId) 设置节点所属vpcid	
 * @method string getSubnetId() 获取节点所属子网id
 * @method void setSubnetId(string $SubnetId) 设置节点所属子网id
 * @method string getInstanceId() 获取cvmId
 * @method void setInstanceId(string $InstanceId) 设置cvmId
 * @method string getMountPoint() 获取自定义挂载点
 * @method void setMountPoint(string $MountPoint) 设置自定义挂载点
 */
class ClientNodeAttribute extends AbstractModel
{
    /**
     * @var string 客户端节点IP
     */
    public $ClientNodeIp;

    /**
     * @var string 客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)
     */
    public $Status;

    /**
     * @var string 客户端节点类型，extend(扩展节点)，manager(管理节点)
     */
    public $ClientType;

    /**
     * @var string 节点所属vpcid	
     */
    public $VpcId;

    /**
     * @var string 节点所属子网id
     */
    public $SubnetId;

    /**
     * @var string cvmId
     */
    public $InstanceId;

    /**
     * @var string 自定义挂载点
     */
    public $MountPoint;

    /**
     * @param string $ClientNodeIp 客户端节点IP
     * @param string $Status 客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)
     * @param string $ClientType 客户端节点类型，extend(扩展节点)，manager(管理节点)
     * @param string $VpcId 节点所属vpcid	
     * @param string $SubnetId 节点所属子网id
     * @param string $InstanceId cvmId
     * @param string $MountPoint 自定义挂载点
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
        if (array_key_exists("ClientNodeIp",$param) and $param["ClientNodeIp"] !== null) {
            $this->ClientNodeIp = $param["ClientNodeIp"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("MountPoint",$param) and $param["MountPoint"] !== null) {
            $this->MountPoint = $param["MountPoint"];
        }
    }
}
