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
 * 预留券抵扣详情
 *
 * @method string getReservedInstanceId() 获取预留券ID
 * @method void setReservedInstanceId(string $ReservedInstanceId) 设置预留券ID
 * @method string getEksId() 获取Pod唯一ID
 * @method void setEksId(string $EksId) 设置Pod唯一ID
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getName() 获取Pod的名称
 * @method void setName(string $Name) 设置Pod的名称
 * @method string getNamespace() 获取Pod的命名空间
 * @method void setNamespace(string $Namespace) 设置Pod的命名空间
 * @method string getKind() 获取工作负载类型
 * @method void setKind(string $Kind) 设置工作负载类型
 * @method string getKindName() 获取工作负载名称
 * @method void setKindName(string $KindName) 设置工作负载名称
 * @method string getUid() 获取Pod的uid
 * @method void setUid(string $Uid) 设置Pod的uid
 * @method string getStartTime() 获取用量开始时间
 * @method void setStartTime(string $StartTime) 设置用量开始时间
 * @method string getEndTime() 获取用量结束时间
 * @method void setEndTime(string $EndTime) 设置用量结束时间
 * @method string getProduct() 获取抵扣资源所属产品
 * @method void setProduct(string $Product) 设置抵扣资源所属产品
 */
class RIUtilizationDetail extends AbstractModel
{
    /**
     * @var string 预留券ID
     */
    public $ReservedInstanceId;

    /**
     * @var string Pod唯一ID
     */
    public $EksId;

    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string Pod的名称
     */
    public $Name;

    /**
     * @var string Pod的命名空间
     */
    public $Namespace;

    /**
     * @var string 工作负载类型
     */
    public $Kind;

    /**
     * @var string 工作负载名称
     */
    public $KindName;

    /**
     * @var string Pod的uid
     */
    public $Uid;

    /**
     * @var string 用量开始时间
     */
    public $StartTime;

    /**
     * @var string 用量结束时间
     */
    public $EndTime;

    /**
     * @var string 抵扣资源所属产品
     */
    public $Product;

    /**
     * @param string $ReservedInstanceId 预留券ID
     * @param string $EksId Pod唯一ID
     * @param string $ClusterId 集群ID
     * @param string $Name Pod的名称
     * @param string $Namespace Pod的命名空间
     * @param string $Kind 工作负载类型
     * @param string $KindName 工作负载名称
     * @param string $Uid Pod的uid
     * @param string $StartTime 用量开始时间
     * @param string $EndTime 用量结束时间
     * @param string $Product 抵扣资源所属产品
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
        if (array_key_exists("ReservedInstanceId",$param) and $param["ReservedInstanceId"] !== null) {
            $this->ReservedInstanceId = $param["ReservedInstanceId"];
        }

        if (array_key_exists("EksId",$param) and $param["EksId"] !== null) {
            $this->EksId = $param["EksId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("KindName",$param) and $param["KindName"] !== null) {
            $this->KindName = $param["KindName"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
