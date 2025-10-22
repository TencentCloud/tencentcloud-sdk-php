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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot 管理中校验的触发阈值。
 *
 * @method string getMaxNewSessionCountInterval() 获取触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
 * @method void setMaxNewSessionCountInterval(string $MaxNewSessionCountInterval) 设置触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
 * @method integer getMaxNewSessionCountThreshold() 获取触发阈值统计的累计次数，取值范围 1 ~ 100000000。
 * @method void setMaxNewSessionCountThreshold(integer $MaxNewSessionCountThreshold) 设置触发阈值统计的累计次数，取值范围 1 ~ 100000000。
 */
class MaxNewSessionTriggerConfig extends AbstractModel
{
    /**
     * @var string 触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
     */
    public $MaxNewSessionCountInterval;

    /**
     * @var integer 触发阈值统计的累计次数，取值范围 1 ~ 100000000。
     */
    public $MaxNewSessionCountThreshold;

    /**
     * @param string $MaxNewSessionCountInterval 触发阈值统计的时间窗口，取值有：<li>5s：5 秒内；</li><li>10s：10 秒内；</li><li>15s：15 秒内；</li><li>30s：30 秒内；</li><li>60s：60 秒内；</li><li>5m：5 分钟内；</li><li>10m：10 分钟内；</li><li>30m：30 分钟内；</li><li>60m：60 分钟内。</li> 
     * @param integer $MaxNewSessionCountThreshold 触发阈值统计的累计次数，取值范围 1 ~ 100000000。
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
        if (array_key_exists("MaxNewSessionCountInterval",$param) and $param["MaxNewSessionCountInterval"] !== null) {
            $this->MaxNewSessionCountInterval = $param["MaxNewSessionCountInterval"];
        }

        if (array_key_exists("MaxNewSessionCountThreshold",$param) and $param["MaxNewSessionCountThreshold"] !== null) {
            $this->MaxNewSessionCountThreshold = $param["MaxNewSessionCountThreshold"];
        }
    }
}
