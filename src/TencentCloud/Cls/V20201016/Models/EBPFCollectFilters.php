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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * eBPF 三维过滤器集合
 *
 * @method EBPFProcessNameFilter getProcessName() 获取进程名过滤
 * @method void setProcessName(EBPFProcessNameFilter $ProcessName) 设置进程名过滤
 * @method EBPFDestEndpointFilter getDestEndpoint() 获取目的端点过滤
 * @method void setDestEndpoint(EBPFDestEndpointFilter $DestEndpoint) 设置目的端点过滤
 * @method EBPFDNSFilter getDNS() 获取DNS 过滤
 * @method void setDNS(EBPFDNSFilter $DNS) 设置DNS 过滤
 */
class EBPFCollectFilters extends AbstractModel
{
    /**
     * @var EBPFProcessNameFilter 进程名过滤
     */
    public $ProcessName;

    /**
     * @var EBPFDestEndpointFilter 目的端点过滤
     */
    public $DestEndpoint;

    /**
     * @var EBPFDNSFilter DNS 过滤
     */
    public $DNS;

    /**
     * @param EBPFProcessNameFilter $ProcessName 进程名过滤
     * @param EBPFDestEndpointFilter $DestEndpoint 目的端点过滤
     * @param EBPFDNSFilter $DNS DNS 过滤
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
        if (array_key_exists("ProcessName",$param) and $param["ProcessName"] !== null) {
            $this->ProcessName = new EBPFProcessNameFilter();
            $this->ProcessName->deserialize($param["ProcessName"]);
        }

        if (array_key_exists("DestEndpoint",$param) and $param["DestEndpoint"] !== null) {
            $this->DestEndpoint = new EBPFDestEndpointFilter();
            $this->DestEndpoint->deserialize($param["DestEndpoint"]);
        }

        if (array_key_exists("DNS",$param) and $param["DNS"] !== null) {
            $this->DNS = new EBPFDNSFilter();
            $this->DNS->deserialize($param["DNS"]);
        }
    }
}
