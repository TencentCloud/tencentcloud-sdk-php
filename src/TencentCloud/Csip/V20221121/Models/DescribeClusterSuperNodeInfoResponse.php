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
 * DescribeClusterSuperNodeInfo返回参数结构体
 *
 * @method string getRegion() 获取<p>所属地域 code（原样，如 ap-chengdu）。</p>
 * @method void setRegion(string $Region) 设置<p>所属地域 code（原样，如 ap-chengdu）。</p>
 * @method string getRegionName() 获取<p>地域中文名（如 西南地区（成都）；由地域 code 经字典翻译得到）。</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域中文名（如 西南地区（成都）；由地域 code 经字典翻译得到）。</p>
 * @method string getRegionNameEn() 获取<p>地域英文名（如 Southwest China (Chengdu)；由地域 code 经字典翻译得到）。</p>
 * @method void setRegionNameEn(string $RegionNameEn) 设置<p>地域英文名（如 Southwest China (Chengdu)；由地域 code 经字典翻译得到）。</p>
 * @method string getZone() 获取<p>可用区（中文名，由可用区 code 经字典翻译得到）。</p>
 * @method void setZone(string $Zone) 设置<p>可用区（中文名，由可用区 code 经字典翻译得到）。</p>
 * @method string getAssetSyncTime() 获取<p>资产最后更新时间。<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式，UTC时区）</p>
 * @method void setAssetSyncTime(string $AssetSyncTime) 设置<p>资产最后更新时间。<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式，UTC时区）</p>
 * @method string getNodeSource() 获取<p>节点来源（所属集群类型）。<br>枚举值：<br>TKE_MANAGED_CLUSTER：腾讯云标准集群<br>TKE_INDEPENDENT_CLUSTER：腾讯云标准集群（Master自维护）<br>TKE_SERVERLESS_CLUSTER：腾讯云Serverless集群<br>TKE_EDGE_CLUSTER：腾讯云边缘集群<br>SELF_BUILT：腾讯云内自建集群<br>SELF_BUILT_OTHER：非腾讯云自建集群（混合云）</p>
 * @method void setNodeSource(string $NodeSource) 设置<p>节点来源（所属集群类型）。<br>枚举值：<br>TKE_MANAGED_CLUSTER：腾讯云标准集群<br>TKE_INDEPENDENT_CLUSTER：腾讯云标准集群（Master自维护）<br>TKE_SERVERLESS_CLUSTER：腾讯云Serverless集群<br>TKE_EDGE_CLUSTER：腾讯云边缘集群<br>SELF_BUILT：腾讯云内自建集群<br>SELF_BUILT_OTHER：非腾讯云自建集群（混合云）</p>
 * @method string getSubNetName() 获取<p>子网名称。</p>
 * @method void setSubNetName(string $SubNetName) 设置<p>子网名称。</p>
 * @method string getSubNetId() 获取<p>子网 ID。</p>
 * @method void setSubNetId(string $SubNetId) 设置<p>子网 ID。</p>
 * @method string getSubNetCIDR() 获取<p>子网网段（CIDR）。</p>
 * @method void setSubNetCIDR(string $SubNetCIDR) 设置<p>子网网段（CIDR）。</p>
 * @method integer getCoresCount() 获取<p>核数（由 cpu_request 除以 1000 得到）。<br>单位：核</p>
 * @method void setCoresCount(integer $CoresCount) 设置<p>核数（由 cpu_request 除以 1000 得到）。<br>单位：核</p>
 * @method string getClusterName() 获取<p>所属集群名称。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>所属集群名称。</p>
 * @method string getClusterId() 获取<p>所属集群 ID。</p>
 * @method void setClusterId(string $ClusterId) 设置<p>所属集群 ID。</p>
 * @method string getStatus() 获取<p>所属集群运行状态。<br>枚举值：<br>Running：运行中<br>Exception：异常<br>Unknown：未知<br>Creating：创建中<br>Destroyed：已销毁</p>
 * @method void setStatus(string $Status) 设置<p>所属集群运行状态。<br>枚举值：<br>Running：运行中<br>Exception：异常<br>Unknown：未知<br>Creating：创建中<br>Destroyed：已销毁</p>
 * @method string getClusterVersion() 获取<p>Kubernetes 版本。</p>
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>Kubernetes 版本。</p>
 * @method string getKubeletVersion() 获取<p>Kubelet 版本。</p>
 * @method void setKubeletVersion(string $KubeletVersion) 设置<p>Kubelet 版本。</p>
 * @method integer getAppID() 获取<p>超级节点所属账号APPID</p>
 * @method void setAppID(integer $AppID) 设置<p>超级节点所属账号APPID</p>
 * @method string getInstanceId() 获取<p>超级节点实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>超级节点实例ID</p>
 * @method string getNodeName() 获取<p>超级节点名称</p>
 * @method void setNodeName(string $NodeName) 设置<p>超级节点名称</p>
 * @method string getVpcId() 获取<p>VPCID</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPCID</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeClusterSuperNodeInfoResponse extends AbstractModel
{
    /**
     * @var string <p>所属地域 code（原样，如 ap-chengdu）。</p>
     */
    public $Region;

    /**
     * @var string <p>地域中文名（如 西南地区（成都）；由地域 code 经字典翻译得到）。</p>
     */
    public $RegionName;

    /**
     * @var string <p>地域英文名（如 Southwest China (Chengdu)；由地域 code 经字典翻译得到）。</p>
     */
    public $RegionNameEn;

    /**
     * @var string <p>可用区（中文名，由可用区 code 经字典翻译得到）。</p>
     */
    public $Zone;

    /**
     * @var string <p>资产最后更新时间。<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式，UTC时区）</p>
     */
    public $AssetSyncTime;

    /**
     * @var string <p>节点来源（所属集群类型）。<br>枚举值：<br>TKE_MANAGED_CLUSTER：腾讯云标准集群<br>TKE_INDEPENDENT_CLUSTER：腾讯云标准集群（Master自维护）<br>TKE_SERVERLESS_CLUSTER：腾讯云Serverless集群<br>TKE_EDGE_CLUSTER：腾讯云边缘集群<br>SELF_BUILT：腾讯云内自建集群<br>SELF_BUILT_OTHER：非腾讯云自建集群（混合云）</p>
     */
    public $NodeSource;

    /**
     * @var string <p>子网名称。</p>
     */
    public $SubNetName;

    /**
     * @var string <p>子网 ID。</p>
     */
    public $SubNetId;

    /**
     * @var string <p>子网网段（CIDR）。</p>
     */
    public $SubNetCIDR;

    /**
     * @var integer <p>核数（由 cpu_request 除以 1000 得到）。<br>单位：核</p>
     */
    public $CoresCount;

    /**
     * @var string <p>所属集群名称。</p>
     */
    public $ClusterName;

    /**
     * @var string <p>所属集群 ID。</p>
     */
    public $ClusterId;

    /**
     * @var string <p>所属集群运行状态。<br>枚举值：<br>Running：运行中<br>Exception：异常<br>Unknown：未知<br>Creating：创建中<br>Destroyed：已销毁</p>
     */
    public $Status;

    /**
     * @var string <p>Kubernetes 版本。</p>
     */
    public $ClusterVersion;

    /**
     * @var string <p>Kubelet 版本。</p>
     */
    public $KubeletVersion;

    /**
     * @var integer <p>超级节点所属账号APPID</p>
     */
    public $AppID;

    /**
     * @var string <p>超级节点实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>超级节点名称</p>
     */
    public $NodeName;

    /**
     * @var string <p>VPCID</p>
     */
    public $VpcId;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Region <p>所属地域 code（原样，如 ap-chengdu）。</p>
     * @param string $RegionName <p>地域中文名（如 西南地区（成都）；由地域 code 经字典翻译得到）。</p>
     * @param string $RegionNameEn <p>地域英文名（如 Southwest China (Chengdu)；由地域 code 经字典翻译得到）。</p>
     * @param string $Zone <p>可用区（中文名，由可用区 code 经字典翻译得到）。</p>
     * @param string $AssetSyncTime <p>资产最后更新时间。<br>参数格式：YYYY-MM-DDTHH:mm:ssZ（ISO8601格式，UTC时区）</p>
     * @param string $NodeSource <p>节点来源（所属集群类型）。<br>枚举值：<br>TKE_MANAGED_CLUSTER：腾讯云标准集群<br>TKE_INDEPENDENT_CLUSTER：腾讯云标准集群（Master自维护）<br>TKE_SERVERLESS_CLUSTER：腾讯云Serverless集群<br>TKE_EDGE_CLUSTER：腾讯云边缘集群<br>SELF_BUILT：腾讯云内自建集群<br>SELF_BUILT_OTHER：非腾讯云自建集群（混合云）</p>
     * @param string $SubNetName <p>子网名称。</p>
     * @param string $SubNetId <p>子网 ID。</p>
     * @param string $SubNetCIDR <p>子网网段（CIDR）。</p>
     * @param integer $CoresCount <p>核数（由 cpu_request 除以 1000 得到）。<br>单位：核</p>
     * @param string $ClusterName <p>所属集群名称。</p>
     * @param string $ClusterId <p>所属集群 ID。</p>
     * @param string $Status <p>所属集群运行状态。<br>枚举值：<br>Running：运行中<br>Exception：异常<br>Unknown：未知<br>Creating：创建中<br>Destroyed：已销毁</p>
     * @param string $ClusterVersion <p>Kubernetes 版本。</p>
     * @param string $KubeletVersion <p>Kubelet 版本。</p>
     * @param integer $AppID <p>超级节点所属账号APPID</p>
     * @param string $InstanceId <p>超级节点实例ID</p>
     * @param string $NodeName <p>超级节点名称</p>
     * @param string $VpcId <p>VPCID</p>
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("RegionNameEn",$param) and $param["RegionNameEn"] !== null) {
            $this->RegionNameEn = $param["RegionNameEn"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("AssetSyncTime",$param) and $param["AssetSyncTime"] !== null) {
            $this->AssetSyncTime = $param["AssetSyncTime"];
        }

        if (array_key_exists("NodeSource",$param) and $param["NodeSource"] !== null) {
            $this->NodeSource = $param["NodeSource"];
        }

        if (array_key_exists("SubNetName",$param) and $param["SubNetName"] !== null) {
            $this->SubNetName = $param["SubNetName"];
        }

        if (array_key_exists("SubNetId",$param) and $param["SubNetId"] !== null) {
            $this->SubNetId = $param["SubNetId"];
        }

        if (array_key_exists("SubNetCIDR",$param) and $param["SubNetCIDR"] !== null) {
            $this->SubNetCIDR = $param["SubNetCIDR"];
        }

        if (array_key_exists("CoresCount",$param) and $param["CoresCount"] !== null) {
            $this->CoresCount = $param["CoresCount"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("KubeletVersion",$param) and $param["KubeletVersion"] !== null) {
            $this->KubeletVersion = $param["KubeletVersion"];
        }

        if (array_key_exists("AppID",$param) and $param["AppID"] !== null) {
            $this->AppID = $param["AppID"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
