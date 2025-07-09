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
 * UpdateAccessKeyAlarmStatus请求参数结构体
 *
 * @method integer getStatus() 获取状态  0:未处理 1:已处理 2:已忽略
 * @method void setStatus(integer $Status) 设置状态  0:未处理 1:已处理 2:已忽略
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getAlarmIDList() 获取告警ID列表
 * @method void setAlarmIDList(array $AlarmIDList) 设置告警ID列表
 * @method array getRiskIDList() 获取风险ID列表
 * @method void setRiskIDList(array $RiskIDList) 设置风险ID列表
 */
class UpdateAccessKeyAlarmStatusRequest extends AbstractModel
{
    /**
     * @var integer 状态  0:未处理 1:已处理 2:已忽略
     */
    public $Status;

    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 告警ID列表
     */
    public $AlarmIDList;

    /**
     * @var array 风险ID列表
     */
    public $RiskIDList;

    /**
     * @param integer $Status 状态  0:未处理 1:已处理 2:已忽略
     * @param array $MemberId 集团账号的成员id
     * @param array $AlarmIDList 告警ID列表
     * @param array $RiskIDList 风险ID列表
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

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("AlarmIDList",$param) and $param["AlarmIDList"] !== null) {
            $this->AlarmIDList = $param["AlarmIDList"];
        }

        if (array_key_exists("RiskIDList",$param) and $param["RiskIDList"] !== null) {
            $this->RiskIDList = $param["RiskIDList"];
        }
    }
}
