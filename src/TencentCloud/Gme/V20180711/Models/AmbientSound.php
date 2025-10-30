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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 背景音设置，将在通话中添加环境音效，使体验更加逼真。目前支持以下选项：
coffee_shops: 咖啡店氛围，背景中有人聊天。
busy_office: 客服中心
street_traffic: 户外街道
evening_mountain: 户外山林
 *
 * @method string getScene() 获取环境场景选择
 * @method void setScene(string $Scene) 设置环境场景选择
 * @method float getVolume() 获取控制环境音的音量。取值的范围是 [0,2]。值越低，环境音越小；值越高，环境音越响亮。如果未设置，则使用默认值 1。
 * @method void setVolume(float $Volume) 设置控制环境音的音量。取值的范围是 [0,2]。值越低，环境音越小；值越高，环境音越响亮。如果未设置，则使用默认值 1。
 */
class AmbientSound extends AbstractModel
{
    /**
     * @var string 环境场景选择
     */
    public $Scene;

    /**
     * @var float 控制环境音的音量。取值的范围是 [0,2]。值越低，环境音越小；值越高，环境音越响亮。如果未设置，则使用默认值 1。
     */
    public $Volume;

    /**
     * @param string $Scene 环境场景选择
     * @param float $Volume 控制环境音的音量。取值的范围是 [0,2]。值越低，环境音越小；值越高，环境音越响亮。如果未设置，则使用默认值 1。
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
        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Volume",$param) and $param["Volume"] !== null) {
            $this->Volume = $param["Volume"];
        }
    }
}
