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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 语音翻译识别任务控制参数
 *
 * @method string getSwitch() 获取语音翻译识别任务开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li><font color=red>注意：</font>语音翻译识别任务本身会返回 ASR 全文识别结果，为避免重复收费，因此禁止同时开启语音翻译识别和 ASR 全文识别功能项。

 * @method void setSwitch(string $Switch) 设置语音翻译识别任务开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li><font color=red>注意：</font>语音翻译识别任务本身会返回 ASR 全文识别结果，为避免重复收费，因此禁止同时开启语音翻译识别和 ASR 全文识别功能项。

 * @method string getSrcLanguage() 获取媒体源语言，当 Switch 为 ON 时，此参数必填。取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
 * @method void setSrcLanguage(string $SrcLanguage) 设置媒体源语言，当 Switch 为 ON 时，此参数必填。取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
 * @method string getDstLanguage() 获取翻译目标语言，当 Switch 为 ON 时，此参数有效。
若此参数不填或者填写空字符串，则表示只进行语音全文识别，不进行翻译（计费项与 AsrFullTextConfigure 语音全文识别一致）；
否则，此参数的取值范围分为如下几种情况：
当 SrcLanguage 为 zh（中文）时，取值范围：
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语。</li>
当 SrcLanguage 为 en（英文）时，取值范围：
<li>zh：中文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语；</li>
<li>ar：阿拉伯语；</li>
<li>hi：印地语。</li>
当 SrcLanguage 为 ja（日文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ko：韩文。</li>
当 SrcLanguage 为 ko（韩文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文。</li>
当 SrcLanguage 为 vi（越南语）或 ms（马来语）或 th（泰语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文。</li>
当 SrcLanguage 为 pt（葡萄牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语。</li>
当 SrcLanguage 为 tr（土耳其语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 es（西班牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 ar（阿拉伯语）或 hi（印地语）时，取值范围：
<li>en：英文。</li>
当 SrcLanguage 为 fr（法语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
 * @method void setDstLanguage(string $DstLanguage) 设置翻译目标语言，当 Switch 为 ON 时，此参数有效。
若此参数不填或者填写空字符串，则表示只进行语音全文识别，不进行翻译（计费项与 AsrFullTextConfigure 语音全文识别一致）；
否则，此参数的取值范围分为如下几种情况：
当 SrcLanguage 为 zh（中文）时，取值范围：
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语。</li>
当 SrcLanguage 为 en（英文）时，取值范围：
<li>zh：中文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语；</li>
<li>ar：阿拉伯语；</li>
<li>hi：印地语。</li>
当 SrcLanguage 为 ja（日文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ko：韩文。</li>
当 SrcLanguage 为 ko（韩文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文。</li>
当 SrcLanguage 为 vi（越南语）或 ms（马来语）或 th（泰语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文。</li>
当 SrcLanguage 为 pt（葡萄牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语。</li>
当 SrcLanguage 为 tr（土耳其语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 es（西班牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 ar（阿拉伯语）或 hi（印地语）时，取值范围：
<li>en：英文。</li>
当 SrcLanguage 为 fr（法语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
 * @method array getSubtitleFormats() 获取生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font> 云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
 * @method void setSubtitleFormats(array $SubtitleFormats) 设置生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font> 云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
 * @method string getSubtitleName() 获取指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。

 * @method void setSubtitleName(string $SubtitleName) 设置指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。
 */
class AsrTranslateConfigureInfo extends AbstractModel
{
    /**
     * @var string 语音翻译识别任务开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li><font color=red>注意：</font>语音翻译识别任务本身会返回 ASR 全文识别结果，为避免重复收费，因此禁止同时开启语音翻译识别和 ASR 全文识别功能项。

     */
    public $Switch;

    /**
     * @var string 媒体源语言，当 Switch 为 ON 时，此参数必填。取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
     */
    public $SrcLanguage;

    /**
     * @var string 翻译目标语言，当 Switch 为 ON 时，此参数有效。
若此参数不填或者填写空字符串，则表示只进行语音全文识别，不进行翻译（计费项与 AsrFullTextConfigure 语音全文识别一致）；
否则，此参数的取值范围分为如下几种情况：
当 SrcLanguage 为 zh（中文）时，取值范围：
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语。</li>
当 SrcLanguage 为 en（英文）时，取值范围：
<li>zh：中文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语；</li>
<li>ar：阿拉伯语；</li>
<li>hi：印地语。</li>
当 SrcLanguage 为 ja（日文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ko：韩文。</li>
当 SrcLanguage 为 ko（韩文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文。</li>
当 SrcLanguage 为 vi（越南语）或 ms（马来语）或 th（泰语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文。</li>
当 SrcLanguage 为 pt（葡萄牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语。</li>
当 SrcLanguage 为 tr（土耳其语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 es（西班牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 ar（阿拉伯语）或 hi（印地语）时，取值范围：
<li>en：英文。</li>
当 SrcLanguage 为 fr（法语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
     */
    public $DstLanguage;

