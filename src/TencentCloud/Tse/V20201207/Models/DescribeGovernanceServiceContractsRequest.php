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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGovernanceServiceContracts请求参数结构体
 *
 * @method string getInstanceId() 获取北极星引擎实例ID
 * @method void setInstanceId(string $InstanceId) 设置北极星引擎实例ID
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method integer getLimit() 获取分页条数
 * @method void setLimit(integer $Limit) 设置分页条数
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getService() 获取服务名
 * @method void setService(string $Service) 设置服务名
 * @method string getName() 获取契约名称
 * @method void setName(string $Name) 设置契约名称
 * @method string getContractVersion() 获取契约版本
 * @method void setContractVersion(string $ContractVersion) 设置契约版本
 * @method string getProtocol() 获取契约协议
 * @method void setProtocol(string $Protocol) 设置契约协议
 * @method boolean getBrief() 获取是否只展示基本信息
 * @method void setBrief(boolean $Brief) 设置是否只展示基本信息
 */
class DescribeGovernanceServiceContractsRequest extends AbstractModel
{
    /**
     * @var string 北极星引擎实例ID
     */
    public $InstanceId;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var integer 分页条数
     */
    public $Limit;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 服务名
     */
    public $Service;

    /**
     * @var string 契约名称
     */
    public $Name;

    /**
     * @var string 契约版本
     */
    public $ContractVersion;

    /**
     * @var string 契约协议
     */
    public $Protocol;

    /**
     * @var boolean 是否只展示基本信息
     */
    public $Brief;

    /**
     * @param string $InstanceId 北极星引擎实例ID
     * @param integer $Offset 分页偏移量
     * @param integer $Limit 分页条数
     * @param string $Namespace 命名空间
     * @param string $Service 服务名
     * @param string $Name 契约名称
     * @param string $ContractVersion 契约版本
     * @param string $Protocol 契约协议
     * @param boolean $Brief 是否只展示基本信息
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

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContractVersion",$param) and $param["ContractVersion"] !== null) {
            $this->ContractVersion = $param["ContractVersion"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Brief",$param) and $param["Brief"] !== null) {
            $this->Brief = $param["Brief"];
        }
    }
}
