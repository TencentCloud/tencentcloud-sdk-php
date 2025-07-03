<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeOriginGroupHealthStatus请求参数结构体
 *
 * @method string getZoneId() 获取站点 ID。
 * @method void setZoneId(string $ZoneId) 设置站点 ID。
 * @method string getLBInstanceId() 获取负载均衡实例 ID。
 * @method void setLBInstanceId(string $LBInstanceId) 设置负载均衡实例 ID。
 * @method array getOriginGroupIds() 获取源站组 ID。不填写时默认获取负载均衡下所有源站组的健康状态。
 * @method void setOriginGroupIds(array $OriginGroupIds) 设置源站组 ID。不填写时默认获取负载均衡下所有源站组的健康状态。
 */
class DescribeOriginGroupHealthStatusRequest extends AbstractModel
{
    /**
     * @var string 站点 ID。
     */
    public $ZoneId;

    /**
     * @var string 负载均衡实例 ID。
     */
    public $LBInstanceId;

    /**
     * @var array 源站组 ID。不填写时默认获取负载均衡下所有源站组的健康状态。
     */
    public $OriginGroupIds;

    /**
     * @param string $ZoneId 站点 ID。
     * @param string $LBInstanceId 负载均衡实例 ID。
     * @param array $OriginGroupIds 源站组 ID。不填写时默认获取负载均衡下所有源站组的健康状态。
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

        if (array_key_exists("LBInstanceId",$param) and $param["LBInstanceId"] !== null) {
            $this->LBInstanceId = $param["LBInstanceId"];
        }

        if (array_key_exists("OriginGroupIds",$param) and $param["OriginGroupIds"] !== null) {
            $this->OriginGroupIds = $param["OriginGroupIds"];
        }
    }
}
