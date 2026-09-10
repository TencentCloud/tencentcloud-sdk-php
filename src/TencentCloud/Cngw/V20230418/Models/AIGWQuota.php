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
 * AI网关配额
 *
 * @method string getId() 获取<p>Id</p>
 * @method void setId(string $Id) 设置<p>Id</p>
 * @method string getResourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
 * @method void setResourceType(string $ResourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
 * @method string getResourceId() 获取<p>资源 id</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源 id</p>
 * @method string getResourceName() 获取<p>资源名字</p><p>如消费者名字</p>
 * @method void setResourceName(string $ResourceName) 设置<p>资源名字</p><p>如消费者名字</p>
 * @method string getQuotaType() 获取<p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： 总 token</li><li>Cost： 成本</li></ul>
 * @method void setQuotaType(string $QuotaType) 设置<p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： 总 token</li><li>Cost： 成本</li></ul>
 * @method string getPeriodUnit() 获取<p>配额周期单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
 * @method void setPeriodUnit(string $PeriodUnit) 设置<p>配额周期单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
 * @method integer getQuotaLimit() 获取<p>配额</p>
 * @method void setQuotaLimit(integer $QuotaLimit) 设置<p>配额</p>
 * @method boolean getEnabled() 获取<p>启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>启用</p>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getModifyTime() 获取<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
 * @method string getSource() 获取<p>配额类型，手动配额还是默认配额</p>
 * @method void setSource(string $Source) 设置<p>配额类型，手动配额还是默认配额</p>
 * @method string getExceedAction() 获取<p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>AllowOverage： 允许超支</li></ul>
 * @method void setExceedAction(string $ExceedAction) 设置<p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>AllowOverage： 允许超支</li></ul>
 * @method string getCacheHitStat() 获取<p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
 * @method void setCacheHitStat(string $CacheHitStat) 设置<p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
 */
class AIGWQuota extends AbstractModel
{
    /**
     * @var string <p>Id</p>
     */
    public $Id;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
     */
    public $ResourceType;

    /**
     * @var string <p>资源 id</p>
     */
    public $ResourceId;

    /**
     * @var string <p>资源名字</p><p>如消费者名字</p>
     */
    public $ResourceName;

    /**
     * @var string <p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： 总 token</li><li>Cost： 成本</li></ul>
     */
    public $QuotaType;

    /**
     * @var string <p>配额周期单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
     */
    public $PeriodUnit;

    /**
     * @var integer <p>配额</p>
     */
    public $QuotaLimit;

    /**
     * @var boolean <p>启用</p>
     */
    public $Enabled;

    /**
     * @var string <p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>配额类型，手动配额还是默认配额</p>
     */
    public $Source;

    /**
     * @var string <p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>AllowOverage： 允许超支</li></ul>
     */
    public $ExceedAction;

    /**
     * @var string <p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
     */
    public $CacheHitStat;

    /**
     * @param string $Id <p>Id</p>
     * @param string $ResourceType <p>资源类型</p><p>枚举值：</p><ul><li>Consumer： 消费者</li></ul>
     * @param string $ResourceId <p>资源 id</p>
     * @param string $ResourceName <p>资源名字</p><p>如消费者名字</p>
     * @param string $QuotaType <p>配额类型</p><p>枚举值：</p><ul><li>RequestCount： 请求数</li><li>TotalToken： 总 token</li><li>Cost： 成本</li></ul>
     * @param string $PeriodUnit <p>配额周期单位</p><p>枚举值：</p><ul><li>Day： 天</li><li>Week： 周</li><li>Month： 月</li></ul>
     * @param integer $QuotaLimit <p>配额</p>
     * @param boolean $Enabled <p>启用</p>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $ModifyTime <p>更新时间</p><p>参数格式：YYYY-MM-DD hh:mm:ss</p>
     * @param string $Source <p>配额类型，手动配额还是默认配额</p>
     * @param string $ExceedAction <p>配额超限行为</p><p>枚举值：</p><ul><li>Reject： 拒绝请求</li><li>AllowOverage： 允许超支</li></ul>
     * @param string $CacheHitStat <p>缓存是否计入限额</p><p>枚举值：</p><ul><li>Full： 全量计入</li><li>Exclude： 不计入网关缓存命中部分</li></ul>
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("ExceedAction",$param) and $param["ExceedAction"] !== null) {
            $this->ExceedAction = $param["ExceedAction"];
        }

        if (array_key_exists("CacheHitStat",$param) and $param["CacheHitStat"] !== null) {
            $this->CacheHitStat = $param["CacheHitStat"];
        }
    }
}
