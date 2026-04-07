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
 * @method string getId() 获取Program Id。
 * @method void setId(string $Id) 设置Program Id。
 * @method string getName() 获取修改后的名称。
 * @method void setName(string $Name) 设置修改后的名称。
 * @method string getSourceType() 获取编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD
 * @method void setSourceType(string $SourceType) 设置编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD
 * @method string getSourceLocationId() 获取关联的source location。	
 * @method void setSourceLocationId(string $SourceLocationId) 设置关联的source location。	
 * @method string getSourceName() 获取关联的直播or点播，source名称，location下全局唯一。
 * @method void setSourceName(string $SourceName) 设置关联的直播or点播，source名称，location下全局唯一。
 * @method PlaybackInfoReq getPlaybackConf() 获取PlaybackConf。
 * @method void setPlaybackConf(PlaybackInfoReq $PlaybackConf) 设置PlaybackConf。
 * @method array getAdBreaks() 获取AdBreaks。
 * @method void setAdBreaks(array $AdBreaks) 设置AdBreaks。
 */
class ModifyStreamPackageLinearAssemblyProgramRequest extends AbstractModel
{
    /**
     * @var string Program Id。
     */
    public $Id;

    /**
     * @var string 修改后的名称。
     */
    public $Name;

    /**
     * @var string 编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD
     */
    public $SourceType;

    /**
     * @var string 关联的source location。	
     */
    public $SourceLocationId;

    /**
     * @var string 关联的直播or点播，source名称，location下全局唯一。
     */
    public $SourceName;

    /**
     * @var PlaybackInfoReq PlaybackConf。
     */
    public $PlaybackConf;

    /**
     * @var array AdBreaks。
     */
    public $AdBreaks;

    /**
     * @param string $Id Program Id。
     * @param string $Name 修改后的名称。
     * @param string $SourceType 编排的目标source的类型，分直播和点播。Tier为Basic时只支持VOD，Tier为Standard时支持Live和VOD
     * @param string $SourceLocationId 关联的source location。	
     * @param string $SourceName 关联的直播or点播，source名称，location下全局唯一。
     * @param PlaybackInfoReq $PlaybackConf PlaybackConf。
     * @param array $AdBreaks AdBreaks。
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
    }
}
