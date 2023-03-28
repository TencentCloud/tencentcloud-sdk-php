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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混流布局参数。
 *
 * @method integer getMixLayoutMode() 获取布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。
 * @method void setMixLayoutMode(integer $MixLayoutMode) 设置布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。
 * @method integer getPureAudioHoldPlaceMode() 获取纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。
 * @method void setPureAudioHoldPlaceMode(integer $PureAudioHoldPlaceMode) 设置纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。
 * @method array getMixLayoutList() 获取自定义模板中有效，指定用户视频在混合画面中的位置。
 * @method void setMixLayoutList(array $MixLayoutList) 设置自定义模板中有效，指定用户视频在混合画面中的位置。
 * @method MaxVideoUser getMaxVideoUser() 获取指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。
 * @method void setMaxVideoUser(MaxVideoUser $MaxVideoUser) 设置指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。
 * @method integer getRenderMode() 获取屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底
 * @method void setRenderMode(integer $RenderMode) 设置屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底
 */
class McuLayoutParams extends AbstractModel
{
    /**
     * @var integer 布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。
     */
    public $MixLayoutMode;

    /**
     * @var integer 纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。
     */
    public $PureAudioHoldPlaceMode;

    /**
     * @var array 自定义模板中有效，指定用户视频在混合画面中的位置。
     */
    public $MixLayoutList;

    /**
     * @var MaxVideoUser 指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。
     */
    public $MaxVideoUser;

    /**
     * @var integer 屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底
     */
    public $RenderMode;

    /**
     * @param integer $MixLayoutMode 布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。
     * @param integer $PureAudioHoldPlaceMode 纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。
     * @param array $MixLayoutList 自定义模板中有效，指定用户视频在混合画面中的位置。
     * @param MaxVideoUser $MaxVideoUser 指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。
     * @param integer $RenderMode 屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底
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
        if (array_key_exists("MixLayoutMode",$param) and $param["MixLayoutMode"] !== null) {
            $this->MixLayoutMode = $param["MixLayoutMode"];
        }

        if (array_key_exists("PureAudioHoldPlaceMode",$param) and $param["PureAudioHoldPlaceMode"] !== null) {
            $this->PureAudioHoldPlaceMode = $param["PureAudioHoldPlaceMode"];
        }

        if (array_key_exists("MixLayoutList",$param) and $param["MixLayoutList"] !== null) {
            $this->MixLayoutList = [];
            foreach ($param["MixLayoutList"] as $key => $value){
                $obj = new McuLayout();
                $obj->deserialize($value);
                array_push($this->MixLayoutList, $obj);
            }
        }

        if (array_key_exists("MaxVideoUser",$param) and $param["MaxVideoUser"] !== null) {
            $this->MaxVideoUser = new MaxVideoUser();
            $this->MaxVideoUser->deserialize($param["MaxVideoUser"]);
        }

        if (array_key_exists("RenderMode",$param) and $param["RenderMode"] !== null) {
            $this->RenderMode = $param["RenderMode"];
        }
    }
}
