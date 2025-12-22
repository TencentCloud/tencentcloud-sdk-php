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
 * DescribeCloudRunPodList请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getVersionName() 获取版本名
 * @method void setVersionName(string $VersionName) 设置版本名
 * @method integer getPageSize() 获取默认为10， 最大为50
不传或传0时 取默认10
大于50时取50
 * @method void setPageSize(integer $PageSize) 设置默认为10， 最大为50
不传或传0时 取默认10
大于50时取50
 * @method integer getPageNum() 获取不传或传0时 会默认为1
 * @method void setPageNum(integer $PageNum) 设置不传或传0时 会默认为1
 */
class DescribeCloudRunPodListRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 版本名
     */
    public $VersionName;

    /**
     * @var integer 默认为10， 最大为50
不传或传0时 取默认10
大于50时取50
     */
    public $PageSize;

    /**
     * @var integer 不传或传0时 会默认为1
     */
    public $PageNum;

    /**
     * @param string $EnvId 环境Id
     * @param string $ServerName 服务名
     * @param string $VersionName 版本名
     * @param integer $PageSize 默认为10， 最大为50
不传或传0时 取默认10
大于50时取50
     * @param integer $PageNum 不传或传0时 会默认为1
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

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("VersionName",$param) and $param["VersionName"] !== null) {
            $this->VersionName = $param["VersionName"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }
    }
}
