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
 * ImportZoneConfig请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getContent() 获取<p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置内容可通过站点配置导出接口（ExportZoneConfig）获取。您可以单独导入「站点加速-全局加速配置」或「站点加速-规则引擎」，传入对应的字段即可，详情可以参考下方示例。<br>注意：ExportZoneConfig 导出的 AccelerationDomain（加速域名配置）、Origin（源站配置）暂不支持通过本接口导入，若 Content 中包含上述配置内容，将导致导入失败。</p>
 * @method void setContent(string $Content) 设置<p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置内容可通过站点配置导出接口（ExportZoneConfig）获取。您可以单独导入「站点加速-全局加速配置」或「站点加速-规则引擎」，传入对应的字段即可，详情可以参考下方示例。<br>注意：ExportZoneConfig 导出的 AccelerationDomain（加速域名配置）、Origin（源站配置）暂不支持通过本接口导入，若 Content 中包含上述配置内容，将导致导入失败。</p>
 */
class ImportZoneConfigRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置内容可通过站点配置导出接口（ExportZoneConfig）获取。您可以单独导入「站点加速-全局加速配置」或「站点加速-规则引擎」，传入对应的字段即可，详情可以参考下方示例。<br>注意：ExportZoneConfig 导出的 AccelerationDomain（加速域名配置）、Origin（源站配置）暂不支持通过本接口导入，若 Content 中包含上述配置内容，将导致导入失败。</p>
     */
    public $Content;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $Content <p>待导入的配置内容。要求采用 JSON 格式，按照 UTF-8 方式进行编码。配置内容可通过站点配置导出接口（ExportZoneConfig）获取。您可以单独导入「站点加速-全局加速配置」或「站点加速-规则引擎」，传入对应的字段即可，详情可以参考下方示例。<br>注意：ExportZoneConfig 导出的 AccelerationDomain（加速域名配置）、Origin（源站配置）暂不支持通过本接口导入，若 Content 中包含上述配置内容，将导致导入失败。</p>
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

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
