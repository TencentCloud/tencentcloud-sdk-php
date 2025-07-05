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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 托管规则组信息
 *
 * @method string getGroupDetail() 获取托管规则组描述，仅出参。
 * @method void setGroupDetail(string $GroupDetail) 设置托管规则组描述，仅出参。
 * @method string getGroupName() 获取托管规则组名称，仅出参。
 * @method void setGroupName(string $GroupName) 设置托管规则组名称，仅出参。
 * @method array getRuleDetails() 获取当前托管规则组下的所有子规则信息，仅出参。
 * @method void setRuleDetails(array $RuleDetails) 设置当前托管规则组下的所有子规则信息，仅出参。
 */
class ManagedRuleGroupMeta extends AbstractModel
{
    /**
     * @var string 托管规则组描述，仅出参。
     */
    public $GroupDetail;

    /**
     * @var string 托管规则组名称，仅出参。
     */
    public $GroupName;

    /**
     * @var array 当前托管规则组下的所有子规则信息，仅出参。
     */
    public $RuleDetails;

    /**
     * @param string $GroupDetail 托管规则组描述，仅出参。
     * @param string $GroupName 托管规则组名称，仅出参。
     * @param array $RuleDetails 当前托管规则组下的所有子规则信息，仅出参。
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
        if (array_key_exists("GroupDetail",$param) and $param["GroupDetail"] !== null) {
            $this->GroupDetail = $param["GroupDetail"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("RuleDetails",$param) and $param["RuleDetails"] !== null) {
            $this->RuleDetails = [];
            foreach ($param["RuleDetails"] as $key => $value){
                $obj = new ManagedRuleDetail();
                $obj->deserialize($value);
                array_push($this->RuleDetails, $obj);
            }
        }
    }
}
