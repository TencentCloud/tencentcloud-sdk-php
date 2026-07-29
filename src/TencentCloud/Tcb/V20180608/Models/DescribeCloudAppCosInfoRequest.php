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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudAppCosInfo请求参数结构体
 *
 * @method string getEnvId() 获取环境id
 * @method void setEnvId(string $EnvId) 设置环境id
 * @method string getServiceName() 获取服务名
 * @method void setServiceName(string $ServiceName) 设置服务名
 * @method string getDeployType() 获取部署类型
 * @method void setDeployType(string $DeployType) 设置部署类型
 * @method string getUnixTimestamp() 获取时间戳
 * @method void setUnixTimestamp(string $UnixTimestamp) 设置时间戳
 * @method string getSuffix() 获取文件后缀
 * @method void setSuffix(string $Suffix) 设置文件后缀
 * @method boolean getNeedDownload() 获取是否需要下载
 * @method void setNeedDownload(boolean $NeedDownload) 设置是否需要下载
 */
class DescribeCloudAppCosInfoRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServiceName;

    /**
     * @var string 部署类型
     */
    public $DeployType;

    /**
     * @var string 时间戳
     */
    public $UnixTimestamp;

    /**
     * @var string 文件后缀
     */
    public $Suffix;

    /**
     * @var boolean 是否需要下载
     */
    public $NeedDownload;

    /**
     * @param string $EnvId 环境id
     * @param string $ServiceName 服务名
     * @param string $DeployType 部署类型
     * @param string $UnixTimestamp 时间戳
     * @param string $Suffix 文件后缀
     * @param boolean $NeedDownload 是否需要下载
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("DeployType",$param) and $param["DeployType"] !== null) {
            $this->DeployType = $param["DeployType"];
        }

        if (array_key_exists("UnixTimestamp",$param) and $param["UnixTimestamp"] !== null) {
            $this->UnixTimestamp = $param["UnixTimestamp"];
        }

        if (array_key_exists("Suffix",$param) and $param["Suffix"] !== null) {
            $this->Suffix = $param["Suffix"];
        }

        if (array_key_exists("NeedDownload",$param) and $param["NeedDownload"] !== null) {
            $this->NeedDownload = $param["NeedDownload"];
        }
    }
}
