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
 * 核心文件监控规则详情
 *
 * @method string getName() 获取规则名称
 * @method void setName(string $Name) 设置规则名称
 * @method string getModifyTime() 获取更新时间
 * @method void setModifyTime(string $ModifyTime) 设置更新时间
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method integer getStatus() 获取状态 0: 启用 1: 已关闭
 * @method void setStatus(integer $Status) 设置状态 0: 启用 1: 已关闭
 * @method array getRule() 获取规则
 * @method void setRule(array $Rule) 设置规则
 * @method array getUuids() 获取生效主机uuid,空表示全部主机，通过参数可控制返回的条数
 * @method void setUuids(array $Uuids) 设置生效主机uuid,空表示全部主机，通过参数可控制返回的条数
 * @method integer getId() 获取规则id
 * @method void setId(integer $Id) 设置规则id
 * @method integer getIsGlobal() 获取是否全局规则(默认否) 0：否 ，1：是
 * @method void setIsGlobal(integer $IsGlobal) 设置是否全局规则(默认否) 0：否 ，1：是
 * @method integer getLevel() 获取风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method void setLevel(integer $Level) 设置风险等级 0：无， 1: 高危， 2:中危， 3: 低危
 * @method integer getUuidTotalCount() 获取生效主机的总数
 * @method void setUuidTotalCount(integer $UuidTotalCount) 设置生效主机的总数
 * @method string getAddWhiteType() 获取加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
 * @method void setAddWhiteType(string $AddWhiteType) 设置加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
 */
class FileTamperRuleDetail extends AbstractModel
{
    /**
     * @var string 规则名称
     */
    public $Name;

    /**
     * @var string 更新时间
     */
    public $ModifyTime;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 状态 0: 启用 1: 已关闭
     */
    public $Status;

    /**
     * @var array 规则
     */
    public $Rule;

    /**
     * @var array 生效主机uuid,空表示全部主机，通过参数可控制返回的条数
     */
    public $Uuids;

    /**
     * @var integer 规则id
     */
    public $Id;

    /**
     * @var integer 是否全局规则(默认否) 0：否 ，1：是
     */
    public $IsGlobal;

    /**
     * @var integer 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
     */
    public $Level;

    /**
     * @var integer 生效主机的总数
     */
    public $UuidTotalCount;

    /**
     * @var string 加白处理类型
<li>cur 仅对当前加白</li>
<li>all 所有符合条件加白</li>
     */
    public $AddWhiteType;

    /**
     * @param string $Name 规则名称
     * @param string $ModifyTime 更新时间
     * @param string $CreateTime 创建时间
     * @param integer $Status 状态 0: 启用 1: 已关闭
     * @param array $Rule 规则
     * @param array $Uuids 生效主机uuid,空表示全部主机，通过参数可控制返回的条数
     * @param integer $Id 规则id
     * @param integer $IsGlobal 是否全局规则(默认否) 0：否 ，1：是
     * @param integer $Level 风险等级 0：无， 1: 高危， 2:中危， 3: 低危
     * @param integer $UuidTotalCount 生效主机的总数
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

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Rule",$param) and $param["Rule"] !== null) {
            $this->Rule = [];
            foreach ($param["Rule"] as $key => $value){
                $obj = new FileTamperRule();
                $obj->deserialize($value);
                array_push($this->Rule, $obj);
            }
        }

        if (array_key_exists("Uuids",$param) and $param["Uuids"] !== null) {
            $this->Uuids = $param["Uuids"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("IsGlobal",$param) and $param["IsGlobal"] !== null) {
            $this->IsGlobal = $param["IsGlobal"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("UuidTotalCount",$param) and $param["UuidTotalCount"] !== null) {
            $this->UuidTotalCount = $param["UuidTotalCount"];
        }

        if (array_key_exists("AddWhiteType",$param) and $param["AddWhiteType"] !== null) {
            $this->AddWhiteType = $param["AddWhiteType"];
        }
    }
}
