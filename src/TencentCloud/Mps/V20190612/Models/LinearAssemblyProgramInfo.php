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
 * @method string getName() 获取<p>program名称。</p>
 * @method void setName(string $Name) 设置<p>program名称。</p>
 * @method string getSourceType() 获取<p>编排的目标source的类型，分直播和点播。</p>
 * @method void setSourceType(string $SourceType) 设置<p>编排的目标source的类型，分直播和点播。</p>
 * @method string getSourceLocationId() 获取<p>关联的source location id。</p>
 * @method void setSourceLocationId(string $SourceLocationId) 设置<p>关联的source location id。</p>
 * @method string getSourceId() 获取<p>SourceId，唯一标识一个source。</p>
 * @method void setSourceId(string $SourceId) 设置<p>SourceId，唯一标识一个source。</p>
 * @method string getSourceName() 获取<p>关联的直播or点播，source名称，location下全局唯一。</p>
 * @method void setSourceName(string $SourceName) 设置<p>关联的直播or点播，source名称，location下全局唯一。</p>
 * @method string getAttachedChannel() 获取<p>绑定的channel。</p>
 * @method void setAttachedChannel(string $AttachedChannel) 设置<p>绑定的channel。</p>
 * @method PlaybackInfo getPlaybackConf() 获取<p>播放配置。</p>
 * @method void setPlaybackConf(PlaybackInfo $PlaybackConf) 设置<p>播放配置。</p>
 * @method array getAdBreaks() 获取<p>AdBreaks。</p>
 * @method void setAdBreaks(array $AdBreaks) 设置<p>AdBreaks。</p>
 * @method string getId() 获取<p>Id。</p>
 * @method void setId(string $Id) 设置<p>Id。</p>
 * @method string getRegion() 获取<p>Region。</p>
 * @method void setRegion(string $Region) 设置<p>Region。</p>
 * @method string getSourceLocationName() 获取<p>SourceLocation名称。</p>
 * @method void setSourceLocationName(string $SourceLocationName) 设置<p>SourceLocation名称。</p>
 * @method string getVodAcquisitionMethod() 获取<p>VOD获取方式，支持PreCaching和DynamicUpdating，默认PreCaching，仅Linear频道支持</p>
 * @method void setVodAcquisitionMethod(string $VodAcquisitionMethod) 设置<p>VOD获取方式，支持PreCaching和DynamicUpdating，默认PreCaching，仅Linear频道支持</p>
 */
class LinearAssemblyProgramInfo extends AbstractModel
{
    /**
     * @var string <p>program名称。</p>
     */
    public $Name;

    /**
     * @var string <p>编排的目标source的类型，分直播和点播。</p>
     */
    public $SourceType;

    /**
     * @var string <p>关联的source location id。</p>
     */
    public $SourceLocationId;

    /**
     * @var string <p>SourceId，唯一标识一个source。</p>
     */
    public $SourceId;

    /**
     * @var string <p>关联的直播or点播，source名称，location下全局唯一。</p>
     */
    public $SourceName;

    /**
     * @var string <p>绑定的channel。</p>
     */
    public $AttachedChannel;

    /**
     * @var PlaybackInfo <p>播放配置。</p>
     */
    public $PlaybackConf;

    /**
     * @var array <p>AdBreaks。</p>
     */
    public $AdBreaks;

    /**
     * @var string <p>Id。</p>
     */
    public $Id;

    /**
     * @var string <p>Region。</p>
     */
    public $Region;

    /**
     * @var string <p>SourceLocation名称。</p>
     */
    public $SourceLocationName;

    /**
     * @var string <p>VOD获取方式，支持PreCaching和DynamicUpdating，默认PreCaching，仅Linear频道支持</p>
     */
    public $VodAcquisitionMethod;

    /**
     * @param string $Name <p>program名称。</p>
     * @param string $SourceType <p>编排的目标source的类型，分直播和点播。</p>
     * @param string $SourceLocationId <p>关联的source location id。</p>
     * @param string $SourceId <p>SourceId，唯一标识一个source。</p>
     * @param string $SourceName <p>关联的直播or点播，source名称，location下全局唯一。</p>
     * @param string $AttachedChannel <p>绑定的channel。</p>
     * @param PlaybackInfo $PlaybackConf <p>播放配置。</p>
     * @param array $AdBreaks <p>AdBreaks。</p>
     * @param string $Id <p>Id。</p>
     * @param string $Region <p>Region。</p>
     * @param string $SourceLocationName <p>SourceLocation名称。</p>
     * @param string $VodAcquisitionMethod <p>VOD获取方式，支持PreCaching和DynamicUpdating，默认PreCaching，仅Linear频道支持</p>
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

        if (array_key_exists("VodAcquisitionMethod",$param) and $param["VodAcquisitionMethod"] !== null) {
            $this->VodAcquisitionMethod = $param["VodAcquisitionMethod"];
        }
    }
}
