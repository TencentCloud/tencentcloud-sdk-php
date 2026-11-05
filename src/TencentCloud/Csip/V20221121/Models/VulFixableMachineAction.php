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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 不可修复原因关联动作
 *
 * @method string getActionType() 获取动作类型
枚举值：
UPGRADE_PROTECTION：升级防护
REINSTALL_CLIENT：重新安装客户端
 * @method void setActionType(string $ActionType) 设置动作类型
枚举值：
UPGRADE_PROTECTION：升级防护
REINSTALL_CLIENT：重新安装客户端
 * @method string getActionText() 获取动作按钮文案
 * @method void setActionText(string $ActionText) 设置动作按钮文案
 */
class VulFixableMachineAction extends AbstractModel
{
    /**
     * @var string 动作类型
枚举值：
UPGRADE_PROTECTION：升级防护
REINSTALL_CLIENT：重新安装客户端
     */
    public $ActionType;

    /**
     * @var string 动作按钮文案
     */
    public $ActionText;

    /**
     * @param string $ActionType 动作类型
枚举值：
UPGRADE_PROTECTION：升级防护
REINSTALL_CLIENT：重新安装客户端
     * @param string $ActionText 动作按钮文案
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
        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ActionText",$param) and $param["ActionText"] !== null) {
            $this->ActionText = $param["ActionText"];
        }
    }
}
