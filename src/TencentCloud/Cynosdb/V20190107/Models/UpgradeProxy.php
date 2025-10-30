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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 添加实例或者变配实例时同步升级proxy.
 *
 * @method integer getCpu() 获取cpu
 * @method void setCpu(integer $Cpu) 设置cpu
 * @method integer getMem() 获取memory
 * @method void setMem(integer $Mem) 设置memory
 * @method array getProxyZones() 获取代理节点信息
 * @method void setProxyZones(array $ProxyZones) 设置代理节点信息
 * @method string getReloadBalance() 获取重新负载均衡
 * @method void setReloadBalance(string $ReloadBalance) 设置重新负载均衡
 */
class UpgradeProxy extends AbstractModel
{
    /**
     * @var integer cpu
     */
    public $Cpu;

    /**
     * @var integer memory
     */
    public $Mem;

    /**
     * @var array 代理节点信息
     */
    public $ProxyZones;

    /**
     * @var string 重新负载均衡
     */
    public $ReloadBalance;

    /**
     * @param integer $Cpu cpu
     * @param integer $Mem memory
     * @param array $ProxyZones 代理节点信息
     * @param string $ReloadBalance 重新负载均衡
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
        if (array_key_exists("Cpu",$param) and $param["Cpu"] !== null) {
            $this->Cpu = $param["Cpu"];
        }

        if (array_key_exists("Mem",$param) and $param["Mem"] !== null) {
            $this->Mem = $param["Mem"];
        }

        if (array_key_exists("ProxyZones",$param) and $param["ProxyZones"] !== null) {
            $this->ProxyZones = [];
            foreach ($param["ProxyZones"] as $key => $value){
                $obj = new ProxyZone();
                $obj->deserialize($value);
                array_push($this->ProxyZones, $obj);
            }
        }

        if (array_key_exists("ReloadBalance",$param) and $param["ReloadBalance"] !== null) {
            $this->ReloadBalance = $param["ReloadBalance"];
        }
    }
}
