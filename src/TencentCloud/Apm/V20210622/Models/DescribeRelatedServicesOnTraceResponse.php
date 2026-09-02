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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRelatedServicesOnTrace返回参数结构体
 *
 * @method integer getTotalTraces() 获取查询的总链路数
 * @method void setTotalTraces(integer $TotalTraces) 设置查询的总链路数
 * @method integer getTotalServices() 获取查询到的应用的数量
 * @method void setTotalServices(integer $TotalServices) 设置查询到的应用的数量
 * @method integer getSelectedTraces() 获取挑选的链路数量
 * @method void setSelectedTraces(integer $SelectedTraces) 设置挑选的链路数量
 * @method array getServiceRelations() 获取相关的服务/应用名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceRelations(array $ServiceRelations) 设置相关的服务/应用名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeRelatedServicesOnTraceResponse extends AbstractModel
{
    /**
     * @var integer 查询的总链路数
     */
    public $TotalTraces;

    /**
     * @var integer 查询到的应用的数量
     */
    public $TotalServices;

    /**
     * @var integer 挑选的链路数量
     */
    public $SelectedTraces;

    /**
     * @var array 相关的服务/应用名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceRelations;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalTraces 查询的总链路数
     * @param integer $TotalServices 查询到的应用的数量
     * @param integer $SelectedTraces 挑选的链路数量
     * @param array $ServiceRelations 相关的服务/应用名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalTraces",$param) and $param["TotalTraces"] !== null) {
            $this->TotalTraces = $param["TotalTraces"];
        }

        if (array_key_exists("TotalServices",$param) and $param["TotalServices"] !== null) {
            $this->TotalServices = $param["TotalServices"];
        }

        if (array_key_exists("SelectedTraces",$param) and $param["SelectedTraces"] !== null) {
            $this->SelectedTraces = $param["SelectedTraces"];
        }

        if (array_key_exists("ServiceRelations",$param) and $param["ServiceRelations"] !== null) {
            $this->ServiceRelations = [];
            foreach ($param["ServiceRelations"] as $key => $value){
                $obj = new ServiceRelation();
                $obj->deserialize($value);
                array_push($this->ServiceRelations, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
