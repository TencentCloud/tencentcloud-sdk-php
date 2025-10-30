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
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method integer getEnable() 获取1:有效 0:无效
 * @method void setEnable(integer $Enable) 设置1:有效 0:无效
 * @method integer getWhite() 获取0:黑名单 1:白名单
 * @method void setWhite(integer $White) 设置0:黑名单 1:白名单
 * @method integer getBashAction() 获取0:告警 1:白名单 2:拦截
 * @method void setBashAction(integer $BashAction) 设置0:告警 1:白名单 2:拦截
 * @method string getRule() 获取正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine
 * @method void setRule(string $Rule) 设置正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine
 * @method integer getLevel() 获取危险等级(0:无，1: 高危 2:中危 3: 低危)
 * @method void setLevel(integer $Level) 设置危险等级(0:无，1: 高危 2:中危 3: 低危)
 * @method integer getScope() 获取生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）
 * @method void setScope(integer $Scope) 设置生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）
 * @method integer getId() 获取策略ID
 * @method void setId(integer $Id) 设置策略ID
 * @method string getDescript() 获取策略描述
 * @method void setDescript(string $Descript) 设置策略描述
 * @method integer getEventId() 获取事件列表点击“加入白名单”时,需要传EventId 事件的id
 * @method void setEventId(integer $EventId) 设置事件列表点击“加入白名单”时,需要传EventId 事件的id
 * @method integer getDealOldEvents() 获取是否处理旧事件为白名单 0=不处理 1=处理
 * @method void setDealOldEvents(integer $DealOldEvents) 设置是否处理旧事件为白名单 0=不处理 1=处理
 * @method array getQuuids() 获取生效主机的QUUID集合
 * @method void setQuuids(array $Quuids) 设置生效主机的QUUID集合
 * @method integer getCategory() 获取策略类型，0:系统  1:用户
 * @method void setCategory(integer $Category) 设置策略类型，0:系统  1:用户
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 * @method array getUuids() 获取老版本兼容可能会用到
 * @method void setUuids(array $Uuids) 设置老版本兼容可能会用到
 * @method PolicyRules getRules() 获取规则表达式
 * @method void setRules(PolicyRules $Rules) 设置规则表达式
 */
class BashPolicy extends AbstractModel
{
    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var integer 1:有效 0:无效
     */
    public $Enable;

    /**
     * @var integer 0:黑名单 1:白名单
     */
    public $White;

    /**
     * @var integer 0:告警 1:白名单 2:拦截
     */
    public $BashAction;

    /**
     * @var string 正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine
     */
    public $Rule;

    /**
     * @var integer 危险等级(0:无，1: 高危 2:中危 3: 低危)
     */
    public $Level;

    /**
     * @var integer 生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）
     */
    public $Scope;

    /**
     * @var integer 策略ID
     */
    public $Id;

    /**
     * @var string 策略描述
     */
    public $Descript;

    /**
     * @var integer 事件列表点击“加入白名单”时,需要传EventId 事件的id
     */
    public $EventId;

    /**
     * @var integer 是否处理旧事件为白名单 0=不处理 1=处理
     */
    public $DealOldEvents;

    /**
     * @var array 生效主机的QUUID集合
     */
    public $Quuids;

    /**
     * @var integer 策略类型，0:系统  1:用户
     */
    public $Category;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @var array 老版本兼容可能会用到
     */
    public $Uuids;

    /**
     * @var PolicyRules 规则表达式
     */
    public $Rules;

    /**
     * @param string $Name 策略名称
     * @param integer $Enable 1:有效 0:无效
     * @param integer $White 0:黑名单 1:白名单
     * @param integer $BashAction 0:告警 1:白名单 2:拦截
     * @param string $Rule 正则表达式 base64 加密,该字段废弃,如果写入则自动替换为Rules.Process.CmdLine
     * @param integer $Level 危险等级(0:无，1: 高危 2:中危 3: 低危)
     * @param integer $Scope 生效范围（0:一组quuid 1:所有专业版(包含旗舰版) 2:所有旗舰版 3:所有主机）
     * @param integer $Id 策略ID
     * @param string $Descript 策略描述
     * @param integer $EventId 事件列表点击“加入白名单”时,需要传EventId 事件的id
     * @param integer $DealOldEvents 是否处理旧事件为白名单 0=不处理 1=处理
     * @param array $Quuids 生效主机的QUUID集合
     * @param integer $Category 策略类型，0:系统  1:用户
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
     * @param array $Uuids 老版本兼容可能会用到
     * @param PolicyRules $Rules 规则表达式
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
    }
}
