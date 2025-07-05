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
namespace TencentCloud\Vod\V20240718\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyIncrementalMigrationStrategy请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method string getBucketId() 获取策略生效的存储桶 ID。
 * @method void setBucketId(string $BucketId) 设置策略生效的存储桶 ID。
 * @method string getStrategyId() 获取增量迁移策略 ID。
 * @method void setStrategyId(string $StrategyId) 设置增量迁移策略 ID。
 * @method string getStrategyName() 获取策略名称。若不填充或填充空字符串，则不修改。
 * @method void setStrategyName(string $StrategyName) 设置策略名称。若不填充或填充空字符串，则不修改。
 * @method string getOriginType() 获取源站类型。取值有：<li>HTTP：HTTP 源。</li>若不填或填充空字符串，则不修改。
 * @method void setOriginType(string $OriginType) 设置源站类型。取值有：<li>HTTP：HTTP 源。</li>若不填或填充空字符串，则不修改。
 * @method IncrementalMigrationHttpOriginConfig getHttpOriginConfig() 获取HTTP 回源源站配置，若不填则默认不修改。
 * @method void setHttpOriginConfig(IncrementalMigrationHttpOriginConfig $HttpOriginConfig) 设置HTTP 回源源站配置，若不填则默认不修改。
 */
class ModifyIncrementalMigrationStrategyRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 策略生效的存储桶 ID。
     */
    public $BucketId;

    /**
     * @var string 增量迁移策略 ID。
     */
    public $StrategyId;

    /**
     * @var string 策略名称。若不填充或填充空字符串，则不修改。
     */
    public $StrategyName;

    /**
     * @var string 源站类型。取值有：<li>HTTP：HTTP 源。</li>若不填或填充空字符串，则不修改。
     */
    public $OriginType;

    /**
     * @var IncrementalMigrationHttpOriginConfig HTTP 回源源站配置，若不填则默认不修改。
     */
    public $HttpOriginConfig;

    /**
     * @param integer $SubAppId <b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
     * @param string $BucketId 策略生效的存储桶 ID。
     * @param string $StrategyId 增量迁移策略 ID。
     * @param string $StrategyName 策略名称。若不填充或填充空字符串，则不修改。
     * @param string $OriginType 源站类型。取值有：<li>HTTP：HTTP 源。</li>若不填或填充空字符串，则不修改。
     * @param IncrementalMigrationHttpOriginConfig $HttpOriginConfig HTTP 回源源站配置，若不填则默认不修改。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("OriginType",$param) and $param["OriginType"] !== null) {
            $this->OriginType = $param["OriginType"];
        }

        if (array_key_exists("HttpOriginConfig",$param) and $param["HttpOriginConfig"] !== null) {
            $this->HttpOriginConfig = new IncrementalMigrationHttpOriginConfig();
            $this->HttpOriginConfig->deserialize($param["HttpOriginConfig"]);
        }
    }
}
