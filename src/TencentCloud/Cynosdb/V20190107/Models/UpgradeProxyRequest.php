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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeProxy请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getCpu() 获取cpu核数
 * @method void setCpu(integer $Cpu) 设置cpu核数
 * @method integer getMem() 获取内存
 * @method void setMem(integer $Mem) 设置内存
 * @method integer getProxyCount() 获取数据库代理组节点个数
 * @method void setProxyCount(integer $ProxyCount) 设置数据库代理组节点个数
 * @method string getProxyGroupId() 获取数据库代理组ID（已废弃）
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理组ID（已废弃）
 * @method string getReloadBalance() 获取重新负载均衡：auto（自动），manual（手动）
 * @method void setReloadBalance(string $ReloadBalance) 设置重新负载均衡：auto（自动），manual（手动）
 * @method string getIsInMaintainPeriod() 获取升级时间 ：no（升级完成时）yes（实例维护时间）
 * @method void setIsInMaintainPeriod(string $IsInMaintainPeriod) 设置升级时间 ：no（升级完成时）yes（实例维护时间）
 * @method array getProxyZones() 获取数据库代理节点信息
 * @method void setProxyZones(array $ProxyZones) 设置数据库代理节点信息
 */
class UpgradeProxyRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer cpu核数
     */
    public $Cpu;

    /**
     * @var integer 内存
     */
    public $Mem;

    /**
     * @var integer 数据库代理组节点个数
     */
    public $ProxyCount;

    /**
     * @var string 数据库代理组ID（已废弃）
     */
    public $ProxyGroupId;

    /**
     * @var string 重新负载均衡：auto（自动），manual（手动）
     */
    public $ReloadBalance;

    /**
     * @var string 升级时间 ：no（升级完成时）yes（实例维护时间）
     */
    public $IsInMaintainPeriod;

    /**
     * @var array 数据库代理节点信息
     */
    public $ProxyZones;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $Cpu cpu核数
     * @param integer $Mem 内存
     * @param integer $ProxyCount 数据库代理组节点个数
     * @param string $ProxyGroupId 数据库代理组ID（已废弃）
     * @param string $ReloadBalance 重新负载均衡：auto（自动），manual（手动）
     * @param string $IsInMaintainPeriod 升级时间 ：no（升级完成时）yes（实例维护时间）
     * @param array $ProxyZones 数据库代理节点信息
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

        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ProxyCount",$param) and $param["ProxyCount"] !== null) {
            $this->ProxyCount = $param["ProxyCount"];
        }

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("IsInMaintainPeriod",$param) and $param["IsInMaintainPeriod"] !== null) {
            $this->IsInMaintainPeriod = $param["IsInMaintainPeriod"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }
    }
}
