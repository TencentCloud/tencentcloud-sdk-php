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
 * @method string getName() 获取<p>资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。</p>
 * @method void setName(string $Name) 设置<p>资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。</p>
 * @method ResourceType getType() 获取<p>开通的资源组信息</p>
 * @method void setType(ResourceType $Type) 设置<p>开通的资源组信息</p>
 * @method boolean getAutoRenewEnabled() 获取<p>是否自动续费</p>
 * @method void setAutoRenewEnabled(boolean $AutoRenewEnabled) 设置<p>是否自动续费</p>
 * @method integer getPurchasePeriod() 获取<p>购买时长，单位月</p>
 * @method void setPurchasePeriod(integer $PurchasePeriod) 设置<p>购买时长，单位月</p>
 * @method string getVpcId() 获取<p>vpcId</p>
 * @method void setVpcId(string $VpcId) 设置<p>vpcId</p>
 * @method string getSubNet() 获取<p>子网</p>
 * @method void setSubNet(string $SubNet) 设置<p>子网</p>
 * @method string getResourceRegion() 获取<p>资源购买地域</p>
 * @method void setResourceRegion(string $ResourceRegion) 设置<p>资源购买地域</p>
 * @method string getAssociatedProjectId() 获取<p>关联项目空间项目id</p>
 * @method void setAssociatedProjectId(string $AssociatedProjectId) 设置<p>关联项目空间项目id</p>
 * @method string getDescription() 获取<p>资源组描述</p>
 * @method void setDescription(string $Description) 设置<p>资源组描述</p>
 * @method array getTags() 获取<p>标签值</p>
 * @method void setTags(array $Tags) 设置<p>标签值</p>
 */
class CreateResourceGroupRequest extends AbstractModel
{
    /**
     * @var string <p>资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。</p>
     */
    public $Name;

    /**
     * @var ResourceType <p>开通的资源组信息</p>
     */
    public $Type;

    /**
     * @var boolean <p>是否自动续费</p>
     */
    public $AutoRenewEnabled;

    /**
     * @var integer <p>购买时长，单位月</p>
     */
    public $PurchasePeriod;

    /**
     * @var string <p>vpcId</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网</p>
     */
    public $SubNet;

    /**
     * @var string <p>资源购买地域</p>
     */
    public $ResourceRegion;

    /**
     * @var string <p>关联项目空间项目id</p>
     */
    public $AssociatedProjectId;

    /**
     * @var string <p>资源组描述</p>
     */
    public $Description;

    /**
     * @var array <p>标签值</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>资源组名称。创建通用资源组的名称，必须以字母开头，可包含字母、数字、下划线（_），最多 64 个字符。</p>
     * @param ResourceType $Type <p>开通的资源组信息</p>
     * @param boolean $AutoRenewEnabled <p>是否自动续费</p>
     * @param integer $PurchasePeriod <p>购买时长，单位月</p>
     * @param string $VpcId <p>vpcId</p>
     * @param string $SubNet <p>子网</p>
     * @param string $ResourceRegion <p>资源购买地域</p>
     * @param string $AssociatedProjectId <p>关联项目空间项目id</p>
     * @param string $Description <p>资源组描述</p>
     * @param array $Tags <p>标签值</p>
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
