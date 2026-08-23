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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义告警/风险等级
 *
 * @method string getType() 获取告警/风险类型
 * @method void setType(string $Type) 设置告警/风险类型
 * @method array getLevel() 获取告警等级 (1: 提示, 2: 低危, 3: 中危, 4: 高危, 5: 严重)
 * @method void setLevel(array $Level) 设置告警等级 (1: 提示, 2: 低危, 3: 中危, 4: 高危, 5: 严重)
 */
class LevelOption extends AbstractModel
{
    /**
     * @var string 告警/风险类型
     */
    public $Type;

    /**
     * @var array 告警等级 (1: 提示, 2: 低危, 3: 中危, 4: 高危, 5: 严重)
     */
    public $Level;

    /**
     * @param string $Type 告警/风险类型
     * @param array $Level 告警等级 (1: 提示, 2: 低危, 3: 中危, 4: 高危, 5: 严重)
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
