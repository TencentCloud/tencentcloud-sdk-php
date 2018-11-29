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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method array getInstanceIds() 获取按照一个或者多个实例ID查询。实例ID形如：`ins-xxxxxxxx`。（此参数的具体格式可参考API[简介](https://cloud.tencent.com/document/api/213/15688)的`id.N`一节）。每次请求的实例的上限为100。参数不支持同时指定`InstanceIds`和`Filters`。
 * @method void setInstanceIds(array $InstanceIds) 设置按照一个或者多个实例ID查询。实例ID形如：`ins-xxxxxxxx`。（此参数的具体格式可参考API[简介](https://cloud.tencent.com/document/api/213/15688)的`id.N`一节）。每次请求的实例的上限为100。参数不支持同时指定`InstanceIds`和`Filters`。
 * @method array getFilters() 获取过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤。</li>
<li> project-id - Integer - 是否必填：否 -（过滤条件）按照项目ID过滤。可通过调用[DescribeProject](https://cloud.tencent.com/document/api/378/4400)查询已创建的项目列表或登录[控制台](https://console.cloud.tencent.com/cvm/index)进行查看；也可以调用[AddProject](https://cloud.tencent.com/document/api/378/4398)创建新的项目。</li>
<li> host-id - String - 是否必填：否 - （过滤条件）按照[CDH](https://cloud.tencent.com/document/product/416) ID过滤。[CDH](https://cloud.tencent.com/document/product/416) ID形如：host-xxxxxxxx。</li>
<li> vpc-id - String - 是否必填：否 - （过滤条件）按照VPC ID进行过滤。VPC ID形如：vpc-xxxxxxxx。</li>
<li> subnet-id - String - 是否必填：否 - （过滤条件）按照子网ID进行过滤。子网ID形如：subnet-xxxxxxxx。</li>
<li> instance-id - String - 是否必填：否 - （过滤条件）按照实例ID过滤。实例ID形如：ins-xxxxxxxx。</li>
<li> security-group-id - String - 是否必填：否 - （过滤条件）按照安全组ID过滤，安全组ID形如: sg-8jlk3f3r。</li>
<li> instance-name - String - 是否必填：否 - （过滤条件）按照实例名称过滤。</li>
<li> instance-charge-type - String - 是否必填：否 -（过滤条件）按照实例计费模式过滤。 (PREPAID：表示预付费，即包年包月 | POSTPAID_BY_HOUR：表示后付费，即按量计费 | CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对[CDH](https://cloud.tencent.com/document/product/416)计费，不对[CDH](https://cloud.tencent.com/document/product/416)上的实例计费。 )  </li>
<li> private-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的内网IP过滤。</li>
<li> public-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的公网IP过滤，包含实例创建时自动分配的IP和实例创建后手动绑定的弹性IP。</li>
<li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li>
<li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`InstanceIds`和`Filters`。
 * @method void setFilters(array $Filters) 设置过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤。</li>
<li> project-id - Integer - 是否必填：否 -（过滤条件）按照项目ID过滤。可通过调用[DescribeProject](https://cloud.tencent.com/document/api/378/4400)查询已创建的项目列表或登录[控制台](https://console.cloud.tencent.com/cvm/index)进行查看；也可以调用[AddProject](https://cloud.tencent.com/document/api/378/4398)创建新的项目。</li>
<li> host-id - String - 是否必填：否 - （过滤条件）按照[CDH](https://cloud.tencent.com/document/product/416) ID过滤。[CDH](https://cloud.tencent.com/document/product/416) ID形如：host-xxxxxxxx。</li>
<li> vpc-id - String - 是否必填：否 - （过滤条件）按照VPC ID进行过滤。VPC ID形如：vpc-xxxxxxxx。</li>
<li> subnet-id - String - 是否必填：否 - （过滤条件）按照子网ID进行过滤。子网ID形如：subnet-xxxxxxxx。</li>
<li> instance-id - String - 是否必填：否 - （过滤条件）按照实例ID过滤。实例ID形如：ins-xxxxxxxx。</li>
<li> security-group-id - String - 是否必填：否 - （过滤条件）按照安全组ID过滤，安全组ID形如: sg-8jlk3f3r。</li>
<li> instance-name - String - 是否必填：否 - （过滤条件）按照实例名称过滤。</li>
<li> instance-charge-type - String - 是否必填：否 -（过滤条件）按照实例计费模式过滤。 (PREPAID：表示预付费，即包年包月 | POSTPAID_BY_HOUR：表示后付费，即按量计费 | CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对[CDH](https://cloud.tencent.com/document/product/416)计费，不对[CDH](https://cloud.tencent.com/document/product/416)上的实例计费。 )  </li>
<li> private-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的内网IP过滤。</li>
<li> public-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的公网IP过滤，包含实例创建时自动分配的IP和实例创建后手动绑定的弹性IP。</li>
<li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li>
<li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`InstanceIds`和`Filters`。
 * @method integer getOffset() 获取偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
 */

/**
 *DescribeInstances请求参数结构体
 */
class DescribeInstancesRequest extends AbstractModel
{
    /**
     * @var array 按照一个或者多个实例ID查询。实例ID形如：`ins-xxxxxxxx`。（此参数的具体格式可参考API[简介](https://cloud.tencent.com/document/api/213/15688)的`id.N`一节）。每次请求的实例的上限为100。参数不支持同时指定`InstanceIds`和`Filters`。
     */
    public $InstanceIds;

    /**
     * @var array 过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤。</li>
<li> project-id - Integer - 是否必填：否 -（过滤条件）按照项目ID过滤。可通过调用[DescribeProject](https://cloud.tencent.com/document/api/378/4400)查询已创建的项目列表或登录[控制台](https://console.cloud.tencent.com/cvm/index)进行查看；也可以调用[AddProject](https://cloud.tencent.com/document/api/378/4398)创建新的项目。</li>
<li> host-id - String - 是否必填：否 - （过滤条件）按照[CDH](https://cloud.tencent.com/document/product/416) ID过滤。[CDH](https://cloud.tencent.com/document/product/416) ID形如：host-xxxxxxxx。</li>
<li> vpc-id - String - 是否必填：否 - （过滤条件）按照VPC ID进行过滤。VPC ID形如：vpc-xxxxxxxx。</li>
<li> subnet-id - String - 是否必填：否 - （过滤条件）按照子网ID进行过滤。子网ID形如：subnet-xxxxxxxx。</li>
<li> instance-id - String - 是否必填：否 - （过滤条件）按照实例ID过滤。实例ID形如：ins-xxxxxxxx。</li>
<li> security-group-id - String - 是否必填：否 - （过滤条件）按照安全组ID过滤，安全组ID形如: sg-8jlk3f3r。</li>
<li> instance-name - String - 是否必填：否 - （过滤条件）按照实例名称过滤。</li>
<li> instance-charge-type - String - 是否必填：否 -（过滤条件）按照实例计费模式过滤。 (PREPAID：表示预付费，即包年包月 | POSTPAID_BY_HOUR：表示后付费，即按量计费 | CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对[CDH](https://cloud.tencent.com/document/product/416)计费，不对[CDH](https://cloud.tencent.com/document/product/416)上的实例计费。 )  </li>
<li> private-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的内网IP过滤。</li>
<li> public-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的公网IP过滤，包含实例创建时自动分配的IP和实例创建后手动绑定的弹性IP。</li>
<li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li>
<li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`InstanceIds`和`Filters`。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    public $Limit;
    /**
     * @param array $InstanceIds 按照一个或者多个实例ID查询。实例ID形如：`ins-xxxxxxxx`。（此参数的具体格式可参考API[简介](https://cloud.tencent.com/document/api/213/15688)的`id.N`一节）。每次请求的实例的上限为100。参数不支持同时指定`InstanceIds`和`Filters`。
     * @param array $Filters 过滤条件。
<li> zone - String - 是否必填：否 -（过滤条件）按照可用区过滤。</li>
<li> project-id - Integer - 是否必填：否 -（过滤条件）按照项目ID过滤。可通过调用[DescribeProject](https://cloud.tencent.com/document/api/378/4400)查询已创建的项目列表或登录[控制台](https://console.cloud.tencent.com/cvm/index)进行查看；也可以调用[AddProject](https://cloud.tencent.com/document/api/378/4398)创建新的项目。</li>
<li> host-id - String - 是否必填：否 - （过滤条件）按照[CDH](https://cloud.tencent.com/document/product/416) ID过滤。[CDH](https://cloud.tencent.com/document/product/416) ID形如：host-xxxxxxxx。</li>
<li> vpc-id - String - 是否必填：否 - （过滤条件）按照VPC ID进行过滤。VPC ID形如：vpc-xxxxxxxx。</li>
<li> subnet-id - String - 是否必填：否 - （过滤条件）按照子网ID进行过滤。子网ID形如：subnet-xxxxxxxx。</li>
<li> instance-id - String - 是否必填：否 - （过滤条件）按照实例ID过滤。实例ID形如：ins-xxxxxxxx。</li>
<li> security-group-id - String - 是否必填：否 - （过滤条件）按照安全组ID过滤，安全组ID形如: sg-8jlk3f3r。</li>
<li> instance-name - String - 是否必填：否 - （过滤条件）按照实例名称过滤。</li>
<li> instance-charge-type - String - 是否必填：否 -（过滤条件）按照实例计费模式过滤。 (PREPAID：表示预付费，即包年包月 | POSTPAID_BY_HOUR：表示后付费，即按量计费 | CDHPAID：表示[CDH](https://cloud.tencent.com/document/product/416)付费，即只对[CDH](https://cloud.tencent.com/document/product/416)计费，不对[CDH](https://cloud.tencent.com/document/product/416)上的实例计费。 )  </li>
<li> private-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的内网IP过滤。</li>
<li> public-ip-address - String - 是否必填：否 - （过滤条件）按照实例主网卡的公网IP过滤，包含实例创建时自动分配的IP和实例创建后手动绑定的弹性IP。</li>
<li> tag-key - String - 是否必填：否 - （过滤条件）按照标签键进行过滤。</li>
<li> tag-value - String - 是否必填：否 - （过滤条件）按照标签值进行过滤。</li>
<li> tag:tag-key - String - 是否必填：否 - （过滤条件）按照标签键值对进行过滤。 tag-key使用具体的标签键进行替换。使用请参考示例2。</li>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为5。参数不支持同时指定`InstanceIds`和`Filters`。
     * @param integer $Offset 偏移量，默认为0。关于`Offset`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     * @param integer $Limit 返回数量，默认为20，最大值为100。关于`Limit`的更进一步介绍请参考 API [简介](https://cloud.tencent.com/document/api/213/15688)中的相关小节。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
