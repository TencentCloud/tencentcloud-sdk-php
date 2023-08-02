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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加删除客户端节点列表
 *
 * @method string getInstanceId() 获取cvmId
 * @method void setInstanceId(string $InstanceId) 设置cvmId
 * @method string getVpcId() 获取节点所属vpcid
 * @method void setVpcId(string $VpcId) 设置节点所属vpcid
 * @method string getSubnetId() 获取节点所属子网id
 * @method void setSubnetId(string $SubnetId) 设置节点所属子网id
 * @method string getLinuxClientNodeIp() 获取linux客户端节点地址
 * @method void setLinuxClientNodeIp(string $LinuxClientNodeIp) 设置linux客户端节点地址
 */
class LinuxNodeAttribute extends AbstractModel
{
    /**
     * @var string cvmId
     */
    public $InstanceId;

    /**
     * @var string 节点所属vpcid
     */
    public $VpcId;

    /**
     * @var string 节点所属子网id
     */
    public $SubnetId;

    /**
     * @var string linux客户端节点地址
     */
    public $LinuxClientNodeIp;

    /**
     * @param string $InstanceId cvmId
     * @param string $VpcId 节点所属vpcid
     * @param string $SubnetId 节点所属子网id
     * @param string $LinuxClientNodeIp linux客户端节点地址
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("LinuxClientNodeIp",$param) and $param["LinuxClientNodeIp"] !== null) {
            $this->LinuxClientNodeIp = $param["LinuxClientNodeIp"];
        }
    }
}
