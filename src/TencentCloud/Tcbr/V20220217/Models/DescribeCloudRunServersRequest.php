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
 * DescribeCloudRunServers请求参数结构体
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method integer getPageSize() 获取默认为9， 最大为30
不传或传0时 取默认9
大于30时取30
 * @method void setPageSize(integer $PageSize) 设置默认为9， 最大为30
不传或传0时 取默认9
大于30时取30
 * @method integer getPageNum() 获取不传或传0时 会默认为1
 * @method void setPageNum(integer $PageNum) 设置不传或传0时 会默认为1
 * @method string getServerName() 获取服务名
 * @method void setServerName(string $ServerName) 设置服务名
 * @method string getServerType() 获取服务类型：function | container
 * @method void setServerType(string $ServerType) 设置服务类型：function | container
 * @method string getVpcId() 获取vpcId
 * @method void setVpcId(string $VpcId) 设置vpcId
 */
class DescribeCloudRunServersRequest extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var integer 默认为9， 最大为30
不传或传0时 取默认9
大于30时取30
     */
    public $PageSize;

    /**
     * @var integer 不传或传0时 会默认为1
     */
    public $PageNum;

    /**
     * @var string 服务名
     */
    public $ServerName;

    /**
     * @var string 服务类型：function | container
     */
    public $ServerType;

    /**
     * @var string vpcId
     */
    public $VpcId;

    /**
     * @param string $EnvId 环境Id
     * @param integer $PageSize 默认为9， 最大为30
不传或传0时 取默认9
大于30时取30
     * @param integer $PageNum 不传或传0时 会默认为1
     * @param string $ServerName 服务名
     * @param string $ServerType 服务类型：function | container
     * @param string $VpcId vpcId
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

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("ServerName",$param) and $param["ServerName"] !== null) {
            $this->ServerName = $param["ServerName"];
        }

        if (array_key_exists("ServerType",$param) and $param["ServerType"] !== null) {
            $this->ServerType = $param["ServerType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
