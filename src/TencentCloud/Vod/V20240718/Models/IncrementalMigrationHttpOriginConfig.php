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
 * 增量迁移回源源站配置。
 *
 * @method IncrementalMigrationHttpOriginInfo getOriginInfo() 获取回源源站信息。
 * @method void setOriginInfo(IncrementalMigrationHttpOriginInfo $OriginInfo) 设置回源源站信息。
 * @method IncrementalMigrationHttpOriginParameter getOriginParameter() 获取回源参数。
 * @method void setOriginParameter(IncrementalMigrationHttpOriginParameter $OriginParameter) 设置回源参数。
 * @method string getMode() 获取回源模式。取值有：
<li>SYNC：同步回源；</li>
<li>ASYNC：异步回源。</li>若不填，默认取 `SYNC` 同步回源。
 * @method void setMode(string $Mode) 设置回源模式。取值有：
<li>SYNC：同步回源；</li>
<li>ASYNC：异步回源。</li>若不填，默认取 `SYNC` 同步回源。
 * @method IncrementalMigrationHttpOriginCondition getOriginCondition() 获取回源条件。
 * @method void setOriginCondition(IncrementalMigrationHttpOriginCondition $OriginCondition) 设置回源条件。
 */
class IncrementalMigrationHttpOriginConfig extends AbstractModel
{
    /**
     * @var IncrementalMigrationHttpOriginInfo 回源源站信息。
     */
    public $OriginInfo;

    /**
     * @var IncrementalMigrationHttpOriginParameter 回源参数。
     */
    public $OriginParameter;

    /**
     * @var string 回源模式。取值有：
<li>SYNC：同步回源；</li>
<li>ASYNC：异步回源。</li>若不填，默认取 `SYNC` 同步回源。
     */
    public $Mode;

    /**
     * @var IncrementalMigrationHttpOriginCondition 回源条件。
     */
    public $OriginCondition;

    /**
     * @param IncrementalMigrationHttpOriginInfo $OriginInfo 回源源站信息。
     * @param IncrementalMigrationHttpOriginParameter $OriginParameter 回源参数。
     * @param string $Mode 回源模式。取值有：
<li>SYNC：同步回源；</li>
<li>ASYNC：异步回源。</li>若不填，默认取 `SYNC` 同步回源。
     * @param IncrementalMigrationHttpOriginCondition $OriginCondition 回源条件。
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
        if (array_key_exists("OriginInfo",$param) and $param["OriginInfo"] !== null) {
            $this->OriginInfo = new IncrementalMigrationHttpOriginInfo();
            $this->OriginInfo->deserialize($param["OriginInfo"]);
        }

        if (array_key_exists("OriginParameter",$param) and $param["OriginParameter"] !== null) {
            $this->OriginParameter = new IncrementalMigrationHttpOriginParameter();
            $this->OriginParameter->deserialize($param["OriginParameter"]);
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("OriginCondition",$param) and $param["OriginCondition"] !== null) {
            $this->OriginCondition = new IncrementalMigrationHttpOriginCondition();
            $this->OriginCondition->deserialize($param["OriginCondition"]);
        }
    }
}
