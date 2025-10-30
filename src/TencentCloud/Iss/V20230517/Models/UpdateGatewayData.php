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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改网关信息返回结果
 *
 * @method string getGatewayId() 获取网关索引ID
 * @method void setGatewayId(string $GatewayId) 设置网关索引ID
 * @method string getGwId() 获取网关编码
 * @method void setGwId(string $GwId) 设置网关编码
 * @method string getName() 获取网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
 * @method void setName(string $Name) 设置网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
 * @method string getDescription() 获取网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method void setDescription(string $Description) 设置网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
 * @method string getClusterId() 获取服务节点ID
 * @method void setClusterId(string $ClusterId) 设置服务节点ID
 * @method string getClusterName() 获取服务节点名称
 * @method void setClusterName(string $ClusterName) 设置服务节点名称
 * @method integer getStatus() 获取网关状态，0：离线，1:在线
 * @method void setStatus(integer $Status) 设置网关状态，0：离线，1:在线
 * @method integer getCreatedAt() 获取激活时间
 * @method void setCreatedAt(integer $CreatedAt) 设置激活时间
 * @method string getSecret() 获取网关密钥
 * @method void setSecret(string $Secret) 设置网关密钥
 * @method string getVersion() 获取网关版本信息
 * @method void setVersion(string $Version) 设置网关版本信息
 */
class UpdateGatewayData extends AbstractModel
{
    /**
     * @var string 网关索引ID
     */
    public $GatewayId;

    /**
     * @var string 网关编码
     */
    public $GwId;

    /**
     * @var string 网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
     */
    public $Name;

    /**
     * @var string 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
     */
    public $Description;

    /**
     * @var string 服务节点ID
     */
    public $ClusterId;

    /**
     * @var string 服务节点名称
     */
    public $ClusterName;

    /**
     * @var integer 网关状态，0：离线，1:在线
     */
    public $Status;

    /**
     * @var integer 激活时间
     */
    public $CreatedAt;

    /**
     * @var string 网关密钥
     */
    public $Secret;

    /**
     * @var string 网关版本信息
     */
    public $Version;

    /**
     * @param string $GatewayId 网关索引ID
     * @param string $GwId 网关编码
     * @param string $Name 网关名称，仅支持中文、英文、数字、_、-，长度不超过32个字符
     * @param string $Description 网关描述，仅支持中文、英文、数字、_、-，长度不超过128个字符
     * @param string $ClusterId 服务节点ID
     * @param string $ClusterName 服务节点名称
     * @param integer $Status 网关状态，0：离线，1:在线
     * @param integer $CreatedAt 激活时间
     * @param string $Secret 网关密钥
     * @param string $Version 网关版本信息
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
        if (array_key_exists("GatewayId",$param) and $param["GatewayId"] !== null) {
            $this->GatewayId = $param["GatewayId"];
        }

        if (array_key_exists("GwId",$param) and $param["GwId"] !== null) {
            $this->GwId = $param["GwId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
