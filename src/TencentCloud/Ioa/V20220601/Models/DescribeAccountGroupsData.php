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
 * 账号分组信息
 *
 * @method string getNamePath() 获取<p>账号分组名全路径，点分格式</p>
 * @method void setNamePath(string $NamePath) 设置<p>账号分组名全路径，点分格式</p>
 * @method array getIdPathArr() 获取<p>账号分组ID全路径，数组格式</p>
 * @method void setIdPathArr(array $IdPathArr) 设置<p>账号分组ID全路径，数组格式</p>
 * @method string getExtraInfo() 获取<p>扩展信息</p>
 * @method void setExtraInfo(string $ExtraInfo) 设置<p>扩展信息</p>
 * @method string getUtime() 获取<p>最后更新时间</p>
 * @method void setUtime(string $Utime) 设置<p>最后更新时间</p>
 * @method integer getParentId() 获取<p>父分组ID</p>
 * @method void setParentId(integer $ParentId) 设置<p>父分组ID</p>
 * @method string getOrgId() 获取<p>源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
 * @method void setOrgId(string $OrgId) 设置<p>源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
 * @method string getName() 获取<p>分组名称</p>
 * @method void setName(string $Name) 设置<p>分组名称</p>
 * @method integer getId() 获取<p>分组ID</p>
 * @method void setId(integer $Id) 设置<p>分组ID</p>
 * @method string getDescription() 获取<p>分组描述</p>
 * @method void setDescription(string $Description) 设置<p>分组描述</p>
 * @method integer getSource() 获取<p>同步数据源</p>
 * @method void setSource(integer $Source) 设置<p>同步数据源</p>
 * @method string getIdPath() 获取<p>账号分组ID全路径，点分格式</p>
 * @method void setIdPath(string $IdPath) 设置<p>账号分组ID全路径，点分格式</p>
 * @method string getItime() 获取<p>创建时间</p>
 * @method void setItime(string $Itime) 设置<p>创建时间</p>
 * @method string getParentOrgId() 获取<p>父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
 * @method void setParentOrgId(string $ParentOrgId) 设置<p>父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
 * @method string getImportType() 获取<p>导入类型</p>
 * @method void setImportType(string $ImportType) 设置<p>导入类型</p>
 * @method string getMiniIamId() 获取<p>miniIAM id</p>
 * @method void setMiniIamId(string $MiniIamId) 设置<p>miniIAM id</p>
 * @method integer getUserTotal() 获取<p>该分组下含子组的所有用户总数</p>
 * @method void setUserTotal(integer $UserTotal) 设置<p>该分组下含子组的所有用户总数</p>
 * @method boolean getIsLeaf() 获取<p>是否叶子节点</p>
 * @method void setIsLeaf(boolean $IsLeaf) 设置<p>是否叶子节点</p>
 * @method boolean getReadOnly() 获取<p>是否该账户的直接权限</p>
 * @method void setReadOnly(boolean $ReadOnly) 设置<p>是否该账户的直接权限</p>
 * @method string getLatestSyncResult() 获取<p>最新一次同步任务的结果</p>
 * @method void setLatestSyncResult(string $LatestSyncResult) 设置<p>最新一次同步任务的结果</p>
 * @method string getLatestSyncTime() 获取<p>最新一次同步任务的结束时间</p>
 * @method void setLatestSyncTime(string $LatestSyncTime) 设置<p>最新一次同步任务的结束时间</p>
 * @method array getNamePathArr() 获取<p>分组名称数组</p>
 * @method void setNamePathArr(array $NamePathArr) 设置<p>分组名称数组</p>
 */
class DescribeAccountGroupsData extends AbstractModel
{
    /**
     * @var string <p>账号分组名全路径，点分格式</p>
     */
    public $NamePath;

    /**
     * @var array <p>账号分组ID全路径，数组格式</p>
     */
    public $IdPathArr;

