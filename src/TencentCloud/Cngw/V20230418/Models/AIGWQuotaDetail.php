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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关配额详情
 *
 * @method string getId() 获取<p>id</p>
 * @method void setId(string $Id) 设置<p>id</p>
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
 * @method string getResourceId() 获取<p>资源id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源id</p>
 * @method string getResourceName() 获取<p>资源名字</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名字</p>
 * @method string getQuotaType() 获取<p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： token总数</li><li>Cost： 成本</li></ul>
 * @method void setQuotaType(string $QuotaType) 设置<p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： token总数</li><li>Cost： 成本</li></ul>
 * @method string getPeriodUnit() 获取<p>配额单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
 * @method void setPeriodUnit(string $PeriodUnit) 设置<p>配额单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
 * @method integer getQuotaLimit() 获取<p>配额</p><p>如果是成本则数值单位是分，如 1000 表示 10.00 元</p>
 * @method void setQuotaLimit(integer $QuotaLimit) 设置<p>配额</p><p>如果是成本则数值单位是分，如 1000 表示 10.00 元</p>
 * @method boolean getEnabled() 获取<p>启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>启用</p>
 * @method integer getUsed() 获取<p>用量</p>
 * @method void setUsed(integer $Used) 设置<p>用量</p>
 * @method float getUsageRate() 获取<p>使用率</p>
 * @method void setUsageRate(float $UsageRate) 设置<p>使用率</p>
 * @method string getAlarmLevel() 获取<p>预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
 * @method void setAlarmLevel(string $AlarmLevel) 设置<p>预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
 * @method string getSource() 获取<p>配额规则来源</p><p>枚举值：</p><ul><li>Manual： 手动配置</li><li>Default： 默认配额</li></ul>
 * @method void setSource(string $Source) 设置<p>配额规则来源</p><p>枚举值：</p><ul><li>Manual： 手动配置</li><li>Default： 默认配额</li></ul>
 * @method string getExceedAction() 获取<p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝消费者请求</li><li>AllowOverage： 允许超限</li></ul>
 * @method void setExceedAction(string $ExceedAction) 设置<p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝消费者请求</li><li>AllowOverage： 允许超限</li></ul>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModifyTime() 获取<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModifyTime(string $ModifyTime) 设置<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCacheHitStat() 获取<p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
 * @method void setCacheHitStat(string $CacheHitStat) 设置<p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
 * @method boolean getSetExceedPercentage() 获取<p>是否设置超限百分比</p><p>仅 Consumer 的 AllowOverage 场景可用，指定模型服务的配额必须为 false；ConsumerGroup 必须为 false。</p><p>枚举值：</p><ul><li>true： 设置超限百分比</li><li>false： 不设置超限百分比，即不设上限</li></ul><p>默认值：false</p><p>当ExceedAction=AllowOverage时，条件必选。</p>
 * @method void setSetExceedPercentage(boolean $SetExceedPercentage) 设置<p>是否设置超限百分比</p><p>仅 Consumer 的 AllowOverage 场景可用，指定模型服务的配额必须为 false；ConsumerGroup 必须为 false。</p><p>枚举值：</p><ul><li>true： 设置超限百分比</li><li>false： 不设置超限百分比，即不设上限</li></ul><p>默认值：false</p><p>当ExceedAction=AllowOverage时，条件必选。</p>
 * @method integer getExceedPercentage() 获取<p>超限百分比</p><p>默认值：0</p><p>Consumer 的超量百分比，指定模型服务配额默认为 0；ConsumerGroup 固定为 0。</p><p>举例：20，超出设置额度的20%，可用额度为（1+20%）*QuotaLimit。当SetExceedPercentage=true时，条件必选。</p>
 * @method void setExceedPercentage(integer $ExceedPercentage) 设置<p>超限百分比</p><p>默认值：0</p><p>Consumer 的超量百分比，指定模型服务配额默认为 0；ConsumerGroup 固定为 0。</p><p>举例：20，超出设置额度的20%，可用额度为（1+20%）*QuotaLimit。当SetExceedPercentage=true时，条件必选。</p>
 * @method float getUsedExact() 获取<p>精确使用量。Cost 单位为元，保留 1e-7 元精度；TotalToken 单位为 token；RequestCount 单位为次。旧版插件不提供精确值时省略，调用方可回退使用 Used；该值已换算为业务单位，不要再除以 ValueScale。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsedExact(float $UsedExact) 设置<p>精确使用量。Cost 单位为元，保留 1e-7 元精度；TotalToken 单位为 token；RequestCount 单位为次。旧版插件不提供精确值时省略，调用方可回退使用 Used；该值已换算为业务单位，不要再除以 ValueScale。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getConsumerGroupPath() 获取<p>消费者组完整层级路径。仅 ResourceType=ConsumerGroup 返回，未知时为空字符串；Consumer 行省略。</p>
 * @method void setConsumerGroupPath(string $ConsumerGroupPath) 设置<p>消费者组完整层级路径。仅 ResourceType=ConsumerGroup 返回，未知时为空字符串；Consumer 行省略。</p>
 * @method boolean getConsumerGroupActive() 获取<p>消费者组是否有效。仅 ResourceType=ConsumerGroup 返回；组不存在或非 active 时为 false。与配额规则 Enabled 区分，字段省略与 false 含义不同。</p>
 * @method void setConsumerGroupActive(boolean $ConsumerGroupActive) 设置<p>消费者组是否有效。仅 ResourceType=ConsumerGroup 返回；组不存在或非 active 时为 false。与配额规则 Enabled 区分，字段省略与 false 含义不同。</p>
 * @method array getSubResources() 获取<p>配额规则中，某资源对象的指定子资源配额信息。如资源对象“模型服务”的“指定模型服务”的配额信息。</p>
 * @method void setSubResources(array $SubResources) 设置<p>配额规则中，某资源对象的指定子资源配额信息。如资源对象“模型服务”的“指定模型服务”的配额信息。</p>
 */
