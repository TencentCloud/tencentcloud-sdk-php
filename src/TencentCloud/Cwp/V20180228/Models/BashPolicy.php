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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 高危命令策略
 *
 * @method string getName() 获取<p>策略名称</p>
 * @method void setName(string $Name) 设置<p>策略名称</p>
 * @method integer getEnable() 获取<p>1:有效 0:无效</p>
 * @method void setEnable(integer $Enable) 设置<p>1:有效 0:无效</p>
 * @method integer getWhite() 获取<p>0:黑名单 1:白名单</p>
 * @method void setWhite(integer $White) 设置<p>0:黑名单 1:白名单</p>
 * @method integer getBashAction() 获取<p>0:告警 1:白名单 2:拦截</p>
 * @method void setBashAction(integer $BashAction) 设置<p>0:告警 1:白名单 2:拦截</p>
 * @method string getRule() 获取<p>正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine</p>
 * @method void setRule(string $Rule) 设置<p>正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine</p>
 * @method integer getLevel() 获取<p>危险等级(0:无，1: 高危 2:中危 3: 低危)</p>
 * @method void setLevel(integer $Level) 设置<p>危险等级(0:无，1: 高危 2:中危 3: 低危)</p>
 * @method integer getScope() 获取<p>生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）</p>
 * @method void setScope(integer $Scope) 设置<p>生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）</p>
 * @method integer getId() 获取<p>策略ID</p>
 * @method void setId(integer $Id) 设置<p>策略ID</p>
 * @method string getDescript() 获取<p>策略描述</p>
 * @method void setDescript(string $Descript) 设置<p>策略描述</p>
 * @method integer getEventId() 获取<p>事件列表点击“加入白名单”时,需要传EventId 事件的id</p>
 * @method void setEventId(integer $EventId) 设置<p>事件列表点击“加入白名单”时,需要传EventId 事件的id</p>
 * @method integer getDealOldEvents() 获取<p>是否处理旧事件为白名单 0=不处理 1=处理</p>
 * @method void setDealOldEvents(integer $DealOldEvents) 设置<p>是否处理旧事件为白名单 0=不处理 1=处理</p>
 * @method array getQuuids() 获取<p>生效主机的QUUID集合</p>
 * @method void setQuuids(array $Quuids) 设置<p>生效主机的QUUID集合</p>
 * @method integer getCategory() 获取<p>策略类型，0:系统  1:用户</p>
 * @method void setCategory(integer $Category) 设置<p>策略类型，0:系统  1:用户</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>修改时间</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>修改时间</p>
 * @method array getUuids() 获取<p>老版本兼容可能会用到</p>
 * @method void setUuids(array $Uuids) 设置<p>老版本兼容可能会用到</p>
 * @method PolicyRules getRules() 获取<p>规则表达式</p>
 * @method void setRules(PolicyRules $Rules) 设置<p>规则表达式</p>
 * @method integer getMatchType() 获取<p>匹配类型：0-命令行（默认） 1-文件操作</p>
 * @method void setMatchType(integer $MatchType) 设置<p>匹配类型：0-命令行（默认） 1-文件操作</p>
 */
class BashPolicy extends AbstractModel
{
    /**
     * @var string <p>策略名称</p>
     */
    public $Name;

    /**
     * @var integer <p>1:有效 0:无效</p>
     */
    public $Enable;

    /**
     * @var integer <p>0:黑名单 1:白名单</p>
     */
    public $White;

    /**
     * @var integer <p>0:告警 1:白名单 2:拦截</p>
     */
    public $BashAction;

    /**
     * @var string <p>正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine</p>
     */
    public $Rule;

    /**
     * @var integer <p>危险等级(0:无，1: 高危 2:中危 3: 低危)</p>
     */
    public $Level;

    /**
     * @var integer <p>生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）</p>
     */
    public $Scope;

    /**
     * @var integer <p>策略ID</p>
     */
    public $Id;

    /**
     * @var string <p>策略描述</p>
     */
    public $Descript;

    /**
     * @var integer <p>事件列表点击“加入白名单”时,需要传EventId 事件的id</p>
     */
    public $EventId;

    /**
     * @var integer <p>是否处理旧事件为白名单 0=不处理 1=处理</p>
     */
    public $DealOldEvents;

    /**
     * @var array <p>生效主机的QUUID集合</p>
     */
    public $Quuids;

    /**
     * @var integer <p>策略类型，0:系统  1:用户</p>
     */
    public $Category;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>修改时间</p>
     */
    public $ModifyTime;

    /**
     * @var array <p>老版本兼容可能会用到</p>
     */
    public $Uuids;

    /**
     * @var PolicyRules <p>规则表达式</p>
     */
    public $Rules;

    /**
     * @var integer <p>匹配类型：0-命令行（默认） 1-文件操作</p>
     */
    public $MatchType;

    /**
     * @param string $Name <p>策略名称</p>
     * @param integer $Enable <p>1:有效 0:无效</p>
     * @param integer $White <p>0:黑名单 1:白名单</p>
     * @param integer $BashAction <p>0:告警 1:白名单 2:拦截</p>
     * @param string $Rule <p>正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine</p>
     * @param integer $Level <p>危险等级(0:无，1: 高危 2:中危 3: 低危)</p>
     * @param integer $Scope <p>生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）</p>
     * @param integer $Id <p>策略ID</p>
     * @param string $Descript <p>策略描述</p>
     * @param integer $EventId <p>事件列表点击“加入白名单”时,需要传EventId 事件的id</p>
     * @param integer $DealOldEvents <p>是否处理旧事件为白名单 0=不处理 1=处理</p>
     * @param array $Quuids <p>生效主机的QUUID集合</p>
     * @param integer $Category <p>策略类型，0:系统  1:用户</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>修改时间</p>
     * @param array $Uuids <p>老版本兼容可能会用到</p>
     * @param PolicyRules $Rules <p>规则表达式</p>
     * @param integer $MatchType <p>匹配类型：0-命令行（默认） 1-文件操作</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("White",$param) and $param["White"] !== null) {
            $this->White = $param["White"];
        }

        if (array_key_exists("BashAction",$param) and $param["BashAction"] !== null) {
            $this->BashAction = $param["BashAction"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = new PolicyRules();
            $this->Rules->deserialize($param["Rules"]);
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }
    }
}
