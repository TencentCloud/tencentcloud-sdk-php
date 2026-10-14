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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用沙箱中的云盘挂载配置。
 *
 * @method string getAccessMode() 获取<p>访问模式：RO=只读，RW=读写；必填。挂载到 /workdir 时只能使用 RW。</p>
 * @method void setAccessMode(string $AccessMode) 设置<p>访问模式：RO=只读，RW=读写；必填。挂载到 /workdir 时只能使用 RW。</p>
 * @method string getMountPath() 获取<p>沙箱内的绝对挂载目录；/workdir 最多挂载一条且只能使用 RW。</p>
 * @method void setMountPath(string $MountPath) 设置<p>沙箱内的绝对挂载目录；/workdir 最多挂载一条且只能使用 RW。</p>
 * @method string getVolumeId() 获取<p>云盘标识</p>
 * @method void setVolumeId(string $VolumeId) 设置<p>云盘标识</p>
 * @method string getMountId() 获取<p>服务端生成的挂载标识，修改保留，新增可不传</p>
 * @method void setMountId(string $MountId) 设置<p>服务端生成的挂载标识，修改保留，新增可不传</p>
 * @method string getRelativePath() 获取<p>相对云盘 data 根目录的路径；空字符串表示挂载整个 data 根目录。</p>
 * @method void setRelativePath(string $RelativePath) 设置<p>相对云盘 data 根目录的路径；空字符串表示挂载整个 data 根目录。</p>
 * @method string getVolumeName() 获取<p>云盘名称，仅在查询应用配置时由服务端补充，修改时忽略；不可获取时为空且不影响挂载配置</p>
 * @method void setVolumeName(string $VolumeName) 设置<p>云盘名称，仅在查询应用配置时由服务端补充，修改时忽略；不可获取时为空且不影响挂载配置</p>
 */
class FileVolumeMount extends AbstractModel
{
    /**
     * @var string <p>访问模式：RO=只读，RW=读写；必填。挂载到 /workdir 时只能使用 RW。</p>
     */
    public $AccessMode;

    /**
     * @var string <p>沙箱内的绝对挂载目录；/workdir 最多挂载一条且只能使用 RW。</p>
     */
    public $MountPath;

    /**
     * @var string <p>云盘标识</p>
     */
    public $VolumeId;

    /**
     * @var string <p>服务端生成的挂载标识，修改保留，新增可不传</p>
     */
    public $MountId;

    /**
     * @var string <p>相对云盘 data 根目录的路径；空字符串表示挂载整个 data 根目录。</p>
     */
    public $RelativePath;

    /**
     * @var string <p>云盘名称，仅在查询应用配置时由服务端补充，修改时忽略；不可获取时为空且不影响挂载配置</p>
     */
    public $VolumeName;

    /**
     * @param string $AccessMode <p>访问模式：RO=只读，RW=读写；必填。挂载到 /workdir 时只能使用 RW。</p>
     * @param string $MountPath <p>沙箱内的绝对挂载目录；/workdir 最多挂载一条且只能使用 RW。</p>
     * @param string $VolumeId <p>云盘标识</p>
     * @param string $MountId <p>服务端生成的挂载标识，修改保留，新增可不传</p>
     * @param string $RelativePath <p>相对云盘 data 根目录的路径；空字符串表示挂载整个 data 根目录。</p>
     * @param string $VolumeName <p>云盘名称，仅在查询应用配置时由服务端补充，修改时忽略；不可获取时为空且不影响挂载配置</p>
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
        if (array_key_exists("AccessMode",$param) and $param["AccessMode"] !== null) {
            $this->AccessMode = $param["AccessMode"];
        }

        if (array_key_exists("MountPath",$param) and $param["MountPath"] !== null) {
            $this->MountPath = $param["MountPath"];
        }

        if (array_key_exists("VolumeId",$param) and $param["VolumeId"] !== null) {
            $this->VolumeId = $param["VolumeId"];
        }

        if (array_key_exists("MountId",$param) and $param["MountId"] !== null) {
            $this->MountId = $param["MountId"];
        }

        if (array_key_exists("RelativePath",$param) and $param["RelativePath"] !== null) {
            $this->RelativePath = $param["RelativePath"];
        }

        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }
    }
}
