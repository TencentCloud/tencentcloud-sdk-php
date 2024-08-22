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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 节点信息列表
 *
 * @method string getNodeName() 获取节点名称
 * @method void setNodeName(string $NodeName) 设置节点名称
 * @method integer getStatus() 获取节点状态
 * @method void setStatus(integer $Status) 设置节点状态
 * @method string getIp() 获取节点ip
 * @method void setIp(string $Ip) 设置节点ip
 * @method string getNodeRole() 获取节点角色
 * @method void setNodeRole(string $NodeRole) 设置节点角色
 * @method string getComponentName() 获取组件名
 * @method void setComponentName(string $ComponentName) 设置组件名
 * @method string getLastRestartTime() 获取上一次重启时间
 * @method void setLastRestartTime(string $LastRestartTime) 设置上一次重启时间
 */
class NodeInfos extends AbstractModel
{
    /**
     * @var string 节点名称
     */
    public $NodeName;

    /**
     * @var integer 节点状态
     */
    public $Status;

    /**
     * @var string 节点ip
     */
    public $Ip;

    /**
     * @var string 节点角色
     */
    public $NodeRole;

    /**
     * @var string 组件名
     */
    public $ComponentName;

    /**
     * @var string 上一次重启时间
     */
    public $LastRestartTime;

    /**
     * @param string $NodeName 节点名称
     * @param integer $Status 节点状态
     * @param string $Ip 节点ip
     * @param string $NodeRole 节点角色
     * @param string $ComponentName 组件名
     * @param string $LastRestartTime 上一次重启时间
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
        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("NodeRole",$param) and $param["NodeRole"] !== null) {
            $this->NodeRole = $param["NodeRole"];
        }

        if (array_key_exists("ComponentName",$param) and $param["ComponentName"] !== null) {
            $this->ComponentName = $param["ComponentName"];
        }

        if (array_key_exists("LastRestartTime",$param) and $param["LastRestartTime"] !== null) {
            $this->LastRestartTime = $param["LastRestartTime"];
        }
    }
}
