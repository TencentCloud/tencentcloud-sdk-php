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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * api安全自定义场景规则
 *
 * @method string getRuleName() 获取场景名称
 * @method void setRuleName(string $RuleName) 设置场景名称
 * @method integer getStatus() 获取开关状态，1表示开，0表示关
 * @method void setStatus(integer $Status) 设置开关状态，1表示开，0表示关
 * @method integer getUpdateTime() 获取更新时间，10位时间戳
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间，10位时间戳
 * @method array getRuleList() 获取规则列表
 * @method void setRuleList(array $RuleList) 设置规则列表
 * @method string getSource() 获取规则来源，系统内置:OS
客户自定义：custom
 * @method void setSource(string $Source) 设置规则来源，系统内置:OS
客户自定义：custom
 */
class ApiSecSceneRule extends AbstractModel
{
    /**
     * @var string 场景名称
     */
    public $RuleName;

    /**
     * @var integer 开关状态，1表示开，0表示关
     */
    public $Status;

    /**
     * @var integer 更新时间，10位时间戳
     */
    public $UpdateTime;

    /**
     * @var array 规则列表
     */
    public $RuleList;

    /**
     * @var string 规则来源，系统内置:OS
客户自定义：custom
     */
    public $Source;

    /**
     * @param string $RuleName 场景名称
     * @param integer $Status 开关状态，1表示开，0表示关
     * @param integer $UpdateTime 更新时间，10位时间戳
     * @param array $RuleList 规则列表
     * @param string $Source 规则来源，系统内置:OS
客户自定义：custom
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

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RuleList",$param) and $param["RuleList"] !== null) {
            $this->RuleList = [];
            foreach ($param["RuleList"] as $key => $value){
                $obj = new ApiSecSceneRuleEntry();
                $obj->deserialize($value);
                array_push($this->RuleList, $obj);
            }
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }
    }
}
