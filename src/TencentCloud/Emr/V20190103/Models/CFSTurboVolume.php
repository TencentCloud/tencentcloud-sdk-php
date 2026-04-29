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
 * cfs trubo 存储卷
 *
 * @method string getVolumeName() 获取<p>存储卷名称</p>
 * @method void setVolumeName(string $VolumeName) 设置<p>存储卷名称</p>
 * @method string getFileSystemId() 获取<p>文件系统 id</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 id</p>
 * @method string getFSId() 获取<p>CFSId</p>
 * @method void setFSId(string $FSId) 设置<p>CFSId</p>
 * @method string getHost() 获取<p>挂载点 ip</p>
 * @method void setHost(string $Host) 设置<p>挂载点 ip</p>
 * @method string getSubPath() 获取<p>cfs子目录</p>
 * @method void setSubPath(string $SubPath) 设置<p>cfs子目录</p>
 * @method string getRootDir() 获取<p>lustre挂载根目录，默认为/cfs</p>
 * @method void setRootDir(string $RootDir) 设置<p>lustre挂载根目录，默认为/cfs</p>
 */
class CFSTurboVolume extends AbstractModel
{
    /**
     * @var string <p>存储卷名称</p>
     */
    public $VolumeName;

    /**
     * @var string <p>文件系统 id</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>CFSId</p>
     */
    public $FSId;

    /**
     * @var string <p>挂载点 ip</p>
     */
    public $Host;

    /**
     * @var string <p>cfs子目录</p>
     */
    public $SubPath;

    /**
     * @var string <p>lustre挂载根目录，默认为/cfs</p>
     */
    public $RootDir;

    /**
     * @param string $VolumeName <p>存储卷名称</p>
     * @param string $FileSystemId <p>文件系统 id</p>
     * @param string $FSId <p>CFSId</p>
     * @param string $Host <p>挂载点 ip</p>
     * @param string $SubPath <p>cfs子目录</p>
     * @param string $RootDir <p>lustre挂载根目录，默认为/cfs</p>
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

        if (array_key_exists("RootDir",$param) and $param["RootDir"] !== null) {
            $this->RootDir = $param["RootDir"];
        }
    }
}
