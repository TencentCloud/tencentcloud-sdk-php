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
 * 体检报告-胸围信息
 *
 * @method string getName() 获取类型
 * @method void setName(string $Name) 设置类型
 * @method PhysicalBaseItem getItem() 获取项目原文
 * @method void setItem(PhysicalBaseItem $Item) 设置项目原文
 * @method PhysicalBaseItem getResult() 获取数值
 * @method void setResult(PhysicalBaseItem $Result) 设置数值
 * @method PhysicalBaseItem getUnit() 获取单位
 * @method void setUnit(PhysicalBaseItem $Unit) 设置单位
 * @method PhysicalBaseItem getState() 获取呼吸状态
 * @method void setState(PhysicalBaseItem $State) 设置呼吸状态
 */
class ChestCircumferenceItem extends AbstractModel
{
    /**
     * @var string 类型
     */
    public $Name;

    /**
     * @var PhysicalBaseItem 项目原文
     */
    public $Item;

    /**
     * @var PhysicalBaseItem 数值
     */
    public $Result;

    /**
     * @var PhysicalBaseItem 单位
     */
    public $Unit;

    /**
     * @var PhysicalBaseItem 呼吸状态
     */
    public $State;

    /**
     * @param string $Name 类型
     * @param PhysicalBaseItem $Item 项目原文
     * @param PhysicalBaseItem $Result 数值
     * @param PhysicalBaseItem $Unit 单位
     * @param PhysicalBaseItem $State 呼吸状态
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

        if (array_key_exists("Item",$param) and $param["Item"] !== null) {
            $this->Item = new PhysicalBaseItem();
            $this->Item->deserialize($param["Item"]);
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = new PhysicalBaseItem();
            $this->Result->deserialize($param["Result"]);
        }

        if (array_key_exists("Unit",$param) and $param["Unit"] !== null) {
            $this->Unit = new PhysicalBaseItem();
            $this->Unit->deserialize($param["Unit"]);
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = new PhysicalBaseItem();
            $this->State->deserialize($param["State"]);
        }
    }
}
