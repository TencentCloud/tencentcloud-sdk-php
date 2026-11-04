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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHaVipAttribute请求参数结构体
 *
 * @method string getHaVipId() 获取<p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
 * @method void setHaVipId(string $HaVipId) 设置<p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
 * @method string getHaVipName() 获取<p><code>HAVIP</code>名称，可任意命名，但不得超过60个字符。</p>
 * @method void setHaVipName(string $HaVipName) 设置<p><code>HAVIP</code>名称，可任意命名，但不得超过60个字符。</p>
 * @method boolean getTerminationProtection() 获取<p>删除保护。</p>
 * @method void setTerminationProtection(boolean $TerminationProtection) 设置<p>删除保护。</p>
 * @method boolean getTrafficProtection() 获取<p>流量保护。</p>
 * @method void setTrafficProtection(boolean $TrafficProtection) 设置<p>流量保护。</p>
 */
class ModifyHaVipAttributeRequest extends AbstractModel
{
    /**
     * @var string <p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
     */
    public $HaVipId;

    /**
     * @var string <p><code>HAVIP</code>名称，可任意命名，但不得超过60个字符。</p>
     */
    public $HaVipName;

    /**
     * @var boolean <p>删除保护。</p>
     */
    public $TerminationProtection;

    /**
     * @var boolean <p>流量保护。</p>
     */
    public $TrafficProtection;

    /**
     * @param string $HaVipId <p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
     * @param string $HaVipName <p><code>HAVIP</code>名称，可任意命名，但不得超过60个字符。</p>
     * @param boolean $TerminationProtection <p>删除保护。</p>
     * @param boolean $TrafficProtection <p>流量保护。</p>
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
        if (array_key_exists("HaVipId",$param) and $param["HaVipId"] !== null) {
            $this->HaVipId = $param["HaVipId"];
        }

        if (array_key_exists("HaVipName",$param) and $param["HaVipName"] !== null) {
            $this->HaVipName = $param["HaVipName"];
        }

        if (array_key_exists("TerminationProtection",$param) and $param["TerminationProtection"] !== null) {
            $this->TerminationProtection = $param["TerminationProtection"];
        }

        if (array_key_exists("TrafficProtection",$param) and $param["TrafficProtection"] !== null) {
            $this->TrafficProtection = $param["TrafficProtection"];
        }
    }
}
