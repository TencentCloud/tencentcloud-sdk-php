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
 * @method string getID() 获取频道ID，全局唯一标识。
 * @method void setID(string $ID) 设置频道ID，全局唯一标识。
 * @method string getName() 获取频道名称。
 * @method void setName(string $Name) 设置频道名称。
 * @method string getContentSource() 获取广告源信息。
 * @method void setContentSource(string $ContentSource) 设置广告源信息。
 * @method string getPlaybackPrefix() 获取播放地址。
 * @method void setPlaybackPrefix(string $PlaybackPrefix) 设置播放地址。
 * @method SSAIConf getSSAIInfo() 获取广告插入SSAI配置信息。
 * @method void setSSAIInfo(SSAIConf $SSAIInfo) 设置广告插入SSAI配置信息。
 * @method string getRegion() 获取地域信息。
 * @method void setRegion(string $Region) 设置地域信息。
 * @method string getSessionInitPrefix() 获取用于clickthrough地址
 * @method void setSessionInitPrefix(string $SessionInitPrefix) 设置用于clickthrough地址
 */
class SSAIChannelInfo extends AbstractModel
{
    /**
     * @var string 频道ID，全局唯一标识。
     */
    public $ID;

    /**
     * @var string 频道名称。
     */
    public $Name;

    /**
     * @var string 广告源信息。
     */
    public $ContentSource;

    /**
     * @var string 播放地址。
     */
    public $PlaybackPrefix;

    /**
     * @var SSAIConf 广告插入SSAI配置信息。
     */
    public $SSAIInfo;

    /**
     * @var string 地域信息。
     */
    public $Region;

    /**
     * @var string 用于clickthrough地址
     */
    public $SessionInitPrefix;

    /**
     * @param string $ID 频道ID，全局唯一标识。
     * @param string $Name 频道名称。
     * @param string $ContentSource 广告源信息。
     * @param string $PlaybackPrefix 播放地址。
     * @param SSAIConf $SSAIInfo 广告插入SSAI配置信息。
     * @param string $Region 地域信息。
     * @param string $SessionInitPrefix 用于clickthrough地址
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
