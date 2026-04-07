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
 * 频道线性组装program信息。
 *
 * @method string getName() 获取program名称。
 * @method void setName(string $Name) 设置program名称。
 * @method string getSourceType() 获取编排的目标source的类型，分直播和点播。
 * @method void setSourceType(string $SourceType) 设置编排的目标source的类型，分直播和点播。
 * @method string getSourceLocationId() 获取关联的source location id。
 * @method void setSourceLocationId(string $SourceLocationId) 设置关联的source location id。
 * @method string getSourceId() 获取SourceId，唯一标识一个source。
 * @method void setSourceId(string $SourceId) 设置SourceId，唯一标识一个source。
 * @method string getSourceName() 获取关联的直播or点播，source名称，location下全局唯一。
 * @method void setSourceName(string $SourceName) 设置关联的直播or点播，source名称，location下全局唯一。
 * @method string getAttachedChannel() 获取绑定的channel。
 * @method void setAttachedChannel(string $AttachedChannel) 设置绑定的channel。
 * @method PlaybackInfo getPlaybackConf() 获取播放配置。
 * @method void setPlaybackConf(PlaybackInfo $PlaybackConf) 设置播放配置。
 * @method array getAdBreaks() 获取AdBreaks。
 * @method void setAdBreaks(array $AdBreaks) 设置AdBreaks。
 * @method string getId() 获取Id。
 * @method void setId(string $Id) 设置Id。
 * @method string getRegion() 获取Region。
 * @method void setRegion(string $Region) 设置Region。
 * @method string getSourceLocationName() 获取SourceLocation名称。
 * @method void setSourceLocationName(string $SourceLocationName) 设置SourceLocation名称。
 */
class LinearAssemblyProgramInfo extends AbstractModel
{
    /**
     * @var string program名称。
     */
    public $Name;

    /**
     * @var string 编排的目标source的类型，分直播和点播。
     */
    public $SourceType;

    /**
     * @var string 关联的source location id。
     */
    public $SourceLocationId;

    /**
     * @var string SourceId，唯一标识一个source。
     */
    public $SourceId;

    /**
     * @var string 关联的直播or点播，source名称，location下全局唯一。
     */
    public $SourceName;

    /**
     * @var string 绑定的channel。
     */
    public $AttachedChannel;

    /**
     * @var PlaybackInfo 播放配置。
     */
    public $PlaybackConf;

    /**
     * @var array AdBreaks。
     */
    public $AdBreaks;

    /**
     * @var string Id。
     */
    public $Id;

    /**
     * @var string Region。
     */
    public $Region;

    /**
     * @var string SourceLocation名称。
     */
    public $SourceLocationName;

    /**
     * @param string $Name program名称。
     * @param string $SourceType 编排的目标source的类型，分直播和点播。
     * @param string $SourceLocationId 关联的source location id。
     * @param string $SourceId SourceId，唯一标识一个source。
     * @param string $SourceName 关联的直播or点播，source名称，location下全局唯一。
     * @param string $AttachedChannel 绑定的channel。
     * @param PlaybackInfo $PlaybackConf 播放配置。
     * @param array $AdBreaks AdBreaks。
     * @param string $Id Id。
     * @param string $Region Region。
     * @param string $SourceLocationName SourceLocation名称。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SourceLocationId",$param) and $param["SourceLocationId"] !== null) {
            $this->SourceLocationId = $param["SourceLocationId"];
        }

        if (array_key_exists("SourceId",$param) and $param["SourceId"] !== null) {
            $this->SourceId = $param["SourceId"];
        }

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("AttachedChannel",$param) and $param["AttachedChannel"] !== null) {
            $this->AttachedChannel = $param["AttachedChannel"];
        }

        if (array_key_exists("PlaybackConf",$param) and $param["PlaybackConf"] !== null) {
            $this->PlaybackConf = new PlaybackInfo();
            $this->PlaybackConf->deserialize($param["PlaybackConf"]);
        }

        if (array_key_exists("AdBreaks",$param) and $param["AdBreaks"] !== null) {
            $this->AdBreaks = [];
            foreach ($param["AdBreaks"] as $key => $value){
                $obj = new AdBreakInfo();
                $obj->deserialize($value);
                array_push($this->AdBreaks, $obj);
            }
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SourceLocationName",$param) and $param["SourceLocationName"] !== null) {
            $this->SourceLocationName = $param["SourceLocationName"];
        }
    }
}
