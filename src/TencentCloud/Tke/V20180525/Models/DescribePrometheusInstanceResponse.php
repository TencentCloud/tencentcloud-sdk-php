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
 * DescribePrometheusInstance返回参数结构体
 *
 * @method string getInstanceId() 获取实例id
 * @method void setInstanceId(string $InstanceId) 设置实例id
 * @method string getName() 获取实例名称
 * @method void setName(string $Name) 设置实例名称
 * @method string getVpcId() 获取私有网络id
 * @method void setVpcId(string $VpcId) 设置私有网络id
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method string getCOSBucket() 获取cos桶名称
 * @method void setCOSBucket(string $COSBucket) 设置cos桶名称
 * @method string getQueryAddress() 获取数据查询地址
 * @method void setQueryAddress(string $QueryAddress) 设置数据查询地址
 * @method PrometheusGrafanaInfo getGrafana() 获取实例中grafana相关的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGrafana(PrometheusGrafanaInfo $Grafana) 设置实例中grafana相关的信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAlertManagerUrl() 获取用户自定义alertmanager
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAlertManagerUrl(string $AlertManagerUrl) 设置用户自定义alertmanager
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePrometheusInstanceResponse extends AbstractModel
{
    /**
     * @var string 实例id
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $Name;

    /**
     * @var string 私有网络id
     */
    public $VpcId;

    /**
     * @var string 子网id
     */
    public $SubnetId;

    /**
     * @var string cos桶名称
     */
    public $COSBucket;

    /**
     * @var string 数据查询地址
     */
    public $QueryAddress;

    /**
     * @var PrometheusGrafanaInfo 实例中grafana相关的信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Grafana;

    /**
     * @var string 用户自定义alertmanager
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AlertManagerUrl;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例id
     * @param string $Name 实例名称
     * @param string $VpcId 私有网络id
     * @param string $SubnetId 子网id
     * @param string $COSBucket cos桶名称
     * @param string $QueryAddress 数据查询地址
     * @param PrometheusGrafanaInfo $Grafana 实例中grafana相关的信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $AlertManagerUrl 用户自定义alertmanager
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("COSBucket",$param) and $param["COSBucket"] !== null) {
            $this->COSBucket = $param["COSBucket"];
        }

        if (array_key_exists("QueryAddress",$param) and $param["QueryAddress"] !== null) {
            $this->QueryAddress = $param["QueryAddress"];
        }

        if (array_key_exists("Grafana",$param) and $param["Grafana"] !== null) {
            $this->Grafana = new PrometheusGrafanaInfo();
            $this->Grafana->deserialize($param["Grafana"]);
        }

        if (array_key_exists("AlertManagerUrl",$param) and $param["AlertManagerUrl"] !== null) {
            $this->AlertManagerUrl = $param["AlertManagerUrl"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
