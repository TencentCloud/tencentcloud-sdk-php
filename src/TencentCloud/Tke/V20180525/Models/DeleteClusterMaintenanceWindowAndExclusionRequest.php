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
 * DeleteClusterMaintenanceWindowAndExclusion请求参数结构体
 *
 * @method string getClusterID() 获取集群ID，可以从容器服务控制台计划升级功能集群维护窗口页面获取（https://console.cloud.tencent.com/tke2/upgrade-plan）。
 * @method void setClusterID(string $ClusterID) 设置集群ID，可以从容器服务控制台计划升级功能集群维护窗口页面获取（https://console.cloud.tencent.com/tke2/upgrade-plan）。
 */
class DeleteClusterMaintenanceWindowAndExclusionRequest extends AbstractModel
{
    /**
     * @var string 集群ID，可以从容器服务控制台计划升级功能集群维护窗口页面获取（https://console.cloud.tencent.com/tke2/upgrade-plan）。
     */
    public $ClusterID;

    /**
     * @param string $ClusterID 集群ID，可以从容器服务控制台计划升级功能集群维护窗口页面获取（https://console.cloud.tencent.com/tke2/upgrade-plan）。
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
        if (array_key_exists("ClusterID",$param) and $param["ClusterID"] !== null) {
            $this->ClusterID = $param["ClusterID"];
        }
    }
}
