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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyPrometheusConfig请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getClusterType() 获取<p>集群类型</p>
 * @method void setClusterType(string $ClusterType) 设置<p>集群类型</p>
 * @method string getClusterId() 获取<p>集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群id</p>
 * @method array getServiceMonitors() 获取<p>ServiceMonitors配置</p>
 * @method void setServiceMonitors(array $ServiceMonitors) 设置<p>ServiceMonitors配置</p>
 * @method array getPodMonitors() 获取<p>PodMonitors配置</p>
 * @method void setPodMonitors(array $PodMonitors) 设置<p>PodMonitors配置</p>
 * @method array getRawJobs() 获取<p>prometheus原生Job配置</p>
 * @method void setRawJobs(array $RawJobs) 设置<p>prometheus原生Job配置</p>
 * @method integer getUpdateImage() 获取<p>0: 更新实例组件镜像版本；<br>1: 不更新实例组件镜像版本</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 * @method void setUpdateImage(integer $UpdateImage) 设置<p>0: 更新实例组件镜像版本；<br>1: 不更新实例组件镜像版本</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
 */
class ModifyPrometheusConfigRequest extends AbstractModel
{
    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>集群类型</p>
     */
    public $ClusterType;

    /**
     * @var string <p>集群id</p>
     */
    public $ClusterId;

    /**
     * @var array <p>ServiceMonitors配置</p>
     */
    public $ServiceMonitors;

    /**
     * @var array <p>PodMonitors配置</p>
     */
    public $PodMonitors;

    /**
     * @var array <p>prometheus原生Job配置</p>
     */
    public $RawJobs;

    /**
     * @var integer <p>0: 更新实例组件镜像版本；<br>1: 不更新实例组件镜像版本</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
     * @deprecated
     */
    public $UpdateImage;

    /**
     * @param string $InstanceId <p>实例id</p>
     * @param string $ClusterType <p>集群类型</p>
     * @param string $ClusterId <p>集群id</p>
     * @param array $ServiceMonitors <p>ServiceMonitors配置</p>
     * @param array $PodMonitors <p>PodMonitors配置</p>
     * @param array $RawJobs <p>prometheus原生Job配置</p>
     * @param integer $UpdateImage <p>0: 更新实例组件镜像版本；<br>1: 不更新实例组件镜像版本</p><p>取值范围：[0, 1]</p><p>默认值：0</p>
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
            $this->ServiceMonitors = [];
            foreach ($param["ServiceMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->ServiceMonitors, $obj);
            }
        }

        if (array_key_exists("PodMonitors",$param) and $param["PodMonitors"] !== null) {
            $this->PodMonitors = [];
            foreach ($param["PodMonitors"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->PodMonitors, $obj);
            }
        }

        if (array_key_exists("RawJobs",$param) and $param["RawJobs"] !== null) {
            $this->RawJobs = [];
            foreach ($param["RawJobs"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->RawJobs, $obj);
            }
        }

        if (array_key_exists("UpdateImage",$param) and $param["UpdateImage"] !== null) {
            $this->UpdateImage = $param["UpdateImage"];
        }
    }
}
