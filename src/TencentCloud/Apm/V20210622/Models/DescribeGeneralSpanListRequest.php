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
 * DescribeGeneralSpanList请求参数结构体
 *
 * @method string getInstanceId() 获取业务系统 ID
 * @method void setInstanceId(string $InstanceId) 设置业务系统 ID
 * @method integer getStartTime() 获取Span 查询开始时间戳（单位：秒）
 * @method void setStartTime(integer $StartTime) 设置Span 查询开始时间戳（单位：秒）
 * @method integer getEndTime() 获取Span 查询结束时间戳（单位：秒）
 * @method void setEndTime(integer $EndTime) 设置Span 查询结束时间戳（单位：秒）
 * @method array getFilters() 获取通用过滤参数
 * @method void setFilters(array $Filters) 设置通用过滤参数
 * @method OrderBy getOrderBy() 获取排序
现支持的 Key 有：

- startTime(开始时间)
- endTime(结束时间)
- duration(响应时间)

现支持的 Value 有：

- desc(降序排序)
- asc(升序排序)
 * @method void setOrderBy(OrderBy $OrderBy) 设置排序
现支持的 Key 有：

- startTime(开始时间)
- endTime(结束时间)
- duration(响应时间)

现支持的 Value 有：

- desc(降序排序)
- asc(升序排序)
 * @method string getBusinessName() 获取业务自身服务名，控制台用户请填写taw
 * @method void setBusinessName(string $BusinessName) 设置业务自身服务名，控制台用户请填写taw
 * @method integer getLimit() 获取单页项目个数，默认为1000，合法取值范围为1～1000
 * @method void setLimit(integer $Limit) 设置单页项目个数，默认为1000，合法取值范围为1～1000
 * @method integer getOffset() 获取分页
 * @method void setOffset(integer $Offset) 设置分页
 */
class DescribeGeneralSpanListRequest extends AbstractModel
{
    /**
     * @var string 业务系统 ID
     */
    public $InstanceId;

    /**
     * @var integer Span 查询开始时间戳（单位：秒）
     */
    public $StartTime;

    /**
     * @var integer Span 查询结束时间戳（单位：秒）
     */
    public $EndTime;

    /**
     * @var array 通用过滤参数
     */
    public $Filters;

    /**
     * @var OrderBy 排序
现支持的 Key 有：

- startTime(开始时间)
- endTime(结束时间)
- duration(响应时间)

现支持的 Value 有：

- desc(降序排序)
- asc(升序排序)
     */
    public $OrderBy;

    /**
     * @var string 业务自身服务名，控制台用户请填写taw
     */
    public $BusinessName;

    /**
     * @var integer 单页项目个数，默认为1000，合法取值范围为1～1000
     */
    public $Limit;

    /**
     * @var integer 分页
     */
    public $Offset;

    /**
     * @param string $InstanceId 业务系统 ID
     * @param integer $StartTime Span 查询开始时间戳（单位：秒）
     * @param integer $EndTime Span 查询结束时间戳（单位：秒）
     * @param array $Filters 通用过滤参数
     * @param OrderBy $OrderBy 排序
现支持的 Key 有：

- startTime(开始时间)
- endTime(结束时间)
- duration(响应时间)

现支持的 Value 有：

- desc(降序排序)
- asc(升序排序)
     * @param string $BusinessName 业务自身服务名，控制台用户请填写taw
     * @param integer $Limit 单页项目个数，默认为1000，合法取值范围为1～1000
     * @param integer $Offset 分页
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
