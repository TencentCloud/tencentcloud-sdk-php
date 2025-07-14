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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 同步任务的目标地域列表，包括地域和集群信息。如果集群为空，表示公有云共享集群，如果集群不为空，表示独享集群。
 *
 * @method string getDestinationRegion() 获取同步任务的目标地域
 * @method void setDestinationRegion(string $DestinationRegion) 设置同步任务的目标地域
 * @method string getHsmClusterId() 获取HsmClusterId为空表示公有云共享版，如果不为空表示地域下独享版集群。
 * @method void setHsmClusterId(string $HsmClusterId) 设置HsmClusterId为空表示公有云共享版，如果不为空表示地域下独享版集群。
 */
class DestinationSyncConfig extends AbstractModel
{
    /**
     * @var string 同步任务的目标地域
     */
    public $DestinationRegion;

    /**
     * @var string HsmClusterId为空表示公有云共享版，如果不为空表示地域下独享版集群。
     */
    public $HsmClusterId;

    /**
     * @param string $DestinationRegion 同步任务的目标地域
     * @param string $HsmClusterId HsmClusterId为空表示公有云共享版，如果不为空表示地域下独享版集群。
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
        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }
    }
}
