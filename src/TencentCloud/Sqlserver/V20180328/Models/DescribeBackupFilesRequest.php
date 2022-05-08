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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupFiles请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID，形如mssql-njj2mtpl
 * @method void setInstanceId(string $InstanceId) 设置实例ID，形如mssql-njj2mtpl
 * @method string getGroupId() 获取聚合ID, 可通过接口DescribeBackups获取
 * @method void setGroupId(string $GroupId) 设置聚合ID, 可通过接口DescribeBackups获取
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1-100，默认值为20
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页
 * @method string getDatabaseName() 获取按照备份的库名称筛选，不填则不筛选此项
 * @method void setDatabaseName(string $DatabaseName) 设置按照备份的库名称筛选，不填则不筛选此项
 * @method string getOrderBy() 获取列表项排序，目前只按照备份大小排序（desc-降序，asc-升序），默认desc
 * @method void setOrderBy(string $OrderBy) 设置列表项排序，目前只按照备份大小排序（desc-降序，asc-升序），默认desc
 */
class DescribeBackupFilesRequest extends AbstractModel
{
    /**
     * @var string 实例ID，形如mssql-njj2mtpl
     */
    public $InstanceId;

    /**
     * @var string 聚合ID, 可通过接口DescribeBackups获取
     */
    public $GroupId;

    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为20
     */
    public $Limit;

    /**
     * @var integer 分页返回，页编号，默认值为第0页
     */
    public $Offset;

    /**
     * @var string 按照备份的库名称筛选，不填则不筛选此项
     */
    public $DatabaseName;

    /**
     * @var string 列表项排序，目前只按照备份大小排序（desc-降序，asc-升序），默认desc
     */
    public $OrderBy;

    /**
     * @param string $InstanceId 实例ID，形如mssql-njj2mtpl
     * @param string $GroupId 聚合ID, 可通过接口DescribeBackups获取
     * @param integer $Limit 分页返回，每页返回的数目，取值为1-100，默认值为20
     * @param integer $Offset 分页返回，页编号，默认值为第0页
     * @param string $DatabaseName 按照备份的库名称筛选，不填则不筛选此项
     * @param string $OrderBy 列表项排序，目前只按照备份大小排序（desc-降序，asc-升序），默认desc
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

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("DatabaseName",$param) and $param["DatabaseName"] !== null) {
            $this->DatabaseName = $param["DatabaseName"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
