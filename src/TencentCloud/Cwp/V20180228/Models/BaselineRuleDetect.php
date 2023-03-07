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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线规则检测
 *
 * @method integer getRuleId() 获取规则Id
 * @method void setRuleId(integer $RuleId) 设置规则Id
 * @method string getRuleName() 获取规则名称
 * @method void setRuleName(string $RuleName) 设置规则名称
 * @method string getRuleDesc() 获取规则描述
 * @method void setRuleDesc(string $RuleDesc) 设置规则描述
 * @method integer getItemCount() 获取关联项数
 * @method void setItemCount(integer $ItemCount) 设置关联项数
 * @method integer getHostCount() 获取关联主机数
 * @method void setHostCount(integer $HostCount) 设置关联主机数
 * @method string getFirstTime() 获取首次检测时间
 * @method void setFirstTime(string $FirstTime) 设置首次检测时间
 * @method string getLastTime() 获取string
 * @method void setLastTime(string $LastTime) 设置string
 * @method integer getDetectStatus() 获取0:未通过 1:忽略 3:通过 5:检测中
 * @method void setDetectStatus(integer $DetectStatus) 设置0:未通过 1:忽略 3:通过 5:检测中
 * @method array getItemIds() 获取ItemID集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemIds(array $ItemIds) 设置ItemID集合
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineRuleDetect extends AbstractModel
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
     * @var string 规则描述
     */
    public $RuleDesc;

    /**
     * @var integer 关联项数
     */
    public $ItemCount;

    /**
     * @var integer 关联主机数
     */
    public $HostCount;

    /**
     * @var string 首次检测时间
     */
    public $FirstTime;

    /**
     * @var string string
     */
    public $LastTime;

    /**
     * @var integer 0:未通过 1:忽略 3:通过 5:检测中
     */
    public $DetectStatus;

    /**
     * @var array ItemID集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemIds;

    /**
     * @param integer $RuleId 规则Id
     * @param string $RuleName 规则名称
     * @param string $RuleDesc 规则描述
     * @param integer $ItemCount 关联项数
     * @param integer $HostCount 关联主机数
     * @param string $FirstTime 首次检测时间
     * @param string $LastTime string
     * @param integer $DetectStatus 0:未通过 1:忽略 3:通过 5:检测中
     * @param array $ItemIds ItemID集合
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
        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleName",$param) and $param["RuleName"] !== null) {
            $this->RuleName = $param["RuleName"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("ItemCount",$param) and $param["ItemCount"] !== null) {
            $this->ItemCount = $param["ItemCount"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("DetectStatus",$param) and $param["DetectStatus"] !== null) {
            $this->DetectStatus = $param["DetectStatus"];
        }

        if (array_key_exists("ItemIds",$param) and $param["ItemIds"] !== null) {
            $this->ItemIds = $param["ItemIds"];
        }
    }
}
