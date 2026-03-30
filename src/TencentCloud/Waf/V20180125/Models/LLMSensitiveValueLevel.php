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
 * 涉敏信息结果结构体
 *
 * @method string getLabel() 获取敏感数据标签，如政治、色情
 * @method void setLabel(string $Label) 设置敏感数据标签，如政治、色情
 * @method integer getLevel() 获取敏感数据等级，250,300，400分别代表超严格、严格、标准等级
 * @method void setLevel(integer $Level) 设置敏感数据等级，250,300，400分别代表超严格、严格、标准等级
 */
class LLMSensitiveValueLevel extends AbstractModel
{
    /**
     * @var string 敏感数据标签，如政治、色情
     */
    public $Label;

    /**
     * @var integer 敏感数据等级，250,300，400分别代表超严格、严格、标准等级
     */
    public $Level;

    /**
     * @param string $Label 敏感数据标签，如政治、色情
     * @param integer $Level 敏感数据等级，250,300，400分别代表超严格、严格、标准等级
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
