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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCustomizedConfigList请求参数结构体
 *
 * @method string getConfigType() 获取配置类型:CLB 负载均衡维度。 SERVER 域名维度。 LOCATION 规则维度。
 * @method void setConfigType(string $ConfigType) 设置配置类型:CLB 负载均衡维度。 SERVER 域名维度。 LOCATION 规则维度。
 * @method integer getOffset() 获取拉取页偏移，默认值0。
 * @method void setOffset(integer $Offset) 设置拉取页偏移，默认值0。
 * @method integer getLimit() 获取拉取数目，默认值20。
 * @method void setLimit(integer $Limit) 设置拉取数目，默认值20。
 * @method string getConfigName() 获取拉取指定配置名字，模糊匹配。
 * @method void setConfigName(string $ConfigName) 设置拉取指定配置名字，模糊匹配。
 * @method array getUconfigIds() 获取配置ID，可以通过 [DescribeCustomizedConfigList](https://cloud.tencent.com/document/api/214/60009) 接口查询。
 * @method void setUconfigIds(array $UconfigIds) 设置配置ID，可以通过 [DescribeCustomizedConfigList](https://cloud.tencent.com/document/api/214/60009) 接口查询。
 * @method array getFilters() 获取过滤条件如下：
- loadbalancer-id
按照【负载均衡 ID】进行过滤。实例计费模式例如：lb-9vxezxza。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- vip
按照【负载均衡VIP】进行过滤。网络计费模式例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
 * @method void setFilters(array $Filters) 设置过滤条件如下：
- loadbalancer-id
按照【负载均衡 ID】进行过滤。实例计费模式例如：lb-9vxezxza。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- vip
按照【负载均衡VIP】进行过滤。网络计费模式例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
 */
class DescribeCustomizedConfigListRequest extends AbstractModel
{
    /**
     * @var string 配置类型:CLB 负载均衡维度。 SERVER 域名维度。 LOCATION 规则维度。
     */
    public $ConfigType;

    /**
     * @var integer 拉取页偏移，默认值0。
     */
    public $Offset;

    /**
     * @var integer 拉取数目，默认值20。
     */
    public $Limit;

    /**
     * @var string 拉取指定配置名字，模糊匹配。
     */
    public $ConfigName;

    /**
     * @var array 配置ID，可以通过 [DescribeCustomizedConfigList](https://cloud.tencent.com/document/api/214/60009) 接口查询。
     */
    public $UconfigIds;

    /**
     * @var array 过滤条件如下：
- loadbalancer-id
按照【负载均衡 ID】进行过滤。实例计费模式例如：lb-9vxezxza。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- vip
按照【负载均衡VIP】进行过滤。网络计费模式例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
     */
    public $Filters;

    /**
     * @param string $ConfigType 配置类型:CLB 负载均衡维度。 SERVER 域名维度。 LOCATION 规则维度。
     * @param integer $Offset 拉取页偏移，默认值0。
     * @param integer $Limit 拉取数目，默认值20。
     * @param string $ConfigName 拉取指定配置名字，模糊匹配。
     * @param array $UconfigIds 配置ID，可以通过 [DescribeCustomizedConfigList](https://cloud.tencent.com/document/api/214/60009) 接口查询。
     * @param array $Filters 过滤条件如下：
- loadbalancer-id
按照【负载均衡 ID】进行过滤。实例计费模式例如：lb-9vxezxza。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- vip
按照【负载均衡VIP】进行过滤。网络计费模式例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
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
        if (array_key_exists("ConfigType",$param) and $param["ConfigType"] !== null) {
            $this->ConfigType = $param["ConfigType"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("UconfigIds",$param) and $param["UconfigIds"] !== null) {
            $this->UconfigIds = $param["UconfigIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
