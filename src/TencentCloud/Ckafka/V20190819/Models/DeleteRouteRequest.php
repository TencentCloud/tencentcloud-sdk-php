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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoute请求参数结构体
 *
 * @method string getInstanceId() 获取ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method void setInstanceId(string $InstanceId) 设置ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
 * @method integer getRouteId() 获取路由id,可通过DescribeRoute接口获取
 * @method void setRouteId(integer $RouteId) 设置路由id,可通过DescribeRoute接口获取
 * @method integer getCallerAppid() 获取调用方appId
 * @method void setCallerAppid(integer $CallerAppid) 设置调用方appId
 * @method string getDeleteRouteTime() 获取设置定时删除路由时间,仅类型为公网路由支持定时删除,可选择未来的24小时的任意时间
 * @method void setDeleteRouteTime(string $DeleteRouteTime) 设置设置定时删除路由时间,仅类型为公网路由支持定时删除,可选择未来的24小时的任意时间
 */
class DeleteRouteRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     */
    public $InstanceId;

    /**
     * @var integer 路由id,可通过DescribeRoute接口获取
     */
    public $RouteId;

    /**
     * @var integer 调用方appId
     */
    public $CallerAppid;

    /**
     * @var string 设置定时删除路由时间,仅类型为公网路由支持定时删除,可选择未来的24小时的任意时间
     */
    public $DeleteRouteTime;

    /**
     * @param string $InstanceId ckafka集群实例Id,可通过[DescribeInstances](https://cloud.tencent.com/document/product/597/40835)接口获取
     * @param integer $RouteId 路由id,可通过DescribeRoute接口获取
     * @param integer $CallerAppid 调用方appId
     * @param string $DeleteRouteTime 设置定时删除路由时间,仅类型为公网路由支持定时删除,可选择未来的24小时的任意时间
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

        if (array_key_exists("RouteId",$param) and $param["RouteId"] !== null) {
            $this->RouteId = $param["RouteId"];
        }

        if (array_key_exists("CallerAppid",$param) and $param["CallerAppid"] !== null) {
            $this->CallerAppid = $param["CallerAppid"];
        }

        if (array_key_exists("DeleteRouteTime",$param) and $param["DeleteRouteTime"] !== null) {
            $this->DeleteRouteTime = $param["DeleteRouteTime"];
        }
    }
}
