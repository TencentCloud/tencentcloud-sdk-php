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
 * @method string getResourceId() 获取资源 ID
 * @method void setResourceId(string $ResourceId) 设置资源 ID
 * @method string getServiceTier() 获取套餐规格。可能取值：

- `BASIC`：包年包月基础版（适用于视频理解）
 * @method void setServiceTier(string $ServiceTier) 设置套餐规格。可能取值：

- `BASIC`：包年包月基础版（适用于视频理解）
 * @method integer getExpireTime() 获取到期时间，秒级时间戳
 * @method void setExpireTime(integer $ExpireTime) 设置到期时间，秒级时间戳
 * @method boolean getEnabled() 获取启用状态，`true` 为开启，`false` 为关闭
 * @method void setEnabled(boolean $Enabled) 设置启用状态，`true` 为开启，`false` 为关闭
 * @method string getStatus() 获取订阅状态。可能取值：

- `NORMAL`：正常
- `ISOLATED`：隔离
 * @method void setStatus(string $Status) 设置订阅状态。可能取值：

- `NORMAL`：正常
- `ISOLATED`：隔离
 * @method SeeComprehensionConfig getComprehensionConfig() 获取视觉理解配置（适用于视频理解、图片理解）
 * @method void setComprehensionConfig(SeeComprehensionConfig $ComprehensionConfig) 设置视觉理解配置（适用于视频理解、图片理解）
 * @method SeeCompHighlightConfig getCompHighlightConfig() 获取视频语义浓缩配置（适用于视频语义浓缩）
 * @method void setCompHighlightConfig(SeeCompHighlightConfig $CompHighlightConfig) 设置视频语义浓缩配置（适用于视频语义浓缩）
 * @method SeeEventIdFilterConfig getEventIdFilterConfig() 获取云存事件 ID 过滤规则配置项
 * @method void setEventIdFilterConfig(SeeEventIdFilterConfig $EventIdFilterConfig) 设置云存事件 ID 过滤规则配置项
 * @method integer getQuotaBasic() 获取当前周期基础能力总额度
 * @method void setQuotaBasic(integer $QuotaBasic) 设置当前周期基础能力总额度
 * @method integer getQuotaUsedBasic() 获取当前周期基础能力已用额度
 * @method void setQuotaUsedBasic(integer $QuotaUsedBasic) 设置当前周期基础能力已用额度
 * @method integer getQuotaAdvanced() 获取当前周期高级能力总额度
 * @method void setQuotaAdvanced(integer $QuotaAdvanced) 设置当前周期高级能力总额度
 * @method integer getQuotaUsedAdvanced() 获取当前周期高级能力已用额度
 * @method void setQuotaUsedAdvanced(integer $QuotaUsedAdvanced) 设置当前周期高级能力已用额度
 * @method integer getQuotaRefreshTime() 获取额度刷新时间
 * @method void setQuotaRefreshTime(integer $QuotaRefreshTime) 设置额度刷新时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTWeSeeSubscriptionResponse extends AbstractModel
{
    /**
     * @var string 资源 ID
     */
    public $ResourceId;

    /**
     * @var string 套餐规格。可能取值：

- `BASIC`：包年包月基础版（适用于视频理解）
     */
    public $ServiceTier;

    /**
     * @var integer 到期时间，秒级时间戳
     */
    public $ExpireTime;

    /**
     * @var boolean 启用状态，`true` 为开启，`false` 为关闭
     */
    public $Enabled;

    /**
     * @var string 订阅状态。可能取值：

- `NORMAL`：正常
- `ISOLATED`：隔离
     */
    public $Status;

    /**
     * @var SeeComprehensionConfig 视觉理解配置（适用于视频理解、图片理解）
     */
    public $ComprehensionConfig;

    /**
     * @var SeeCompHighlightConfig 视频语义浓缩配置（适用于视频语义浓缩）
     */
    public $CompHighlightConfig;

    /**
     * @var SeeEventIdFilterConfig 云存事件 ID 过滤规则配置项
     */
    public $EventIdFilterConfig;

    /**
     * @var integer 当前周期基础能力总额度
     */
    public $QuotaBasic;

    /**
     * @var integer 当前周期基础能力已用额度
     */
    public $QuotaUsedBasic;

    /**
     * @var integer 当前周期高级能力总额度
     */
    public $QuotaAdvanced;

    /**
     * @var integer 当前周期高级能力已用额度
     */
    public $QuotaUsedAdvanced;

    /**
     * @var integer 额度刷新时间
     */
    public $QuotaRefreshTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ResourceId 资源 ID
     * @param string $ServiceTier 套餐规格。可能取值：

- `BASIC`：包年包月基础版（适用于视频理解）
     * @param integer $ExpireTime 到期时间，秒级时间戳
     * @param boolean $Enabled 启用状态，`true` 为开启，`false` 为关闭
     * @param string $Status 订阅状态。可能取值：

- `NORMAL`：正常
- `ISOLATED`：隔离
     * @param SeeComprehensionConfig $ComprehensionConfig 视觉理解配置（适用于视频理解、图片理解）
     * @param SeeCompHighlightConfig $CompHighlightConfig 视频语义浓缩配置（适用于视频语义浓缩）
     * @param SeeEventIdFilterConfig $EventIdFilterConfig 云存事件 ID 过滤规则配置项
     * @param integer $QuotaBasic 当前周期基础能力总额度
     * @param integer $QuotaUsedBasic 当前周期基础能力已用额度
     * @param integer $QuotaAdvanced 当前周期高级能力总额度
     * @param integer $QuotaUsedAdvanced 当前周期高级能力已用额度
     * @param integer $QuotaRefreshTime 额度刷新时间
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
