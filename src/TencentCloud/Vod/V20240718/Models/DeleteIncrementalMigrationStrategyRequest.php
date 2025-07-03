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
 * DeleteIncrementalMigrationStrategy请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
 * @method string getBucketId() 获取策略生效的存储桶 ID。
 * @method void setBucketId(string $BucketId) 设置策略生效的存储桶 ID。
 * @method string getStrategyId() 获取增量迁移策略 ID。
 * @method void setStrategyId(string $StrategyId) 设置增量迁移策略 ID。
 */
class DeleteIncrementalMigrationStrategyRequest extends AbstractModel
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
     * @param integer $SubAppId <b>点播[专业版](/document/product/266/115396)[应用](/document/product/266/14574) ID。</b>
     * @param string $BucketId 策略生效的存储桶 ID。
     * @param string $StrategyId 增量迁移策略 ID。
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
    }
}
