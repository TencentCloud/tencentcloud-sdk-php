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
 * 场景的详细配置信息
 *
 * @method string getSceneId() 获取场景ID
 * @method void setSceneId(string $SceneId) 设置场景ID
 * @method string getType() 获取场景类型，default:默认场景,custom:非默认场景
 * @method void setType(string $Type) 设置场景类型，default:默认场景,custom:非默认场景
 * @method string getSceneName() 获取场景名
 * @method void setSceneName(string $SceneName) 设置场景名
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method array getBusinessType() 获取场景模板类型，登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
 * @method void setBusinessType(array $BusinessType) 设置场景模板类型，登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
 * @method array getClientType() 获取客户端类型，浏览器/H5 : browser  小程序: miniApp  App:
 * @method void setClientType(array $ClientType) 设置客户端类型，浏览器/H5 : browser  小程序: miniApp  App:
 * @method integer getPriority() 获取优先级
 * @method void setPriority(integer $Priority) 设置优先级
 * @method array getMatchCondition() 获取匹配范围
 * @method void setMatchCondition(array $MatchCondition) 设置匹配范围
 * @method boolean getSceneStatus() 获取场景开关
 * @method void setSceneStatus(boolean $SceneStatus) 设置场景开关
 * @method boolean getJsInjectStatus() 获取前端对抗开关
 * @method void setJsInjectStatus(boolean $JsInjectStatus) 设置前端对抗开关
 * @method boolean getAIStatus() 获取AI开关
 * @method void setAIStatus(boolean $AIStatus) 设置AI开关
 * @method boolean getTIStatus() 获取TI开关
 * @method void setTIStatus(boolean $TIStatus) 设置TI开关
 * @method boolean getStatisticStatus() 获取智能统计开关
 * @method void setStatisticStatus(boolean $StatisticStatus) 设置智能统计开关
 * @method integer getActionRuleCount() 获取动作策略数量
 * @method void setActionRuleCount(integer $ActionRuleCount) 设置动作策略数量
 * @method integer getUCBCount() 获取自定义规则数量
 * @method void setUCBCount(integer $UCBCount) 设置自定义规则数量
 * @method string getMatchType() 获取场景的匹配范围，global-全部匹配 custom-自定义匹配范围
 * @method void setMatchType(string $MatchType) 设置场景的匹配范围，global-全部匹配 custom-自定义匹配范围
 * @method string getActionMatchType() 获取匹配条件间的与或关系
 * @method void setActionMatchType(string $ActionMatchType) 设置匹配条件间的与或关系
 * @method boolean getUAStatus() 获取UA模块开关
 * @method void setUAStatus(boolean $UAStatus) 设置UA模块开关
 * @method integer getJsInjectRuleId() 获取简易模式场景：前端对抗对应mysql的记录id
 * @method void setJsInjectRuleId(integer $JsInjectRuleId) 设置简易模式场景：前端对抗对应mysql的记录id
 * @method integer getJsInjectAction() 获取简易模式场景：前端对抗配置动作
 * @method void setJsInjectAction(integer $JsInjectAction) 设置简易模式场景：前端对抗配置动作
 * @method string getJsInjectRedirect() 获取简易模式场景：前端对抗重定向路径
 * @method void setJsInjectRedirect(string $JsInjectRedirect) 设置简易模式场景：前端对抗重定向路径
 * @method array getActionRuleList() 获取简易模式场景：动作策略信息  PS:简易模式只有一个动作策略
 * @method void setActionRuleList(array $ActionRuleList) 设置简易模式场景：动作策略信息  PS:简易模式只有一个动作策略
 * @method string getBotIdPattern() 获取简易模式场景：monitor-观察 intercept-拦截 custom-自定义
 * @method void setBotIdPattern(string $BotIdPattern) 设置简易模式场景：monitor-观察 intercept-拦截 custom-自定义
 * @method integer getBotIdCount() 获取简易模式场景：bot_id规则总数
 * @method void setBotIdCount(integer $BotIdCount) 设置简易模式场景：bot_id规则总数
 * @method integer getBotIdMonitorCount() 获取简易模式场景：观察动作的规则总数
 * @method void setBotIdMonitorCount(integer $BotIdMonitorCount) 设置简易模式场景：观察动作的规则总数
 * @method integer getBotIdInterceptCount() 获取简易模式场景：拦截动作的规则总数
 * @method void setBotIdInterceptCount(integer $BotIdInterceptCount) 设置简易模式场景：拦截动作的规则总数
 * @method array getRuleSetSelection() 获取创建场景时选择的规则集
 * @method void setRuleSetSelection(array $RuleSetSelection) 设置创建场景时选择的规则集
 * @method array getTokenList() 获取改场景的bot token列表
 * @method void setTokenList(array $TokenList) 设置改场景的bot token列表
 * @method integer getBotIdRedirectCount() 获取简易模式场景：重定向动作的规则总数
 * @method void setBotIdRedirectCount(integer $BotIdRedirectCount) 设置简易模式场景：重定向动作的规则总数
 * @method integer getBotIdCaptchaCount() 获取简易模式场景：人机识别动作的规则总数
 * @method void setBotIdCaptchaCount(integer $BotIdCaptchaCount) 设置简易模式场景：人机识别动作的规则总数
 * @method string getBotIdProtectLevel() 获取简易模式场景：防护等级
 * @method void setBotIdProtectLevel(string $BotIdProtectLevel) 设置简易模式场景：防护等级
 * @method string getBotIdGlobalRedirect() 获取简易模式场景：全局重定向路径
 * @method void setBotIdGlobalRedirect(string $BotIdGlobalRedirect) 设置简易模式场景：全局重定向路径
 * @method integer getBotIdJsChallengeCount() 获取简易模式场景：JS校验动作的规则总数
 * @method void setBotIdJsChallengeCount(integer $BotIdJsChallengeCount) 设置简易模式场景：JS校验动作的规则总数
 */
