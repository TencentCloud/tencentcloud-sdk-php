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
 * 共享挂载文件/目录项
 *
 * @method string getName() 获取<p>文件或目录名</p>
 * @method void setName(string $Name) 设置<p>文件或目录名</p>
 * @method string getType() 获取<p>类型：file / directory</p>
 * @method void setType(string $Type) 设置<p>类型：file / directory</p>
 * @method integer getSize() 获取<p>文件大小（字节，仅 Type=file 时有值）</p>
 * @method void setSize(integer $Size) 设置<p>文件大小（字节，仅 Type=file 时有值）</p>
 * @method integer getLastModified() 获取<p>最后修改时间（毫秒时间戳，仅 Type=file 时有值）</p>
 * @method void setLastModified(integer $LastModified) 设置<p>最后修改时间（毫秒时间戳，仅 Type=file 时有值）</p>
 * @method string getPath() 获取<p>相对 MountPath 的完整路径</p>
 * @method void setPath(string $Path) 设置<p>相对 MountPath 的完整路径</p>
 * @method CheckpointMetrics getMetrics() 获取<p>Checkpoint 训练指标（仅 checkpoint 目录且 snapshot 存在时有值）</p>
 * @method void setMetrics(CheckpointMetrics $Metrics) 设置<p>Checkpoint 训练指标（仅 checkpoint 目录且 snapshot 存在时有值）</p>
 */
class SharedMountFileItem extends AbstractModel
{
    /**
     * @var string <p>文件或目录名</p>
     */
    public $Name;

    /**
     * @var string <p>类型：file / directory</p>
     */
    public $Type;

    /**
     * @var integer <p>文件大小（字节，仅 Type=file 时有值）</p>
     */
    public $Size;

    /**
     * @var integer <p>最后修改时间（毫秒时间戳，仅 Type=file 时有值）</p>
     */
    public $LastModified;

    /**
     * @var string <p>相对 MountPath 的完整路径</p>
     */
    public $Path;

    /**
     * @var CheckpointMetrics <p>Checkpoint 训练指标（仅 checkpoint 目录且 snapshot 存在时有值）</p>
     */
    public $Metrics;

    /**
     * @param string $Name <p>文件或目录名</p>
     * @param string $Type <p>类型：file / directory</p>
     * @param integer $Size <p>文件大小（字节，仅 Type=file 时有值）</p>
     * @param integer $LastModified <p>最后修改时间（毫秒时间戳，仅 Type=file 时有值）</p>
     * @param string $Path <p>相对 MountPath 的完整路径</p>
     * @param CheckpointMetrics $Metrics <p>Checkpoint 训练指标（仅 checkpoint 目录且 snapshot 存在时有值）</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("LastModified",$param) and $param["LastModified"] !== null) {
            $this->LastModified = $param["LastModified"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Metrics",$param) and $param["Metrics"] !== null) {
            $this->Metrics = new CheckpointMetrics();
            $this->Metrics->deserialize($param["Metrics"]);
        }
    }
}
