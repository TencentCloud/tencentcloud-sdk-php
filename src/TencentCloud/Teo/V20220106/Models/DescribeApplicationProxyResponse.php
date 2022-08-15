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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationProxy返回参数结构体
 *
 * @method array getData() 获取应用代理列表。
 * @method void setData(array $Data) 设置应用代理列表。
 * @method integer getTotalCount() 获取记录总数。
 * @method void setTotalCount(integer $TotalCount) 设置记录总数。
 * @method integer getQuota() 获取字段已废弃。
 * @method void setQuota(integer $Quota) 设置字段已废弃。
 * @method integer getIpCount() 获取当ProxyId为空时，表示套餐内PlatType为ip的Anycast IP的实例数量。
 * @method void setIpCount(integer $IpCount) 设置当ProxyId为空时，表示套餐内PlatType为ip的Anycast IP的实例数量。
 * @method integer getDomainCount() 获取当ProxyId为空时，表示套餐内PlatType为domain的CNAME的实例数量。
 * @method void setDomainCount(integer $DomainCount) 设置当ProxyId为空时，表示套餐内PlatType为domain的CNAME的实例数量。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeApplicationProxyResponse extends AbstractModel
{
    /**
     * @var array 应用代理列表。
     */
    public $Data;

    /**
     * @var integer 记录总数。
     */
    public $TotalCount;

    /**
     * @var integer 字段已废弃。
     */
    public $Quota;

    /**
     * @var integer 当ProxyId为空时，表示套餐内PlatType为ip的Anycast IP的实例数量。
     */
    public $IpCount;

    /**
     * @var integer 当ProxyId为空时，表示套餐内PlatType为domain的CNAME的实例数量。
     */
    public $DomainCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Data 应用代理列表。
     * @param integer $TotalCount 记录总数。
     * @param integer $Quota 字段已废弃。
     * @param integer $IpCount 当ProxyId为空时，表示套餐内PlatType为ip的Anycast IP的实例数量。
     * @param integer $DomainCount 当ProxyId为空时，表示套餐内PlatType为domain的CNAME的实例数量。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new ApplicationProxy();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Quota",$param) and $param["Quota"] !== null) {
            $this->Quota = $param["Quota"];
        }

        if (array_key_exists("IpCount",$param) and $param["IpCount"] !== null) {
            $this->IpCount = $param["IpCount"];
        }

        if (array_key_exists("DomainCount",$param) and $param["DomainCount"] !== null) {
            $this->DomainCount = $param["DomainCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
