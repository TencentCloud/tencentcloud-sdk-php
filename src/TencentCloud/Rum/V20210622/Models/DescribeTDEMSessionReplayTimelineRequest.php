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
 * DescribeTDEMSessionReplayTimeline请求参数结构体
 *
 * @method string getAppId() 获取<p>应用id</p>
 * @method void setAppId(string $AppId) 设置<p>应用id</p>
 * @method string getSessionId() 获取<p>会话id</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话id</p>
 * @method integer getStartTime() 获取<p>开始时间</p>
 * @method void setStartTime(integer $StartTime) 设置<p>开始时间</p>
 * @method integer getEndTime() 获取<p>结束时间</p>
 * @method void setEndTime(integer $EndTime) 设置<p>结束时间</p>
 * @method integer getLimit() 获取<p>数量限制</p>
 * @method void setLimit(integer $Limit) 设置<p>数量限制</p>
 * @method integer getCursor() 获取<p>游标</p>
 * @method void setCursor(integer $Cursor) 设置<p>游标</p>
 * @method string getCursorEventId() 获取<p>时间线分页的事件ID游标，与时间游标Cursor共同定位续页起点，用于同一时间戳下的稳定分页。</p>
 * @method void setCursorEventId(string $CursorEventId) 设置<p>时间线分页的事件ID游标，与时间游标Cursor共同定位续页起点，用于同一时间戳下的稳定分页。</p>
 */
class DescribeTDEMSessionReplayTimelineRequest extends AbstractModel
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
     * @var integer <p>开始时间</p>
     */
    public $StartTime;

    /**
     * @var integer <p>结束时间</p>
     */
    public $EndTime;

    /**
     * @var integer <p>数量限制</p>
     */
    public $Limit;

    /**
     * @var integer <p>游标</p>
     */
    public $Cursor;

    /**
     * @var string <p>时间线分页的事件ID游标，与时间游标Cursor共同定位续页起点，用于同一时间戳下的稳定分页。</p>
     */
    public $CursorEventId;

    /**
     * @param string $AppId <p>应用id</p>
     * @param string $SessionId <p>会话id</p>
     * @param integer $StartTime <p>开始时间</p>
     * @param integer $EndTime <p>结束时间</p>
     * @param integer $Limit <p>数量限制</p>
     * @param integer $Cursor <p>游标</p>
     * @param string $CursorEventId <p>时间线分页的事件ID游标，与时间游标Cursor共同定位续页起点，用于同一时间戳下的稳定分页。</p>
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

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("CursorEventId",$param) and $param["CursorEventId"] !== null) {
            $this->CursorEventId = $param["CursorEventId"];
        }
    }
}