class BotSceneInfo extends AbstractModel
{
    /**
     * @var string 场景ID
     */
    public $SceneId;

    /**
     * @var string 场景类型，default:默认场景,custom:非默认场景
     */
    public $Type;

    /**
     * @var string 场景名
     */
    public $SceneName;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var array 场景模板类型，登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
     */
    public $BusinessType;

    /**
     * @var array 客户端类型，浏览器/H5 : browser  小程序: miniApp  App:
     */
    public $ClientType;

    /**
     * @var integer 优先级
     */
    public $Priority;

    /**
     * @var array 匹配范围
     */
    public $MatchCondition;

    /**
     * @var boolean 场景开关
     */
    public $SceneStatus;

    /**
     * @var boolean 前端对抗开关
     */
    public $JsInjectStatus;

    /**
     * @var boolean AI开关
     */
    public $AIStatus;

    /**
     * @var boolean TI开关
     */
    public $TIStatus;

    /**
     * @var boolean 智能统计开关
     */
    public $StatisticStatus;

    /**
     * @var integer 动作策略数量
     */
    public $ActionRuleCount;

    /**
     * @var integer 自定义规则数量
     */
    public $UCBCount;

    /**
     * @var string 场景的匹配范围，global-全部匹配 custom-自定义匹配范围
     */
    public $MatchType;

    /**
     * @var string 匹配条件间的与或关系
     */
    public $ActionMatchType;

    /**
     * @var boolean UA模块开关
     */
    public $UAStatus;

    /**
     * @var integer 简易模式场景：前端对抗对应mysql的记录id
     */
    public $JsInjectRuleId;

    /**
     * @var integer 简易模式场景：前端对抗配置动作
     */
    public $JsInjectAction;

    /**
     * @var string 简易模式场景：前端对抗重定向路径
     */
    public $JsInjectRedirect;

    /**
     * @var array 简易模式场景：动作策略信息  PS:简易模式只有一个动作策略
     */
    public $ActionRuleList;

    /**
     * @var string 简易模式场景：monitor-观察 intercept-拦截 custom-自定义
     */
    public $BotIdPattern;

    /**
     * @var integer 简易模式场景：bot_id规则总数
     */
    public $BotIdCount;

    /**
     * @var integer 简易模式场景：观察动作的规则总数
     */
    public $BotIdMonitorCount;

    /**
     * @var integer 简易模式场景：拦截动作的规则总数
     */
    public $BotIdInterceptCount;

