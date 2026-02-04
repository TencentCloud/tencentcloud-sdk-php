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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRoom请求参数结构体
 *
 * @method integer getRoomId() 获取<p>房间ID。</p>
 * @method void setRoomId(integer $RoomId) 设置<p>房间ID。</p>
 * @method integer getSdkAppId() 获取<p>低代码互动课堂的SdkAppId</p>
 * @method void setSdkAppId(integer $SdkAppId) 设置<p>低代码互动课堂的SdkAppId</p>
 * @method integer getStartTime() 获取<p>预定的房间开始时间，unix时间戳（秒）。直播开始后不允许修改。</p>
 * @method void setStartTime(integer $StartTime) 设置<p>预定的房间开始时间，unix时间戳（秒）。直播开始后不允许修改。</p>
 * @method integer getEndTime() 获取<p>预定的房间结束时间，unix时间戳（秒）。直播开始后不允许修改。</p>
 * @method void setEndTime(integer $EndTime) 设置<p>预定的房间结束时间，unix时间戳（秒）。直播开始后不允许修改。</p>
 * @method string getTeacherId() 获取<p>老师ID。直播开始后不允许修改。</p>
 * @method void setTeacherId(string $TeacherId) 设置<p>老师ID。直播开始后不允许修改。</p>
 * @method string getName() 获取<p>房间名称。<br>字符数不超过256</p>
 * @method void setName(string $Name) 设置<p>房间名称。<br>字符数不超过256</p>
 * @method integer getResolution() 获取<p>分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>直播开始后不允许修改。</p>
 * @method void setResolution(integer $Resolution) 设置<p>分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>直播开始后不允许修改。</p>
 * @method integer getMaxMicNumber() 获取<p>设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
 * @method void setMaxMicNumber(integer $MaxMicNumber) 设置<p>设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
 * @method integer getAutoMic() 获取<p>进入房间时是否自动连麦。可以有以下取值：<br>0 不自动连麦（默认值）<br>1 自动连麦<br>直播开始后不允许修改。</p>
 * @method void setAutoMic(integer $AutoMic) 设置<p>进入房间时是否自动连麦。可以有以下取值：<br>0 不自动连麦（默认值）<br>1 自动连麦<br>直播开始后不允许修改。</p>
 * @method integer getAudioQuality() 获取<p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质<br>直播开始后不允许修改。</p>
 * @method void setAudioQuality(integer $AudioQuality) 设置<p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质<br>直播开始后不允许修改。</p>
 * @method string getSubType() 获取<p>房间子类型，可以有以下取值：<br>videodoc 文档+视频<br>video 纯视频<br>直播开始后不允许修改。</p>
 * @method void setSubType(string $SubType) 设置<p>房间子类型，可以有以下取值：<br>videodoc 文档+视频<br>video 纯视频<br>直播开始后不允许修改。</p>
 * @method integer getDisableRecord() 获取<p>禁止录制。可以有以下取值：<br>0 不禁止录制（默认值）<br>1 禁止录制<br>直播开始后不允许修改。</p>
 * @method void setDisableRecord(integer $DisableRecord) 设置<p>禁止录制。可以有以下取值：<br>0 不禁止录制（默认值）<br>1 禁止录制<br>直播开始后不允许修改。</p>
 * @method array getAssistants() 获取<p>助教Id列表。直播开始后不允许修改。</p>
 * @method void setAssistants(array $Assistants) 设置<p>助教Id列表。直播开始后不允许修改。</p>
 * @method string getGroupId() 获取<p>房间绑定的群组ID。直播开始后不允许修改。</p>
 * @method void setGroupId(string $GroupId) 设置<p>房间绑定的群组ID。直播开始后不允许修改。</p>
 * @method integer getEnableDirectControl() 获取<p>打开学生麦克风/摄像头的授权开关。直播开始后不允许修改。</p>
 * @method void setEnableDirectControl(integer $EnableDirectControl) 设置<p>打开学生麦克风/摄像头的授权开关。直播开始后不允许修改。</p>
 * @method integer getInteractionMode() 获取<p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
 * @method void setInteractionMode(integer $InteractionMode) 设置<p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
 * @method integer getVideoOrientation() 获取<p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
 * @method void setVideoOrientation(integer $VideoOrientation) 设置<p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
 * @method integer getIsGradingRequiredPostClass() 获取<p>开启课后评分。 0：不开启(默认)  1：开启</p>
 * @method void setIsGradingRequiredPostClass(integer $IsGradingRequiredPostClass) 设置<p>开启课后评分。 0：不开启(默认)  1：开启</p>
 * @method integer getRoomType() 获取<p>房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 （预留参数、暂未开放)<br>注：大班课的布局(layout)只有三分屏</p>
 * @method void setRoomType(integer $RoomType) 设置<p>房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 （预留参数、暂未开放)<br>注：大班课的布局(layout)只有三分屏</p>
 * @method integer getRecordLayout() 获取<p>录制模板。仅可修改还未开始的房间。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
 * @method void setRecordLayout(integer $RecordLayout) 设置<p>录制模板。仅可修改还未开始的房间。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
 * @method integer getEndDelayTime() 获取<p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
 * @method void setEndDelayTime(integer $EndDelayTime) 设置<p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
 * @method integer getLiveType() 获取<p>直播方式：0 常规模式（默认）1 回放直播模式（伪直播）。 目前支持从回放直播模式（伪直播）改为常规模式，不支持从常规模式改为回放直播模式（伪直播）</p>
 * @method void setLiveType(integer $LiveType) 设置<p>直播方式：0 常规模式（默认）1 回放直播模式（伪直播）。 目前支持从回放直播模式（伪直播）改为常规模式，不支持从常规模式改为回放直播模式（伪直播）</p>
 * @method string getRecordLiveUrl() 获取<p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
 * @method void setRecordLiveUrl(string $RecordLiveUrl) 设置<p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
 * @method integer getEnableAutoStart() 获取<p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
 * @method void setEnableAutoStart(integer $EnableAutoStart) 设置<p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
 * @method string getRecordScene() 获取<p>录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p>
 * @method void setRecordScene(string $RecordScene) 设置<p>录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p>
 * @method string getRecordLang() 获取<p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
 * @method void setRecordLang(string $RecordLang) 设置<p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
 * @method integer getWhiteBoardSnapshotMode() 获取<p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
 * @method void setWhiteBoardSnapshotMode(integer $WhiteBoardSnapshotMode) 设置<p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
 * @method integer getSubtitlesTranscription() 获取<p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
 * @method void setSubtitlesTranscription(integer $SubtitlesTranscription) 设置<p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
 * @method array getGuests() 获取<p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
 * @method void setGuests(array $Guests) 设置<p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
 * @method integer getRecordMerge() 获取<p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
 * @method void setRecordMerge(integer $RecordMerge) 设置<p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
 */
