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
 * 多通道安全网关可用地域
 *
 * @method string getRegionId() 获取地域 ID 。
 * @method void setRegionId(string $RegionId) 设置地域 ID 。
 * @method string getCNName() 获取中文地域名称。
 * @method void setCNName(string $CNName) 设置中文地域名称。
 * @method string getENName() 获取英文地域名称。
 * @method void setENName(string $ENName) 设置英文地域名称。
 */
class GatewayRegion extends AbstractModel
{
    /**
     * @var string 地域 ID 。
     */
    public $RegionId;

    /**
     * @var string 中文地域名称。
     */
    public $CNName;

    /**
     * @var string 英文地域名称。
     */
    public $ENName;

    /**
     * @param string $RegionId 地域 ID 。
     * @param string $CNName 中文地域名称。
     * @param string $ENName 英文地域名称。
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
        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("CNName",$param) and $param["CNName"] !== null) {
            $this->CNName = $param["CNName"];
        }

        if (array_key_exists("ENName",$param) and $param["ENName"] !== null) {
            $this->ENName = $param["ENName"];
        }
    }
}
