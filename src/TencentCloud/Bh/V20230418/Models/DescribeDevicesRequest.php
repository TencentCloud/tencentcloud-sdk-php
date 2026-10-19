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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDevices请求参数结构体
 *
 * @method array getIdSet() 获取<p>资产ID集合</p>
 * @method void setIdSet(array $IdSet) 设置<p>资产ID集合</p>
 * @method string getName() 获取<p>资产名或资产IP，模糊查询</p>
 * @method void setName(string $Name) 设置<p>资产名或资产IP，模糊查询</p>
 * @method string getIp() 获取<p>暂未使用</p>
 * @method void setIp(string $Ip) 设置<p>暂未使用</p>
 * @method array getApCodeSet() 获取<p>地域码集合</p>
 * @method void setApCodeSet(array $ApCodeSet) 设置<p>地域码集合</p>
 * @method integer getKind() 获取<p>操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
 * @method void setKind(integer $Kind) 设置<p>操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
 * @method integer getOffset() 获取<p>分页偏移位置，默认值为0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移位置，默认值为0</p>
 * @method integer getLimit() 获取<p>每页条目数量</p><p>取值范围：[0, 500]</p><p>默认值：20</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条目数量</p><p>取值范围：[0, 500]</p><p>默认值：20</p>
 * @method array getAuthorizedUserIdSet() 获取<p>有该资产访问权限的用户ID集合</p>
 * @method void setAuthorizedUserIdSet(array $AuthorizedUserIdSet) 设置<p>有该资产访问权限的用户ID集合</p>
 * @method array getResourceIdSet() 获取<p>过滤条件，资产绑定的堡垒机服务ID集合</p>
 * @method void setResourceIdSet(array $ResourceIdSet) 设置<p>过滤条件，资产绑定的堡垒机服务ID集合</p>
 * @method array getKindSet() 获取<p>可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
 * @method void setKindSet(array $KindSet) 设置<p>可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
 * @method string getManagedAccount() 获取<p>资产是否包含托管账号。1，包含；0，不包含</p>
 * @method void setManagedAccount(string $ManagedAccount) 设置<p>资产是否包含托管账号。1，包含；0，不包含</p>
 * @method string getDepartmentId() 获取<p>过滤条件，可按照部门ID进行过滤</p>
 * @method void setDepartmentId(string $DepartmentId) 设置<p>过滤条件，可按照部门ID进行过滤</p>
 * @method array getAccountIdSet() 获取<p>资产所属云账号id</p>
 * @method void setAccountIdSet(array $AccountIdSet) 设置<p>资产所属云账号id</p>
 * @method array getProviderTypeSet() 获取<p>云厂商类型，1-腾讯云，2-阿里云</p>
 * @method void setProviderTypeSet(array $ProviderTypeSet) 设置<p>云厂商类型，1-腾讯云，2-阿里云</p>
 * @method array getCloudDeviceStatusSet() 获取<p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
 * @method void setCloudDeviceStatusSet(array $CloudDeviceStatusSet) 设置<p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
 * @method array getTagFilters() 获取<p>过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系</p>
 * @method array getFilters() 获取<p>过滤数组。支持的Name：<br>BindingStatus 绑定状态</p>
 * @method void setFilters(array $Filters) 设置<p>过滤数组。支持的Name：<br>BindingStatus 绑定状态</p>
 * @method array getOwnerAppIds() 获取<p>所属成员 AppId</p>
 * @method void setOwnerAppIds(array $OwnerAppIds) 设置<p>所属成员 AppId</p>
 */
class DescribeDevicesRequest extends AbstractModel
{
    /**
     * @var array <p>资产ID集合</p>
     */
    public $IdSet;

    /**
     * @var string <p>资产名或资产IP，模糊查询</p>
     */
    public $Name;

    /**
     * @var string <p>暂未使用</p>
     */
    public $Ip;

    /**
     * @var array <p>地域码集合</p>
     */
    public $ApCodeSet;

    /**
     * @var integer <p>操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
     */
    public $Kind;

    /**
     * @var integer <p>分页偏移位置，默认值为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页条目数量</p><p>取值范围：[0, 500]</p><p>默认值：20</p>
     */
    public $Limit;

    /**
     * @var array <p>有该资产访问权限的用户ID集合</p>
     */
    public $AuthorizedUserIdSet;

    /**
     * @var array <p>过滤条件，资产绑定的堡垒机服务ID集合</p>
     */
    public $ResourceIdSet;

