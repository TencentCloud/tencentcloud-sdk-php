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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述了 “基础” 服务相关的信息
 *
 * @method boolean getEnabled() 获取是否开启基础服务。取值范围：TRUE（开启）/FALSE（不开启）。默认取值：TRUE。
 * @method void setEnabled(boolean $Enabled) 设置是否开启基础服务。取值范围：TRUE（开启）/FALSE（不开启）。默认取值：TRUE。
 */
class BasicServicesSettings extends AbstractModel
{
    /**
     * @var boolean 是否开启基础服务。取值范围：TRUE（开启）/FALSE（不开启）。默认取值：TRUE。
     */
    public $Enabled;

    /**
     * @param boolean $Enabled 是否开启基础服务。取值范围：TRUE（开启）/FALSE（不开启）。默认取值：TRUE。
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
