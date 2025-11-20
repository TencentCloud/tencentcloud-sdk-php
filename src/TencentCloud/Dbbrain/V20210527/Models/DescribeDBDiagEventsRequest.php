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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDBDiagEvents请求参数结构体
 *
 * @method string getStartTime() 获取开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method void setStartTime(string $StartTime) 设置开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method string getEndTime() 获取结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method void setEndTime(string $EndTime) 设置结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
 * @method array getSeverities() 获取风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。
 * @method void setSeverities(array $Severities) 设置风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。
 * @method array getInstanceIds() 获取实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
 * @method void setInstanceIds(array $InstanceIds) 设置实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
 * @method string getProduct() 获取服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
 * @method integer getOffset() 获取偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认0。
 * @method integer getLimit() 获取返回数量，默认20，最大值为50。
 * @method void setLimit(integer $Limit) 设置返回数量，默认20，最大值为50。
 */
class DescribeDBDiagEventsRequest extends AbstractModel
{
    /**
     * @var string 开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
     */
    public $StartTime;

    /**
     * @var string 结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
     */
    public $EndTime;

    /**
     * @var array 风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。
     */
    public $Severities;

    /**
     * @var array 实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
     */
    public $InstanceIds;

    /**
     * @var string 服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
     */
    public $Product;

    /**
     * @var integer 偏移量，默认0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认20，最大值为50。
     */
    public $Limit;

    /**
     * @param string $StartTime 开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。
     * @param string $EndTime 结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。
     * @param array $Severities 风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。
     * @param array $InstanceIds 实例ID列表。可通过 [DescribeDiagDBInstances](https://cloud.tencent.com/document/api/1130/57798) 接口获取。
查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&Shard实例ID，如：dcdbt-157xxxk&shard-qxxxx
     * @param string $Product 服务产品类型，支持值包括："mysql" - 云数据库 MySQL，"redis" - 云数据库 Redis，"mariadb"-数据库mariadb    默认为"mysql"。
     * @param integer $Offset 偏移量，默认0。
     * @param integer $Limit 返回数量，默认20，最大值为50。
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Severities",$param) and $param["Severities"] !== null) {
            $this->Severities = $param["Severities"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
