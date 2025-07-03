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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePrometheusClusterAgents请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 * @method array getClusterIds() 获取用于通过集群id过滤被绑定集群
 * @method void setClusterIds(array $ClusterIds) 设置用于通过集群id过滤被绑定集群
 * @method array getClusterTypes() 获取用于通过集群类型过滤被绑定集群
 * @method void setClusterTypes(array $ClusterTypes) 设置用于通过集群类型过滤被绑定集群
 * @method string getClusterName() 获取用于通过名称搜索被绑定集群
 * @method void setClusterName(string $ClusterName) 设置用于通过名称搜索被绑定集群
 */
class DescribePrometheusClusterAgentsRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @var array 用于通过集群id过滤被绑定集群
     */
    public $ClusterIds;

    /**
     * @var array 用于通过集群类型过滤被绑定集群
     */
    public $ClusterTypes;

    /**
     * @var string 用于通过名称搜索被绑定集群
     */
    public $ClusterName;

    /**
     * @param string $InstanceId 实例id
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
     * @param array $ClusterIds 用于通过集群id过滤被绑定集群
     * @param array $ClusterTypes 用于通过集群类型过滤被绑定集群
     * @param string $ClusterName 用于通过名称搜索被绑定集群
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ClusterTypes",$param) and $param["ClusterTypes"] !== null) {
            $this->ClusterTypes = $param["ClusterTypes"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }
    }
}