class ModifyRoomRequest extends AbstractModel
{
    /**
     * @var integer <p>房间ID。</p>
     */
    public $RoomId;

    /**
     * @var integer <p>低代码互动课堂的SdkAppId</p>
     */
    public $SdkAppId;

    /**
     * @var integer <p>预定的房间开始时间，unix时间戳（秒）。直播开始后不允许修改。</p>
     */
    public $StartTime;

    /**
     * @var integer <p>预定的房间结束时间，unix时间戳（秒）。直播开始后不允许修改。</p>
     */
    public $EndTime;

    /**
     * @var string <p>老师ID。直播开始后不允许修改。</p>
     */
    public $TeacherId;

    /**
     * @var string <p>房间名称。<br>字符数不超过256</p>
     */
    public $Name;

    /**
     * @var integer <p>分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>直播开始后不允许修改。</p>
     */
    public $Resolution;

    /**
     * @var integer <p>设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
     */
    public $MaxMicNumber;

    /**
     * @var integer <p>进入房间时是否自动连麦。可以有以下取值：<br>0 不自动连麦（默认值）<br>1 自动连麦<br>直播开始后不允许修改。</p>
     */
    public $AutoMic;

    /**
     * @var integer <p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质<br>直播开始后不允许修改。</p>
     */
    public $AudioQuality;

