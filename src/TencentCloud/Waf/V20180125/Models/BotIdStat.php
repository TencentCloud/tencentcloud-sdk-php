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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Bot-Id规则统计信息
 *
 * @method string getPattern() 获取模式：观察/拦截/自定义
 * @method void setPattern(string $Pattern) 设置模式：观察/拦截/自定义
 * @method integer getTotalCount() 获取规则总数
 * @method void setTotalCount(integer $TotalCount) 设置规则总数
 * @method integer getMonitorCount() 获取配置观察的规则数
 * @method void setMonitorCount(integer $MonitorCount) 设置配置观察的规则数
 * @method integer getInterceptCount() 获取配置拦截的规则数
 * @method void setInterceptCount(integer $InterceptCount) 设置配置拦截的规则数
 * @method integer getRedirectCount() 获取配置重定向的规则数
 * @method void setRedirectCount(integer $RedirectCount) 设置配置重定向的规则数
 * @method integer getCaptchaCount() 获取配置人机识别的规则数
 * @method void setCaptchaCount(integer $CaptchaCount) 设置配置人机识别的规则数
 * @method string getProtectLevel() 获取全局防护等级
 * @method void setProtectLevel(string $ProtectLevel) 设置全局防护等级
 * @method string getGlobalRedirect() 获取全局重定向路径
 * @method void setGlobalRedirect(string $GlobalRedirect) 设置全局重定向路径
 * @method integer getJsChallengeCount() 获取JS挑战的数目
 * @method void setJsChallengeCount(integer $JsChallengeCount) 设置JS挑战的数目
 */
class BotIdStat extends AbstractModel
{
    /**
     * @var string 模式：观察/拦截/自定义
     */
    public $Pattern;

    /**
     * @var integer 规则总数
     */
    public $TotalCount;

    /**
     * @var integer 配置观察的规则数
     */
    public $MonitorCount;

    /**
     * @var integer 配置拦截的规则数
     */
    public $InterceptCount;

    /**
     * @var integer 配置重定向的规则数
     */
    public $RedirectCount;

    /**
     * @var integer 配置人机识别的规则数
     */
    public $CaptchaCount;

    /**
     * @var string 全局防护等级
     */
    public $ProtectLevel;

    /**
     * @var string 全局重定向路径
     */
    public $GlobalRedirect;

    /**
     * @var integer JS挑战的数目
     */
    public $JsChallengeCount;

    /**
     * @param string $Pattern 模式：观察/拦截/自定义
     * @param integer $TotalCount 规则总数
     * @param integer $MonitorCount 配置观察的规则数
     * @param integer $InterceptCount 配置拦截的规则数
     * @param integer $RedirectCount 配置重定向的规则数
     * @param integer $CaptchaCount 配置人机识别的规则数
     * @param string $ProtectLevel 全局防护等级
     * @param string $GlobalRedirect 全局重定向路径
     * @param integer $JsChallengeCount JS挑战的数目
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
        if (array_key_exists("Pattern",$param) and $param["Pattern"] !== null) {
            $this->Pattern = $param["Pattern"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("MonitorCount",$param) and $param["MonitorCount"] !== null) {
            $this->MonitorCount = $param["MonitorCount"];
        }

        if (array_key_exists("InterceptCount",$param) and $param["InterceptCount"] !== null) {
            $this->InterceptCount = $param["InterceptCount"];
        }

        if (array_key_exists("RedirectCount",$param) and $param["RedirectCount"] !== null) {
            $this->RedirectCount = $param["RedirectCount"];
        }

        if (array_key_exists("CaptchaCount",$param) and $param["CaptchaCount"] !== null) {
            $this->CaptchaCount = $param["CaptchaCount"];
        }

        if (array_key_exists("ProtectLevel",$param) and $param["ProtectLevel"] !== null) {
            $this->ProtectLevel = $param["ProtectLevel"];
        }

        if (array_key_exists("GlobalRedirect",$param) and $param["GlobalRedirect"] !== null) {
            $this->GlobalRedirect = $param["GlobalRedirect"];
        }

        if (array_key_exists("JsChallengeCount",$param) and $param["JsChallengeCount"] !== null) {
            $this->JsChallengeCount = $param["JsChallengeCount"];
        }
    }
}
