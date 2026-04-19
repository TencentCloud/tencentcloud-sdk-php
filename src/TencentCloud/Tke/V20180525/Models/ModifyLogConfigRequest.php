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
 * ModifyLogConfig请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getLogConfig() 获取日志采集配置的json表达
 * @method void setLogConfig(string $LogConfig) 设置日志采集配置的json表达
 * @method string getClusterType() 获取当前集群类型支持tke（标准集群）、eks（serverless集群）
 * @method void setClusterType(string $ClusterType) 设置当前集群类型支持tke（标准集群）、eks（serverless集群）
 */
class ModifyLogConfigRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 日志采集配置的json表达
     */
    public $LogConfig;

    /**
     * @var string 当前集群类型支持tke（标准集群）、eks（serverless集群）
     */
    public $ClusterType;

    /**
     * @param string $ClusterId 集群ID
     * @param string $LogConfig 日志采集配置的json表达
     * @param string $ClusterType 当前集群类型支持tke（标准集群）、eks（serverless集群）
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

        if (array_key_exists("LogConfig",$param) and $param["LogConfig"] !== null) {
            $this->LogConfig = $param["LogConfig"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
