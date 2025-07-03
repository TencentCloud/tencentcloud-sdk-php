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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则列表详情
 *
 * @method integer getId() 获取规则id
 * @method void setId(integer $Id) 设置规则id
 * @method string getType() 获取规则类型
 * @method void setType(string $Type) 设置规则类型
 * @method string getLevel() 获取规则等级
 * @method void setLevel(string $Level) 设置规则等级
 * @method string getDescription() 获取规则描述
 * @method void setDescription(string $Description) 设置规则描述
 * @method string getCVE() 获取规则防护的CVE编号
 * @method void setCVE(string $CVE) 设置规则防护的CVE编号
 * @method integer getStatus() 获取规则的状态
 * @method void setStatus(integer $Status) 设置规则的状态
 * @method string getModifyTime() 获取规则修改的时间
 * @method void setModifyTime(string $ModifyTime) 设置规则修改的时间
 * @method string getAddTime() 获取门神规则新增/更新时间
 * @method void setAddTime(string $AddTime) 设置门神规则新增/更新时间
 */
class Rule extends AbstractModel
{
    /**
     * @var integer 规则id
     */
    public $Id;

    /**
     * @var string 规则类型
     */
    public $Type;

    /**
     * @var string 规则等级
     */
    public $Level;

    /**
     * @var string 规则描述
     */
    public $Description;

    /**
     * @var string 规则防护的CVE编号
     */
    public $CVE;

    /**
     * @var integer 规则的状态
     */
    public $Status;

    /**
     * @var string 规则修改的时间
     */
    public $ModifyTime;

    /**
     * @var string 门神规则新增/更新时间
     */
    public $AddTime;

    /**
     * @param integer $Id 规则id
     * @param string $Type 规则类型
     * @param string $Level 规则等级
     * @param string $Description 规则描述
     * @param string $CVE 规则防护的CVE编号
     * @param integer $Status 规则的状态
     * @param string $ModifyTime 规则修改的时间
     * @param string $AddTime 门神规则新增/更新时间
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CVE",$param) and $param["CVE"] !== null) {
            $this->CVE = $param["CVE"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }
    }
}
