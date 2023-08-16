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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResourcePackageDetail请求参数结构体
 *
 * @method string getPackageId() 获取资源包唯一ID
 * @method void setPackageId(string $PackageId) 设置资源包唯一ID
 * @method array getClusterIds() 获取集群ID
 * @method void setClusterIds(array $ClusterIds) 设置集群ID
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method string getOffset() 获取偏移量
 * @method void setOffset(string $Offset) 设置偏移量
 * @method string getLimit() 获取限制
 * @method void setLimit(string $Limit) 设置限制
 * @method array getInstanceIds() 获取实例D
 * @method void setInstanceIds(array $InstanceIds) 设置实例D
 */
class DescribeResourcePackageDetailRequest extends AbstractModel
{
    /**
     * @var string 资源包唯一ID
     */
    public $PackageId;

    /**
     * @var array 集群ID
     */
    public $ClusterIds;

    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var string 偏移量
     */
    public $Offset;

    /**
     * @var string 限制
     */
    public $Limit;

    /**
     * @var array 实例D
     */
    public $InstanceIds;

    /**
     * @param string $PackageId 资源包唯一ID
     * @param array $ClusterIds 集群ID
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param string $Offset 偏移量
     * @param string $Limit 限制
     * @param array $InstanceIds 实例D
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
        if (array_key_exists("PackageId",$param) and $param["PackageId"] !== null) {
            $this->PackageId = $param["PackageId"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
