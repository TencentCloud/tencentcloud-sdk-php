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
 * @method string getExclusiveQuota() 获取<p>独占额度。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setExclusiveQuota(string $ExclusiveQuota) 设置<p>独占额度。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method string getExclusiveUsed() 获取<p>独占额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setExclusiveUsed(string $ExclusiveUsed) 设置<p>独占额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method string getExclusiveRemain() 获取<p>独占额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setExclusiveRemain(string $ExclusiveRemain) 设置<p>独占额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method string getSharedQuota() 获取<p>共享额度上限，-1 表示不限。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setSharedQuota(string $SharedQuota) 设置<p>共享额度上限，-1 表示不限。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method string getSharedUsed() 获取<p>共享额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setSharedUsed(string $SharedUsed) 设置<p>共享额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method string getSharedRemain() 获取<p>共享额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method void setSharedRemain(string $SharedRemain) 设置<p>共享额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
 * @method string getTotalUsed() 获取<p>当前周期已用总量 exclusive_used + shared_used + overflow_used</p>
 * @method void setTotalUsed(string $TotalUsed) 设置<p>当前周期已用总量 exclusive_used + shared_used + overflow_used</p>
 * @method integer getStatus() 获取<p>API Key 额度包状态。取值：0（正常）、1（耗尽）。</p>
 * @method void setStatus(integer $Status) 设置<p>API Key 额度包状态。取值：0（正常）、1（耗尽）。</p>
 */
class SubPackageBalance extends AbstractModel
{
    /**
     * @var string <p>独占额度。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $ExclusiveQuota;

    /**
     * @var string <p>独占额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $ExclusiveUsed;

    /**
     * @var string <p>独占额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $ExclusiveRemain;

    /**
     * @var string <p>共享额度上限，-1 表示不限。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $SharedQuota;

    /**
     * @var string <p>共享额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $SharedUsed;

    /**
     * @var string <p>共享额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     */
    public $SharedRemain;

    /**
     * @var string <p>当前周期已用总量 exclusive_used + shared_used + overflow_used</p>
     */
    public $TotalUsed;

    /**
     * @var integer <p>API Key 额度包状态。取值：0（正常）、1（耗尽）。</p>
     */
    public $Status;

    /**
     * @param string $ExclusiveQuota <p>独占额度。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param string $ExclusiveUsed <p>独占额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param string $ExclusiveRemain <p>独占额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param string $SharedQuota <p>共享额度上限，-1 表示不限。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param string $SharedUsed <p>共享额度已用量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param string $SharedRemain <p>共享额度剩余量。单位说明如下：</p><ul><li>套餐类型为专业套餐，单位取值为积分；</li><li>套餐类型为轻享套餐，单位取值为 token。</li></ul>
     * @param string $TotalUsed <p>当前周期已用总量 exclusive_used + shared_used + overflow_used</p>
     * @param integer $Status <p>API Key 额度包状态。取值：0（正常）、1（耗尽）。</p>
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

        if (array_key_exists("TotalUsed",$param) and $param["TotalUsed"] !== null) {
            $this->TotalUsed = $param["TotalUsed"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
