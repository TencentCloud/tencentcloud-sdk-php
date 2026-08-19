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
 * DescribeClusterContainerDetail返回参数结构体
 *
 * @method integer getAppID() 获取<p>主账号AppID</p>
 * @method void setAppID(integer $AppID) 设置<p>主账号AppID</p>
 * @method string getContainerId() 获取<p>容器ID</p>
 * @method void setContainerId(string $ContainerId) 设置<p>容器ID</p>
 * @method string getCmd() 获取<p>容器启动CMD</p>
 * @method void setCmd(string $Cmd) 设置<p>容器启动CMD</p>
 * @method string getCreateTime() 获取<p>容器创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>容器创建时间</p>
 * @method string getRunStatus() 获取<p>运行状态</p>
 * @method void setRunStatus(string $RunStatus) 设置<p>运行状态</p>
 * @method string getIsolateStatus() 获取<p>隔离状态</p>
 * @method void setIsolateStatus(string $IsolateStatus) 设置<p>隔离状态</p>
 * @method integer getRiskEventCriticalCount() 获取<p>严重风险事件数</p>
 * @method void setRiskEventCriticalCount(integer $RiskEventCriticalCount) 设置<p>严重风险事件数</p>
 * @method integer getRiskEventHighCount() 获取<p>高风险事件数</p>
 * @method void setRiskEventHighCount(integer $RiskEventHighCount) 设置<p>高风险事件数</p>
 * @method integer getRiskEventMiddleCount() 获取<p>中风险事件数</p>
 * @method void setRiskEventMiddleCount(integer $RiskEventMiddleCount) 设置<p>中风险事件数</p>
 * @method integer getRiskEventLowCount() 获取<p>低风险事件数</p>
 * @method void setRiskEventLowCount(integer $RiskEventLowCount) 设置<p>低风险事件数</p>
 * @method string getImageName() 获取<p>镜像名称</p>
 * @method void setImageName(string $ImageName) 设置<p>镜像名称</p>
 * @method string getImageId() 获取<p>镜像ID</p>
 * @method void setImageId(string $ImageId) 设置<p>镜像ID</p>
 * @method string getImageSize() 获取<p>镜像大小</p>
 * @method void setImageSize(string $ImageSize) 设置<p>镜像大小</p>
 * @method string getImageCreateTime() 获取<p>镜像创建时间</p>
 * @method void setImageCreateTime(string $ImageCreateTime) 设置<p>镜像创建时间</p>
 * @method string getNodeName() 获取<p>节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>节点名称</p>
 * @method string getNodeInternalIP() 获取<p>节点内网IP</p>
 * @method void setNodeInternalIP(string $NodeInternalIP) 设置<p>节点内网IP</p>
 * @method string getNodeRunStatus() 获取<p>节点运行状态</p>
 * @method void setNodeRunStatus(string $NodeRunStatus) 设置<p>节点运行状态</p>
 * @method array getMounts() 获取<p>挂载信息列表</p>
 * @method void setMounts(array $Mounts) 设置<p>挂载信息列表</p>
 * @method string getNetworkName() 获取<p>网络名称</p>
 * @method void setNetworkName(string $NetworkName) 设置<p>网络名称</p>
 * @method string getNetworkMode() 获取<p>网络模式</p>
 * @method void setNetworkMode(string $NetworkMode) 设置<p>网络模式</p>
 * @method string getNetworkId() 获取<p>网络ID</p>
 * @method void setNetworkId(string $NetworkId) 设置<p>网络ID</p>
 * @method string getEndpointId() 获取<p>端点ID</p>
 * @method void setEndpointId(string $EndpointId) 设置<p>端点ID</p>
 * @method string getGateway() 获取<p>网关地址</p>
 * @method void setGateway(string $Gateway) 设置<p>网关地址</p>
 * @method string getIPv4() 获取<p>IPv4地址</p>
 * @method void setIPv4(string $IPv4) 设置<p>IPv4地址</p>
 * @method string getIPv6() 获取<p>IPv6地址</p>
 * @method void setIPv6(string $IPv6) 设置<p>IPv6地址</p>
 * @method string getMAC() 获取<p>MAC地址</p>
 * @method void setMAC(string $MAC) 设置<p>MAC地址</p>
 * @method string getContainerName() 获取<p>容器名称</p>
 * @method void setContainerName(string $ContainerName) 设置<p>容器名称</p>
 * @method string getNodeInstanceId() 获取<p>节点实例ID</p>
 * @method void setNodeInstanceId(string $NodeInstanceId) 设置<p>节点实例ID</p>
 * @method string getNodeType() 获取<p>容器关联节点的节点类型</p>
 * @method void setNodeType(string $NodeType) 设置<p>容器关联节点的节点类型</p>
 * @method string getNodeUniqueID() 获取<p>容器关联节点的节点唯一ID</p>
 * @method void setNodeUniqueID(string $NodeUniqueID) 设置<p>容器关联节点的节点唯一ID</p>
 * @method string getClusterCaMD5() 获取<p>容器关联集群的集群ca证书md5值，集群的唯一标识</p>
 * @method void setClusterCaMD5(string $ClusterCaMD5) 设置<p>容器关联集群的集群ca证书md5值，集群的唯一标识</p>
 * @method boolean getEnableLinkImage() 获取<p>容器镜像能否关联到镜像仓库中的记录</p>
 * @method void setEnableLinkImage(boolean $EnableLinkImage) 设置<p>容器镜像能否关联到镜像仓库中的记录</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterContainerDetailResponse extends AbstractModel
{
    /**
     * @var integer <p>主账号AppID</p>
     */
    public $AppID;

    /**
     * @var string <p>容器ID</p>
     */
    public $ContainerId;

    /**
     * @var string <p>容器启动CMD</p>
     */
    public $Cmd;

    /**
     * @var string <p>容器创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>运行状态</p>
     */
    public $RunStatus;

    /**
     * @var string <p>隔离状态</p>
     */
    public $IsolateStatus;

    /**
     * @var integer <p>严重风险事件数</p>
     * @deprecated
     */
    public $RiskEventCriticalCount;

    /**
     * @var integer <p>高风险事件数</p>
     * @deprecated
     */
    public $RiskEventHighCount;

    /**
     * @var integer <p>中风险事件数</p>
     * @deprecated
     */
    public $RiskEventMiddleCount;

    /**
     * @var integer <p>低风险事件数</p>
     * @deprecated
     */
    public $RiskEventLowCount;

    /**
     * @var string <p>镜像名称</p>
     */
    public $ImageName;

    /**
     * @var string <p>镜像ID</p>
     */
    public $ImageId;

    /**
     * @var string <p>镜像大小</p>
     */
    public $ImageSize;

    /**
     * @var string <p>镜像创建时间</p>
     */
    public $ImageCreateTime;

    /**
     * @var string <p>节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>节点内网IP</p>
     */
    public $NodeInternalIP;

    /**
     * @var string <p>节点运行状态</p>
     */
    public $NodeRunStatus;

    /**
     * @var array <p>挂载信息列表</p>
     */
    public $Mounts;

    /**
     * @var string <p>网络名称</p>
     */
    public $NetworkName;

    /**
     * @var string <p>网络模式</p>
     */
    public $NetworkMode;

    /**
     * @var string <p>网络ID</p>
     */
    public $NetworkId;

    /**
     * @var string <p>端点ID</p>
     */
    public $EndpointId;

    /**
     * @var string <p>网关地址</p>
     */
    public $Gateway;

    /**
     * @var string <p>IPv4地址</p>
     */
    public $IPv4;

    /**
     * @var string <p>IPv6地址</p>
     */
    public $IPv6;

    /**
     * @var string <p>MAC地址</p>
     */
    public $MAC;

    /**
     * @var string <p>容器名称</p>
     */
    public $ContainerName;

    /**
     * @var string <p>节点实例ID</p>
     */
    public $NodeInstanceId;

    /**
     * @var string <p>容器关联节点的节点类型</p>
     */
    public $NodeType;

    /**
     * @var string <p>容器关联节点的节点唯一ID</p>
     */
    public $NodeUniqueID;

    /**
     * @var string <p>容器关联集群的集群ca证书md5值，集群的唯一标识</p>
     */
    public $ClusterCaMD5;

    /**
     * @var boolean <p>容器镜像能否关联到镜像仓库中的记录</p>
     */
    public $EnableLinkImage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AppID <p>主账号AppID</p>
     * @param string $ContainerId <p>容器ID</p>
     * @param string $Cmd <p>容器启动CMD</p>
     * @param string $CreateTime <p>容器创建时间</p>
     * @param string $RunStatus <p>运行状态</p>
     * @param string $IsolateStatus <p>隔离状态</p>
     * @param integer $RiskEventCriticalCount <p>严重风险事件数</p>
     * @param integer $RiskEventHighCount <p>高风险事件数</p>
     * @param integer $RiskEventMiddleCount <p>中风险事件数</p>
     * @param integer $RiskEventLowCount <p>低风险事件数</p>
     * @param string $ImageName <p>镜像名称</p>
     * @param string $ImageId <p>镜像ID</p>
     * @param string $ImageSize <p>镜像大小</p>
     * @param string $ImageCreateTime <p>镜像创建时间</p>
     * @param string $NodeName <p>节点名称</p>
     * @param string $NodeInternalIP <p>节点内网IP</p>
     * @param string $NodeRunStatus <p>节点运行状态</p>
     * @param array $Mounts <p>挂载信息列表</p>
     * @param string $NetworkName <p>网络名称</p>
     * @param string $NetworkMode <p>网络模式</p>
     * @param string $NetworkId <p>网络ID</p>
     * @param string $EndpointId <p>端点ID</p>
     * @param string $Gateway <p>网关地址</p>
     * @param string $IPv4 <p>IPv4地址</p>
     * @param string $IPv6 <p>IPv6地址</p>
     * @param string $MAC <p>MAC地址</p>
     * @param string $ContainerName <p>容器名称</p>
     * @param string $NodeInstanceId <p>节点实例ID</p>
     * @param string $NodeType <p>容器关联节点的节点类型</p>
     * @param string $NodeUniqueID <p>容器关联节点的节点唯一ID</p>
     * @param string $ClusterCaMD5 <p>容器关联集群的集群ca证书md5值，集群的唯一标识</p>
     * @param boolean $EnableLinkImage <p>容器镜像能否关联到镜像仓库中的记录</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("ContainerId",$param) and $param["ContainerId"] !== null) {
            $this->ContainerId = $param["ContainerId"];
        }

        if (array_key_exists("Cmd",$param) and $param["Cmd"] !== null) {
            $this->Cmd = $param["Cmd"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RunStatus",$param) and $param["RunStatus"] !== null) {
            $this->RunStatus = $param["RunStatus"];
        }

        if (array_key_exists("IsolateStatus",$param) and $param["IsolateStatus"] !== null) {
            $this->IsolateStatus = $param["IsolateStatus"];
        }

        if (array_key_exists("RiskEventCriticalCount",$param) and $param["RiskEventCriticalCount"] !== null) {
            $this->RiskEventCriticalCount = $param["RiskEventCriticalCount"];
        }

        if (array_key_exists("RiskEventHighCount",$param) and $param["RiskEventHighCount"] !== null) {
            $this->RiskEventHighCount = $param["RiskEventHighCount"];
        }

        if (array_key_exists("RiskEventMiddleCount",$param) and $param["RiskEventMiddleCount"] !== null) {
            $this->RiskEventMiddleCount = $param["RiskEventMiddleCount"];
        }

        if (array_key_exists("RiskEventLowCount",$param) and $param["RiskEventLowCount"] !== null) {
            $this->RiskEventLowCount = $param["RiskEventLowCount"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageSize",$param) and $param["ImageSize"] !== null) {
            $this->ImageSize = $param["ImageSize"];
        }

        if (array_key_exists("ImageCreateTime",$param) and $param["ImageCreateTime"] !== null) {
            $this->ImageCreateTime = $param["ImageCreateTime"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("NodeInternalIP",$param) and $param["NodeInternalIP"] !== null) {
            $this->NodeInternalIP = $param["NodeInternalIP"];
        }

        if (array_key_exists("NodeRunStatus",$param) and $param["NodeRunStatus"] !== null) {
            $this->NodeRunStatus = $param["NodeRunStatus"];
        }

        if (array_key_exists("Mounts",$param) and $param["Mounts"] !== null) {
            $this->Mounts = [];
            foreach ($param["Mounts"] as $key => $value){
                $obj = new ContainerMountItem();
                $obj->deserialize($value);
                array_push($this->Mounts, $obj);
            }
        }

        if (array_key_exists("NetworkName",$param) and $param["NetworkName"] !== null) {
            $this->NetworkName = $param["NetworkName"];
        }

        if (array_key_exists("NetworkMode",$param) and $param["NetworkMode"] !== null) {
            $this->NetworkMode = $param["NetworkMode"];
        }

        if (array_key_exists("NetworkId",$param) and $param["NetworkId"] !== null) {
            $this->NetworkId = $param["NetworkId"];
        }

        if (array_key_exists("EndpointId",$param) and $param["EndpointId"] !== null) {
            $this->EndpointId = $param["EndpointId"];
        }

        if (array_key_exists("Gateway",$param) and $param["Gateway"] !== null) {
            $this->Gateway = $param["Gateway"];
        }

        if (array_key_exists("IPv4",$param) and $param["IPv4"] !== null) {
            $this->IPv4 = $param["IPv4"];
        }

        if (array_key_exists("IPv6",$param) and $param["IPv6"] !== null) {
            $this->IPv6 = $param["IPv6"];
        }

        if (array_key_exists("MAC",$param) and $param["MAC"] !== null) {
            $this->MAC = $param["MAC"];
        }

        if (array_key_exists("ContainerName",$param) and $param["ContainerName"] !== null) {
            $this->ContainerName = $param["ContainerName"];
        }

        if (array_key_exists("NodeInstanceId",$param) and $param["NodeInstanceId"] !== null) {
            $this->NodeInstanceId = $param["NodeInstanceId"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("NodeUniqueID",$param) and $param["NodeUniqueID"] !== null) {
            $this->NodeUniqueID = $param["NodeUniqueID"];
        }

        if (array_key_exists("ClusterCaMD5",$param) and $param["ClusterCaMD5"] !== null) {
            $this->ClusterCaMD5 = $param["ClusterCaMD5"];
        }

        if (array_key_exists("EnableLinkImage",$param) and $param["EnableLinkImage"] !== null) {
            $this->EnableLinkImage = $param["EnableLinkImage"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
