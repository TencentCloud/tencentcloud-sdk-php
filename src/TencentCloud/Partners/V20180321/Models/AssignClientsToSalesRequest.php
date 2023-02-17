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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AssignClientsToSales请求参数结构体
 *
 * @method array getClientUins() 获取代客/申请中代客uin列表，最大50条
 * @method void setClientUins(array $ClientUins) 设置代客/申请中代客uin列表，最大50条
 * @method string getSalesUin() 获取业务员uin
 * @method void setSalesUin(string $SalesUin) 设置业务员uin
 * @method string getAssignClientStatus() 获取代客类型:normal-代客 apply-申请中代客
 * @method void setAssignClientStatus(string $AssignClientStatus) 设置代客类型:normal-代客 apply-申请中代客
 * @method string getAssignActionType() 获取操作类型:assign-执行分派 cancel-取消分派
 * @method void setAssignActionType(string $AssignActionType) 设置操作类型:assign-执行分派 cancel-取消分派
 */
class AssignClientsToSalesRequest extends AbstractModel
{
    /**
     * @var array 代客/申请中代客uin列表，最大50条
     */
    public $ClientUins;

    /**
     * @var string 业务员uin
     */
    public $SalesUin;

    /**
     * @var string 代客类型:normal-代客 apply-申请中代客
     */
    public $AssignClientStatus;

    /**
     * @var string 操作类型:assign-执行分派 cancel-取消分派
     */
    public $AssignActionType;

    /**
     * @param array $ClientUins 代客/申请中代客uin列表，最大50条
     * @param string $SalesUin 业务员uin
     * @param string $AssignClientStatus 代客类型:normal-代客 apply-申请中代客
     * @param string $AssignActionType 操作类型:assign-执行分派 cancel-取消分派
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
        if (array_key_exists("ClientUins",$param) and $param["ClientUins"] !== null) {
            $this->ClientUins = $param["ClientUins"];
        }

        if (array_key_exists("SalesUin",$param) and $param["SalesUin"] !== null) {
            $this->SalesUin = $param["SalesUin"];
        }

        if (array_key_exists("AssignClientStatus",$param) and $param["AssignClientStatus"] !== null) {
            $this->AssignClientStatus = $param["AssignClientStatus"];
        }

        if (array_key_exists("AssignActionType",$param) and $param["AssignActionType"] !== null) {
            $this->AssignActionType = $param["AssignActionType"];
        }
    }
}
