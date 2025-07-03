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
 * 账号分组详情响应数据
 *
 * @method string getNamePath() 获取分组名称全路径，点分格式
 * @method void setNamePath(string $NamePath) 设置分组名称全路径，点分格式
 * @method array getIdPathArr() 获取分组ID全路径，数组格式
 * @method void setIdPathArr(array $IdPathArr) 设置分组ID全路径，数组格式
 * @method string getExtraInfo() 获取分组扩展信息
 * @method void setExtraInfo(string $ExtraInfo) 设置分组扩展信息
 * @method string getUtime() 获取最后更新时间
 * @method void setUtime(string $Utime) 设置最后更新时间
 * @method integer getParentId() 获取当前分组的父分组ID
 * @method void setParentId(integer $ParentId) 设置当前分组的父分组ID
 * @method string getOrgId() 获取源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系
 * @method void setOrgId(string $OrgId) 设置源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系
 * @method string getName() 获取分组名称
 * @method void setName(string $Name) 设置分组名称
 * @method integer getId() 获取分组ID
 * @method void setId(integer $Id) 设置分组ID
 * @method string getDescription() 获取分组描述
 * @method void setDescription(string $Description) 设置分组描述
 * @method integer getSource() 获取分组导入源(只支持32位)
 * @method void setSource(integer $Source) 设置分组导入源(只支持32位)
 * @method string getIdPath() 获取分组ID全路径，点分格式
 * @method void setIdPath(string $IdPath) 设置分组ID全路径，点分格式
 * @method string getItime() 获取创建时间
 * @method void setItime(string $Itime) 设置创建时间
 * @method string getParentOrgId() 获取父源账号组ID，该字段仅适用于第三方同步的组织架构
 * @method void setParentOrgId(string $ParentOrgId) 设置父源账号组ID，该字段仅适用于第三方同步的组织架构
 * @method string getImport() 获取导入信息,json格式
 * @method void setImport(string $Import) 设置导入信息,json格式
 * @method boolean getImportEnable() 获取是否开启导入架构
 * @method void setImportEnable(boolean $ImportEnable) 设置是否开启导入架构
 * @method string getImportType() 获取导入类型
 * @method void setImportType(string $ImportType) 设置导入类型
 * @method string getMiniIamId() 获取miniIAMId，MiniIAM源才有
 * @method void setMiniIamId(string $MiniIamId) 设置miniIAMId，MiniIAM源才有
 */
class GetAccountGroupData extends AbstractModel
{
    /**
     * @var string 分组名称全路径，点分格式
     */
    public $NamePath;

    /**
     * @var array 分组ID全路径，数组格式
     */
    public $IdPathArr;

    /**
     * @var string 分组扩展信息
     */
    public $ExtraInfo;

    /**
     * @var string 最后更新时间
     */
    public $Utime;

    /**
     * @var integer 当前分组的父分组ID
     */
    public $ParentId;

    /**
     * @var string 源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系
     */
    public $OrgId;

    /**
     * @var string 分组名称
     */
    public $Name;

    /**
     * @var integer 分组ID
     */
    public $Id;

    /**
     * @var string 分组描述
     */
    public $Description;

    /**
     * @var integer 分组导入源(只支持32位)
     */
    public $Source;

    /**
     * @var string 分组ID全路径，点分格式
     */
    public $IdPath;

    /**
     * @var string 创建时间
     */
    public $Itime;

    /**
     * @var string 父源账号组ID，该字段仅适用于第三方同步的组织架构
     */
    public $ParentOrgId;

    /**
     * @var string 导入信息,json格式
     */
    public $Import;

    /**
     * @var boolean 是否开启导入架构
     */
    public $ImportEnable;

    /**
     * @var string 导入类型
     */
    public $ImportType;

    /**
     * @var string miniIAMId，MiniIAM源才有
     */
    public $MiniIamId;

    /**
     * @param string $NamePath 分组名称全路径，点分格式
     * @param array $IdPathArr 分组ID全路径，数组格式
     * @param string $ExtraInfo 分组扩展信息
     * @param string $Utime 最后更新时间
     * @param integer $ParentId 当前分组的父分组ID
     * @param string $OrgId 源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系
     * @param string $Name 分组名称
     * @param integer $Id 分组ID
     * @param string $Description 分组描述
     * @param integer $Source 分组导入源(只支持32位)
     * @param string $IdPath 分组ID全路径，点分格式
     * @param string $Itime 创建时间
     * @param string $ParentOrgId 父源账号组ID，该字段仅适用于第三方同步的组织架构
     * @param string $Import 导入信息,json格式
     * @param boolean $ImportEnable 是否开启导入架构
     * @param string $ImportType 导入类型
     * @param string $MiniIamId miniIAMId，MiniIAM源才有
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
