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
 * 企微机器人规则概要
 *
 * @method integer getRuleId() 获取规则Id
 * @method void setRuleId(integer $RuleId) 设置规则Id
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getHookAddr() 获取机器人地址
 * @method void setHookAddr(string $HookAddr) 设置机器人地址
 * @method string getRuleRemark() 获取备注信息
 * @method void setRuleRemark(string $RuleRemark) 设置备注信息
 * @method array getRuleItems() 获取事件类型
 * @method void setRuleItems(array $RuleItems) 设置事件类型
 * @method array getHostLabels() 获取主机范围
 * @method void setHostLabels(array $HostLabels) 设置主机范围
 * @method integer getIsDisabled() 获取是否启用[1:禁用|0:启用]
 * @method void setIsDisabled(integer $IsDisabled) 设置是否启用[1:禁用|0:启用]
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getUpdateTime() 获取更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
 * @method integer getHostCount() 获取主机数目
 * @method void setHostCount(integer $HostCount) 设置主机数目
 */
class WebHookRuleSummary extends AbstractModel
{
    /**
     * @var integer 规则Id
     */
    public $RuleId;

    /**
     * @var string 规则名称
     */
    public $RuleName;

    /**
     * @var string 机器人地址
     */
    public $HookAddr;

    /**
     * @var string 备注信息
     */
    public $RuleRemark;

    /**
     * @var array 事件类型
     */
    public $RuleItems;

    /**
     * @var array 主机范围
     */
    public $HostLabels;

    /**
     * @var integer 是否启用[1:禁用|0:启用]
     */
    public $IsDisabled;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 主机数目
     */
    public $HostCount;

    /**
     * @param integer $RuleId 规则Id
     * @param string $RuleName 规则名称
     * @param string $HookAddr 机器人地址
     * @param string $RuleRemark 备注信息
     * @param array $RuleItems 事件类型
     * @param array $HostLabels 主机范围
     * @param integer $IsDisabled 是否启用[1:禁用|0:启用]
     * @param string $CreateTime 创建时间
     * @param string $UpdateTime 更新时间
     * @param integer $HostCount 主机数目
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("HookAddr",$param) and $param["HookAddr"] !== null) {
            $this->HookAddr = $param["HookAddr"];
        }

        if (array_key_exists("RuleRemark",$param) and $param["RuleRemark"] !== null) {
            $this->RuleRemark = $param["RuleRemark"];
        }

        if (array_key_exists("RuleItems",$param) and $param["RuleItems"] !== null) {
            $this->RuleItems = [];
            foreach ($param["RuleItems"] as $key => $value){
                $obj = new WebHookEventKv();
                $obj->deserialize($value);
                array_push($this->RuleItems, $obj);
            }
        }

        if (array_key_exists("HostLabels",$param) and $param["HostLabels"] !== null) {
            $this->HostLabels = [];
            foreach ($param["HostLabels"] as $key => $value){
                $obj = new WebHookHostLabel();
                $obj->deserialize($value);
                array_push($this->HostLabels, $obj);
            }
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }
    }
}
