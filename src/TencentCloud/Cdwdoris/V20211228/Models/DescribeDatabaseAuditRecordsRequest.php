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
namespace TencentCloud\Cdwdoris\V20211228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatabaseAuditRecords请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getPageSize() 获取分页
 * @method void setPageSize(integer $PageSize) 设置分页
 * @method integer getPageNum() 获取分页
 * @method void setPageNum(integer $PageNum) 设置分页
 * @method string getOrderType() 获取排序参数
 * @method void setOrderType(string $OrderType) 设置排序参数
 * @method string getUser() 获取用户
 * @method void setUser(string $User) 设置用户
 * @method string getDbName() 获取数据库
 * @method void setDbName(string $DbName) 设置数据库
 * @method string getSqlType() 获取sql类型
 * @method void setSqlType(string $SqlType) 设置sql类型
 * @method string getSql() 获取sql语句
 * @method void setSql(string $Sql) 设置sql语句
 * @method array getUsers() 获取用户 （多选）
 * @method void setUsers(array $Users) 设置用户 （多选）
 * @method array getDbNames() 获取数据库 （多选）
 * @method void setDbNames(array $DbNames) 设置数据库 （多选）
 * @method array getSqlTypes() 获取sql类型 （多选）
 * @method void setSqlTypes(array $SqlTypes) 设置sql类型 （多选）
 * @method array getCatalogs() 获取catalog名称（多选）
 * @method void setCatalogs(array $Catalogs) 设置catalog名称（多选）
 * @method array getIsQuery() 获取是否是查询 
 * @method void setIsQuery(array $IsQuery) 设置是否是查询 
 * @method array getComputeGroups() 获取计算组列表
 * @method void setComputeGroups(array $ComputeGroups) 设置计算组列表
 */
class DescribeDatabaseAuditRecordsRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 分页
     */
    public $PageSize;

    /**
     * @var integer 分页
     */
    public $PageNum;

    /**
     * @var string 排序参数
     */
    public $OrderType;

    /**
     * @var string 用户
     */
    public $User;

    /**
     * @var string 数据库
     */
    public $DbName;

    /**
     * @var string sql类型
     */
    public $SqlType;

    /**
     * @var string sql语句
     */
    public $Sql;

    /**
     * @var array 用户 （多选）
     */
    public $Users;

    /**
     * @var array 数据库 （多选）
     */
    public $DbNames;

    /**
     * @var array sql类型 （多选）
     */
    public $SqlTypes;

    /**
     * @var array catalog名称（多选）
     */
    public $Catalogs;

    /**
     * @var array 是否是查询 
     */
    public $IsQuery;

    /**
     * @var array 计算组列表
     */
    public $ComputeGroups;

    /**
     * @param string $InstanceId 实例ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $PageSize 分页
     * @param integer $PageNum 分页
     * @param string $OrderType 排序参数
     * @param string $User 用户
     * @param string $DbName 数据库
     * @param string $SqlType sql类型
     * @param string $Sql sql语句
     * @param array $Users 用户 （多选）
     * @param array $DbNames 数据库 （多选）
     * @param array $SqlTypes sql类型 （多选）
     * @param array $Catalogs catalog名称（多选）
     * @param array $IsQuery 是否是查询 
     * @param array $ComputeGroups 计算组列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNum",$param) and $param["PageNum"] !== null) {
            $this->PageNum = $param["PageNum"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("DbName",$param) and $param["DbName"] !== null) {
            $this->DbName = $param["DbName"];
        }

        if (array_key_exists("SqlType",$param) and $param["SqlType"] !== null) {
            $this->SqlType = $param["SqlType"];
        }

        if (array_key_exists("Sql",$param) and $param["Sql"] !== null) {
            $this->Sql = $param["Sql"];
        }

        if (array_key_exists("Users",$param) and $param["Users"] !== null) {
            $this->Users = $param["Users"];
        }

        if (array_key_exists("DbNames",$param) and $param["DbNames"] !== null) {
            $this->DbNames = $param["DbNames"];
        }

        if (array_key_exists("SqlTypes",$param) and $param["SqlTypes"] !== null) {
            $this->SqlTypes = $param["SqlTypes"];
        }

        if (array_key_exists("Catalogs",$param) and $param["Catalogs"] !== null) {
            $this->Catalogs = $param["Catalogs"];
        }

        if (array_key_exists("IsQuery",$param) and $param["IsQuery"] !== null) {
            $this->IsQuery = $param["IsQuery"];
        }

        if (array_key_exists("ComputeGroups",$param) and $param["ComputeGroups"] !== null) {
            $this->ComputeGroups = $param["ComputeGroups"];
        }
    }
}
