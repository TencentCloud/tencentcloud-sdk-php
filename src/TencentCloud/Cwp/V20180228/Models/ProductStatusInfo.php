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
 * 产品试用状态查询接口Data出参
 *
 * @method integer getFWUserStatus() 获取防护状态，1未防护，2防护中，3试用中，4已过期
 * @method void setFWUserStatus(integer $FWUserStatus) 设置防护状态，1未防护，2防护中，3试用中，4已过期
 * @method boolean getCanApplyTrial() 获取是否可以申请试用，true可以申请
 * @method void setCanApplyTrial(boolean $CanApplyTrial) 设置是否可以申请试用，true可以申请
 * @method string getCanNotApplyReason() 获取无法试用原因，可试用为空
 * @method void setCanNotApplyReason(string $CanNotApplyReason) 设置无法试用原因，可试用为空
 * @method string getLastTrialTime() 获取上次试用结束时间（不存在试用记录则为空）
 * @method void setLastTrialTime(string $LastTrialTime) 设置上次试用结束时间（不存在试用记录则为空）
 */
class ProductStatusInfo extends AbstractModel
{
    /**
     * @var integer 防护状态，1未防护，2防护中，3试用中，4已过期
     */
    public $FWUserStatus;

    /**
     * @var boolean 是否可以申请试用，true可以申请
     */
    public $CanApplyTrial;

    /**
     * @var string 无法试用原因，可试用为空
     */
    public $CanNotApplyReason;

    /**
     * @var string 上次试用结束时间（不存在试用记录则为空）
     */
    public $LastTrialTime;

    /**
     * @param integer $FWUserStatus 防护状态，1未防护，2防护中，3试用中，4已过期
     * @param boolean $CanApplyTrial 是否可以申请试用，true可以申请
     * @param string $CanNotApplyReason 无法试用原因，可试用为空
     * @param string $LastTrialTime 上次试用结束时间（不存在试用记录则为空）
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
        if (array_key_exists("FWUserStatus",$param) and $param["FWUserStatus"] !== null) {
            $this->FWUserStatus = $param["FWUserStatus"];
        }

        if (array_key_exists("CanApplyTrial",$param) and $param["CanApplyTrial"] !== null) {
            $this->CanApplyTrial = $param["CanApplyTrial"];
        }

        if (array_key_exists("CanNotApplyReason",$param) and $param["CanNotApplyReason"] !== null) {
            $this->CanNotApplyReason = $param["CanNotApplyReason"];
        }

        if (array_key_exists("LastTrialTime",$param) and $param["LastTrialTime"] !== null) {
            $this->LastTrialTime = $param["LastTrialTime"];
        }
    }
}
