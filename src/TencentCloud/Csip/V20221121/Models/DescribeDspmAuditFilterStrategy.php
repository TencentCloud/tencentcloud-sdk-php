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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 过滤规则
 *
 * @method integer getAuditFilterStrategyId() 获取<p>策略ID</p>
 * @method void setAuditFilterStrategyId(integer $AuditFilterStrategyId) 设置<p>策略ID</p>
 * @method string getName() 获取<p>策略名</p>
 * @method void setName(string $Name) 设置<p>策略名</p>
 * @method string getDescription() 获取<p>策略描述</p>
 * @method void setDescription(string $Description) 设置<p>策略描述</p>
 * @method string getRule() 获取<p>规则内容</p>
 * @method void setRule(string $Rule) 设置<p>规则内容</p>
 * @method integer getIsEnabled() 获取<p>是否启用</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
 * @method void setIsEnabled(integer $IsEnabled) 设置<p>是否启用</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
 * @method string getRemark() 获取<p>备注</p>
 * @method void setRemark(string $Remark) 设置<p>备注</p>
 * @method string getCreateTime() 获取<p>创建时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
 * @method string getModifyTime() 获取<p>更新时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>更新时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
 * @method integer getAppId() 获取<p>云账号ID</p>
 * @method void setAppId(integer $AppId) 设置<p>云账号ID</p>
 * @method string getUin() 获取<p>用户标识</p>
 * @method void setUin(string $Uin) 设置<p>用户标识</p>
 * @method string getNickName() 获取<p>账号昵称</p>
 * @method void setNickName(string $NickName) 设置<p>账号昵称</p>
 */
class DescribeDspmAuditFilterStrategy extends AbstractModel
{
    /**
     * @var integer <p>策略ID</p>
     */
    public $AuditFilterStrategyId;

    /**
     * @var string <p>策略名</p>
     */
    public $Name;

    /**
     * @var string <p>策略描述</p>
     */
    public $Description;

    /**
     * @var string <p>规则内容</p>
     */
    public $Rule;

    /**
     * @var integer <p>是否启用</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
     */
    public $IsEnabled;

    /**
     * @var string <p>备注</p>
     */
    public $Remark;

    /**
     * @var string <p>创建时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>云账号ID</p>
     */
    public $AppId;

    /**
     * @var string <p>用户标识</p>
     */
    public $Uin;

    /**
     * @var string <p>账号昵称</p>
     */
    public $NickName;

    /**
     * @param integer $AuditFilterStrategyId <p>策略ID</p>
     * @param string $Name <p>策略名</p>
     * @param string $Description <p>策略描述</p>
     * @param string $Rule <p>规则内容</p>
     * @param integer $IsEnabled <p>是否启用</p><p>枚举值：</p><ul><li>0： 禁用</li><li>1： 启用</li></ul>
     * @param string $Remark <p>备注</p>
     * @param string $CreateTime <p>创建时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
     * @param string $ModifyTime <p>更新时间</p><p>参数格式：2026-07-16T11:44:45+08</p>
     * @param integer $AppId <p>云账号ID</p>
     * @param string $Uin <p>用户标识</p>
     * @param string $NickName <p>账号昵称</p>
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
        if (array_key_exists("AuditFilterStrategyId",$param) and $param["AuditFilterStrategyId"] !== null) {
            $this->AuditFilterStrategyId = $param["AuditFilterStrategyId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = $param["Rule"];
        }

        if (array_key_exists("IsEnabled",$param) and $param["IsEnabled"] !== null) {
            $this->IsEnabled = $param["IsEnabled"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }
    }
}
