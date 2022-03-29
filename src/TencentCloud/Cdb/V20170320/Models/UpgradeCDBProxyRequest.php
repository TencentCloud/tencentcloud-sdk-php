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
 * UpgradeCDBProxy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getProxyGroupId() 获取数据库代理ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置数据库代理ID
 * @method integer getProxyCount() 获取代理节点个数，实际规格支持数
 * @method void setProxyCount(integer $ProxyCount) 设置代理节点个数，实际规格支持数
 * @method integer getCpu() 获取代理节点核数，实际规格支持数
 * @method void setCpu(integer $Cpu) 设置代理节点核数，实际规格支持数
 * @method integer getMem() 获取代理节点内存大小
 * @method void setMem(integer $Mem) 设置代理节点内存大小
 * @method string getReloadBalance() 获取重新负载均衡：auto（自动），manual（手动）
 * @method void setReloadBalance(string $ReloadBalance) 设置重新负载均衡：auto（自动），manual（手动）
 * @method string getUpgradeTime() 获取升级时间 nowTime（升级完成时）timeWindow（实例维护时间）
 * @method void setUpgradeTime(string $UpgradeTime) 设置升级时间 nowTime（升级完成时）timeWindow（实例维护时间）
 */
class UpgradeCDBProxyRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 数据库代理ID
     */
    public $ProxyGroupId;

    /**
     * @var integer 代理节点个数，实际规格支持数
     */
    public $ProxyCount;

    /**
     * @var integer 代理节点核数，实际规格支持数
     */
    public $Cpu;

    /**
     * @var integer 代理节点内存大小
     */
    public $Mem;

    /**
     * @var string 重新负载均衡：auto（自动），manual（手动）
     */
    public $ReloadBalance;

    /**
     * @var string 升级时间 nowTime（升级完成时）timeWindow（实例维护时间）
     */
    public $UpgradeTime;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ProxyGroupId 数据库代理ID
     * @param integer $ProxyCount 代理节点个数，实际规格支持数
     * @param integer $Cpu 代理节点核数，实际规格支持数
     * @param integer $Mem 代理节点内存大小
     * @param string $ReloadBalance 重新负载均衡：auto（自动），manual（手动）
     * @param string $UpgradeTime 升级时间 nowTime（升级完成时）timeWindow（实例维护时间）
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

        if (array_key_exists("ProxyGroupId",$param) and $param["ProxyGroupId"] !== null) {
            $this->ProxyGroupId = $param["ProxyGroupId"];
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

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("UpgradeTime",$param) and $param["UpgradeTime"] !== null) {
            $this->UpgradeTime = $param["UpgradeTime"];
        }
    }
}
