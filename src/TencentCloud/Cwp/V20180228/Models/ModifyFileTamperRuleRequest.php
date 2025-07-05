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
 * ModifyFileTamperRule请求参数结构体
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method array getRules() 获取规则内容
 * @method void setRules(array $Rules) 设置规则内容
 * @method integer getIsGlobal() 获取是否全局规则(默认否) 0：否 ，1：是，全局是Uuids 可为空
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(默认否) 0：否 ，1：是，全局是Uuids 可为空
 * @method integer getStatus() 获取启用状态 0: 启用 1: 已关闭
 * @method void setStatus(integer $Status) 设置启用状态 0: 启用 1: 已关闭
 * @method integer getId() 获取规则id  不填或者0表示新增
 * @method void setId(integer $Id) 设置规则id  不填或者0表示新增
 * @method array getUuids() 获取影响的主机uuid集合
 * @method void setUuids(array $Uuids) 设置影响的主机uuid集合
 * @method integer getLevel() 获取风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method void setLevel(integer $Level) 设置风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method string getAddWhiteType() 获取加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
 * @method void setAddWhiteType(string $AddWhiteType) 设置加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
 */
class ModifyFileTamperRuleRequest extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var array 规则内容
     */
    public $Rules;

    /**
     * @var integer 是否全局规则(默认否) 0：否 ，1：是，全局是Uuids 可为空
     */
    public $IsGlobal;

    /**
     * @var integer 启用状态 0: 启用 1: 已关闭
     */
    public $Status;

    /**
     * @var integer 规则id  不填或者0表示新增
     */
    public $Id;

    /**
     * @var array 影响的主机uuid集合
     */
    public $Uuids;

    /**
     * @var integer 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
     */
    public $Level;

    /**
     * @var string 加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
     */
    public $AddWhiteType;

    /**
     * @param string $Name 规则名称
     * @param array $Rules 规则内容
     * @param integer $IsGlobal 是否全局规则(默认否) 0：否 ，1：是，全局是Uuids 可为空
     * @param integer $Status 启用状态 0: 启用 1: 已关闭
     * @param integer $Id 规则id  不填或者0表示新增
     * @param array $Uuids 影响的主机uuid集合
     * @param integer $Level 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
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

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new FileTamperRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("AddWhiteType",$param) and $param["AddWhiteType"] !== null) {
            $this->AddWhiteType = $param["AddWhiteType"];
        }
    }
}
