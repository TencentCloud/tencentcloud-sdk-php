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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterMachine请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群 ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID</p>
 * @method array getMachineNames() 获取<p>节点名列表</p>
 * @method void setMachineNames(array $MachineNames) 设置<p>节点名列表</p>
 * @method string getDisplayName() 获取<p>machine的display name</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>machine的display name</p>
 * @method Disk getSystemDisk() 获取<p>系统盘的信息</p>
 * @method void setSystemDisk(Disk $SystemDisk) 设置<p>系统盘的信息</p>
 * @method array getSecurityGroupIDs() 获取<p>安全组列表</p>
 * @method void setSecurityGroupIDs(array $SecurityGroupIDs) 设置<p>安全组列表</p>
 * @method InstanceChargePrepaid getInstanceChargePrepaid() 获取<p>节点预付费信息</p>
 * @method void setInstanceChargePrepaid(InstanceChargePrepaid $InstanceChargePrepaid) 设置<p>节点预付费信息</p>
 */
class ModifyClusterMachineRequest extends AbstractModel
{
    /**
     * @var string <p>集群 ID</p>
     */
    public $ClusterId;

    /**
     * @var array <p>节点名列表</p>
     */
    public $MachineNames;

    /**
     * @var string <p>machine的display name</p>
     */
    public $DisplayName;

    /**
     * @var Disk <p>系统盘的信息</p>
     */
    public $SystemDisk;

    /**
     * @var array <p>安全组列表</p>
     */
    public $SecurityGroupIDs;

    /**
     * @var InstanceChargePrepaid <p>节点预付费信息</p>
     */
    public $InstanceChargePrepaid;

    /**
     * @param string $ClusterId <p>集群 ID</p>
     * @param array $MachineNames <p>节点名列表</p>
     * @param string $DisplayName <p>machine的display name</p>
     * @param Disk $SystemDisk <p>系统盘的信息</p>
     * @param array $SecurityGroupIDs <p>安全组列表</p>
     * @param InstanceChargePrepaid $InstanceChargePrepaid <p>节点预付费信息</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("MachineNames",$param) and $param["MachineNames"] !== null) {
            $this->MachineNames = $param["MachineNames"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("SystemDisk",$param) and $param["SystemDisk"] !== null) {
            $this->SystemDisk = new Disk();
            $this->SystemDisk->deserialize($param["SystemDisk"]);
        }

        if (array_key_exists("SecurityGroupIDs",$param) and $param["SecurityGroupIDs"] !== null) {
            $this->SecurityGroupIDs = $param["SecurityGroupIDs"];
        }

        if (array_key_exists("InstanceChargePrepaid",$param) and $param["InstanceChargePrepaid"] !== null) {
            $this->InstanceChargePrepaid = new InstanceChargePrepaid();
            $this->InstanceChargePrepaid->deserialize($param["InstanceChargePrepaid"]);
        }
    }
}
