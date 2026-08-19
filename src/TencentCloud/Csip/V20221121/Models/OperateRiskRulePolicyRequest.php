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
 * OperateRiskRulePolicy请求参数结构体
 *
 * @method string getOperateType() 获取启用或者禁用
 * @method void setOperateType(string $OperateType) 设置启用或者禁用
 * @method array getRuleIDs() 获取风险规则ID集合
 * @method void setRuleIDs(array $RuleIDs) 设置风险规则ID集合
 * @method boolean getCheckAll() 获取是否选择全部
 * @method void setCheckAll(boolean $CheckAll) 设置是否选择全部
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getUserAppID() 获取用户AppID
 * @method void setUserAppID(integer $UserAppID) 设置用户AppID
 */
class OperateRiskRulePolicyRequest extends AbstractModel
{
    /**
     * @var string 启用或者禁用
     */
    public $OperateType;

    /**
     * @var array 风险规则ID集合
     */
    public $RuleIDs;

    /**
     * @var boolean 是否选择全部
     */
    public $CheckAll;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer 用户AppID
     */
    public $UserAppID;

    /**
     * @param string $OperateType 启用或者禁用
     * @param array $RuleIDs 风险规则ID集合
     * @param boolean $CheckAll 是否选择全部
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $UserAppID 用户AppID
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
        if (array_key_exists("OperateType",$param) and $param["OperateType"] !== null) {
            $this->OperateType = $param["OperateType"];
        }

        if (array_key_exists("RuleIDs",$param) and $param["RuleIDs"] !== null) {
            $this->RuleIDs = $param["RuleIDs"];
        }

        if (array_key_exists("CheckAll",$param) and $param["CheckAll"] !== null) {
            $this->CheckAll = $param["CheckAll"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("UserAppID",$param) and $param["UserAppID"] !== null) {
            $this->UserAppID = $param["UserAppID"];
        }
    }
}
