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
namespace TencentCloud\Sqlserver\V20180328\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupStatistical请求参数结构体
 *
 * @method integer getLimit() 获取分页返回，每页返回的数目，取值为1-100，默认值为100
 * @method void setLimit(integer $Limit) 设置分页返回，每页返回的数目，取值为1-100，默认值为100
 * @method integer getOffset() 获取分页返回，页编号，默认值为第0页。
 * @method void setOffset(integer $Offset) 设置分页返回，页编号，默认值为第0页。
 * @method array getInstanceIdSet() 获取一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl。
 * @method void setInstanceIdSet(array $InstanceIdSet) 设置一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl。
 * @method array getInstanceNameSet() 获取实例名称列表，模糊查询。
 * @method void setInstanceNameSet(array $InstanceNameSet) 设置实例名称列表，模糊查询。
 * @method string getOrderBy() 获取排序字段，默认default，则按照备份空间降序。
default 按照备份空间排序
data 数据备份排序
log 日志备份排序
auto 自动备份排序
manual 手动备份排序
 * @method void setOrderBy(string $OrderBy) 设置排序字段，默认default，则按照备份空间降序。
default 按照备份空间排序
data 数据备份排序
log 日志备份排序
auto 自动备份排序
manual 手动备份排序
 * @method string getOrderByType() 获取默认降序，[desc-降序，asc-升序]。
 * @method void setOrderByType(string $OrderByType) 设置默认降序，[desc-降序，asc-升序]。
 */
class DescribeBackupStatisticalRequest extends AbstractModel
{
    /**
     * @var integer 分页返回，每页返回的数目，取值为1-100，默认值为100
     */
    public $Limit;

    /**
     * @var integer 分页返回，页编号，默认值为第0页。
     */
    public $Offset;

    /**
     * @var array 一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl。
     */
    public $InstanceIdSet;

    /**
     * @var array 实例名称列表，模糊查询。
     */
    public $InstanceNameSet;

    /**
     * @var string 排序字段，默认default，则按照备份空间降序。
default 按照备份空间排序
data 数据备份排序
log 日志备份排序
auto 自动备份排序
manual 手动备份排序
     */
    public $OrderBy;

    /**
     * @var string 默认降序，[desc-降序，asc-升序]。
     */
    public $OrderByType;

    /**
     * @param integer $Limit 分页返回，每页返回的数目，取值为1-100，默认值为100
     * @param integer $Offset 分页返回，页编号，默认值为第0页。
     * @param array $InstanceIdSet 一个或者多个实例ID。实例ID，格式如：mssql-si2823jyl。
     * @param array $InstanceNameSet 实例名称列表，模糊查询。
     * @param string $OrderBy 排序字段，默认default，则按照备份空间降序。
default 按照备份空间排序
data 数据备份排序
log 日志备份排序
auto 自动备份排序
manual 手动备份排序
     * @param string $OrderByType 默认降序，[desc-降序，asc-升序]。
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("InstanceIdSet",$param) and $param["InstanceIdSet"] !== null) {
            $this->InstanceIdSet = $param["InstanceIdSet"];
        }

        if (array_key_exists("InstanceNameSet",$param) and $param["InstanceNameSet"] !== null) {
            $this->InstanceNameSet = $param["InstanceNameSet"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }
    }
}
