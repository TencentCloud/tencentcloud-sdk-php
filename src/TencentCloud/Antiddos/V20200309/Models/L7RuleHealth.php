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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * L7规则健康检查参数
 *
 * @method integer getStatus() 获取配置状态，0： 正常，1：配置中，2：配置失败
 * @method void setStatus(integer $Status) 设置配置状态，0： 正常，1：配置中，2：配置失败
 * @method integer getEnable() 获取=1表示开启；=0表示关闭
 * @method void setEnable(integer $Enable) 设置=1表示开启；=0表示关闭
 * @method string getRuleId() 获取规则ID
 * @method void setRuleId(string $RuleId) 设置规则ID
 * @method string getUrl() 获取检查目录的URL，默认为/
 * @method void setUrl(string $Url) 设置检查目录的URL，默认为/
 * @method integer getInterval() 获取检测间隔时间，单位秒
 * @method void setInterval(integer $Interval) 设置检测间隔时间，单位秒
 * @method integer getAliveNum() 获取健康阈值，单位次
 * @method void setAliveNum(integer $AliveNum) 设置健康阈值，单位次
 * @method integer getKickNum() 获取不健康阈值，单位次
 * @method void setKickNum(integer $KickNum) 设置不健康阈值，单位次
 * @method string getMethod() 获取HTTP请求方式，取值[HEAD,GET]
 * @method void setMethod(string $Method) 设置HTTP请求方式，取值[HEAD,GET]
 * @method integer getStatusCode() 获取健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
 * @method void setStatusCode(integer $StatusCode) 设置健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
 * @method integer getProtocolFlag() 获取是否同时下发http和https规则健康检查配置
 * @method void setProtocolFlag(integer $ProtocolFlag) 设置是否同时下发http和https规则健康检查配置
 * @method integer getPassiveEnable() 获取被动探测开关，=1表示开启；=0表示关闭
 * @method void setPassiveEnable(integer $PassiveEnable) 设置被动探测开关，=1表示开启；=0表示关闭
 * @method integer getBlockInter() 获取被动探测不健康屏蔽时间
 * @method void setBlockInter(integer $BlockInter) 设置被动探测不健康屏蔽时间
 * @method integer getFailedCountInter() 获取被动探测不健康统计间隔
 * @method void setFailedCountInter(integer $FailedCountInter) 设置被动探测不健康统计间隔
 * @method integer getFailedThreshold() 获取被动探测不健康阈值
 * @method void setFailedThreshold(integer $FailedThreshold) 设置被动探测不健康阈值
 * @method integer getPassiveStatusCode() 获取被动探测判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
 * @method void setPassiveStatusCode(integer $PassiveStatusCode) 设置被动探测判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
 * @method integer getPassiveStatus() 获取被动探测配置状态，0： 正常，1：配置中，2：配置失败
 * @method void setPassiveStatus(integer $PassiveStatus) 设置被动探测配置状态，0： 正常，1：配置中，2：配置失败
 */
class L7RuleHealth extends AbstractModel
{
    /**
     * @var integer 配置状态，0： 正常，1：配置中，2：配置失败
     */
    public $Status;

    /**
     * @var integer =1表示开启；=0表示关闭
     */
    public $Enable;

    /**
     * @var string 规则ID
     */
    public $RuleId;

    /**
     * @var string 检查目录的URL，默认为/
     */
    public $Url;

    /**
     * @var integer 检测间隔时间，单位秒
     */
    public $Interval;

    /**
     * @var integer 健康阈值，单位次
     */
    public $AliveNum;

    /**
     * @var integer 不健康阈值，单位次
     */
    public $KickNum;

    /**
     * @var string HTTP请求方式，取值[HEAD,GET]
     */
    public $Method;

    /**
     * @var integer 健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
     */
    public $StatusCode;

    /**
     * @var integer 是否同时下发http和https规则健康检查配置
     */
    public $ProtocolFlag;

    /**
     * @var integer 被动探测开关，=1表示开启；=0表示关闭
     */
    public $PassiveEnable;

    /**
     * @var integer 被动探测不健康屏蔽时间
     */
    public $BlockInter;

    /**
     * @var integer 被动探测不健康统计间隔
     */
    public $FailedCountInter;

    /**
     * @var integer 被动探测不健康阈值
     */
    public $FailedThreshold;

    /**
     * @var integer 被动探测判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
     */
    public $PassiveStatusCode;

    /**
     * @var integer 被动探测配置状态，0： 正常，1：配置中，2：配置失败
     */
    public $PassiveStatus;

    /**
     * @param integer $Status 配置状态，0： 正常，1：配置中，2：配置失败
     * @param integer $Enable =1表示开启；=0表示关闭
     * @param string $RuleId 规则ID
     * @param string $Url 检查目录的URL，默认为/
     * @param integer $Interval 检测间隔时间，单位秒
     * @param integer $AliveNum 健康阈值，单位次
     * @param integer $KickNum 不健康阈值，单位次
     * @param string $Method HTTP请求方式，取值[HEAD,GET]
     * @param integer $StatusCode 健康检查判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
     * @param integer $ProtocolFlag 是否同时下发http和https规则健康检查配置
     * @param integer $PassiveEnable 被动探测开关，=1表示开启；=0表示关闭
     * @param integer $BlockInter 被动探测不健康屏蔽时间
     * @param integer $FailedCountInter 被动探测不健康统计间隔
     * @param integer $FailedThreshold 被动探测不健康阈值
     * @param integer $PassiveStatusCode 被动探测判定正常状态码，1xx =1, 2xx=2, 3xx=4, 4xx=8,5xx=16，多个状态码值加和
     * @param integer $PassiveStatus 被动探测配置状态，0： 正常，1：配置中，2：配置失败
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

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("AliveNum",$param) and $param["AliveNum"] !== null) {
            $this->AliveNum = $param["AliveNum"];
        }

        if (array_key_exists("KickNum",$param) and $param["KickNum"] !== null) {
            $this->KickNum = $param["KickNum"];
        }

        if (array_key_exists("Method",$param) and $param["Method"] !== null) {
            $this->Method = $param["Method"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("ProtocolFlag",$param) and $param["ProtocolFlag"] !== null) {
            $this->ProtocolFlag = $param["ProtocolFlag"];
        }

        if (array_key_exists("PassiveEnable",$param) and $param["PassiveEnable"] !== null) {
            $this->PassiveEnable = $param["PassiveEnable"];
        }

        if (array_key_exists("BlockInter",$param) and $param["BlockInter"] !== null) {
            $this->BlockInter = $param["BlockInter"];
        }

        if (array_key_exists("FailedCountInter",$param) and $param["FailedCountInter"] !== null) {
            $this->FailedCountInter = $param["FailedCountInter"];
        }

        if (array_key_exists("FailedThreshold",$param) and $param["FailedThreshold"] !== null) {
            $this->FailedThreshold = $param["FailedThreshold"];
        }

        if (array_key_exists("PassiveStatusCode",$param) and $param["PassiveStatusCode"] !== null) {
            $this->PassiveStatusCode = $param["PassiveStatusCode"];
        }

        if (array_key_exists("PassiveStatus",$param) and $param["PassiveStatus"] !== null) {
            $this->PassiveStatus = $param["PassiveStatus"];
        }
    }
}
