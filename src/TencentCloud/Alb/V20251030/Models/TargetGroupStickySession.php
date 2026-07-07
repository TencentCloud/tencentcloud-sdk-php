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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 目标组之间会话保持
 *
 * @method boolean getEnabled() 获取是否开启会话保持，默认关闭。
 * @method void setEnabled(boolean $Enabled) 设置是否开启会话保持，默认关闭。
 * @method integer getTimeout() 获取超时时间，单位秒，取值范围：1~86400，默认值：1000。
 * @method void setTimeout(integer $Timeout) 设置超时时间，单位秒，取值范围：1~86400，默认值：1000。
 */
class TargetGroupStickySession extends AbstractModel
{
    /**
     * @var boolean 是否开启会话保持，默认关闭。
     */
    public $Enabled;

    /**
     * @var integer 超时时间，单位秒，取值范围：1~86400，默认值：1000。
     */
    public $Timeout;

    /**
     * @param boolean $Enabled 是否开启会话保持，默认关闭。
     * @param integer $Timeout 超时时间，单位秒，取值范围：1~86400，默认值：1000。
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Timeout",$param) and $param["Timeout"] !== null) {
            $this->Timeout = $param["Timeout"];
        }
    }
}
