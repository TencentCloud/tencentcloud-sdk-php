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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 缓存卷信息。
 *
 * @method string getVolumeId() 获取缓存卷ID。
 * @method void setVolumeId(string $VolumeId) 设置缓存卷ID。
 * @method string getName() 获取名称。
 * @method void setName(string $Name) 设置名称。
 * @method string getMountPath() 获取挂载路径。
 * @method void setMountPath(string $MountPath) 设置挂载路径。
 */
class VolumeInfo extends AbstractModel
{
    /**
     * @var string 缓存卷ID。
     */
    public $VolumeId;

    /**
     * @var string 名称。
     */
    public $Name;

    /**
     * @var string 挂载路径。
     */
    public $MountPath;

    /**
     * @param string $VolumeId 缓存卷ID。
     * @param string $Name 名称。
     * @param string $MountPath 挂载路径。
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
        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }
    }
}
