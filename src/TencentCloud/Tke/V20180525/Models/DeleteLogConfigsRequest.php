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
 * DeleteLogConfigs请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getLogConfigNames() 获取待删除采集规则名称，多个采集规则使用","分隔
 * @method void setLogConfigNames(string $LogConfigNames) 设置待删除采集规则名称，多个采集规则使用","分隔
 * @method string getClusterType() 获取集群集群类型, tke/eks 默认为 tke 集群
 * @method void setClusterType(string $ClusterType) 设置集群集群类型, tke/eks 默认为 tke 集群
 */
class DeleteLogConfigsRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 待删除采集规则名称，多个采集规则使用","分隔
     */
    public $LogConfigNames;

    /**
     * @var string 集群集群类型, tke/eks 默认为 tke 集群
     */
    public $ClusterType;

    /**
     * @param string $ClusterId 集群ID
     * @param string $LogConfigNames 待删除采集规则名称，多个采集规则使用","分隔
     * @param string $ClusterType 集群集群类型, tke/eks 默认为 tke 集群
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

        if (array_key_exists("LogConfigNames",$param) and $param["LogConfigNames"] !== null) {
            $this->LogConfigNames = $param["LogConfigNames"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
