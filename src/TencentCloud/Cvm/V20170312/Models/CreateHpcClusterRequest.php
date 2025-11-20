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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateHpcCluster请求参数结构体
 *
 * @method string getZone() 获取可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
 * @method void setZone(string $Zone) 设置可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
 * @method string getName() 获取高性能计算集群名称，长度限制[1-60]。
 * @method void setName(string $Name) 设置高性能计算集群名称，长度限制[1-60]。
 * @method string getRemark() 获取高性能计算集群备注，长度[1-256]。
 * @method void setRemark(string $Remark) 设置高性能计算集群备注，长度[1-256]。
 * @method string getHpcClusterType() 获取高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
 * @method void setHpcClusterType(string $HpcClusterType) 设置高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
 * @method string getHpcClusterBusinessId() 获取高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。
 * @method void setHpcClusterBusinessId(string $HpcClusterBusinessId) 设置高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。
 * @method array getTagSpecification() 获取标签描述列表。通过指定该参数可以同时绑定标签到相应的HPC高性能集群。集群信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
 * @method void setTagSpecification(array $TagSpecification) 设置标签描述列表。通过指定该参数可以同时绑定标签到相应的HPC高性能集群。集群信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
 */
class CreateHpcClusterRequest extends AbstractModel
{
    /**
     * @var string 可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
     */
    public $Zone;

    /**
     * @var string 高性能计算集群名称，长度限制[1-60]。
     */
    public $Name;

    /**
     * @var string 高性能计算集群备注，长度[1-256]。
     */
    public $Remark;

    /**
     * @var string 高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
     */
    public $HpcClusterType;

    /**
     * @var string 高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。
     */
    public $HpcClusterBusinessId;

    /**
     * @var array 标签描述列表。通过指定该参数可以同时绑定标签到相应的HPC高性能集群。集群信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
     */
    public $TagSpecification;

    /**
     * @param string $Zone 可用区信息。可用区信息可通过 [查询可用区信息](https://cloud.tencent.com/document/api/213/15707) 接口获取。
     * @param string $Name 高性能计算集群名称，长度限制[1-60]。
     * @param string $Remark 高性能计算集群备注，长度[1-256]。
     * @param string $HpcClusterType 高性能计算集群类型，当前有三个取值：分别是CDC/CHC/STANDARD，其中STANDARD是默认的标准模式。
     * @param string $HpcClusterBusinessId 高性能计算集群对应的业务场景标识，当前只支持CDC场景类型。
     * @param array $TagSpecification 标签描述列表。通过指定该参数可以同时绑定标签到相应的HPC高性能集群。集群信息可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("HpcClusterType",$param) and $param["HpcClusterType"] !== null) {
            $this->HpcClusterType = $param["HpcClusterType"];
        }

        if (array_key_exists("HpcClusterBusinessId",$param) and $param["HpcClusterBusinessId"] !== null) {
            $this->HpcClusterBusinessId = $param["HpcClusterBusinessId"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }
    }
}
