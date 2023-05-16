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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListClusterInspectionResults请求参数结构体
 *
 * @method array getClusterIds() 获取目标集群列表，为空查询用户所有集群

 * @method void setClusterIds(array $ClusterIds) 设置目标集群列表，为空查询用户所有集群

 * @method array getHide() 获取隐藏的字段信息，为了减少无效的字段返回，隐藏字段不会在返回值中返回。可选值：results

 * @method void setHide(array $Hide) 设置隐藏的字段信息，为了减少无效的字段返回，隐藏字段不会在返回值中返回。可选值：results

 * @method string getName() 获取指定查询结果的报告名称，默认查询最新的每个集群只查询最新的一条
 * @method void setName(string $Name) 设置指定查询结果的报告名称，默认查询最新的每个集群只查询最新的一条
 */
class ListClusterInspectionResultsRequest extends AbstractModel
{
    /**
     * @var array 目标集群列表，为空查询用户所有集群

     */
    public $ClusterIds;

    /**
     * @var array 隐藏的字段信息，为了减少无效的字段返回，隐藏字段不会在返回值中返回。可选值：results

     */
    public $Hide;

    /**
     * @var string 指定查询结果的报告名称，默认查询最新的每个集群只查询最新的一条
     */
    public $Name;

    /**
     * @param array $ClusterIds 目标集群列表，为空查询用户所有集群

     * @param array $Hide 隐藏的字段信息，为了减少无效的字段返回，隐藏字段不会在返回值中返回。可选值：results

     * @param string $Name 指定查询结果的报告名称，默认查询最新的每个集群只查询最新的一条
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("Hide",$param) and $param["Hide"] !== null) {
            $this->Hide = $param["Hide"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