    /**
     * @var string <p>扩展信息</p>
     */
    public $ExtraInfo;

    /**
     * @var string <p>最后更新时间</p>
     */
    public $Utime;

    /**
     * @var integer <p>父分组ID</p>
     */
    public $ParentId;

    /**
     * @var string <p>源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
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
     * @var integer <p>同步数据源</p>
     */
    public $Source;

    /**
     * @var string <p>账号分组ID全路径，点分格式</p>
     */
    public $IdPath;

    /**
     * @var string <p>创建时间</p>
     */
    public $Itime;

    /**
     * @var string <p>父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
     */
    public $ParentOrgId;

    /**
     * @var string <p>导入类型</p>
     */
    public $ImportType;

    /**
     * @var string <p>miniIAM id</p>
     */
    public $MiniIamId;

    /**
     * @var integer <p>该分组下含子组的所有用户总数</p>
     */
    public $UserTotal;

    /**
     * @var boolean <p>是否叶子节点</p>
     */
    public $IsLeaf;

    /**
     * @var boolean <p>是否该账户的直接权限</p>
     */
    public $ReadOnly;

    /**
     * @var string <p>最新一次同步任务的结果</p>
     */
    public $LatestSyncResult;

    /**
     * @var string <p>最新一次同步任务的结束时间</p>
     */
    public $LatestSyncTime;

    /**
     * @var array <p>分组名称数组</p>
     */
    public $NamePathArr;

    /**
     * @param string $NamePath <p>账号分组名全路径，点分格式</p>
     * @param array $IdPathArr <p>账号分组ID全路径，数组格式</p>
     * @param string $ExtraInfo <p>扩展信息</p>
     * @param string $Utime <p>最后更新时间</p>
     * @param integer $ParentId <p>父分组ID</p>
     * @param string $OrgId <p>源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
     * @param string $Name <p>分组名称</p>
     * @param integer $Id <p>分组ID</p>
     * @param string $Description <p>分组描述</p>
     * @param integer $Source <p>同步数据源</p>
     * @param string $IdPath <p>账号分组ID全路径，点分格式</p>
     * @param string $Itime <p>创建时间</p>
     * @param string $ParentOrgId <p>父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID</p>
     * @param string $ImportType <p>导入类型</p>
     * @param string $MiniIamId <p>miniIAM id</p>
     * @param integer $UserTotal <p>该分组下含子组的所有用户总数</p>
     * @param boolean $IsLeaf <p>是否叶子节点</p>
     * @param boolean $ReadOnly <p>是否该账户的直接权限</p>
     * @param string $LatestSyncResult <p>最新一次同步任务的结果</p>
     * @param string $LatestSyncTime <p>最新一次同步任务的结束时间</p>
     * @param array $NamePathArr <p>分组名称数组</p>
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

        if (array_key_exists("ImportType",$param) and $param["ImportType"] !== null) {
            $this->ImportType = $param["ImportType"];
        }

        if (array_key_exists("MiniIamId",$param) and $param["MiniIamId"] !== null) {
            $this->MiniIamId = $param["MiniIamId"];
        }

        if (array_key_exists("UserTotal",$param) and $param["UserTotal"] !== null) {
            $this->UserTotal = $param["UserTotal"];
        }

        if (array_key_exists("IsLeaf",$param) and $param["IsLeaf"] !== null) {
            $this->IsLeaf = $param["IsLeaf"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }

        if (array_key_exists("LatestSyncResult",$param) and $param["LatestSyncResult"] !== null) {
            $this->LatestSyncResult = $param["LatestSyncResult"];
        }

        if (array_key_exists("LatestSyncTime",$param) and $param["LatestSyncTime"] !== null) {
            $this->LatestSyncTime = $param["LatestSyncTime"];
        }

        if (array_key_exists("NamePathArr",$param) and $param["NamePathArr"] !== null) {
            $this->NamePathArr = $param["NamePathArr"];
        }
    }
}
