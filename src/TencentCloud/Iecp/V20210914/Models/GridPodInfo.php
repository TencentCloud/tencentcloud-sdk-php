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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GridPod信息
 *
 * @method string getName() 获取Pod名称
 * @method void setName(string $Name) 设置Pod名称
 * @method string getNameSpace() 获取命名空间
 * @method void setNameSpace(string $NameSpace) 设置命名空间
 * @method string getStatus() 获取状态(Pending｜Running｜Succeeded｜Failed｜Unknown)
 * @method void setStatus(string $Status) 设置状态(Pending｜Running｜Succeeded｜Failed｜Unknown)
 * @method string getNodeName() 获取节点名
 * @method void setNodeName(string $NodeName) 设置节点名
 * @method string getNodeIP() 获取节点IP
 * @method void setNodeIP(string $NodeIP) 设置节点IP
 * @method string getPodIP() 获取Pod的IP
 * @method void setPodIP(string $PodIP) 设置Pod的IP
 * @method string getStartTime() 获取启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStartTime(string $StartTime) 设置启动时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRunSec() 获取运行时长（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunSec(integer $RunSec) 设置运行时长（秒）
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRestartCount() 获取重启次数
 * @method void setRestartCount(integer $RestartCount) 设置重启次数
 * @method string getClusterID() 获取集群名称ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClusterID(string $ClusterID) 设置集群名称ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class GridPodInfo extends AbstractModel
{
    /**
     * @var string Pod名称
     */
    public $Name;

    /**
     * @var string 命名空间
     */
    public $NameSpace;

    /**
     * @var string 状态(Pending｜Running｜Succeeded｜Failed｜Unknown)
     */
    public $Status;

    /**
     * @var string 节点名
     */
    public $NodeName;

    /**
     * @var string 节点IP
     */
    public $NodeIP;

    /**
     * @var string Pod的IP
     */
    public $PodIP;

    /**
     * @var string 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StartTime;

    /**
     * @var integer 运行时长（秒）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunSec;

    /**
     * @var integer 重启次数
     */
    public $RestartCount;

    /**
     * @var string 集群名称ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ClusterID;

    /**
     * @param string $Name Pod名称
     * @param string $NameSpace 命名空间
     * @param string $Status 状态(Pending｜Running｜Succeeded｜Failed｜Unknown)
     * @param string $NodeName 节点名
     * @param string $NodeIP 节点IP
     * @param string $PodIP Pod的IP
     * @param string $StartTime 启动时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RunSec 运行时长（秒）
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RestartCount 重启次数
     * @param string $ClusterID 集群名称ID
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeIP",$param) and $param["NodeIP"] !== null) {
            $this->NodeIP = $param["NodeIP"];
        }

        if (array_key_exists("PodIP",$param) and $param["PodIP"] !== null) {
            $this->PodIP = $param["PodIP"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("RunSec",$param) and $param["RunSec"] !== null) {
            $this->RunSec = $param["RunSec"];
        }

        if (array_key_exists("RestartCount",$param) and $param["RestartCount"] !== null) {
            $this->RestartCount = $param["RestartCount"];
        }

        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }
    }
}
