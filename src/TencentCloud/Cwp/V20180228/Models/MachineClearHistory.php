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
 * 机器清理记录对象
 *
 * @method integer getId() 获取ID值
 * @method void setId(integer $Id) 设置ID值
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getPublicIp() 获取公网IP
 * @method void setPublicIp(string $PublicIp) 设置公网IP
 * @method string getPrivateIp() 获取内网IP
 * @method void setPrivateIp(string $PrivateIp) 设置内网IP
 * @method string getAgentLastOfflineTime() 获取客户端最后离线时间
 * @method void setAgentLastOfflineTime(string $AgentLastOfflineTime) 设置客户端最后离线时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 */
class MachineClearHistory extends AbstractModel
{
    /**
     * @var integer ID值
     */
    public $Id;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 公网IP
     */
    public $PublicIp;

    /**
     * @var string 内网IP
     */
    public $PrivateIp;

    /**
     * @var string 客户端最后离线时间
     */
    public $AgentLastOfflineTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @param integer $Id ID值
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $PublicIp 公网IP
     * @param string $PrivateIp 内网IP
     * @param string $AgentLastOfflineTime 客户端最后离线时间
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("AgentLastOfflineTime",$param) and $param["AgentLastOfflineTime"] !== null) {
            $this->AgentLastOfflineTime = $param["AgentLastOfflineTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
