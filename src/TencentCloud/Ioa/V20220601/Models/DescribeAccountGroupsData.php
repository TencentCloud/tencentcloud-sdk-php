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
 * 账号分组信息
 *
 * @method string getNamePath() 获取账号分组名全路径，点分格式
 * @method void setNamePath(string $NamePath) 设置账号分组名全路径，点分格式
 * @method array getIdPathArr() 获取账号分组ID全路径，数组格式
 * @method void setIdPathArr(array $IdPathArr) 设置账号分组ID全路径，数组格式
 * @method string getExtraInfo() 获取扩展信息
 * @method void setExtraInfo(string $ExtraInfo) 设置扩展信息
 * @method string getUtime() 获取最后更新时间
 * @method void setUtime(string $Utime) 设置最后更新时间
 * @method integer getParentId() 获取父分组ID
 * @method void setParentId(integer $ParentId) 设置父分组ID
 * @method string getOrgId() 获取源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method void setOrgId(string $OrgId) 设置源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method string getName() 获取分组名称
 * @method void setName(string $Name) 设置分组名称
 * @method integer getId() 获取分组ID
 * @method void setId(integer $Id) 设置分组ID
 * @method string getDescription() 获取分组描述
 * @method void setDescription(string $Description) 设置分组描述
 * @method integer getSource() 获取同步数据源
 * @method void setSource(integer $Source) 设置同步数据源
 * @method string getIdPath() 获取账号分组ID全路径，点分格式
 * @method void setIdPath(string $IdPath) 设置账号分组ID全路径，点分格式
 * @method string getItime() 获取创建时间
 * @method void setItime(string $Itime) 设置创建时间
 * @method string getParentOrgId() 获取父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method void setParentOrgId(string $ParentOrgId) 设置父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
 * @method string getImportType() 获取导入类型
 * @method void setImportType(string $ImportType) 设置导入类型
 * @method string getMiniIamId() 获取miniIAM id
 * @method void setMiniIamId(string $MiniIamId) 设置miniIAM id
 * @method integer getUserTotal() 获取该分组下含子组的所有用户总数
 * @method void setUserTotal(integer $UserTotal) 设置该分组下含子组的所有用户总数
 * @method boolean getIsLeaf() 获取是否叶子节点
 * @method void setIsLeaf(boolean $IsLeaf) 设置是否叶子节点
 * @method boolean getReadOnly() 获取是否该账户的直接权限
 * @method void setReadOnly(boolean $ReadOnly) 设置是否该账户的直接权限
 * @method string getLatestSyncResult() 获取最新一次同步任务的结果
 * @method void setLatestSyncResult(string $LatestSyncResult) 设置最新一次同步任务的结果
 * @method string getLatestSyncTime() 获取最新一次同步任务的结束时间
 * @method void setLatestSyncTime(string $LatestSyncTime) 设置最新一次同步任务的结束时间
 */
class DescribeAccountGroupsData extends AbstractModel
{
    /**
     * @var string 账号分组名全路径，点分格式
     */
    public $NamePath;

    /**
     * @var array 账号分组ID全路径，数组格式
     */
    public $IdPathArr;

    /**
     * @var string 扩展信息
     */
    public $ExtraInfo;

    /**
     * @var string 最后更新时间
     */
    public $Utime;

    /**
     * @var integer 父分组ID
     */
    public $ParentId;

    /**
     * @var string 源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
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
     * @var integer 同步数据源
     */
    public $Source;

    /**
     * @var string 账号分组ID全路径，点分格式
     */
    public $IdPath;

    /**
     * @var string 创建时间
     */
    public $Itime;

    /**
     * @var string 父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
     */
    public $ParentOrgId;

    /**
     * @var string 导入类型
     */
    public $ImportType;

    /**
     * @var string miniIAM id
     */
    public $MiniIamId;

    /**
     * @var integer 该分组下含子组的所有用户总数
     */
    public $UserTotal;

    /**
     * @var boolean 是否叶子节点
     */
    public $IsLeaf;

    /**
     * @var boolean 是否该账户的直接权限
     */
    public $ReadOnly;

    /**
     * @var string 最新一次同步任务的结果
     */
    public $LatestSyncResult;

    /**
     * @var string 最新一次同步任务的结束时间
     */
    public $LatestSyncTime;

    /**
     * @param string $NamePath 账号分组名全路径，点分格式
     * @param array $IdPathArr 账号分组ID全路径，数组格式
     * @param string $ExtraInfo 扩展信息
     * @param string $Utime 最后更新时间
     * @param integer $ParentId 父分组ID
     * @param string $OrgId 源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
     * @param string $Name 分组名称
     * @param integer $Id 分组ID
     * @param string $Description 分组描述
     * @param integer $Source 同步数据源
     * @param string $IdPath 账号分组ID全路径，点分格式
     * @param string $Itime 创建时间
     * @param string $ParentOrgId 父源账号组织ID。使用第三方导入用户源时，记录该分组在源组织架构下的分组ID
     * @param string $ImportType 导入类型
     * @param string $MiniIamId miniIAM id
     * @param integer $UserTotal 该分组下含子组的所有用户总数
     * @param boolean $IsLeaf 是否叶子节点
     * @param boolean $ReadOnly 是否该账户的直接权限
     * @param string $LatestSyncResult 最新一次同步任务的结果
     * @param string $LatestSyncTime 最新一次同步任务的结束时间
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
    }
}
