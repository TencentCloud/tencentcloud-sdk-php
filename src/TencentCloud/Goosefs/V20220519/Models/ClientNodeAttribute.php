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
 * @method string getClientNodeIp() 获取<p>客户端节点IP</p>
 * @method void setClientNodeIp(string $ClientNodeIp) 设置<p>客户端节点IP</p>
 * @method string getStatus() 获取<p>客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)</p>
 * @method void setStatus(string $Status) 设置<p>客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)</p>
 * @method string getClientType() 获取<p>客户端节点类型，extend(扩展节点)，manager(管理节点)</p>
 * @method void setClientType(string $ClientType) 设置<p>客户端节点类型，extend(扩展节点)，manager(管理节点)</p>
 * @method string getVpcId() 获取<p>节点所属vpcid</p>
 * @method void setVpcId(string $VpcId) 设置<p>节点所属vpcid</p>
 * @method string getSubnetId() 获取<p>节点所属子网id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>节点所属子网id</p>
 * @method string getInstanceId() 获取<p>cvmId</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>cvmId</p>
 * @method string getMountPoint() 获取<p>自定义挂载点</p>
 * @method void setMountPoint(string $MountPoint) 设置<p>自定义挂载点</p>
 * @method string getClusterId() 获取<p>客户端集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>客户端集群id</p>
 */
class ClientNodeAttribute extends AbstractModel
{
    /**
     * @var string <p>客户端节点IP</p>
     */
    public $ClientNodeIp;

    /**
     * @var string <p>客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)</p>
     */
    public $Status;

    /**
     * @var string <p>客户端节点类型，extend(扩展节点)，manager(管理节点)</p>
     */
    public $ClientType;

    /**
     * @var string <p>节点所属vpcid</p>
     */
    public $VpcId;

    /**
     * @var string <p>节点所属子网id</p>
     */
    public $SubnetId;

    /**
     * @var string <p>cvmId</p>
     */
    public $InstanceId;

    /**
     * @var string <p>自定义挂载点</p>
     */
    public $MountPoint;

    /**
     * @var string <p>客户端集群id</p>
     */
    public $ClusterId;

    /**
     * @param string $ClientNodeIp <p>客户端节点IP</p>
     * @param string $Status <p>客户端节点服务状态, Active(运行中), Adding(添加中), Destroying(销毁中), Down(已停止)</p>
     * @param string $ClientType <p>客户端节点类型，extend(扩展节点)，manager(管理节点)</p>
     * @param string $VpcId <p>节点所属vpcid</p>
     * @param string $SubnetId <p>节点所属子网id</p>
     * @param string $InstanceId <p>cvmId</p>
     * @param string $MountPoint <p>自定义挂载点</p>
     * @param string $ClusterId <p>客户端集群id</p>
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
