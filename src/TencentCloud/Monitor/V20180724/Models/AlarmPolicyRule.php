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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 告警策略触发条件
 *
 * @method string getMetricName() 获取<p>指标名或事件名，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询 。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetricName(string $MetricName) 设置<p>指标名或事件名，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询 。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPeriod() 获取<p>秒数 统计周期，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPeriod(integer $Period) 设置<p>秒数 统计周期，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperator() 获取<p>英文运算符<br>intelligent=无阈值智能检测<br>eq=等于<br>ge=大于等于<br>gt=大于<br>le=小于等于<br>lt=小于<br>ne=不等于<br>day_increase=天同比增长<br>day_decrease=天同比下降<br>day_wave=天同比波动<br>week_increase=周同比增长<br>week_decrease=周同比下降<br>week_wave=周同比波动<br>cycle_increase=环比增长<br>cycle_decrease=环比下降<br>cycle_wave=环比波动<br>re=正则匹配<br>支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperator(string $Operator) 设置<p>英文运算符<br>intelligent=无阈值智能检测<br>eq=等于<br>ge=大于等于<br>gt=大于<br>le=小于等于<br>lt=小于<br>ne=不等于<br>day_increase=天同比增长<br>day_decrease=天同比下降<br>day_wave=天同比波动<br>week_increase=周同比增长<br>week_decrease=周同比下降<br>week_wave=周同比波动<br>cycle_increase=环比增长<br>cycle_decrease=环比下降<br>cycle_wave=环比波动<br>re=正则匹配<br>支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getValue() 获取<p>阈值，支持的范围可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValue(string $Value) 设置<p>阈值，支持的范围可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContinuePeriod() 获取<p>周期数 持续通知周期 1=持续1个周期 2=持续2个周期...，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinuePeriod(integer $ContinuePeriod) 设置<p>周期数 持续通知周期 1=持续1个周期 2=持续2个周期...，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getNoticeFrequency() 获取<p>秒数 告警间隔  0=不重复 300=每5分钟告警一次 600=每10分钟告警一次 900=每15分钟告警一次 1800=每30分钟告警一次 3600=每1小时告警一次 7200=每2小时告警一次 10800=每3小时告警一次 21600=每6小时告警一次 43200=每12小时告警一次 86400=每1天告警一次</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNoticeFrequency(integer $NoticeFrequency) 设置<p>秒数 告警间隔  0=不重复 300=每5分钟告警一次 600=每10分钟告警一次 900=每15分钟告警一次 1800=每30分钟告警一次 3600=每1小时告警一次 7200=每2小时告警一次 10800=每3小时告警一次 21600=每6小时告警一次 43200=每12小时告警一次 86400=每1天告警一次</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsPowerNotice() 获取<p>告警频率是否指数增长 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsPowerNotice(integer $IsPowerNotice) 设置<p>告警频率是否指数增长 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmPolicyFilter getFilter() 获取<p>对于单个触发规则的过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFilter(AlarmPolicyFilter $Filter) 设置<p>对于单个触发规则的过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>指标展示名，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>指标展示名，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUnit() 获取<p>单位，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnit(string $Unit) 设置<p>单位，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleType() 获取<p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态阈值。创建或编辑策略时，如不填则默认为 STATIC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleType(string $RuleType) 设置<p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态阈值。创建或编辑策略时，如不填则默认为 STATIC。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsAdvanced() 获取<p>是否为高级指标，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsAdvanced(integer $IsAdvanced) 设置<p>是否为高级指标，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsOpen() 获取<p>高级指标是否开通，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsOpen(integer $IsOpen) 设置<p>高级指标是否开通，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProductId() 获取<p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProductId(string $ProductId) 设置<p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValueMax() 获取<p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueMax(float $ValueMax) 设置<p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getValueMin() 获取<p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setValueMin(float $ValueMin) 设置<p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method AlarmHierarchicalValue getHierarchicalValue() 获取<p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHierarchicalValue(AlarmHierarchicalValue $HierarchicalValue) 设置<p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsLatenessMetric() 获取<p>是否延迟指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsLatenessMetric(integer $IsLatenessMetric) 设置<p>是否延迟指标</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmPolicyRule extends AbstractModel
{
    /**
     * @var string <p>指标名或事件名，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询 。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MetricName;

    /**
     * @var integer <p>秒数 统计周期，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Period;

    /**
     * @var string <p>英文运算符<br>intelligent=无阈值智能检测<br>eq=等于<br>ge=大于等于<br>gt=大于<br>le=小于等于<br>lt=小于<br>ne=不等于<br>day_increase=天同比增长<br>day_decrease=天同比下降<br>day_wave=天同比波动<br>week_increase=周同比增长<br>week_decrease=周同比下降<br>week_wave=周同比波动<br>cycle_increase=环比增长<br>cycle_decrease=环比下降<br>cycle_wave=环比波动<br>re=正则匹配<br>支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Operator;

    /**
     * @var string <p>阈值，支持的范围可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Value;

    /**
     * @var integer <p>周期数 持续通知周期 1=持续1个周期 2=持续2个周期...，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinuePeriod;

    /**
     * @var integer <p>秒数 告警间隔  0=不重复 300=每5分钟告警一次 600=每10分钟告警一次 900=每15分钟告警一次 1800=每30分钟告警一次 3600=每1小时告警一次 7200=每2小时告警一次 10800=每3小时告警一次 21600=每6小时告警一次 43200=每12小时告警一次 86400=每1天告警一次</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NoticeFrequency;

    /**
     * @var integer <p>告警频率是否指数增长 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsPowerNotice;

    /**
     * @var AlarmPolicyFilter <p>对于单个触发规则的过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Filter;

    /**
     * @var string <p>指标展示名，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>单位，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Unit;

    /**
     * @var string <p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态阈值。创建或编辑策略时，如不填则默认为 STATIC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleType;

    /**
     * @var integer <p>是否为高级指标，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsAdvanced;

    /**
     * @var integer <p>高级指标是否开通，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsOpen;

    /**
     * @var string <p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProductId;

    /**
     * @var float <p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueMax;

    /**
     * @var float <p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ValueMin;

    /**
     * @var AlarmHierarchicalValue <p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HierarchicalValue;

    /**
     * @var integer <p>是否延迟指标</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsLatenessMetric;

    /**
     * @param string $MetricName <p>指标名或事件名，支持的指标可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询，支持的事件可以从 <a href="https://cloud.tencent.com/document/product/248/51284">DescribeAlarmEvents</a> 查询 。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Period <p>秒数 统计周期，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Operator <p>英文运算符<br>intelligent=无阈值智能检测<br>eq=等于<br>ge=大于等于<br>gt=大于<br>le=小于等于<br>lt=小于<br>ne=不等于<br>day_increase=天同比增长<br>day_decrease=天同比下降<br>day_wave=天同比波动<br>week_increase=周同比增长<br>week_decrease=周同比下降<br>week_wave=周同比波动<br>cycle_increase=环比增长<br>cycle_decrease=环比下降<br>cycle_wave=环比波动<br>re=正则匹配<br>支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Value <p>阈值，支持的范围可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContinuePeriod <p>周期数 持续通知周期 1=持续1个周期 2=持续2个周期...，支持的值可以从 <a href="https://cloud.tencent.com/document/product/248/51283">DescribeAlarmMetrics</a> 查询</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $NoticeFrequency <p>秒数 告警间隔  0=不重复 300=每5分钟告警一次 600=每10分钟告警一次 900=每15分钟告警一次 1800=每30分钟告警一次 3600=每1小时告警一次 7200=每2小时告警一次 10800=每3小时告警一次 21600=每6小时告警一次 43200=每12小时告警一次 86400=每1天告警一次</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsPowerNotice <p>告警频率是否指数增长 0=否 1=是</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmPolicyFilter $Filter <p>对于单个触发规则的过滤条件</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>指标展示名，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Unit <p>单位，用于出参</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleType <p>触发条件类型 STATIC=静态阈值 DYNAMIC=动态阈值。创建或编辑策略时，如不填则默认为 STATIC。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsAdvanced <p>是否为高级指标，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsOpen <p>高级指标是否开通，0否，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProductId <p>集成中心产品ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ValueMax <p>最大值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $ValueMin <p>最小值</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param AlarmHierarchicalValue $HierarchicalValue <p>告警分级阈值配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsLatenessMetric <p>是否延迟指标</p>
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("ContinuePeriod",$param) and $param["ContinuePeriod"] !== null) {
            $this->ContinuePeriod = $param["ContinuePeriod"];
        }

        if (array_key_exists("NoticeFrequency",$param) and $param["NoticeFrequency"] !== null) {
            $this->NoticeFrequency = $param["NoticeFrequency"];
        }

        if (array_key_exists("IsPowerNotice",$param) and $param["IsPowerNotice"] !== null) {
            $this->IsPowerNotice = $param["IsPowerNotice"];
        }

        if (array_key_exists("Filter",$param) and $param["Filter"] !== null) {
            $this->Filter = new AlarmPolicyFilter();
            $this->Filter->deserialize($param["Filter"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = $param["Unit"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("IsAdvanced",$param) and $param["IsAdvanced"] !== null) {
            $this->IsAdvanced = $param["IsAdvanced"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }

        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ValueMax",$param) and $param["ValueMax"] !== null) {
            $this->ValueMax = $param["ValueMax"];
        }

        if (array_key_exists("ValueMin",$param) and $param["ValueMin"] !== null) {
            $this->ValueMin = $param["ValueMin"];
        }

        if (array_key_exists("HierarchicalValue",$param) and $param["HierarchicalValue"] !== null) {
            $this->HierarchicalValue = new AlarmHierarchicalValue();
            $this->HierarchicalValue->deserialize($param["HierarchicalValue"]);
        }

        if (array_key_exists("IsLatenessMetric",$param) and $param["IsLatenessMetric"] !== null) {
            $this->IsLatenessMetric = $param["IsLatenessMetric"];
        }
    }
}
