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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渲染移动模式参数，不渲染移动模式时，请勿设置此参数。
 *
 * @method integer getMobileDeviceType() 获取移动设备类型，
0: 手机
1: 平板
 * @method void setMobileDeviceType(integer $MobileDeviceType) 设置移动设备类型，
0: 手机
1: 平板
 * @method integer getScreenOrientation() 获取屏幕方向，
0: 竖屏，
1: 横屏
 * @method void setScreenOrientation(integer $ScreenOrientation) 设置屏幕方向，
0: 竖屏，
1: 横屏
 */
class EmulateMobileParams extends AbstractModel
{
    /**
     * @var integer 移动设备类型，
0: 手机
1: 平板
     */
    public $MobileDeviceType;

    /**
     * @var integer 屏幕方向，
0: 竖屏，
1: 横屏
     */
    public $ScreenOrientation;

    /**
     * @param integer $MobileDeviceType 移动设备类型，
0: 手机
1: 平板
     * @param integer $ScreenOrientation 屏幕方向，
0: 竖屏，
1: 横屏
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
        if (array_key_exists("MobileDeviceType",$param) and $param["MobileDeviceType"] !== null) {
            $this->MobileDeviceType = $param["MobileDeviceType"];
        }

        if (array_key_exists("ScreenOrientation",$param) and $param["ScreenOrientation"] !== null) {
            $this->ScreenOrientation = $param["ScreenOrientation"];
        }
    }
}
