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
namespace TencentCloud\Dbdc\V20201029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBCustomClusterDetail返回参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getClusterName() 获取<p>集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称</p>
 * @method string getClusterDescription() 获取<p>集群描述</p>
 * @method void setClusterDescription(string $ClusterDescription) 设置<p>集群描述</p>
 * @method string getRegion() 获取<p>集群所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海地域</li><li>ap-nanjing： 南京地域</li></ul>
 * @method void setRegion(string $Region) 设置<p>集群所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海地域</li><li>ap-nanjing： 南京地域</li></ul>
 * @method string getClusterStatus() 获取<p>DB Custom 集群状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Destroying： 销毁中</li><li>Initializing： 初始化中</li></ul>
 * @method void setClusterStatus(string $ClusterStatus) 设置<p>DB Custom 集群状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Destroying： 销毁中</li><li>Initializing： 初始化中</li></ul>
 * @method string getClusterVersion() 获取<p>集群版本</p><p>枚举值：</p><ul><li>1.34.1： 集群版本1.34.1</li></ul><p>默认值：1.34.1</p>
 * @method void setClusterVersion(string $ClusterVersion) 设置<p>集群版本</p><p>枚举值：</p><ul><li>1.34.1： 集群版本1.34.1</li></ul><p>默认值：1.34.1</p>
 * @method integer getClusterNodeNum() 获取<p>集群下的节点数量</p>
 * @method void setClusterNodeNum(integer $ClusterNodeNum) 设置<p>集群下的节点数量</p>
 * @method string getClusterLevel() 获取<p>集群规模</p>
 * @method void setClusterLevel(string $ClusterLevel) 设置<p>集群规模</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method array getTags() 获取<p>集群标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>集群标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ApiServerNetwork getApiServerNetwork() 获取<p>集群的API Server的网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiServerNetwork(ApiServerNetwork $ApiServerNetwork) 设置<p>集群的API Server的网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method ContainerNetwork getContainerNetwork() 获取<p>容器网络，在此集群中的所有Pod将与此网络连通</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainerNetwork(ContainerNetwork $ContainerNetwork) 设置<p>容器网络，在此集群中的所有Pod将与此网络连通</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeDBCustomClusterDetailResponse extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群描述</p>
     */
    public $ClusterDescription;

    /**
     * @var string <p>集群所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海地域</li><li>ap-nanjing： 南京地域</li></ul>
     */
    public $Region;

    /**
     * @var string <p>DB Custom 集群状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Destroying： 销毁中</li><li>Initializing： 初始化中</li></ul>
     */
    public $ClusterStatus;

    /**
     * @var string <p>集群版本</p><p>枚举值：</p><ul><li>1.34.1： 集群版本1.34.1</li></ul><p>默认值：1.34.1</p>
     */
    public $ClusterVersion;

    /**
     * @var integer <p>集群下的节点数量</p>
     */
    public $ClusterNodeNum;

    /**
     * @var string <p>集群规模</p>
     */
    public $ClusterLevel;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var array <p>集群标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var ApiServerNetwork <p>集群的API Server的网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiServerNetwork;

    /**
     * @var ContainerNetwork <p>容器网络，在此集群中的所有Pod将与此网络连通</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContainerNetwork;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $ClusterName <p>集群名称</p>
     * @param string $ClusterDescription <p>集群描述</p>
     * @param string $Region <p>集群所属地域</p><p>枚举值：</p><ul><li>ap-shanghai： 上海地域</li><li>ap-nanjing： 南京地域</li></ul>
     * @param string $ClusterStatus <p>DB Custom 集群状态</p><p>枚举值：</p><ul><li>Creating： 创建中</li><li>Running： 运行中</li><li>Destroying： 销毁中</li><li>Initializing： 初始化中</li></ul>
     * @param string $ClusterVersion <p>集群版本</p><p>枚举值：</p><ul><li>1.34.1： 集群版本1.34.1</li></ul><p>默认值：1.34.1</p>
     * @param integer $ClusterNodeNum <p>集群下的节点数量</p>
     * @param string $ClusterLevel <p>集群规模</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param array $Tags <p>集群标签信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ApiServerNetwork $ApiServerNetwork <p>集群的API Server的网络信息</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param ContainerNetwork $ContainerNetwork <p>容器网络，在此集群中的所有Pod将与此网络连通</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterDescription",$param) and $param["ClusterDescription"] !== null) {
            $this->ClusterDescription = $param["ClusterDescription"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ClusterStatus",$param) and $param["ClusterStatus"] !== null) {
            $this->ClusterStatus = $param["ClusterStatus"];
        }

        if (array_key_exists("ClusterVersion",$param) and $param["ClusterVersion"] !== null) {
            $this->ClusterVersion = $param["ClusterVersion"];
        }

        if (array_key_exists("ClusterNodeNum",$param) and $param["ClusterNodeNum"] !== null) {
            $this->ClusterNodeNum = $param["ClusterNodeNum"];
        }

        if (array_key_exists("ClusterLevel",$param) and $param["ClusterLevel"] !== null) {
            $this->ClusterLevel = $param["ClusterLevel"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ApiServerNetwork",$param) and $param["ApiServerNetwork"] !== null) {
            $this->ApiServerNetwork = new ApiServerNetwork();
            $this->ApiServerNetwork->deserialize($param["ApiServerNetwork"]);
        }

        if (array_key_exists("ContainerNetwork",$param) and $param["ContainerNetwork"] !== null) {
            $this->ContainerNetwork = new ContainerNetwork();
            $this->ContainerNetwork->deserialize($param["ContainerNetwork"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
