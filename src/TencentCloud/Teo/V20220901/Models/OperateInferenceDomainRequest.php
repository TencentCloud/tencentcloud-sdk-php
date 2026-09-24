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
 * OperateInferenceDomain请求参数结构体
 *
 * @method string getZoneId() 获取<p>站点 ID。</p>
 * @method void setZoneId(string $ZoneId) 设置<p>站点 ID。</p>
 * @method string getServiceId() 获取<p>推理服务 ID。</p>
 * @method void setServiceId(string $ServiceId) 设置<p>推理服务 ID。</p>
 * @method string getDomain() 获取<p>推理服务域名。</p>
 * @method void setDomain(string $Domain) 设置<p>推理服务域名。</p>
 * @method string getOperation() 获取<p>操作类型。</p><p>枚举值：</p><ul><li>Resume： 启用域名；</li><li>Stop： 停用域名；</li><li>Delete： 删除域名。</li></ul>
 * @method void setOperation(string $Operation) 设置<p>操作类型。</p><p>枚举值：</p><ul><li>Resume： 启用域名；</li><li>Stop： 停用域名；</li><li>Delete： 删除域名。</li></ul>
 */
class OperateInferenceDomainRequest extends AbstractModel
{
    /**
     * @var string <p>站点 ID。</p>
     */
    public $ZoneId;

    /**
     * @var string <p>推理服务 ID。</p>
     */
    public $ServiceId;

    /**
     * @var string <p>推理服务域名。</p>
     */
    public $Domain;

    /**
     * @var string <p>操作类型。</p><p>枚举值：</p><ul><li>Resume： 启用域名；</li><li>Stop： 停用域名；</li><li>Delete： 删除域名。</li></ul>
     */
    public $Operation;

    /**
     * @param string $ZoneId <p>站点 ID。</p>
     * @param string $ServiceId <p>推理服务 ID。</p>
     * @param string $Domain <p>推理服务域名。</p>
     * @param string $Operation <p>操作类型。</p><p>枚举值：</p><ul><li>Resume： 启用域名；</li><li>Stop： 停用域名；</li><li>Delete： 删除域名。</li></ul>
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

        if (array_key_exists("ServiceId",$param) and $param["ServiceId"] !== null) {
            $this->ServiceId = $param["ServiceId"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }
    }
}
