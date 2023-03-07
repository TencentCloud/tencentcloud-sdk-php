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
 * 基线规则
 *
 * @method string getRuleName() 获取规则名称,长度不超过128英文字符
 * @method void setRuleName(string $RuleName) 设置规则名称,长度不超过128英文字符
 * @method integer getRuleId() 获取规则Id
 * @method void setRuleId(integer $RuleId) 设置规则Id
 * @method integer getRuleType() 获取规则类型 [0:系统|1:自定义]
 * @method void setRuleType(integer $RuleType) 设置规则类型 [0:系统|1:自定义]
 * @method integer getCategoryId() 获取规则分类
 * @method void setCategoryId(integer $CategoryId) 设置规则分类
 * @method string getRuleDesc() 获取规则描述
 * @method void setRuleDesc(string $RuleDesc) 设置规则描述
 * @method integer getHostCount() 获取主机数
 * @method void setHostCount(integer $HostCount) 设置主机数
 * @method array getItems() 获取适配项ID列表
 * @method void setItems(array $Items) 设置适配项ID列表
 * @method integer getAssetType() 获取[0:所有专业版旗舰版|1:hostID|2:ip]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAssetType(integer $AssetType) 设置[0:所有专业版旗舰版|1:hostID|2:ip]
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHostIds() 获取主机Id集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIds(array $HostIds) 设置主机Id集合
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHostIps() 获取主机IP
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostIps(array $HostIps) 设置主机IP
注意：此字段可能返回 null，表示取不到有效值。
 */
class BaselineRule extends AbstractModel
{
    /**
     * @var string 规则名称,长度不超过128英文字符
     */
    public $RuleName;

    /**
     * @var integer 规则Id
     */
    public $RuleId;

    /**
     * @var integer 规则类型 [0:系统|1:自定义]
     */
    public $RuleType;

    /**
     * @var integer 规则分类
     */
    public $CategoryId;

    /**
     * @var string 规则描述
     */
    public $RuleDesc;

    /**
     * @var integer 主机数
     */
    public $HostCount;

    /**
     * @var array 适配项ID列表
     */
    public $Items;

    /**
     * @var integer [0:所有专业版旗舰版|1:hostID|2:ip]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AssetType;

    /**
     * @var array 主机Id集合
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIds;

    /**
     * @var array 主机IP
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostIps;

    /**
     * @param string $RuleName 规则名称,长度不超过128英文字符
     * @param integer $RuleId 规则Id
     * @param integer $RuleType 规则类型 [0:系统|1:自定义]
     * @param integer $CategoryId 规则分类
     * @param string $RuleDesc 规则描述
     * @param integer $HostCount 主机数
     * @param array $Items 适配项ID列表
     * @param integer $AssetType [0:所有专业版旗舰版|1:hostID|2:ip]
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HostIds 主机Id集合
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HostIps 主机IP
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

        if (array_key_exists("RuleId",$param) and $param["RuleId"] !== null) {
            $this->RuleId = $param["RuleId"];
        }

        if (array_key_exists("RuleType",$param) and $param["RuleType"] !== null) {
            $this->RuleType = $param["RuleType"];
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("RuleDesc",$param) and $param["RuleDesc"] !== null) {
            $this->RuleDesc = $param["RuleDesc"];
        }

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new Item();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("HostIds",$param) and $param["HostIds"] !== null) {
            $this->HostIds = $param["HostIds"];
        }

        if (array_key_exists("HostIps",$param) and $param["HostIps"] !== null) {
            $this->HostIps = $param["HostIps"];
        }
    }
}
