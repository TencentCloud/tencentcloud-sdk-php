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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCLSLogConfig请求参数结构体
 *
 * @method string getLogConfig() 获取<p>日志采集配置的json表达</p>
 * @method void setLogConfig(string $LogConfig) 设置<p>日志采集配置的json表达</p>
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getLogsetId() 获取<p>CLS日志集ID</p>
 * @method void setLogsetId(string $LogsetId) 设置<p>CLS日志集ID</p>
 * @method string getClusterType() 获取<p>当前集群类型支持tke（标准集群）、eks（serverless集群）</p>
 * @method void setClusterType(string $ClusterType) 设置<p>当前集群类型支持tke（标准集群）、eks（serverless集群）</p>
 */
class CreateCLSLogConfigRequest extends AbstractModel
{
    /**
     * @var string <p>日志采集配置的json表达</p>
     */
    public $LogConfig;

    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>CLS日志集ID</p>
     */
    public $LogsetId;

    /**
     * @var string <p>当前集群类型支持tke（标准集群）、eks（serverless集群）</p>
     */
    public $ClusterType;

    /**
     * @param string $LogConfig <p>日志采集配置的json表达</p>
     * @param string $ClusterId <p>集群ID</p>
     * @param string $LogsetId <p>CLS日志集ID</p>
     * @param string $ClusterType <p>当前集群类型支持tke（标准集群）、eks（serverless集群）</p>
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
        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = $param["LogConfig"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("LogsetId",$param) and $param["LogsetId"] !== null) {
            $this->LogsetId = $param["LogsetId"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
