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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * PluginStatistics
 *
 * @method integer getCallCount() 获取插件调用量
 * @method void setCallCount(integer $CallCount) 设置插件调用量
 * @method integer getToolCount() 获取工具数量
 * @method void setToolCount(integer $ToolCount) 设置工具数量
 */
class PluginStatistics extends AbstractModel
{
    /**
     * @var integer 插件调用量
     */
    public $CallCount;

    /**
     * @var integer 工具数量
     */
    public $ToolCount;

    /**
     * @param integer $CallCount 插件调用量
     * @param integer $ToolCount 工具数量
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
        if (array_key_exists("CallCount",$param) and $param["CallCount"] !== null) {
            $this->CallCount = $param["CallCount"];
        }

        if (array_key_exists("ToolCount",$param) and $param["ToolCount"] !== null) {
            $this->ToolCount = $param["ToolCount"];
        }
    }
}
