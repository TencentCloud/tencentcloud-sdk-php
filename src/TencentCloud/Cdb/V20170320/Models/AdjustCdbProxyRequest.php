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
 * AdjustCdbProxy请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getProxyGroupId() 获取代理组ID
 * @method void setProxyGroupId(string $ProxyGroupId) 设置代理组ID
 * @method array getProxyNodeCustom() 获取节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数
Region：节点地域
Zone：节点可用区
Cpu：单个代理节点核数（单位：核）
Mem：单个代理节点内存数（单位：MB）
 * @method void setProxyNodeCustom(array $ProxyNodeCustom) 设置节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数
Region：节点地域
Zone：节点可用区
Cpu：单个代理节点核数（单位：核）
Mem：单个代理节点内存数（单位：MB）
 * @method string getReloadBalance() 获取重新负载均衡：auto(自动),manual(手动)
 * @method void setReloadBalance(string $ReloadBalance) 设置重新负载均衡：auto(自动),manual(手动)
 * @method string getUpgradeTime() 获取升级切换时间：nowTime(升级完成时),timeWindow(维护时间内)
 * @method void setUpgradeTime(string $UpgradeTime) 设置升级切换时间：nowTime(升级完成时),timeWindow(维护时间内)
 */
class AdjustCdbProxyRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 代理组ID
     */
    public $ProxyGroupId;

    /**
     * @var array 节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数
Region：节点地域
Zone：节点可用区
Cpu：单个代理节点核数（单位：核）
Mem：单个代理节点内存数（单位：MB）
     */
    public $ProxyNodeCustom;

    /**
     * @var string 重新负载均衡：auto(自动),manual(手动)
     */
    public $ReloadBalance;

    /**
     * @var string 升级切换时间：nowTime(升级完成时),timeWindow(维护时间内)
     */
    public $UpgradeTime;

    /**
     * @param string $InstanceId 实例ID
     * @param string $ProxyGroupId 代理组ID
     * @param array $ProxyNodeCustom 节点规格配置
备注：数据库代理支持的节点规格为：2C4000MB、4C8000MB、8C16000MB。
示例中参数说明：
NodeCount：节点个数
Region：节点地域
Zone：节点可用区
Cpu：单个代理节点核数（单位：核）
Mem：单个代理节点内存数（单位：MB）
     * @param string $ReloadBalance 重新负载均衡：auto(自动),manual(手动)
     * @param string $UpgradeTime 升级切换时间：nowTime(升级完成时),timeWindow(维护时间内)
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

        if (array_key_exists("ProxyNodeCustom",$param) and $param["ProxyNodeCustom"] !== null) {
            $this->ProxyNodeCustom = [];
            foreach ($param["ProxyNodeCustom"] as $key => $value){
                $obj = new ProxyNodeCustom();
                $obj->deserialize($value);
                array_push($this->ProxyNodeCustom, $obj);
            }
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }

        if (array_key_exists("UpgradeTime",$param) and $param["UpgradeTime"] !== null) {
            $this->UpgradeTime = $param["UpgradeTime"];
        }
    }
}
