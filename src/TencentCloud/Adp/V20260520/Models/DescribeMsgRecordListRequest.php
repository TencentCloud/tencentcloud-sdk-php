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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMsgRecordList请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method array getFilterList() 获取<p>过滤条件列表，支持：ChannelType（渠道类型，0 全部）、FeedbackType（反馈类型，-1 为全部）、QueryType、Query、CategoryId、ReplyMethod、StartTime、EndTime（秒时间戳）、Cursor（游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor）、Direction（方向，next 下一页，prev 上一页）、CallResult（调用结果，默认 0 为全部，1 为成功，2 为失败）、FailReason、Intent</p>
 * @method void setFilterList(array $FilterList) 设置<p>过滤条件列表，支持：ChannelType（渠道类型，0 全部）、FeedbackType（反馈类型，-1 为全部）、QueryType、Query、CategoryId、ReplyMethod、StartTime、EndTime（秒时间戳）、Cursor（游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor）、Direction（方向，next 下一页，prev 上一页）、CallResult（调用结果，默认 0 为全部，1 为成功，2 为失败）、FailReason、Intent</p>
 * @method integer getPageNumber() 获取<p>页码，从 0 开始；不传时按 0 处理</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从 0 开始；不传时按 0 处理</p>
 * @method integer getPageSize() 获取<p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
 * @method Sort getSort() 获取<p>排序条件，只支持按 CreateTime 排序</p>
 * @method void setSort(Sort $Sort) 设置<p>排序条件，只支持按 CreateTime 排序</p>
 */
class DescribeMsgRecordListRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var array <p>过滤条件列表，支持：ChannelType（渠道类型，0 全部）、FeedbackType（反馈类型，-1 为全部）、QueryType、Query、CategoryId、ReplyMethod、StartTime、EndTime（秒时间戳）、Cursor（游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor）、Direction（方向，next 下一页，prev 上一页）、CallResult（调用结果，默认 0 为全部，1 为成功，2 为失败）、FailReason、Intent</p>
     */
    public $FilterList;

    /**
     * @var integer <p>页码，从 0 开始；不传时按 0 处理</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
     */
    public $PageSize;

    /**
     * @var Sort <p>排序条件，只支持按 CreateTime 排序</p>
     */
    public $Sort;

    /**
     * @param string $AppId <p>应用 ID</p>
     * @param array $FilterList <p>过滤条件列表，支持：ChannelType（渠道类型，0 全部）、FeedbackType（反馈类型，-1 为全部）、QueryType、Query、CategoryId、ReplyMethod、StartTime、EndTime（秒时间戳）、Cursor（游标信息，上一页取响应 PrevCursor，下一页取响应 NextCursor）、Direction（方向，next 下一页，prev 上一页）、CallResult（调用结果，默认 0 为全部，1 为成功，2 为失败）、FailReason、Intent</p>
     * @param integer $PageNumber <p>页码，从 0 开始；不传时按 0 处理</p>
     * @param integer $PageSize <p>每页数量，最大 100；不传或传 0 时按默认分页大小处理</p>
     * @param Sort $Sort <p>排序条件，只支持按 CreateTime 排序</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("FilterList",$param) and $param["FilterList"] !== null) {
            $this->FilterList = [];
            foreach ($param["FilterList"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->FilterList, $obj);
            }
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new Sort();
            $this->Sort->deserialize($param["Sort"]);
        }
    }
}
