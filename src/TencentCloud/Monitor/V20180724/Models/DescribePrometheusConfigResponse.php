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
 * DescribePrometheusConfig返回参数结构体
 *
 * @method string getConfig() 获取全局配置
 * @method void setConfig(string $Config) 设置全局配置
 * @method array getServiceMonitors() 获取ServiceMonitor配置
 * @method void setServiceMonitors(array $ServiceMonitors) 设置ServiceMonitor配置
 * @method array getPodMonitors() 获取PodMonitor配置
 * @method void setPodMonitors(array $PodMonitors) 设置PodMonitor配置
 * @method array getRawJobs() 获取原生Job
 * @method void setRawJobs(array $RawJobs) 设置原生Job
 * @method array getProbes() 获取Probes
 * @method void setProbes(array $Probes) 设置Probes
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePrometheusConfigResponse extends AbstractModel
{
    /**
     * @var string 全局配置
     */
    public $Config;

    /**
     * @var array ServiceMonitor配置
     */
    public $ServiceMonitors;

    /**
     * @var array PodMonitor配置
     */
    public $PodMonitors;

    /**
     * @var array 原生Job
     */
    public $RawJobs;

    /**
     * @var array Probes
     */
    public $Probes;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Config 全局配置
     * @param array $ServiceMonitors ServiceMonitor配置
     * @param array $PodMonitors PodMonitor配置
     * @param array $RawJobs 原生Job
     * @param array $Probes Probes
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
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

        if (array_key_exists("Probes",$param) and $param["Probes"] !== null) {
            $this->Probes = [];
            foreach ($param["Probes"] as $key => $value){
                $obj = new PrometheusConfigItem();
                $obj->deserialize($value);
                array_push($this->Probes, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
