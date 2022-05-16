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
 * CreateDedicatedClusterOrder请求参数结构体
 *
 * @method string getDedicatedClusterId() 获取专用集群id
 * @method void setDedicatedClusterId(string $DedicatedClusterId) 设置专用集群id
 * @method array getDedicatedClusterTypes() 获取order关联的专用集群类型数组
 * @method void setDedicatedClusterTypes(array $DedicatedClusterTypes) 设置order关联的专用集群类型数组
 * @method CosInfo getCosInfo() 获取order关联的cos存储信息
 * @method void setCosInfo(CosInfo $CosInfo) 设置order关联的cos存储信息
 * @method CbsInfo getCbsInfo() 获取order关联的cbs存储信息
 * @method void setCbsInfo(CbsInfo $CbsInfo) 设置order关联的cbs存储信息
 * @method string getPurchaseSource() 获取购买来源，默认为cloudApi
 * @method void setPurchaseSource(string $PurchaseSource) 设置购买来源，默认为cloudApi
 * @method string getDedicatedClusterOrderId() 获取当调用API接口提交订单时，需要提交DedicatedClusterOrderId
 * @method void setDedicatedClusterOrderId(string $DedicatedClusterOrderId) 设置当调用API接口提交订单时，需要提交DedicatedClusterOrderId
 */
class CreateDedicatedClusterOrderRequest extends AbstractModel
{
    /**
     * @var string 专用集群id
     */
    public $DedicatedClusterId;

    /**
     * @var array order关联的专用集群类型数组
     */
    public $DedicatedClusterTypes;

    /**
     * @var CosInfo order关联的cos存储信息
     */
    public $CosInfo;

    /**
     * @var CbsInfo order关联的cbs存储信息
     */
    public $CbsInfo;

    /**
     * @var string 购买来源，默认为cloudApi
     */
    public $PurchaseSource;

    /**
     * @var string 当调用API接口提交订单时，需要提交DedicatedClusterOrderId
     */
    public $DedicatedClusterOrderId;

    /**
     * @param string $DedicatedClusterId 专用集群id
     * @param array $DedicatedClusterTypes order关联的专用集群类型数组
     * @param CosInfo $CosInfo order关联的cos存储信息
     * @param CbsInfo $CbsInfo order关联的cbs存储信息
     * @param string $PurchaseSource 购买来源，默认为cloudApi
     * @param string $DedicatedClusterOrderId 当调用API接口提交订单时，需要提交DedicatedClusterOrderId
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
        if (array_key_exists("DedicatedClusterId",$param) and $param["DedicatedClusterId"] !== null) {
            $this->DedicatedClusterId = $param["DedicatedClusterId"];
        }

        if (array_key_exists("DedicatedClusterTypes",$param) and $param["DedicatedClusterTypes"] !== null) {
            $this->DedicatedClusterTypes = [];
            foreach ($param["DedicatedClusterTypes"] as $key => $value){
                $obj = new DedicatedClusterTypeInfo();
                $obj->deserialize($value);
                array_push($this->DedicatedClusterTypes, $obj);
            }
        }

        if (array_key_exists("CosInfo",$param) and $param["CosInfo"] !== null) {
            $this->CosInfo = new CosInfo();
            $this->CosInfo->deserialize($param["CosInfo"]);
        }

        if (array_key_exists("CbsInfo",$param) and $param["CbsInfo"] !== null) {
            $this->CbsInfo = new CbsInfo();
            $this->CbsInfo->deserialize($param["CbsInfo"]);
        }

        if (array_key_exists("PurchaseSource",$param) and $param["PurchaseSource"] !== null) {
            $this->PurchaseSource = $param["PurchaseSource"];
        }

        if (array_key_exists("DedicatedClusterOrderId",$param) and $param["DedicatedClusterOrderId"] !== null) {
            $this->DedicatedClusterOrderId = $param["DedicatedClusterOrderId"];
        }
    }
}
