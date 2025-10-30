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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBanStatus请求参数结构体
 *
 * @method integer getStatus() 获取阻断开关状态: 0 -- 关闭 1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
 * @method void setStatus(integer $Status) 设置阻断开关状态: 0 -- 关闭 1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
 * @method boolean getOpenSmartMode() 获取是否开启智能过白模式
 * @method void setOpenSmartMode(boolean $OpenSmartMode) 设置是否开启智能过白模式
 */
class ModifyBanStatusRequest extends AbstractModel
{
    /**
     * @var integer 阻断开关状态: 0 -- 关闭 1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
     */
    public $Status;

    /**
     * @var boolean 是否开启智能过白模式
     */
    public $OpenSmartMode;

    /**
     * @param integer $Status 阻断开关状态: 0 -- 关闭 1 -- 高级阻断 2 -- 基础阻断(只阻断情报库黑ip)
     * @param boolean $OpenSmartMode 是否开启智能过白模式
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("OpenSmartMode",$param) and $param["OpenSmartMode"] !== null) {
            $this->OpenSmartMode = $param["OpenSmartMode"];
        }
    }
}
