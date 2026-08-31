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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * BuildClientNodeMountCommand请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统ID</p>
 * @method string getCustomMountDir() 获取<p>自定义挂载目录的绝对路径, 如果未指定, 则会使用默认值, 格式/goosefsx/${fs_id}-proxy. 比如/goosefsx/x-c60-a2b3d4-proxy</p>
 * @method void setCustomMountDir(string $CustomMountDir) 设置<p>自定义挂载目录的绝对路径, 如果未指定, 则会使用默认值, 格式/goosefsx/${fs_id}-proxy. 比如/goosefsx/x-c60-a2b3d4-proxy</p>
 * @method string getClusterId() 获取<p>客户端集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>客户端集群ID</p>
 */
class BuildClientNodeMountCommandRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>自定义挂载目录的绝对路径, 如果未指定, 则会使用默认值, 格式/goosefsx/${fs_id}-proxy. 比如/goosefsx/x-c60-a2b3d4-proxy</p>
     */
    public $CustomMountDir;

    /**
     * @var string <p>客户端集群ID</p>
     */
    public $ClusterId;

    /**
     * @param string $FileSystemId <p>文件系统ID</p>
     * @param string $CustomMountDir <p>自定义挂载目录的绝对路径, 如果未指定, 则会使用默认值, 格式/goosefsx/${fs_id}-proxy. 比如/goosefsx/x-c60-a2b3d4-proxy</p>
     * @param string $ClusterId <p>客户端集群ID</p>
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("CustomMountDir",$param) and $param["CustomMountDir"] !== null) {
            $this->CustomMountDir = $param["CustomMountDir"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }
    }
}
