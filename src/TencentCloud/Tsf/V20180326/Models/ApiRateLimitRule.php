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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 微服务网关API限流规则
 *
 * @method string getRuleId() 获取<p>rule Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleId(string $RuleId) 设置<p>rule Id</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getApiId() 获取<p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setApiId(string $ApiId) 设置<p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleName() 获取<p>限流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleName(string $RuleName) 设置<p>限流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxQps() 获取<p>最大限流qps</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxQps(integer $MaxQps) 设置<p>最大限流qps</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUsableStatus() 获取<p>生效/禁用, enabled/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsableStatus(string $UsableStatus) 设置<p>生效/禁用, enabled/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRuleContent() 获取<p>规则内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleContent(string $RuleContent) 设置<p>规则内容</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTsfRuleId() 获取<p>Tsf Rule ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTsfRuleId(string $TsfRuleId) 设置<p>Tsf Rule ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedTime() 获取<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedTime(string $UpdatedTime) 设置<p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimit() 获取<p>分页参数limit</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimit(integer $Limit) 设置<p>分页参数limit</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffset() 获取<p>分页参数offset</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffset(integer $Offset) 设置<p>分页参数offset</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAppId() 获取<p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppId(string $AppId) 设置<p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getUsePathAndMethodFormat() 获取<p>旧格式 method 与 path 分开，新格式 path-Method,如 /checkToken-GET，默认为新格式</p>
 * @method void setUsePathAndMethodFormat(boolean $UsePathAndMethodFormat) 设置<p>旧格式 method 与 path 分开，新格式 path-Method,如 /checkToken-GET，默认为新格式</p>
 */
class ApiRateLimitRule extends AbstractModel
{
    /**
     * @var string <p>rule Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleId;

    /**
     * @var string <p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ApiId;

    /**
     * @var string <p>限流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleName;

    /**
     * @var integer <p>最大限流qps</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxQps;

    /**
     * @var string <p>生效/禁用, enabled/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UsableStatus;

    /**
     * @var string <p>规则内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleContent;

    /**
     * @var string <p>Tsf Rule ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TsfRuleId;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var string <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedTime;

    /**
     * @var integer <p>分页参数limit</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limit;

    /**
     * @var integer <p>分页参数offset</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Offset;

    /**
     * @var string <p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppId;

    /**
     * @var boolean <p>旧格式 method 与 path 分开，新格式 path-Method,如 /checkToken-GET，默认为新格式</p>
     */
    public $UsePathAndMethodFormat;

    /**
     * @param string $RuleId <p>rule Id</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ApiId <p>API ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleName <p>限流名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxQps <p>最大限流qps</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UsableStatus <p>生效/禁用, enabled/disabled</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RuleContent <p>规则内容</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TsfRuleId <p>Tsf Rule ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedTime <p>更新时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Limit <p>分页参数limit</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Offset <p>分页参数offset</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AppId <p>AppId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $UsePathAndMethodFormat <p>旧格式 method 与 path 分开，新格式 path-Method,如 /checkToken-GET，默认为新格式</p>
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

        if (array_key_exists("ApiId",$param) and $param["ApiId"] !== null) {
            $this->ApiId = $param["ApiId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("MaxQps",$param) and $param["MaxQps"] !== null) {
            $this->MaxQps = $param["MaxQps"];
        }

        if (array_key_exists("UsableStatus",$param) and $param["UsableStatus"] !== null) {
            $this->UsableStatus = $param["UsableStatus"];
        }

        if (array_key_exists("RuleContent",$param) and $param["RuleContent"] !== null) {
            $this->RuleContent = $param["RuleContent"];
        }

        if (array_key_exists("TsfRuleId",$param) and $param["TsfRuleId"] !== null) {
            $this->TsfRuleId = $param["TsfRuleId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("UpdatedTime",$param) and $param["UpdatedTime"] !== null) {
            $this->UpdatedTime = $param["UpdatedTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("UsePathAndMethodFormat",$param) and $param["UsePathAndMethodFormat"] !== null) {
            $this->UsePathAndMethodFormat = $param["UsePathAndMethodFormat"];
        }
    }
}
