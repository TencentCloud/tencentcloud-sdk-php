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
 * VerifyDomainRecord请求参数结构体
 *
 * @method string getDomain() 获取需要接入点播的加速域名。
 * @method void setDomain(string $Domain) 设置需要接入点播的加速域名。
 * @method integer getSubAppId() 获取<b>点播[应用](/document/product/266/14574) ID。从2024年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>	
 * @method void setSubAppId(integer $SubAppId) 设置<b>点播[应用](/document/product/266/14574) ID。从2024年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>	
 * @method string getVerifyType() 获取验证方式：
<li>dns：DNS 解析验证；</li>
<li>fIle：文件验证。</li>

默认值：dns。
 * @method void setVerifyType(string $VerifyType) 设置验证方式：
<li>dns：DNS 解析验证；</li>
<li>fIle：文件验证。</li>

默认值：dns。
 */
class VerifyDomainRecordRequest extends AbstractModel
{
    /**
     * @var string 需要接入点播的加速域名。
     */
    public $Domain;

    /**
     * @var integer <b>点播[应用](/document/product/266/14574) ID。从2024年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>	
     */
    public $SubAppId;

    /**
     * @var string 验证方式：
<li>dns：DNS 解析验证；</li>
<li>fIle：文件验证。</li>

默认值：dns。
     */
    public $VerifyType;

    /**
     * @param string $Domain 需要接入点播的加速域名。
     * @param integer $SubAppId <b>点播[应用](/document/product/266/14574) ID。从2024年12月25日起开通点播的客户，如访问点播应用中的资源（无论是默认应用还是新创建的应用），必须将该字段填写为应用 ID。</b>	
     * @param string $VerifyType 验证方式：
<li>dns：DNS 解析验证；</li>
<li>fIle：文件验证。</li>

默认值：dns。
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("SubAppId",$param) and $param["SubAppId"] !== null) {
            $this->SubAppId = $param["SubAppId"];
        }

        if (array_key_exists("VerifyType",$param) and $param["VerifyType"] !== null) {
            $this->VerifyType = $param["VerifyType"];
        }
    }
}
