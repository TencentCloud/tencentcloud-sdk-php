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
 * 广告插入频道配置信息。
 *
 * @method string getID() 获取<p>频道ID，全局唯一标识。</p>
 * @method void setID(string $ID) 设置<p>频道ID，全局唯一标识。</p>
 * @method string getName() 获取<p>频道名称。</p>
 * @method void setName(string $Name) 设置<p>频道名称。</p>
 * @method string getContentSource() 获取<p>广告源信息。</p>
 * @method void setContentSource(string $ContentSource) 设置<p>广告源信息。</p>
 * @method string getPlaybackPrefix() 获取<p>播放地址。兼容旧版本参数，推荐使用HlsPlaybackPrefix或DashPlaybackPrefix</p>
 * @method void setPlaybackPrefix(string $PlaybackPrefix) 设置<p>播放地址。兼容旧版本参数，推荐使用HlsPlaybackPrefix或DashPlaybackPrefix</p>
 * @method string getHlsPlaybackPrefix() 获取<p>hls播放地址</p>
 * @method void setHlsPlaybackPrefix(string $HlsPlaybackPrefix) 设置<p>hls播放地址</p>
 * @method string getDashPlaybackPrefix() 获取<p>dash播放地址</p>
 * @method void setDashPlaybackPrefix(string $DashPlaybackPrefix) 设置<p>dash播放地址</p>
 * @method SSAIConf getSSAIInfo() 获取<p>广告插入SSAI配置信息。</p>
 * @method void setSSAIInfo(SSAIConf $SSAIInfo) 设置<p>广告插入SSAI配置信息。</p>
 * @method string getRegion() 获取<p>地域信息。</p>
 * @method void setRegion(string $Region) 设置<p>地域信息。</p>
 * @method string getSessionInitPrefix() 获取<p>用于clickthrough地址</p>
 * @method void setSessionInitPrefix(string $SessionInitPrefix) 设置<p>用于clickthrough地址</p>
 */
class SSAIChannelInfo extends AbstractModel
{
    /**
     * @var string <p>频道ID，全局唯一标识。</p>
     */
    public $ID;

    /**
     * @var string <p>频道名称。</p>
     */
    public $Name;

    /**
     * @var string <p>广告源信息。</p>
     */
    public $ContentSource;

    /**
     * @var string <p>播放地址。兼容旧版本参数，推荐使用HlsPlaybackPrefix或DashPlaybackPrefix</p>
     */
    public $PlaybackPrefix;

    /**
     * @var string <p>hls播放地址</p>
     */
    public $HlsPlaybackPrefix;

    /**
     * @var string <p>dash播放地址</p>
     */
    public $DashPlaybackPrefix;

    /**
     * @var SSAIConf <p>广告插入SSAI配置信息。</p>
     */
    public $SSAIInfo;

    /**
     * @var string <p>地域信息。</p>
     */
    public $Region;

    /**
     * @var string <p>用于clickthrough地址</p>
     */
    public $SessionInitPrefix;

    /**
     * @param string $ID <p>频道ID，全局唯一标识。</p>
     * @param string $Name <p>频道名称。</p>
     * @param string $ContentSource <p>广告源信息。</p>
     * @param string $PlaybackPrefix <p>播放地址。兼容旧版本参数，推荐使用HlsPlaybackPrefix或DashPlaybackPrefix</p>
     * @param string $HlsPlaybackPrefix <p>hls播放地址</p>
     * @param string $DashPlaybackPrefix <p>dash播放地址</p>
     * @param SSAIConf $SSAIInfo <p>广告插入SSAI配置信息。</p>
     * @param string $Region <p>地域信息。</p>
     * @param string $SessionInitPrefix <p>用于clickthrough地址</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ContentSource",$param) and $param["ContentSource"] !== null) {
            $this->ContentSource = $param["ContentSource"];
        }

        if (array_key_exists("PlaybackPrefix",$param) and $param["PlaybackPrefix"] !== null) {
            $this->PlaybackPrefix = $param["PlaybackPrefix"];
        }

        if (array_key_exists("HlsPlaybackPrefix",$param) and $param["HlsPlaybackPrefix"] !== null) {
            $this->HlsPlaybackPrefix = $param["HlsPlaybackPrefix"];
        }

        if (array_key_exists("DashPlaybackPrefix",$param) and $param["DashPlaybackPrefix"] !== null) {
            $this->DashPlaybackPrefix = $param["DashPlaybackPrefix"];
        }

        if (array_key_exists("SSAIInfo",$param) and $param["SSAIInfo"] !== null) {
            $this->SSAIInfo = new SSAIConf();
            $this->SSAIInfo->deserialize($param["SSAIInfo"]);
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SessionInitPrefix",$param) and $param["SessionInitPrefix"] !== null) {
            $this->SessionInitPrefix = $param["SessionInitPrefix"];
        }
    }
}
