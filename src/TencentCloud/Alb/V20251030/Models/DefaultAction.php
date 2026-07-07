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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 监听器默认规则动作
 *
 * @method TargetGroupConfig getTargetGroupConfig() 获取转发目标组配置。创建监听器时转发动作中的目标组配置仅支持单个目标组。
 * @method void setTargetGroupConfig(TargetGroupConfig $TargetGroupConfig) 设置转发目标组配置。创建监听器时转发动作中的目标组配置仅支持单个目标组。
 * @method string getType() 获取转发动作类型。创建监听器时，默认转发动作类型仅支持转发至目标组。
 * @method void setType(string $Type) 设置转发动作类型。创建监听器时，默认转发动作类型仅支持转发至目标组。
 */
class DefaultAction extends AbstractModel
{
    /**
     * @var TargetGroupConfig 转发目标组配置。创建监听器时转发动作中的目标组配置仅支持单个目标组。
     */
    public $TargetGroupConfig;

    /**
     * @var string 转发动作类型。创建监听器时，默认转发动作类型仅支持转发至目标组。
     */
    public $Type;

    /**
     * @param TargetGroupConfig $TargetGroupConfig 转发目标组配置。创建监听器时转发动作中的目标组配置仅支持单个目标组。
     * @param string $Type 转发动作类型。创建监听器时，默认转发动作类型仅支持转发至目标组。
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
        if (array_key_exists("TargetGroupConfig",$param) and $param["TargetGroupConfig"] !== null) {
            $this->TargetGroupConfig = new TargetGroupConfig();
            $this->TargetGroupConfig->deserialize($param["TargetGroupConfig"]);
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
