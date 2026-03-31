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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCfsFileSystem返回参数结构体
 *
 * @method string getCreationTime() 获取<p>文件系统创建时间</p>
 * @method void setCreationTime(string $CreationTime) 设置<p>文件系统创建时间</p>
 * @method string getCreationToken() 获取<p>用户自定义文件系统名称</p>
 * @method void setCreationToken(string $CreationToken) 设置<p>用户自定义文件系统名称</p>
 * @method string getFileSystemId() 获取<p>文件系统 ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统 ID</p>
 * @method string getLifeCycleState() 获取<p>文件系统状态，可能出现状态包括：“creating”  创建中, “create_failed” 创建失败, “available” 可用, “unserviced” 不可用, “upgrading” 升级中， “deleting” 删除中。</p>
 * @method void setLifeCycleState(string $LifeCycleState) 设置<p>文件系统状态，可能出现状态包括：“creating”  创建中, “create_failed” 创建失败, “available” 可用, “unserviced” 不可用, “upgrading” 升级中， “deleting” 删除中。</p>
 * @method integer getSizeByte() 获取<p>文件系统已使用容量大小，单位为 Byte</p>
 * @method void setSizeByte(integer $SizeByte) 设置<p>文件系统已使用容量大小，单位为 Byte</p>
 * @method integer getZoneId() 获取<p>可用区 ID</p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区 ID</p>
 * @method string getFsName() 获取<p>用户自定义文件系统名称</p>
 * @method void setFsName(string $FsName) 设置<p>用户自定义文件系统名称</p>
 * @method boolean getEncrypted() 获取<p>文件系统是否加密</p>
 * @method void setEncrypted(boolean $Encrypted) 设置<p>文件系统是否加密</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class CreateCfsFileSystemResponse extends AbstractModel
{
    /**
     * @var string <p>文件系统创建时间</p>
     */
    public $CreationTime;

    /**
     * @var string <p>用户自定义文件系统名称</p>
     */
    public $CreationToken;

    /**
     * @var string <p>文件系统 ID</p>
     */
    public $FileSystemId;

    /**
     * @var string <p>文件系统状态，可能出现状态包括：“creating”  创建中, “create_failed” 创建失败, “available” 可用, “unserviced” 不可用, “upgrading” 升级中， “deleting” 删除中。</p>
     */
    public $LifeCycleState;

    /**
     * @var integer <p>文件系统已使用容量大小，单位为 Byte</p>
     */
    public $SizeByte;

    /**
     * @var integer <p>可用区 ID</p>
     */
    public $ZoneId;

    /**
     * @var string <p>用户自定义文件系统名称</p>
     */
    public $FsName;

    /**
     * @var boolean <p>文件系统是否加密</p>
     */
    public $Encrypted;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CreationTime <p>文件系统创建时间</p>
     * @param string $CreationToken <p>用户自定义文件系统名称</p>
     * @param string $FileSystemId <p>文件系统 ID</p>
     * @param string $LifeCycleState <p>文件系统状态，可能出现状态包括：“creating”  创建中, “create_failed” 创建失败, “available” 可用, “unserviced” 不可用, “upgrading” 升级中， “deleting” 删除中。</p>
     * @param integer $SizeByte <p>文件系统已使用容量大小，单位为 Byte</p>
     * @param integer $ZoneId <p>可用区 ID</p>
     * @param string $FsName <p>用户自定义文件系统名称</p>
     * @param boolean $Encrypted <p>文件系统是否加密</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CreationTime",$param) and $param["CreationTime"] !== null) {
            $this->CreationTime = $param["CreationTime"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("LifeCycleState",$param) and $param["LifeCycleState"] !== null) {
            $this->LifeCycleState = $param["LifeCycleState"];
        }

        if (array_key_exists("SizeByte",$param) and $param["SizeByte"] !== null) {
            $this->SizeByte = $param["SizeByte"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }

        if (array_key_exists("Encrypted",$param) and $param["Encrypted"] !== null) {
            $this->Encrypted = $param["Encrypted"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
