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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteRoute请求参数结构体
 *
 * @method string getInstanceId() 获取实例唯一id
 * @method void setInstanceId(string $InstanceId) 设置实例唯一id
 * @method integer getRouteId() 获取路由id
 * @method void setRouteId(integer $RouteId) 设置路由id
 * @method integer getCallerAppid() 获取调用方appId
 * @method void setCallerAppid(integer $CallerAppid) 设置调用方appId
 * @method string getDeleteRouteTime() 获取删除路由时间
 * @method void setDeleteRouteTime(string $DeleteRouteTime) 设置删除路由时间
 */
class DeleteRouteRequest extends AbstractModel
{
    /**
     * @var string 实例唯一id
     */
    public $InstanceId;

    /**
     * @var integer 路由id
     */
    public $RouteId;

    /**
     * @var integer 调用方appId
     */
    public $CallerAppid;

    /**
     * @var string 删除路由时间
     */
    public $DeleteRouteTime;

    /**
     * @param string $InstanceId 实例唯一id
     * @param integer $RouteId 路由id
     * @param integer $CallerAppid 调用方appId
     * @param string $DeleteRouteTime 删除路由时间
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
