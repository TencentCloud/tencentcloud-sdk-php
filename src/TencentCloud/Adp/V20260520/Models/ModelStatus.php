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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * <p>模型状态</p>
 *
 * @method integer getConcurrency() 获取<p>专属并发数</p>
 * @method void setConcurrency(integer $Concurrency) 设置<p>专属并发数</p>
 * @method boolean getIsExclusive() 获取<p>是否专属并发</p>
 * @method void setIsExclusive(boolean $IsExclusive) 设置<p>是否专属并发</p>
 * @method boolean getIsExperienceSupported() 获取<p>是否支持在智能工作台直接体验（模型广场详情页：依赖 space_id 动态判定；false 时前端置灰「立即体验」按钮）</p>
 * @method void setIsExperienceSupported(boolean $IsExperienceSupported) 设置<p>是否支持在智能工作台直接体验（模型广场详情页：依赖 space_id 动态判定；false 时前端置灰「立即体验」按钮）</p>
 * @method integer getResourceStatus() 获取<p>资源状态</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>资源可用</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>资源已用尽</td></tr></table>
 * @method void setResourceStatus(integer $ResourceStatus) 设置<p>资源状态</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>资源可用</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>资源已用尽</td></tr></table>
 * @method string getRpmLimit() 获取<p>调用 RPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
 * @method void setRpmLimit(string $RpmLimit) 设置<p>调用 RPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
 * @method string getTpmLimit() 获取<p>调用 TPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
 * @method void setTpmLimit(string $TpmLimit) 设置<p>调用 TPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
 */
class ModelStatus extends AbstractModel
{
    /**
     * @var integer <p>专属并发数</p>
     */
    public $Concurrency;

    /**
     * @var boolean <p>是否专属并发</p>
     */
    public $IsExclusive;

    /**
     * @var boolean <p>是否支持在智能工作台直接体验（模型广场详情页：依赖 space_id 动态判定；false 时前端置灰「立即体验」按钮）</p>
     */
    public $IsExperienceSupported;

    /**
     * @var integer <p>资源状态</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>资源可用</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>资源已用尽</td></tr></table>
     */
    public $ResourceStatus;

    /**
     * @var string <p>调用 RPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
     */
    public $RpmLimit;

    /**
     * @var string <p>调用 TPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
     */
    public $TpmLimit;

    /**
     * @param integer $Concurrency <p>专属并发数</p>
     * @param boolean $IsExclusive <p>是否专属并发</p>
     * @param boolean $IsExperienceSupported <p>是否支持在智能工作台直接体验（模型广场详情页：依赖 space_id 动态判定；false 时前端置灰「立即体验」按钮）</p>
     * @param integer $ResourceStatus <p>资源状态</p><table><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>RESOURCE_STATUS_UNSPECIFIED</td><td>0</td><td>未指定</td></tr><tr><td>RESOURCE_STATUS_AVAILABLE</td><td>1</td><td>资源可用</td></tr><tr><td>RESOURCE_STATUS_EXHAUSTED</td><td>2</td><td>资源已用尽</td></tr></table>
     * @param string $RpmLimit <p>调用 RPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
     * @param string $TpmLimit <p>调用 TPM 上限（当前账号维度：有配置取配置，无配置取默认；0 表示未获取到）</p>
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
        if (array_key_exists("Concurrency",$param) and $param["Concurrency"] !== null) {
            $this->Concurrency = $param["Concurrency"];
        }

        if (array_key_exists("IsExclusive",$param) and $param["IsExclusive"] !== null) {
            $this->IsExclusive = $param["IsExclusive"];
        }

        if (array_key_exists("IsExperienceSupported",$param) and $param["IsExperienceSupported"] !== null) {
            $this->IsExperienceSupported = $param["IsExperienceSupported"];
        }

        if (array_key_exists("ResourceStatus",$param) and $param["ResourceStatus"] !== null) {
            $this->ResourceStatus = $param["ResourceStatus"];
        }

        if (array_key_exists("RpmLimit",$param) and $param["RpmLimit"] !== null) {
            $this->RpmLimit = $param["RpmLimit"];
        }

        if (array_key_exists("TpmLimit",$param) and $param["TpmLimit"] !== null) {
            $this->TpmLimit = $param["TpmLimit"];
        }
    }
}
