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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全日志接入详情
 *
 * @method integer getCount() 获取已接入普通主机数量
 * @method void setCount(integer $Count) 设置已接入普通主机数量
 * @method integer getSuperNodeCount() 获取已接入超级节点数量
 * @method void setSuperNodeCount(integer $SuperNodeCount) 设置已接入超级节点数量
 * @method boolean getIsJoined() 获取是否已接入(true:已接入 false:未接入)
 * @method void setIsJoined(boolean $IsJoined) 设置是否已接入(true:已接入 false:未接入)
 * @method string getLogType() 获取日志类型(
容器bash:  "container_bash"
容器启动: "container_launch"
k8sApi: "k8s_api"
)
 * @method void setLogType(string $LogType) 设置日志类型(
容器bash:  "container_bash"
容器启动: "container_launch"
k8sApi: "k8s_api"
)
 * @method integer getClusterCount() 获取已接入集群数量
 * @method void setClusterCount(integer $ClusterCount) 设置已接入集群数量
 */
class SecLogJoinInfo extends AbstractModel
{
    /**
     * @var integer 已接入普通主机数量
     */
    public $Count;

    /**
     * @var integer 已接入超级节点数量
     */
    public $SuperNodeCount;

    /**
     * @var boolean 是否已接入(true:已接入 false:未接入)
     */
    public $IsJoined;

    /**
     * @var string 日志类型(
容器bash:  "container_bash"
容器启动: "container_launch"
k8sApi: "k8s_api"
)
     */
    public $LogType;

    /**
     * @var integer 已接入集群数量
     */
    public $ClusterCount;

    /**
     * @param integer $Count 已接入普通主机数量
     * @param integer $SuperNodeCount 已接入超级节点数量
     * @param boolean $IsJoined 是否已接入(true:已接入 false:未接入)
     * @param string $LogType 日志类型(
容器bash:  "container_bash"
容器启动: "container_launch"
k8sApi: "k8s_api"
)
     * @param integer $ClusterCount 已接入集群数量
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
        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("SuperNodeCount",$param) and $param["SuperNodeCount"] !== null) {
            $this->SuperNodeCount = $param["SuperNodeCount"];
        }

        if (array_key_exists("IsJoined",$param) and $param["IsJoined"] !== null) {
            $this->IsJoined = $param["IsJoined"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("ClusterCount",$param) and $param["ClusterCount"] !== null) {
            $this->ClusterCount = $param["ClusterCount"];
        }
    }
}
