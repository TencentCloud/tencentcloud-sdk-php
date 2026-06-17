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
 * Token 限额信息
 *
 * @method string getPkgId() 获取限额包 ID。
 * @method void setPkgId(string $PkgId) 设置限额包 ID。
 * @method integer getStatus() 获取限额包状态。取值：1（正常）、3（已耗尽）、4（已销毁）。
 * @method void setStatus(integer $Status) 设置限额包状态。取值：1（正常）、3（已耗尽）、4（已销毁）。
 * @method string getCycleUnit() 获取限额周期。取值：d（按日）、m（按月）、lifetime（总额度，不重置）。
 * @method void setCycleUnit(string $CycleUnit) 设置限额周期。取值：d（按日）、m（按月）、lifetime（总额度，不重置）。
 * @method string getCycleCredits() 获取维度当期限额总量（Token 数）。使用字符串避免大数精度丢失。
 * @method void setCycleCredits(string $CycleCredits) 设置维度当期限额总量（Token 数）。使用字符串避免大数精度丢失。
 * @method string getCycleUsed() 获取维度当期已使用量（Token 数）。使用字符串避免大数精度丢失。
 * @method void setCycleUsed(string $CycleUsed) 设置维度当期已使用量（Token 数）。使用字符串避免大数精度丢失。
 * @method string getStartTime() 获取限额生效起始时间。
 * @method void setStartTime(string $StartTime) 设置限额生效起始时间。
 * @method string getExpireTime() 获取限额过期时间。
 * @method void setExpireTime(string $ExpireTime) 设置限额过期时间。
 */
class QuotaInfo extends AbstractModel
{
    /**
     * @var string 限额包 ID。
     */
    public $PkgId;

    /**
     * @var integer 限额包状态。取值：1（正常）、3（已耗尽）、4（已销毁）。
     */
    public $Status;

    /**
     * @var string 限额周期。取值：d（按日）、m（按月）、lifetime（总额度，不重置）。
     */
    public $CycleUnit;

    /**
     * @var string 维度当期限额总量（Token 数）。使用字符串避免大数精度丢失。
     */
    public $CycleCredits;

    /**
     * @var string 维度当期已使用量（Token 数）。使用字符串避免大数精度丢失。
     */
    public $CycleUsed;

    /**
     * @var string 限额生效起始时间。
     */
    public $StartTime;

    /**
     * @var string 限额过期时间。
     */
    public $ExpireTime;

    /**
     * @param string $PkgId 限额包 ID。
     * @param integer $Status 限额包状态。取值：1（正常）、3（已耗尽）、4（已销毁）。
     * @param string $CycleUnit 限额周期。取值：d（按日）、m（按月）、lifetime（总额度，不重置）。
     * @param string $CycleCredits 维度当期限额总量（Token 数）。使用字符串避免大数精度丢失。
     * @param string $CycleUsed 维度当期已使用量（Token 数）。使用字符串避免大数精度丢失。
     * @param string $StartTime 限额生效起始时间。
     * @param string $ExpireTime 限额过期时间。
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
        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CycleUnit",$param) and $param["CycleUnit"] !== null) {
            $this->CycleUnit = $param["CycleUnit"];
        }

        if (array_key_exists("CycleCredits",$param) and $param["CycleCredits"] !== null) {
            $this->CycleCredits = $param["CycleCredits"];
        }

        if (array_key_exists("CycleUsed",$param) and $param["CycleUsed"] !== null) {
            $this->CycleUsed = $param["CycleUsed"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
