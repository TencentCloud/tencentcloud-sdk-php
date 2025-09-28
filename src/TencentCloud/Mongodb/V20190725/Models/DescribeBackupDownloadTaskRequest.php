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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBackupDownloadTask请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
 * @method string getBackupName() 获取指定备份文件名，用于过滤指定文件的下载任务。请通过接口 [DescribeDBBackups](https://cloud.tencent.com/document/product/240/38574) 获取备份文件名。
 * @method void setBackupName(string $BackupName) 设置指定备份文件名，用于过滤指定文件的下载任务。请通过接口 [DescribeDBBackups](https://cloud.tencent.com/document/product/240/38574) 获取备份文件名。
 * @method string getStartTime() 获取指定查询时间范围内的任务，StartTime 指定开始时间。若不指定开始时间，则默认不限制开始时间。
 * @method void setStartTime(string $StartTime) 设置指定查询时间范围内的任务，StartTime 指定开始时间。若不指定开始时间，则默认不限制开始时间。
 * @method string getEndTime() 获取指定查询时间范围内的任务，EndTime 指定截止时间。若不指定截止时间，则默认不限制截止时间。
 * @method void setEndTime(string $EndTime) 设置指定查询时间范围内的任务，EndTime 指定截止时间。若不指定截止时间，则默认不限制截止时间。
 * @method integer getLimit() 获取此次查询返回的条数，取值范围为1-100，默认为20。
 * @method void setLimit(integer $Limit) 设置此次查询返回的条数，取值范围为1-100，默认为20。
 * @method integer getOffset() 获取指定此次查询返回的页数，默认为0。
 * @method void setOffset(integer $Offset) 设置指定此次查询返回的页数，默认为0。
 * @method string getOrderBy() 获取排序字段。
- createTime：按照备份下载任务的创建时间排序。默认为 createTime。
- finishTime：按照备份下载任务的完成时间排序。
 * @method void setOrderBy(string $OrderBy) 设置排序字段。
- createTime：按照备份下载任务的创建时间排序。默认为 createTime。
- finishTime：按照备份下载任务的完成时间排序。
 * @method string getOrderByType() 获取排序方式。
- asc：升序排列。
- desc：降序排列。默认为 desc。
 * @method void setOrderByType(string $OrderByType) 设置排序方式。
- asc：升序排列。
- desc：降序排列。默认为 desc。
 * @method array getStatus() 获取指定任务状态，用于过滤下载任务。若不配置该参数，则返回所有状态类型的任务。
- 0：等待执行。
- 1：正在下载。
- 2：下载完成。
- 3：下载失败。
- 4：等待重试。
 * @method void setStatus(array $Status) 设置指定任务状态，用于过滤下载任务。若不配置该参数，则返回所有状态类型的任务。
- 0：等待执行。
- 1：正在下载。
- 2：下载完成。
- 3：下载失败。
- 4：等待重试。
 */
class DescribeBackupDownloadTaskRequest extends AbstractModel
{
    /**
     * @var string 实例ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     */
    public $InstanceId;

    /**
     * @var string 指定备份文件名，用于过滤指定文件的下载任务。请通过接口 [DescribeDBBackups](https://cloud.tencent.com/document/product/240/38574) 获取备份文件名。
     */
    public $BackupName;

    /**
     * @var string 指定查询时间范围内的任务，StartTime 指定开始时间。若不指定开始时间，则默认不限制开始时间。
     */
    public $StartTime;

    /**
     * @var string 指定查询时间范围内的任务，EndTime 指定截止时间。若不指定截止时间，则默认不限制截止时间。
     */
    public $EndTime;

    /**
     * @var integer 此次查询返回的条数，取值范围为1-100，默认为20。
     */
    public $Limit;

    /**
     * @var integer 指定此次查询返回的页数，默认为0。
     */
    public $Offset;

    /**
     * @var string 排序字段。
- createTime：按照备份下载任务的创建时间排序。默认为 createTime。
- finishTime：按照备份下载任务的完成时间排序。
     */
    public $OrderBy;

    /**
     * @var string 排序方式。
- asc：升序排列。
- desc：降序排列。默认为 desc。
     */
    public $OrderByType;

    /**
     * @var array 指定任务状态，用于过滤下载任务。若不配置该参数，则返回所有状态类型的任务。
- 0：等待执行。
- 1：正在下载。
- 2：下载完成。
- 3：下载失败。
- 4：等待重试。
     */
    public $Status;

    /**
     * @param string $InstanceId 实例ID。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。
     * @param string $BackupName 指定备份文件名，用于过滤指定文件的下载任务。请通过接口 [DescribeDBBackups](https://cloud.tencent.com/document/product/240/38574) 获取备份文件名。
     * @param string $StartTime 指定查询时间范围内的任务，StartTime 指定开始时间。若不指定开始时间，则默认不限制开始时间。
     * @param string $EndTime 指定查询时间范围内的任务，EndTime 指定截止时间。若不指定截止时间，则默认不限制截止时间。
     * @param integer $Limit 此次查询返回的条数，取值范围为1-100，默认为20。
     * @param integer $Offset 指定此次查询返回的页数，默认为0。
     * @param string $OrderBy 排序字段。
- createTime：按照备份下载任务的创建时间排序。默认为 createTime。
- finishTime：按照备份下载任务的完成时间排序。
     * @param string $OrderByType 排序方式。
- asc：升序排列。
- desc：降序排列。默认为 desc。
     * @param array $Status 指定任务状态，用于过滤下载任务。若不配置该参数，则返回所有状态类型的任务。
- 0：等待执行。
- 1：正在下载。
- 2：下载完成。
- 3：下载失败。
- 4：等待重试。
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

        if (array_key_exists("BackupName",$param) and $param["BackupName"] !== null) {
            $this->BackupName = $param["BackupName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
