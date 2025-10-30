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
 * @method array getConfigMapOptions() 获取-
 * @method void setConfigMapOptions(array $ConfigMapOptions) 设置-
 * @method EmptyDirOption getEmptyDirOption() 获取-
 * @method void setEmptyDirOption(EmptyDirOption $EmptyDirOption) 设置-
 * @method VolumeClaimTemplatesOption getVolumeClaimTemplateOption() 获取数据卷PVC声明模板
 * @method void setVolumeClaimTemplateOption(VolumeClaimTemplatesOption $VolumeClaimTemplateOption) 设置数据卷PVC声明模板
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
     * @var array -
     */
    public $ConfigMapOptions;

    /**
     * @var EmptyDirOption -
     */
    public $EmptyDirOption;

    /**
     * @var VolumeClaimTemplatesOption 数据卷PVC声明模板
     */
    public $VolumeClaimTemplateOption;

    /**
     * @param string $VolumeType 数据卷类型
     * @param string $VolumeName 数据卷名称
     * @param string $VolumeConfig 数据卷配置
     * @param array $ConfigMapOptions -
     * @param EmptyDirOption $EmptyDirOption -
     * @param VolumeClaimTemplatesOption $VolumeClaimTemplateOption 数据卷PVC声明模板
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

        if (array_key_exists("ConfigMapOptions",$param) and $param["ConfigMapOptions"] !== null) {
            $this->ConfigMapOptions = [];
            foreach ($param["ConfigMapOptions"] as $key => $value){
                $obj = new ConfigMapOption();
                $obj->deserialize($value);
                array_push($this->ConfigMapOptions, $obj);
            }
        }

        if (array_key_exists("EmptyDirOption",$param) and $param["EmptyDirOption"] !== null) {
            $this->EmptyDirOption = new EmptyDirOption();
            $this->EmptyDirOption->deserialize($param["EmptyDirOption"]);
        }

        if (array_key_exists("VolumeClaimTemplateOption",$param) and $param["VolumeClaimTemplateOption"] !== null) {
            $this->VolumeClaimTemplateOption = new VolumeClaimTemplatesOption();
            $this->VolumeClaimTemplateOption->deserialize($param["VolumeClaimTemplateOption"]);
        }
    }
}
