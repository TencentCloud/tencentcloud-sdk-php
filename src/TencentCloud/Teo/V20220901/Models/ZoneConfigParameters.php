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
 * 站点配置相关信息。
 *
 * @method string getZoneName() 获取站点名称。
 * @method void setZoneName(string $ZoneName) 设置站点名称。
 * @method ZoneConfig getZoneConfig() 获取站点配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setZoneConfig(ZoneConfig $ZoneConfig) 设置站点配置信息。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ZoneConfigParameters extends AbstractModel
{
    /**
     * @var string 站点名称。
     */
    public $ZoneName;

    /**
     * @var ZoneConfig 站点配置信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ZoneConfig;

    /**
     * @param string $ZoneName 站点名称。
     * @param ZoneConfig $ZoneConfig 站点配置信息。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("ZoneConfig",$param) and $param["ZoneConfig"] !== null) {
            $this->ZoneConfig = new ZoneConfig();
            $this->ZoneConfig->deserialize($param["ZoneConfig"]);
        }
    }
}
