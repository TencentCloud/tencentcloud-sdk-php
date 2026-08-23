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
 * BatchModifyImageSensitiveWhitelist请求参数结构体
 *
 * @method array getRuleId() 获取<p>敏感信息白名单id</p>
 * @method void setRuleId(array $RuleId) 设置<p>敏感信息白名单id</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getStatus() 获取<p>白名单状态</p>
 * @method void setStatus(integer $Status) 设置<p>白名单状态</p>
 */
class BatchModifyImageSensitiveWhitelistRequest extends AbstractModel
{
    /**
     * @var array <p>敏感信息白名单id</p>
     */
    public $RuleId;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>白名单状态</p>
     */
    public $Status;

    /**
     * @param array $RuleId <p>敏感信息白名单id</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $Status <p>白名单状态</p>
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
