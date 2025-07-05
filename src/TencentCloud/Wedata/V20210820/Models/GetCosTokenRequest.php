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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCosToken请求参数结构体
 *
 * @method string getProjectId() 获取项目id
 * @method void setProjectId(string $ProjectId) 设置项目id
 * @method string getOriginDomain() 获取请求域名
 * @method void setOriginDomain(string $OriginDomain) 设置请求域名
 * @method boolean getCrossFlag() 获取是否需要跨域
 * @method void setCrossFlag(boolean $CrossFlag) 设置是否需要跨域
 * @method string getBucketName() 获取桶名
 * @method void setBucketName(string $BucketName) 设置桶名
 * @method string getRemotePath() 获取远程地址
 * @method void setRemotePath(string $RemotePath) 设置远程地址
 * @method string getRemoteRegion() 获取地域
 * @method void setRemoteRegion(string $RemoteRegion) 设置地域
 */
class GetCosTokenRequest extends AbstractModel
{
    /**
     * @var string 项目id
     */
    public $ProjectId;

    /**
     * @var string 请求域名
     */
    public $OriginDomain;

    /**
     * @var boolean 是否需要跨域
     */
    public $CrossFlag;

    /**
     * @var string 桶名
     */
    public $BucketName;

    /**
     * @var string 远程地址
     */
    public $RemotePath;

    /**
     * @var string 地域
     */
    public $RemoteRegion;

    /**
     * @param string $ProjectId 项目id
     * @param string $OriginDomain 请求域名
     * @param boolean $CrossFlag 是否需要跨域
     * @param string $BucketName 桶名
     * @param string $RemotePath 远程地址
     * @param string $RemoteRegion 地域
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("OriginDomain",$param) and $param["OriginDomain"] !== null) {
            $this->OriginDomain = $param["OriginDomain"];
        }

        if (array_key_exists("CrossFlag",$param) and $param["CrossFlag"] !== null) {
            $this->CrossFlag = $param["CrossFlag"];
        }

        if (array_key_exists("BucketName",$param) and $param["BucketName"] !== null) {
            $this->BucketName = $param["BucketName"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("RemoteRegion",$param) and $param["RemoteRegion"] !== null) {
            $this->RemoteRegion = $param["RemoteRegion"];
        }
    }
}
