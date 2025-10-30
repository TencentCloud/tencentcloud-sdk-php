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
 * @method string getType() 获取存储类型
 * @method void setType(string $Type) 设置存储类型
 * @method string getBucketName() 获取对象存储桶名称
 * @method void setBucketName(string $BucketName) 设置对象存储桶名称
 * @method string getEndpoint() 获取存储连接地址
 * @method void setEndpoint(string $Endpoint) 设置存储连接地址
 * @method string getKeyID() 获取存储连接用户密码
 * @method void setKeyID(string $KeyID) 设置存储连接用户密码
 * @method string getDstPath() 获取存储挂载目的目录
 * @method void setDstPath(string $DstPath) 设置存储挂载目的目录
 * @method string getSrcPath() 获取存储挂载源目录
 * @method void setSrcPath(string $SrcPath) 设置存储挂载源目录
 */
class VolumeConf extends AbstractModel
{
    /**
     * @var string 存储类型
     */
    public $Type;

    /**
     * @var string 对象存储桶名称
     */
    public $BucketName;

    /**
     * @var string 存储连接地址
     */
    public $Endpoint;

    /**
     * @var string 存储连接用户密码
     */
    public $KeyID;

    /**
     * @var string 存储挂载目的目录
     */
    public $DstPath;

    /**
     * @var string 存储挂载源目录
     */
    public $SrcPath;

    /**
     * @param string $Type 存储类型
     * @param string $BucketName 对象存储桶名称
     * @param string $Endpoint 存储连接地址
     * @param string $KeyID 存储连接用户密码
     * @param string $DstPath 存储挂载目的目录
     * @param string $SrcPath 存储挂载源目录
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
    }
}
