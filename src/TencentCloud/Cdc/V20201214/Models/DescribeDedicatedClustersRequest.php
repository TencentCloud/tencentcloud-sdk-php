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
namespace TencentCloud\Cdc\V20201214\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDedicatedClusters请求参数结构体
 *
 * @method array getDedicatedClusterIds() 获取按照一个或者多个实例ID查询。实例ID形如：`cluster-xxxxxxxx`
 * @method void setDedicatedClusterIds(array $DedicatedClusterIds) 设置按照一个或者多个实例ID查询。实例ID形如：`cluster-xxxxxxxx`
 * @method array getZones() 获取按照可用区名称过滤
 * @method void setZones(array $Zones) 设置按照可用区名称过滤
 * @method array getSiteIds() 获取按照站点id过滤
 * @method void setSiteIds(array $SiteIds) 设置按照站点id过滤
 * @method array getLifecycleStatuses() 获取按照专用集群生命周期过滤
 * @method void setLifecycleStatuses(array $LifecycleStatuses) 设置按照专用集群生命周期过滤
 * @method string getName() 获取模糊匹配专用集群名称
 * @method void setName(string $Name) 设置模糊匹配专用集群名称
 * @method integer getOffset() 获取偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 */
class DescribeDedicatedClustersRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个实例ID查询。实例ID形如：`cluster-xxxxxxxx`
     */
    public $DedicatedClusterIds;

    /**
     * @var array 按照可用区名称过滤
     */
    public $Zones;

    /**
     * @var array 按照站点id过滤
     */
    public $SiteIds;

    /**
     * @var array 按照专用集群生命周期过滤
     */
    public $LifecycleStatuses;

    /**
     * @var string 模糊匹配专用集群名称
     */
    public $Name;

    /**
     * @var integer 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;

    /**
     * @param array $DedicatedClusterIds 按照一个或者多个实例ID查询。实例ID形如：`cluster-xxxxxxxx`
     * @param array $Zones 按照可用区名称过滤
     * @param array $SiteIds 按照站点id过滤
     * @param array $LifecycleStatuses 按照专用集群生命周期过滤
     * @param string $Name 模糊匹配专用集群名称
     * @param integer $Offset 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
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
        if (array_key_exists("DedicatedClusterIds",$param) and $param["DedicatedClusterIds"] !== null) {
            $this->DedicatedClusterIds = $param["DedicatedClusterIds"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SiteIds",$param) and $param["SiteIds"] !== null) {
            $this->SiteIds = $param["SiteIds"];
        }

        if (array_key_exists("LifecycleStatuses",$param) and $param["LifecycleStatuses"] !== null) {
            $this->LifecycleStatuses = $param["LifecycleStatuses"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
