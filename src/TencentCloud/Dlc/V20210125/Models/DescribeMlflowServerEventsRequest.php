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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMlflowServerEvents请求参数结构体
 *
 * @method string getServerId() 获取<p>MlFlowServer的ID</p>
 * @method void setServerId(string $ServerId) 设置<p>MlFlowServer的ID</p>
 * @method integer getStartTime() 获取<p>查询起始时间，单位ms</p>
 * @method void setStartTime(integer $StartTime) 设置<p>查询起始时间，单位ms</p>
 * @method integer getEndTime() 获取<p>查询结束时间，单位ms</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询结束时间，单位ms</p>
 * @method string getContext() 获取<p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
 * @method void setContext(string $Context) 设置<p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
 * @method string getEventType() 获取<p>事件类型过滤，仅允许 ASCII 字母（如 Normal、Warning）</p>
 * @method void setEventType(string $EventType) 设置<p>事件类型过滤，仅允许 ASCII 字母（如 Normal、Warning）</p>
 * @method integer getPageSize() 获取<p>每次查询数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每次查询数量</p>
 * @method array getSortFields() 获取<p>排序字段，目前只支持EventTime</p>
 * @method void setSortFields(array $SortFields) 设置<p>排序字段，目前只支持EventTime</p>
 */
class DescribeMlflowServerEventsRequest extends AbstractModel
{
    /**
     * @var string <p>MlFlowServer的ID</p>
     */
    public $ServerId;

    /**
     * @var integer <p>查询起始时间，单位ms</p>
     */
    public $StartTime;

    /**
     * @var integer <p>查询结束时间，单位ms</p>
     */
    public $EndTime;

    /**
     * @var string <p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
     */
    public $Context;

    /**
     * @var string <p>事件类型过滤，仅允许 ASCII 字母（如 Normal、Warning）</p>
     */
    public $EventType;

    /**
     * @var integer <p>每次查询数量</p>
     */
    public $PageSize;

    /**
     * @var array <p>排序字段，目前只支持EventTime</p>
     */
    public $SortFields;

    /**
     * @param string $ServerId <p>MlFlowServer的ID</p>
     * @param integer $StartTime <p>查询起始时间，单位ms</p>
     * @param integer $EndTime <p>查询结束时间，单位ms</p>
     * @param string $Context <p>翻页上下文，首次查询不传，后续翻页传入上一次返回的 Context 值</p>
     * @param string $EventType <p>事件类型过滤，仅允许 ASCII 字母（如 Normal、Warning）</p>
     * @param integer $PageSize <p>每次查询数量</p>
     * @param array $SortFields <p>排序字段，目前只支持EventTime</p>
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
        if (array_key_exists("ServerId",$param) and $param["ServerId"] !== null) {
            $this->ServerId = $param["ServerId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SortFields",$param) and $param["SortFields"] !== null) {
            $this->SortFields = [];
            foreach ($param["SortFields"] as $key => $value){
                $obj = new SortField();
                $obj->deserialize($value);
                array_push($this->SortFields, $obj);
            }
        }
    }
}
