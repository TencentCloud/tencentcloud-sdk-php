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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyReconnectionSetting请求参数结构体
 *
 * @method integer getReconnectionMaxCount() 获取重试次数,取值范围：0-20
 * @method void setReconnectionMaxCount(integer $ReconnectionMaxCount) 设置重试次数,取值范围：0-20
 * @method boolean getEnable() 获取true：限制重连次数，false：不限制重连次数
 * @method void setEnable(boolean $Enable) 设置true：限制重连次数，false：不限制重连次数
 */
class ModifyReconnectionSettingRequest extends AbstractModel
{
    /**
     * @var integer 重试次数,取值范围：0-20
     */
    public $ReconnectionMaxCount;

    /**
     * @var boolean true：限制重连次数，false：不限制重连次数
     */
    public $Enable;

    /**
     * @param integer $ReconnectionMaxCount 重试次数,取值范围：0-20
     * @param boolean $Enable true：限制重连次数，false：不限制重连次数
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
        if (array_key_exists("ReconnectionMaxCount",$param) and $param["ReconnectionMaxCount"] !== null) {
            $this->ReconnectionMaxCount = $param["ReconnectionMaxCount"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }
    }
}
