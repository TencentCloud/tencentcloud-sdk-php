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
namespace TencentCloud\Tokenhub\V20260322\Models;
use TencentCloud\Common\AbstractModel;

/**
 * API Key 额度及用量信息
 *
 * @method string getExclusiveQuota() 获取独占额度。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method void setExclusiveQuota(string $ExclusiveQuota) 设置独占额度。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method string getExclusiveUsed() 获取独占额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method void setExclusiveUsed(string $ExclusiveUsed) 设置独占额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method string getExclusiveRemain() 获取独占额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method void setExclusiveRemain(string $ExclusiveRemain) 设置独占额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method string getSharedQuota() 获取共享额度上限，-1 表示不限。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method void setSharedQuota(string $SharedQuota) 设置共享额度上限，-1 表示不限。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method string getSharedUsed() 获取共享额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method void setSharedUsed(string $SharedUsed) 设置共享额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method string getSharedRemain() 获取共享额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method void setSharedRemain(string $SharedRemain) 设置共享额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
 * @method integer getStatus() 获取API Key 额度包状态。取值：0（正常）、1（耗尽）。
 * @method void setStatus(integer $Status) 设置API Key 额度包状态。取值：0（正常）、1（耗尽）。
 */
class SubPackageBalance extends AbstractModel
{
    /**
     * @var string 独占额度。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     */
    public $ExclusiveQuota;

    /**
     * @var string 独占额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     */
    public $ExclusiveUsed;

    /**
     * @var string 独占额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     */
    public $ExclusiveRemain;

    /**
     * @var string 共享额度上限，-1 表示不限。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     */
    public $SharedQuota;

    /**
     * @var string 共享额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     */
    public $SharedUsed;

    /**
     * @var string 共享额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     */
    public $SharedRemain;

    /**
     * @var integer API Key 额度包状态。取值：0（正常）、1（耗尽）。
     */
    public $Status;

    /**
     * @param string $ExclusiveQuota 独占额度。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     * @param string $ExclusiveUsed 独占额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     * @param string $ExclusiveRemain 独占额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     * @param string $SharedQuota 共享额度上限，-1 表示不限。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     * @param string $SharedUsed 共享额度已用量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     * @param string $SharedRemain 共享额度剩余量。单位说明如下：
- 套餐类型为专业套餐，单位取值为积分；
- 套餐类型为轻享套餐，单位取值为 token。
     * @param integer $Status API Key 额度包状态。取值：0（正常）、1（耗尽）。
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
        if (array_key_exists("ExclusiveQuota",$param) and $param["ExclusiveQuota"] !== null) {
            $this->ExclusiveQuota = $param["ExclusiveQuota"];
        }

        if (array_key_exists("ExclusiveUsed",$param) and $param["ExclusiveUsed"] !== null) {
            $this->ExclusiveUsed = $param["ExclusiveUsed"];
        }

        if (array_key_exists("ExclusiveRemain",$param) and $param["ExclusiveRemain"] !== null) {
            $this->ExclusiveRemain = $param["ExclusiveRemain"];
        }

        if (array_key_exists("SharedQuota",$param) and $param["SharedQuota"] !== null) {
            $this->SharedQuota = $param["SharedQuota"];
        }

        if (array_key_exists("SharedUsed",$param) and $param["SharedUsed"] !== null) {
            $this->SharedUsed = $param["SharedUsed"];
        }

        if (array_key_exists("SharedRemain",$param) and $param["SharedRemain"] !== null) {
            $this->SharedRemain = $param["SharedRemain"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
