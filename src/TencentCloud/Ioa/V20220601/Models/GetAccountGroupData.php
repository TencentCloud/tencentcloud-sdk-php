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
 * 账户分组详情响应数据
 *
 * @method string getNamePath() 获取分组Namepath
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamePath(string $NamePath) 设置分组Namepath
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getIdPathArr() 获取分组Id path arr(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdPathArr(array $IdPathArr) 设置分组Id path arr(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExtraInfo() 获取分组扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExtraInfo(string $ExtraInfo) 设置分组扩展信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUtime() 获取最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUtime(string $Utime) 设置最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getParentId() 获取父分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentId(integer $ParentId) 设置父分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrgId() 获取组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrgId(string $OrgId) 设置组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置分组名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getId() 获取分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSource() 获取分组导入源(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSource(integer $Source) 设置分组导入源(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIdPath() 获取Id Path
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIdPath(string $IdPath) 设置Id Path
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItime(string $Itime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getParentOrgId() 获取父组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setParentOrgId(string $ParentOrgId) 设置父组织id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImport() 获取导入信息,json格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImport(string $Import) 设置导入信息,json格式
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getImportEnable() 获取是否开启导入架构
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportEnable(boolean $ImportEnable) 设置是否开启导入架构
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImportType() 获取导入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportType(string $ImportType) 设置导入类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getMiniIamId() 获取miniIAMId，MiniIAM源才有
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMiniIamId(string $MiniIamId) 设置miniIAMId，MiniIAM源才有
注意：此字段可能返回 null，表示取不到有效值。
 */
class GetAccountGroupData extends AbstractModel
{
    /**
     * @var string 分组Namepath
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamePath;

    /**
     * @var array 分组Id path arr(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdPathArr;

    /**
     * @var string 分组扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExtraInfo;

    /**
     * @var string 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Utime;

    /**
     * @var integer 父分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentId;

    /**
     * @var string 组织id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrgId;

    /**
     * @var string 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer 分组导入源(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Source;

    /**
     * @var string Id Path
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IdPath;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Itime;

    /**
     * @var string 父组织id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ParentOrgId;

    /**
     * @var string 导入信息,json格式
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Import;

    /**
     * @var boolean 是否开启导入架构
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportEnable;

    /**
     * @var string 导入类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportType;

    /**
     * @var string miniIAMId，MiniIAM源才有
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MiniIamId;

    /**
     * @param string $NamePath 分组Namepath
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $IdPathArr 分组Id path arr(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExtraInfo 分组扩展信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Utime 最后更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ParentId 父分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrgId 组织id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 分组名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Id 分组id(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Source 分组导入源(只支持32位)
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IdPath Id Path
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Itime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ParentOrgId 父组织id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Import 导入信息,json格式
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ImportEnable 是否开启导入架构
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImportType 导入类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $MiniIamId miniIAMId，MiniIAM源才有
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
        if (array_key_exists("NamePath",$param) and $param["NamePath"] !== null) {
            $this->NamePath = $param["NamePath"];
        }

        if (array_key_exists("IdPathArr",$param) and $param["IdPathArr"] !== null) {
            $this->IdPathArr = $param["IdPathArr"];
        }

        if (array_key_exists("ExtraInfo",$param) and $param["ExtraInfo"] !== null) {
            $this->ExtraInfo = $param["ExtraInfo"];
        }

        if (array_key_exists("Utime",$param) and $param["Utime"] !== null) {
            $this->Utime = $param["Utime"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("OrgId",$param) and $param["OrgId"] !== null) {
            $this->OrgId = $param["OrgId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("IdPath",$param) and $param["IdPath"] !== null) {
            $this->IdPath = $param["IdPath"];
        }

        if (array_key_exists("Itime",$param) and $param["Itime"] !== null) {
            $this->Itime = $param["Itime"];
        }

        if (array_key_exists("ParentOrgId",$param) and $param["ParentOrgId"] !== null) {
            $this->ParentOrgId = $param["ParentOrgId"];
        }

        if (array_key_exists("Import",$param) and $param["Import"] !== null) {
            $this->Import = $param["Import"];
        }

        if (array_key_exists("ImportEnable",$param) and $param["ImportEnable"] !== null) {
            $this->ImportEnable = $param["ImportEnable"];
        }

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("MiniIamId",$param) and $param["MiniIamId"] !== null) {
            $this->MiniIamId = $param["MiniIamId"];
        }
    }
}