    /**
     * @var string <p>房间子类型，可以有以下取值：<br>videodoc 文档+视频<br>video 纯视频<br>直播开始后不允许修改。</p>
     */
    public $SubType;

    /**
     * @var integer <p>禁止录制。可以有以下取值：<br>0 不禁止录制（默认值）<br>1 禁止录制<br>直播开始后不允许修改。</p>
     */
    public $DisableRecord;

    /**
     * @var array <p>助教Id列表。直播开始后不允许修改。</p>
     */
    public $Assistants;

    /**
     * @var string <p>房间绑定的群组ID。直播开始后不允许修改。</p>
     */
    public $GroupId;

    /**
     * @var integer <p>打开学生麦克风/摄像头的授权开关。直播开始后不允许修改。</p>
     */
    public $EnableDirectControl;

    /**
     * @var integer <p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
     */
    public $InteractionMode;

    /**
     * @var integer <p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
     */
    public $VideoOrientation;

    /**
     * @var integer <p>开启课后评分。 0：不开启(默认)  1：开启</p>
     */
    public $IsGradingRequiredPostClass;

    /**
     * @var integer <p>房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 （预留参数、暂未开放)<br>注：大班课的布局(layout)只有三分屏</p>
     */
    public $RoomType;

    /**
     * @var integer <p>录制模板。仅可修改还未开始的房间。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
     */
    public $RecordLayout;

    /**
     * @var integer <p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
     */
    public $EndDelayTime;

    /**
     * @var integer <p>直播方式：0 常规模式（默认）1 回放直播模式（伪直播）。 目前支持从回放直播模式（伪直播）改为常规模式，不支持从常规模式改为回放直播模式（伪直播）</p>
     */
    public $LiveType;

    /**
     * @var string <p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
     */
    public $RecordLiveUrl;

    /**
     * @var integer <p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
     */
    public $EnableAutoStart;

    /**
     * @var string <p>录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p>
     */
    public $RecordScene;

    /**
     * @var string <p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
     * @deprecated
     */
    public $RecordLang;

    /**
     * @var integer <p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
     */
    public $WhiteBoardSnapshotMode;

    /**
     * @var integer <p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
     */
    public $SubtitlesTranscription;

    /**
     * @var array <p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
     */
    public $Guests;

    /**
     * @var integer <p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
     */
    public $RecordMerge;

