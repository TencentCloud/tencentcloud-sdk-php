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
 * 机器清理记录对象
 *
 * @method integer getId() 获取<p>ID值</p>
 * @method void setId(integer $Id) 设置<p>ID值</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getPublicIp() 获取<p>公网IP</p>
 * @method void setPublicIp(string $PublicIp) 设置<p>公网IP</p>
 * @method string getPrivateIp() 获取<p>内网IP</p>
 * @method void setPrivateIp(string $PrivateIp) 设置<p>内网IP</p>
 * @method string getAgentLastOfflineTime() 获取<p>客户端最后离线时间</p>
 * @method void setAgentLastOfflineTime(string $AgentLastOfflineTime) 设置<p>客户端最后离线时间</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 */
class MachineClearHistory extends AbstractModel
{
    /**
     * @var integer <p>ID值</p>
     */
    public $Id;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>公网IP</p>
     */
    public $PublicIp;

    /**
     * @var string <p>内网IP</p>
     */
    public $PrivateIp;

    /**
     * @var string <p>客户端最后离线时间</p>
     */
    public $AgentLastOfflineTime;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @param integer $Id <p>ID值</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $PublicIp <p>公网IP</p>
     * @param string $PrivateIp <p>内网IP</p>
     * @param string $AgentLastOfflineTime <p>客户端最后离线时间</p>
     * @param string $CreateTime <p>创建时间</p>
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
