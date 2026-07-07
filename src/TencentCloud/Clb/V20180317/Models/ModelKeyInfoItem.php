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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型及其 Key 信息
 *
 * @method string getAccessType() 获取<p>接入类型</p>
 * @method void setAccessType(string $AccessType) 设置<p>接入类型</p>
 * @method string getApiBase() 获取<p>API Base URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiBase(string $ApiBase) 设置<p>API Base URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取<p>模型创建时间（ISO 8601）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置<p>模型创建时间（ISO 8601）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHostHeader() 获取<p>自定义host header</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostHeader(string $HostHeader) 设置<p>自定义host header</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getKeyCount() 获取<p>Key 数量</p>
 * @method void setKeyCount(integer $KeyCount) 设置<p>Key 数量</p>
 * @method array getKeys() 获取<p>Key 详情列表</p>
 * @method void setKeys(array $Keys) 设置<p>Key 详情列表</p>
 * @method array getModelIdsWithAlias() 获取<p>model信息</p>
 * @method void setModelIdsWithAlias(array $ModelIdsWithAlias) 设置<p>model信息</p>
 * @method string getModelProvider() 获取<p>模型供应商</p>
 * @method void setModelProvider(string $ModelProvider) 设置<p>模型供应商</p>
 * @method string getProtocol() 获取<p>模型协议</p>
 * @method void setProtocol(string $Protocol) 设置<p>模型协议</p>
 * @method array getServiceIps() 获取<p>内部通信占用IP</p>
 * @method void setServiceIps(array $ServiceIps) 设置<p>内部通信占用IP</p>
 * @method string getServiceProviderId() 获取<p>服务提供商ID</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>服务提供商ID</p>
 * @method string getServiceProviderName() 获取<p>服务提供商自定义名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>服务提供商自定义名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取<p>模型状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li><li>Deleting： 删除中</li><li>ProvisionFailed： 创建失败</li><li>ConfigureFailed： 变配失败</li><li>DeletionFailed： 删除失败</li><li>Disabled： 已禁用</li></ul>
 * @method void setStatus(string $Status) 设置<p>模型状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li><li>Deleting： 删除中</li><li>ProvisionFailed： 创建失败</li><li>ConfigureFailed： 变配失败</li><li>DeletionFailed： 删除失败</li><li>Disabled： 已禁用</li></ul>
 * @method string getSubnetId() 获取<p>子网 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method boolean getVerifySSL() 获取<p>是否校验上游SSL</p>
 * @method void setVerifySSL(boolean $VerifySSL) 设置<p>是否校验上游SSL</p>
 * @method string getVpcId() 获取<p>VPC 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcId(string $VpcId) 设置<p>VPC 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelKeyInfoItem extends AbstractModel
{
    /**
     * @var string <p>接入类型</p>
     */
    public $AccessType;

    /**
     * @var string <p>API Base URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiBase;

    /**
     * @var string <p>模型创建时间（ISO 8601）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var string <p>自定义host header</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostHeader;

    /**
     * @var integer <p>Key 数量</p>
     */
    public $KeyCount;

    /**
     * @var array <p>Key 详情列表</p>
     */
    public $Keys;

    /**
     * @var array <p>model信息</p>
     */
    public $ModelIdsWithAlias;

    /**
     * @var string <p>模型供应商</p>
     */
    public $ModelProvider;

    /**
     * @var string <p>模型协议</p>
     */
    public $Protocol;

    /**
     * @var array <p>内部通信占用IP</p>
     */
    public $ServiceIps;

    /**
     * @var string <p>服务提供商ID</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>服务提供商自定义名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceProviderName;

    /**
     * @var string <p>模型状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li><li>Deleting： 删除中</li><li>ProvisionFailed： 创建失败</li><li>ConfigureFailed： 变配失败</li><li>DeletionFailed： 删除失败</li><li>Disabled： 已禁用</li></ul>
     */
    public $Status;

    /**
     * @var string <p>子网 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubnetId;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否校验上游SSL</p>
     */
    public $VerifySSL;

    /**
     * @var string <p>VPC 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcId;

    /**
     * @param string $AccessType <p>接入类型</p>
     * @param string $ApiBase <p>API Base URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt <p>模型创建时间（ISO 8601）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HostHeader <p>自定义host header</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $KeyCount <p>Key 数量</p>
     * @param array $Keys <p>Key 详情列表</p>
     * @param array $ModelIdsWithAlias <p>model信息</p>
     * @param string $ModelProvider <p>模型供应商</p>
     * @param string $Protocol <p>模型协议</p>
     * @param array $ServiceIps <p>内部通信占用IP</p>
     * @param string $ServiceProviderId <p>服务提供商ID</p>
     * @param string $ServiceProviderName <p>服务提供商自定义名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status <p>模型状态</p><p>枚举值：</p><ul><li>Active： 运行中</li><li>Provisioning： 创建中</li><li>Configuring： 变配中</li><li>Deleting： 删除中</li><li>ProvisionFailed： 创建失败</li><li>ConfigureFailed： 变配失败</li><li>DeletionFailed： 删除失败</li><li>Disabled： 已禁用</li></ul>
     * @param string $SubnetId <p>子网 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签信息</p>
     * @param boolean $VerifySSL <p>是否校验上游SSL</p>
     * @param string $VpcId <p>VPC 实例 ID</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ApiBase",$param) and $param["ApiBase"] !== null) {
            $this->ApiBase = $param["ApiBase"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }

        if (array_key_exists("KeyCount",$param) and $param["KeyCount"] !== null) {
            $this->KeyCount = $param["KeyCount"];
        }

        if (array_key_exists("Keys",$param) and $param["Keys"] !== null) {
            $this->Keys = [];
            foreach ($param["Keys"] as $key => $value){
                $obj = new KeyDetailItem();
                $obj->deserialize($value);
                array_push($this->Keys, $obj);
            }
        }

        if (array_key_exists("ModelIdsWithAlias",$param) and $param["ModelIdsWithAlias"] !== null) {
            $this->ModelIdsWithAlias = [];
            foreach ($param["ModelIdsWithAlias"] as $key => $value){
                $obj = new ServiceProviderModelItem();
                $obj->deserialize($value);
                array_push($this->ModelIdsWithAlias, $obj);
            }
        }

        if (array_key_exists("ModelProvider",$param) and $param["ModelProvider"] !== null) {
            $this->ModelProvider = $param["ModelProvider"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceIps",$param) and $param["ServiceIps"] !== null) {
            $this->ServiceIps = $param["ServiceIps"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("VerifySSL",$param) and $param["VerifySSL"] !== null) {
            $this->VerifySSL = $param["VerifySSL"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }
    }
}
