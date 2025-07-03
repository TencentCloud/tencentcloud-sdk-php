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
 * DescribePrometheusTargetsTMP请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getClusterId() 获取集成容器服务填绑定的集群id；
集成中心填 non-cluster
 * @method void setClusterId(string $ClusterId) 设置集成容器服务填绑定的集群id；
集成中心填 non-cluster
 * @method string getClusterType() 获取集群类型(可不填)
 * @method void setClusterType(string $ClusterType) 设置集群类型(可不填)
 * @method array getFilters() 获取过滤条件，支持Name=ServiceMonitor/PodMonitor/Probe/RawJob/Job, Value为采集配置名称；Name=Health, Value=up, down, unknown；Name=EndPoint, Value为EndPoint地址
 * @method void setFilters(array $Filters) 设置过滤条件，支持Name=ServiceMonitor/PodMonitor/Probe/RawJob/Job, Value为采集配置名称；Name=Health, Value=up, down, unknown；Name=EndPoint, Value为EndPoint地址
 * @method integer getOffset() 获取targets分页偏移量，默认为0
 * @method void setOffset(integer $Offset) 设置targets分页偏移量，默认为0
 * @method integer getLimit() 获取targets返回数量，默认为20，最大值200
 * @method void setLimit(integer $Limit) 设置targets返回数量，默认为20，最大值200
 */
class DescribePrometheusTargetsTMPRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 集成容器服务填绑定的集群id；
集成中心填 non-cluster
     */
    public $ClusterId;

    /**
     * @var string 集群类型(可不填)
     */
    public $ClusterType;

    /**
     * @var array 过滤条件，支持Name=ServiceMonitor/PodMonitor/Probe/RawJob/Job, Value为采集配置名称；Name=Health, Value=up, down, unknown；Name=EndPoint, Value为EndPoint地址
     */
    public $Filters;

    /**
     * @var integer targets分页偏移量，默认为0
     */
    public $Offset;

    /**
     * @var integer targets返回数量，默认为20，最大值200
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例id
     * @param string $ClusterId 集成容器服务填绑定的集群id；
集成中心填 non-cluster
     * @param string $ClusterType 集群类型(可不填)
     * @param array $Filters 过滤条件，支持Name=ServiceMonitor/PodMonitor/Probe/RawJob/Job, Value为采集配置名称；Name=Health, Value=up, down, unknown；Name=EndPoint, Value为EndPoint地址
     * @param integer $Offset targets分页偏移量，默认为0
     * @param integer $Limit targets返回数量，默认为20，最大值200
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

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
