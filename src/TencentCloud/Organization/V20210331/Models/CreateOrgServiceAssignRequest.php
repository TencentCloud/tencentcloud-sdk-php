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
 * CreateOrgServiceAssign请求参数结构体
 *
 * @method array getMemberUins() 获取委派管理员Uin列表。 最大长度20个
 * @method void setMemberUins(array $MemberUins) 设置委派管理员Uin列表。 最大长度20个
 * @method integer getServiceId() 获取集团服务ID。和集团服务产品标识二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
 * @method void setServiceId(integer $ServiceId) 设置集团服务ID。和集团服务产品标识二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
 * @method string getProduct() 获取集团服务产品标识。和集团服务ID二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
 * @method void setProduct(string $Product) 设置集团服务产品标识。和集团服务ID二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
 * @method integer getManagementScope() 获取委派管理员管理范围。 取值：1-全部成员 2-部分成员，默认值1
 * @method void setManagementScope(integer $ManagementScope) 设置委派管理员管理范围。 取值：1-全部成员 2-部分成员，默认值1
 * @method array getManagementScopeUins() 获取管理的成员Uin列表。ManagementScope为2时该参数有效
 * @method void setManagementScopeUins(array $ManagementScopeUins) 设置管理的成员Uin列表。ManagementScope为2时该参数有效
 * @method array getManagementScopeNodeIds() 获取管理的部门ID列表。ManagementScope为2时该参数有效
 * @method void setManagementScopeNodeIds(array $ManagementScopeNodeIds) 设置管理的部门ID列表。ManagementScope为2时该参数有效
 */
class CreateOrgServiceAssignRequest extends AbstractModel
{
    /**
     * @var array 委派管理员Uin列表。 最大长度20个
     */
    public $MemberUins;

    /**
     * @var integer 集团服务ID。和集团服务产品标识二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
     */
    public $ServiceId;

    /**
     * @var string 集团服务产品标识。和集团服务ID二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
     */
    public $Product;

    /**
     * @var integer 委派管理员管理范围。 取值：1-全部成员 2-部分成员，默认值1
     */
    public $ManagementScope;

    /**
     * @var array 管理的成员Uin列表。ManagementScope为2时该参数有效
     */
    public $ManagementScopeUins;

    /**
     * @var array 管理的部门ID列表。ManagementScope为2时该参数有效
     */
    public $ManagementScopeNodeIds;

    /**
     * @param array $MemberUins 委派管理员Uin列表。 最大长度20个
     * @param integer $ServiceId 集团服务ID。和集团服务产品标识二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
     * @param string $Product 集团服务产品标识。和集团服务ID二选一必填，可以通过[ListOrganizationService](https://cloud.tencent.com/document/product/850/109561)获取
     * @param integer $ManagementScope 委派管理员管理范围。 取值：1-全部成员 2-部分成员，默认值1
     * @param array $ManagementScopeUins 管理的成员Uin列表。ManagementScope为2时该参数有效
     * @param array $ManagementScopeNodeIds 管理的部门ID列表。ManagementScope为2时该参数有效
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
        if (array_key_exists("MemberUins",$param) and $param["MemberUins"] !== null) {
            $this->MemberUins = $param["MemberUins"];
        }

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("ManagementScope",$param) and $param["ManagementScope"] !== null) {
            $this->ManagementScope = $param["ManagementScope"];
        }

        if (array_key_exists("ManagementScopeUins",$param) and $param["ManagementScopeUins"] !== null) {
            $this->ManagementScopeUins = $param["ManagementScopeUins"];
        }

        if (array_key_exists("ManagementScopeNodeIds",$param) and $param["ManagementScopeNodeIds"] !== null) {
            $this->ManagementScopeNodeIds = $param["ManagementScopeNodeIds"];
        }
    }
}
