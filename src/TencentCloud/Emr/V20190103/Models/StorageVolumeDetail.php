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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储卷详情
 *
 * @method string getVolumeName() 获取存储卷名称
 * @method void setVolumeName(string $VolumeName) 设置存储卷名称
 * @method string getVolumeType() 获取存储卷类型
 * @method void setVolumeType(string $VolumeType) 设置存储卷类型
 * @method string getDesc() 获取存储卷详情
 * @method void setDesc(string $Desc) 设置存储卷详情
 */
class StorageVolumeDetail extends AbstractModel
{
    /**
     * @var string 存储卷名称
     */
    public $VolumeName;

    /**
     * @var string 存储卷类型
     */
    public $VolumeType;

    /**
     * @var string 存储卷详情
     */
    public $Desc;

    /**
     * @param string $VolumeName 存储卷名称
     * @param string $VolumeType 存储卷类型
     * @param string $Desc 存储卷详情
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("VolumeType",$param) and $param["VolumeType"] !== null) {
            $this->VolumeType = $param["VolumeType"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }
    }
}
