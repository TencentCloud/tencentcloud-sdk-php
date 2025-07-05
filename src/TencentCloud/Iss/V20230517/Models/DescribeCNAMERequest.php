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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCNAME请求参数结构体
 *
 * @method string getClusterId() 获取服务节点 ID（从查询域名可绑定服务节点接口DescribeDomainRegion中获取）
 * @method void setClusterId(string $ClusterId) 设置服务节点 ID（从查询域名可绑定服务节点接口DescribeDomainRegion中获取）
 * @method integer getDomainType() 获取域名类型，0:拉流域名 1:推流域名
 * @method void setDomainType(integer $DomainType) 设置域名类型，0:拉流域名 1:推流域名
 */
class DescribeCNAMERequest extends AbstractModel
{
    /**
     * @var string 服务节点 ID（从查询域名可绑定服务节点接口DescribeDomainRegion中获取）
     */
    public $ClusterId;

    /**
     * @var integer 域名类型，0:拉流域名 1:推流域名
     */
    public $DomainType;

    /**
     * @param string $ClusterId 服务节点 ID（从查询域名可绑定服务节点接口DescribeDomainRegion中获取）
     * @param integer $DomainType 域名类型，0:拉流域名 1:推流域名
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("DomainType",$param) and $param["DomainType"] !== null) {
            $this->DomainType = $param["DomainType"];
        }
    }
}
