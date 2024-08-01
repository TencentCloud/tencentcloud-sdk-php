<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集团服务设置
 *
 * @method integer getServiceId() 获取集团服务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceId(integer $ServiceId) 设置集团服务ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductName() 获取集团服务产品名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductName(string $ProductName) 设置集团服务产品名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAssign() 获取是否支持委派。取值: 1-是  2-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAssign(integer $IsAssign) 设置是否支持委派。取值: 1-是  2-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取集团服务描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置集团服务描述。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMemberNum() 获取当前委派管理员数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberNum(string $MemberNum) 设置当前委派管理员数。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocument() 获取帮助文档。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocument(string $Document) 设置帮助文档。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsoleUrl() 获取集团服务产品控制台路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsoleUrl(string $ConsoleUrl) 设置集团服务产品控制台路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsUsageStatus() 获取是否接入使用状态。取值: 1-是 
 2-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsUsageStatus(integer $IsUsageStatus) 设置是否接入使用状态。取值: 1-是 
 2-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getCanAssignCount() 获取委派管理员数量限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCanAssignCount(integer $CanAssignCount) 设置委派管理员数量限制。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProduct() 获取集团服务产品标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProduct(string $Product) 设置集团服务产品标识。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceGrant() 获取是否支持集团服务授权。取值 1-是、2-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceGrant(integer $ServiceGrant) 设置是否支持集团服务授权。取值 1-是、2-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGrantStatus() 获取集团服务授权启用状态。ServiceGrant值为1时该字段有效 ，取值：Enabled-开启  Disabled-关闭 
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrantStatus(string $GrantStatus) 设置集团服务授权启用状态。ServiceGrant值为1时该字段有效 ，取值：Enabled-开启  Disabled-关闭 
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsSetManagementScope() 获取是否支持设置委派管理范围。取值: 1-是  2-否
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSetManagementScope(integer $IsSetManagementScope) 设置是否支持设置委派管理范围。取值: 1-是  2-否
注意：此字段可能返回 null，表示取不到有效值。
 */
class OrganizationServiceAssign extends AbstractModel
{
    /**
     * @var integer 集团服务ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceId;

    /**
     * @var string 集团服务产品名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductName;

    /**
     * @var integer 是否支持委派。取值: 1-是  2-否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAssign;

    /**
     * @var string 集团服务描述。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 当前委派管理员数。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberNum;

    /**
     * @var string 帮助文档。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Document;

    /**
     * @var string 集团服务产品控制台路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsoleUrl;

    /**
     * @var integer 是否接入使用状态。取值: 1-是 
 2-否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsUsageStatus;

    /**
     * @var integer 委派管理员数量限制。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CanAssignCount;

    /**
     * @var string 集团服务产品标识。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Product;

    /**
     * @var integer 是否支持集团服务授权。取值 1-是、2-否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceGrant;

    /**
     * @var string 集团服务授权启用状态。ServiceGrant值为1时该字段有效 ，取值：Enabled-开启  Disabled-关闭 
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GrantStatus;

    /**
     * @var integer 是否支持设置委派管理范围。取值: 1-是  2-否
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSetManagementScope;

    /**
     * @param integer $ServiceId 集团服务ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductName 集团服务产品名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAssign 是否支持委派。取值: 1-是  2-否
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 集团服务描述。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MemberNum 当前委派管理员数。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Document 帮助文档。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsoleUrl 集团服务产品控制台路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsUsageStatus 是否接入使用状态。取值: 1-是 
 2-否
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $CanAssignCount 委派管理员数量限制。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Product 集团服务产品标识。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceGrant 是否支持集团服务授权。取值 1-是、2-否
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GrantStatus 集团服务授权启用状态。ServiceGrant值为1时该字段有效 ，取值：Enabled-开启  Disabled-关闭 
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsSetManagementScope 是否支持设置委派管理范围。取值: 1-是  2-否
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
        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("IsAssign",$param) and $param["IsAssign"] !== null) {
            $this->IsAssign = $param["IsAssign"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("MemberNum",$param) and $param["MemberNum"] !== null) {
            $this->MemberNum = $param["MemberNum"];
        }

        if (array_key_exists("Document",$param) and $param["Document"] !== null) {
            $this->Document = $param["Document"];
        }

        if (array_key_exists("ConsoleUrl",$param) and $param["ConsoleUrl"] !== null) {
            $this->ConsoleUrl = $param["ConsoleUrl"];
        }

        if (array_key_exists("IsUsageStatus",$param) and $param["IsUsageStatus"] !== null) {
            $this->IsUsageStatus = $param["IsUsageStatus"];
        }

        if (array_key_exists("CanAssignCount",$param) and $param["CanAssignCount"] !== null) {
            $this->CanAssignCount = $param["CanAssignCount"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ServiceGrant",$param) and $param["ServiceGrant"] !== null) {
            $this->ServiceGrant = $param["ServiceGrant"];
        }

        if (array_key_exists("GrantStatus",$param) and $param["GrantStatus"] !== null) {
            $this->GrantStatus = $param["GrantStatus"];
        }

        if (array_key_exists("IsSetManagementScope",$param) and $param["IsSetManagementScope"] !== null) {
            $this->IsSetManagementScope = $param["IsSetManagementScope"];
        }
    }
}
