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
 * 回源请求参数配置参数。
 *
 * @method UpstreamRequestQueryString getQueryString() 获取查询字符串配置。可选配置项，不填表示不配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQueryString(UpstreamRequestQueryString $QueryString) 设置查询字符串配置。可选配置项，不填表示不配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method UpstreamRequestCookie getCookie() 获取Cookie 配置。可选配置项，不填表示不配置。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCookie(UpstreamRequestCookie $Cookie) 设置Cookie 配置。可选配置项，不填表示不配置。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpstreamRequestParameters extends AbstractModel
{
    /**
     * @var UpstreamRequestQueryString 查询字符串配置。可选配置项，不填表示不配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QueryString;

    /**
     * @var UpstreamRequestCookie Cookie 配置。可选配置项，不填表示不配置。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Cookie;

    /**
     * @param UpstreamRequestQueryString $QueryString 查询字符串配置。可选配置项，不填表示不配置。
注意：此字段可能返回 null，表示取不到有效值。
     * @param UpstreamRequestCookie $Cookie Cookie 配置。可选配置项，不填表示不配置。
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
        if (array_key_exists("QueryString",$param) and $param["QueryString"] !== null) {
            $this->QueryString = new UpstreamRequestQueryString();
            $this->QueryString->deserialize($param["QueryString"]);
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = new UpstreamRequestCookie();
            $this->Cookie->deserialize($param["Cookie"]);
        }
    }
}