    /**
     * @var array 创建场景时选择的规则集
     */
    public $RuleSetSelection;

    /**
     * @var array 改场景的bot token列表
     */
    public $TokenList;

    /**
     * @var integer 简易模式场景：重定向动作的规则总数
     */
    public $BotIdRedirectCount;

    /**
     * @var integer 简易模式场景：人机识别动作的规则总数
     */
    public $BotIdCaptchaCount;

    /**
     * @var string 简易模式场景：防护等级
     */
    public $BotIdProtectLevel;

    /**
     * @var string 简易模式场景：全局重定向路径
     */
    public $BotIdGlobalRedirect;

    /**
     * @var integer 简易模式场景：JS校验动作的规则总数
     */
    public $BotIdJsChallengeCount;

    /**
     * @param string $SceneId 场景ID
     * @param string $Type 场景类型，default:默认场景,custom:非默认场景
     * @param string $SceneName 场景名
     * @param integer $UpdateTime 更新时间
     * @param array $BusinessType 场景模板类型，登录: login  秒杀:seckill  爬内容：crawl 自定义: custom
     * @param array $ClientType 客户端类型，浏览器/H5 : browser  小程序: miniApp  App:
     * @param integer $Priority 优先级
     * @param array $MatchCondition 匹配范围
     * @param boolean $SceneStatus 场景开关
     * @param boolean $JsInjectStatus 前端对抗开关
     * @param boolean $AIStatus AI开关
     * @param boolean $TIStatus TI开关
     * @param boolean $StatisticStatus 智能统计开关
     * @param integer $ActionRuleCount 动作策略数量
     * @param integer $UCBCount 自定义规则数量
     * @param string $MatchType 场景的匹配范围，global-全部匹配 custom-自定义匹配范围
     * @param string $ActionMatchType 匹配条件间的与或关系
     * @param boolean $UAStatus UA模块开关
     * @param integer $JsInjectRuleId 简易模式场景：前端对抗对应mysql的记录id
     * @param integer $JsInjectAction 简易模式场景：前端对抗配置动作
     * @param string $JsInjectRedirect 简易模式场景：前端对抗重定向路径
     * @param array $ActionRuleList 简易模式场景：动作策略信息  PS:简易模式只有一个动作策略
     * @param string $BotIdPattern 简易模式场景：monitor-观察 intercept-拦截 custom-自定义
     * @param integer $BotIdCount 简易模式场景：bot_id规则总数
     * @param integer $BotIdMonitorCount 简易模式场景：观察动作的规则总数
     * @param integer $BotIdInterceptCount 简易模式场景：拦截动作的规则总数
     * @param array $RuleSetSelection 创建场景时选择的规则集
     * @param array $TokenList 改场景的bot token列表
     * @param integer $BotIdRedirectCount 简易模式场景：重定向动作的规则总数
     * @param integer $BotIdCaptchaCount 简易模式场景：人机识别动作的规则总数
     * @param string $BotIdProtectLevel 简易模式场景：防护等级
     * @param string $BotIdGlobalRedirect 简易模式场景：全局重定向路径
     * @param integer $BotIdJsChallengeCount 简易模式场景：JS校验动作的规则总数
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SceneName",$param) and $param["SceneName"] !== null) {
            $this->SceneName = $param["SceneName"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("BusinessType",$param) and $param["BusinessType"] !== null) {
            $this->BusinessType = $param["BusinessType"];
        }

        if (array_key_exists("ClientType",$param) and $param["ClientType"] !== null) {
            $this->ClientType = $param["ClientType"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("MatchCondition",$param) and $param["MatchCondition"] !== null) {
            $this->MatchCondition = [];
            foreach ($param["MatchCondition"] as $key => $value){
                $obj = new BotSceneMatchCondition();
                $obj->deserialize($value);
                array_push($this->MatchCondition, $obj);
            }
        }

        if (array_key_exists("SceneStatus",$param) and $param["SceneStatus"] !== null) {
            $this->SceneStatus = $param["SceneStatus"];
        }

        if (array_key_exists("JsInjectStatus",$param) and $param["JsInjectStatus"] !== null) {
            $this->JsInjectStatus = $param["JsInjectStatus"];
        }

        if (array_key_exists("AIStatus",$param) and $param["AIStatus"] !== null) {
            $this->AIStatus = $param["AIStatus"];
        }

        if (array_key_exists("TIStatus",$param) and $param["TIStatus"] !== null) {
            $this->TIStatus = $param["TIStatus"];
        }

        if (array_key_exists("StatisticStatus",$param) and $param["StatisticStatus"] !== null) {
            $this->StatisticStatus = $param["StatisticStatus"];
        }

        if (array_key_exists("ActionRuleCount",$param) and $param["ActionRuleCount"] !== null) {
            $this->ActionRuleCount = $param["ActionRuleCount"];
        }

        if (array_key_exists("UCBCount",$param) and $param["UCBCount"] !== null) {
            $this->UCBCount = $param["UCBCount"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("ActionMatchType",$param) and $param["ActionMatchType"] !== null) {
            $this->ActionMatchType = $param["ActionMatchType"];
        }

        if (array_key_exists("UAStatus",$param) and $param["UAStatus"] !== null) {
            $this->UAStatus = $param["UAStatus"];
        }

        if (array_key_exists("JsInjectRuleId",$param) and $param["JsInjectRuleId"] !== null) {
            $this->JsInjectRuleId = $param["JsInjectRuleId"];
        }

        if (array_key_exists("JsInjectAction",$param) and $param["JsInjectAction"] !== null) {
            $this->JsInjectAction = $param["JsInjectAction"];
        }

        if (array_key_exists("JsInjectRedirect",$param) and $param["JsInjectRedirect"] !== null) {
            $this->JsInjectRedirect = $param["JsInjectRedirect"];
        }

        if (array_key_exists("ActionRuleList",$param) and $param["ActionRuleList"] !== null) {
            $this->ActionRuleList = [];
            foreach ($param["ActionRuleList"] as $key => $value){
                $obj = new BotSceneActionRule();
                $obj->deserialize($value);
                array_push($this->ActionRuleList, $obj);
            }
        }

        if (array_key_exists("BotIdPattern",$param) and $param["BotIdPattern"] !== null) {
            $this->BotIdPattern = $param["BotIdPattern"];
        }

        if (array_key_exists("BotIdCount",$param) and $param["BotIdCount"] !== null) {
            $this->BotIdCount = $param["BotIdCount"];
        }

        if (array_key_exists("BotIdMonitorCount",$param) and $param["BotIdMonitorCount"] !== null) {
            $this->BotIdMonitorCount = $param["BotIdMonitorCount"];
        }

        if (array_key_exists("BotIdInterceptCount",$param) and $param["BotIdInterceptCount"] !== null) {
            $this->BotIdInterceptCount = $param["BotIdInterceptCount"];
        }

        if (array_key_exists("RuleSetSelection",$param) and $param["RuleSetSelection"] !== null) {
            $this->RuleSetSelection = $param["RuleSetSelection"];
        }

        if (array_key_exists("TokenList",$param) and $param["TokenList"] !== null) {
            $this->TokenList = [];
            foreach ($param["TokenList"] as $key => $value){
                $obj = new BotToken();
                $obj->deserialize($value);
                array_push($this->TokenList, $obj);
            }
        }

        if (array_key_exists("BotIdRedirectCount",$param) and $param["BotIdRedirectCount"] !== null) {
            $this->BotIdRedirectCount = $param["BotIdRedirectCount"];
        }

        if (array_key_exists("BotIdCaptchaCount",$param) and $param["BotIdCaptchaCount"] !== null) {
            $this->BotIdCaptchaCount = $param["BotIdCaptchaCount"];
        }

        if (array_key_exists("BotIdProtectLevel",$param) and $param["BotIdProtectLevel"] !== null) {
            $this->BotIdProtectLevel = $param["BotIdProtectLevel"];
        }

        if (array_key_exists("BotIdGlobalRedirect",$param) and $param["BotIdGlobalRedirect"] !== null) {
            $this->BotIdGlobalRedirect = $param["BotIdGlobalRedirect"];
        }

        if (array_key_exists("BotIdJsChallengeCount",$param) and $param["BotIdJsChallengeCount"] !== null) {
            $this->BotIdJsChallengeCount = $param["BotIdJsChallengeCount"];
        }
    }
}
