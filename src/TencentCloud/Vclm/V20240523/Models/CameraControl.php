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
namespace TencentCloud\Vclm\V20240523\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 控制摄像机运动的协议
 *
 * @method string getType() 获取枚举值：“simple”, “down_back”, “forward_up”, “right_turn_forward”, “left_turn_forward”
simple：简单运镜，此类型下可在"config"中六选一进行运镜
down_back：镜头下压并后退 -> 下移拉远，此类型下config参数无需填写
forward_up：镜头前进并上仰 -> 推进上移，此类型下config参数无需填写
right_turn_forward：先右旋转后前进 -> 右旋推进，此类型下config参数无需填写
left_turn_forward：先左旋并前进 -> 左旋推进，此类型下config参数无需填写
 * @method void setType(string $Type) 设置枚举值：“simple”, “down_back”, “forward_up”, “right_turn_forward”, “left_turn_forward”
simple：简单运镜，此类型下可在"config"中六选一进行运镜
down_back：镜头下压并后退 -> 下移拉远，此类型下config参数无需填写
forward_up：镜头前进并上仰 -> 推进上移，此类型下config参数无需填写
right_turn_forward：先右旋转后前进 -> 右旋推进，此类型下config参数无需填写
left_turn_forward：先左旋并前进 -> 左旋推进，此类型下config参数无需填写
 * @method CameraControlConfig getConfig() 获取包含六个字段，用于指定摄像机在不同方向上的运动或变化。
- 当运镜类型指定simple时必填，指定其他类型时不填
- 参数6选1，即只能有一个参数不为0，其余参数为0
 * @method void setConfig(CameraControlConfig $Config) 设置包含六个字段，用于指定摄像机在不同方向上的运动或变化。
- 当运镜类型指定simple时必填，指定其他类型时不填
- 参数6选1，即只能有一个参数不为0，其余参数为0
 */
class CameraControl extends AbstractModel
{
    /**
     * @var string 枚举值：“simple”, “down_back”, “forward_up”, “right_turn_forward”, “left_turn_forward”
simple：简单运镜，此类型下可在"config"中六选一进行运镜
down_back：镜头下压并后退 -> 下移拉远，此类型下config参数无需填写
forward_up：镜头前进并上仰 -> 推进上移，此类型下config参数无需填写
right_turn_forward：先右旋转后前进 -> 右旋推进，此类型下config参数无需填写
left_turn_forward：先左旋并前进 -> 左旋推进，此类型下config参数无需填写
     */
    public $Type;

    /**
     * @var CameraControlConfig 包含六个字段，用于指定摄像机在不同方向上的运动或变化。
- 当运镜类型指定simple时必填，指定其他类型时不填
- 参数6选1，即只能有一个参数不为0，其余参数为0
     */
    public $Config;

    /**
     * @param string $Type 枚举值：“simple”, “down_back”, “forward_up”, “right_turn_forward”, “left_turn_forward”
simple：简单运镜，此类型下可在"config"中六选一进行运镜
down_back：镜头下压并后退 -> 下移拉远，此类型下config参数无需填写
forward_up：镜头前进并上仰 -> 推进上移，此类型下config参数无需填写
right_turn_forward：先右旋转后前进 -> 右旋推进，此类型下config参数无需填写
left_turn_forward：先左旋并前进 -> 左旋推进，此类型下config参数无需填写
     * @param CameraControlConfig $Config 包含六个字段，用于指定摄像机在不同方向上的运动或变化。
- 当运镜类型指定simple时必填，指定其他类型时不填
- 参数6选1，即只能有一个参数不为0，其余参数为0
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new CameraControlConfig();
            $this->Config->deserialize($param["Config"]);
        }
    }
}
