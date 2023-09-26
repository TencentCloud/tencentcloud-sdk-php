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
namespace TencentCloud\Bi\V20220105\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 项目信息描述
 *
 * @method integer getId() 获取项目ID
 * @method void setId(integer $Id) 设置项目ID
 * @method string getLogo() 获取项目Logo
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogo(string $Logo) 设置项目Logo
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置项目名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getColorCode() 获取logo底色
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColorCode(string $ColorCode) 设置logo底色
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedUser() 获取创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedUser(string $CreatedUser) 设置创建人
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedAt() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMemberCount() 获取成员个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMemberCount(integer $MemberCount) 设置成员个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageCount() 获取页面个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageCount(integer $PageCount) 设置页面个数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLastModifyName() 获取最后修改报表、简报名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLastModifyName(string $LastModifyName) 设置最后修改报表、简报名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSource() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(string $Source) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getApply() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApply(boolean $Apply) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedUser() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedUser(string $UpdatedUser) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCorpId() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCorpId(string $CorpId) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMark() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMark(string $Mark) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSeed() 获取""
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSeed(string $Seed) 设置""
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAuthList() 获取项目内权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuthList(array $AuthList) 设置项目内权限列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPanelScope() 获取默认看板
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPanelScope(string $PanelScope) 设置默认看板
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsExternalManage() 获取是否被托管
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsExternalManage(boolean $IsExternalManage) 设置是否被托管
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagePlatform() 获取托管平台名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagePlatform(string $ManagePlatform) 设置托管平台名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConfigList() 获取定制化参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfigList(array $ConfigList) 设置定制化参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class Project extends AbstractModel
{
    /**
     * @var integer 项目ID
     */
    public $Id;

    /**
     * @var string 项目Logo
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Logo;

    /**
     * @var string 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string logo底色
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColorCode;

    /**
     * @var string 创建人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedUser;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedAt;

    /**
     * @var integer 成员个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MemberCount;

    /**
     * @var integer 页面个数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageCount;

    /**
     * @var string 最后修改报表、简报名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LastModifyName;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var boolean ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Apply;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedUser;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CorpId;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Mark;

    /**
     * @var string ""
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Seed;

    /**
     * @var array 项目内权限列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuthList;

    /**
     * @var string 默认看板
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PanelScope;

    /**
     * @var boolean 是否被托管
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsExternalManage;

    /**
     * @var string 托管平台名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagePlatform;

    /**
     * @var array 定制化参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConfigList;

    /**
     * @param integer $Id 项目ID
     * @param string $Logo 项目Logo
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 项目名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ColorCode logo底色
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedUser 创建人
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedAt 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MemberCount 成员个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageCount 页面个数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LastModifyName 最后修改报表、简报名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Source ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Apply ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedUser ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CorpId ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Mark ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Seed ""
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AuthList 项目内权限列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PanelScope 默认看板
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsExternalManage 是否被托管
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagePlatform 托管平台名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConfigList 定制化参数
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Logo",$param) and $param["Logo"] !== null) {
            $this->Logo = $param["Logo"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ColorCode",$param) and $param["ColorCode"] !== null) {
            $this->ColorCode = $param["ColorCode"];
        }

        if (array_key_exists("CreatedUser",$param) and $param["CreatedUser"] !== null) {
            $this->CreatedUser = $param["CreatedUser"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("MemberCount",$param) and $param["MemberCount"] !== null) {
            $this->MemberCount = $param["MemberCount"];
        }

        if (array_key_exists("PageCount",$param) and $param["PageCount"] !== null) {
            $this->PageCount = $param["PageCount"];
        }

        if (array_key_exists("LastModifyName",$param) and $param["LastModifyName"] !== null) {
            $this->LastModifyName = $param["LastModifyName"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("Apply",$param) and $param["Apply"] !== null) {
            $this->Apply = $param["Apply"];
        }

        if (array_key_exists("UpdatedUser",$param) and $param["UpdatedUser"] !== null) {
            $this->UpdatedUser = $param["UpdatedUser"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("CorpId",$param) and $param["CorpId"] !== null) {
            $this->CorpId = $param["CorpId"];
        }

        if (array_key_exists("Mark",$param) and $param["Mark"] !== null) {
            $this->Mark = $param["Mark"];
        }

        if (array_key_exists("Seed",$param) and $param["Seed"] !== null) {
            $this->Seed = $param["Seed"];
        }

        if (array_key_exists("AuthList",$param) and $param["AuthList"] !== null) {
            $this->AuthList = $param["AuthList"];
        }

        if (array_key_exists("PanelScope",$param) and $param["PanelScope"] !== null) {
            $this->PanelScope = $param["PanelScope"];
        }

        if (array_key_exists("IsExternalManage",$param) and $param["IsExternalManage"] !== null) {
            $this->IsExternalManage = $param["IsExternalManage"];
        }

        if (array_key_exists("ManagePlatform",$param) and $param["ManagePlatform"] !== null) {
            $this->ManagePlatform = $param["ManagePlatform"];
        }

        if (array_key_exists("ConfigList",$param) and $param["ConfigList"] !== null) {
            $this->ConfigList = [];
            foreach ($param["ConfigList"] as $key => $value){
                $obj = new ProjectConfigList();
                $obj->deserialize($value);
                array_push($this->ConfigList, $obj);
            }
        }
    }
}
