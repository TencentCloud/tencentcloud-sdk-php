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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 返回站点信息
 *
 * @method string getZoneId() 获取站点id。
 * @method void setZoneId(string $ZoneId) 设置站点id。
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method boolean getPaused() 获取站点是否停用。取值有：<li>false：非停用；</li>
<li>true：停用。</li>
 * @method void setPaused(boolean $Paused) 设置站点是否停用。取值有：<li>false：非停用；</li>
<li>true：停用。</li>
 */
class ZoneInfo extends AbstractModel
{
    /**
     * @var string 站点id。
     */
    public $ZoneId;

    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var boolean 站点是否停用。取值有：<li>false：非停用；</li>
<li>true：停用。</li>
     */
    public $Paused;

    /**
     * @param string $ZoneId 站点id。
     * @param string $ZoneName 站点名称。
     * @param boolean $Paused 站点是否停用。取值有：<li>false：非停用；</li>
<li>true：停用。</li>
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Paused",$param) and $param["Paused"] !== null) {
            $this->Paused = $param["Paused"];
        }
    }
}
