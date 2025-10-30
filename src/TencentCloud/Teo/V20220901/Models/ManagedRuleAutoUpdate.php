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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管规则自动更新选项
 *
 * @method string getAutoUpdateToLatestVersion() 获取是否开启自动更新至最新版本。取值有：<li>on：开启</li><li>off：关闭</li>
 * @method void setAutoUpdateToLatestVersion(string $AutoUpdateToLatestVersion) 设置是否开启自动更新至最新版本。取值有：<li>on：开启</li><li>off：关闭</li>
 * @method string getRulesetVersion() 获取当前使用的版本，格式符合ISO 8601标准，如2023-12-21T12:00:32Z，默认为空，仅出参。
 * @method void setRulesetVersion(string $RulesetVersion) 设置当前使用的版本，格式符合ISO 8601标准，如2023-12-21T12:00:32Z，默认为空，仅出参。
 */
class ManagedRuleAutoUpdate extends AbstractModel
{
    /**
     * @var string 是否开启自动更新至最新版本。取值有：<li>on：开启</li><li>off：关闭</li>
     */
    public $AutoUpdateToLatestVersion;

    /**
     * @var string 当前使用的版本，格式符合ISO 8601标准，如2023-12-21T12:00:32Z，默认为空，仅出参。
     */
    public $RulesetVersion;

    /**
     * @param string $AutoUpdateToLatestVersion 是否开启自动更新至最新版本。取值有：<li>on：开启</li><li>off：关闭</li>
     * @param string $RulesetVersion 当前使用的版本，格式符合ISO 8601标准，如2023-12-21T12:00:32Z，默认为空，仅出参。
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
        if (array_key_exists("AutoUpdateToLatestVersion",$param) and $param["AutoUpdateToLatestVersion"] !== null) {
            $this->AutoUpdateToLatestVersion = $param["AutoUpdateToLatestVersion"];
        }

        if (array_key_exists("RulesetVersion",$param) and $param["RulesetVersion"] !== null) {
            $this->RulesetVersion = $param["RulesetVersion"];
        }
    }
}
