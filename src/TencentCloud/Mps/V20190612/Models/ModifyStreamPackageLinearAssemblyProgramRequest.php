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
 * ModifyStreamPackageLinearAssemblyProgram请求参数结构体
 *
 * @method string getId() 获取<p>Program Id。</p>
 * @method void setId(string $Id) 设置<p>Program Id。</p>
 * @method string getName() 获取<p>修改后的名称。</p>
 * @method void setName(string $Name) 设置<p>修改后的名称。</p>
 * @method string getSourceType() 获取<p>编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD</p>
 * @method void setSourceType(string $SourceType) 设置<p>编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD</p>
 * @method string getSourceLocationId() 获取<p>关联的source location。</p>
 * @method void setSourceLocationId(string $SourceLocationId) 设置<p>关联的source location。</p>
 * @method string getSourceName() 获取<p>关联的直播or点播，source名称，location下全局唯一。</p>
 * @method void setSourceName(string $SourceName) 设置<p>关联的直播or点播，source名称，location下全局唯一。</p>
 * @method PlaybackInfoReq getPlaybackConf() 获取<p>PlaybackConf。</p>
 * @method void setPlaybackConf(PlaybackInfoReq $PlaybackConf) 设置<p>PlaybackConf。</p>
 * @method array getAdBreaks() 获取<p>AdBreaks。</p>
 * @method void setAdBreaks(array $AdBreaks) 设置<p>AdBreaks。</p>
 * @method string getVodAcquisitionMethod() 获取<p>VOD获取方式，支持PreCaching和DynamicUpdating，默认PreCaching，仅Linear频道支持</p>
 * @method void setVodAcquisitionMethod(string $VodAcquisitionMethod) 设置<p>VOD获取方式，支持PreCaching和DynamicUpdating，默认PreCaching，仅Linear频道支持</p>
 */
class ModifyStreamPackageLinearAssemblyProgramRequest extends AbstractModel
{
    /**
     * @var string <p>Program Id。</p>
     */
    public $Id;

    /**
     * @var string <p>修改后的名称。</p>
     */
    public $Name;

    /**
     * @var string <p>编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD</p>
     */
    public $SourceType;

    /**
     * @var string <p>关联的source location。</p>
     */
    public $SourceLocationId;

    /**
     * @var string <p>关联的直播or点播，source名称，location下全局唯一。</p>
     */
    public $SourceName;

    /**
     * @var PlaybackInfoReq <p>PlaybackConf。</p>
     */
    public $PlaybackConf;

    /**
     * @var array <p>AdBreaks。</p>
     */
    public $AdBreaks;

    /**
     * @var string <p>VOD获取方式，支持PreCaching和DynamicUpdating，默认PreCaching，仅Linear频道支持</p>
     */
    public $VodAcquisitionMethod;

    /**
     * @param string $Id <p>Program Id。</p>
     * @param string $Name <p>修改后的名称。</p>
     * @param string $SourceType <p>编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD</p>
     * @param string $SourceLocationId <p>关联的source location。</p>
     * @param string $SourceName <p>关联的直播or点播，source名称，location下全局唯一。</p>
     * @param PlaybackInfoReq $PlaybackConf <p>PlaybackConf。</p>
     * @param array $AdBreaks <p>AdBreaks。</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
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

        if (array_key_exists("SourceName",$param) and $param["SourceName"] !== null) {
            $this->SourceName = $param["SourceName"];
        }

        if (array_key_exists("PlaybackConf",$param) and $param["PlaybackConf"] !== null) {
            $this->PlaybackConf = new PlaybackInfoReq();
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

        if (array_key_exists("VodAcquisitionMethod",$param) and $param["VodAcquisitionMethod"] !== null) {
            $this->VodAcquisitionMethod = $param["VodAcquisitionMethod"];
        }
    }
}
