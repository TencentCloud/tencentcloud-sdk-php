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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 直播互动歌曲规格信息。
 *
 * @method string getDefinition() 获取规格，取值有：
<li>audio/mi：低规格；</li>
<li>audio/lo：中规格；</li>
<li>audio/hi：高规格。</li>
 * @method void setDefinition(string $Definition) 设置规格，取值有：
<li>audio/mi：低规格；</li>
<li>audio/lo：中规格；</li>
<li>audio/hi：高规格。</li>
 * @method integer getBitrate() 获取码率，单位为 bps。
 * @method void setBitrate(integer $Bitrate) 设置码率，单位为 bps。
 * @method integer getSize() 获取文件大小，单位为字节。
 * @method void setSize(integer $Size) 设置文件大小，单位为字节。
 */
class KTVMusicDefinitionInfo extends AbstractModel
{
    /**
     * @var string 规格，取值有：
<li>audio/mi：低规格；</li>
<li>audio/lo：中规格；</li>
<li>audio/hi：高规格。</li>
     */
    public $Definition;

    /**
     * @var integer 码率，单位为 bps。
     */
    public $Bitrate;

    /**
     * @var integer 文件大小，单位为字节。
     */
    public $Size;

    /**
     * @param string $Definition 规格，取值有：
<li>audio/mi：低规格；</li>
<li>audio/lo：中规格；</li>
<li>audio/hi：高规格。</li>
     * @param integer $Bitrate 码率，单位为 bps。
     * @param integer $Size 文件大小，单位为字节。
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("Bitrate",$param) and $param["Bitrate"] !== null) {
            $this->Bitrate = $param["Bitrate"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }
    }
}
