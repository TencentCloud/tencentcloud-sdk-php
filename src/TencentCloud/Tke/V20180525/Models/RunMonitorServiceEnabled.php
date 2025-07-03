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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了 “云监控” 服务相关的信息
 *
 * @method boolean getEnabled() 获取是否开启[云监控](/document/product/248)服务。取值范围：<br><li>true：表示开启云监控服务</li><li>false：表示不开启云监控服务</li><br>默认取值：true。
 * @method void setEnabled(boolean $Enabled) 设置是否开启[云监控](/document/product/248)服务。取值范围：<br><li>true：表示开启云监控服务</li><li>false：表示不开启云监控服务</li><br>默认取值：true。
 */
class RunMonitorServiceEnabled extends AbstractModel
{
    /**
     * @var boolean 是否开启[云监控](/document/product/248)服务。取值范围：<br><li>true：表示开启云监控服务</li><li>false：表示不开启云监控服务</li><br>默认取值：true。
     */
    public $Enabled;

    /**
     * @param boolean $Enabled 是否开启[云监控](/document/product/248)服务。取值范围：<br><li>true：表示开启云监控服务</li><li>false：表示不开启云监控服务</li><br>默认取值：true。
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
