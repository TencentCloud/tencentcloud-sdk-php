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
 * ModifyDspmWhitelistStrategy请求参数结构体
 *
 * @method array getMemberId() 获取集团账号的成员id
 * @method void setMemberId(array $MemberId) 设置集团账号的成员id
 * @method string getWhitelistStrategyId() 获取白名单id
 * @method void setWhitelistStrategyId(string $WhitelistStrategyId) 设置白名单id
 * @method string getName() 获取白名单名
 * @method void setName(string $Name) 设置白名单名
 * @method string getRule() 获取规则
 * @method void setRule(string $Rule) 设置规则
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 */
class ModifyDspmWhitelistStrategyRequest extends AbstractModel
{
    /**
     * @var array 集团账号的成员id
     */
    public $MemberId;

    /**
     * @var string 白名单id
     */
    public $WhitelistStrategyId;

    /**
     * @var string 白名单名
     */
    public $Name;

    /**
     * @var string 规则
     */
    public $Rule;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @param array $MemberId 集团账号的成员id
     * @param string $WhitelistStrategyId 白名单id
     * @param string $Name 白名单名
     * @param string $Rule 规则
     * @param string $Remark 备注
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

        if (array_key_exists("WhitelistStrategyId",$param) and $param["WhitelistStrategyId"] !== null) {
            $this->WhitelistStrategyId = $param["WhitelistStrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