class AIGWQuotaDetail extends AbstractModel
{
    /**
     * @var string <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>资源id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名字</p>
     */
    public $ResourceName;

    /**
     * @var string <p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： token总数</li><li>Cost： 成本</li></ul>
     */
    public $QuotaType;

    /**
     * @var string <p>配额单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
     */
    public $PeriodUnit;

    /**
     * @var integer <p>配额</p><p>如果是成本则数值单位是分，如 1000 表示 10.00 元</p>
     */
    public $QuotaLimit;

    /**
     * @var boolean <p>启用</p>
     */
    public $Enabled;

    /**
     * @var integer <p>用量</p>
     */
    public $Used;

    /**
     * @var float <p>使用率</p>
     */
    public $UsageRate;

    /**
     * @var string <p>预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
     */
    public $AlarmLevel;

    /**
     * @var string <p>配额规则来源</p><p>枚举值：</p><ul><li>Manual： 手动配置</li><li>Default： 默认配额</li></ul>
     */
    public $Source;

    /**
     * @var string <p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝消费者请求</li><li>AllowOverage： 允许超限</li></ul>
     */
    public $ExceedAction;

    /**
     * @var string <p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModifyTime;

    /**
     * @var string <p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
     */
    public $CacheHitStat;

    /**
     * @var boolean <p>是否设置超限百分比</p><p>仅 Consumer 的 AllowOverage 场景可用，指定模型服务的配额必须为 false；ConsumerGroup 必须为 false。</p><p>枚举值：</p><ul><li>true： 设置超限百分比</li><li>false： 不设置超限百分比，即不设上限</li></ul><p>默认值：false</p><p>当ExceedAction=AllowOverage时，条件必选。</p>
     */
    public $SetExceedPercentage;

    /**
     * @var integer <p>超限百分比</p><p>默认值：0</p><p>Consumer 的超量百分比，指定模型服务配额默认为 0；ConsumerGroup 固定为 0。</p><p>举例：20，超出设置额度的20%，可用额度为（1+20%）*QuotaLimit。当SetExceedPercentage=true时，条件必选。</p>
     */
    public $ExceedPercentage;

    /**
     * @var float <p>精确使用量。Cost 单位为元，保留 1e-7 元精度；TotalToken 单位为 token；RequestCount 单位为次。旧版插件不提供精确值时省略，调用方可回退使用 Used；该值已换算为业务单位，不要再除以 ValueScale。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsedExact;

    /**
     * @var string <p>消费者组完整层级路径。仅 ResourceType=ConsumerGroup 返回，未知时为空字符串；Consumer 行省略。</p>
     */
    public $ConsumerGroupPath;

    /**
     * @var boolean <p>消费者组是否有效。仅 ResourceType=ConsumerGroup 返回；组不存在或非 active 时为 false。与配额规则 Enabled 区分，字段省略与 false 含义不同。</p>
     */
    public $ConsumerGroupActive;

    /**
     * @var array <p>配额规则中，某资源对象的指定子资源配额信息。如资源对象“模型服务”的“指定模型服务”的配额信息。</p>
     */
    public $SubResources;

