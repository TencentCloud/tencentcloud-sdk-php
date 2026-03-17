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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 恶意外连黑白名单信息
 *
 * @method string getRuleType() 获取枚举：
IP: 表示ipv4或者ipv6
DOMAIN: 表示域名
 * @method void setRuleType(string $RuleType) 设置枚举：
IP: 表示ipv4或者ipv6
DOMAIN: 表示域名
 * @method string getAddress() 获取自定义黑白名单的域名/IP
 * @method void setAddress(string $Address) 设置自定义黑白名单的域名/IP
 * @method string getCreatedTime() 获取创建时间
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getRuleID() 获取规则ID
 * @method void setRuleID(integer $RuleID) 设置规则ID
 */
class MaliciousConnectionRuleInfo extends AbstractModel
{
    /**
     * @var string 枚举：
IP: 表示ipv4或者ipv6
DOMAIN: 表示域名
     */
    public $RuleType;

    /**
     * @var string 自定义黑白名单的域名/IP
     */
    public $Address;

    /**
     * @var string 创建时间
     */
    public $CreatedTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 规则ID
     */
    public $RuleID;

    /**
     * @param string $RuleType 枚举：
IP: 表示ipv4或者ipv6
DOMAIN: 表示域名
     * @param string $Address 自定义黑白名单的域名/IP
     * @param string $CreatedTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param string $Remark 备注
     * @param integer $RuleID 规则ID
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
        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("Address",$param) and $param["Address"] !== null) {
            $this->Address = $param["Address"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }
    }
}
