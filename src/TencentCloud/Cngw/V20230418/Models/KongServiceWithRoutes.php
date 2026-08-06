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
 * 返回kong的服务和路由列表
 *
 * @method array getServiceList() 获取服务及路由列表
 * @method void setServiceList(array $ServiceList) 设置服务及路由列表
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 */
class KongServiceWithRoutes extends AbstractModel
{
    /**
     * @var array 服务及路由列表
     */
    public $ServiceList;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @param array $ServiceList 服务及路由列表
     * @param integer $TotalCount 总数
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
        if (array_key_exists("ServiceList",$param) and $param["ServiceList"] !== null) {
            $this->ServiceList = [];
            foreach ($param["ServiceList"] as $key => $value){
                $obj = new KongServiceRoute();
                $obj->deserialize($value);
                array_push($this->ServiceList, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }
    }
}
