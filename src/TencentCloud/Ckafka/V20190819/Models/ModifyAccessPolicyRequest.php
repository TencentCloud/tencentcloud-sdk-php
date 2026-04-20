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
 * ModifyAccessPolicy请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method integer getRouteId() 获取<p>路由ID</p>
 * @method void setRouteId(integer $RouteId) 设置<p>路由ID</p>
 * @method array getIpWhitelist() 获取<p>公网IP白名单配置</p><p>不传默认删除全部配置</p>
 * @method void setIpWhitelist(array $IpWhitelist) 设置<p>公网IP白名单配置</p><p>不传默认删除全部配置</p>
 */
class ModifyAccessPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>路由ID</p>
     */
    public $RouteId;

    /**
     * @var array <p>公网IP白名单配置</p><p>不传默认删除全部配置</p>
     */
    public $IpWhitelist;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param integer $RouteId <p>路由ID</p>
     * @param array $IpWhitelist <p>公网IP白名单配置</p><p>不传默认删除全部配置</p>
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

        if (array_key_exists("IpWhitelist",$param) and $param["IpWhitelist"] !== null) {
            $this->IpWhitelist = [];
            foreach ($param["IpWhitelist"] as $key => $value){
                $obj = new IpWhitelistDTO();
                $obj->deserialize($value);
                array_push($this->IpWhitelist, $obj);
            }
        }
    }
}
