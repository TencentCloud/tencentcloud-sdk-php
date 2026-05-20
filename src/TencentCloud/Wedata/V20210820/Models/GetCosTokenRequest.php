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
 * @method string getProjectId() 获取<p>项目id</p>
 * @method void setProjectId(string $ProjectId) 设置<p>项目id</p>
 * @method string getOriginDomain() 获取<p>请求域名</p>
 * @method void setOriginDomain(string $OriginDomain) 设置<p>请求域名</p>
 * @method boolean getCrossFlag() 获取<p>是否需要跨域</p>
 * @method void setCrossFlag(boolean $CrossFlag) 设置<p>是否需要跨域</p>
 * @method string getBucketName() 获取<p>桶名</p>
 * @method void setBucketName(string $BucketName) 设置<p>桶名</p>
 * @method string getRemotePath() 获取<p>远程地址</p>
 * @method void setRemotePath(string $RemotePath) 设置<p>远程地址</p>
 * @method string getRemoteRegion() 获取<p>地域</p>
 * @method void setRemoteRegion(string $RemoteRegion) 设置<p>地域</p>
 */
class GetCosTokenRequest extends AbstractModel
{
    /**
     * @var string <p>项目id</p>
     */
    public $ProjectId;

    /**
     * @var string <p>请求域名</p>
     */
    public $OriginDomain;

    /**
     * @var boolean <p>是否需要跨域</p>
     */
    public $CrossFlag;

    /**
     * @var string <p>桶名</p>
     */
    public $BucketName;

    /**
     * @var string <p>远程地址</p>
     */
    public $RemotePath;

    /**
     * @var string <p>地域</p>
     */
    public $RemoteRegion;

    /**
     * @param string $ProjectId <p>项目id</p>
     * @param string $OriginDomain <p>请求域名</p>
     * @param boolean $CrossFlag <p>是否需要跨域</p>
     * @param string $BucketName <p>桶名</p>
     * @param string $RemotePath <p>远程地址</p>
     * @param string $RemoteRegion <p>地域</p>
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
