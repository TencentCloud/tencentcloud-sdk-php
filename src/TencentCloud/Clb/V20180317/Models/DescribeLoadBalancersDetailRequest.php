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
 * DescribeLoadBalancersDetail请求参数结构体
 *
 * @method integer getLimit() 获取返回负载均衡列表数目，默认20，最大值100。
 * @method void setLimit(integer $Limit) 设置返回负载均衡列表数目，默认20，最大值100。
 * @method integer getOffset() 获取返回负载均衡列表起始偏移量，默认0。
 * @method void setOffset(integer $Offset) 设置返回负载均衡列表起始偏移量，默认0。
 * @method array getFields() 获取选择返回的Fields列表，系统仅会返回Fileds中填写的字段，可填写的字段详情请参见<a href="https://cloud.tencent.com/document/api/214/30694#LoadBalancerDetail">LoadBalancerDetail</a>。若未在Fileds填写相关字段，则此字段返回null。Fileds中默认添加LoadBalancerId和LoadBalancerName字段。
 * @method void setFields(array $Fields) 设置选择返回的Fields列表，系统仅会返回Fileds中填写的字段，可填写的字段详情请参见<a href="https://cloud.tencent.com/document/api/214/30694#LoadBalancerDetail">LoadBalancerDetail</a>。若未在Fileds填写相关字段，则此字段返回null。Fileds中默认添加LoadBalancerId和LoadBalancerName字段。
 * @method string getTargetType() 获取当Fields包含TargetId、TargetAddress、TargetPort、TargetWeight、ListenerId、Protocol、Port、LocationId、Domain、Url等Fields时，必选选择导出目标组的Target或者非目标组Target，取值范围NODE、GROUP。
 * @method void setTargetType(string $TargetType) 设置当Fields包含TargetId、TargetAddress、TargetPort、TargetWeight、ListenerId、Protocol、Port、LocationId、Domain、Url等Fields时，必选选择导出目标组的Target或者非目标组Target，取值范围NODE、GROUP。
 * @method array getFilters() 获取查询负载均衡详细信息列表条件，详细的过滤条件如下：
