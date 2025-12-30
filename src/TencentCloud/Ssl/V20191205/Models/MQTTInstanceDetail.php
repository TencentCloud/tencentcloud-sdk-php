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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MQTT实例详情
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method string getInstanceStatus() 获取实例状态
 * @method void setInstanceStatus(string $InstanceStatus) 设置实例状态
 * @method array getNoMatchDomains() 获取不匹配的域名列表
 * @method void setNoMatchDomains(array $NoMatchDomains) 设置不匹配的域名列表
 * @method array getServerCertIdList() 获取服务端证书列表
 * @method void setServerCertIdList(array $ServerCertIdList) 设置服务端证书列表
 * @method array getCaCertIdList() 获取ca证书列表
 * @method void setCaCertIdList(array $CaCertIdList) 设置ca证书列表
 */
class MQTTInstanceDetail extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var string 实例状态
     */
    public $InstanceStatus;

    /**
     * @var array 不匹配的域名列表
     */
    public $NoMatchDomains;

    /**
     * @var array 服务端证书列表
     */
    public $ServerCertIdList;

    /**
     * @var array ca证书列表
     */
    public $CaCertIdList;

    /**
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param string $InstanceStatus 实例状态
     * @param array $NoMatchDomains 不匹配的域名列表
     * @param array $ServerCertIdList 服务端证书列表
     * @param array $CaCertIdList ca证书列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("NoMatchDomains",$param) and $param["NoMatchDomains"] !== null) {
            $this->NoMatchDomains = $param["NoMatchDomains"];
        }

        if (array_key_exists("ServerCertIdList",$param) and $param["ServerCertIdList"] !== null) {
            $this->ServerCertIdList = $param["ServerCertIdList"];
        }

        if (array_key_exists("CaCertIdList",$param) and $param["CaCertIdList"] !== null) {
            $this->CaCertIdList = $param["CaCertIdList"];
        }
    }
}
