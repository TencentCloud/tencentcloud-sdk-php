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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用对应的链路上下游应用集合
 *
 * @method string getServiceName() 获取应用名
 * @method void setServiceName(string $ServiceName) 设置应用名
 * @method array getUpstreamServices() 获取上游应用集合
 * @method void setUpstreamServices(array $UpstreamServices) 设置上游应用集合
 * @method array getDownstreamServices() 获取下游应用集合
 * @method void setDownstreamServices(array $DownstreamServices) 设置下游应用集合
 */
class ServiceRelation extends AbstractModel
{
    /**
     * @var string 应用名
     */
    public $ServiceName;

    /**
     * @var array 上游应用集合
     */
    public $UpstreamServices;

    /**
     * @var array 下游应用集合
     */
    public $DownstreamServices;

    /**
     * @param string $ServiceName 应用名
     * @param array $UpstreamServices 上游应用集合
     * @param array $DownstreamServices 下游应用集合
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("UpstreamServices",$param) and $param["UpstreamServices"] !== null) {
            $this->UpstreamServices = $param["UpstreamServices"];
        }

        if (array_key_exists("DownstreamServices",$param) and $param["DownstreamServices"] !== null) {
            $this->DownstreamServices = $param["DownstreamServices"];
        }
    }
}
