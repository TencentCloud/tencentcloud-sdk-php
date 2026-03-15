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
 * MountMultipleStorageFileSystem请求参数结构体
 *
 * @method string getFileSystemId() 获取客户端集群所属的文件系统id
 * @method void setFileSystemId(string $FileSystemId) 设置客户端集群所属的文件系统id
 * @method string getCustomerClusterId() 获取客户端集群Id
 * @method void setCustomerClusterId(string $CustomerClusterId) 设置客户端集群Id
 * @method string getStorageFileSystemId() 获取挂载的存储集群的id
 * @method void setStorageFileSystemId(string $StorageFileSystemId) 设置挂载的存储集群的id
 */
class MountMultipleStorageFileSystemRequest extends AbstractModel
{
    /**
     * @var string 客户端集群所属的文件系统id
     */
    public $FileSystemId;

    /**
     * @var string 客户端集群Id
     */
    public $CustomerClusterId;

    /**
     * @var string 挂载的存储集群的id
     */
    public $StorageFileSystemId;

    /**
     * @param string $FileSystemId 客户端集群所属的文件系统id
     * @param string $CustomerClusterId 客户端集群Id
     * @param string $StorageFileSystemId 挂载的存储集群的id
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

        if (array_key_exists("CustomerClusterId",$param) and $param["CustomerClusterId"] !== null) {
            $this->CustomerClusterId = $param["CustomerClusterId"];
        }

        if (array_key_exists("StorageFileSystemId",$param) and $param["StorageFileSystemId"] !== null) {
            $this->StorageFileSystemId = $param["StorageFileSystemId"];
        }
    }
}
