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
 * CreateAudioModerationSync请求参数结构体
 *
 * @method integer getSdkappid() 获取<p>sdkappid app账号</p>
 * @method void setSdkappid(integer $Sdkappid) 设置<p>sdkappid app账号</p>
 * @method string getBizType() 获取<p>BizType为策略的具体的编号, GME业务 2_2_3_sdkappid</p>
 * @method void setBizType(string $BizType) 设置<p>BizType为策略的具体的编号, GME业务 2_2_3_sdkappid</p>
 * @method string getDataId() 获取<p>数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符</p>
 * @method void setDataId(string $DataId) 设置<p>数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符</p>
 * @method string getFileFormat() 获取<p>音频格式，当FileUrl为空时，必填。音频文件资源格式，当前支持格式：wav、mp3、m4a，请按照实际文件格式填入。 示例值：mp3</p>
 * @method void setFileFormat(string $FileFormat) 设置<p>音频格式，当FileUrl为空时，必填。音频文件资源格式，当前支持格式：wav、mp3、m4a，请按照实际文件格式填入。 示例值：mp3</p>
 * @method string getFileName() 获取<p>文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符 示例值：file_name</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符 示例值：file_name</p>
 * @method string getFileContent() 获取<p>数据Base64编码，短音频同步接口仅传入可音频内容； 支持范围：文件大小不能超过5M，时长不可超过60s； 支持格式：wav (PCM编码)、mp3、m4a (采样率：16kHz~48kHz，位深：16bit 小端，声道数：单声道/双声道，建议格式：16kHz/16bit/单声道)。 示例值：1</p>
 * @method void setFileContent(string $FileContent) 设置<p>数据Base64编码，短音频同步接口仅传入可音频内容； 支持范围：文件大小不能超过5M，时长不可超过60s； 支持格式：wav (PCM编码)、mp3、m4a (采样率：16kHz~48kHz，位深：16bit 小端，声道数：单声道/双声道，建议格式：16kHz/16bit/单声道)。 示例值：1</p>
 * @method string getFileUrl() 获取<p>音频资源访问链接，与FileContent参数必须二选一输入； 支持范围及格式：同FileContent；</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>音频资源访问链接，与FileContent参数必须二选一输入； 支持范围及格式：同FileContent；</p>
 */
class CreateAudioModerationSyncRequest extends AbstractModel
{
    /**
     * @var integer <p>sdkappid app账号</p>
     */
    public $Sdkappid;

    /**
     * @var string <p>BizType为策略的具体的编号, GME业务 2_2_3_sdkappid</p>
     */
    public $BizType;

    /**
     * @var string <p>数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符</p>
     */
    public $DataId;

    /**
     * @var string <p>音频格式，当FileUrl为空时，必填。音频文件资源格式，当前支持格式：wav、mp3、m4a，请按照实际文件格式填入。 示例值：mp3</p>
     */
    public $FileFormat;

    /**
     * @var string <p>文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符 示例值：file_name</p>
     */
    public $FileName;

    /**
     * @var string <p>数据Base64编码，短音频同步接口仅传入可音频内容； 支持范围：文件大小不能超过5M，时长不可超过60s； 支持格式：wav (PCM编码)、mp3、m4a (采样率：16kHz~48kHz，位深：16bit 小端，声道数：单声道/双声道，建议格式：16kHz/16bit/单声道)。 示例值：1</p>
     */
    public $FileContent;

    /**
     * @var string <p>音频资源访问链接，与FileContent参数必须二选一输入； 支持范围及格式：同FileContent；</p>
     */
    public $FileUrl;

    /**
     * @param integer $Sdkappid <p>sdkappid app账号</p>
     * @param string $BizType <p>BizType为策略的具体的编号, GME业务 2_2_3_sdkappid</p>
     * @param string $DataId <p>数据标识，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符</p>
     * @param string $FileFormat <p>音频格式，当FileUrl为空时，必填。音频文件资源格式，当前支持格式：wav、mp3、m4a，请按照实际文件格式填入。 示例值：mp3</p>
     * @param string $FileName <p>文件名称，可以由英文字母、数字、下划线、-、@#组成，不超过64个字符 示例值：file_name</p>
     * @param string $FileContent <p>数据Base64编码，短音频同步接口仅传入可音频内容； 支持范围：文件大小不能超过5M，时长不可超过60s； 支持格式：wav (PCM编码)、mp3、m4a (采样率：16kHz~48kHz，位深：16bit 小端，声道数：单声道/双声道，建议格式：16kHz/16bit/单声道)。 示例值：1</p>
     * @param string $FileUrl <p>音频资源访问链接，与FileContent参数必须二选一输入； 支持范围及格式：同FileContent；</p>
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
        if (array_key_exists("Sdkappid",$param) and $param["Sdkappid"] !== null) {
            $this->Sdkappid = $param["Sdkappid"];
        }

        if (array_key_exists("BizType",$param) and $param["BizType"] !== null) {
            $this->BizType = $param["BizType"];
        }

        if (array_key_exists("DataId",$param) and $param["DataId"] !== null) {
            $this->DataId = $param["DataId"];
        }

        if (array_key_exists("FileFormat",$param) and $param["FileFormat"] !== null) {
            $this->FileFormat = $param["FileFormat"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileContent",$param) and $param["FileContent"] !== null) {
            $this->FileContent = $param["FileContent"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }
    }
}
