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
 * CreateIncrementalMigrationStrategy请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method string getBucketId() 获取策略生效的存储桶 ID。
 * @method void setBucketId(string $BucketId) 设置策略生效的存储桶 ID。
 * @method string getStrategyName() 获取增量迁移策略名称，名称长度不超过100个字符，允许的字符为：`中文、英文、0-9、_、-`。
 * @method void setStrategyName(string $StrategyName) 设置增量迁移策略名称，名称长度不超过100个字符，允许的字符为：`中文、英文、0-9、_、-`。
 * @method string getOriginType() 获取源站类型。取值有：
<li>HTTP：HTTP 源。</li>
 * @method void setOriginType(string $OriginType) 设置源站类型。取值有：
<li>HTTP：HTTP 源。</li>
 * @method IncrementalMigrationHttpOriginConfig getHttpOriginConfig() 获取增量迁移 HTTP 回源源站配置，当 OriginType 取值 `HTTP` 时必填。
 * @method void setHttpOriginConfig(IncrementalMigrationHttpOriginConfig $HttpOriginConfig) 设置增量迁移 HTTP 回源源站配置，当 OriginType 取值 `HTTP` 时必填。
 */
class CreateIncrementalMigrationStrategyRequest extends AbstractModel
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
     * @var string 增量迁移策略名称，名称长度不超过100个字符，允许的字符为：`中文、英文、0-9、_、-`。
     */
    public $StrategyName;

    /**
     * @var string 源站类型。取值有：
<li>HTTP：HTTP 源。</li>
     */
    public $OriginType;

    /**
     * @var IncrementalMigrationHttpOriginConfig 增量迁移 HTTP 回源源站配置，当 OriginType 取值 `HTTP` 时必填。
     */
    public $HttpOriginConfig;

    /**
     * @param integer $SubAppId <b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
     * @param string $BucketId 策略生效的存储桶 ID。
     * @param string $StrategyName 增量迁移策略名称，名称长度不超过100个字符，允许的字符为：`中文、英文、0-9、_、-`。
     * @param string $OriginType 源站类型。取值有：
<li>HTTP：HTTP 源。</li>
     * @param IncrementalMigrationHttpOriginConfig $HttpOriginConfig 增量迁移 HTTP 回源源站配置，当 OriginType 取值 `HTTP` 时必填。
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
