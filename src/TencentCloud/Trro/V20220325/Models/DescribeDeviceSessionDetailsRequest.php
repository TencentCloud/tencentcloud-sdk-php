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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceSessionDetails请求参数结构体
 *
 * @method string getSessionId() 获取<p>会话ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话ID</p>
 * @method integer getStartTime() 获取<p>查询指标开始时间</p><p>单位：秒</p>
 * @method void setStartTime(integer $StartTime) 设置<p>查询指标开始时间</p><p>单位：秒</p>
 * @method integer getEndTime() 获取<p>查询指标结束时间</p><p>单位：秒</p>
 * @method void setEndTime(integer $EndTime) 设置<p>查询指标结束时间</p><p>单位：秒</p>
 */
class DescribeDeviceSessionDetailsRequest extends AbstractModel
{
    /**
     * @var string <p>会话ID</p>
     */
    public $SessionId;

    /**
     * @var integer <p>查询指标开始时间</p><p>单位：秒</p>
     */
    public $StartTime;

    /**
     * @var integer <p>查询指标结束时间</p><p>单位：秒</p>
     */
    public $EndTime;

    /**
     * @param string $SessionId <p>会话ID</p>
     * @param integer $StartTime <p>查询指标开始时间</p><p>单位：秒</p>
     * @param integer $EndTime <p>查询指标结束时间</p><p>单位：秒</p>
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
