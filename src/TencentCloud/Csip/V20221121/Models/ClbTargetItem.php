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
 * CLB后端服务
 *
 * @method string getInstanceID() 获取<p>实例ID</p>
 * @method void setInstanceID(string $InstanceID) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getPrivateIpAddresses() 获取<p>内网IP地址</p>
 * @method void setPrivateIpAddresses(string $PrivateIpAddresses) 设置<p>内网IP地址</p>
 * @method string getEniID() 获取<p>网卡ID</p>
 * @method void setEniID(string $EniID) 设置<p>网卡ID</p>
 * @method integer getPort() 获取<p>端口</p>
 * @method void setPort(integer $Port) 设置<p>端口</p>
 */
class ClbTargetItem extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceID;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>内网IP地址</p>
     */
    public $PrivateIpAddresses;

    /**
     * @var string <p>网卡ID</p>
     */
    public $EniID;

    /**
     * @var integer <p>端口</p>
     */
    public $Port;

    /**
     * @param string $InstanceID <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $PrivateIpAddresses <p>内网IP地址</p>
     * @param string $EniID <p>网卡ID</p>
     * @param integer $Port <p>端口</p>
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
        if (array_key_exists("InstanceID",$param) and $param["InstanceID"] !== null) {
            $this->InstanceID = $param["InstanceID"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PrivateIpAddresses",$param) and $param["PrivateIpAddresses"] !== null) {
            $this->PrivateIpAddresses = $param["PrivateIpAddresses"];
        }

        if (array_key_exists("EniID",$param) and $param["EniID"] !== null) {
            $this->EniID = $param["EniID"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
