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
 * DescribeReplayDetails请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getSessionId() 获取<p>会话id</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话id</p>
 * @method string getReplayId() 获取<p>回放id</p>
 * @method void setReplayId(string $ReplayId) 设置<p>回放id</p>
 * @method string getCategories() 获取<p>事件类别， 默认为all</p>
 * @method void setCategories(string $Categories) 设置<p>事件类别， 默认为all</p>
 * @method integer getLimit() 获取<p>每页返回数量</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量</p>
 * @method integer getCursor() 获取<p>游标分页，传上一次返回的 NextCursor 值。首次请求不传</p>
 * @method void setCursor(integer $Cursor) 设置<p>游标分页，传上一次返回的 NextCursor 值。首次请求不传</p>
 * @method integer getStartOffsetMs() 获取<p>起始偏移（毫秒），相对于录屏开始时间。用于只查某个时间段的事件</p>
 * @method void setStartOffsetMs(integer $StartOffsetMs) 设置<p>起始偏移（毫秒），相对于录屏开始时间。用于只查某个时间段的事件</p>
 * @method integer getEndOffsetMs() 获取<p>结束偏移（毫秒），必须 ≥ StartOffsetMs</p>
 * @method void setEndOffsetMs(integer $EndOffsetMs) 设置<p>结束偏移（毫秒），必须 ≥ StartOffsetMs</p>
 */
class DescribeReplayDetailsRequest extends AbstractModel
{
    /**
     * @var string <p>应用id</p>
     */
    public $AppId;

    /**
     * @var string <p>会话id</p>
     */
    public $SessionId;

    /**
     * @var string <p>回放id</p>
     */
    public $ReplayId;

    /**
     * @var string <p>事件类别， 默认为all</p>
     */
    public $Categories;

    /**
     * @var integer <p>每页返回数量</p>
     */
    public $Limit;

    /**
     * @var integer <p>游标分页，传上一次返回的 NextCursor 值。首次请求不传</p>
     */
    public $Cursor;

    /**
     * @var integer <p>起始偏移（毫秒），相对于录屏开始时间。用于只查某个时间段的事件</p>
     */
    public $StartOffsetMs;

    /**
     * @var integer <p>结束偏移（毫秒），必须 ≥ StartOffsetMs</p>
     */
    public $EndOffsetMs;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $SessionId <p>会话id</p>
     * @param string $ReplayId <p>回放id</p>
     * @param string $Categories <p>事件类别， 默认为all</p>
     * @param integer $Limit <p>每页返回数量</p>
     * @param integer $Cursor <p>游标分页，传上一次返回的 NextCursor 值。首次请求不传</p>
     * @param integer $StartOffsetMs <p>起始偏移（毫秒），相对于录屏开始时间。用于只查某个时间段的事件</p>
     * @param integer $EndOffsetMs <p>结束偏移（毫秒），必须 ≥ StartOffsetMs</p>
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

        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("ReplayId",$param) and $param["ReplayId"] !== null) {
            $this->ReplayId = $param["ReplayId"];
        }

        if (array_key_exists("Categories",$param) and $param["Categories"] !== null) {
            $this->Categories = $param["Categories"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("StartOffsetMs",$param) and $param["StartOffsetMs"] !== null) {
            $this->StartOffsetMs = $param["StartOffsetMs"];
        }

        if (array_key_exists("EndOffsetMs",$param) and $param["EndOffsetMs"] !== null) {
            $this->EndOffsetMs = $param["EndOffsetMs"];
        }
    }
}
