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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * COS挂载信息
 *
 * @method string getLocalPath() 获取<p>文件系统本地挂载路径。</p>
 * @method void setLocalPath(string $LocalPath) 设置<p>文件系统本地挂载路径。</p>
 * @method string getRemotePath() 获取<p>COS桶地址，可以在COS桶详情页查看。</p>
 * @method void setRemotePath(string $RemotePath) 设置<p>COS桶地址，可以在COS桶详情页查看。</p>
 * @method string getMountParamsOption() 获取<p>cosfs2挂载工具支持的参数。</p>
 * @method void setMountParamsOption(string $MountParamsOption) 设置<p>cosfs2挂载工具支持的参数。</p>
 */
class CosOption extends AbstractModel
{
    /**
     * @var string <p>文件系统本地挂载路径。</p>
     */
    public $LocalPath;

    /**
     * @var string <p>COS桶地址，可以在COS桶详情页查看。</p>
     */
    public $RemotePath;

    /**
     * @var string <p>cosfs2挂载工具支持的参数。</p>
     */
    public $MountParamsOption;

    /**
     * @param string $LocalPath <p>文件系统本地挂载路径。</p>
     * @param string $RemotePath <p>COS桶地址，可以在COS桶详情页查看。</p>
     * @param string $MountParamsOption <p>cosfs2挂载工具支持的参数。</p>
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
        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("MountParamsOption",$param) and $param["MountParamsOption"] !== null) {
            $this->MountParamsOption = $param["MountParamsOption"];
        }
    }
}
