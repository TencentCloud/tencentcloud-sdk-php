<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * waf模块的规格
 *
 * @method integer getCC() 获取自定义CC的规格
 * @method void setCC(integer $CC) 设置自定义CC的规格
 * @method integer getCustomRule() 获取自定义策略的规格
 * @method void setCustomRule(integer $CustomRule) 设置自定义策略的规格
 * @method integer getIPControl() 获取黑白名单的规格
 * @method void setIPControl(integer $IPControl) 设置黑白名单的规格
 * @method integer getAntiLeak() 获取信息防泄漏的规格
 * @method void setAntiLeak(integer $AntiLeak) 设置信息防泄漏的规格
 * @method integer getAntiTamper() 获取防篡改的规格
 * @method void setAntiTamper(integer $AntiTamper) 设置防篡改的规格
 * @method integer getAutoCC() 获取紧急CC的规格
 * @method void setAutoCC(integer $AutoCC) 设置紧急CC的规格
 * @method integer getAreaBan() 获取地域封禁的规格
 * @method void setAreaBan(integer $AreaBan) 设置地域封禁的规格
 * @method integer getCCSession() 获取自定义CC中配置session
 * @method void setCCSession(integer $CCSession) 设置自定义CC中配置session
 * @method integer getAI() 获取AI的规格
 * @method void setAI(integer $AI) 设置AI的规格
 * @method integer getCustomWhite() 获取精准白名单的规格
 * @method void setCustomWhite(integer $CustomWhite) 设置精准白名单的规格
 * @method integer getApiSecurity() 获取api安全的规格
 * @method void setApiSecurity(integer $ApiSecurity) 设置api安全的规格
 * @method integer getClientMsg() 获取客户端流量标记的规格
 * @method void setClientMsg(integer $ClientMsg) 设置客户端流量标记的规格
 * @method integer getTrafficMarking() 获取流量标记的规格
 * @method void setTrafficMarking(integer $TrafficMarking) 设置流量标记的规格
 */
class WafRuleLimit extends AbstractModel
{
    /**
     * @var integer 自定义CC的规格
     */
    public $CC;

    /**
     * @var integer 自定义策略的规格
     */
    public $CustomRule;

    /**
     * @var integer 黑白名单的规格
     */
    public $IPControl;

    /**
     * @var integer 信息防泄漏的规格
     */
    public $AntiLeak;

    /**
     * @var integer 防篡改的规格
     */
    public $AntiTamper;

    /**
     * @var integer 紧急CC的规格
     */
    public $AutoCC;

    /**
     * @var integer 地域封禁的规格
     */
    public $AreaBan;

    /**
     * @var integer 自定义CC中配置session
     */
    public $CCSession;

    /**
     * @var integer AI的规格
     */
    public $AI;

    /**
     * @var integer 精准白名单的规格
     */
    public $CustomWhite;

    /**
     * @var integer api安全的规格
     */
    public $ApiSecurity;

    /**
     * @var integer 客户端流量标记的规格
     */
    public $ClientMsg;

    /**
     * @var integer 流量标记的规格
     */
    public $TrafficMarking;

    /**
     * @param integer $CC 自定义CC的规格
     * @param integer $CustomRule 自定义策略的规格
     * @param integer $IPControl 黑白名单的规格
     * @param integer $AntiLeak 信息防泄漏的规格
     * @param integer $AntiTamper 防篡改的规格
     * @param integer $AutoCC 紧急CC的规格
     * @param integer $AreaBan 地域封禁的规格
     * @param integer $CCSession 自定义CC中配置session
     * @param integer $AI AI的规格
     * @param integer $CustomWhite 精准白名单的规格
     * @param integer $ApiSecurity api安全的规格
     * @param integer $ClientMsg 客户端流量标记的规格
     * @param integer $TrafficMarking 流量标记的规格
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
        if (array_key_exists("CC",$param) and $param["CC"] !== null) {
            $this->CC = $param["CC"];
        }

        if (array_key_exists("CustomRule",$param) and $param["CustomRule"] !== null) {
            $this->CustomRule = $param["CustomRule"];
        }

        if (array_key_exists("IPControl",$param) and $param["IPControl"] !== null) {
            $this->IPControl = $param["IPControl"];
        }

        if (array_key_exists("AntiLeak",$param) and $param["AntiLeak"] !== null) {
            $this->AntiLeak = $param["AntiLeak"];
        }

        if (array_key_exists("AntiTamper",$param) and $param["AntiTamper"] !== null) {
            $this->AntiTamper = $param["AntiTamper"];
        }

        if (array_key_exists("AutoCC",$param) and $param["AutoCC"] !== null) {
            $this->AutoCC = $param["AutoCC"];
        }

        if (array_key_exists("AreaBan",$param) and $param["AreaBan"] !== null) {
            $this->AreaBan = $param["AreaBan"];
        }

        if (array_key_exists("CCSession",$param) and $param["CCSession"] !== null) {
            $this->CCSession = $param["CCSession"];
        }

        if (array_key_exists("AI",$param) and $param["AI"] !== null) {
            $this->AI = $param["AI"];
        }

        if (array_key_exists("CustomWhite",$param) and $param["CustomWhite"] !== null) {
            $this->CustomWhite = $param["CustomWhite"];
        }

        if (array_key_exists("ApiSecurity",$param) and $param["ApiSecurity"] !== null) {
            $this->ApiSecurity = $param["ApiSecurity"];
        }

        if (array_key_exists("ClientMsg",$param) and $param["ClientMsg"] !== null) {
            $this->ClientMsg = $param["ClientMsg"];
        }

        if (array_key_exists("TrafficMarking",$param) and $param["TrafficMarking"] !== null) {
            $this->TrafficMarking = $param["TrafficMarking"];
        }
    }
}
