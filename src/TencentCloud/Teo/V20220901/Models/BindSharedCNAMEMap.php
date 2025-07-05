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
 * 共享 CNAME 和接入域名的绑定关系
 *
 * @method string getSharedCNAME() 获取需要绑定或解绑的共享 CNAME。
 * @method void setSharedCNAME(string $SharedCNAME) 设置需要绑定或解绑的共享 CNAME。
 * @method array getDomainNames() 获取加速域名，可传递多个，最多20个。
 * @method void setDomainNames(array $DomainNames) 设置加速域名，可传递多个，最多20个。
 */
class BindSharedCNAMEMap extends AbstractModel
{
    /**
     * @var string 需要绑定或解绑的共享 CNAME。
     */
    public $SharedCNAME;

    /**
     * @var array 加速域名，可传递多个，最多20个。
     */
    public $DomainNames;

    /**
     * @param string $SharedCNAME 需要绑定或解绑的共享 CNAME。
     * @param array $DomainNames 加速域名，可传递多个，最多20个。
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
        if (array_key_exists("SharedCNAME",$param) and $param["SharedCNAME"] !== null) {
            $this->SharedCNAME = $param["SharedCNAME"];
        }

        if (array_key_exists("DomainNames",$param) and $param["DomainNames"] !== null) {
            $this->DomainNames = $param["DomainNames"];
        }
    }
}
