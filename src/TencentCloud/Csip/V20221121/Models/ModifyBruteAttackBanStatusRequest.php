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
 * ModifyBruteAttackBanStatus请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method boolean getOpenSmartMode() 获取<p>是否开启智能过白模式</p>
 * @method void setOpenSmartMode(boolean $OpenSmartMode) 设置<p>是否开启智能过白模式</p>
 * @method boolean getBanBlackIp() 获取<p>是否阻断情报黑IP</p>
 * @method void setBanBlackIp(boolean $BanBlackIp) 设置<p>是否阻断情报黑IP</p>
 * @method boolean getBanVulIp() 获取<p>是否阻断漏洞黑IP</p>
 * @method void setBanVulIp(boolean $BanVulIp) 设置<p>是否阻断漏洞黑IP</p>
 * @method boolean getBanByRule() 获取<p>是否开启规则阻断</p>
 * @method void setBanByRule(boolean $BanByRule) 设置<p>是否开启规则阻断</p>
 */
class ModifyBruteAttackBanStatusRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var boolean <p>是否开启智能过白模式</p>
     */
    public $OpenSmartMode;

    /**
     * @var boolean <p>是否阻断情报黑IP</p>
     */
    public $BanBlackIp;

    /**
     * @var boolean <p>是否阻断漏洞黑IP</p>
     */
    public $BanVulIp;

    /**
     * @var boolean <p>是否开启规则阻断</p>
     */
    public $BanByRule;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param boolean $OpenSmartMode <p>是否开启智能过白模式</p>
     * @param boolean $BanBlackIp <p>是否阻断情报黑IP</p>
     * @param boolean $BanVulIp <p>是否阻断漏洞黑IP</p>
     * @param boolean $BanByRule <p>是否开启规则阻断</p>
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

        if (array_key_exists("OpenSmartMode",$param) and $param["OpenSmartMode"] !== null) {
            $this->OpenSmartMode = $param["OpenSmartMode"];
        }

        if (array_key_exists("BanBlackIp",$param) and $param["BanBlackIp"] !== null) {
            $this->BanBlackIp = $param["BanBlackIp"];
        }

        if (array_key_exists("BanVulIp",$param) and $param["BanVulIp"] !== null) {
            $this->BanVulIp = $param["BanVulIp"];
        }

        if (array_key_exists("BanByRule",$param) and $param["BanByRule"] !== null) {
            $this->BanByRule = $param["BanByRule"];
        }
    }
}
