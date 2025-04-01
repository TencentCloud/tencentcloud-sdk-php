<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 增量迁移策略信息。
 *
 * @method string getStrategyId() 获取策略 ID。
 * @method void setStrategyId(string $StrategyId) 设置策略 ID。
 * @method string getStrategyName() 获取策略名称。
 * @method void setStrategyName(string $StrategyName) 设置策略名称。
 * @method integer getSubAppId() 获取<b>策略生效的点播专业版[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>策略生效的点播专业版[应用](/document/product/266/14574) ID。</b>
 * @method string getBucketId() 获取策略生效的存储桶 ID。
 * @method void setBucketId(string $BucketId) 设置策略生效的存储桶 ID。
 * @method string getOriginType() 获取源站类型。取值有：<li>HTTP：HTTP 源。</li>
 * @method void setOriginType(string $OriginType) 设置源站类型。取值有：<li>HTTP：HTTP 源。</li>
 * @method IncrementalMigrationHttpOriginConfig getHttpOriginConfig() 获取回源源站配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpOriginConfig(IncrementalMigrationHttpOriginConfig $HttpOriginConfig) 设置回源源站配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class IncrementalMigrationStrategyInfo extends AbstractModel
{
    /**
     * @var string 策略 ID。
     */
    public $StrategyId;

    /**
     * @var string 策略名称。
     */
    public $StrategyName;

    /**
     * @var integer <b>策略生效的点播专业版[应用](/document/product/266/14574) ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 策略生效的存储桶 ID。
     */
    public $BucketId;

    /**
     * @var string 源站类型。取值有：<li>HTTP：HTTP 源。</li>
     */
    public $OriginType;

    /**
     * @var IncrementalMigrationHttpOriginConfig 回源源站配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpOriginConfig;

    /**
     * @param string $StrategyId 策略 ID。
     * @param string $StrategyName 策略名称。
     * @param integer $SubAppId <b>策略生效的点播专业版[应用](/document/product/266/14574) ID。</b>
     * @param string $BucketId 策略生效的存储桶 ID。
     * @param string $OriginType 源站类型。取值有：<li>HTTP：HTTP 源。</li>
     * @param IncrementalMigrationHttpOriginConfig $HttpOriginConfig 回源源站配置。
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
        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("BucketId",$param) and $param["BucketId"] !== null) {
            $this->BucketId = $param["BucketId"];
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
