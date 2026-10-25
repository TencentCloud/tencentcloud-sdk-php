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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 字段值替换规则
 *
 * @method integer getId() 获取<p>规则 ID</p>
 * @method void setId(integer $Id) 设置<p>规则 ID</p>
 * @method string getAppId() 获取<p>应用 ID</p>
 * @method void setAppId(string $AppId) 设置<p>应用 ID</p>
 * @method string getName() 获取<p>规则名称</p>
 * @method void setName(string $Name) 设置<p>规则名称</p>
 * @method string getTargetField() 获取<p>目标字段</p>
 * @method void setTargetField(string $TargetField) 设置<p>目标字段</p>
 * @method string getMatchType() 获取<p>匹配方式：exact / prefix / contains / regex</p>
 * @method void setMatchType(string $MatchType) 设置<p>匹配方式：exact / prefix / contains / regex</p>
 * @method string getMatchPattern() 获取<p>匹配模式</p>
 * @method void setMatchPattern(string $MatchPattern) 设置<p>匹配模式</p>
 * @method string getTransformAction() 获取<p>替换动作：replace / regex_replace / mask</p>
 * @method void setTransformAction(string $TransformAction) 设置<p>替换动作：replace / regex_replace / mask</p>
 * @method string getReplaceValue() 获取<p>替换值</p>
 * @method void setReplaceValue(string $ReplaceValue) 设置<p>替换值</p>
 * @method integer getPriority() 获取<p>优先级</p>
 * @method void setPriority(integer $Priority) 设置<p>优先级</p>
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 * @method string getCreatedBy() 获取<p>创建人</p>
 * @method void setCreatedBy(string $CreatedBy) 设置<p>创建人</p>
 * @method string getUpdatedBy() 获取<p>更新人</p>
 * @method void setUpdatedBy(string $UpdatedBy) 设置<p>更新人</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getUpdatedAt() 获取<p>更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
 */
class FieldTransformRuleItem extends AbstractModel
{
    /**
     * @var integer <p>规则 ID</p>
     */
    public $Id;

    /**
     * @var string <p>应用 ID</p>
     */
    public $AppId;

    /**
     * @var string <p>规则名称</p>
     */
    public $Name;

    /**
     * @var string <p>目标字段</p>
     */
    public $TargetField;

    /**
     * @var string <p>匹配方式：exact / prefix / contains / regex</p>
     */
    public $MatchType;

    /**
     * @var string <p>匹配模式</p>
     */
    public $MatchPattern;

    /**
     * @var string <p>替换动作：replace / regex_replace / mask</p>
     */
    public $TransformAction;

    /**
     * @var string <p>替换值</p>
     */
    public $ReplaceValue;

    /**
     * @var integer <p>优先级</p>
     */
    public $Priority;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @var string <p>创建人</p>
     */
    public $CreatedBy;

    /**
     * @var string <p>更新人</p>
     */
    public $UpdatedBy;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @param integer $Id <p>规则 ID</p>
     * @param string $AppId <p>应用 ID</p>
     * @param string $Name <p>规则名称</p>
     * @param string $TargetField <p>目标字段</p>
     * @param string $MatchType <p>匹配方式：exact / prefix / contains / regex</p>
     * @param string $MatchPattern <p>匹配模式</p>
     * @param string $TransformAction <p>替换动作：replace / regex_replace / mask</p>
     * @param string $ReplaceValue <p>替换值</p>
     * @param integer $Priority <p>优先级</p>
     * @param boolean $Enabled <p>是否启用</p>
     * @param string $CreatedBy <p>创建人</p>
     * @param string $UpdatedBy <p>更新人</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $UpdatedAt <p>更新时间</p>
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

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("TargetField",$param) and $param["TargetField"] !== null) {
            $this->TargetField = $param["TargetField"];
        }

        if (array_key_exists("MatchType",$param) and $param["MatchType"] !== null) {
            $this->MatchType = $param["MatchType"];
        }

        if (array_key_exists("MatchPattern",$param) and $param["MatchPattern"] !== null) {
            $this->MatchPattern = $param["MatchPattern"];
        }

        if (array_key_exists("TransformAction",$param) and $param["TransformAction"] !== null) {
            $this->TransformAction = $param["TransformAction"];
        }

        if (array_key_exists("ReplaceValue",$param) and $param["ReplaceValue"] !== null) {
            $this->ReplaceValue = $param["ReplaceValue"];
        }

        if (array_key_exists("Priority",$param) and $param["Priority"] !== null) {
            $this->Priority = $param["Priority"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("CreatedBy",$param) and $param["CreatedBy"] !== null) {
            $this->CreatedBy = $param["CreatedBy"];
        }

        if (array_key_exists("UpdatedBy",$param) and $param["UpdatedBy"] !== null) {
            $this->UpdatedBy = $param["UpdatedBy"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
