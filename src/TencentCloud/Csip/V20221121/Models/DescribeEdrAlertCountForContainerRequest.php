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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdrAlertCountForContainer请求参数结构体
 *
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method array getClusterIds() 获取<p>集群 ID 列表（≤500）；非空且 ContainerIds 为空时按集群分组统计</p>
 * @method void setClusterIds(array $ClusterIds) 设置<p>集群 ID 列表（≤500）；非空且 ContainerIds 为空时按集群分组统计</p>
 * @method array getContainerIds() 获取<p>容器 ID 列表（≤500）；非空时按容器分组统计（优先级高于 ClusterIds）</p>
 * @method void setContainerIds(array $ContainerIds) 设置<p>容器 ID 列表（≤500）；非空时按容器分组统计（优先级高于 ClusterIds）</p>
 * @method array getFilters() 获取<li>PolicyType - int - 是否必填：否 - 策略类型</li><li>PolicyName - string - 是否必填：否 - 策略名称</li><li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li><li>PolicyAction- int - 是否必填：否 - 策略动作</li><li>IsEnabled - int - 是否必填：否 - 是否生效</li><li>ContainerId - string - 是否必填：否 - 容器ID（精确/IN，容器维度筛选）</li><li>ClusterId - string - 是否必填：否 - 集群ID（精确/IN，容器维度筛选）</li><li>ClusterName - string - 是否必填：否 - 集群名称（前缀模糊）</li><li>ContainerName - string - 是否必填：否 - 容器名称（前缀模糊）</li><li>AlertSource - string - 是否必填：否 - 告警来源：HOST-主机告警 / CONTAINER-容器告警，不传返回全部</li>
 * @method void setFilters(array $Filters) 设置<li>PolicyType - int - 是否必填：否 - 策略类型</li><li>PolicyName - string - 是否必填：否 - 策略名称</li><li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li><li>PolicyAction- int - 是否必填：否 - 策略动作</li><li>IsEnabled - int - 是否必填：否 - 是否生效</li><li>ContainerId - string - 是否必填：否 - 容器ID（精确/IN，容器维度筛选）</li><li>ClusterId - string - 是否必填：否 - 集群ID（精确/IN，容器维度筛选）</li><li>ClusterName - string - 是否必填：否 - 集群名称（前缀模糊）</li><li>ContainerName - string - 是否必填：否 - 容器名称（前缀模糊）</li><li>AlertSource - string - 是否必填：否 - 告警来源：HOST-主机告警 / CONTAINER-容器告警，不传返回全部</li>
 */
class DescribeEdrAlertCountForContainerRequest extends AbstractModel
{
    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var array <p>集群 ID 列表（≤500）；非空且 ContainerIds 为空时按集群分组统计</p>
     */
    public $ClusterIds;

    /**
     * @var array <p>容器 ID 列表（≤500）；非空时按容器分组统计（优先级高于 ClusterIds）</p>
     */
    public $ContainerIds;

    /**
     * @var array <li>PolicyType - int - 是否必填：否 - 策略类型</li><li>PolicyName - string - 是否必填：否 - 策略名称</li><li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li><li>PolicyAction- int - 是否必填：否 - 策略动作</li><li>IsEnabled - int - 是否必填：否 - 是否生效</li><li>ContainerId - string - 是否必填：否 - 容器ID（精确/IN，容器维度筛选）</li><li>ClusterId - string - 是否必填：否 - 集群ID（精确/IN，容器维度筛选）</li><li>ClusterName - string - 是否必填：否 - 集群名称（前缀模糊）</li><li>ContainerName - string - 是否必填：否 - 容器名称（前缀模糊）</li><li>AlertSource - string - 是否必填：否 - 告警来源：HOST-主机告警 / CONTAINER-容器告警，不传返回全部</li>
     */
    public $Filters;

    /**
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param array $ClusterIds <p>集群 ID 列表（≤500）；非空且 ContainerIds 为空时按集群分组统计</p>
     * @param array $ContainerIds <p>容器 ID 列表（≤500）；非空时按容器分组统计（优先级高于 ClusterIds）</p>
     * @param array $Filters <li>PolicyType - int - 是否必填：否 - 策略类型</li><li>PolicyName - string - 是否必填：否 - 策略名称</li><li>Domain - string - 是否必填：否 - 域名(先对域名做urlencode,再base64)</li><li>PolicyAction- int - 是否必填：否 - 策略动作</li><li>IsEnabled - int - 是否必填：否 - 是否生效</li><li>ContainerId - string - 是否必填：否 - 容器ID（精确/IN，容器维度筛选）</li><li>ClusterId - string - 是否必填：否 - 集群ID（精确/IN，容器维度筛选）</li><li>ClusterName - string - 是否必填：否 - 集群名称（前缀模糊）</li><li>ContainerName - string - 是否必填：否 - 容器名称（前缀模糊）</li><li>AlertSource - string - 是否必填：否 - 告警来源：HOST-主机告警 / CONTAINER-容器告警，不传返回全部</li>
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
        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("ContainerIds",$param) and $param["ContainerIds"] !== null) {
            $this->ContainerIds = $param["ContainerIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new EDRFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
