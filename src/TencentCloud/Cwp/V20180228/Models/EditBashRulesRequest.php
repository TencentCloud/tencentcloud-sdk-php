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
 * EditBashRules请求参数结构体
 *
 * @method integer getId() 获取规则ID（新增时不填）
 * @method void setId(integer $Id) 设置规则ID（新增时不填）
 * @method array getUuids() 获取客户端ID数组
 * @method void setUuids(array $Uuids) 设置客户端ID数组
 * @method string getHostIp() 获取主机IP
 * @method void setHostIp(string $HostIp) 设置主机IP
 * @method string getName() 获取规则名称，编辑时不可修改规则名称
 * @method void setName(string $Name) 设置规则名称，编辑时不可修改规则名称
 * @method integer getLevel() 获取危险等级(0:无，1: 高危 2:中危 3: 低危)
 * @method void setLevel(integer $Level) 设置危险等级(0:无，1: 高危 2:中危 3: 低危)
 * @method string getRule() 获取正则表达式 ，编辑时不可修改正则表达式，需要对内容QueryEscape后再base64
 * @method void setRule(string $Rule) 设置正则表达式 ，编辑时不可修改正则表达式，需要对内容QueryEscape后再base64
 * @method integer getIsGlobal() 获取是否全局规则(默认否)：1-全局，0-非全局
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(默认否)：1-全局，0-非全局
 * @method integer getWhite() 获取0=黑名单， 1=白名单
 * @method void setWhite(integer $White) 设置0=黑名单， 1=白名单
 * @method integer getEventId() 获取事件列表点击“加入白名单”时,需要传EventId 事件的id
 * @method void setEventId(integer $EventId) 设置事件列表点击“加入白名单”时,需要传EventId 事件的id
 * @method integer getDealOldEvents() 获取是否处理旧事件为白名单 0=不处理 1=处理
 * @method void setDealOldEvents(integer $DealOldEvents) 设置是否处理旧事件为白名单 0=不处理 1=处理
 * @method string getDescript() 获取策略描述
 * @method void setDescript(string $Descript) 设置策略描述
 * @method integer getStatus() 获取生效与否  0:不生效 1:生效
 * @method void setStatus(integer $Status) 设置生效与否  0:不生效 1:生效
 * @method integer getBashAction() 获取0:告警  1:白名单  2:拦截
 * @method void setBashAction(integer $BashAction) 设置0:告警  1:白名单  2:拦截
 * @method integer getScope() 获取生效范围（0:一组quuid 1:所有专业版 2:所有专业版+旗舰版 3:所有主机）
 * @method void setScope(integer $Scope) 设置生效范围（0:一组quuid 1:所有专业版 2:所有专业版+旗舰版 3:所有主机）
 * @method array getQuuids() 获取生效主机的QUUID集合
 * @method void setQuuids(array $Quuids) 设置生效主机的QUUID集合
 */
class EditBashRulesRequest extends AbstractModel
{
    /**
     * @var integer 规则ID（新增时不填）
     */
    public $Id;

    /**
     * @var array 客户端ID数组
     */
    public $Uuids;

    /**
     * @var string 主机IP
     */
    public $HostIp;

    /**
     * @var string 规则名称，编辑时不可修改规则名称
     */
    public $Name;

    /**
     * @var integer 危险等级(0:无，1: 高危 2:中危 3: 低危)
     */
    public $Level;

    /**
     * @var string 正则表达式 ，编辑时不可修改正则表达式，需要对内容QueryEscape后再base64
     */
    public $Rule;

    /**
     * @var integer 是否全局规则(默认否)：1-全局，0-非全局
     */
    public $IsGlobal;

    /**
     * @var integer 0=黑名单， 1=白名单
     */
    public $White;

    /**
     * @var integer 事件列表点击“加入白名单”时,需要传EventId 事件的id
     */
    public $EventId;

    /**
     * @var integer 是否处理旧事件为白名单 0=不处理 1=处理
     */
    public $DealOldEvents;

    /**
     * @var string 策略描述
     */
    public $Descript;

    /**
     * @var integer 生效与否  0:不生效 1:生效
     */
    public $Status;

    /**
     * @var integer 0:告警  1:白名单  2:拦截
     */
    public $BashAction;

    /**
     * @var integer 生效范围（0:一组quuid 1:所有专业版 2:所有专业版+旗舰版 3:所有主机）
     */
    public $Scope;

    /**
     * @var array 生效主机的QUUID集合
     */
    public $Quuids;

    /**
     * @param integer $Id 规则ID（新增时不填）
     * @param array $Uuids 客户端ID数组
     * @param string $HostIp 主机IP
     * @param string $Name 规则名称，编辑时不可修改规则名称
     * @param integer $Level 危险等级(0:无，1: 高危 2:中危 3: 低危)
     * @param string $Rule 正则表达式 ，编辑时不可修改正则表达式，需要对内容QueryEscape后再base64
     * @param integer $IsGlobal 是否全局规则(默认否)：1-全局，0-非全局
     * @param integer $White 0=黑名单， 1=白名单
     * @param integer $EventId 事件列表点击“加入白名单”时,需要传EventId 事件的id
     * @param integer $DealOldEvents 是否处理旧事件为白名单 0=不处理 1=处理
     * @param string $Descript 策略描述
     * @param integer $Status 生效与否  0:不生效 1:生效
     * @param integer $BashAction 0:告警  1:白名单  2:拦截
     * @param integer $Scope 生效范围（0:一组quuid 1:所有专业版 2:所有专业版+旗舰版 3:所有主机）
     * @param array $Quuids 生效主机的QUUID集合
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("White",$param) and $param["White"] !== null) {
            $this->White = $param["White"];
        }

        if (array_key_exists("EventId",$param) and $param["EventId"] !== null) {
            $this->EventId = $param["EventId"];
        }

        if (array_key_exists("DealOldEvents",$param) and $param["DealOldEvents"] !== null) {
            $this->DealOldEvents = $param["DealOldEvents"];
        }

        if (array_key_exists("Descript",$param) and $param["Descript"] !== null) {
            $this->Descript = $param["Descript"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("BashAction",$param) and $param["BashAction"] !== null) {
            $this->BashAction = $param["BashAction"];
        }

        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }
    }
}
