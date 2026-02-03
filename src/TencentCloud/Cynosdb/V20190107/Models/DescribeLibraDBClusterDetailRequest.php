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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLibraDBClusterDetail请求参数结构体
 *
 * @method string getClusterId() 获取分析集群 ID
 * @method void setClusterId(string $ClusterId) 设置分析集群 ID
 * @method string getGetServerInfo() 获取是否获取更多服务器信息，可选值yes no
 * @method void setGetServerInfo(string $GetServerInfo) 设置是否获取更多服务器信息，可选值yes no
 */
class DescribeLibraDBClusterDetailRequest extends AbstractModel
{
    /**
     * @var string 分析集群 ID
     */
    public $ClusterId;

    /**
     * @var string 是否获取更多服务器信息，可选值yes no
     */
    public $GetServerInfo;

    /**
     * @param string $ClusterId 分析集群 ID
     * @param string $GetServerInfo 是否获取更多服务器信息，可选值yes no
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

        if (array_key_exists("GetServerInfo",$param) and $param["GetServerInfo"] !== null) {
            $this->GetServerInfo = $param["GetServerInfo"];
        }
    }
}
