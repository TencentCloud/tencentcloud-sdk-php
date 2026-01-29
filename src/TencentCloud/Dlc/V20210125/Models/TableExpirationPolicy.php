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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表过期策略
 *
 * @method boolean getEnabled() 获取是否启用策略
 * @method void setEnabled(boolean $Enabled) 设置是否启用策略
 * @method integer getExpiration() 获取表过期时间，单位：天
 * @method void setExpiration(integer $Expiration) 设置表过期时间，单位：天
 */
class TableExpirationPolicy extends AbstractModel
{
    /**
     * @var boolean 是否启用策略
     */
    public $Enabled;

    /**
     * @var integer 表过期时间，单位：天
     */
    public $Expiration;

    /**
     * @param boolean $Enabled 是否启用策略
     * @param integer $Expiration 表过期时间，单位：天
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

        if (array_key_exists("Expiration",$param) and $param["Expiration"] !== null) {
            $this->Expiration = $param["Expiration"];
        }
    }
}
