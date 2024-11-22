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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRedisClusters请求参数结构体
 *
 * @method array getRedisClusterIds() 获取Redis独享集群 ID。请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)切换至**云服务管理**页面，在下拉框选择**云数据库 Redis**，可获取独享集群ID。
 * @method void setRedisClusterIds(array $RedisClusterIds) 设置Redis独享集群 ID。请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)切换至**云服务管理**页面，在下拉框选择**云数据库 Redis**，可获取独享集群ID。
 * @method array getStatus() 获取集群状态。
- 1：流程。
- 2：运行中。
- 3：已隔离。
 * @method void setStatus(array $Status) 设置集群状态。
- 1：流程。
- 2：运行中。
- 3：已隔离。
 * @method array getProjectIds() 获取项目ID数组。请登录[项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
 * @method void setProjectIds(array $ProjectIds) 设置项目ID数组。请登录[项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
 * @method array getAutoRenewFlag() 获取续费模式。
- 0：默认状态，手动续费。
- 1：自动续费。
- 2：明确不自动续费。
 * @method void setAutoRenewFlag(array $AutoRenewFlag) 设置续费模式。
- 0：默认状态，手动续费。
- 1：自动续费。
- 2：明确不自动续费。
 * @method string getClusterName() 获取Redis 独享集群名称。
 * @method void setClusterName(string $ClusterName) 设置Redis 独享集群名称。
 * @method string getSearchKey() 获取搜索关键词：支持集群 ID、集群名称。
 * @method void setSearchKey(string $SearchKey) 设置搜索关键词：支持集群 ID、集群名称。
 * @method integer getLimit() 获取分页限制返回大小，不传则默认为20。
 * @method void setLimit(integer $Limit) 设置分页限制返回大小，不传则默认为20。
 * @method integer getOffset() 获取偏移量，取Limit整数倍
 * @method void setOffset(integer $Offset) 设置偏移量，取Limit整数倍
 * @method string getDedicatedClusterId() 获取本地专用集群 ID，请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)实例列表获取集群 ID。
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置本地专用集群 ID，请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)实例列表获取集群 ID。
 */
class DescribeRedisClustersRequest extends AbstractModel
{
    /**
     * @var array Redis独享集群 ID。请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)切换至**云服务管理**页面，在下拉框选择**云数据库 Redis**，可获取独享集群ID。
     */
    public $RedisClusterIds;

    /**
     * @var array 集群状态。
- 1：流程。
- 2：运行中。
- 3：已隔离。
     */
    public $Status;

    /**
     * @var array 项目ID数组。请登录[项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
     */
    public $ProjectIds;

    /**
     * @var array 续费模式。
- 0：默认状态，手动续费。
- 1：自动续费。
- 2：明确不自动续费。
     */
    public $AutoRenewFlag;

    /**
     * @var string Redis 独享集群名称。
     */
    public $ClusterName;

    /**
     * @var string 搜索关键词：支持集群 ID、集群名称。
     */
    public $SearchKey;

    /**
     * @var integer 分页限制返回大小，不传则默认为20。
     */
    public $Limit;

    /**
     * @var integer 偏移量，取Limit整数倍
     */
    public $Offset;

    /**
     * @var string 本地专用集群 ID，请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)实例列表获取集群 ID。
     */
    public $DedicatedClusterId;

    /**
     * @param array $RedisClusterIds Redis独享集群 ID。请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)切换至**云服务管理**页面，在下拉框选择**云数据库 Redis**，可获取独享集群ID。
     * @param array $Status 集群状态。
- 1：流程。
- 2：运行中。
- 3：已隔离。
     * @param array $ProjectIds 项目ID数组。请登录[项目管理](https://console.cloud.tencent.com/project)页面，在**项目名称**中复制项目 ID。
     * @param array $AutoRenewFlag 续费模式。
- 0：默认状态，手动续费。
- 1：自动续费。
- 2：明确不自动续费。
     * @param string $ClusterName Redis 独享集群名称。
     * @param string $SearchKey 搜索关键词：支持集群 ID、集群名称。
     * @param integer $Limit 分页限制返回大小，不传则默认为20。
     * @param integer $Offset 偏移量，取Limit整数倍
     * @param string $DedicatedClusterId 本地专用集群 ID，请登录[专用集群控制台](https://console.cloud.tencent.com/cdc/dedicatedcluster/index?rid=1
)实例列表获取集群 ID。
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
        if (array_key_exists("RedisClusterIds",$param) and $param["RedisClusterIds"] !== null) {
            $this->RedisClusterIds = $param["RedisClusterIds"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ProjectIds",$param) and $param["ProjectIds"] !== null) {
            $this->ProjectIds = $param["ProjectIds"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("SearchKey",$param) and $param["SearchKey"] !== null) {
            $this->SearchKey = $param["SearchKey"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }
    }
}
