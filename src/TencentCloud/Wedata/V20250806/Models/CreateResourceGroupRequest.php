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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateResourceGroup请求参数结构体
 *
 * @method string getName() 获取资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。
 * @method void setName(string $Name) 设置资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。
 * @method ResourceType getType() 获取开通的资源组信息
 * @method void setType(ResourceType $Type) 设置开通的资源组信息
 * @method boolean getAutoRenewEnabled() 获取是否自动续费
 * @method void setAutoRenewEnabled(boolean $AutoRenewEnabled) 设置是否自动续费
 * @method integer getPurchasePeriod() 获取购买时长，单位月
 * @method void setPurchasePeriod(integer $PurchasePeriod) 设置购买时长，单位月
 * @method string getVpcId() 获取vpcId
 * @method void setVpcId(string $VpcId) 设置vpcId
 * @method string getSubNet() 获取子网
 * @method void setSubNet(string $SubNet) 设置子网
 * @method string getResourceRegion() 获取资源购买地域
 * @method void setResourceRegion(string $ResourceRegion) 设置资源购买地域
 * @method string getAssociatedProjectId() 获取关联项目空间项目id
 * @method void setAssociatedProjectId(string $AssociatedProjectId) 设置关联项目空间项目id
 * @method string getDescription() 获取资源组描述
 * @method void setDescription(string $Description) 设置资源组描述
 */
class CreateResourceGroupRequest extends AbstractModel
{
    /**
     * @var string 资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。
     */
    public $Name;

    /**
     * @var ResourceType 开通的资源组信息
     */
    public $Type;

    /**
     * @var boolean 是否自动续费
     */
    public $AutoRenewEnabled;

    /**
     * @var integer 购买时长，单位月
     */
    public $PurchasePeriod;

    /**
     * @var string vpcId
     */
    public $VpcId;

    /**
     * @var string 子网
     */
    public $SubNet;

    /**
     * @var string 资源购买地域
     */
    public $ResourceRegion;

    /**
     * @var string 关联项目空间项目id
     */
    public $AssociatedProjectId;

    /**
     * @var string 资源组描述
     */
    public $Description;

    /**
     * @param string $Name 资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。
     * @param ResourceType $Type 开通的资源组信息
     * @param boolean $AutoRenewEnabled 是否自动续费
     * @param integer $PurchasePeriod 购买时长，单位月
     * @param string $VpcId vpcId
     * @param string $SubNet 子网
     * @param string $ResourceRegion 资源购买地域
     * @param string $AssociatedProjectId 关联项目空间项目id
     * @param string $Description 资源组描述
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = new ResourceType();
            $this->Type->deserialize($param["Type"]);
        }

        if (array_key_exists("AutoRenewEnabled",$param) and $param["AutoRenewEnabled"] !== null) {
            $this->AutoRenewEnabled = $param["AutoRenewEnabled"];
        }

        if (array_key_exists("PurchasePeriod",$param) and $param["PurchasePeriod"] !== null) {
            $this->PurchasePeriod = $param["PurchasePeriod"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubNet",$param) and $param["SubNet"] !== null) {
            $this->SubNet = $param["SubNet"];
        }

        if (array_key_exists("ResourceRegion",$param) and $param["ResourceRegion"] !== null) {
            $this->ResourceRegion = $param["ResourceRegion"];
        }

        if (array_key_exists("AssociatedProjectId",$param) and $param["AssociatedProjectId"] !== null) {
            $this->AssociatedProjectId = $param["AssociatedProjectId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
