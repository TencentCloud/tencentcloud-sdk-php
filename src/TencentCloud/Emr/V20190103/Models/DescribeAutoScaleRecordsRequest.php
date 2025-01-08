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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAutoScaleRecords请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method array getFilters() 获取记录过滤参数，目前仅能为“StartTime”,“EndTime”和“StrategyName”、ActionStatus、ScaleAction。
StartTime和EndTime支持2006-01-02 15:04:05 或者2006/01/02 15:04:05的时间格式
ActionStatus：0:INITED,1:SUCCESS, 2:FAILED,3:LIMITED_SUCCESSED,4:IN_PROCESS,5:IN_RETRY
ScaleAction：1:扩容  2:缩容

 * @method void setFilters(array $Filters) 设置记录过滤参数，目前仅能为“StartTime”,“EndTime”和“StrategyName”、ActionStatus、ScaleAction。
StartTime和EndTime支持2006-01-02 15:04:05 或者2006/01/02 15:04:05的时间格式
ActionStatus：0:INITED,1:SUCCESS, 2:FAILED,3:LIMITED_SUCCESSED,4:IN_PROCESS,5:IN_RETRY
ScaleAction：1:扩容  2:缩容

 * @method integer getOffset() 获取分页参数。
 * @method void setOffset(integer $Offset) 设置分页参数。
 * @method integer getLimit() 获取分页参数。最大支持100
 * @method void setLimit(integer $Limit) 设置分页参数。最大支持100
 * @method integer getRecordSource() 获取表示是自动(0)还是托管伸缩(1)
 * @method void setRecordSource(integer $RecordSource) 设置表示是自动(0)还是托管伸缩(1)
 * @method integer getAsc() 获取是否升序，1:升序，0:降序
 * @method void setAsc(integer $Asc) 设置是否升序，1:升序，0:降序
 */
class DescribeAutoScaleRecordsRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var array 记录过滤参数，目前仅能为“StartTime”,“EndTime”和“StrategyName”、ActionStatus、ScaleAction。
StartTime和EndTime支持2006-01-02 15:04:05 或者2006/01/02 15:04:05的时间格式
ActionStatus：0:INITED,1:SUCCESS, 2:FAILED,3:LIMITED_SUCCESSED,4:IN_PROCESS,5:IN_RETRY
ScaleAction：1:扩容  2:缩容

     */
    public $Filters;

    /**
     * @var integer 分页参数。
     */
    public $Offset;

    /**
     * @var integer 分页参数。最大支持100
     */
    public $Limit;

    /**
     * @var integer 表示是自动(0)还是托管伸缩(1)
     */
    public $RecordSource;

    /**
     * @var integer 是否升序，1:升序，0:降序
     */
    public $Asc;

    /**
     * @param string $InstanceId 实例ID。
     * @param array $Filters 记录过滤参数，目前仅能为“StartTime”,“EndTime”和“StrategyName”、ActionStatus、ScaleAction。
StartTime和EndTime支持2006-01-02 15:04:05 或者2006/01/02 15:04:05的时间格式
ActionStatus：0:INITED,1:SUCCESS, 2:FAILED,3:LIMITED_SUCCESSED,4:IN_PROCESS,5:IN_RETRY
ScaleAction：1:扩容  2:缩容

     * @param integer $Offset 分页参数。
     * @param integer $Limit 分页参数。最大支持100
     * @param integer $RecordSource 表示是自动(0)还是托管伸缩(1)
     * @param integer $Asc 是否升序，1:升序，0:降序
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new KeyValue();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("RecordSource",$param) and $param["RecordSource"] !== null) {
            $this->RecordSource = $param["RecordSource"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }
    }
}
