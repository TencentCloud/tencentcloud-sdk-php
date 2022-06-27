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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreatePrometheusMultiTenantInstancePostPayMode请求参数结构体
 *
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method string getVpcId() 获取VPC ID
 * @method void setVpcId(string $VpcId) 设置VPC ID
 * @method string getSubnetId() 获取子网 ID
 * @method void setSubnetId(string $SubnetId) 设置子网 ID
 * @method integer getDataRetentionTime() 获取数据存储时间（单位天），限制值为15，30，45之一
 * @method void setDataRetentionTime(integer $DataRetentionTime) 设置数据存储时间（单位天），限制值为15，30，45之一
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method array getTagSpecification() 获取实例的标签
 * @method void setTagSpecification(array $TagSpecification) 设置实例的标签
 * @method string getGrafanaInstanceId() 获取需要关联的 Grafana 实例
 * @method void setGrafanaInstanceId(string $GrafanaInstanceId) 设置需要关联的 Grafana 实例
 */
class CreatePrometheusMultiTenantInstancePostPayModeRequest extends AbstractModel
{
    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var string VPC ID
     */
    public $VpcId;

    /**
     * @var string 子网 ID
     */
    public $SubnetId;

    /**
     * @var integer 数据存储时间（单位天），限制值为15，30，45之一
     */
    public $DataRetentionTime;

    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var array 实例的标签
     */
    public $TagSpecification;

    /**
     * @var string 需要关联的 Grafana 实例
     */
    public $GrafanaInstanceId;

    /**
     * @param string $InstanceName 实例名
     * @param string $VpcId VPC ID
     * @param string $SubnetId 子网 ID
     * @param integer $DataRetentionTime 数据存储时间（单位天），限制值为15，30，45之一
     * @param string $Zone 可用区
     * @param array $TagSpecification 实例的标签
     * @param string $GrafanaInstanceId 需要关联的 Grafana 实例
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("DataRetentionTime",$param) and $param["DataRetentionTime"] !== null) {
            $this->DataRetentionTime = $param["DataRetentionTime"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("TagSpecification",$param) and $param["TagSpecification"] !== null) {
            $this->TagSpecification = [];
            foreach ($param["TagSpecification"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagSpecification, $obj);
            }
        }

        if (array_key_exists("GrafanaInstanceId",$param) and $param["GrafanaInstanceId"] !== null) {
            $this->GrafanaInstanceId = $param["GrafanaInstanceId"];
        }
    }
}
