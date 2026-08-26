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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分身提示词配置
 *
 * @method string getRolePosition() 获取<p>角色定义</p>
 * @method void setRolePosition(string $RolePosition) 设置<p>角色定义</p>
 * @method string getCoreDuty() 获取<p>核心职责</p>
 * @method void setCoreDuty(string $CoreDuty) 设置<p>核心职责</p>
 * @method string getCoreTruths() 获取<p>核心原则</p>
 * @method void setCoreTruths(string $CoreTruths) 设置<p>核心原则</p>
 * @method string getVibe() 获取<p>风格约束</p>
 * @method void setVibe(string $Vibe) 设置<p>风格约束</p>
 * @method string getBoundaries() 获取<p>注意事项</p>
 * @method void setBoundaries(string $Boundaries) 设置<p>注意事项</p>
 */
class InstructionConfig extends AbstractModel
{
    /**
     * @var string <p>角色定义</p>
     */
    public $RolePosition;

    /**
     * @var string <p>核心职责</p>
     */
    public $CoreDuty;

    /**
     * @var string <p>核心原则</p>
     */
    public $CoreTruths;

    /**
     * @var string <p>风格约束</p>
     */
    public $Vibe;

    /**
     * @var string <p>注意事项</p>
     */
    public $Boundaries;

    /**
     * @param string $RolePosition <p>角色定义</p>
     * @param string $CoreDuty <p>核心职责</p>
     * @param string $CoreTruths <p>核心原则</p>
     * @param string $Vibe <p>风格约束</p>
     * @param string $Boundaries <p>注意事项</p>
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
        if (array_key_exists("RolePosition",$param) and $param["RolePosition"] !== null) {
            $this->RolePosition = $param["RolePosition"];
        }

        if (array_key_exists("CoreDuty",$param) and $param["CoreDuty"] !== null) {
            $this->CoreDuty = $param["CoreDuty"];
        }

        if (array_key_exists("CoreTruths",$param) and $param["CoreTruths"] !== null) {
            $this->CoreTruths = $param["CoreTruths"];
        }

        if (array_key_exists("Vibe",$param) and $param["Vibe"] !== null) {
            $this->Vibe = $param["Vibe"];
        }

        if (array_key_exists("Boundaries",$param) and $param["Boundaries"] !== null) {
            $this->Boundaries = $param["Boundaries"];
        }
    }
}