- loadbalancer-id
按照【负载均衡ID】进行过滤。例如：lb-rbw5skde。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- project-id
按照【项目ID】进行过滤。例如： "0"、"123"。
类型：String
必选：否
获取方式：[DescribeProject](https://cloud.tencent.com/document/api/651/78725)
- network
按照【负载均衡网络类型】进行过滤。例如：Public。
类型：String
必选：否
可选值：Private（内网）、Public（公网）
- vip
按照【负载均衡 VIP】进行过滤。例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
- vpcid
按照【负载均衡所属 VPCID】进行过滤。例如："vpc-12345678"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- target-ip
按照【后端目标内网 IP】进行过滤。例如："1.1.1.1","2203::214:4"。
类型：String
必选：否
- zone
按照【负载均衡所属的可用区】进行过滤。例如："ap-guangzhou-1"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【负载均衡标签的标签键】进行过滤，例如："name"。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:*
按照【负载均衡的标签】进行过滤，':' 后面跟的是标签键。如过滤标签键name，标签值zhangsan,lisi，{"Name": "tag:name","Values": ["zhangsan", "lisi"]}。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- fuzzy-search
按照【负载均衡VIP，负载均衡名称】模糊搜索，例如："1.1"。
类型：String
必选：否
 * @method void setFilters(array $Filters) 设置查询负载均衡详细信息列表条件，详细的过滤条件如下：
- loadbalancer-id
按照【负载均衡ID】进行过滤。例如：lb-rbw5skde。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- project-id
按照【项目ID】进行过滤。例如： "0"、"123"。
类型：String
必选：否
获取方式：[DescribeProject](https://cloud.tencent.com/document/api/651/78725)
- network
按照【负载均衡网络类型】进行过滤。例如：Public。
类型：String
必选：否
可选值：Private（内网）、Public（公网）
- vip
按照【负载均衡 VIP】进行过滤。例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
- vpcid
按照【负载均衡所属 VPCID】进行过滤。例如："vpc-12345678"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- target-ip
按照【后端目标内网 IP】进行过滤。例如："1.1.1.1","2203::214:4"。
类型：String
必选：否
- zone
按照【负载均衡所属的可用区】进行过滤。例如："ap-guangzhou-1"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【负载均衡标签的标签键】进行过滤，例如："name"。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:*
按照【负载均衡的标签】进行过滤，':' 后面跟的是标签键。如过滤标签键name，标签值zhangsan,lisi，{"Name": "tag:name","Values": ["zhangsan", "lisi"]}。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- fuzzy-search
按照【负载均衡VIP，负载均衡名称】模糊搜索，例如："1.1"。
类型：String
必选：否
 */
class DescribeLoadBalancersDetailRequest extends AbstractModel
{
    /**
     * @var integer 返回负载均衡列表数目，默认20，最大值100。
     */
    public $Limit;

    /**
     * @var integer 返回负载均衡列表起始偏移量，默认0。
     */
    public $Offset;

    /**
     * @var array 选择返回的Fields列表，系统仅会返回Fileds中填写的字段，可填写的字段详情请参见<a href="https://cloud.tencent.com/document/api/214/30694#LoadBalancerDetail">LoadBalancerDetail</a>。若未在Fileds填写相关字段，则此字段返回null。Fileds中默认添加LoadBalancerId和LoadBalancerName字段。
     */
    public $Fields;

    /**
     * @var string 当Fields包含TargetId、TargetAddress、TargetPort、TargetWeight、ListenerId、Protocol、Port、LocationId、Domain、Url等Fields时，必选选择导出目标组的Target或者非目标组Target，取值范围NODE、GROUP。
     */
    public $TargetType;

    /**
     * @var array 查询负载均衡详细信息列表条件，详细的过滤条件如下：
- loadbalancer-id
按照【负载均衡ID】进行过滤。例如：lb-rbw5skde。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- project-id
按照【项目ID】进行过滤。例如： "0"、"123"。
类型：String
必选：否
获取方式：[DescribeProject](https://cloud.tencent.com/document/api/651/78725)
- network
按照【负载均衡网络类型】进行过滤。例如：Public。
类型：String
必选：否
可选值：Private（内网）、Public（公网）
- vip
按照【负载均衡 VIP】进行过滤。例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
- vpcid
按照【负载均衡所属 VPCID】进行过滤。例如："vpc-12345678"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- target-ip
按照【后端目标内网 IP】进行过滤。例如："1.1.1.1","2203::214:4"。
类型：String
必选：否
- zone
按照【负载均衡所属的可用区】进行过滤。例如："ap-guangzhou-1"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【负载均衡标签的标签键】进行过滤，例如："name"。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:*
按照【负载均衡的标签】进行过滤，':' 后面跟的是标签键。如过滤标签键name，标签值zhangsan,lisi，{"Name": "tag:name","Values": ["zhangsan", "lisi"]}。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- fuzzy-search
按照【负载均衡VIP，负载均衡名称】模糊搜索，例如："1.1"。
类型：String
必选：否
     */
    public $Filters;

    /**
     * @param integer $Limit 返回负载均衡列表数目，默认20，最大值100。
     * @param integer $Offset 返回负载均衡列表起始偏移量，默认0。
     * @param array $Fields 选择返回的Fields列表，系统仅会返回Fileds中填写的字段，可填写的字段详情请参见<a href="https://cloud.tencent.com/document/api/214/30694#LoadBalancerDetail">LoadBalancerDetail</a>。若未在Fileds填写相关字段，则此字段返回null。Fileds中默认添加LoadBalancerId和LoadBalancerName字段。
     * @param string $TargetType 当Fields包含TargetId、TargetAddress、TargetPort、TargetWeight、ListenerId、Protocol、Port、LocationId、Domain、Url等Fields时，必选选择导出目标组的Target或者非目标组Target，取值范围NODE、GROUP。
     * @param array $Filters 查询负载均衡详细信息列表条件，详细的过滤条件如下：
- loadbalancer-id
按照【负载均衡ID】进行过滤。例如：lb-rbw5skde。
类型：String
必选：否
获取方式：[DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459)
- project-id
按照【项目ID】进行过滤。例如： "0"、"123"。
类型：String
必选：否
获取方式：[DescribeProject](https://cloud.tencent.com/document/api/651/78725)
- network
按照【负载均衡网络类型】进行过滤。例如：Public。
类型：String
必选：否
可选值：Private（内网）、Public（公网）
- vip
按照【负载均衡 VIP】进行过滤。例如："1.1.1.1","2204::22:3"。
类型：String
必选：否
- vpcid
按照【负载均衡所属 VPCID】进行过滤。例如："vpc-12345678"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- target-ip
按照【后端目标内网 IP】进行过滤。例如："1.1.1.1","2203::214:4"。
类型：String
必选：否
- zone
按照【负载均衡所属的可用区】进行过滤。例如："ap-guangzhou-1"。
类型：String
必选：否
获取方式：[DescribeZones](https://cloud.tencent.com/document/product/213/15707)
- tag-key
按照【负载均衡标签的标签键】进行过滤，例如："name"。
类型：String
必选：否
获取方式：[DescribeTags](https://cloud.tencent.com/document/api/651/35316)
- tag:*
按照【负载均衡的标签】进行过滤，':' 后面跟的是标签键。如过滤标签键name，标签值zhangsan,lisi，{"Name": "tag:name","Values": ["zhangsan", "lisi"]}。
类型：String
必选：否
获取方式：[DescribeTagKeys](https://cloud.tencent.com/document/api/651/35318)
- fuzzy-search
按照【负载均衡VIP，负载均衡名称】模糊搜索，例如："1.1"。
类型：String
必选：否
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = $param["Fields"];
        }

        if (array_key_exists("TargetType",$param) and $param["TargetType"] !== null) {
            $this->TargetType = $param["TargetType"];
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
