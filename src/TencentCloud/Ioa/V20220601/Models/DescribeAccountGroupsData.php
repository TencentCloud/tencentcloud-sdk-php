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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账户分响应对象集合
 *
 * @method string getItime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItime(string $Itime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取账户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置账户组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIdPathArr() 获取id patch数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdPathArr(array $IdPathArr) 设置id patch数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUserTotal() 获取该分组下用户总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserTotal(integer $UserTotal) 设置该分组下用户总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImportType() 获取导入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportType(string $ImportType) 设置导入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取同步数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置同步数据源
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMiniIamId() 获取miniIAM id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniIamId(string $MiniIamId) 设置miniIAM id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgId() 获取组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgId(string $OrgId) 设置组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getReadOnly() 获取是否该账户的直接权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReadOnly(boolean $ReadOnly) 设置是否该账户的直接权限
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentId() 获取父id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(integer $ParentId) 设置父id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamePath() 获取名称path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamePath(string $NamePath) 设置名称path
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentOrgId() 获取父组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentOrgId(string $ParentOrgId) 设置父组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdPath() 获取id path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdPath(string $IdPath) 设置id path
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取自增id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置自增id
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsLeaf() 获取是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUtime() 获取最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUtime(string $Utime) 设置最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class DescribeAccountGroupsData extends AbstractModel
{
    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Itime;

    /**
     * @var string 账户组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array id patch数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdPathArr;

    /**
     * @var integer 该分组下用户总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserTotal;

    /**
     * @var string 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string 导入类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportType;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 同步数据源
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string miniIAM id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniIamId;

    /**
     * @var string 组织id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgId;

    /**
     * @var boolean 是否该账户的直接权限
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReadOnly;

    /**
     * @var integer 父id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 名称path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamePath;

    /**
     * @var string 父组织id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentOrgId;

    /**
     * @var string id path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdPath;

    /**
     * @var integer 自增id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var boolean 是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLeaf;

    /**
     * @var string 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Utime;

    /**
     * @param string $Itime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 账户组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IdPathArr id patch数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UserTotal 该分组下用户总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo 扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImportType 导入类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 同步数据源
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MiniIamId miniIAM id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgId 组织id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ReadOnly 是否该账户的直接权限
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentId 父id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamePath 名称path
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentOrgId 父组织id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdPath id path
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 自增id
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsLeaf 是否叶子节点
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Utime 最后更新时间
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
        if (array_key_exists("Itime",$param) and $param["Itime"] !== null) {
            $this->Itime = $param["Itime"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IdPathArr",$param) and $param["IdPathArr"] !== null) {
            $this->IdPathArr = $param["IdPathArr"];
        }

        if (array_key_exists("UserTotal",$param) and $param["UserTotal"] !== null) {
            $this->UserTotal = $param["UserTotal"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("MiniIamId",$param) and $param["MiniIamId"] !== null) {
            $this->MiniIamId = $param["MiniIamId"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("NamePath",$param) and $param["NamePath"] !== null) {
            $this->NamePath = $param["NamePath"];
        }

        if (array_key_exists("ParentOrgId",$param) and $param["ParentOrgId"] !== null) {
            $this->ParentOrgId = $param["ParentOrgId"];
        }

        if (array_key_exists("IdPath",$param) and $param["IdPath"] !== null) {
            $this->IdPath = $param["IdPath"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("Utime",$param) and $param["Utime"] !== null) {
            $this->Utime = $param["Utime"];
        }
    }
}
