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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设置通道禁止播流，有通道Id和使能enable字段
 *
 * @method string getChannelId() 获取通道Id
 * @method void setChannelId(string $ChannelId) 设置通道Id
 * @method boolean getEnable() 获取是否禁止通道播流
 * @method void setEnable(boolean $Enable) 设置是否禁止通道播流
 */
class SetForbidplayChannelParam extends AbstractModel
{
    /**
     * @var string 通道Id
     */
    public $ChannelId;

    /**
     * @var boolean 是否禁止通道播流
     */
    public $Enable;

    /**
     * @param string $ChannelId 通道Id
     * @param boolean $Enable 是否禁止通道播流
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
