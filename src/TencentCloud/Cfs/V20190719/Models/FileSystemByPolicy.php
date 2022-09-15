<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 绑定快照策略的文件系统信息
 *
 * @method string getCreationToken() 获取文件系统名称
 * @method void setCreationToken(string $CreationToken) 设置文件系统名称
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method integer getSizeByte() 获取文件系统大小
 * @method void setSizeByte(integer $SizeByte) 设置文件系统大小
 * @method string getStorageType() 获取存储类型
 * @method void setStorageType(string $StorageType) 设置存储类型
 * @method integer getTotalSnapshotSize() 获取快照总大小
 * @method void setTotalSnapshotSize(integer $TotalSnapshotSize) 设置快照总大小
 * @method string getCreationTime() 获取文件系统创建时间
 * @method void setCreationTime(string $CreationTime) 设置文件系统创建时间
 * @method integer getZoneId() 获取文件系统所在区ID
 * @method void setZoneId(integer $ZoneId) 设置文件系统所在区ID
 */
class FileSystemByPolicy extends AbstractModel
{
    /**
     * @var string 文件系统名称
     */
    public $CreationToken;

    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var integer 文件系统大小
     */
    public $SizeByte;

    /**
     * @var string 存储类型
     */
    public $StorageType;

    /**
     * @var integer 快照总大小
     */
    public $TotalSnapshotSize;

    /**
     * @var string 文件系统创建时间
     */
    public $CreationTime;

    /**
     * @var integer 文件系统所在区ID
     */
    public $ZoneId;

    /**
     * @param string $CreationToken 文件系统名称
     * @param string $FileSystemId 文件系统ID
     * @param integer $SizeByte 文件系统大小
     * @param string $StorageType 存储类型
     * @param integer $TotalSnapshotSize 快照总大小
     * @param string $CreationTime 文件系统创建时间
     * @param integer $ZoneId 文件系统所在区ID
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
        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("StorageType",$param) and $param["StorageType"] !== null) {
            $this->StorageType = $param["StorageType"];
        }

        if (array_key_exists("TotalSnapshotSize",$param) and $param["TotalSnapshotSize"] !== null) {
            $this->TotalSnapshotSize = $param["TotalSnapshotSize"];
        }

        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
