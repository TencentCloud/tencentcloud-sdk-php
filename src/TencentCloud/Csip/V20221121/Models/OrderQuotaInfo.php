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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 订单配额信息
 *
 * @method string getQuotaKey() 获取<p>配额键</p>
 * @method void setQuotaKey(string $QuotaKey) 设置<p>配额键</p>
 * @method integer getQuotaNum() 获取<p>配额总量</p>
 * @method void setQuotaNum(integer $QuotaNum) 设置<p>配额总量</p>
 * @method integer getQuotaUsed() 获取<p>配额已使用量（含共享给其他账号的消耗）。仅请求参数 NeedQuotaUsed 为 true 时采集；未传或为 false 时恒为 0；用量查询失败时恒为 0，错误提示见响应 QuotaUsedError 字段</p>
 * @method void setQuotaUsed(integer $QuotaUsed) 设置<p>配额已使用量（含共享给其他账号的消耗）。仅请求参数 NeedQuotaUsed 为 true 时采集；未传或为 false 时恒为 0；用量查询失败时恒为 0，错误提示见响应 QuotaUsedError 字段</p>
 * @method integer getQuotaGranted() 获取<p>赠送配额。仅 CSPM 存在赠送额度，其余计费项为 0</p>
 * @method void setQuotaGranted(integer $QuotaGranted) 设置<p>赠送配额。仅 CSPM 存在赠送额度，其余计费项为 0</p>
 */
class OrderQuotaInfo extends AbstractModel
{
    /**
     * @var string <p>配额键</p>
     */
    public $QuotaKey;

    /**
     * @var integer <p>配额总量</p>
     */
    public $QuotaNum;

    /**
     * @var integer <p>配额已使用量（含共享给其他账号的消耗）。仅请求参数 NeedQuotaUsed 为 true 时采集；未传或为 false 时恒为 0；用量查询失败时恒为 0，错误提示见响应 QuotaUsedError 字段</p>
     */
    public $QuotaUsed;

    /**
     * @var integer <p>赠送配额。仅 CSPM 存在赠送额度，其余计费项为 0</p>
     */
    public $QuotaGranted;

    /**
     * @param string $QuotaKey <p>配额键</p>
     * @param integer $QuotaNum <p>配额总量</p>
     * @param integer $QuotaUsed <p>配额已使用量（含共享给其他账号的消耗）。仅请求参数 NeedQuotaUsed 为 true 时采集；未传或为 false 时恒为 0；用量查询失败时恒为 0，错误提示见响应 QuotaUsedError 字段</p>
     * @param integer $QuotaGranted <p>赠送配额。仅 CSPM 存在赠送额度，其余计费项为 0</p>
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
        if (array_key_exists("QuotaKey",$param) and $param["QuotaKey"] !== null) {
            $this->QuotaKey = $param["QuotaKey"];
        }

        if (array_key_exists("QuotaNum",$param) and $param["QuotaNum"] !== null) {
            $this->QuotaNum = $param["QuotaNum"];
        }

        if (array_key_exists("QuotaUsed",$param) and $param["QuotaUsed"] !== null) {
            $this->QuotaUsed = $param["QuotaUsed"];
        }

        if (array_key_exists("QuotaGranted",$param) and $param["QuotaGranted"] !== null) {
            $this->QuotaGranted = $param["QuotaGranted"];
        }
    }
}