    /**
     * @param string $Id <p>id</p>
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
     * @param string $ResourceId <p>资源id</p>
     * @param string $ResourceName <p>资源名字</p>
     * @param string $QuotaType <p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： token总数</li><li>Cost： 成本</li></ul>
     * @param string $PeriodUnit <p>配额单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
     * @param integer $QuotaLimit <p>配额</p><p>如果是成本则数值单位是分，如 1000 表示 10.00 元</p>
     * @param boolean $Enabled <p>启用</p>
     * @param integer $Used <p>用量</p>
     * @param float $UsageRate <p>使用率</p>
     * @param string $AlarmLevel <p>预警级别</p><p>枚举值：</p><ul><li>Normal： 正常</li><li>Warning： 预警</li><li>NearLimit： 临近超限</li><li>Exceeded： 超限</li></ul>
     * @param string $Source <p>配额规则来源</p><p>枚举值：</p><ul><li>Manual： 手动配置</li><li>Default： 默认配额</li></ul>
     * @param string $ExceedAction <p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝消费者请求</li><li>AllowOverage： 允许超限</li></ul>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModifyTime <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CacheHitStat <p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
     * @param boolean $SetExceedPercentage <p>是否设置超限百分比</p><p>仅 Consumer 的 AllowOverage 场景可用，指定模型服务的配额必须为 false；ConsumerGroup 必须为 false。</p><p>枚举值：</p><ul><li>true： 设置超限百分比</li><li>false： 不设置超限百分比，即不设上限</li></ul><p>默认值：false</p><p>当ExceedAction=AllowOverage时，条件必选。</p>
     * @param integer $ExceedPercentage <p>超限百分比</p><p>默认值：0</p><p>Consumer 的超量百分比，指定模型服务配额默认为 0；ConsumerGroup 固定为 0。</p><p>举例：20，超出设置额度的20%，可用额度为（1+20%）*QuotaLimit。当SetExceedPercentage=true时，条件必选。</p>
     * @param float $UsedExact <p>精确使用量。Cost 单位为元，保留 1e-7 元精度；TotalToken 单位为 token；RequestCount 单位为次。旧版插件不提供精确值时省略，调用方可回退使用 Used；该值已换算为业务单位，不要再除以 ValueScale。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ConsumerGroupPath <p>消费者组完整层级路径。仅 ResourceType=ConsumerGroup 返回，未知时为空字符串；Consumer 行省略。</p>
     * @param boolean $ConsumerGroupActive <p>消费者组是否有效。仅 ResourceType=ConsumerGroup 返回；组不存在或非 active 时为 false。与配额规则 Enabled 区分，字段省略与 false 含义不同。</p>
     * @param array $SubResources <p>配额规则中，某资源对象的指定子资源配额信息。如资源对象“模型服务”的“指定模型服务”的配额信息。</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ResourceName",$param) and $param["ResourceName"] !== null) {
            $this->ResourceName = $param["ResourceName"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("PeriodUnit",$param) and $param["PeriodUnit"] !== null) {
            $this->PeriodUnit = $param["PeriodUnit"];
        }

        if (array_key_exists("QuotaLimit",$param) and $param["QuotaLimit"] !== null) {
            $this->QuotaLimit = $param["QuotaLimit"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("UsageRate",$param) and $param["UsageRate"] !== null) {
            $this->UsageRate = $param["UsageRate"];
        }

        if (array_key_exists("AlarmLevel",$param) and $param["AlarmLevel"] !== null) {
            $this->AlarmLevel = $param["AlarmLevel"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ExceedAction",$param) and $param["ExceedAction"] !== null) {
            $this->ExceedAction = $param["ExceedAction"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CacheHitStat",$param) and $param["CacheHitStat"] !== null) {
            $this->CacheHitStat = $param["CacheHitStat"];
        }

        if (array_key_exists("SetExceedPercentage",$param) and $param["SetExceedPercentage"] !== null) {
            $this->SetExceedPercentage = $param["SetExceedPercentage"];
        }

        if (array_key_exists("ExceedPercentage",$param) and $param["ExceedPercentage"] !== null) {
            $this->ExceedPercentage = $param["ExceedPercentage"];
        }

        if (array_key_exists("UsedExact",$param) and $param["UsedExact"] !== null) {
            $this->UsedExact = $param["UsedExact"];
        }

        if (array_key_exists("ConsumerGroupPath",$param) and $param["ConsumerGroupPath"] !== null) {
            $this->ConsumerGroupPath = $param["ConsumerGroupPath"];
        }

        if (array_key_exists("ConsumerGroupActive",$param) and $param["ConsumerGroupActive"] !== null) {
            $this->ConsumerGroupActive = $param["ConsumerGroupActive"];
        }

        if (array_key_exists("SubResources",$param) and $param["SubResources"] !== null) {
            $this->SubResources = [];
            foreach ($param["SubResources"] as $key => $value){
                $obj = new AIGWQuotaSubItem();
                $obj->deserialize($value);
                array_push($this->SubResources, $obj);
            }
        }
    }
}
