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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 镜像风险详情
 *
 * @method integer getBehavior() 获取行为
 * @method void setBehavior(integer $Behavior) 设置行为
 * @method integer getType() 获取类型
 * @method void setType(integer $Type) 设置类型
 * @method integer getLevel() 获取级别
 * @method void setLevel(integer $Level) 设置级别
 * @method string getDesc() 获取详情
 * @method void setDesc(string $Desc) 设置详情
 * @method string getInstructionContent() 获取解决方案
 * @method void setInstructionContent(string $InstructionContent) 设置解决方案
 */
class ImageRiskInfo extends AbstractModel
{
    /**
     * @var integer 行为
     */
    public $Behavior;

    /**
     * @var integer 类型
     */
    public $Type;

    /**
     * @var integer 级别
     */
    public $Level;

    /**
     * @var string 详情
     */
    public $Desc;

    /**
     * @var string 解决方案
     */
    public $InstructionContent;

    /**
     * @param integer $Behavior 行为
     * @param integer $Type 类型
     * @param integer $Level 级别
     * @param string $Desc 详情
     * @param string $InstructionContent 解决方案
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
        if (array_key_exists("Behavior",$param) and $param["Behavior"] !== null) {
            $this->Behavior = $param["Behavior"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("Desc",$param) and $param["Desc"] !== null) {
            $this->Desc = $param["Desc"];
        }

        if (array_key_exists("InstructionContent",$param) and $param["InstructionContent"] !== null) {
            $this->InstructionContent = $param["InstructionContent"];
        }
    }
}
