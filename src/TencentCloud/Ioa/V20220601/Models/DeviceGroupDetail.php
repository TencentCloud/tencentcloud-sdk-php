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
 * @method integer getId() 获取<p>设备组id</p>
 * @method void setId(integer $Id) 设置<p>设备组id</p>
 * @method string getName() 获取<p>设备组名称</p>
 * @method void setName(string $Name) 设置<p>设备组名称</p>
 * @method string getDescription() 获取<p>设备组描述</p>
 * @method void setDescription(string $Description) 设置<p>设备组描述</p>
 * @method integer getParentId() 获取<p>父节点id</p>
 * @method void setParentId(integer $ParentId) 设置<p>父节点id</p>
 * @method string getIdPath() 获取<p>基于id的节点路径</p>
 * @method void setIdPath(string $IdPath) 设置<p>基于id的节点路径</p>
 * @method string getNamePath() 获取<p>基于名称的节点路径</p>
 * @method void setNamePath(string $NamePath) 设置<p>基于名称的节点路径</p>
 * @method integer getLocked() 获取<p>分组锁定状态</p>
 * @method void setLocked(integer $Locked) 设置<p>分组锁定状态</p>
 * @method integer getOsType() 获取<p>系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）</p>
 * @method void setOsType(integer $OsType) 设置<p>系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）</p>
 * @method integer getSort() 获取<p>排序</p>
 * @method void setSort(integer $Sort) 设置<p>排序</p>
 * @method integer getFromAuto() 获取<p>是否自动调整</p>
 * @method void setFromAuto(integer $FromAuto) 设置<p>是否自动调整</p>
 * @method integer getCount() 获取<p>子节点数量</p>
 * @method void setCount(integer $Count) 设置<p>子节点数量</p>
 * @method string getIcon() 获取<p>图标</p>
 * @method void setIcon(string $Icon) 设置<p>图标</p>
 * @method integer getWithIp() 获取<p>是否有ip</p>
 * @method void setWithIp(integer $WithIp) 设置<p>是否有ip</p>
 * @method boolean getHasIp() 获取<p>是否有组ip</p>
 * @method void setHasIp(boolean $HasIp) 设置<p>是否有组ip</p>
 * @method boolean getIsLeaf() 获取<p>是否是叶子节点</p>
 * @method void setIsLeaf(boolean $IsLeaf) 设置<p>是否是叶子节点</p>
 * @method boolean getReadOnly() 获取<p>是否只读</p>
 * @method void setReadOnly(boolean $ReadOnly) 设置<p>是否只读</p>
 * @method integer getBindAccount() 获取<p>对应绑定的账号id</p>
 * @method void setBindAccount(integer $BindAccount) 设置<p>对应绑定的账号id</p>
 * @method string getBindAccountName() 获取<p>绑定账号的用户名</p>
 * @method void setBindAccountName(string $BindAccountName) 设置<p>绑定账号的用户名</p>
 */
class DeviceGroupDetail extends AbstractModel
{
    /**
     * @var integer <p>设备组id</p>
     */
    public $Id;

    /**
     * @var string <p>设备组名称</p>
     */
    public $Name;

    /**
     * @var string <p>设备组描述</p>
     */
    public $Description;

    /**
     * @var integer <p>父节点id</p>
     */
    public $ParentId;

    /**
     * @var string <p>基于id的节点路径</p>
     */
    public $IdPath;

    /**
     * @var string <p>基于名称的节点路径</p>
     */
    public $NamePath;

    /**
     * @var integer <p>分组锁定状态</p>
     */
    public $Locked;

    /**
     * @var integer <p>系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）</p>
     */
    public $OsType;

    /**
     * @var integer <p>排序</p>
     */
    public $Sort;

    /**
     * @var integer <p>是否自动调整</p>
     */
    public $FromAuto;

    /**
     * @var integer <p>子节点数量</p>
     */
    public $Count;

    /**
     * @var string <p>图标</p>
     */
    public $Icon;

    /**
     * @var integer <p>是否有ip</p>
     */
    public $WithIp;

    /**
     * @var boolean <p>是否有组ip</p>
     */
    public $HasIp;

    /**
     * @var boolean <p>是否是叶子节点</p>
     */
    public $IsLeaf;

    /**
     * @var boolean <p>是否只读</p>
     */
    public $ReadOnly;

    /**
     * @var integer <p>对应绑定的账号id</p>
     */
    public $BindAccount;

    /**
     * @var string <p>绑定账号的用户名</p>
     */
    public $BindAccountName;

    /**
     * @param integer $Id <p>设备组id</p>
     * @param string $Name <p>设备组名称</p>
     * @param string $Description <p>设备组描述</p>
     * @param integer $ParentId <p>父节点id</p>
     * @param string $IdPath <p>基于id的节点路径</p>
     * @param string $NamePath <p>基于名称的节点路径</p>
     * @param integer $Locked <p>分组锁定状态</p>
     * @param integer $OsType <p>系统类型（0: win，1：linux，2: mac，4：android，5：ios   ）</p>
     * @param integer $Sort <p>排序</p>
     * @param integer $FromAuto <p>是否自动调整</p>
     * @param integer $Count <p>子节点数量</p>
     * @param string $Icon <p>图标</p>
     * @param integer $WithIp <p>是否有ip</p>
     * @param boolean $HasIp <p>是否有组ip</p>
     * @param boolean $IsLeaf <p>是否是叶子节点</p>
     * @param boolean $ReadOnly <p>是否只读</p>
     * @param integer $BindAccount <p>对应绑定的账号id</p>
     * @param string $BindAccountName <p>绑定账号的用户名</p>
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
