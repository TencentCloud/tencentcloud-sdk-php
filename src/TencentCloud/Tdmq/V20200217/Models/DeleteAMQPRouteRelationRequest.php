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
 * DeleteAMQPRouteRelation请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取Vhost名称
 * @method void setVHostId(string $VHostId) 设置Vhost名称
 * @method string getRouteRelationId() 获取路由关系ID
 * @method void setRouteRelationId(string $RouteRelationId) 设置路由关系ID
 */
class DeleteAMQPRouteRelationRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string Vhost名称
     */
    public $VHostId;

    /**
     * @var string 路由关系ID
     */
    public $RouteRelationId;

    /**
     * @param string $ClusterId 集群ID
     * @param string $VHostId Vhost名称
     * @param string $RouteRelationId 路由关系ID
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

        if (array_key_exists("VHostId",$param) and $param["VHostId"] !== null) {
            $this->VHostId = $param["VHostId"];
        }

        if (array_key_exists("RouteRelationId",$param) and $param["RouteRelationId"] !== null) {
            $this->RouteRelationId = $param["RouteRelationId"];
        }
    }
}
