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
namespace TencentCloud\Mrs\V20200910\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 病案首页第二页
 *
 * @method BaseItem getCode() 获取手术编码
 * @method void setCode(BaseItem $Code) 设置手术编码
 * @method BaseItem getName() 获取手术名称
 * @method void setName(BaseItem $Name) 设置手术名称
 * @method BaseItem getStartTime() 获取手术开始时间
 * @method void setStartTime(BaseItem $StartTime) 设置手术开始时间
 * @method BaseItem getEndTime() 获取手术结束时间
 * @method void setEndTime(BaseItem $EndTime) 设置手术结束时间
 * @method BaseItem getLevel() 获取手术等级
 * @method void setLevel(BaseItem $Level) 设置手术等级
 * @method BaseItem getType() 获取手术类型
 * @method void setType(BaseItem $Type) 设置手术类型
 * @method BaseItem getIncisionHealingGrade() 获取醉愈合方式
 * @method void setIncisionHealingGrade(BaseItem $IncisionHealingGrade) 设置醉愈合方式
 * @method BaseItem getAnesthesiaMethod() 获取麻醉方法
 * @method void setAnesthesiaMethod(BaseItem $AnesthesiaMethod) 设置麻醉方法
 */
class Fp2NdItem extends AbstractModel
{
    /**
     * @var BaseItem 手术编码
     */
    public $Code;

    /**
     * @var BaseItem 手术名称
     */
    public $Name;

    /**
     * @var BaseItem 手术开始时间
     */
    public $StartTime;

    /**
     * @var BaseItem 手术结束时间
     */
    public $EndTime;

    /**
     * @var BaseItem 手术等级
     */
    public $Level;

    /**
     * @var BaseItem 手术类型
     */
    public $Type;

    /**
     * @var BaseItem 醉愈合方式
     */
    public $IncisionHealingGrade;

    /**
     * @var BaseItem 麻醉方法
     */
    public $AnesthesiaMethod;

    /**
     * @param BaseItem $Code 手术编码
     * @param BaseItem $Name 手术名称
     * @param BaseItem $StartTime 手术开始时间
     * @param BaseItem $EndTime 手术结束时间
     * @param BaseItem $Level 手术等级
     * @param BaseItem $Type 手术类型
     * @param BaseItem $IncisionHealingGrade 醉愈合方式
     * @param BaseItem $AnesthesiaMethod 麻醉方法
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = new BaseItem();
            $this->Code->deserialize($param["Code"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = new BaseItem();
            $this->Name->deserialize($param["Name"]);
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = new BaseItem();
            $this->StartTime->deserialize($param["StartTime"]);
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = new BaseItem();
            $this->EndTime->deserialize($param["EndTime"]);
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = new BaseItem();
            $this->Level->deserialize($param["Level"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = new BaseItem();
            $this->Type->deserialize($param["Type"]);
        }

        if (array_key_exists("IncisionHealingGrade",$param) and $param["IncisionHealingGrade"] !== null) {
            $this->IncisionHealingGrade = new BaseItem();
            $this->IncisionHealingGrade->deserialize($param["IncisionHealingGrade"]);
        }

        if (array_key_exists("AnesthesiaMethod",$param) and $param["AnesthesiaMethod"] !== null) {
            $this->AnesthesiaMethod = new BaseItem();
            $this->AnesthesiaMethod->deserialize($param["AnesthesiaMethod"]);
        }
    }
}
