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
 * 转推录制参数
 *
 * @method integer getUniRecord() 获取转推录制模式， 
0/不填: 暂不支持，行为未定义；
1: 不开启录制；
2: 开启录制（使用控制台自动录制模板参数，参考：[跳转文档](https://cloud.tencent.com/document/product/647/111748#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88)）；
3: 开启录制（使用API指定参数）。
 * @method void setUniRecord(integer $UniRecord) 设置转推录制模式， 
0/不填: 暂不支持，行为未定义；
1: 不开启录制；
2: 开启录制（使用控制台自动录制模板参数，参考：[跳转文档](https://cloud.tencent.com/document/product/647/111748#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88)）；
3: 开启录制（使用API指定参数）。
 * @method string getRecordKey() 获取录制任务 key，标识一个录制任务；您可以通过该参数，将多个转推任务录制成一个文件。不指定该参数时，只录制当前转推任务。
【限制长度为128字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
 * @method void setRecordKey(string $RecordKey) 设置录制任务 key，标识一个录制任务；您可以通过该参数，将多个转推任务录制成一个文件。不指定该参数时，只录制当前转推任务。
【限制长度为128字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
 * @method integer getRecordWaitTime() 获取【仅当UniRecord=3时此参数有效】
续录等待时间，对应录制模板“续录等待时长”，单位：秒。该值需大于等于 5，且小于等于 86400(24小时)，默认值为 30。启用续录时，录制任务空闲超过RecordWaitTime的时长，自动结束。
 * @method void setRecordWaitTime(integer $RecordWaitTime) 设置【仅当UniRecord=3时此参数有效】
续录等待时间，对应录制模板“续录等待时长”，单位：秒。该值需大于等于 5，且小于等于 86400(24小时)，默认值为 30。启用续录时，录制任务空闲超过RecordWaitTime的时长，自动结束。
 * @method array getRecordFormat() 获取【仅当UniRecord=3时此参数有效】
录制输出文件格式列表，对应录制模板“文件格式”，支持“hls”、"mp4"、"aac"三种格式，默认值为"mp4"。其中"mp4"和"aac"格式，不能同时指定。
只录制 mp4格式，示例值：["mp4"]。同时录制mp4 和 HLS 格式，示例值：["mp4","hls"]。
 * @method void setRecordFormat(array $RecordFormat) 设置【仅当UniRecord=3时此参数有效】
录制输出文件格式列表，对应录制模板“文件格式”，支持“hls”、"mp4"、"aac"三种格式，默认值为"mp4"。其中"mp4"和"aac"格式，不能同时指定。
只录制 mp4格式，示例值：["mp4"]。同时录制mp4 和 HLS 格式，示例值：["mp4","hls"]。
 * @method integer getMaxMediaFileDuration() 获取【仅当UniRecord=3时此参数有效】
单个文件录制时长，对应录制模板“单个录制文件时长”，单位：分钟。该值需大于等于 1，且小于等于 1440(24小时)，默认值为 1440。只对"mp4"或"aac"格式生效。实际单文件录制时长还受单文件大小不超过 2G 限制，超过2G则强制拆分。
 * @method void setMaxMediaFileDuration(integer $MaxMediaFileDuration) 设置【仅当UniRecord=3时此参数有效】
单个文件录制时长，对应录制模板“单个录制文件时长”，单位：分钟。该值需大于等于 1，且小于等于 1440(24小时)，默认值为 1440。只对"mp4"或"aac"格式生效。实际单文件录制时长还受单文件大小不超过 2G 限制，超过2G则强制拆分。
 * @method integer getStreamType() 获取【仅当UniRecord=3时此参数有效】
录制的音视频类型，对应录制模板“录制格式”，0:音视频，1：纯音频，2：纯视频。最终录制文件内容是录制指定类型和转推内容的交集。
 * @method void setStreamType(integer $StreamType) 设置【仅当UniRecord=3时此参数有效】
录制的音视频类型，对应录制模板“录制格式”，0:音视频，1：纯音频，2：纯视频。最终录制文件内容是录制指定类型和转推内容的交集。
 * @method string getUserDefineRecordPrefix() 获取录制文件名前缀，不超过64字符。只有存储为vod时生效。
【限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
 * @method void setUserDefineRecordPrefix(string $UserDefineRecordPrefix) 设置录制文件名前缀，不超过64字符。只有存储为vod时生效。
【限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
 * @method McuStorageParams getMcuStorageParams() 获取【仅当UniRecord=3时此参数有效】
录制文件存储参数，对应控制台“存储位置”及相关参数。目前支持云点播VOD和对象存储COS两种存储方式，只能填写一种。
 * @method void setMcuStorageParams(McuStorageParams $McuStorageParams) 设置【仅当UniRecord=3时此参数有效】
录制文件存储参数，对应控制台“存储位置”及相关参数。目前支持云点播VOD和对象存储COS两种存储方式，只能填写一种。
 */
class McuRecordParams extends AbstractModel
{
    /**
     * @var integer 转推录制模式， 
0/不填: 暂不支持，行为未定义；
1: 不开启录制；
2: 开启录制（使用控制台自动录制模板参数，参考：[跳转文档](https://cloud.tencent.com/document/product/647/111748#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88)）；
3: 开启录制（使用API指定参数）。
     */
    public $UniRecord;

    /**
     * @var string 录制任务 key，标识一个录制任务；您可以通过该参数，将多个转推任务录制成一个文件。不指定该参数时，只录制当前转推任务。
【限制长度为128字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
     */
    public $RecordKey;

    /**
     * @var integer 【仅当UniRecord=3时此参数有效】
续录等待时间，对应录制模板“续录等待时长”，单位：秒。该值需大于等于 5，且小于等于 86400(24小时)，默认值为 30。启用续录时，录制任务空闲超过RecordWaitTime的时长，自动结束。
     */
    public $RecordWaitTime;

    /**
     * @var array 【仅当UniRecord=3时此参数有效】
录制输出文件格式列表，对应录制模板“文件格式”，支持“hls”、"mp4"、"aac"三种格式，默认值为"mp4"。其中"mp4"和"aac"格式，不能同时指定。
只录制 mp4格式，示例值：["mp4"]。同时录制mp4 和 HLS 格式，示例值：["mp4","hls"]。
     */
    public $RecordFormat;

    /**
     * @var integer 【仅当UniRecord=3时此参数有效】
单个文件录制时长，对应录制模板“单个录制文件时长”，单位：分钟。该值需大于等于 1，且小于等于 1440(24小时)，默认值为 1440。只对"mp4"或"aac"格式生效。实际单文件录制时长还受单文件大小不超过 2G 限制，超过2G则强制拆分。
     */
    public $MaxMediaFileDuration;

    /**
     * @var integer 【仅当UniRecord=3时此参数有效】
录制的音视频类型，对应录制模板“录制格式”，0:音视频，1：纯音频，2：纯视频。最终录制文件内容是录制指定类型和转推内容的交集。
     */
    public $StreamType;

    /**
     * @var string 录制文件名前缀，不超过64字符。只有存储为vod时生效。
【限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
     */
    public $UserDefineRecordPrefix;

    /**
     * @var McuStorageParams 【仅当UniRecord=3时此参数有效】
录制文件存储参数，对应控制台“存储位置”及相关参数。目前支持云点播VOD和对象存储COS两种存储方式，只能填写一种。
     */
    public $McuStorageParams;

    /**
     * @param integer $UniRecord 转推录制模式， 
0/不填: 暂不支持，行为未定义；
1: 不开启录制；
2: 开启录制（使用控制台自动录制模板参数，参考：[跳转文档](https://cloud.tencent.com/document/product/647/111748#.E5.BD.95.E5.88.B6.E6.8E.A7.E5.88.B6.E6.96.B9.E6.A1.88)）；
3: 开启录制（使用API指定参数）。
     * @param string $RecordKey 录制任务 key，标识一个录制任务；您可以通过该参数，将多个转推任务录制成一个文件。不指定该参数时，只录制当前转推任务。
【限制长度为128字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
     * @param integer $RecordWaitTime 【仅当UniRecord=3时此参数有效】
续录等待时间，对应录制模板“续录等待时长”，单位：秒。该值需大于等于 5，且小于等于 86400(24小时)，默认值为 30。启用续录时，录制任务空闲超过RecordWaitTime的时长，自动结束。
     * @param array $RecordFormat 【仅当UniRecord=3时此参数有效】
录制输出文件格式列表，对应录制模板“文件格式”，支持“hls”、"mp4"、"aac"三种格式，默认值为"mp4"。其中"mp4"和"aac"格式，不能同时指定。
只录制 mp4格式，示例值：["mp4"]。同时录制mp4 和 HLS 格式，示例值：["mp4","hls"]。
     * @param integer $MaxMediaFileDuration 【仅当UniRecord=3时此参数有效】
单个文件录制时长，对应录制模板“单个录制文件时长”，单位：分钟。该值需大于等于 1，且小于等于 1440(24小时)，默认值为 1440。只对"mp4"或"aac"格式生效。实际单文件录制时长还受单文件大小不超过 2G 限制，超过2G则强制拆分。
     * @param integer $StreamType 【仅当UniRecord=3时此参数有效】
录制的音视频类型，对应录制模板“录制格式”，0:音视频，1：纯音频，2：纯视频。最终录制文件内容是录制指定类型和转推内容的交集。
     * @param string $UserDefineRecordPrefix 录制文件名前缀，不超过64字符。只有存储为vod时生效。
【限制长度为64字节，只允许包含大小写英文字母（a-zA-Z）、数字（0-9）及下划线(_)和连词符(-)】
     * @param McuStorageParams $McuStorageParams 【仅当UniRecord=3时此参数有效】
录制文件存储参数，对应控制台“存储位置”及相关参数。目前支持云点播VOD和对象存储COS两种存储方式，只能填写一种。
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
        if (array_key_exists("UniRecord",$param) and $param["UniRecord"] !== null) {
            $this->UniRecord = $param["UniRecord"];
        }

        if (array_key_exists("RecordKey",$param) and $param["RecordKey"] !== null) {
            $this->RecordKey = $param["RecordKey"];
        }

        if (array_key_exists("RecordWaitTime",$param) and $param["RecordWaitTime"] !== null) {
            $this->RecordWaitTime = $param["RecordWaitTime"];
        }

        if (array_key_exists("RecordFormat",$param) and $param["RecordFormat"] !== null) {
            $this->RecordFormat = $param["RecordFormat"];
        }

        if (array_key_exists("MaxMediaFileDuration",$param) and $param["MaxMediaFileDuration"] !== null) {
            $this->MaxMediaFileDuration = $param["MaxMediaFileDuration"];
        }

        if (array_key_exists("StreamType",$param) and $param["StreamType"] !== null) {
            $this->StreamType = $param["StreamType"];
        }

        if (array_key_exists("UserDefineRecordPrefix",$param) and $param["UserDefineRecordPrefix"] !== null) {
            $this->UserDefineRecordPrefix = $param["UserDefineRecordPrefix"];
        }

        if (array_key_exists("McuStorageParams",$param) and $param["McuStorageParams"] !== null) {
            $this->McuStorageParams = new McuStorageParams();
            $this->McuStorageParams->deserialize($param["McuStorageParams"]);
        }
    }
}
