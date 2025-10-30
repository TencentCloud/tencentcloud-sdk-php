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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLiveRecordTemplate请求参数结构体
 *
 * @method HLSConfigureInfo getHLSConfigure() 获取HLS配置参数，和MP4Configure需要二选一必填。
 * @method void setHLSConfigure(HLSConfigureInfo $HLSConfigure) 设置HLS配置参数，和MP4Configure需要二选一必填。
 * @method MP4ConfigureInfo getMP4Configure() 获取MP4配置参数，和HLSConfigure需要二选一必填。
 * @method void setMP4Configure(MP4ConfigureInfo $MP4Configure) 设置MP4配置参数，和HLSConfigure需要二选一必填。
 * @method string getName() 获取录制模板名称，长度限制：64 个字符。
 * @method void setName(string $Name) 设置录制模板名称，长度限制：64 个字符。
 * @method string getComment() 获取模板描述信息，长度限制：256 个字符。
 * @method void setComment(string $Comment) 设置模板描述信息，长度限制：256 个字符。
 * @method string getRecordType() 获取录制类型，取值为video（音视频录制）、audio（纯音频录制）、auto（自动探测）。不填时默认值为video。
 * @method void setRecordType(string $RecordType) 设置录制类型，取值为video（音视频录制）、audio（纯音频录制）、auto（自动探测）。不填时默认值为video。
 */
class CreateLiveRecordTemplateRequest extends AbstractModel
{
    /**
     * @var HLSConfigureInfo HLS配置参数，和MP4Configure需要二选一必填。
     */
    public $HLSConfigure;

    /**
     * @var MP4ConfigureInfo MP4配置参数，和HLSConfigure需要二选一必填。
     */
    public $MP4Configure;

    /**
     * @var string 录制模板名称，长度限制：64 个字符。
     */
    public $Name;

    /**
     * @var string 模板描述信息，长度限制：256 个字符。
     */
    public $Comment;

    /**
     * @var string 录制类型，取值为video（音视频录制）、audio（纯音频录制）、auto（自动探测）。不填时默认值为video。
     */
    public $RecordType;

    /**
     * @param HLSConfigureInfo $HLSConfigure HLS配置参数，和MP4Configure需要二选一必填。
     * @param MP4ConfigureInfo $MP4Configure MP4配置参数，和HLSConfigure需要二选一必填。
     * @param string $Name 录制模板名称，长度限制：64 个字符。
     * @param string $Comment 模板描述信息，长度限制：256 个字符。
     * @param string $RecordType 录制类型，取值为video（音视频录制）、audio（纯音频录制）、auto（自动探测）。不填时默认值为video。
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
        if (array_key_exists("HLSConfigure",$param) and $param["HLSConfigure"] !== null) {
            $this->HLSConfigure = new HLSConfigureInfo();
            $this->HLSConfigure->deserialize($param["HLSConfigure"]);
        }

        if (array_key_exists("MP4Configure",$param) and $param["MP4Configure"] !== null) {
            $this->MP4Configure = new MP4ConfigureInfo();
            $this->MP4Configure->deserialize($param["MP4Configure"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("RecordType",$param) and $param["RecordType"] !== null) {
            $this->RecordType = $param["RecordType"];
        }
    }
}
