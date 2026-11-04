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
 * DeleteHaVip请求参数结构体
 *
 * @method string getHaVipId() 获取<p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
 * @method void setHaVipId(string $HaVipId) 设置<p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
 * @method boolean getSkipTerminationProtection() 获取<p>忽略删除保护。</p>
 * @method void setSkipTerminationProtection(boolean $SkipTerminationProtection) 设置<p>忽略删除保护。</p>
 */
class DeleteHaVipRequest extends AbstractModel
{
    /**
     * @var string <p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
     */
    public $HaVipId;

    /**
     * @var boolean <p>忽略删除保护。</p>
     */
    public $SkipTerminationProtection;

    /**
     * @param string $HaVipId <p><code>HAVIP</code>唯一<code>ID</code>，形如：<code>havip-9o233uri</code>。</p>
     * @param boolean $SkipTerminationProtection <p>忽略删除保护。</p>
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

        if (array_key_exists("SkipTerminationProtection",$param) and $param["SkipTerminationProtection"] !== null) {
            $this->SkipTerminationProtection = $param["SkipTerminationProtection"];
        }
    }
}
