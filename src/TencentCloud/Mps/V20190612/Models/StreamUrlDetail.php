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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述 URL 的完整信息
 *
 * @method string getLabel() 获取会描述运营商信息等
 * @method void setLabel(string $Label) 设置会描述运营商信息等
 * @method string getUrl() 获取URL
 * @method void setUrl(string $Url) 设置URL
 * @method string getType() 获取Playback: 拉流播放地址； RelayDestination：转推目的地址；SourceCaptureUrl：回源拉流地址；IngestEndpoint：推流地址
 * @method void setType(string $Type) 设置Playback: 拉流播放地址； RelayDestination：转推目的地址；SourceCaptureUrl：回源拉流地址；IngestEndpoint：推流地址
 */
class StreamUrlDetail extends AbstractModel
{
    /**
     * @var string 会描述运营商信息等
     */
    public $Label;

    /**
     * @var string URL
     */
    public $Url;

    /**
     * @var string Playback: 拉流播放地址； RelayDestination：转推目的地址；SourceCaptureUrl：回源拉流地址；IngestEndpoint：推流地址
     */
    public $Type;

    /**
     * @param string $Label 会描述运营商信息等
     * @param string $Url URL
     * @param string $Type Playback: 拉流播放地址； RelayDestination：转推目的地址；SourceCaptureUrl：回源拉流地址；IngestEndpoint：推流地址
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
        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
