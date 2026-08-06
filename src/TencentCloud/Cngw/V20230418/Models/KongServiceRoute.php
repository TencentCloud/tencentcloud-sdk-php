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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * kong实例的服务和路由列表
 *
 * @method KongServicePreview getService() 获取<p>服务信息</p>
 * @method void setService(KongServicePreview $Service) 设置<p>服务信息</p>
 * @method integer getRouteTotalCount() 获取<p>路由总数</p>
 * @method void setRouteTotalCount(integer $RouteTotalCount) 设置<p>路由总数</p>
 * @method boolean getRouteHasMore() 获取<p>是否还有更多路由</p>
 * @method void setRouteHasMore(boolean $RouteHasMore) 设置<p>是否还有更多路由</p>
 * @method array getRoutes() 获取<p>路由列表</p>
 * @method void setRoutes(array $Routes) 设置<p>路由列表</p>
 */
class KongServiceRoute extends AbstractModel
{
    /**
     * @var KongServicePreview <p>服务信息</p>
     */
    public $Service;

    /**
     * @var integer <p>路由总数</p>
     */
    public $RouteTotalCount;

    /**
     * @var boolean <p>是否还有更多路由</p>
     */
    public $RouteHasMore;

    /**
     * @var array <p>路由列表</p>
     */
    public $Routes;

    /**
     * @param KongServicePreview $Service <p>服务信息</p>
     * @param integer $RouteTotalCount <p>路由总数</p>
     * @param boolean $RouteHasMore <p>是否还有更多路由</p>
     * @param array $Routes <p>路由列表</p>
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = new KongServicePreview();
            $this->Service->deserialize($param["Service"]);
        }

        if (array_key_exists("RouteTotalCount",$param) and $param["RouteTotalCount"] !== null) {
            $this->RouteTotalCount = $param["RouteTotalCount"];
        }

        if (array_key_exists("RouteHasMore",$param) and $param["RouteHasMore"] !== null) {
            $this->RouteHasMore = $param["RouteHasMore"];
        }

        if (array_key_exists("Routes",$param) and $param["Routes"] !== null) {
            $this->Routes = [];
            foreach ($param["Routes"] as $key => $value){
                $obj = new KongRoutePreview();
                $obj->deserialize($value);
                array_push($this->Routes, $obj);
            }
        }
    }
}
