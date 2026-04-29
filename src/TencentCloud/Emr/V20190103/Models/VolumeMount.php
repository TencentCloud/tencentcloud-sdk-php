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
 * 挂载卷
 *
 * @method string getMountName() 获取挂载卷名称
 * @method void setMountName(string $MountName) 设置挂载卷名称
 * @method string getMountPath() 获取挂载路径
 * @method void setMountPath(string $MountPath) 设置挂载路径
 * @method string getSubPathMode() 获取挂载类型
 * @method void setSubPathMode(string $SubPathMode) 设置挂载类型
 * @method string getSubPath() 获取子路径
 * @method void setSubPath(string $SubPath) 设置子路径
 * @method string getMountMode() 获取挂载模式，仅支持ReadWrite和OnlyRead
 * @method void setMountMode(string $MountMode) 设置挂载模式，仅支持ReadWrite和OnlyRead
 */
class VolumeMount extends AbstractModel
{
    /**
     * @var string 挂载卷名称
     */
    public $MountName;

    /**
     * @var string 挂载路径
     */
    public $MountPath;

    /**
     * @var string 挂载类型
     */
    public $SubPathMode;

    /**
     * @var string 子路径
     */
    public $SubPath;

    /**
     * @var string 挂载模式，仅支持ReadWrite和OnlyRead
     */
    public $MountMode;

    /**
     * @param string $MountName 挂载卷名称
     * @param string $MountPath 挂载路径
     * @param string $SubPathMode 挂载类型
     * @param string $SubPath 子路径
     * @param string $MountMode 挂载模式，仅支持ReadWrite和OnlyRead
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
        if (array_key_exists("MountName",$param) and $param["MountName"] !== null) {
            $this->MountName = $param["MountName"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("SubPathMode",$param) and $param["SubPathMode"] !== null) {
            $this->SubPathMode = $param["SubPathMode"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }

        if (array_key_exists("MountMode",$param) and $param["MountMode"] !== null) {
            $this->MountMode = $param["MountMode"];
        }
    }
}