    /**
     * @param integer $RoomId <p>房间ID。</p>
     * @param integer $SdkAppId <p>低代码互动课堂的SdkAppId</p>
     * @param integer $StartTime <p>预定的房间开始时间，unix时间戳（秒）。直播开始后不允许修改。</p>
     * @param integer $EndTime <p>预定的房间结束时间，unix时间戳（秒）。直播开始后不允许修改。</p>
     * @param string $TeacherId <p>老师ID。直播开始后不允许修改。</p>
     * @param string $Name <p>房间名称。<br>字符数不超过256</p>
     * @param integer $Resolution <p>分辨率。可以有如下取值：<br>1 标清<br>2 高清<br>3 全高清<br>直播开始后不允许修改。</p>
     * @param integer $MaxMicNumber <p>设置房间/课堂同时最大可与老师进行连麦互动的人数，该参数支持正式上课/开播前调用修改房间修改。小班课取值范围[0,16]，大班课取值范围[0,1]，当取值为0时表示当前课堂/直播，不支持连麦互动。</p>
     * @param integer $AutoMic <p>进入房间时是否自动连麦。可以有以下取值：<br>0 不自动连麦（默认值）<br>1 自动连麦<br>直播开始后不允许修改。</p>
     * @param integer $AudioQuality <p>高音质模式。可以有以下取值：<br>0 不开启高音质（默认值）<br>1 开启高音质<br>直播开始后不允许修改。</p>
     * @param string $SubType <p>房间子类型，可以有以下取值：<br>videodoc 文档+视频<br>video 纯视频<br>直播开始后不允许修改。</p>
     * @param integer $DisableRecord <p>禁止录制。可以有以下取值：<br>0 不禁止录制（默认值）<br>1 禁止录制<br>直播开始后不允许修改。</p>
     * @param array $Assistants <p>助教Id列表。直播开始后不允许修改。</p>
     * @param string $GroupId <p>房间绑定的群组ID。直播开始后不允许修改。</p>
     * @param integer $EnableDirectControl <p>打开学生麦克风/摄像头的授权开关。直播开始后不允许修改。</p>
     * @param integer $InteractionMode <p>开启专注模式。<br>0 收看全部角色音视频(默认)<br>1 只看老师和助教</p>
     * @param integer $VideoOrientation <p>横竖屏。0：横屏开播（默认值）; 1：竖屏开播，当前仅支持移动端的纯视频类型</p>
     * @param integer $IsGradingRequiredPostClass <p>开启课后评分。 0：不开启(默认)  1：开启</p>
     * @param integer $RoomType <p>房间类型: 0 小班课（默认值）; 1 大班课; 2 1V1 （预留参数、暂未开放)<br>注：大班课的布局(layout)只有三分屏</p>
     * @param integer $RecordLayout <p>录制模板。仅可修改还未开始的房间。录制模板枚举值参考：https://cloud.tencent.com/document/product/1639/89744</p>
     * @param integer $EndDelayTime <p>拖堂时间：单位分钟，0为不限制(默认值), -1为不能拖堂，大于0为拖堂的时间，最大值120分钟</p>
     * @param integer $LiveType <p>直播方式：0 常规模式（默认）1 回放直播模式（伪直播）。 目前支持从回放直播模式（伪直播）改为常规模式，不支持从常规模式改为回放直播模式（伪直播）</p>
     * @param string $RecordLiveUrl <p>伪直播链接。 支持的协议以及格式： 协议：HTTP、HTTPS、RTMP、HLS 。格式：FLV、MP3、MP4、MPEG-TS、MOV、MKV、M4A。视频编码：H.264、VP8。音频编码：AAC、OPUS。</p><p>注意：伪直播视频规格建议最高使用1080p 30fps，4k视频会有兼容性问题导致直播失败。</p>
     * @param integer $EnableAutoStart <p>是否自动开始上课：0 不自动上课（默认） 1 自动上课 live_type=1的时候有效</p>
     * @param string $RecordScene <p>录制自定义场景，仅recordlayout=9的时候此参数有效,数据内容为用户自定义场景参数，数据格式为json键值对方式，其中键值对的value为string类型。</p>
     * @param string $RecordLang <p>录制自定义语言，仅recordlayout=9的时候此参数有效</p>
     * @param integer $WhiteBoardSnapshotMode <p>板书截图生成类型。0 不生成板书；1 全量模式；2 单页去重模式</p>
     * @param integer $SubtitlesTranscription <p>字幕转写功能开关。可以有以下取值：<br>0 不开启字幕转写功能（默认值）<br>1 自动转写模式：上课自动开启，下课自动停止<br>2 手动转写模式：支持老师或者助教通过客户端API手动开启/关闭字幕转写<br>设置0和1时客户端均不展示手动开关，设置2时老师或者助教端展示字幕转写开关</p>
     * @param array $Guests <p>嘉宾Id列表。当圆桌会议模式（RoomType==3）时生效</p>
     * @param integer $RecordMerge <p>录制文件合并开关。0 关闭 1 开启 注：只有在一节课多次启用手动录制时，此功能才有效</p>
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
        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("TeacherId",$param) and $param["TeacherId"] !== null) {
            $this->TeacherId = $param["TeacherId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Resolution",$param) and $param["Resolution"] !== null) {
            $this->Resolution = $param["Resolution"];
        }

        if (array_key_exists("MaxMicNumber",$param) and $param["MaxMicNumber"] !== null) {
            $this->MaxMicNumber = $param["MaxMicNumber"];
        }

        if (array_key_exists("AutoMic",$param) and $param["AutoMic"] !== null) {
            $this->AutoMic = $param["AutoMic"];
        }

        if (array_key_exists("AudioQuality",$param) and $param["AudioQuality"] !== null) {
            $this->AudioQuality = $param["AudioQuality"];
        }

        if (array_key_exists("SubType",$param) and $param["SubType"] !== null) {
            $this->SubType = $param["SubType"];
        }

        if (array_key_exists("DisableRecord",$param) and $param["DisableRecord"] !== null) {
            $this->DisableRecord = $param["DisableRecord"];
        }

        if (array_key_exists("Assistants",$param) and $param["Assistants"] !== null) {
            $this->Assistants = $param["Assistants"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EnableDirectControl",$param) and $param["EnableDirectControl"] !== null) {
            $this->EnableDirectControl = $param["EnableDirectControl"];
        }

        if (array_key_exists("InteractionMode",$param) and $param["InteractionMode"] !== null) {
            $this->InteractionMode = $param["InteractionMode"];
        }

        if (array_key_exists("VideoOrientation",$param) and $param["VideoOrientation"] !== null) {
            $this->VideoOrientation = $param["VideoOrientation"];
        }

        if (array_key_exists("IsGradingRequiredPostClass",$param) and $param["IsGradingRequiredPostClass"] !== null) {
            $this->IsGradingRequiredPostClass = $param["IsGradingRequiredPostClass"];
        }

        if (array_key_exists("RoomType",$param) and $param["RoomType"] !== null) {
            $this->RoomType = $param["RoomType"];
        }

        if (array_key_exists("RecordLayout",$param) and $param["RecordLayout"] !== null) {
            $this->RecordLayout = $param["RecordLayout"];
        }

        if (array_key_exists("EndDelayTime",$param) and $param["EndDelayTime"] !== null) {
            $this->EndDelayTime = $param["EndDelayTime"];
        }

        if (array_key_exists("LiveType",$param) and $param["LiveType"] !== null) {
            $this->LiveType = $param["LiveType"];
        }

        if (array_key_exists("RecordLiveUrl",$param) and $param["RecordLiveUrl"] !== null) {
            $this->RecordLiveUrl = $param["RecordLiveUrl"];
        }

        if (array_key_exists("EnableAutoStart",$param) and $param["EnableAutoStart"] !== null) {
            $this->EnableAutoStart = $param["EnableAutoStart"];
        }

        if (array_key_exists("RecordScene",$param) and $param["RecordScene"] !== null) {
            $this->RecordScene = $param["RecordScene"];
        }

        if (array_key_exists("RecordLang",$param) and $param["RecordLang"] !== null) {
            $this->RecordLang = $param["RecordLang"];
        }

        if (array_key_exists("WhiteBoardSnapshotMode",$param) and $param["WhiteBoardSnapshotMode"] !== null) {
            $this->WhiteBoardSnapshotMode = $param["WhiteBoardSnapshotMode"];
        }

        if (array_key_exists("SubtitlesTranscription",$param) and $param["SubtitlesTranscription"] !== null) {
            $this->SubtitlesTranscription = $param["SubtitlesTranscription"];
        }

        if (array_key_exists("Guests",$param) and $param["Guests"] !== null) {
            $this->Guests = $param["Guests"];
        }

        if (array_key_exists("RecordMerge",$param) and $param["RecordMerge"] !== null) {
            $this->RecordMerge = $param["RecordMerge"];
        }
    }
}
