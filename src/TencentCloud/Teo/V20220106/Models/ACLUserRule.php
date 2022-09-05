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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ACL用户规则
 *
 * @method string getRuleName() 获取规则名。
 * @method void setRuleName(string $RuleName) 设置规则名。
 * @method string getAction() 获取处罚动作。
1. trans 放行
2. drop 拦截
3. monitor 观察
4. ban IP封禁
5. redirect 重定向
6. page 指定页面
7. alg Javascript挑战
 * @method void setAction(string $Action) 设置处罚动作。
1. trans 放行
2. drop 拦截
3. monitor 观察
4. ban IP封禁
5. redirect 重定向
6. page 指定页面
7. alg Javascript挑战
 * @method string getRuleStatus() 获取规则状态。
1. on 规则生效
2. off 规则失效
 * @method void setRuleStatus(string $RuleStatus) 设置规则状态。
1. on 规则生效
2. off 规则失效
 * @method array getConditions() 获取ACL规则。
 * @method void setConditions(array $Conditions) 设置ACL规则。
 * @method integer getRulePriority() 获取规则优先级，0-100。
 * @method void setRulePriority(integer $RulePriority) 设置规则优先级，0-100。
 * @method integer getRuleID() 获取规则id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRuleID(integer $RuleID) 设置规则id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPunishTime() 获取ip封禁的惩罚时间，0-2天
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishTime(integer $PunishTime) 设置ip封禁的惩罚时间，0-2天
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPunishTimeUnit() 获取ip封禁的惩罚时间单位。
1. second 秒
2. 分钟 minutes
3. hour 小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishTimeUnit(string $PunishTimeUnit) 设置ip封禁的惩罚时间单位。
1. second 秒
2. 分钟 minutes
3. hour 小时
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageId() 获取自定义返回页面的实例id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageId(integer $PageId) 设置自定义返回页面的实例id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取自定义返回页面的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置自定义返回页面的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedirectUrl() 获取重定向时候的地址，必须为本用户接入的站点子域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectUrl(string $RedirectUrl) 设置重定向时候的地址，必须为本用户接入的站点子域名。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResponseCode() 获取重定向时候的返回码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseCode(integer $ResponseCode) 设置重定向时候的返回码。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ACLUserRule extends AbstractModel
{
    /**
     * @var string 规则名。
     */
    public $RuleName;

    /**
     * @var string 处罚动作。
1. trans 放行
2. drop 拦截
3. monitor 观察
4. ban IP封禁
5. redirect 重定向
6. page 指定页面
7. alg Javascript挑战
     */
    public $Action;

    /**
     * @var string 规则状态。
1. on 规则生效
2. off 规则失效
     */
    public $RuleStatus;

    /**
     * @var array ACL规则。
     */
    public $Conditions;

    /**
     * @var integer 规则优先级，0-100。
     */
    public $RulePriority;

    /**
     * @var integer 规则id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RuleID;

    /**
     * @var string 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var integer ip封禁的惩罚时间，0-2天
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishTime;

    /**
     * @var string ip封禁的惩罚时间单位。
1. second 秒
2. 分钟 minutes
3. hour 小时
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishTimeUnit;

    /**
     * @var integer 自定义返回页面的实例id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PageId;

    /**
     * @var string 自定义返回页面的名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 重定向时候的地址，必须为本用户接入的站点子域名。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectUrl;

    /**
     * @var integer 重定向时候的返回码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseCode;

    /**
     * @param string $RuleName 规则名。
     * @param string $Action 处罚动作。
1. trans 放行
2. drop 拦截
3. monitor 观察
4. ban IP封禁
5. redirect 重定向
6. page 指定页面
7. alg Javascript挑战
     * @param string $RuleStatus 规则状态。
1. on 规则生效
2. off 规则失效
     * @param array $Conditions ACL规则。
     * @param integer $RulePriority 规则优先级，0-100。
     * @param integer $RuleID 规则id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PunishTime ip封禁的惩罚时间，0-2天
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PunishTimeUnit ip封禁的惩罚时间单位。
1. second 秒
2. 分钟 minutes
3. hour 小时
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageId 自定义返回页面的实例id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 自定义返回页面的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedirectUrl 重定向时候的地址，必须为本用户接入的站点子域名。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ResponseCode 重定向时候的返回码。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RuleStatus",$param) and $param["RuleStatus"] !== null) {
            $this->RuleStatus = $param["RuleStatus"];
        }

        if (array_key_exists("Conditions",$param) and $param["Conditions"] !== null) {
            $this->Conditions = [];
            foreach ($param["Conditions"] as $key => $value){
                $obj = new ACLCondition();
                $obj->deserialize($value);
                array_push($this->Conditions, $obj);
            }
        }

        if (array_key_exists("RulePriority",$param) and $param["RulePriority"] !== null) {
            $this->RulePriority = $param["RulePriority"];
        }

        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("RedirectUrl",$param) and $param["RedirectUrl"] !== null) {
            $this->RedirectUrl = $param["RedirectUrl"];
        }

        if (array_key_exists("ResponseCode",$param) and $param["ResponseCode"] !== null) {
            $this->ResponseCode = $param["ResponseCode"];
        }
    }
}
