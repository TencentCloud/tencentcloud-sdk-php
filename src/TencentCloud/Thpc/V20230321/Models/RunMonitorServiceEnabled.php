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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了 “腾讯云可观测平台” 服务相关的信息。
 *
 * @method boolean getEnabled() 获取是否开启[腾讯云可观测平台](/document/product/248)服务。取值范围：<br><li>TRUE：表示开启腾讯云可观测平台服务</li><br><li>FALSE：表示不开启腾讯云可观测平台服务</li><br><br>默认取值：TRUE。
 * @method void setEnabled(boolean $Enabled) 设置是否开启[腾讯云可观测平台](/document/product/248)服务。取值范围：<br><li>TRUE：表示开启腾讯云可观测平台服务</li><br><li>FALSE：表示不开启腾讯云可观测平台服务</li><br><br>默认取值：TRUE。
 */
class RunMonitorServiceEnabled extends AbstractModel
{
    /**
     * @var boolean 是否开启[腾讯云可观测平台](/document/product/248)服务。取值范围：<br><li>TRUE：表示开启腾讯云可观测平台服务</li><br><li>FALSE：表示不开启腾讯云可观测平台服务</li><br><br>默认取值：TRUE。
     */
    public $Enabled;

    /**
     * @param boolean $Enabled 是否开启[腾讯云可观测平台](/document/product/248)服务。取值范围：<br><li>TRUE：表示开启腾讯云可观测平台服务</li><br><li>FALSE：表示不开启腾讯云可观测平台服务</li><br><br>默认取值：TRUE。
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
    }
}
