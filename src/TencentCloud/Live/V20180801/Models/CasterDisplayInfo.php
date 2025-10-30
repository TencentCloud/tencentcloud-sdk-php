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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导播台展示信息，包括使用的布局、水印、字幕、转场、音频等信息
 *
 * @method integer getLayoutIndex() 获取布局Index。
如果使用自定义布局，为自定义布局下标。
如果使用单输入布局，如使用输入1，则LayoutIndexType=1， 且LayoutIndex=1，以此类推。
 * @method void setLayoutIndex(integer $LayoutIndex) 设置布局Index。
如果使用自定义布局，为自定义布局下标。
如果使用单输入布局，如使用输入1，则LayoutIndexType=1， 且LayoutIndex=1，以此类推。
 * @method array getMarkPicIndexList() 获取使用的水印Index列表。
注：当作为入参使用时，列表中的水印Index需要已经存在。
 * @method void setMarkPicIndexList(array $MarkPicIndexList) 设置使用的水印Index列表。
注：当作为入参使用时，列表中的水印Index需要已经存在。
 * @method array getMarkWordIndexList() 获取使用的文字水印Index列表。
注：作为入参使用时，列表中的Index需要已经存在。
 * @method void setMarkWordIndexList(array $MarkWordIndexList) 设置使用的文字水印Index列表。
注：作为入参使用时，列表中的Index需要已经存在。
 * @method string getTransitionType() 获取使用的转场类型。
注：支持的转场类型可通过DescribeCasterTransitionTypes接口获取。
 * @method void setTransitionType(string $TransitionType) 设置使用的转场类型。
注：支持的转场类型可通过DescribeCasterTransitionTypes接口获取。
 * @method array getAudioIndexList() 获取使用的音频输入Index列表。
注：当该字段非空时，表示使用布局中对应的输入源的视频，AudioIndexList中对应的输入源的音频。且这些输入源需已存在。
 * @method void setAudioIndexList(array $AudioIndexList) 设置使用的音频输入Index列表。
注：当该字段非空时，表示使用布局中对应的输入源的视频，AudioIndexList中对应的输入源的音频。且这些输入源需已存在。
 * @method integer getInputStartType() 获取作为入参时，表示使用点播输入源，单画面输入时，点播文件是否从头开始播放。
默认为0。
有效值，0,1。
0代表不从头播放
1代表从头播放
 * @method void setInputStartType(integer $InputStartType) 设置作为入参时，表示使用点播输入源，单画面输入时，点播文件是否从头开始播放。
默认为0。
有效值，0,1。
0代表不从头播放
1代表从头播放
 * @method integer getLayoutIndexType() 获取LayoutIndex类型，
默认值:0
可选值[0,1]
0:默认类型，代表普通布局
1:单输入类型，代表单输入布局
 * @method void setLayoutIndexType(integer $LayoutIndexType) 设置LayoutIndex类型，
默认值:0
可选值[0,1]
0:默认类型，代表普通布局
1:单输入类型，代表单输入布局
 */
class CasterDisplayInfo extends AbstractModel
{
    /**
     * @var integer 布局Index。
如果使用自定义布局，为自定义布局下标。
如果使用单输入布局，如使用输入1，则LayoutIndexType=1， 且LayoutIndex=1，以此类推。
     */
    public $LayoutIndex;

    /**
     * @var array 使用的水印Index列表。
注：当作为入参使用时，列表中的水印Index需要已经存在。
     */
    public $MarkPicIndexList;

    /**
     * @var array 使用的文字水印Index列表。
注：作为入参使用时，列表中的Index需要已经存在。
     */
    public $MarkWordIndexList;

    /**
     * @var string 使用的转场类型。
注：支持的转场类型可通过DescribeCasterTransitionTypes接口获取。
     */
    public $TransitionType;

    /**
     * @var array 使用的音频输入Index列表。
注：当该字段非空时，表示使用布局中对应的输入源的视频，AudioIndexList中对应的输入源的音频。且这些输入源需已存在。
     */
    public $AudioIndexList;

    /**
     * @var integer 作为入参时，表示使用点播输入源，单画面输入时，点播文件是否从头开始播放。
默认为0。
有效值，0,1。
0代表不从头播放
1代表从头播放
     */
    public $InputStartType;

    /**
     * @var integer LayoutIndex类型，
默认值:0
可选值[0,1]
0:默认类型，代表普通布局
1:单输入类型，代表单输入布局
     */
    public $LayoutIndexType;

    /**
     * @param integer $LayoutIndex 布局Index。
如果使用自定义布局，为自定义布局下标。
如果使用单输入布局，如使用输入1，则LayoutIndexType=1， 且LayoutIndex=1，以此类推。
     * @param array $MarkPicIndexList 使用的水印Index列表。
注：当作为入参使用时，列表中的水印Index需要已经存在。
     * @param array $MarkWordIndexList 使用的文字水印Index列表。
注：作为入参使用时，列表中的Index需要已经存在。
     * @param string $TransitionType 使用的转场类型。
注：支持的转场类型可通过DescribeCasterTransitionTypes接口获取。
     * @param array $AudioIndexList 使用的音频输入Index列表。
注：当该字段非空时，表示使用布局中对应的输入源的视频，AudioIndexList中对应的输入源的音频。且这些输入源需已存在。
     * @param integer $InputStartType 作为入参时，表示使用点播输入源，单画面输入时，点播文件是否从头开始播放。
默认为0。
有效值，0,1。
0代表不从头播放
1代表从头播放
     * @param integer $LayoutIndexType LayoutIndex类型，
默认值:0
可选值[0,1]
0:默认类型，代表普通布局
1:单输入类型，代表单输入布局
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
        if (array_key_exists("LayoutIndex",$param) and $param["LayoutIndex"] !== null) {
            $this->LayoutIndex = $param["LayoutIndex"];
        }

        if (array_key_exists("MarkPicIndexList",$param) and $param["MarkPicIndexList"] !== null) {
            $this->MarkPicIndexList = $param["MarkPicIndexList"];
        }

        if (array_key_exists("MarkWordIndexList",$param) and $param["MarkWordIndexList"] !== null) {
            $this->MarkWordIndexList = $param["MarkWordIndexList"];
        }

        if (array_key_exists("TransitionType",$param) and $param["TransitionType"] !== null) {
            $this->TransitionType = $param["TransitionType"];
        }

        if (array_key_exists("AudioIndexList",$param) and $param["AudioIndexList"] !== null) {
            $this->AudioIndexList = $param["AudioIndexList"];
        }

        if (array_key_exists("InputStartType",$param) and $param["InputStartType"] !== null) {
            $this->InputStartType = $param["InputStartType"];
        }

        if (array_key_exists("LayoutIndexType",$param) and $param["LayoutIndexType"] !== null) {
            $this->LayoutIndexType = $param["LayoutIndexType"];
        }
    }
}
