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
namespace TencentCloud\Captcha\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTotalTicketStatistics请求参数结构体
 *
 * @method string getStartTimeStr() 获取<p>开始时间</p>
 * @method void setStartTimeStr(string $StartTimeStr) 设置<p>开始时间</p>
 * @method string getEndTimeStr() 获取<p>结束时间</p>
 * @method void setEndTimeStr(string $EndTimeStr) 设置<p>结束时间</p>
 * @method string getDimension() 获取<p>查询粒度<br>分钟：“1”<br>小时：“2”<br>天：“3”</p>
 * @method void setDimension(string $Dimension) 设置<p>查询粒度<br>分钟：“1”<br>小时：“2”<br>天：“3”</p>
 */
class GetTotalTicketStatisticsRequest extends AbstractModel
{
    /**
     * @var string <p>开始时间</p>
     */
    public $StartTimeStr;

    /**
     * @var string <p>结束时间</p>
     */
    public $EndTimeStr;

    /**
     * @var string <p>查询粒度<br>分钟：“1”<br>小时：“2”<br>天：“3”</p>
     */
    public $Dimension;

    /**
     * @param string $StartTimeStr <p>开始时间</p>
     * @param string $EndTimeStr <p>结束时间</p>
     * @param string $Dimension <p>查询粒度<br>分钟：“1”<br>小时：“2”<br>天：“3”</p>
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
        if (array_key_exists("StartTimeStr",$param) and $param["StartTimeStr"] !== null) {
            $this->StartTimeStr = $param["StartTimeStr"];
        }

        if (array_key_exists("EndTimeStr",$param) and $param["EndTimeStr"] !== null) {
            $this->EndTimeStr = $param["EndTimeStr"];
        }

        if (array_key_exists("Dimension",$param) and $param["Dimension"] !== null) {
            $this->Dimension = $param["Dimension"];
        }
    }
}
