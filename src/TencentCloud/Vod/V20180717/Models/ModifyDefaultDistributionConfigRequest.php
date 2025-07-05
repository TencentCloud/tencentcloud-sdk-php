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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDefaultDistributionConfig请求参数结构体
 *
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
 * @method string getDomain() 获取分发域名，取值为点播域名列表里的域名。不填或者填空，表示不修改域名。
 * @method void setDomain(string $Domain) 设置分发域名，取值为点播域名列表里的域名。不填或者填空，表示不修改域名。
 * @method string getScheme() 获取分发协议，取值为 HTTP 或者 HTTPS。
 * @method void setScheme(string $Scheme) 设置分发协议，取值为 HTTP 或者 HTTPS。
 * @method string getPlayKey() 获取播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
 * @method void setPlayKey(string $PlayKey) 设置播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
 */
class ModifyDefaultDistributionConfigRequest extends AbstractModel
{
    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     */
    public $SubAppId;

    /**
     * @var string 分发域名，取值为点播域名列表里的域名。不填或者填空，表示不修改域名。
     */
    public $Domain;

    /**
     * @var string 分发协议，取值为 HTTP 或者 HTTPS。
     */
    public $Scheme;

    /**
     * @var string 播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
     */
    public $PlayKey;

    /**
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2023年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>
     * @param string $Domain 分发域名，取值为点播域名列表里的域名。不填或者填空，表示不修改域名。
     * @param string $Scheme 分发协议，取值为 HTTP 或者 HTTPS。
     * @param string $PlayKey 播放密钥，由大小写字母（a - Z）或者数字（0 - 9）组成，长度在8 - 20个字符之间。
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
        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }

        if (array_key_exists("PlayKey",$param) and $param["PlayKey"] !== null) {
            $this->PlayKey = $param["PlayKey"];
        }
    }
}
