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
 * 描述GooseFS挂载信息
 *
 * @method string getLocalPath() 获取<p>文件系统本地挂载路径。</p>
 * @method void setLocalPath(string $LocalPath) 设置<p>文件系统本地挂载路径。</p>
 * @method string getRemotePath() 获取<p>文件系统远程挂载路径; 远端路径为GooseFS控制台看到的命名空间的url;命名空间文档参考https://cloud.tencent.com/document/product/1424/117877</p>
 * @method void setRemotePath(string $RemotePath) 设置<p>文件系统远程挂载路径; 远端路径为GooseFS控制台看到的命名空间的url;命名空间文档参考https://cloud.tencent.com/document/product/1424/117877</p>
 * @method array getMasters() 获取<p>文件系统master的ip和端口，此参数和FileSystemId互斥。</p>
 * @method void setMasters(array $Masters) 设置<p>文件系统master的ip和端口，此参数和FileSystemId互斥。</p>
 * @method string getFileSystemId() 获取<p>GooseFS的文件ID；此参数和Masters 互斥。</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>GooseFS的文件ID；此参数和Masters 互斥。</p>
 */
class GooseFSOption extends AbstractModel
{
    /**
     * @var string <p>文件系统本地挂载路径。</p>
     */
    public $LocalPath;

    /**
     * @var string <p>文件系统远程挂载路径; 远端路径为GooseFS控制台看到的命名空间的url;命名空间文档参考https://cloud.tencent.com/document/product/1424/117877</p>
     */
    public $RemotePath;

    /**
     * @var array <p>文件系统master的ip和端口，此参数和FileSystemId互斥。</p>
     */
    public $Masters;

    /**
     * @var string <p>GooseFS的文件ID；此参数和Masters 互斥。</p>
     */
    public $FileSystemId;

    /**
     * @param string $LocalPath <p>文件系统本地挂载路径。</p>
     * @param string $RemotePath <p>文件系统远程挂载路径; 远端路径为GooseFS控制台看到的命名空间的url;命名空间文档参考https://cloud.tencent.com/document/product/1424/117877</p>
     * @param array $Masters <p>文件系统master的ip和端口，此参数和FileSystemId互斥。</p>
     * @param string $FileSystemId <p>GooseFS的文件ID；此参数和Masters 互斥。</p>
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

        if (array_key_exists("Masters",$param) and $param["Masters"] !== null) {
            $this->Masters = $param["Masters"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }
    }
}
