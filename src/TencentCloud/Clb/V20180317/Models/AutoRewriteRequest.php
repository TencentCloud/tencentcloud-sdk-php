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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AutoRewrite请求参数结构体
 *
 * @method string getLoadBalancerId() 获取<p>负载均衡实例ID。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例ID。</p>
 * @method string getListenerId() 获取<p>HTTPS:443监听器的ID。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>HTTPS:443监听器的ID。</p>
 * @method array getDomains() 获取<p>HTTPS:443监听器下需要重定向的域名，若不填，则对HTTPS:443监听器下的所有域名都设置重定向。</p>
 * @method void setDomains(array $Domains) 设置<p>HTTPS:443监听器下需要重定向的域名，若不填，则对HTTPS:443监听器下的所有域名都设置重定向。</p>
 * @method array getRewriteCodes() 获取<p>重定向状态码，可取值301,302,307。</p><p>默认值：302</p>
 * @method void setRewriteCodes(array $RewriteCodes) 设置<p>重定向状态码，可取值301,302,307。</p><p>默认值：302</p>
 * @method array getTakeUrls() 获取<p>重定向是否携带匹配的URL。</p>
 * @method void setTakeUrls(array $TakeUrls) 设置<p>重定向是否携带匹配的URL。</p>
 */
class AutoRewriteRequest extends AbstractModel
{
    /**
     * @var string <p>负载均衡实例ID。</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>HTTPS:443监听器的ID。</p>
     */
    public $ListenerId;

    /**
     * @var array <p>HTTPS:443监听器下需要重定向的域名，若不填，则对HTTPS:443监听器下的所有域名都设置重定向。</p>
     */
    public $Domains;

    /**
     * @var array <p>重定向状态码，可取值301,302,307。</p><p>默认值：302</p>
     */
    public $RewriteCodes;

    /**
     * @var array <p>重定向是否携带匹配的URL。</p>
     */
    public $TakeUrls;

    /**
     * @param string $LoadBalancerId <p>负载均衡实例ID。</p>
     * @param string $ListenerId <p>HTTPS:443监听器的ID。</p>
     * @param array $Domains <p>HTTPS:443监听器下需要重定向的域名，若不填，则对HTTPS:443监听器下的所有域名都设置重定向。</p>
     * @param array $RewriteCodes <p>重定向状态码，可取值301,302,307。</p><p>默认值：302</p>
     * @param array $TakeUrls <p>重定向是否携带匹配的URL。</p>
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
        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("Domains",$param) and $param["Domains"] !== null) {
            $this->Domains = $param["Domains"];
        }

        if (array_key_exists("RewriteCodes",$param) and $param["RewriteCodes"] !== null) {
            $this->RewriteCodes = $param["RewriteCodes"];
        }

        if (array_key_exists("TakeUrls",$param) and $param["TakeUrls"] !== null) {
            $this->TakeUrls = $param["TakeUrls"];
        }
    }
}
