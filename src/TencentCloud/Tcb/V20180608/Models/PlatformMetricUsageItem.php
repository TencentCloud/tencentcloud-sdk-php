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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 平台版指标用量信息
 *
 * @method string getMetricName() 获取<p>指标名称</p>
 * @method void setMetricName(string $MetricName) 设置<p>指标名称</p>
 * @method string getOriginalResourceType() 获取<p>原始资源类型</p><p>枚举值：</p><ul><li>COS： 对象存储</li></ul>
 * @method void setOriginalResourceType(string $OriginalResourceType) 设置<p>原始资源类型</p><p>枚举值：</p><ul><li>COS： 对象存储</li></ul>
 * @method string getOriginalMetricName() 获取<p>原始指标</p>
 * @method void setOriginalMetricName(string $OriginalMetricName) 设置<p>原始指标</p>
 * @method integer getUsageValue() 获取<p>资源用量</p>
 * @method void setUsageValue(integer $UsageValue) 设置<p>资源用量</p>
 * @method string getUsageUnit() 获取<p>资源用量单位</p>
 * @method void setUsageUnit(string $UsageUnit) 设置<p>资源用量单位</p>
 * @method integer getCredits() 获取<p>资源点</p>
 * @method void setCredits(integer $Credits) 设置<p>资源点</p>
 * @method array getDailyUsageList() 获取<p>用量按日明细列表</p>
 * @method void setDailyUsageList(array $DailyUsageList) 设置<p>用量按日明细列表</p>
 */
class PlatformMetricUsageItem extends AbstractModel
{
    /**
     * @var string <p>指标名称</p>
     */
    public $MetricName;

    /**
     * @var string <p>原始资源类型</p><p>枚举值：</p><ul><li>COS： 对象存储</li></ul>
     */
    public $OriginalResourceType;

    /**
     * @var string <p>原始指标</p>
     */
    public $OriginalMetricName;

    /**
     * @var integer <p>资源用量</p>
     */
    public $UsageValue;

    /**
     * @var string <p>资源用量单位</p>
     */
    public $UsageUnit;

    /**
     * @var integer <p>资源点</p>
     */
    public $Credits;

    /**
     * @var array <p>用量按日明细列表</p>
     */
    public $DailyUsageList;

    /**
     * @param string $MetricName <p>指标名称</p>
     * @param string $OriginalResourceType <p>原始资源类型</p><p>枚举值：</p><ul><li>COS： 对象存储</li></ul>
     * @param string $OriginalMetricName <p>原始指标</p>
     * @param integer $UsageValue <p>资源用量</p>
     * @param string $UsageUnit <p>资源用量单位</p>
     * @param integer $Credits <p>资源点</p>
     * @param array $DailyUsageList <p>用量按日明细列表</p>
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
        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("OriginalResourceType",$param) and $param["OriginalResourceType"] !== null) {
            $this->OriginalResourceType = $param["OriginalResourceType"];
        }

        if (array_key_exists("OriginalMetricName",$param) and $param["OriginalMetricName"] !== null) {
            $this->OriginalMetricName = $param["OriginalMetricName"];
        }

        if (array_key_exists("UsageValue",$param) and $param["UsageValue"] !== null) {
            $this->UsageValue = $param["UsageValue"];
        }

        if (array_key_exists("UsageUnit",$param) and $param["UsageUnit"] !== null) {
            $this->UsageUnit = $param["UsageUnit"];
        }

        if (array_key_exists("Credits",$param) and $param["Credits"] !== null) {
            $this->Credits = $param["Credits"];
        }

        if (array_key_exists("DailyUsageList",$param) and $param["DailyUsageList"] !== null) {
            $this->DailyUsageList = [];
            foreach ($param["DailyUsageList"] as $key => $value){
                $obj = new DailyUsageList();
                $obj->deserialize($value);
                array_push($this->DailyUsageList, $obj);
            }
        }
    }
}
