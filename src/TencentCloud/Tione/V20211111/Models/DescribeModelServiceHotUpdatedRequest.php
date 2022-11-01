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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModelServiceHotUpdated请求参数结构体
 *
 * @method ImageInfo getImageInfo() 获取镜像信息，配置服务运行所需的镜像地址等信息
 * @method void setImageInfo(ImageInfo $ImageInfo) 设置镜像信息，配置服务运行所需的镜像地址等信息
 * @method ModelInfo getModelInfo() 获取模型信息，需要挂载模型时填写
 * @method void setModelInfo(ModelInfo $ModelInfo) 设置模型信息，需要挂载模型时填写
 * @method VolumeMount getVolumeMount() 获取挂载信息
 * @method void setVolumeMount(VolumeMount $VolumeMount) 设置挂载信息
 */
class DescribeModelServiceHotUpdatedRequest extends AbstractModel
{
    /**
     * @var ImageInfo 镜像信息，配置服务运行所需的镜像地址等信息
     */
    public $ImageInfo;

    /**
     * @var ModelInfo 模型信息，需要挂载模型时填写
     */
    public $ModelInfo;

    /**
     * @var VolumeMount 挂载信息
     */
    public $VolumeMount;

    /**
     * @param ImageInfo $ImageInfo 镜像信息，配置服务运行所需的镜像地址等信息
     * @param ModelInfo $ModelInfo 模型信息，需要挂载模型时填写
     * @param VolumeMount $VolumeMount 挂载信息
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
        if (array_key_exists("ImageInfo",$param) and $param["ImageInfo"] !== null) {
            $this->ImageInfo = new ImageInfo();
            $this->ImageInfo->deserialize($param["ImageInfo"]);
        }

        if (array_key_exists("ModelInfo",$param) and $param["ModelInfo"] !== null) {
            $this->ModelInfo = new ModelInfo();
            $this->ModelInfo->deserialize($param["ModelInfo"]);
        }

        if (array_key_exists("VolumeMount",$param) and $param["VolumeMount"] !== null) {
            $this->VolumeMount = new VolumeMount();
            $this->VolumeMount->deserialize($param["VolumeMount"]);
        }
    }
}
