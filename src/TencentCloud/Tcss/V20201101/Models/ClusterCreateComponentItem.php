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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCheckComponent的入口参数,用于批量安装防御容器
 *
 * @method string getClusterId() 获取要安装组件的集群ID。
 * @method void setClusterId(string $ClusterId) 设置要安装组件的集群ID。
 * @method string getClusterRegion() 获取该集群对应的地域
 * @method void setClusterRegion(string $ClusterRegion) 设置该集群对应的地域
 */
class ClusterCreateComponentItem extends AbstractModel
{
    /**
     * @var string 要安装组件的集群ID。
     */
    public $ClusterId;

    /**
     * @var string 该集群对应的地域
     */
    public $ClusterRegion;

    /**
     * @param string $ClusterId 要安装组件的集群ID。
     * @param string $ClusterRegion 该集群对应的地域
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

        if (array_key_exists("ClusterRegion",$param) and $param["ClusterRegion"] !== null) {
            $this->ClusterRegion = $param["ClusterRegion"];
        }
    }
}
