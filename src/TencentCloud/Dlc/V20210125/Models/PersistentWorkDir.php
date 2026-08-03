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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Workspace 持久化工作目录配置
 *
 * @method boolean getEnabled() 获取<p>是否启用持久化工作目录；为空或 false 时沿用 emptyDir 行为</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用持久化工作目录；为空或 false 时沿用 emptyDir 行为</p>
 * @method string getType() 获取<p>持久化存储类型：COS / CFS</p>
 * @method void setType(string $Type) 设置<p>持久化存储类型：COS / CFS</p>
 * @method string getBucket() 获取<p>COS Bucket 名称（Type=COS 时必填）</p>
 * @method void setBucket(string $Bucket) 设置<p>COS Bucket 名称（Type=COS 时必填）</p>
 * @method string getFileSystemId() 获取<p>CFS 文件系统 ID（Type=CFS 时必填）</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>CFS 文件系统 ID（Type=CFS 时必填）</p>
 * @method string getVolumeSubPath() 获取<p>Bucket / 文件系统下的子路径，必须以 &#39;/&#39; 开头且不含 &#39;..&#39;</p>
 * @method void setVolumeSubPath(string $VolumeSubPath) 设置<p>Bucket / 文件系统下的子路径，必须以 &#39;/&#39; 开头且不含 &#39;..&#39;</p>
 */
class PersistentWorkDir extends AbstractModel
{
    /**
     * @var boolean <p>是否启用持久化工作目录；为空或 false 时沿用 emptyDir 行为</p>
     */
    public $Enabled;

    /**
     * @var string <p>持久化存储类型：COS / CFS</p>
     */
    public $Type;

    /**
     * @var string <p>COS Bucket 名称（Type=COS 时必填）</p>
     */
    public $Bucket;

    /**
     * @var string <p>CFS 文件系统 ID（Type=CFS 时必填）</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>Bucket / 文件系统下的子路径，必须以 &#39;/&#39; 开头且不含 &#39;..&#39;</p>
     */
    public $VolumeSubPath;

    /**
     * @param boolean $Enabled <p>是否启用持久化工作目录；为空或 false 时沿用 emptyDir 行为</p>
     * @param string $Type <p>持久化存储类型：COS / CFS</p>
     * @param string $Bucket <p>COS Bucket 名称（Type=COS 时必填）</p>
     * @param string $FileSystemId <p>CFS 文件系统 ID（Type=CFS 时必填）</p>
     * @param string $VolumeSubPath <p>Bucket / 文件系统下的子路径，必须以 &#39;/&#39; 开头且不含 &#39;..&#39;</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Bucket",$param) and $param["Bucket"] !== null) {
            $this->Bucket = $param["Bucket"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("VolumeSubPath",$param) and $param["VolumeSubPath"] !== null) {
            $this->VolumeSubPath = $param["VolumeSubPath"];
        }
    }
}
