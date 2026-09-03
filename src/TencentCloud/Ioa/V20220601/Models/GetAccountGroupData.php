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
 * 账号分组详情响应数据
 *
 * @method string getNamePath() 获取<p>分组名称全路径，点分格式</p>
 * @method void setNamePath(string $NamePath) 设置<p>分组名称全路径，点分格式</p>
 * @method array getIdPathArr() 获取<p>分组ID全路径，数组格式</p>
 * @method void setIdPathArr(array $IdPathArr) 设置<p>分组ID全路径，数组格式</p>
 * @method string getExtraInfo() 获取<p>分组扩展信息</p>
 * @method void setExtraInfo(string $ExtraInfo) 设置<p>分组扩展信息</p>
 * @method string getUtime() 获取<p>最后更新时间</p>
 * @method void setUtime(string $Utime) 设置<p>最后更新时间</p>
 * @method integer getParentId() 获取<p>当前分组的父分组ID</p>
 * @method void setParentId(integer $ParentId) 设置<p>当前分组的父分组ID</p>
 * @method string getOrgId() 获取<p>源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系</p>
 * @method void setOrgId(string $OrgId) 设置<p>源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系</p>
 * @method string getName() 获取<p>分组名称</p>
 * @method void setName(string $Name) 设置<p>分组名称</p>
 * @method integer getId() 获取<p>分组ID</p>
 * @method void setId(integer $Id) 设置<p>分组ID</p>
 * @method string getDescription() 获取<p>分组描述</p>
 * @method void setDescription(string $Description) 设置<p>分组描述</p>
 * @method integer getSource() 获取<p>分组导入源(只支持32位)</p>
 * @method void setSource(integer $Source) 设置<p>分组导入源(只支持32位)</p>
 * @method string getIdPath() 获取<p>分组ID全路径，点分格式</p>
 * @method void setIdPath(string $IdPath) 设置<p>分组ID全路径，点分格式</p>
 * @method string getItime() 获取<p>创建时间</p>
 * @method void setItime(string $Itime) 设置<p>创建时间</p>
 * @method string getParentOrgId() 获取<p>父源账号组ID，该字段仅适用于第三方同步的组织架构</p>
 * @method void setParentOrgId(string $ParentOrgId) 设置<p>父源账号组ID，该字段仅适用于第三方同步的组织架构</p>
 * @method string getImport() 获取<p>导入信息,json格式</p>
 * @method void setImport(string $Import) 设置<p>导入信息,json格式</p>
 * @method boolean getImportEnable() 获取<p>是否开启导入架构</p>
 * @method void setImportEnable(boolean $ImportEnable) 设置<p>是否开启导入架构</p>
 * @method string getImportType() 获取<p>导入类型</p>
 * @method void setImportType(string $ImportType) 设置<p>导入类型</p>
 * @method string getMiniIamId() 获取<p>miniIAMId，MiniIAM源才有</p>
 * @method void setMiniIamId(string $MiniIamId) 设置<p>miniIAMId，MiniIAM源才有</p>
 */
class GetAccountGroupData extends AbstractModel
{
    /**
     * @var string <p>分组名称全路径，点分格式</p>
     */
    public $NamePath;

    /**
     * @var array <p>分组ID全路径，数组格式</p>
     */
    public $IdPathArr;

    /**
     * @var string <p>分组扩展信息</p>
     */
    public $ExtraInfo;

    /**
     * @var string <p>最后更新时间</p>
     */
    public $Utime;

    /**
     * @var integer <p>当前分组的父分组ID</p>
     */
    public $ParentId;

    /**
     * @var string <p>源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系</p>
     */
    public $OrgId;

    /**
     * @var string <p>分组名称</p>
     */
    public $Name;

    /**
     * @var integer <p>分组ID</p>
     */
    public $Id;

    /**
     * @var string <p>分组描述</p>
     */
    public $Description;

    /**
     * @var integer <p>分组导入源(只支持32位)</p>
     */
    public $Source;

    /**
     * @var string <p>分组ID全路径，点分格式</p>
     */
    public $IdPath;

    /**
     * @var string <p>创建时间</p>
     */
    public $Itime;

    /**
     * @var string <p>父源账号组ID，该字段仅适用于第三方同步的组织架构</p>
     */
    public $ParentOrgId;

    /**
     * @var string <p>导入信息,json格式</p>
     */
    public $Import;

    /**
     * @var boolean <p>是否开启导入架构</p>
     */
    public $ImportEnable;

    /**
     * @var string <p>导入类型</p>
     */
    public $ImportType;

    /**
     * @var string <p>miniIAMId，MiniIAM源才有</p>
     */
    public $MiniIamId;

    /**
     * @param string $NamePath <p>分组名称全路径，点分格式</p>
     * @param array $IdPathArr <p>分组ID全路径，数组格式</p>
     * @param string $ExtraInfo <p>分组扩展信息</p>
     * @param string $Utime <p>最后更新时间</p>
     * @param integer $ParentId <p>当前分组的父分组ID</p>
     * @param string $OrgId <p>源账号组ID，该字段仅适用于第三方同步的组织架构，通过OrgId-Id构成源组织架构分组ID-现组织架构分组ID映射关系</p>
     * @param string $Name <p>分组名称</p>
     * @param integer $Id <p>分组ID</p>
     * @param string $Description <p>分组描述</p>
     * @param integer $Source <p>分组导入源(只支持32位)</p>
     * @param string $IdPath <p>分组ID全路径，点分格式</p>
     * @param string $Itime <p>创建时间</p>
     * @param string $ParentOrgId <p>父源账号组ID，该字段仅适用于第三方同步的组织架构</p>
     * @param string $Import <p>导入信息,json格式</p>
     * @param boolean $ImportEnable <p>是否开启导入架构</p>
     * @param string $ImportType <p>导入类型</p>
     * @param string $MiniIamId <p>miniIAMId，MiniIAM源才有</p>
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
