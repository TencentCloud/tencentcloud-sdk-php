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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回的数组列表
 *
 * @method integer getId() 获取设备组id
 * @method void setId(integer $Id) 设置设备组id
 * @method string getName() 获取设备组名称
 * @method void setName(string $Name) 设置设备组名称
 * @method string getDescription() 获取设备组描述
 * @method void setDescription(string $Description) 设置设备组描述
 * @method integer getParentId() 获取父节点id
 * @method void setParentId(integer $ParentId) 设置父节点id
 * @method string getIdPath() 获取基于id的节点路径
 * @method void setIdPath(string $IdPath) 设置基于id的节点路径
 * @method string getNamePath() 获取基于名称的节点路径
 * @method void setNamePath(string $NamePath) 设置基于名称的节点路径
 * @method integer getLocked() 获取分组锁定状态
 * @method void setLocked(integer $Locked) 设置分组锁定状态
 * @method integer getOsType() 获取系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）
 * @method void setOsType(integer $OsType) 设置系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）
 * @method integer getSort() 获取排序
 * @method void setSort(integer $Sort) 设置排序
 * @method integer getFromAuto() 获取是否自动调整
 * @method void setFromAuto(integer $FromAuto) 设置是否自动调整
 * @method integer getCount() 获取子节点数量
 * @method void setCount(integer $Count) 设置子节点数量
 * @method string getIcon() 获取图标
 * @method void setIcon(string $Icon) 设置图标
 * @method integer getWithIp() 获取是否有ip
 * @method void setWithIp(integer $WithIp) 设置是否有ip
 * @method boolean getHasIp() 获取是否有组ip
 * @method void setHasIp(boolean $HasIp) 设置是否有组ip
 * @method boolean getIsLeaf() 获取是否是叶子节点
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否是叶子节点
 * @method boolean getReadOnly() 获取是否只读
 * @method void setReadOnly(boolean $ReadOnly) 设置是否只读
 * @method integer getBindAccount() 获取对应绑定的账号id
 * @method void setBindAccount(integer $BindAccount) 设置对应绑定的账号id
 * @method string getBindAccountName() 获取绑定账号的用户名
 * @method void setBindAccountName(string $BindAccountName) 设置绑定账号的用户名
 */
class DeviceGroupDetail extends AbstractModel
{
    /**
     * @var integer 设备组id
     */
    public $Id;

    /**
     * @var string 设备组名称
     */
    public $Name;

    /**
     * @var string 设备组描述
     */
    public $Description;

    /**
     * @var integer 父节点id
     */
    public $ParentId;

    /**
     * @var string 基于id的节点路径
     */
    public $IdPath;

    /**
     * @var string 基于名称的节点路径
     */
    public $NamePath;

    /**
     * @var integer 分组锁定状态
     */
    public $Locked;

    /**
     * @var integer 系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）
     */
    public $OsType;

    /**
     * @var integer 排序
     */
    public $Sort;

    /**
     * @var integer 是否自动调整
     */
    public $FromAuto;

    /**
     * @var integer 子节点数量
     */
    public $Count;

    /**
     * @var string 图标
     */
    public $Icon;

    /**
     * @var integer 是否有ip
     */
    public $WithIp;

    /**
     * @var boolean 是否有组ip
     */
    public $HasIp;

    /**
     * @var boolean 是否是叶子节点
     */
    public $IsLeaf;

    /**
     * @var boolean 是否只读
     */
    public $ReadOnly;

    /**
     * @var integer 对应绑定的账号id
     */
    public $BindAccount;

    /**
     * @var string 绑定账号的用户名
     */
    public $BindAccountName;

    /**
     * @param integer $Id 设备组id
     * @param string $Name 设备组名称
     * @param string $Description 设备组描述
     * @param integer $ParentId 父节点id
     * @param string $IdPath 基于id的节点路径
     * @param string $NamePath 基于名称的节点路径
     * @param integer $Locked 分组锁定状态
     * @param integer $OsType 系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）
     * @param integer $Sort 排序
     * @param integer $FromAuto 是否自动调整
     * @param integer $Count 子节点数量
     * @param string $Icon 图标
     * @param integer $WithIp 是否有ip
     * @param boolean $HasIp 是否有组ip
     * @param boolean $IsLeaf 是否是叶子节点
     * @param boolean $ReadOnly 是否只读
     * @param integer $BindAccount 对应绑定的账号id
     * @param string $BindAccountName 绑定账号的用户名
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("IdPath",$param) and $param["IdPath"] !== null) {
            $this->IdPath = $param["IdPath"];
        }

        if (array_key_exists("NamePath",$param) and $param["NamePath"] !== null) {
            $this->NamePath = $param["NamePath"];
        }

        if (array_key_exists("Locked",$param) and $param["Locked"] !== null) {
            $this->Locked = $param["Locked"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }

        if (array_key_exists("FromAuto",$param) and $param["FromAuto"] !== null) {
            $this->FromAuto = $param["FromAuto"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("WithIp",$param) and $param["WithIp"] !== null) {
            $this->WithIp = $param["WithIp"];
        }

        if (array_key_exists("HasIp",$param) and $param["HasIp"] !== null) {
            $this->HasIp = $param["HasIp"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("BindAccount",$param) and $param["BindAccount"] !== null) {
            $this->BindAccount = $param["BindAccount"];
        }

        if (array_key_exists("BindAccountName",$param) and $param["BindAccountName"] !== null) {
            $this->BindAccountName = $param["BindAccountName"];
        }
    }
}
