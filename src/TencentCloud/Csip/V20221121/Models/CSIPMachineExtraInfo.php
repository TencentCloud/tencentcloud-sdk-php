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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CSIP扫描任务主机额外资产信息
 *
 * @method string getWanIP() 获取<p>公网IP</p>
 * @method void setWanIP(string $WanIP) 设置<p>公网IP</p>
 * @method string getPrivateIP() 获取<p>内网IP</p>
 * @method void setPrivateIP(string $PrivateIP) 设置<p>内网IP</p>
 * @method string getInstanceID() 获取<p>实例ID（CVM/BM/ECM唯一标识）</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID（CVM/BM/ECM唯一标识）</p>
 */
class CSIPMachineExtraInfo extends AbstractModel
{
    /**
     * @var string <p>公网IP</p>
     */
    public $WanIP;

    /**
     * @var string <p>内网IP</p>
     */
    public $PrivateIP;

    /**
     * @var string <p>实例ID（CVM/BM/ECM唯一标识）</p>
     */
    public $InstanceID;

    /**
     * @param string $WanIP <p>公网IP</p>
     * @param string $PrivateIP <p>内网IP</p>
     * @param string $InstanceID <p>实例ID（CVM/BM/ECM唯一标识）</p>
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
        if (array_key_exists("WanIP",$param) and $param["WanIP"] !== null) {
            $this->WanIP = $param["WanIP"];
        }

        if (array_key_exists("PrivateIP",$param) and $param["PrivateIP"] !== null) {
            $this->PrivateIP = $param["PrivateIP"];
        }

        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }
    }
}
