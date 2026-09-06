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
 * ModifyModelAttributes请求参数结构体
 *
 * @method string getServiceProviderId() 获取<p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
 * @method string getServiceProviderName() 获取<p>BYOK的自定义名字</p><p>入参限制：1～255个字符</p>
 * @method void setServiceProviderName(string $ServiceProviderName) 设置<p>BYOK的自定义名字</p><p>入参限制：1～255个字符</p>
 * @method array getApiBases() 获取<p>多协议 Api Base URL</p>
 * @method void setApiBases(array $ApiBases) 设置<p>多协议 Api Base URL</p>
 * @method string getApiBase() 获取<p>非chat输出模态的Api Base URL</p>
 * @method void setApiBase(string $ApiBase) 设置<p>非chat输出模态的Api Base URL</p>
 * @method string getEndpointPath() 获取<p>非chat输出模态的请求后缀</p>
 * @method void setEndpointPath(string $EndpointPath) 设置<p>非chat输出模态的请求后缀</p>
 */
class ModifyModelAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
     */
    public $ServiceProviderId;

    /**
     * @var string <p>BYOK的自定义名字</p><p>入参限制：1～255个字符</p>
     */
    public $ServiceProviderName;

    /**
     * @var array <p>多协议 Api Base URL</p>
     */
    public $ApiBases;

    /**
     * @var string <p>非chat输出模态的Api Base URL</p>
     */
    public $ApiBase;

    /**
     * @var string <p>非chat输出模态的请求后缀</p>
     */
    public $EndpointPath;

    /**
     * @param string $ServiceProviderId <p>BYOK的ID</p><p>参数格式：byok-kot39u7j</p>
     * @param string $ServiceProviderName <p>BYOK的自定义名字</p><p>入参限制：1～255个字符</p>
     * @param array $ApiBases <p>多协议 Api Base URL</p>
     * @param string $ApiBase <p>非chat输出模态的Api Base URL</p>
     * @param string $EndpointPath <p>非chat输出模态的请求后缀</p>
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
        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("ServiceProviderName",$param) and $param["ServiceProviderName"] !== null) {
            $this->ServiceProviderName = $param["ServiceProviderName"];
        }

        if (array_key_exists("ApiBases",$param) and $param["ApiBases"] !== null) {
            $this->ApiBases = [];
            foreach ($param["ApiBases"] as $key => $value){
                $obj = new ApiBaseItem();
                $obj->deserialize($value);
                array_push($this->ApiBases, $obj);
            }
        }

        if (array_key_exists("ApiBase",$param) and $param["ApiBase"] !== null) {
            $this->ApiBase = $param["ApiBase"];
        }

        if (array_key_exists("EndpointPath",$param) and $param["EndpointPath"] !== null) {
            $this->EndpointPath = $param["EndpointPath"];
        }
    }
}
