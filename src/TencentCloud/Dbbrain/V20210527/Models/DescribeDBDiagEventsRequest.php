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
 * @method string getStartTime() 获取<p>开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。</p>
 * @method void setStartTime(string $StartTime) 设置<p>开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。</p>
 * @method string getEndTime() 获取<p>结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。</p>
 * @method void setEndTime(string $EndTime) 设置<p>结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。</p>
 * @method array getSeverities() 获取<p>风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。</p>
 * @method void setSeverities(array $Severities) 设置<p>风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。</p>
 * @method array getInstanceIds() 获取<p>实例ID列表。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<br>查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&amp;Shard实例ID，如：dcdbt-157xxxk&amp;shard-qxxxx</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>实例ID列表。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<br>查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&amp;Shard实例ID，如：dcdbt-157xxxk&amp;shard-qxxxx</p>
 * @method string getProduct() 获取<p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;mongodb&quot;- 云数据库MongoDB, &quot;postgres&quot;-云数据库postgres,云数据库&quot;redis&quot; - 云数据库 Redis，&quot;mariadb&quot;-数据库mariadb，&quot;cynosdb&quot;-数据库 TDSQL-C, &quot;dcdb&quot;-数据库TDSQL MySQL    默认为&quot;mysql&quot;。</p>
 * @method void setProduct(string $Product) 设置<p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;mongodb&quot;- 云数据库MongoDB, &quot;postgres&quot;-云数据库postgres,云数据库&quot;redis&quot; - 云数据库 Redis，&quot;mariadb&quot;-数据库mariadb，&quot;cynosdb&quot;-数据库 TDSQL-C, &quot;dcdb&quot;-数据库TDSQL MySQL    默认为&quot;mysql&quot;。</p>
 * @method integer getOffset() 获取<p>偏移量，默认0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认0。</p>
 * @method integer getLimit() 获取<p>返回数量，默认20，最大值为50。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认20，最大值为50。</p>
 */
class DescribeDBDiagEventsRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。</p>
     */
    public $StartTime;

    /**
     * @var string <p>结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。</p>
     */
    public $EndTime;

    /**
     * @var array <p>风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。</p>
     */
    public $Severities;

    /**
     * @var array <p>实例ID列表。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<br>查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&amp;Shard实例ID，如：dcdbt-157xxxk&amp;shard-qxxxx</p>
     */
    public $InstanceIds;

    /**
     * @var string <p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;mongodb&quot;- 云数据库MongoDB, &quot;postgres&quot;-云数据库postgres,云数据库&quot;redis&quot; - 云数据库 Redis，&quot;mariadb&quot;-数据库mariadb，&quot;cynosdb&quot;-数据库 TDSQL-C, &quot;dcdb&quot;-数据库TDSQL MySQL    默认为&quot;mysql&quot;。</p>
     */
    public $Product;

    /**
     * @var integer <p>偏移量，默认0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认20，最大值为50。</p>
     */
    public $Limit;

    /**
     * @param string $StartTime <p>开始时间，如“2021-05-27 00:00:00”，支持的最早查询时间为当前时间的前30天。</p>
     * @param string $EndTime <p>结束时间，如“2021-05-27 01:00:00”，支持的最早查询时间为当前时间的前30天。</p>
     * @param array $Severities <p>风险等级列表，取值按影响程度从高至低分别为：1 - 致命、2 -严重、3 - 告警、4 - 提示、5 -健康。</p>
     * @param array $InstanceIds <p>实例ID列表。可通过 <a href="https://cloud.tencent.com/document/api/1130/57798">DescribeDiagDBInstances</a> 接口获取。<br>查询TDSQL MySQL分布式实例:Instanceld：填写集群ID&amp;Shard实例ID，如：dcdbt-157xxxk&amp;shard-qxxxx</p>
     * @param string $Product <p>服务产品类型，支持值包括：&quot;mysql&quot; - 云数据库 MySQL，&quot;mongodb&quot;- 云数据库MongoDB, &quot;postgres&quot;-云数据库postgres,云数据库&quot;redis&quot; - 云数据库 Redis，&quot;mariadb&quot;-数据库mariadb，&quot;cynosdb&quot;-数据库 TDSQL-C, &quot;dcdb&quot;-数据库TDSQL MySQL    默认为&quot;mysql&quot;。</p>
     * @param integer $Offset <p>偏移量，默认0。</p>
     * @param integer $Limit <p>返回数量，默认20，最大值为50。</p>
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
