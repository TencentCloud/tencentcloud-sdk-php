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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateEdgeClusterVersion请求参数结构体
 *
 * @method string getClusterId() 获取集群 Id
 * @method void setClusterId(string $ClusterId) 设置集群 Id
 * @method string getEdgeVersion() 获取需要升级到的版本
 * @method void setEdgeVersion(string $EdgeVersion) 设置需要升级到的版本
 * @method string getRegistryPrefix() 获取自定义边缘组件镜像仓库前缀
 * @method void setRegistryPrefix(string $RegistryPrefix) 设置自定义边缘组件镜像仓库前缀
 * @method boolean getSkipPreCheck() 获取是否跳过预检查阶段
 * @method void setSkipPreCheck(boolean $SkipPreCheck) 设置是否跳过预检查阶段
 */
class UpdateEdgeClusterVersionRequest extends AbstractModel
{
    /**
     * @var string 集群 Id
     */
    public $ClusterId;

    /**
     * @var string 需要升级到的版本
     */
    public $EdgeVersion;

    /**
     * @var string 自定义边缘组件镜像仓库前缀
     */
    public $RegistryPrefix;

    /**
     * @var boolean 是否跳过预检查阶段
     */
    public $SkipPreCheck;

    /**
     * @param string $ClusterId 集群 Id
     * @param string $EdgeVersion 需要升级到的版本
     * @param string $RegistryPrefix 自定义边缘组件镜像仓库前缀
     * @param boolean $SkipPreCheck 是否跳过预检查阶段
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

        if (array_key_exists("EdgeVersion",$param) and $param["EdgeVersion"] !== null) {
            $this->EdgeVersion = $param["EdgeVersion"];
        }

        if (array_key_exists("RegistryPrefix",$param) and $param["RegistryPrefix"] !== null) {
            $this->RegistryPrefix = $param["RegistryPrefix"];
        }

        if (array_key_exists("SkipPreCheck",$param) and $param["SkipPreCheck"] !== null) {
            $this->SkipPreCheck = $param["SkipPreCheck"];
        }
    }
}
