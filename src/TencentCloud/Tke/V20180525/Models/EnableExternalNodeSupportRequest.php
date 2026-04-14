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
 * EnableExternalNodeSupport请求参数结构体
 *
 * @method string getClusterId() 获取集群Id
 * @method void setClusterId(string $ClusterId) 设置集群Id
 * @method ClusterExternalConfig getClusterExternalConfig() 获取开启注册节点池支持配置信息
 * @method void setClusterExternalConfig(ClusterExternalConfig $ClusterExternalConfig) 设置开启注册节点池支持配置信息
 */
class EnableExternalNodeSupportRequest extends AbstractModel
{
    /**
     * @var string 集群Id
     */
    public $ClusterId;

    /**
     * @var ClusterExternalConfig 开启注册节点池支持配置信息
     */
    public $ClusterExternalConfig;

    /**
     * @param string $ClusterId 集群Id
     * @param ClusterExternalConfig $ClusterExternalConfig 开启注册节点池支持配置信息
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

        if (array_key_exists("ClusterExternalConfig",$param) and $param["ClusterExternalConfig"] !== null) {
            $this->ClusterExternalConfig = new ClusterExternalConfig();
            $this->ClusterExternalConfig->deserialize($param["ClusterExternalConfig"]);
        }
    }
}
