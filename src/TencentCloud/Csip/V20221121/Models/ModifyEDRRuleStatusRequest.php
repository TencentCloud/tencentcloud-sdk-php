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
 * ModifyEDRRuleStatus请求参数结构体
 *
 * @method integer getStatus() 获取<p>开启状态：0-开启，1-关闭</p>
 * @method void setStatus(integer $Status) 设置<p>开启状态：0-开启，1-关闭</p>
 * @method array getRuleIDs() 获取<p>策略ID数组</p>
 * @method void setRuleIDs(array $RuleIDs) 设置<p>策略ID数组</p>
 * @method integer getRuleType() 获取<p>策略类型，0-system 1-custom</p>
 * @method void setRuleType(integer $RuleType) 设置<p>策略类型，0-system 1-custom</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getTargetAppIDs() 获取<p>修改策略对应的APPID</p>
 * @method void setTargetAppIDs(array $TargetAppIDs) 设置<p>修改策略对应的APPID</p>
 */
class ModifyEDRRuleStatusRequest extends AbstractModel
{
    /**
     * @var integer <p>开启状态：0-开启，1-关闭</p>
     */
    public $Status;

    /**
     * @var array <p>策略ID数组</p>
     */
    public $RuleIDs;

    /**
     * @var integer <p>策略类型，0-system 1-custom</p>
     */
    public $RuleType;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>修改策略对应的APPID</p>
     */
    public $TargetAppIDs;

    /**
     * @param integer $Status <p>开启状态：0-开启，1-关闭</p>
     * @param array $RuleIDs <p>策略ID数组</p>
     * @param integer $RuleType <p>策略类型，0-system 1-custom</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $TargetAppIDs <p>修改策略对应的APPID</p>
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

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("TargetAppIDs",$param) and $param["TargetAppIDs"] !== null) {
            $this->TargetAppIDs = $param["TargetAppIDs"];
        }
    }
}
