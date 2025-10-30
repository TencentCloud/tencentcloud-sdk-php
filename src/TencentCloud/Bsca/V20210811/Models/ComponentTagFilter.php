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
namespace TencentCloud\Bsca\V20210811\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 筛选条件，同一个Tag不能同时出现在IncludeTags和ExcludeTags，可能的Tag包括："CopyrightUpdated", "LicenseUpdated", "ContainsVulnerability"
 *
 * @method array getIncludeTags() 获取包括的Tag

 * @method void setIncludeTags(array $IncludeTags) 设置包括的Tag

 * @method array getExcludeTags() 获取排除的Tag
 * @method void setExcludeTags(array $ExcludeTags) 设置排除的Tag
 */
class ComponentTagFilter extends AbstractModel
{
    /**
     * @var array 包括的Tag

     */
    public $IncludeTags;

    /**
     * @var array 排除的Tag
     */
    public $ExcludeTags;

    /**
     * @param array $IncludeTags 包括的Tag

     * @param array $ExcludeTags 排除的Tag
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
        if (array_key_exists("IncludeTags",$param) and $param["IncludeTags"] !== null) {
            $this->IncludeTags = $param["IncludeTags"];
        }

        if (array_key_exists("ExcludeTags",$param) and $param["ExcludeTags"] !== null) {
            $this->ExcludeTags = $param["ExcludeTags"];
        }
    }
}
