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
 * cfs 存储卷
 *
 * @method string getVolumeName() 获取存储卷名称
 * @method void setVolumeName(string $VolumeName) 设置存储卷名称
 * @method string getFileSystemId() 获取文件系统 id
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 id
 * @method string getFSId() 获取CFSId
 * @method void setFSId(string $FSId) 设置CFSId
 * @method string getHost() 获取挂载点 ip
 * @method void setHost(string $Host) 设置挂载点 ip
 * @method string getSubPath() 获取cfs子目录
 * @method void setSubPath(string $SubPath) 设置cfs子目录
 */
class CFSVolume extends AbstractModel
{
    /**
     * @var string 存储卷名称
     */
    public $VolumeName;

    /**
     * @var string 文件系统 id
     */
    public $FileSystemId;

    /**
     * @var string CFSId
     */
    public $FSId;

    /**
     * @var string 挂载点 ip
     */
    public $Host;

    /**
     * @var string cfs子目录
     */
    public $SubPath;

    /**
     * @param string $VolumeName 存储卷名称
     * @param string $FileSystemId 文件系统 id
     * @param string $FSId CFSId
     * @param string $Host 挂载点 ip
     * @param string $SubPath cfs子目录
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
        if (array_key_exists("VolumeName",$param) and $param["VolumeName"] !== null) {
            $this->VolumeName = $param["VolumeName"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("FSId",$param) and $param["FSId"] !== null) {
            $this->FSId = $param["FSId"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("SubPath",$param) and $param["SubPath"] !== null) {
            $this->SubPath = $param["SubPath"];
        }
    }
}
