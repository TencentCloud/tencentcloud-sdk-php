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
 * ioa账号组
 *
 * @method integer getId() 获取账号组id
 * @method void setId(integer $Id) 设置账号组id
 * @method string getName() 获取账号组名称
 * @method void setName(string $Name) 设置账号组名称
 * @method string getIdPath() 获取账号组id路径
 * @method void setIdPath(string $IdPath) 设置账号组id路径
 * @method string getNamePath() 获取账号组名称路径
 * @method void setNamePath(string $NamePath) 设置账号组名称路径
 * @method integer getParentId() 获取父账号组id
 * @method void setParentId(integer $ParentId) 设置父账号组id
 * @method integer getSource() 获取账号组来源
 * @method void setSource(integer $Source) 设置账号组来源
 * @method integer getUserTotal() 获取账号组下用户总数
 * @method void setUserTotal(integer $UserTotal) 设置账号组下用户总数
 * @method boolean getIsLeaf() 获取是否叶子节点
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否叶子节点
 * @method string getImportType() 获取账号组导入类型
 * @method void setImportType(string $ImportType) 设置账号组导入类型
 * @method string getDescription() 获取账号组描述
 * @method void setDescription(string $Description) 设置账号组描述
 * @method string getParentOrgId() 获取父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method void setParentOrgId(string $ParentOrgId) 设置父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method string getOrgId() 获取源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method void setOrgId(string $OrgId) 设置源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method integer getStatus() 获取账号组是否已经接入，0表示未接入，1表示接入
 * @method void setStatus(integer $Status) 设置账号组是否已经接入，0表示未接入，1表示接入
 */
class AccountGroup extends AbstractModel
{
    /**
     * @var integer 账号组id
     */
    public $Id;

    /**
     * @var string 账号组名称
     */
    public $Name;

    /**
     * @var string 账号组id路径
     */
    public $IdPath;

    /**
     * @var string 账号组名称路径
     */
    public $NamePath;

    /**
     * @var integer 父账号组id
     */
    public $ParentId;

    /**
     * @var integer 账号组来源
     */
    public $Source;

    /**
     * @var integer 账号组下用户总数
     */
    public $UserTotal;

    /**
     * @var boolean 是否叶子节点
     */
    public $IsLeaf;

    /**
     * @var string 账号组导入类型
     */
    public $ImportType;

    /**
     * @var string 账号组描述
     */
    public $Description;

    /**
     * @var string 父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
     */
    public $ParentOrgId;

    /**
     * @var string 源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
     */
    public $OrgId;

    /**
     * @var integer 账号组是否已经接入，0表示未接入，1表示接入
     */
    public $Status;

    /**
     * @param integer $Id 账号组id
     * @param string $Name 账号组名称
     * @param string $IdPath 账号组id路径
     * @param string $NamePath 账号组名称路径
     * @param integer $ParentId 父账号组id
     * @param integer $Source 账号组来源
     * @param integer $UserTotal 账号组下用户总数
     * @param boolean $IsLeaf 是否叶子节点
     * @param string $ImportType 账号组导入类型
     * @param string $Description 账号组描述
     * @param string $ParentOrgId 父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
     * @param string $OrgId 源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
     * @param integer $Status 账号组是否已经接入，0表示未接入，1表示接入
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

        if (array_key_exists("IdPath",$param) and $param["IdPath"] !== null) {
            $this->IdPath = $param["IdPath"];
        }

        if (array_key_exists("NamePath",$param) and $param["NamePath"] !== null) {
            $this->NamePath = $param["NamePath"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("UserTotal",$param) and $param["UserTotal"] !== null) {
            $this->UserTotal = $param["UserTotal"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ParentOrgId",$param) and $param["ParentOrgId"] !== null) {
            $this->ParentOrgId = $param["ParentOrgId"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
