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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ApplyCDBProxy请求参数结构体
 *
 * @method string getInstanceId() 获取主实例唯一标识ID
 * @method void setInstanceId(string $InstanceId) 设置主实例唯一标识ID
 * @method string getUniqVpcId() 获取私有网络ID
 * @method void setUniqVpcId(string $UniqVpcId) 设置私有网络ID
 * @method string getUniqSubnetId() 获取私有网络子网ID
 * @method void setUniqSubnetId(string $UniqSubnetId) 设置私有网络子网ID
 * @method integer getProxyCount() 获取代理组节点个数
 * @method void setProxyCount(integer $ProxyCount) 设置代理组节点个数
 * @method integer getCpu() 获取cpu核数
 * @method void setCpu(integer $Cpu) 设置cpu核数
 * @method integer getMem() 获取内存
 * @method void setMem(integer $Mem) 设置内存
 * @method array getSecurityGroup() 获取安全组
 * @method void setSecurityGroup(array $SecurityGroup) 设置安全组
 * @method string getDesc() 获取描述说明，最大支持256位。
 * @method void setDesc(string $Desc) 设置描述说明，最大支持256位。
 */
class ApplyCDBProxyRequest extends AbstractModel
{
    /**
     * @var string 主实例唯一标识ID
     */
    public $InstanceId;

    /**
     * @var string 私有网络ID
     */
    public $UniqVpcId;

    /**
     * @var string 私有网络子网ID
     */
    public $UniqSubnetId;

    /**
     * @var integer 代理组节点个数
     */
    public $ProxyCount;

    /**
     * @var integer cpu核数
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Mem;

    /**
     * @var array 安全组
     */
    public $SecurityGroup;

    /**
     * @var string 描述说明，最大支持256位。
     */
    public $Desc;

    /**
     * @param string $InstanceId 主实例唯一标识ID
     * @param string $UniqVpcId 私有网络ID
     * @param string $UniqSubnetId 私有网络子网ID
     * @param integer $ProxyCount 代理组节点个数
     * @param integer $Cpu cpu核数
     * @param integer $Mem 内存
     * @param array $SecurityGroup 安全组
     * @param string $Desc 描述说明，最大支持256位。
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

        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("UniqSubnetId",$param) and $param["UniqSubnetId"] !== null) {
            $this->UniqSubnetId = $param["UniqSubnetId"];
        }

        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("SecurityGroup",$param) and $param["SecurityGroup"] !== null) {
            $this->SecurityGroup = $param["SecurityGroup"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
