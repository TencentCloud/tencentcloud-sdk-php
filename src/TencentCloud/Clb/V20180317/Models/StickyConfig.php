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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 粘连路由配置
 *
 * @method boolean getEnabled() 获取<p>是否开启粘连路由</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否开启粘连路由</p>
 * @method integer getTimeoutSeconds() 获取<p>会话粘性的超时时间（秒），取值范围 180–86400。创建时默认为 1800；修改时若不设置该字段，则保留原有值。</p><p>取值范围：[180, 21600]</p><p>单位：秒</p><p>默认值：1800</p>
 * @method void setTimeoutSeconds(integer $TimeoutSeconds) 设置<p>会话粘性的超时时间（秒），取值范围 180–86400。创建时默认为 1800；修改时若不设置该字段，则保留原有值。</p><p>取值范围：[180, 21600]</p><p>单位：秒</p><p>默认值：1800</p>
 */
class StickyConfig extends AbstractModel
{
    /**
     * @var boolean <p>是否开启粘连路由</p>
     */
    public $Enabled;

    /**
     * @var integer <p>会话粘性的超时时间（秒），取值范围 180–86400。创建时默认为 1800；修改时若不设置该字段，则保留原有值。</p><p>取值范围：[180, 21600]</p><p>单位：秒</p><p>默认值：1800</p>
     */
    public $TimeoutSeconds;

    /**
     * @param boolean $Enabled <p>是否开启粘连路由</p>
     * @param integer $TimeoutSeconds <p>会话粘性的超时时间（秒），取值范围 180–86400。创建时默认为 1800；修改时若不设置该字段，则保留原有值。</p><p>取值范围：[180, 21600]</p><p>单位：秒</p><p>默认值：1800</p>
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

        if (array_key_exists("TimeoutSeconds",$param) and $param["TimeoutSeconds"] !== null) {
            $this->TimeoutSeconds = $param["TimeoutSeconds"];
        }
    }
}
