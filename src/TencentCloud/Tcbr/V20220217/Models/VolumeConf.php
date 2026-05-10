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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 存储配置
 *
 * @method string getType() 获取<p>存储类型</p>
 * @method void setType(string $Type) 设置<p>存储类型</p>
 * @method string getBucketName() 获取<p>对象存储桶名称</p>
 * @method void setBucketName(string $BucketName) 设置<p>对象存储桶名称</p>
 * @method string getEndpoint() 获取<p>存储连接地址</p>
 * @method void setEndpoint(string $Endpoint) 设置<p>存储连接地址</p>
 * @method string getKeyID() 获取<p>存储连接用户密码</p>
 * @method void setKeyID(string $KeyID) 设置<p>存储连接用户密码</p>
 * @method string getDstPath() 获取<p>存储挂载目的目录</p>
 * @method void setDstPath(string $DstPath) 设置<p>存储挂载目的目录</p>
 * @method string getSrcPath() 获取<p>存储挂载源目录</p>
 * @method void setSrcPath(string $SrcPath) 设置<p>存储挂载源目录</p>
 * @method string getMountIP() 获取<p>cfs 实例ip</p>
 * @method void setMountIP(string $MountIP) 设置<p>cfs 实例ip</p>
 * @method boolean getReadOnly() 获取<p>默认读写</p>
 * @method void setReadOnly(boolean $ReadOnly) 设置<p>默认读写</p>
 * @method string getInstanceId() 获取<p>CFS 实例 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>CFS 实例 ID</p>
 */
class VolumeConf extends AbstractModel
{
    /**
     * @var string <p>存储类型</p>
     */
    public $Type;

    /**
     * @var string <p>对象存储桶名称</p>
     */
    public $BucketName;

    /**
     * @var string <p>存储连接地址</p>
     */
    public $Endpoint;

    /**
     * @var string <p>存储连接用户密码</p>
     */
    public $KeyID;

    /**
     * @var string <p>存储挂载目的目录</p>
     */
    public $DstPath;

    /**
     * @var string <p>存储挂载源目录</p>
     */
    public $SrcPath;

    /**
     * @var string <p>cfs 实例ip</p>
     */
    public $MountIP;

    /**
     * @var boolean <p>默认读写</p>
     */
    public $ReadOnly;

    /**
     * @var string <p>CFS 实例 ID</p>
     */
    public $InstanceId;

    /**
     * @param string $Type <p>存储类型</p>
     * @param string $BucketName <p>对象存储桶名称</p>
     * @param string $Endpoint <p>存储连接地址</p>
     * @param string $KeyID <p>存储连接用户密码</p>
     * @param string $DstPath <p>存储挂载目的目录</p>
     * @param string $SrcPath <p>存储挂载源目录</p>
     * @param string $MountIP <p>cfs 实例ip</p>
     * @param boolean $ReadOnly <p>默认读写</p>
     * @param string $InstanceId <p>CFS 实例 ID</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("Endpoint",$param) and $param["Endpoint"] !== null) {
            $this->Endpoint = $param["Endpoint"];
        }

        if (array_key_exists("KeyID",$param) and $param["KeyID"] !== null) {
            $this->KeyID = $param["KeyID"];
        }

        if (array_key_exists("DstPath",$param) and $param["DstPath"] !== null) {
            $this->DstPath = $param["DstPath"];
        }

        if (array_key_exists("SrcPath",$param) and $param["SrcPath"] !== null) {
            $this->SrcPath = $param["SrcPath"];
        }

        if (array_key_exists("MountIP",$param) and $param["MountIP"] !== null) {
            $this->MountIP = $param["MountIP"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
