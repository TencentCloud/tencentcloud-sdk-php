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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像扫描自动匹配配置
 *
 * @method array getModes() 获取<p>匹配方式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>RUNNING_CONTAINER： 容器集群上运行的镜像</li><li>LATEST_VERSION： 最新版本镜像</li><li>LOCAL_HOST： 主机节点上运行的镜像</li></ul>
 * @method void setModes(array $Modes) 设置<p>匹配方式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>RUNNING_CONTAINER： 容器集群上运行的镜像</li><li>LATEST_VERSION： 最新版本镜像</li><li>LOCAL_HOST： 主机节点上运行的镜像</li></ul>
 * @method array getClusters() 获取<p>集群id</p>
 * @method void setClusters(array $Clusters) 设置<p>集群id</p>
 */
class ImageScanAutoMatchConfig extends AbstractModel
{
    /**
     * @var array <p>匹配方式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>RUNNING_CONTAINER： 容器集群上运行的镜像</li><li>LATEST_VERSION： 最新版本镜像</li><li>LOCAL_HOST： 主机节点上运行的镜像</li></ul>
     */
    public $Modes;

    /**
     * @var array <p>集群id</p>
     */
    public $Clusters;

    /**
     * @param array $Modes <p>匹配方式</p><p>枚举值：</p><ul><li>BY_CLUSTER： 按集群选择</li><li>RUNNING_CONTAINER： 容器集群上运行的镜像</li><li>LATEST_VERSION： 最新版本镜像</li><li>LOCAL_HOST： 主机节点上运行的镜像</li></ul>
     * @param array $Clusters <p>集群id</p>
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
        if (array_key_exists("Modes",$param) and $param["Modes"] !== null) {
            $this->Modes = $param["Modes"];
        }

        if (array_key_exists("Clusters",$param) and $param["Clusters"] !== null) {
            $this->Clusters = $param["Clusters"];
        }
    }
}
