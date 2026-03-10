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
 * @method ContainerInfo getContainer() 获取容器配置
 * @method void setContainer(ContainerInfo $Container) 设置容器配置
 * @method integer getContainerCount() 获取容器数量
 * @method void setContainerCount(integer $ContainerCount) 设置容器数量
 */
class DeploymentConfig extends AbstractModel
{
    /**
     * @var ContainerInfo 容器配置
     */
    public $Container;

    /**
     * @var integer 容器数量
     */
    public $ContainerCount;

    /**
     * @param ContainerInfo $Container 容器配置
     * @param integer $ContainerCount 容器数量
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
