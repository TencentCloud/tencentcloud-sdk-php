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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AMQP集群基本信息
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getClusterName() 获取集群名称
 * @method void setClusterName(string $ClusterName) 设置集群名称
 * @method string getRegion() 获取地域信息
 * @method void setRegion(string $Region) 设置地域信息
 * @method integer getCreateTime() 获取创建时间，毫秒为单位
 * @method void setCreateTime(integer $CreateTime) 设置创建时间，毫秒为单位
 * @method string getRemark() 获取集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPublicEndPoint() 获取公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPublicEndPoint(string $PublicEndPoint) 设置公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getVpcEndPoint() 获取VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVpcEndPoint(string $VpcEndPoint) 设置VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
 */
class AMQPClusterInfo extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 集群名称
     */
    public $ClusterName;

    /**
     * @var string 地域信息
     */
    public $Region;

    /**
     * @var integer 创建时间，毫秒为单位
     */
    public $CreateTime;

    /**
     * @var string 集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var string 公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PublicEndPoint;

    /**
     * @var string VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VpcEndPoint;

    /**
     * @param string $ClusterId 集群ID
     * @param string $ClusterName 集群名称
     * @param string $Region 地域信息
     * @param integer $CreateTime 创建时间，毫秒为单位
     * @param string $Remark 集群说明信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PublicEndPoint 公网接入地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $VpcEndPoint VPC接入地址
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicEndPoint",$param) and $param["PublicEndPoint"] !== null) {
            $this->PublicEndPoint = $param["PublicEndPoint"];
        }

        if (array_key_exists("VpcEndPoint",$param) and $param["VpcEndPoint"] !== null) {
            $this->VpcEndPoint = $param["VpcEndPoint"];
        }
    }
}
