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
 * 基线集群资产。
 *
 * @method string getClusterID() 获取<p>集群 ID。</p>
 * @method void setClusterID(string $ClusterID) 设置<p>集群 ID。</p>
 * @method string getClusterName() 获取<p>集群名称。</p>
 * @method void setClusterName(string $ClusterName) 设置<p>集群名称。</p>
 * @method string getClusterType() 获取<p>集群类型。</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型。</p>
 * @method integer getNodeCount() 获取<p>集群节点总数。</p>
 * @method void setNodeCount(integer $NodeCount) 设置<p>集群节点总数。</p>
 * @method integer getOnlineNodeCount() 获取<p>集群在线节点数。</p>
 * @method void setOnlineNodeCount(integer $OnlineNodeCount) 设置<p>集群在线节点数。</p>
 * @method integer getAppid() 获取<p>集群所属租户 Appid。</p>
 * @method void setAppid(integer $Appid) 设置<p>集群所属租户 Appid。</p>
 * @method string getAssetName() 获取<p>集群子资产名称（Pod名/Node名/Container名/Namespace名；CLUSTER 类型时为集群名）。</p>
 * @method void setAssetName(string $AssetName) 设置<p>集群子资产名称（Pod名/Node名/Container名/Namespace名；CLUSTER 类型时为集群名）。</p>
 */
class BaselineClusterAsset extends AbstractModel
{
    /**
     * @var string <p>集群 ID。</p>
     */
    public $ClusterID;

    /**
     * @var string <p>集群名称。</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群类型。</p>
     */
    public $ClusterType;

    /**
     * @var integer <p>集群节点总数。</p>
     */
    public $NodeCount;

    /**
     * @var integer <p>集群在线节点数。</p>
     */
    public $OnlineNodeCount;

    /**
     * @var integer <p>集群所属租户 Appid。</p>
     */
    public $Appid;

    /**
     * @var string <p>集群子资产名称（Pod名/Node名/Container名/Namespace名；CLUSTER 类型时为集群名）。</p>
     */
    public $AssetName;

    /**
     * @param string $ClusterID <p>集群 ID。</p>
     * @param string $ClusterName <p>集群名称。</p>
     * @param string $ClusterType <p>集群类型。</p>
     * @param integer $NodeCount <p>集群节点总数。</p>
     * @param integer $OnlineNodeCount <p>集群在线节点数。</p>
     * @param integer $Appid <p>集群所属租户 Appid。</p>
     * @param string $AssetName <p>集群子资产名称（Pod名/Node名/Container名/Namespace名；CLUSTER 类型时为集群名）。</p>
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("NodeCount",$param) and $param["NodeCount"] !== null) {
            $this->NodeCount = $param["NodeCount"];
        }

        if (array_key_exists("OnlineNodeCount",$param) and $param["OnlineNodeCount"] !== null) {
            $this->OnlineNodeCount = $param["OnlineNodeCount"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("AssetName",$param) and $param["AssetName"] !== null) {
            $this->AssetName = $param["AssetName"];
        }
    }
}
