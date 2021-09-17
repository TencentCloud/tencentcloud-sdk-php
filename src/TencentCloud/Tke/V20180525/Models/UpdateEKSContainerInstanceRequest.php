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
 * UpdateEKSContainerInstance请求参数结构体
 *
 * @method string getEksCiId() 获取容器实例 ID
 * @method void setEksCiId(string $EksCiId) 设置容器实例 ID
 * @method string getRestartPolicy() 获取实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)
 * @method void setRestartPolicy(string $RestartPolicy) 设置实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)
 * @method EksCiVolume getEksCiVolume() 获取数据卷，包含NfsVolume数组和CbsVolume数组
 * @method void setEksCiVolume(EksCiVolume $EksCiVolume) 设置数据卷，包含NfsVolume数组和CbsVolume数组
 * @method array getContainers() 获取容器组
 * @method void setContainers(array $Containers) 设置容器组
 * @method array getInitContainers() 获取Init 容器组
 * @method void setInitContainers(array $InitContainers) 设置Init 容器组
 * @method string getName() 获取容器实例名称
 * @method void setName(string $Name) 设置容器实例名称
 * @method array getImageRegistryCredentials() 获取镜像仓库凭证数组
 * @method void setImageRegistryCredentials(array $ImageRegistryCredentials) 设置镜像仓库凭证数组
 */
class UpdateEKSContainerInstanceRequest extends AbstractModel
{
    /**
     * @var string 容器实例 ID
     */
    public $EksCiId;

    /**
     * @var string 实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)
     */
    public $RestartPolicy;

    /**
     * @var EksCiVolume 数据卷，包含NfsVolume数组和CbsVolume数组
     */
    public $EksCiVolume;

    /**
     * @var array 容器组
     */
    public $Containers;

    /**
     * @var array Init 容器组
     */
    public $InitContainers;

    /**
     * @var string 容器实例名称
     */
    public $Name;

    /**
     * @var array 镜像仓库凭证数组
     */
    public $ImageRegistryCredentials;

    /**
     * @param string $EksCiId 容器实例 ID
     * @param string $RestartPolicy 实例重启策略： Always(总是重启)、Never(从不重启)、OnFailure(失败时重启)
     * @param EksCiVolume $EksCiVolume 数据卷，包含NfsVolume数组和CbsVolume数组
     * @param array $Containers 容器组
     * @param array $InitContainers Init 容器组
     * @param string $Name 容器实例名称
     * @param array $ImageRegistryCredentials 镜像仓库凭证数组
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
        if (array_key_exists("EksCiId",$param) and $param["EksCiId"] !== null) {
            $this->EksCiId = $param["EksCiId"];
        }

        if (array_key_exists("RestartPolicy",$param) and $param["RestartPolicy"] !== null) {
            $this->RestartPolicy = $param["RestartPolicy"];
        }

        if (array_key_exists("EksCiVolume",$param) and $param["EksCiVolume"] !== null) {
            $this->EksCiVolume = new EksCiVolume();
            $this->EksCiVolume->deserialize($param["EksCiVolume"]);
        }

        if (array_key_exists("Containers",$param) and $param["Containers"] !== null) {
            $this->Containers = [];
            foreach ($param["Containers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->Containers, $obj);
            }
        }

        if (array_key_exists("InitContainers",$param) and $param["InitContainers"] !== null) {
            $this->InitContainers = [];
            foreach ($param["InitContainers"] as $key => $value){
                $obj = new Container();
                $obj->deserialize($value);
                array_push($this->InitContainers, $obj);
            }
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImageRegistryCredentials",$param) and $param["ImageRegistryCredentials"] !== null) {
            $this->ImageRegistryCredentials = [];
            foreach ($param["ImageRegistryCredentials"] as $key => $value){
                $obj = new ImageRegistryCredential();
                $obj->deserialize($value);
                array_push($this->ImageRegistryCredentials, $obj);
            }
        }
    }
}
