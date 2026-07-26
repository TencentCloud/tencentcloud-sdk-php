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
 * TimerStatus
 *
 * @method string getFailedCount() 获取失败次数
 * @method void setFailedCount(string $FailedCount) 设置失败次数
 * @method string getLastFireTime() 获取上次触发时间
 * @method void setLastFireTime(string $LastFireTime) 设置上次触发时间
 * @method string getLastSessionId() 获取最近一次会话ID
 * @method void setLastSessionId(string $LastSessionId) 设置最近一次会话ID
 * @method string getNextFireTime() 获取下次触发时间
 * @method void setNextFireTime(string $NextFireTime) 设置下次触发时间
 * @method integer getStatus() 获取
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 启用 |
| 2 | 暂停 |
| 3 | 一次性任务已完成 |
 * @method void setStatus(integer $Status) 设置
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 启用 |
| 2 | 暂停 |
| 3 | 一次性任务已完成 |
 * @method string getSuccessCount() 获取成功次数
 * @method void setSuccessCount(string $SuccessCount) 设置成功次数
 * @method string getUnreadRunLogCount() 获取未读数量
 * @method void setUnreadRunLogCount(string $UnreadRunLogCount) 设置未读数量
 */
class TimerStatus extends AbstractModel
{
    /**
     * @var string 失败次数
     */
    public $FailedCount;

    /**
     * @var string 上次触发时间
     */
    public $LastFireTime;

    /**
     * @var string 最近一次会话ID
     */
    public $LastSessionId;

    /**
     * @var string 下次触发时间
     */
    public $NextFireTime;

    /**
     * @var integer 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 启用 |
| 2 | 暂停 |
| 3 | 一次性任务已完成 |
     */
    public $Status;

    /**
     * @var string 成功次数
     */
    public $SuccessCount;

    /**
     * @var string 未读数量
     */
    public $UnreadRunLogCount;

    /**
     * @param string $FailedCount 失败次数
     * @param string $LastFireTime 上次触发时间
     * @param string $LastSessionId 最近一次会话ID
     * @param string $NextFireTime 下次触发时间
     * @param integer $Status 
枚举值:
| uint | 描述 |
| --- | --- |
| 0 |  |
| 1 | 启用 |
| 2 | 暂停 |
| 3 | 一次性任务已完成 |
     * @param string $SuccessCount 成功次数
     * @param string $UnreadRunLogCount 未读数量
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
        if (array_key_exists("FailedCount",$param) and $param["FailedCount"] !== null) {
            $this->FailedCount = $param["FailedCount"];
        }

        if (array_key_exists("LastFireTime",$param) and $param["LastFireTime"] !== null) {
            $this->LastFireTime = $param["LastFireTime"];
        }

        if (array_key_exists("LastSessionId",$param) and $param["LastSessionId"] !== null) {
            $this->LastSessionId = $param["LastSessionId"];
        }

        if (array_key_exists("NextFireTime",$param) and $param["NextFireTime"] !== null) {
            $this->NextFireTime = $param["NextFireTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SuccessCount",$param) and $param["SuccessCount"] !== null) {
            $this->SuccessCount = $param["SuccessCount"];
        }

        if (array_key_exists("UnreadRunLogCount",$param) and $param["UnreadRunLogCount"] !== null) {
            $this->UnreadRunLogCount = $param["UnreadRunLogCount"];
        }
    }
}
