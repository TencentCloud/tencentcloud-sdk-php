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
 * 实例配置。
 *
 * @method string getDailyInspection() 获取数据库巡检开关, Yes/No。
 * @method void setDailyInspection(string $DailyInspection) 设置数据库巡检开关, Yes/No。
 * @method string getOverviewDisplay() 获取实例概览开关，Yes/No。
 * @method void setOverviewDisplay(string $OverviewDisplay) 设置实例概览开关，Yes/No。
 * @method array getKeyDelimiters() 获取redis大key分析的自定义分割符，仅redis使用
 * @method void setKeyDelimiters(array $KeyDelimiters) 设置redis大key分析的自定义分割符，仅redis使用
 * @method string getShardNum() 获取分片节点数量。
 * @method void setShardNum(string $ShardNum) 设置分片节点数量。
 * @method string getAnalysisTopKey() 获取是否开启大key周期性分析，仅redis产品有效。
 * @method void setAnalysisTopKey(string $AnalysisTopKey) 设置是否开启大key周期性分析，仅redis产品有效。
 */
class InstanceConfs extends AbstractModel
{
    /**
     * @var string 数据库巡检开关, Yes/No。
     */
    public $DailyInspection;

    /**
     * @var string 实例概览开关，Yes/No。
     */
    public $OverviewDisplay;

    /**
     * @var array redis大key分析的自定义分割符，仅redis使用
     */
    public $KeyDelimiters;

    /**
     * @var string 分片节点数量。
     */
    public $ShardNum;

    /**
     * @var string 是否开启大key周期性分析，仅redis产品有效。
     */
    public $AnalysisTopKey;

    /**
     * @param string $DailyInspection 数据库巡检开关, Yes/No。
     * @param string $OverviewDisplay 实例概览开关，Yes/No。
     * @param array $KeyDelimiters redis大key分析的自定义分割符，仅redis使用
     * @param string $ShardNum 分片节点数量。
     * @param string $AnalysisTopKey 是否开启大key周期性分析，仅redis产品有效。
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
        if (array_key_exists("DailyInspection",$param) and $param["DailyInspection"] !== null) {
            $this->DailyInspection = $param["DailyInspection"];
        }

        if (array_key_exists("OverviewDisplay",$param) and $param["OverviewDisplay"] !== null) {
            $this->OverviewDisplay = $param["OverviewDisplay"];
        }

        if (array_key_exists("KeyDelimiters",$param) and $param["KeyDelimiters"] !== null) {
            $this->KeyDelimiters = $param["KeyDelimiters"];
        }

        if (array_key_exists("ShardNum",$param) and $param["ShardNum"] !== null) {
            $this->ShardNum = $param["ShardNum"];
        }

        if (array_key_exists("AnalysisTopKey",$param) and $param["AnalysisTopKey"] !== null) {
            $this->AnalysisTopKey = $param["AnalysisTopKey"];
        }
    }
}
