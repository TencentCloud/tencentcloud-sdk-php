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
 * SourceLocation配置信息。
 *
 * @method string getId() 获取<p>ID，唯一标识。</p>
 * @method void setId(string $Id) 设置<p>ID，唯一标识。</p>
 * @method string getName() 获取<p>SourceLocation名称。</p>
 * @method void setName(string $Name) 设置<p>SourceLocation名称。</p>
 * @method string getRegion() 获取<p>地域。</p>
 * @method void setRegion(string $Region) 设置<p>地域。</p>
 * @method string getBaseUrl() 获取<p>BaseUrl信息。</p>
 * @method void setBaseUrl(string $BaseUrl) 设置<p>BaseUrl信息。</p>
 * @method boolean getSegmentDeliverEnable() 获取<p>是否开启补片。</p>
 * @method void setSegmentDeliverEnable(boolean $SegmentDeliverEnable) 设置<p>是否开启补片。</p>
 * @method SegmentDeliverInfo getSegmentDeliverConf() 获取<p>补片配置。</p>
 * @method void setSegmentDeliverConf(SegmentDeliverInfo $SegmentDeliverConf) 设置<p>补片配置。</p>
 * @method array getAttachedLiveSources() 获取<p>绑定的直播source id列表。</p>
 * @method void setAttachedLiveSources(array $AttachedLiveSources) 设置<p>绑定的直播source id列表。</p>
 * @method array getAttachedVodSources() 获取<p>绑定的点播source id列表。</p>
 * @method void setAttachedVodSources(array $AttachedVodSources) 设置<p>绑定的点播source id列表。</p>
 * @method integer getCreateTime() 获取<p>source location创建时间，Unix时间戳。</p>
 * @method void setCreateTime(integer $CreateTime) 设置<p>source location创建时间，Unix时间戳。</p>
 * @method integer getUpdateTime() 获取<p>source location最近一次修改时间，Unix时间戳。</p>
 * @method void setUpdateTime(integer $UpdateTime) 设置<p>source location最近一次修改时间，Unix时间戳。</p>
 * @method boolean getSegmentDeliverUsePackageEnable() 获取<p>是否开启package分发分片，默认开启。</p>
 * @method void setSegmentDeliverUsePackageEnable(boolean $SegmentDeliverUsePackageEnable) 设置<p>是否开启package分发分片，默认开启。</p>
 */
class SourceLocationInfo extends AbstractModel
{
    /**
     * @var string <p>ID，唯一标识。</p>
     */
    public $Id;

    /**
     * @var string <p>SourceLocation名称。</p>
     */
    public $Name;

    /**
     * @var string <p>地域。</p>
     */
    public $Region;

    /**
     * @var string <p>BaseUrl信息。</p>
     */
    public $BaseUrl;

    /**
     * @var boolean <p>是否开启补片。</p>
     */
    public $SegmentDeliverEnable;

    /**
     * @var SegmentDeliverInfo <p>补片配置。</p>
     */
    public $SegmentDeliverConf;

    /**
     * @var array <p>绑定的直播source id列表。</p>
     */
    public $AttachedLiveSources;

    /**
     * @var array <p>绑定的点播source id列表。</p>
     */
    public $AttachedVodSources;

    /**
     * @var integer <p>source location创建时间，Unix时间戳。</p>
     */
    public $CreateTime;

    /**
     * @var integer <p>source location最近一次修改时间，Unix时间戳。</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>是否开启package分发分片，默认开启。</p>
     */
    public $SegmentDeliverUsePackageEnable;

    /**
     * @param string $Id <p>ID，唯一标识。</p>
     * @param string $Name <p>SourceLocation名称。</p>
     * @param string $Region <p>地域。</p>
     * @param string $BaseUrl <p>BaseUrl信息。</p>
     * @param boolean $SegmentDeliverEnable <p>是否开启补片。</p>
     * @param SegmentDeliverInfo $SegmentDeliverConf <p>补片配置。</p>
     * @param array $AttachedLiveSources <p>绑定的直播source id列表。</p>
     * @param array $AttachedVodSources <p>绑定的点播source id列表。</p>
     * @param integer $CreateTime <p>source location创建时间，Unix时间戳。</p>
     * @param integer $UpdateTime <p>source location最近一次修改时间，Unix时间戳。</p>
     * @param boolean $SegmentDeliverUsePackageEnable <p>是否开启package分发分片，默认开启。</p>
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("BaseUrl",$param) and $param["BaseUrl"] !== null) {
            $this->BaseUrl = $param["BaseUrl"];
        }

        if (array_key_exists("SegmentDeliverEnable",$param) and $param["SegmentDeliverEnable"] !== null) {
            $this->SegmentDeliverEnable = $param["SegmentDeliverEnable"];
        }

        if (array_key_exists("SegmentDeliverConf",$param) and $param["SegmentDeliverConf"] !== null) {
            $this->SegmentDeliverConf = new SegmentDeliverInfo();
            $this->SegmentDeliverConf->deserialize($param["SegmentDeliverConf"]);
        }

        if (array_key_exists("AttachedLiveSources",$param) and $param["AttachedLiveSources"] !== null) {
            $this->AttachedLiveSources = $param["AttachedLiveSources"];
        }

        if (array_key_exists("AttachedVodSources",$param) and $param["AttachedVodSources"] !== null) {
            $this->AttachedVodSources = $param["AttachedVodSources"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("SegmentDeliverUsePackageEnable",$param) and $param["SegmentDeliverUsePackageEnable"] !== null) {
            $this->SegmentDeliverUsePackageEnable = $param["SegmentDeliverUsePackageEnable"];
        }
    }
}
