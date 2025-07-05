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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportResourcePackageDeductDetails请求参数结构体
 *
 * @method string getPackageId() 获取需要导出的资源包ID
 * @method void setPackageId(string $PackageId) 设置需要导出的资源包ID
 * @method array getClusterIds() 获取使用资源包容量的cynos集群ID
 * @method void setClusterIds(array $ClusterIds) 设置使用资源包容量的cynos集群ID
 * @method string getOrderBy() 获取排序字段，目前支持：createTime（资源包被抵扣时间），successDeductSpec（资源包抵扣量）
 * @method void setOrderBy(string $OrderBy) 设置排序字段，目前支持：createTime（资源包被抵扣时间），successDeductSpec（资源包抵扣量）
 * @method string getOrderByType() 获取排序类型，支持ASC、DESC、asc、desc
 * @method void setOrderByType(string $OrderByType) 设置排序类型，支持ASC、DESC、asc、desc
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getLimit() 获取单次最大导出数据行数，目前最大支持2000行
 * @method void setLimit(string $Limit) 设置单次最大导出数据行数，目前最大支持2000行
 * @method string getOffset() 获取偏移量页数
 * @method void setOffset(string $Offset) 设置偏移量页数
 * @method string getFileType() 获取导出数据格式，目前仅支持csv格式，留作扩展
 * @method void setFileType(string $FileType) 设置导出数据格式，目前仅支持csv格式，留作扩展
 */
class ExportResourcePackageDeductDetailsRequest extends AbstractModel
{
    /**
     * @var string 需要导出的资源包ID
     */
    public $PackageId;

    /**
     * @var array 使用资源包容量的cynos集群ID
     */
    public $ClusterIds;

    /**
     * @var string 排序字段，目前支持：createTime（资源包被抵扣时间），successDeductSpec（资源包抵扣量）
     */
    public $OrderBy;

    /**
     * @var string 排序类型，支持ASC、DESC、asc、desc
     */
    public $OrderByType;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 单次最大导出数据行数，目前最大支持2000行
     */
    public $Limit;

    /**
     * @var string 偏移量页数
     */
    public $Offset;

    /**
     * @var string 导出数据格式，目前仅支持csv格式，留作扩展
     */
    public $FileType;

    /**
     * @param string $PackageId 需要导出的资源包ID
     * @param array $ClusterIds 使用资源包容量的cynos集群ID
     * @param string $OrderBy 排序字段，目前支持：createTime（资源包被抵扣时间），successDeductSpec（资源包抵扣量）
     * @param string $OrderByType 排序类型，支持ASC、DESC、asc、desc
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Limit 单次最大导出数据行数，目前最大支持2000行
     * @param string $Offset 偏移量页数
     * @param string $FileType 导出数据格式，目前仅支持csv格式，留作扩展
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderByType",$param) and $param["OrderByType"] !== null) {
            $this->OrderByType = $param["OrderByType"];
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

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }
    }
}
