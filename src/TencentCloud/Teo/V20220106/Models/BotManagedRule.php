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
 * Bot 规则，下列规则ID可参考接口 DescribeBotManagedRules返回的ID信息
 *
 * @method integer getRuleID() 获取本规则的ID。
 * @method void setRuleID(integer $RuleID) 设置本规则的ID。
 * @method array getManagedIds() 获取老版本的通用规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagedIds(array $ManagedIds) 设置老版本的通用规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAction() 获取触发规则后的处置方式。
1. drop 拦截
2. trans 放行
3. monitor 观察
4. alg Javascript挑战
 * @method void setAction(string $Action) 设置触发规则后的处置方式。
1. drop 拦截
2. trans 放行
3. monitor 观察
4. alg Javascript挑战
 * @method integer getPunishTime() 获取封禁的惩罚时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishTime(integer $PunishTime) 设置封禁的惩罚时间。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPunishTimeUnit() 获取封禁的惩罚时间单位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPunishTimeUnit(string $PunishTimeUnit) 设置封禁的惩罚时间单位。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTransManagedIds() 获取放行的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransManagedIds(array $TransManagedIds) 设置放行的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAlgManagedIds() 获取JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlgManagedIds(array $AlgManagedIds) 设置JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCapManagedIds() 获取数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCapManagedIds(array $CapManagedIds) 设置数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getMonManagedIds() 获取观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMonManagedIds(array $MonManagedIds) 设置观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDropManagedIds() 获取拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDropManagedIds(array $DropManagedIds) 设置拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPageId() 获取自定义返回页面的实例id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPageId(integer $PageId) 设置自定义返回页面的实例id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取自定义返回页面的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置自定义返回页面的名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRedirectUrl() 获取重定向时候的地址，必须为本用户接入的站点子域名，使用URLENCODE。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRedirectUrl(string $RedirectUrl) 设置重定向时候的地址，必须为本用户接入的站点子域名，使用URLENCODE。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getResponseCode() 获取重定向时候的返回码。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResponseCode(integer $ResponseCode) 设置重定向时候的返回码。
注意：此字段可能返回 null，表示取不到有效值。
 */
class BotManagedRule extends AbstractModel
{
    /**
     * @var integer 本规则的ID。
     */
    public $RuleID;

    /**
     * @var array 老版本的通用规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagedIds;

    /**
     * @var string 触发规则后的处置方式。
1. drop 拦截
2. trans 放行
3. monitor 观察
4. alg Javascript挑战
     */
    public $Action;

    /**
     * @var integer 封禁的惩罚时间。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishTime;

    /**
     * @var string 封禁的惩罚时间单位。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PunishTimeUnit;

    /**
     * @var array 放行的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransManagedIds;

    /**
     * @var array JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlgManagedIds;

    /**
     * @var array 数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CapManagedIds;

    /**
     * @var array 观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MonManagedIds;

    /**
     * @var array 拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DropManagedIds;

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
     * @var string 重定向时候的地址，必须为本用户接入的站点子域名，使用URLENCODE。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RedirectUrl;

    /**
     * @var integer 重定向时候的返回码。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResponseCode;

    /**
     * @param integer $RuleID 本规则的ID。
     * @param array $ManagedIds 老版本的通用规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Action 触发规则后的处置方式。
1. drop 拦截
2. trans 放行
3. monitor 观察
4. alg Javascript挑战
     * @param integer $PunishTime 封禁的惩罚时间。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PunishTimeUnit 封禁的惩罚时间单位。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TransManagedIds 放行的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AlgManagedIds JS挑战的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CapManagedIds 数字验证码的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $MonManagedIds 观察的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DropManagedIds 拦截的规则ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $PageId 自定义返回页面的实例id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 自定义返回页面的名称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RedirectUrl 重定向时候的地址，必须为本用户接入的站点子域名，使用URLENCODE。
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
        if (array_key_exists("RuleID",$param) and $param["RuleID"] !== null) {
            $this->RuleID = $param["RuleID"];
        }

        if (array_key_exists("ManagedIds",$param) and $param["ManagedIds"] !== null) {
            $this->ManagedIds = $param["ManagedIds"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("PunishTime",$param) and $param["PunishTime"] !== null) {
            $this->PunishTime = $param["PunishTime"];
        }

        if (array_key_exists("PunishTimeUnit",$param) and $param["PunishTimeUnit"] !== null) {
            $this->PunishTimeUnit = $param["PunishTimeUnit"];
        }

        if (array_key_exists("TransManagedIds",$param) and $param["TransManagedIds"] !== null) {
            $this->TransManagedIds = $param["TransManagedIds"];
        }

        if (array_key_exists("AlgManagedIds",$param) and $param["AlgManagedIds"] !== null) {
            $this->AlgManagedIds = $param["AlgManagedIds"];
        }

        if (array_key_exists("CapManagedIds",$param) and $param["CapManagedIds"] !== null) {
            $this->CapManagedIds = $param["CapManagedIds"];
        }

        if (array_key_exists("MonManagedIds",$param) and $param["MonManagedIds"] !== null) {
            $this->MonManagedIds = $param["MonManagedIds"];
        }

        if (array_key_exists("DropManagedIds",$param) and $param["DropManagedIds"] !== null) {
            $this->DropManagedIds = $param["DropManagedIds"];
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
