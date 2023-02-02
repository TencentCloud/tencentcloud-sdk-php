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
 * DeletePrometheusConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getClusterType() 获取集群类型
 * @method void setClusterType(string $ClusterType) 设置集群类型
 * @method string getClusterId() 获取集群id
 * @method void setClusterId(string $ClusterId) 设置集群id
 * @method array getServiceMonitors() 获取要删除的ServiceMonitor名字列表
 * @method void setServiceMonitors(array $ServiceMonitors) 设置要删除的ServiceMonitor名字列表
 * @method array getPodMonitors() 获取要删除的PodMonitor名字列表
 * @method void setPodMonitors(array $PodMonitors) 设置要删除的PodMonitor名字列表
 * @method array getRawJobs() 获取要删除的RawJobs名字列表
 * @method void setRawJobs(array $RawJobs) 设置要删除的RawJobs名字列表
 */
class DeletePrometheusConfigRequest extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 集群类型
     */
    public $ClusterType;

    /**
     * @var string 集群id
     */
    public $ClusterId;

    /**
     * @var array 要删除的ServiceMonitor名字列表
     */
    public $ServiceMonitors;

    /**
     * @var array 要删除的PodMonitor名字列表
     */
    public $PodMonitors;

    /**
     * @var array 要删除的RawJobs名字列表
     */
    public $RawJobs;

    /**
     * @param string $InstanceId 实例id
     * @param string $ClusterType 集群类型
     * @param string $ClusterId 集群id
     * @param array $ServiceMonitors 要删除的ServiceMonitor名字列表
     * @param array $PodMonitors 要删除的PodMonitor名字列表
     * @param array $RawJobs 要删除的RawJobs名字列表
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

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ServiceMonitors",$param) and $param["ServiceMonitors"] !== null) {
            $this->ServiceMonitors = $param["ServiceMonitors"];
        }

        if (array_key_exists("PodMonitors",$param) and $param["PodMonitors"] !== null) {
            $this->PodMonitors = $param["PodMonitors"];
        }

        if (array_key_exists("RawJobs",$param) and $param["RawJobs"] !== null) {
            $this->RawJobs = $param["RawJobs"];
        }
    }
}
