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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务部署信息
 *
 * @method ContainerInfo getContainer() 获取<p>容器配置</p>
 * @method void setContainer(ContainerInfo $Container) 设置<p>容器配置</p>
 * @method integer getContainerCount() 获取<p>容器数量</p>
 * @method void setContainerCount(integer $ContainerCount) 设置<p>容器数量</p>
 */
class DeploymentConfig extends AbstractModel
{
    /**
     * @var ContainerInfo <p>容器配置</p>
     */
    public $Container;

    /**
     * @var integer <p>容器数量</p>
     */
    public $ContainerCount;

    /**
     * @param ContainerInfo $Container <p>容器配置</p>
     * @param integer $ContainerCount <p>容器数量</p>
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = new ContainerInfo();
            $this->Container->deserialize($param["Container"]);
        }

        if (array_key_exists("ContainerCount",$param) and $param["ContainerCount"] !== null) {
            $this->ContainerCount = $param["ContainerCount"];
        }
    }
}
