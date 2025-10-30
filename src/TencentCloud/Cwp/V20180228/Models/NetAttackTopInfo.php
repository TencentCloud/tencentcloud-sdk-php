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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网络攻击top统计数据
 *
 * @method array getAgent() 获取网络攻击主机维度top统计数据
 * @method void setAgent(array $Agent) 设置网络攻击主机维度top统计数据
 * @method array getSrcIp() 获取网络攻击ip来源维度top统计数据
 * @method void setSrcIp(array $SrcIp) 设置网络攻击ip来源维度top统计数据
 * @method array getDstPort() 获取网络攻击目标端口维度top统计数据
 * @method void setDstPort(array $DstPort) 设置网络攻击目标端口维度top统计数据
 * @method array getVul() 获取网络攻击漏洞维度top统计数据
 * @method void setVul(array $Vul) 设置网络攻击漏洞维度top统计数据
 */
class NetAttackTopInfo extends AbstractModel
{
    /**
     * @var array 网络攻击主机维度top统计数据
     */
    public $Agent;

    /**
     * @var array 网络攻击ip来源维度top统计数据
     */
    public $SrcIp;

    /**
     * @var array 网络攻击目标端口维度top统计数据
     */
    public $DstPort;

    /**
     * @var array 网络攻击漏洞维度top统计数据
     */
    public $Vul;

    /**
     * @param array $Agent 网络攻击主机维度top统计数据
     * @param array $SrcIp 网络攻击ip来源维度top统计数据
     * @param array $DstPort 网络攻击目标端口维度top统计数据
     * @param array $Vul 网络攻击漏洞维度top统计数据
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
        if (array_key_exists("Agent",$param) and $param["Agent"] !== null) {
            $this->Agent = [];
            foreach ($param["Agent"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->Agent, $obj);
            }
        }

        if (array_key_exists("SrcIp",$param) and $param["SrcIp"] !== null) {
            $this->SrcIp = [];
            foreach ($param["SrcIp"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->SrcIp, $obj);
            }
        }

        if (array_key_exists("DstPort",$param) and $param["DstPort"] !== null) {
            $this->DstPort = [];
            foreach ($param["DstPort"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->DstPort, $obj);
            }
        }

        if (array_key_exists("Vul",$param) and $param["Vul"] !== null) {
            $this->Vul = [];
            foreach ($param["Vul"] as $key => $value){
                $obj = new TopInfo();
                $obj->deserialize($value);
                array_push($this->Vul, $obj);
            }
        }
    }
}