    /**
     * @var array <p>可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
     */
    public $KindSet;

    /**
     * @var string <p>资产是否包含托管账号。1，包含；0，不包含</p>
     */
    public $ManagedAccount;

    /**
     * @var string <p>过滤条件，可按照部门ID进行过滤</p>
     */
    public $DepartmentId;

    /**
     * @var array <p>资产所属云账号id</p>
     */
    public $AccountIdSet;

    /**
     * @var array <p>云厂商类型，1-腾讯云，2-阿里云</p>
     */
    public $ProviderTypeSet;

    /**
     * @var array <p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
     */
    public $CloudDeviceStatusSet;

    /**
     * @var array <p>过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系</p>
     */
    public $TagFilters;

    /**
     * @var array <p>过滤数组。支持的Name：<br>BindingStatus 绑定状态</p>
     */
    public $Filters;

    /**
     * @var array <p>所属成员 AppId</p>
     */
    public $OwnerAppIds;

    /**
     * @param array $IdSet <p>资产ID集合</p>
     * @param string $Name <p>资产名或资产IP，模糊查询</p>
     * @param string $Ip <p>暂未使用</p>
     * @param array $ApCodeSet <p>地域码集合</p>
     * @param integer $Kind <p>操作系统类型, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
     * @param integer $Offset <p>分页偏移位置，默认值为0</p>
     * @param integer $Limit <p>每页条目数量</p><p>取值范围：[0, 500]</p><p>默认值：20</p>
     * @param array $AuthorizedUserIdSet <p>有该资产访问权限的用户ID集合</p>
     * @param array $ResourceIdSet <p>过滤条件，资产绑定的堡垒机服务ID集合</p>
     * @param array $KindSet <p>可提供按照多种类型过滤, 1 - Linux, 2 - Windows, 3 - MySQL, 4 - SQLServer</p>
     * @param string $ManagedAccount <p>资产是否包含托管账号。1，包含；0，不包含</p>
     * @param string $DepartmentId <p>过滤条件，可按照部门ID进行过滤</p>
     * @param array $AccountIdSet <p>资产所属云账号id</p>
     * @param array $ProviderTypeSet <p>云厂商类型，1-腾讯云，2-阿里云</p>
     * @param array $CloudDeviceStatusSet <p>同步的云资产状态，标记同步的资产的状态情况，0-已删除,1-正常,2-已隔离,3-已过期</p>
     * @param array $TagFilters <p>过滤条件，可按照标签键、标签进行过滤。如果同时指定标签键和标签过滤条件，它们之间为“AND”的关系</p>
     * @param array $Filters <p>过滤数组。支持的Name：<br>BindingStatus 绑定状态</p>
     * @param array $OwnerAppIds <p>所属成员 AppId</p>
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
        if (array_key_exists("IdSet",$param) and $param["IdSet"] !== null) {
            $this->IdSet = $param["IdSet"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("ApCodeSet",$param) and $param["ApCodeSet"] !== null) {
            $this->ApCodeSet = $param["ApCodeSet"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("AuthorizedUserIdSet",$param) and $param["AuthorizedUserIdSet"] !== null) {
            $this->AuthorizedUserIdSet = $param["AuthorizedUserIdSet"];
        }

        if (array_key_exists("ResourceIdSet",$param) and $param["ResourceIdSet"] !== null) {
            $this->ResourceIdSet = $param["ResourceIdSet"];
        }

        if (array_key_exists("KindSet",$param) and $param["KindSet"] !== null) {
            $this->KindSet = $param["KindSet"];
        }

        if (array_key_exists("ManagedAccount",$param) and $param["ManagedAccount"] !== null) {
            $this->ManagedAccount = $param["ManagedAccount"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("AccountIdSet",$param) and $param["AccountIdSet"] !== null) {
            $this->AccountIdSet = $param["AccountIdSet"];
        }

        if (array_key_exists("ProviderTypeSet",$param) and $param["ProviderTypeSet"] !== null) {
            $this->ProviderTypeSet = $param["ProviderTypeSet"];
        }

        if (array_key_exists("CloudDeviceStatusSet",$param) and $param["CloudDeviceStatusSet"] !== null) {
            $this->CloudDeviceStatusSet = $param["CloudDeviceStatusSet"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OwnerAppIds",$param) and $param["OwnerAppIds"] !== null) {
            $this->OwnerAppIds = $param["OwnerAppIds"];
        }
    }
}
