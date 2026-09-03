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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAccountWarning请求参数结构体
 *
 * @method integer getThreshold() 获取余额阈值（单位：国内分、国际美分）
 * @method void setThreshold(integer $Threshold) 设置余额阈值（单位：国内分、国际美分）
 * @method integer getOpen() 获取是否开启余额告警 1 开启 0 关闭
 * @method void setOpen(integer $Open) 设置是否开启余额告警 1 开启 0 关闭
 */
class ModifyAccountWarningRequest extends AbstractModel
{
    /**
     * @var integer 余额阈值（单位：国内分、国际美分）
     */
    public $Threshold;

    /**
     * @var integer 是否开启余额告警 1 开启 0 关闭
     */
    public $Open;

    /**
     * @param integer $Threshold 余额阈值（单位：国内分、国际美分）
     * @param integer $Open 是否开启余额告警 1 开启 0 关闭
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
        if (array_key_exists("Threshold",$param) and $param["Threshold"] !== null) {
            $this->Threshold = $param["Threshold"];
        }

        if (array_key_exists("Open",$param) and $param["Open"] !== null) {
            $this->Open = $param["Open"];
        }
    }
}
