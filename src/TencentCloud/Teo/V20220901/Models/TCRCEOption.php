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
 * RCE 认证选项实例信息。
 *
 * @method string getChannel() 获取Channel 信息。
 * @method void setChannel(string $Channel) 设置Channel 信息。
 * @method string getRegion() 获取RCE Channel 的开通地域，目前可选的取值范围：<li>ap-beijing：华北地区（北京）；</li><li>ap-jakarta：亚太东南（雅加达）；</li><li>ap-singapore：亚太东南（新加坡）；</li><li>eu-frankfurt：欧洲地区（法兰克福）；</li><li>na-siliconvalley：美国西部（硅谷）。</li>
 * @method void setRegion(string $Region) 设置RCE Channel 的开通地域，目前可选的取值范围：<li>ap-beijing：华北地区（北京）；</li><li>ap-jakarta：亚太东南（雅加达）；</li><li>ap-singapore：亚太东南（新加坡）；</li><li>eu-frankfurt：欧洲地区（法兰克福）；</li><li>na-siliconvalley：美国西部（硅谷）。</li>
 */
class TCRCEOption extends AbstractModel
{
    /**
     * @var string Channel 信息。
     */
    public $Channel;

    /**
     * @var string RCE Channel 的开通地域，目前可选的取值范围：<li>ap-beijing：华北地区（北京）；</li><li>ap-jakarta：亚太东南（雅加达）；</li><li>ap-singapore：亚太东南（新加坡）；</li><li>eu-frankfurt：欧洲地区（法兰克福）；</li><li>na-siliconvalley：美国西部（硅谷）。</li>
     */
    public $Region;

    /**
     * @param string $Channel Channel 信息。
     * @param string $Region RCE Channel 的开通地域，目前可选的取值范围：<li>ap-beijing：华北地区（北京）；</li><li>ap-jakarta：亚太东南（雅加达）；</li><li>ap-singapore：亚太东南（新加坡）；</li><li>eu-frankfurt：欧洲地区（法兰克福）；</li><li>na-siliconvalley：美国西部（硅谷）。</li>
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
        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
