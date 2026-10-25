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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTDEMRelatedEvents请求参数结构体
 *
 * @method string getAppId() 获取<p>应用 ID（必填）</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID（必填）</p>
 * @method integer getStartTime() 获取<p>开始时间 Unix 毫秒（必填，用于分区裁剪）</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间 Unix 毫秒（必填，用于分区裁剪）</p>
 * @method integer getEndTime() 获取<p>结束时间 Unix 毫秒（必填）</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间 Unix 毫秒（必填）</p>
 * @method string getMode() 获取<p>模式：timeline / page / breadcrumb（必填）</p>
 * @method void setMode(string $Mode) 设置<p>模式：timeline / page / breadcrumb（必填）</p>
 * @method string getSessionId() 获取<p>会话 ID（必填）</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID（必填）</p>
 * @method string getPageUrl() 获取<p>页面 URL（Mode=page 必填）</p>
 * @method void setPageUrl(string $PageUrl) 设置<p>页面 URL（Mode=page 必填）</p>
 * @method integer getAnchorTimestamp() 获取<p>锚点 Unix 毫秒（Mode=page/breadcrumb 使用）</p>
 * @method void setAnchorTimestamp(integer $AnchorTimestamp) 设置<p>锚点 Unix 毫秒（Mode=page/breadcrumb 使用）</p>
 * @method integer getOffset() 获取<p>偏移，&gt;=0，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移，&gt;=0，默认 0</p>
 * @method integer getLimit() 获取<p>条数，1-200，默认 200</p>
 * @method void setLimit(integer $Limit) 设置<p>条数，1-200，默认 200</p>
 * @method string getCategory() 获取<p>事件分类（可选）</p>
 * @method void setCategory(string $Category) 设置<p>事件分类（可选）</p>
 * @method string getKeyword() 获取<p>关键字（可选）</p>
 * @method void setKeyword(string $Keyword) 设置<p>关键字（可选）</p>
 * @method string getViewId() 获取<p>视图 ID</p>
 * @method void setViewId(string $ViewId) 设置<p>视图 ID</p>
 */
class DescribeTDEMRelatedEventsRequest extends AbstractModel
{
    /**
     * @var string <p>应用 ID（必填）</p>
     */
    public $AppId;

    /**
     * @var integer <p>开始时间 Unix 毫秒（必填，用于分区裁剪）</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间 Unix 毫秒（必填）</p>
     */
    public $EndTime;

    /**
     * @var string <p>模式：timeline / page / breadcrumb（必填）</p>
     */
    public $Mode;

    /**
     * @var string <p>会话 ID（必填）</p>
     */
    public $SessionId;

    /**
     * @var string <p>页面 URL（Mode=page 必填）</p>
     */
    public $PageUrl;

    /**
     * @var integer <p>锚点 Unix 毫秒（Mode=page/breadcrumb 使用）</p>
     */
    public $AnchorTimestamp;

    /**
     * @var integer <p>偏移，&gt;=0，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>条数，1-200，默认 200</p>
     */
    public $Limit;

    /**
     * @var string <p>事件分类（可选）</p>
     */
    public $Category;

    /**
     * @var string <p>关键字（可选）</p>
     */
    public $Keyword;

    /**
     * @var string <p>视图 ID</p>
     */
    public $ViewId;

    /**
     * @param string $AppId <p>应用 ID（必填）</p>
     * @param integer $StartTime <p>开始时间 Unix 毫秒（必填，用于分区裁剪）</p>
     * @param integer $EndTime <p>结束时间 Unix 毫秒（必填）</p>
     * @param string $Mode <p>模式：timeline / page / breadcrumb（必填）</p>
     * @param string $SessionId <p>会话 ID（必填）</p>
     * @param string $PageUrl <p>页面 URL（Mode=page 必填）</p>
     * @param integer $AnchorTimestamp <p>锚点 Unix 毫秒（Mode=page/breadcrumb 使用）</p>
     * @param integer $Offset <p>偏移，&gt;=0，默认 0</p>
     * @param integer $Limit <p>条数，1-200，默认 200</p>
     * @param string $Category <p>事件分类（可选）</p>
     * @param string $Keyword <p>关键字（可选）</p>
     * @param string $ViewId <p>视图 ID</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("PageUrl",$param) and $param["PageUrl"] !== null) {
            $this->PageUrl = $param["PageUrl"];
        }

        if (array_key_exists("AnchorTimestamp",$param) and $param["AnchorTimestamp"] !== null) {
            $this->AnchorTimestamp = $param["AnchorTimestamp"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("ViewId",$param) and $param["ViewId"] !== null) {
            $this->ViewId = $param["ViewId"];
        }
    }
}
