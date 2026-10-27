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
namespace TencentCloud\Cdz\V20221123\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCloudDedicatedZoneHosts请求参数结构体
 *
 * @method string getCloudDedicatedZoneID() 获取<p>专属可用区ID</p>
 * @method void setCloudDedicatedZoneID(string $CloudDedicatedZoneID) 设置<p>专属可用区ID</p>
 * @method array getHostUuids() 获取<p>一个或多个Host面的CVM实例信息。最大支持查询100台Host。</p>
 * @method void setHostUuids(array $HostUuids) 设置<p>一个或多个Host面的CVM实例信息。最大支持查询100台Host。</p>
 * @method array getInstanceIds() 获取<p>查询一个实例或者多个实例所在的Host上面的CVM实例信息。最大支持查询100台实例。</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>查询一个实例或者多个实例所在的Host上面的CVM实例信息。最大支持查询100台实例。</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
 * @method integer getLimit() 获取<p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
 */
class DescribeCloudDedicatedZoneHostsRequest extends AbstractModel
{
    /**
     * @var string <p>专属可用区ID</p>
     */
    public $CloudDedicatedZoneID;

    /**
     * @var array <p>一个或多个Host面的CVM实例信息。最大支持查询100台Host。</p>
     */
    public $HostUuids;

    /**
     * @var array <p>查询一个实例或者多个实例所在的Host上面的CVM实例信息。最大支持查询100台实例。</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
     */
    public $Limit;

    /**
     * @param string $CloudDedicatedZoneID <p>专属可用区ID</p>
     * @param array $HostUuids <p>一个或多个Host面的CVM实例信息。最大支持查询100台Host。</p>
     * @param array $InstanceIds <p>查询一个实例或者多个实例所在的Host上面的CVM实例信息。最大支持查询100台实例。</p>
     * @param integer $Offset <p>偏移量，默认为0。关于Offset的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
     * @param integer $Limit <p>返回数量，默认为20，最大值为100。关于Limit的更进一步介绍请参考 API 简介中的相关小节。该参数仅与CloudDedicatedZoneID有关，传递了HostUuids和InstanceIds则会失效。</p>
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
        if (array_key_exists("CloudDedicatedZoneID",$param) and $param["CloudDedicatedZoneID"] !== null) {
            $this->CloudDedicatedZoneID = $param["CloudDedicatedZoneID"];
        }

        if (array_key_exists("HostUuids",$param) and $param["HostUuids"] !== null) {
            $this->HostUuids = $param["HostUuids"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
