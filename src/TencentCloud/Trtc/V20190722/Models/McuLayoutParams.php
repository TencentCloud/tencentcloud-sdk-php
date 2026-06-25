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
 * 混流布局参数。
 *
 * @method integer getMixLayoutMode() 获取<p>布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。最多支持混入16路音视频流，如果用户只上行音频，也会被算作一路；自定义布局中，如果子画面只设置占位图，也被算作一路。</p>
 * @method void setMixLayoutMode(integer $MixLayoutMode) 设置<p>布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。最多支持混入16路音视频流，如果用户只上行音频，也会被算作一路；自定义布局中，如果子画面只设置占位图，也被算作一路。</p>
 * @method integer getPureAudioHoldPlaceMode() 获取<p>纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。</p>
 * @method void setPureAudioHoldPlaceMode(integer $PureAudioHoldPlaceMode) 设置<p>纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。</p>
 * @method array getMixLayoutList() 获取<p>自定义模板中有效，指定用户视频在混合画面中的位置，最多支持设置16个输入流。</p>
 * @method void setMixLayoutList(array $MixLayoutList) 设置<p>自定义模板中有效，指定用户视频在混合画面中的位置，最多支持设置16个输入流。</p>
 * @method MaxVideoUser getMaxVideoUser() 获取<p>指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。</p>
 * @method void setMaxVideoUser(MaxVideoUser $MaxVideoUser) 设置<p>指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。</p>
 * @method integer getRenderMode() 获取<p>屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底</p>
 * @method void setRenderMode(integer $RenderMode) 设置<p>屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底</p>
 * @method integer getEnableStreamSEI() 获取<p>是否保留上行sei，1：保留 0：不保留，只对动态布局生效，自定义布局不生效</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
 * @method void setEnableStreamSEI(integer $EnableStreamSEI) 设置<p>是否保留上行sei，1：保留 0：不保留，只对动态布局生效，自定义布局不生效</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
 */
class McuLayoutParams extends AbstractModel
{
    /**
     * @var integer <p>布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。最多支持混入16路音视频流，如果用户只上行音频，也会被算作一路；自定义布局中，如果子画面只设置占位图，也被算作一路。</p>
     */
    public $MixLayoutMode;

    /**
     * @var integer <p>纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。</p>
     */
    public $PureAudioHoldPlaceMode;

    /**
     * @var array <p>自定义模板中有效，指定用户视频在混合画面中的位置，最多支持设置16个输入流。</p>
     */
    public $MixLayoutList;

    /**
     * @var MaxVideoUser <p>指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。</p>
     */
    public $MaxVideoUser;

    /**
     * @var integer <p>屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底</p>
     */
    public $RenderMode;

    /**
     * @var integer <p>是否保留上行sei，1：保留 0：不保留，只对动态布局生效，自定义布局不生效</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
     */
    public $EnableStreamSEI;

    /**
     * @param integer $MixLayoutMode <p>布局模式：动态布局（1：悬浮布局（默认），2：屏幕分享布局，3：九宫格布局），静态布局（4：自定义布局）。最多支持混入16路音视频流，如果用户只上行音频，也会被算作一路；自定义布局中，如果子画面只设置占位图，也被算作一路。</p>
     * @param integer $PureAudioHoldPlaceMode <p>纯音频上行是否占布局位置，只在动态布局中有效。0表示纯音频不占布局位置，1表示纯音频占布局位置，不填默认为0。</p>
     * @param array $MixLayoutList <p>自定义模板中有效，指定用户视频在混合画面中的位置，最多支持设置16个输入流。</p>
     * @param MaxVideoUser $MaxVideoUser <p>指定动态布局中悬浮布局和屏幕分享布局的大画面信息，只在悬浮布局和屏幕分享布局有效。</p>
     * @param integer $RenderMode <p>屏幕分享模板、悬浮模板、九宫格模版有效，画面在输出时的显示模式：0为裁剪，1为缩放，2为缩放并显示黑底</p>
     * @param integer $EnableStreamSEI <p>是否保留上行sei，1：保留 0：不保留，只对动态布局生效，自定义布局不生效</p><p>取值范围：[0, 1]</p><p>默认值：1</p>
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

        if (array_key_exists("EnableStreamSEI",$param) and $param["EnableStreamSEI"] !== null) {
            $this->EnableStreamSEI = $param["EnableStreamSEI"];
        }
    }
}