    /**
     * @var array 生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font> 云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
     */
    public $SubtitleFormats;

    /**
     * @var string 指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。

     */
    public $SubtitleName;

    /**
     * @param string $Switch 语音翻译识别任务开关，可选值：
<li>ON：开启；</li>
<li>OFF：关闭。</li><font color=red>注意：</font>语音翻译识别任务本身会返回 ASR 全文识别结果，为避免重复收费，因此禁止同时开启语音翻译识别和 ASR 全文识别功能项。

     * @param string $SrcLanguage 媒体源语言，当 Switch 为 ON 时，此参数必填。取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>vi：越南语；</li>
<li>ms：马来语；</li>
<li>th：泰语；</li>
<li>pt：葡萄牙语；</li>
<li>tr：土耳其语；</li>
<li>ar：阿拉伯语；</li>
<li>es：西班牙语；</li>
<li>hi：印地语；</li>
<li>fr：法语。</li>
     * @param string $DstLanguage 翻译目标语言，当 Switch 为 ON 时，此参数有效。
若此参数不填或者填写空字符串，则表示只进行语音全文识别，不进行翻译（计费项与 AsrFullTextConfigure 语音全文识别一致）；
否则，此参数的取值范围分为如下几种情况：
当 SrcLanguage 为 zh（中文）时，取值范围：
<li>en：英文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语。</li>
当 SrcLanguage 为 en（英文）时，取值范围：
<li>zh：中文；</li>
<li>ja：日文；</li>
<li>ko：韩文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语；</li>
<li>vi：越南语；</li>
<li>id：印尼语；</li>
<li>th：泰语；</li>
<li>ms：马来语；</li>
<li>ar：阿拉伯语；</li>
<li>hi：印地语。</li>
当 SrcLanguage 为 ja（日文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ko：韩文。</li>
当 SrcLanguage 为 ko（韩文）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>ja：日文。</li>
当 SrcLanguage 为 vi（越南语）或 ms（马来语）或 th（泰语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文。</li>
当 SrcLanguage 为 pt（葡萄牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语。</li>
当 SrcLanguage 为 tr（土耳其语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 es（西班牙语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>fr：法语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
当 SrcLanguage 为 ar（阿拉伯语）或 hi（印地语）时，取值范围：
<li>en：英文。</li>
当 SrcLanguage 为 fr（法语）时，取值范围：
<li>zh：中文；</li>
<li>en：英文；</li>
<li>es：西班牙语；</li>
<li>it：意大利语；</li>
<li>de：德语；</li>
<li>tr：土耳其语；</li>
<li>ru：俄语；</li>
<li>pt：葡萄牙语。</li>
     * @param array $SubtitleFormats 生成的字幕文件格式列表，不填或者填空数组表示不生成字幕文件，可选值：
<li>vtt：生成 WebVTT 字幕文件；</li>
<li>srt：生成 SRT 字幕文件。</li><font color=red>注意：</font> 云点播媒资信息仅支持添加 vtt 字幕，因此当且仅当 SubtitleFormats 包含 vtt 时，云点播将生成的字幕添加到媒资。
     * @param string $SubtitleName 指定字幕名称，长度限制：64 个字符。该值将用于播放器展示，若不填则云点播自动生成。
<font color=red>注意：</font>仅当 SubtitleFormats 包含 vtt 时，该字段有效。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("SrcLanguage",$param) and $param["SrcLanguage"] !== null) {
            $this->SrcLanguage = $param["SrcLanguage"];
        }

        if (array_key_exists("DstLanguage",$param) and $param["DstLanguage"] !== null) {
            $this->DstLanguage = $param["DstLanguage"];
        }

        if (array_key_exists("SubtitleFormats",$param) and $param["SubtitleFormats"] !== null) {
            $this->SubtitleFormats = $param["SubtitleFormats"];
        }

        if (array_key_exists("SubtitleName",$param) and $param["SubtitleName"] !== null) {
            $this->SubtitleName = $param["SubtitleName"];
        }
    }
}
