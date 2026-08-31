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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTWeSeeSubscription返回参数结构体
 *
 * @method string getResourceId() 获取<p>资源 ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>资源 ID</p>
 * @method string getServiceTier() 获取<p>套餐规格。可能取值：</p><ul><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
 * @method void setServiceTier(string $ServiceTier) 设置<p>套餐规格。可能取值：</p><ul><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
 * @method integer getExpireTime() 获取<p>到期时间，秒级时间戳</p>
 * @method void setExpireTime(integer $ExpireTime) 设置<p>到期时间，秒级时间戳</p>
 * @method boolean getEnabled() 获取<p>启用状态，<code>true</code> 为开启，<code>false</code> 为关闭</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>启用状态，<code>true</code> 为开启，<code>false</code> 为关闭</p>
 * @method string getStatus() 获取<p>订阅状态。可能取值：</p><ul><li><code>NORMAL</code>：正常</li><li><code>ISOLATED</code>：隔离</li></ul>
 * @method void setStatus(string $Status) 设置<p>订阅状态。可能取值：</p><ul><li><code>NORMAL</code>：正常</li><li><code>ISOLATED</code>：隔离</li></ul>
 * @method SeeComprehensionConfig getComprehensionConfig() 获取<p>视觉理解配置（适用于视频理解、图片理解）</p>
 * @method void setComprehensionConfig(SeeComprehensionConfig $ComprehensionConfig) 设置<p>视觉理解配置（适用于视频理解、图片理解）</p>
 * @method SeeCompHighlightConfig getCompHighlightConfig() 获取<p>视频语义浓缩配置（适用于视频语义浓缩）</p>
 * @method void setCompHighlightConfig(SeeCompHighlightConfig $CompHighlightConfig) 设置<p>视频语义浓缩配置（适用于视频语义浓缩）</p>
 * @method SeeEventIdFilterConfig getEventIdFilterConfig() 获取<p>云存事件 ID 过滤规则配置项</p>
 * @method void setEventIdFilterConfig(SeeEventIdFilterConfig $EventIdFilterConfig) 设置<p>云存事件 ID 过滤规则配置项</p>
 * @method SeeSummarizeConfig getSummarizeConfig() 获取<p>每日与每周总结配置</p>
 * @method void setSummarizeConfig(SeeSummarizeConfig $SummarizeConfig) 设置<p>每日与每周总结配置</p>
 * @method integer getQuotaBasic() 获取<p>当前周期基础能力总额度</p>
 * @method void setQuotaBasic(integer $QuotaBasic) 设置<p>当前周期基础能力总额度</p>
 * @method integer getQuotaUsedBasic() 获取<p>当前周期基础能力已用额度</p>
 * @method void setQuotaUsedBasic(integer $QuotaUsedBasic) 设置<p>当前周期基础能力已用额度</p>
 * @method integer getQuotaAdvanced() 获取<p>当前周期高级能力总额度</p>
 * @method void setQuotaAdvanced(integer $QuotaAdvanced) 设置<p>当前周期高级能力总额度</p>
 * @method integer getQuotaUsedAdvanced() 获取<p>当前周期高级能力已用额度</p>
 * @method void setQuotaUsedAdvanced(integer $QuotaUsedAdvanced) 设置<p>当前周期高级能力已用额度</p>
 * @method integer getQuotaRefreshTime() 获取<p>额度刷新时间</p>
 * @method void setQuotaRefreshTime(integer $QuotaRefreshTime) 设置<p>额度刷新时间</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTWeSeeSubscriptionResponse extends AbstractModel
{
    /**
     * @var string <p>资源 ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>套餐规格。可能取值：</p><ul><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
     */
    public $ServiceTier;

    /**
     * @var integer <p>到期时间，秒级时间戳</p>
     */
    public $ExpireTime;

    /**
     * @var boolean <p>启用状态，<code>true</code> 为开启，<code>false</code> 为关闭</p>
     */
    public $Enabled;

    /**
     * @var string <p>订阅状态。可能取值：</p><ul><li><code>NORMAL</code>：正常</li><li><code>ISOLATED</code>：隔离</li></ul>
     */
    public $Status;

    /**
     * @var SeeComprehensionConfig <p>视觉理解配置（适用于视频理解、图片理解）</p>
     */
    public $ComprehensionConfig;

    /**
     * @var SeeCompHighlightConfig <p>视频语义浓缩配置（适用于视频语义浓缩）</p>
     */
    public $CompHighlightConfig;

    /**
     * @var SeeEventIdFilterConfig <p>云存事件 ID 过滤规则配置项</p>
     */
    public $EventIdFilterConfig;

    /**
     * @var SeeSummarizeConfig <p>每日与每周总结配置</p>
     */
    public $SummarizeConfig;

    /**
     * @var integer <p>当前周期基础能力总额度</p>
     */
    public $QuotaBasic;

    /**
     * @var integer <p>当前周期基础能力已用额度</p>
     */
    public $QuotaUsedBasic;

    /**
     * @var integer <p>当前周期高级能力总额度</p>
     */
    public $QuotaAdvanced;

    /**
     * @var integer <p>当前周期高级能力已用额度</p>
     */
    public $QuotaUsedAdvanced;

    /**
     * @var integer <p>额度刷新时间</p>
     */
    public $QuotaRefreshTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId <p>资源 ID</p>
     * @param string $ServiceTier <p>套餐规格。可能取值：</p><ul><li><code>BASIC</code>：包年包月基础版（适用于视频理解）</li></ul>
     * @param integer $ExpireTime <p>到期时间，秒级时间戳</p>
     * @param boolean $Enabled <p>启用状态，<code>true</code> 为开启，<code>false</code> 为关闭</p>
     * @param string $Status <p>订阅状态。可能取值：</p><ul><li><code>NORMAL</code>：正常</li><li><code>ISOLATED</code>：隔离</li></ul>
     * @param SeeComprehensionConfig $ComprehensionConfig <p>视觉理解配置（适用于视频理解、图片理解）</p>
     * @param SeeCompHighlightConfig $CompHighlightConfig <p>视频语义浓缩配置（适用于视频语义浓缩）</p>
     * @param SeeEventIdFilterConfig $EventIdFilterConfig <p>云存事件 ID 过滤规则配置项</p>
     * @param SeeSummarizeConfig $SummarizeConfig <p>每日与每周总结配置</p>
     * @param integer $QuotaBasic <p>当前周期基础能力总额度</p>
     * @param integer $QuotaUsedBasic <p>当前周期基础能力已用额度</p>
     * @param integer $QuotaAdvanced <p>当前周期高级能力总额度</p>
     * @param integer $QuotaUsedAdvanced <p>当前周期高级能力已用额度</p>
     * @param integer $QuotaRefreshTime <p>额度刷新时间</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("ServiceTier",$param) and $param["ServiceTier"] !== null) {
            $this->ServiceTier = $param["ServiceTier"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ComprehensionConfig",$param) and $param["ComprehensionConfig"] !== null) {
            $this->ComprehensionConfig = new SeeComprehensionConfig();
            $this->ComprehensionConfig->deserialize($param["ComprehensionConfig"]);
        }

        if (array_key_exists("CompHighlightConfig",$param) and $param["CompHighlightConfig"] !== null) {
            $this->CompHighlightConfig = new SeeCompHighlightConfig();
            $this->CompHighlightConfig->deserialize($param["CompHighlightConfig"]);
        }

        if (array_key_exists("EventIdFilterConfig",$param) and $param["EventIdFilterConfig"] !== null) {
            $this->EventIdFilterConfig = new SeeEventIdFilterConfig();
            $this->EventIdFilterConfig->deserialize($param["EventIdFilterConfig"]);
        }

        if (array_key_exists("SummarizeConfig",$param) and $param["SummarizeConfig"] !== null) {
            $this->SummarizeConfig = new SeeSummarizeConfig();
            $this->SummarizeConfig->deserialize($param["SummarizeConfig"]);
        }

        if (array_key_exists("QuotaBasic",$param) and $param["QuotaBasic"] !== null) {
            $this->QuotaBasic = $param["QuotaBasic"];
        }

        if (array_key_exists("QuotaUsedBasic",$param) and $param["QuotaUsedBasic"] !== null) {
            $this->QuotaUsedBasic = $param["QuotaUsedBasic"];
        }

        if (array_key_exists("QuotaAdvanced",$param) and $param["QuotaAdvanced"] !== null) {
            $this->QuotaAdvanced = $param["QuotaAdvanced"];
        }

        if (array_key_exists("QuotaUsedAdvanced",$param) and $param["QuotaUsedAdvanced"] !== null) {
            $this->QuotaUsedAdvanced = $param["QuotaUsedAdvanced"];
        }

        if (array_key_exists("QuotaRefreshTime",$param) and $param["QuotaRefreshTime"] !== null) {
            $this->QuotaRefreshTime = $param["QuotaRefreshTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
