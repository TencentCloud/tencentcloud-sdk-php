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
namespace TencentCloud\Cdn\V20180606\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDomainConfig请求参数结构体
 *
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getRoute() 获取配置路径
 * @method void setRoute(string $Route) 设置配置路径
 * @method string getValue() 获取配置路径值，使用 json 进行序列化，其中固定 update 作为 key
 * @method void setValue(string $Value) 设置配置路径值，使用 json 进行序列化，其中固定 update 作为 key
 */
class ModifyDomainConfigRequest extends AbstractModel
{
    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 配置路径
     */
    public $Route;

    /**
     * @var string 配置路径值，使用 json 进行序列化，其中固定 update 作为 key
     */
    public $Value;

    /**
     * @param string $Domain 域名
     * @param string $Route 配置路径
     * @param string $Value 配置路径值，使用 json 进行序列化，其中固定 update 作为 key
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

        if (array_key_exists("Route",$param) and $param["Route"] !== null) {
            $this->Route = $param["Route"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
