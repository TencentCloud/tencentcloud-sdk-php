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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEmrClusterInfo返回参数结构体
 *
 * @method string getClusterId() 获取<p>EMR 集群 ID，例如 emr-40ybwbbn</p>
 * @method void setClusterId(string $ClusterId) 设置<p>EMR 集群 ID，例如 emr-40ybwbbn</p>
 * @method string getClusterName() 获取<p>EMR 集群名称</p>
 * @method void setClusterName(string $ClusterName) 设置<p>EMR 集群名称</p>
 * @method string getCosBucket() 获取<p>集群绑定的 COS Bucket 名称</p>
 * @method void setCosBucket(string $CosBucket) 设置<p>集群绑定的 COS Bucket 名称</p>
 * @method string getTkeClusterId() 获取<p>关联的 TKE 集群 ID，例如 cls-xxxxxxxx</p>
 * @method void setTkeClusterId(string $TkeClusterId) 设置<p>关联的 TKE 集群 ID，例如 cls-xxxxxxxx</p>
 * @method EmrResourceUsage getResourceUsage() 获取<p>集群资源用量（Cpu / Mem）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceUsage(EmrResourceUsage $ResourceUsage) 设置<p>集群资源用量（Cpu / Mem）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeEmrClusterInfoResponse extends AbstractModel
{
    /**
     * @var string <p>EMR 集群 ID，例如 emr-40ybwbbn</p>
     */
    public $ClusterId;

    /**
     * @var string <p>EMR 集群名称</p>
     */
    public $ClusterName;

    /**
     * @var string <p>集群绑定的 COS Bucket 名称</p>
     */
    public $CosBucket;

    /**
     * @var string <p>关联的 TKE 集群 ID，例如 cls-xxxxxxxx</p>
     */
    public $TkeClusterId;

    /**
     * @var EmrResourceUsage <p>集群资源用量（Cpu / Mem）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceUsage;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ClusterId <p>EMR 集群 ID，例如 emr-40ybwbbn</p>
     * @param string $ClusterName <p>EMR 集群名称</p>
     * @param string $CosBucket <p>集群绑定的 COS Bucket 名称</p>
     * @param string $TkeClusterId <p>关联的 TKE 集群 ID，例如 cls-xxxxxxxx</p>
     * @param EmrResourceUsage $ResourceUsage <p>集群资源用量（Cpu / Mem）</p>
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ClusterName",$param) and $param["ClusterName"] !== null) {
            $this->ClusterName = $param["ClusterName"];
        }

        if (array_key_exists("CosBucket",$param) and $param["CosBucket"] !== null) {
            $this->CosBucket = $param["CosBucket"];
        }

        if (array_key_exists("TkeClusterId",$param) and $param["TkeClusterId"] !== null) {
            $this->TkeClusterId = $param["TkeClusterId"];
        }

        if (array_key_exists("ResourceUsage",$param) and $param["ResourceUsage"] !== null) {
            $this->ResourceUsage = new EmrResourceUsage();
            $this->ResourceUsage->deserialize($param["ResourceUsage"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
