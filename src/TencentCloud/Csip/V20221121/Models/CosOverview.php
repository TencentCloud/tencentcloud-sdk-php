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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 对象存储审计概览页面数据结构
 *
 * @method integer getAssetCount() 获取<p>资产总数</p>
 * @method void setAssetCount(integer $AssetCount) 设置<p>资产总数</p>
 * @method integer getAlarmAssetCount() 获取<p>需要立即处理的资产数</p>
 * @method void setAlarmAssetCount(integer $AlarmAssetCount) 设置<p>需要立即处理的资产数</p>
 * @method integer getRiskAssetCount() 获取<p>需要加固的资产数</p>
 * @method void setRiskAssetCount(integer $RiskAssetCount) 设置<p>需要加固的资产数</p>
 * @method integer getAlarmCount() 获取<p>告警总数</p>
 * @method void setAlarmCount(integer $AlarmCount) 设置<p>告警总数</p>
 * @method integer getIncrementAlarmCount() 获取<p>当日新增告警总数</p>
 * @method void setIncrementAlarmCount(integer $IncrementAlarmCount) 设置<p>当日新增告警总数</p>
 * @method integer getRiskCount() 获取<p>风险总数</p>
 * @method void setRiskCount(integer $RiskCount) 设置<p>风险总数</p>
 * @method integer getIncrementRiskCount() 获取<p>当日新增告警总数</p>
 * @method void setIncrementRiskCount(integer $IncrementRiskCount) 设置<p>当日新增告警总数</p>
 * @method array getRiskTop() 获取<p>风险top详情</p>
 * @method void setRiskTop(array $RiskTop) 设置<p>风险top详情</p>
 * @method array getAlarmTop() 获取<p>告警风险top</p>
 * @method void setAlarmTop(array $AlarmTop) 设置<p>告警风险top</p>
 * @method integer getHighLevelSensitiveFileCount() 获取<p>高等级敏感文件数</p>
 * @method void setHighLevelSensitiveFileCount(integer $HighLevelSensitiveFileCount) 设置<p>高等级敏感文件数</p>
 */
class CosOverview extends AbstractModel
{
    /**
     * @var integer <p>资产总数</p>
     */
    public $AssetCount;

    /**
     * @var integer <p>需要立即处理的资产数</p>
     */
    public $AlarmAssetCount;

    /**
     * @var integer <p>需要加固的资产数</p>
     */
    public $RiskAssetCount;

    /**
     * @var integer <p>告警总数</p>
     */
    public $AlarmCount;

    /**
     * @var integer <p>当日新增告警总数</p>
     */
    public $IncrementAlarmCount;

    /**
     * @var integer <p>风险总数</p>
     */
    public $RiskCount;

    /**
     * @var integer <p>当日新增告警总数</p>
     */
    public $IncrementRiskCount;

    /**
     * @var array <p>风险top详情</p>
     */
    public $RiskTop;

    /**
     * @var array <p>告警风险top</p>
     */
    public $AlarmTop;

    /**
     * @var integer <p>高等级敏感文件数</p>
     */
    public $HighLevelSensitiveFileCount;

    /**
     * @param integer $AssetCount <p>资产总数</p>
     * @param integer $AlarmAssetCount <p>需要立即处理的资产数</p>
     * @param integer $RiskAssetCount <p>需要加固的资产数</p>
     * @param integer $AlarmCount <p>告警总数</p>
     * @param integer $IncrementAlarmCount <p>当日新增告警总数</p>
     * @param integer $RiskCount <p>风险总数</p>
     * @param integer $IncrementRiskCount <p>当日新增告警总数</p>
     * @param array $RiskTop <p>风险top详情</p>
     * @param array $AlarmTop <p>告警风险top</p>
     * @param integer $HighLevelSensitiveFileCount <p>高等级敏感文件数</p>
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
        if (array_key_exists("AssetCount",$param) and $param["AssetCount"] !== null) {
            $this->AssetCount = $param["AssetCount"];
        }

        if (array_key_exists("AlarmAssetCount",$param) and $param["AlarmAssetCount"] !== null) {
            $this->AlarmAssetCount = $param["AlarmAssetCount"];
        }

        if (array_key_exists("RiskAssetCount",$param) and $param["RiskAssetCount"] !== null) {
            $this->RiskAssetCount = $param["RiskAssetCount"];
        }

        if (array_key_exists("AlarmCount",$param) and $param["AlarmCount"] !== null) {
            $this->AlarmCount = $param["AlarmCount"];
        }

        if (array_key_exists("IncrementAlarmCount",$param) and $param["IncrementAlarmCount"] !== null) {
            $this->IncrementAlarmCount = $param["IncrementAlarmCount"];
        }

        if (array_key_exists("RiskCount",$param) and $param["RiskCount"] !== null) {
            $this->RiskCount = $param["RiskCount"];
        }

        if (array_key_exists("IncrementRiskCount",$param) and $param["IncrementRiskCount"] !== null) {
            $this->IncrementRiskCount = $param["IncrementRiskCount"];
        }

        if (array_key_exists("RiskTop",$param) and $param["RiskTop"] !== null) {
            $this->RiskTop = [];
            foreach ($param["RiskTop"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->RiskTop, $obj);
            }
        }

        if (array_key_exists("AlarmTop",$param) and $param["AlarmTop"] !== null) {
            $this->AlarmTop = [];
            foreach ($param["AlarmTop"] as $key => $value){
                $obj = new CosRiskInfo();
                $obj->deserialize($value);
                array_push($this->AlarmTop, $obj);
            }
        }

        if (array_key_exists("HighLevelSensitiveFileCount",$param) and $param["HighLevelSensitiveFileCount"] !== null) {
            $this->HighLevelSensitiveFileCount = $param["HighLevelSensitiveFileCount"];
        }
    }
}
