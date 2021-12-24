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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 容器卷挂载信息
 *
 * @method string getVolumeType() 获取数据卷类型
 * @method void setVolumeType(string $VolumeType) 设置数据卷类型
 * @method string getVolumeName() 获取数据卷名称
 * @method void setVolumeName(string $VolumeName) 设置数据卷名称
 * @method string getVolumeConfig() 获取数据卷配置
 * @method void setVolumeConfig(string $VolumeConfig) 设置数据卷配置
 */
class VolumeInfo extends AbstractModel
{
    /**
     * @var string 数据卷类型
     */
    public $VolumeType;

    /**
     * @var string 数据卷名称
     */
    public $VolumeName;

    /**
     * @var string 数据卷配置
     */
    public $VolumeConfig;

    /**
     * @param string $VolumeType 数据卷类型
     * @param string $VolumeName 数据卷名称
     * @param string $VolumeConfig 数据卷配置
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
        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            $this->VolumeType = $param["VolumeType"];
        }

        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("VolumeConfig",$param) and $param["VolumeConfig"] !== null) {
            $this->VolumeConfig = $param["VolumeConfig"];
        }
    }
}
