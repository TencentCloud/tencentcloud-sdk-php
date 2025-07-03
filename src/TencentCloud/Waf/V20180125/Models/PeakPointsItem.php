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
 * PeakPoints数组项
 *
 * @method integer getTime() 获取秒级别时间戳
 * @method void setTime(integer $Time) 设置秒级别时间戳
 * @method integer getAccess() 获取QPS
 * @method void setAccess(integer $Access) 设置QPS
 * @method integer getUp() 获取上行带宽峰值，单位B
 * @method void setUp(integer $Up) 设置上行带宽峰值，单位B
 * @method integer getDown() 获取下行带宽峰值，单位B
 * @method void setDown(integer $Down) 设置下行带宽峰值，单位B
 * @method integer getAttack() 获取Web攻击次数
 * @method void setAttack(integer $Attack) 设置Web攻击次数
 * @method integer getCc() 获取CC攻击次数
 * @method void setCc(integer $Cc) 设置CC攻击次数
 * @method integer getBotAccess() 获取Bot qps
 * @method void setBotAccess(integer $BotAccess) 设置Bot qps
 * @method integer getStatusServerError() 获取WAF返回给客户端状态码5xx次数
 * @method void setStatusServerError(integer $StatusServerError) 设置WAF返回给客户端状态码5xx次数
 * @method integer getStatusClientError() 获取WAF返回给客户端状态码4xx次数
 * @method void setStatusClientError(integer $StatusClientError) 设置WAF返回给客户端状态码4xx次数
 * @method integer getStatusRedirect() 获取WAF返回给客户端状态码302次数
 * @method void setStatusRedirect(integer $StatusRedirect) 设置WAF返回给客户端状态码302次数
 * @method integer getStatusOk() 获取WAF返回给客户端状态码202次数
 * @method void setStatusOk(integer $StatusOk) 设置WAF返回给客户端状态码202次数
 * @method integer getUpstreamServerError() 获取源站返回给WAF状态码5xx次数
 * @method void setUpstreamServerError(integer $UpstreamServerError) 设置源站返回给WAF状态码5xx次数
 * @method integer getUpstreamClientError() 获取源站返回给WAF状态码4xx次数
 * @method void setUpstreamClientError(integer $UpstreamClientError) 设置源站返回给WAF状态码4xx次数
 * @method integer getUpstreamRedirect() 获取源站返回给WAF状态码302次数
 * @method void setUpstreamRedirect(integer $UpstreamRedirect) 设置源站返回给WAF状态码302次数
 * @method integer getBlackIP() 获取黑名单次数
 * @method void setBlackIP(integer $BlackIP) 设置黑名单次数
 * @method integer getTamper() 获取防篡改次数
 * @method void setTamper(integer $Tamper) 设置防篡改次数
 * @method integer getLeak() 获取信息防泄露次数
 * @method void setLeak(integer $Leak) 设置信息防泄露次数
 * @method integer getACL() 获取访问控制 
 * @method void setACL(integer $ACL) 设置访问控制 
 * @method integer getWxAccess() 获取小程序 qps
 * @method void setWxAccess(integer $WxAccess) 设置小程序 qps
 * @method integer getWxCount() 获取小程序请求数
 * @method void setWxCount(integer $WxCount) 设置小程序请求数
 * @method integer getWxUp() 获取小程序上行带宽峰值，单位B
 * @method void setWxUp(integer $WxUp) 设置小程序上行带宽峰值，单位B
 * @method integer getWxDown() 获取小程序下行带宽峰值，单位B
 * @method void setWxDown(integer $WxDown) 设置小程序下行带宽峰值，单位B
 */
class PeakPointsItem extends AbstractModel
{
    /**
     * @var integer 秒级别时间戳
     */
    public $Time;

    /**
     * @var integer QPS
     */
    public $Access;

    /**
     * @var integer 上行带宽峰值，单位B
     */
    public $Up;

    /**
     * @var integer 下行带宽峰值，单位B
     */
    public $Down;

    /**
     * @var integer Web攻击次数
     */
    public $Attack;

    /**
     * @var integer CC攻击次数
     */
    public $Cc;

    /**
     * @var integer Bot qps
     */
    public $BotAccess;

    /**
     * @var integer WAF返回给客户端状态码5xx次数
     */
    public $StatusServerError;

    /**
     * @var integer WAF返回给客户端状态码4xx次数
     */
    public $StatusClientError;

    /**
     * @var integer WAF返回给客户端状态码302次数
     */
    public $StatusRedirect;

    /**
     * @var integer WAF返回给客户端状态码202次数
     */
    public $StatusOk;

    /**
     * @var integer 源站返回给WAF状态码5xx次数
     */
    public $UpstreamServerError;

    /**
     * @var integer 源站返回给WAF状态码4xx次数
     */
    public $UpstreamClientError;

    /**
     * @var integer 源站返回给WAF状态码302次数
     */
    public $UpstreamRedirect;

    /**
     * @var integer 黑名单次数
     */
    public $BlackIP;

