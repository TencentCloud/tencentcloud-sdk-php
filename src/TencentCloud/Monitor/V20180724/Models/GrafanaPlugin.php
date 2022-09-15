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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Grafana 插件
 *
 * @method string getPluginId() 获取Grafana 插件 ID
 * @method void setPluginId(string $PluginId) 设置Grafana 插件 ID
 * @method string getVersion() 获取Grafana 插件版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置Grafana 插件版本
注意：此字段可能返回 null，表示取不到有效值。
 */
class GrafanaPlugin extends AbstractModel
{
    /**
     * @var string Grafana 插件 ID
     */
    public $PluginId;

    /**
     * @var string Grafana 插件版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @param string $PluginId Grafana 插件 ID
     * @param string $Version Grafana 插件版本
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
        if (array_key_exists("PluginId",$param) and $param["PluginId"] !== null) {
            $this->PluginId = $param["PluginId"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
