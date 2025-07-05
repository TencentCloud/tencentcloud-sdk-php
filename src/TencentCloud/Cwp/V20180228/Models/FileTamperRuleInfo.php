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
 * 核心文件监控规则列表
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method integer getRuleCategory() 获取规则类型 0 ：系统规则  1：用户规则
 * @method void setRuleCategory(integer $RuleCategory) 设置规则类型 0 ：系统规则  1：用户规则
 * @method integer getHostCount() 获取影响主机数
 * @method void setHostCount(integer $HostCount) 设置影响主机数
 * @method string getModifyTime() 获取更新时间
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getStatus() 获取状态 0: 启用 1: 已关闭
 * @method void setStatus(integer $Status) 设置状态 0: 启用 1: 已关闭
 * @method integer getId() 获取规则id，系统的规则时为0。
 * @method void setId(integer $Id) 设置规则id，系统的规则时为0。
 * @method integer getIsGlobal() 获取是否是全局的 0：否 ，1：是
 * @method void setIsGlobal(integer $IsGlobal) 设置是否是全局的 0：否 ，1：是
 * @method integer getLevel() 获取风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method void setLevel(integer $Level) 设置风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method integer getWriteRuleCount() 获取子规则写条目数
 * @method void setWriteRuleCount(integer $WriteRuleCount) 设置子规则写条目数
 * @method integer getReadRuleCount() 获取子规则读条目数
 * @method void setReadRuleCount(integer $ReadRuleCount) 设置子规则读条目数
 * @method integer getReadWriteRuleCount() 获取子规则读写条目数
 * @method void setReadWriteRuleCount(integer $ReadWriteRuleCount) 设置子规则读写条目数
 * @method string getFileAction() 获取监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
 * @method void setFileAction(string $FileAction) 设置监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
 * @method string getAddWhiteType() 获取加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
 * @method void setAddWhiteType(string $AddWhiteType) 设置加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
 */
class FileTamperRuleInfo extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var integer 规则类型 0 ：系统规则  1：用户规则
     */
    public $RuleCategory;

    /**
     * @var integer 影响主机数
     */
    public $HostCount;

    /**
     * @var string 更新时间
     */
    public $ModifyTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 状态 0: 启用 1: 已关闭
     */
    public $Status;

    /**
     * @var integer 规则id，系统的规则时为0。
     */
    public $Id;

    /**
     * @var integer 是否是全局的 0：否 ，1：是
     */
    public $IsGlobal;

    /**
     * @var integer 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
     */
    public $Level;

    /**
     * @var integer 子规则写条目数
     */
    public $WriteRuleCount;

    /**
     * @var integer 子规则读条目数
     */
    public $ReadRuleCount;

    /**
     * @var integer 子规则读写条目数
     */
    public $ReadWriteRuleCount;

    /**
     * @var string 监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
     */
    public $FileAction;

    /**
     * @var string 加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
     */
    public $AddWhiteType;

    /**
     * @param string $Name 规则名称
     * @param integer $RuleCategory 规则类型 0 ：系统规则  1：用户规则
     * @param integer $HostCount 影响主机数
     * @param string $ModifyTime 更新时间
     * @param string $CreateTime 创建时间
     * @param integer $Status 状态 0: 启用 1: 已关闭
     * @param integer $Id 规则id，系统的规则时为0。
     * @param integer $IsGlobal 是否是全局的 0：否 ，1：是
     * @param integer $Level 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
     * @param integer $WriteRuleCount 子规则写条目数
     * @param integer $ReadRuleCount 子规则读条目数
     * @param integer $ReadWriteRuleCount 子规则读写条目数
     * @param string $FileAction 监控行为
<li>read 读取文件</li>
<li>write 修改文件</li>
<li>read-write 读取修改文件</li>
     * @param string $AddWhiteType 加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
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

        if (array_key_exists("RuleCategory",$param) and $param["RuleCategory"] !== null) {
            $this->RuleCategory = $param["RuleCategory"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("WriteRuleCount",$param) and $param["WriteRuleCount"] !== null) {
            $this->WriteRuleCount = $param["WriteRuleCount"];
        }

        if (array_key_exists("ReadRuleCount",$param) and $param["ReadRuleCount"] !== null) {
            $this->ReadRuleCount = $param["ReadRuleCount"];
        }

        if (array_key_exists("ReadWriteRuleCount",$param) and $param["ReadWriteRuleCount"] !== null) {
            $this->ReadWriteRuleCount = $param["ReadWriteRuleCount"];
        }

        if (array_key_exists("FileAction",$param) and $param["FileAction"] !== null) {
            $this->FileAction = $param["FileAction"];
        }

        if (array_key_exists("AddWhiteType",$param) and $param["AddWhiteType"] !== null) {
            $this->AddWhiteType = $param["AddWhiteType"];
        }
    }
}