    /**
     * @var integer 防篡改次数
     */
    public $Tamper;

    /**
     * @var integer 信息防泄露次数
     */
    public $Leak;

    /**
     * @var integer 访问控制 
     */
    public $ACL;

    /**
     * @var integer 小程序 qps
     */
    public $WxAccess;

    /**
     * @var integer 小程序请求数
     */
    public $WxCount;

    /**
     * @var integer 小程序上行带宽峰值，单位B
     */
    public $WxUp;

    /**
     * @var integer 小程序下行带宽峰值，单位B
     */
    public $WxDown;

    /**
     * @param integer $Time 秒级别时间戳
     * @param integer $Access QPS
     * @param integer $Up 上行带宽峰值，单位B
     * @param integer $Down 下行带宽峰值，单位B
     * @param integer $Attack Web攻击次数
     * @param integer $Cc CC攻击次数
     * @param integer $BotAccess Bot qps
     * @param integer $StatusServerError WAF返回给客户端状态码5xx次数
     * @param integer $StatusClientError WAF返回给客户端状态码4xx次数
     * @param integer $StatusRedirect WAF返回给客户端状态码302次数
     * @param integer $StatusOk WAF返回给客户端状态码202次数
     * @param integer $UpstreamServerError 源站返回给WAF状态码5xx次数
     * @param integer $UpstreamClientError 源站返回给WAF状态码4xx次数
     * @param integer $UpstreamRedirect 源站返回给WAF状态码302次数
     * @param integer $BlackIP 黑名单次数
     * @param integer $Tamper 防篡改次数
     * @param integer $Leak 信息防泄露次数
     * @param integer $ACL 访问控制 
     * @param integer $WxAccess 小程序 qps
     * @param integer $WxCount 小程序请求数
     * @param integer $WxUp 小程序上行带宽峰值，单位B
     * @param integer $WxDown 小程序下行带宽峰值，单位B
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
        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Access",$param) and $param["Access"] !== null) {
            $this->Access = $param["Access"];
        }

        if (array_key_exists("Up",$param) and $param["Up"] !== null) {
            $this->Up = $param["Up"];
        }

        if (array_key_exists("Down",$param) and $param["Down"] !== null) {
            $this->Down = $param["Down"];
        }

        if (array_key_exists("Attack",$param) and $param["Attack"] !== null) {
            $this->Attack = $param["Attack"];
        }

        if (array_key_exists("Cc",$param) and $param["Cc"] !== null) {
            $this->Cc = $param["Cc"];
        }

        if (array_key_exists("BotAccess",$param) and $param["BotAccess"] !== null) {
            $this->BotAccess = $param["BotAccess"];
        }

        if (array_key_exists("StatusServerError",$param) and $param["StatusServerError"] !== null) {
            $this->StatusServerError = $param["StatusServerError"];
        }

        if (array_key_exists("StatusClientError",$param) and $param["StatusClientError"] !== null) {
            $this->StatusClientError = $param["StatusClientError"];
        }

        if (array_key_exists("StatusRedirect",$param) and $param["StatusRedirect"] !== null) {
            $this->StatusRedirect = $param["StatusRedirect"];
        }

        if (array_key_exists("StatusOk",$param) and $param["StatusOk"] !== null) {
            $this->StatusOk = $param["StatusOk"];
        }

        if (array_key_exists("UpstreamServerError",$param) and $param["UpstreamServerError"] !== null) {
            $this->UpstreamServerError = $param["UpstreamServerError"];
        }

        if (array_key_exists("UpstreamClientError",$param) and $param["UpstreamClientError"] !== null) {
            $this->UpstreamClientError = $param["UpstreamClientError"];
        }

        if (array_key_exists("UpstreamRedirect",$param) and $param["UpstreamRedirect"] !== null) {
            $this->UpstreamRedirect = $param["UpstreamRedirect"];
        }

        if (array_key_exists("BlackIP",$param) and $param["BlackIP"] !== null) {
            $this->BlackIP = $param["BlackIP"];
        }

        if (array_key_exists("Tamper",$param) and $param["Tamper"] !== null) {
            $this->Tamper = $param["Tamper"];
        }

        if (array_key_exists("Leak",$param) and $param["Leak"] !== null) {
            $this->Leak = $param["Leak"];
        }

        if (array_key_exists("ACL",$param) and $param["ACL"] !== null) {
            $this->ACL = $param["ACL"];
        }

        if (array_key_exists("WxAccess",$param) and $param["WxAccess"] !== null) {
            $this->WxAccess = $param["WxAccess"];
        }

        if (array_key_exists("WxCount",$param) and $param["WxCount"] !== null) {
            $this->WxCount = $param["WxCount"];
        }

        if (array_key_exists("WxUp",$param) and $param["WxUp"] !== null) {
            $this->WxUp = $param["WxUp"];
        }

        if (array_key_exists("WxDown",$param) and $param["WxDown"] !== null) {
            $this->WxDown = $param["WxDown"];
        }
    }
}
