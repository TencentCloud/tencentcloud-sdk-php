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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNatFwClusterRegionStatus请求参数结构体
 *
 * @method array getNatClusterRegionStatusQueryList() 获取<p>NAT集群防火墙地域状态查询列表</p>
 * @method void setNatClusterRegionStatusQueryList(array $NatClusterRegionStatusQueryList) 设置<p>NAT集群防火墙地域状态查询列表</p>
 */
class DescribeNatFwClusterRegionStatusRequest extends AbstractModel
{
    /**
     * @var array <p>NAT集群防火墙地域状态查询列表</p>
     */
    public $NatClusterRegionStatusQueryList;

    /**
     * @param array $NatClusterRegionStatusQueryList <p>NAT集群防火墙地域状态查询列表</p>
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
        if (array_key_exists("NatClusterRegionStatusQueryList",$param) and $param["NatClusterRegionStatusQueryList"] !== null) {
            $this->NatClusterRegionStatusQueryList = [];
            foreach ($param["NatClusterRegionStatusQueryList"] as $key => $value){
                $obj = new NatClusterRegionStatusQuery();
                $obj->deserialize($value);
                array_push($this->NatClusterRegionStatusQueryList, $obj);
            }
        }
    }
}
