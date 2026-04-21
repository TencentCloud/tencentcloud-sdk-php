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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGeneralOTSpanList请求参数结构体
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method integer getStartTime() 获取<p>Span 查询开始时间戳（单位：秒）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>Span 查询开始时间戳（单位：秒）</p>
 * @method integer getEndTime() 获取<p>Span 查询结束时间戳（单位：秒）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>Span 查询结束时间戳（单位：秒）</p>
 * @method array getFilters() 获取<p>通用过滤参数 支持的过滤key如service.name</p>
 * @method void setFilters(array $Filters) 设置<p>通用过滤参数 支持的过滤key如service.name</p>
 * @method OrderBy getOrderBy() 获取<p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
 * @method void setOrderBy(OrderBy $OrderBy) 设置<p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
 * @method string getBusinessName() 获取<p>业务自身服务名，控制台用户请填写taw</p>
 * @method void setBusinessName(string $BusinessName) 设置<p>业务自身服务名，控制台用户请填写taw</p>
 * @method integer getLimit() 获取<p>单页项目个数，默认为10000，合法取值范围为0～10000</p>
 * @method void setLimit(integer $Limit) 设置<p>单页项目个数，默认为10000，合法取值范围为0～10000</p>
 * @method integer getOffset() 获取<p>分页</p>
 * @method void setOffset(integer $Offset) 设置<p>分页</p>
 */
class DescribeGeneralOTSpanListRequest extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>Span 查询开始时间戳（单位：秒）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>Span 查询结束时间戳（单位：秒）</p>
     */
    public $EndTime;

    /**
     * @var array <p>通用过滤参数 支持的过滤key如service.name</p>
     */
    public $Filters;

    /**
     * @var OrderBy <p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
     */
    public $OrderBy;

    /**
     * @var string <p>业务自身服务名，控制台用户请填写taw</p>
     */
    public $BusinessName;

    /**
     * @var integer <p>单页项目个数，默认为10000，合法取值范围为0～10000</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页</p>
     */
    public $Offset;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param integer $StartTime <p>Span 查询开始时间戳（单位：秒）</p>
     * @param integer $EndTime <p>Span 查询结束时间戳（单位：秒）</p>
     * @param array $Filters <p>通用过滤参数 支持的过滤key如service.name</p>
     * @param OrderBy $OrderBy <p>排序<br>现支持的 Key 有：</p><ul><li>startTime(开始时间)</li><li>endTime(结束时间)</li><li>duration(响应时间)</li></ul><p>现支持的 Value 有：</p><ul><li>desc(降序排序)</li><li>asc(升序排序)</li></ul>
     * @param string $BusinessName <p>业务自身服务名，控制台用户请填写taw</p>
     * @param integer $Limit <p>单页项目个数，默认为10000，合法取值范围为0～10000</p>
     * @param integer $Offset <p>分页</p>
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = new OrderBy();
            $this->OrderBy->deserialize($param["OrderBy"]);
        }

        if (array_key_exists("BusinessName",$param) and $param["BusinessName"] !== null) {
            $this->BusinessName = $param["BusinessName"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
