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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * redis命令延迟趋势
 *
 * @method string getCommand() 获取redis命令
 * @method void setCommand(string $Command) 设置redis命令
 * @method MonitorMetricSeriesData getSeriesData() 获取监控数据
 * @method void setSeriesData(MonitorMetricSeriesData $SeriesData) 设置监控数据
 */
class CmdPerfInfo extends AbstractModel
{
    /**
     * @var string redis命令
     */
    public $Command;

    /**
     * @var MonitorMetricSeriesData 监控数据
     */
    public $SeriesData;

    /**
     * @param string $Command redis命令
     * @param MonitorMetricSeriesData $SeriesData 监控数据
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
        if (array_key_exists("Command",$param) and $param["Command"] !== null) {
            $this->Command = $param["Command"];
        }

        if (array_key_exists("SeriesData",$param) and $param["SeriesData"] !== null) {
            $this->SeriesData = new MonitorMetricSeriesData();
            $this->SeriesData->deserialize($param["SeriesData"]);
        }
    }
}
