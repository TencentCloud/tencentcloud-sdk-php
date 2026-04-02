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
 * 引用/被引用的实例信息。
 *
 * @method string getZoneId() 获取站点ID。
 * @method void setZoneId(string $ZoneId) 设置站点ID。
 * @method string getType() 获取实例类型，取值如下：
<li>acceleration-domain：加速域名；</li>
 * @method void setType(string $Type) 设置实例类型，取值如下：
<li>acceleration-domain：加速域名；</li>
 * @method string getInstance() 获取被引用/引用的实例信息。
 * @method void setInstance(string $Instance) 设置被引用/引用的实例信息。
 */
class ReferenceHolder extends AbstractModel
{
    /**
     * @var string 站点ID。
     */
    public $ZoneId;

    /**
     * @var string 实例类型，取值如下：
<li>acceleration-domain：加速域名；</li>
     */
    public $Type;

    /**
     * @var string 被引用/引用的实例信息。
     */
    public $Instance;

    /**
     * @param string $ZoneId 站点ID。
     * @param string $Type 实例类型，取值如下：
<li>acceleration-domain：加速域名；</li>
     * @param string $Instance 被引用/引用的实例信息。
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Instance",$param) and $param["Instance"] !== null) {
            $this->Instance = $param["Instance"];
        }
    }
}
