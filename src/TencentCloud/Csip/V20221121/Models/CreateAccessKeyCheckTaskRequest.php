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
 * CreateAccessKeyCheckTask请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method array getRiskIDList() 获取风险列表
 * @method void setRiskIDList(array $RiskIDList) 设置风险列表
 * @method array getAccessKeyList() 获取访问密钥列表
 * @method void setAccessKeyList(array $AccessKeyList) 设置访问密钥列表
 * @method array getSubUinList() 获取账号uin列表
 * @method void setSubUinList(array $SubUinList) 设置账号uin列表
 * @method array getRiskRuleIDList() 获取风险规则id列表
 * @method void setRiskRuleIDList(array $RiskRuleIDList) 设置风险规则id列表
 */
class CreateAccessKeyCheckTaskRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var array 风险列表
     */
    public $RiskIDList;

    /**
     * @var array 访问密钥列表
     */
    public $AccessKeyList;

    /**
     * @var array 账号uin列表
     */
    public $SubUinList;

    /**
     * @var array 风险规则id列表
     */
    public $RiskRuleIDList;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param array $RiskIDList 风险列表
     * @param array $AccessKeyList 访问密钥列表
     * @param array $SubUinList 账号uin列表
     * @param array $RiskRuleIDList 风险规则id列表
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("RiskIDList",$param) and $param["RiskIDList"] !== null) {
            $this->RiskIDList = $param["RiskIDList"];
        }

        if (array_key_exists("AccessKeyList",$param) and $param["AccessKeyList"] !== null) {
            $this->AccessKeyList = $param["AccessKeyList"];
        }

        if (array_key_exists("SubUinList",$param) and $param["SubUinList"] !== null) {
            $this->SubUinList = $param["SubUinList"];
        }

        if (array_key_exists("RiskRuleIDList",$param) and $param["RiskRuleIDList"] !== null) {
            $this->RiskRuleIDList = $param["RiskRuleIDList"];
        }
    }
}
