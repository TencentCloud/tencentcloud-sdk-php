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
 * SetCustomizedConfigForLoadBalancer请求参数结构体
 *
 * @method string getOperationType() 获取操作类型。
- ADD：创建
- DELETE：删除
- UPDATE：修改
- BIND：绑定
- UNBIND：解绑
 * @method void setOperationType(string $OperationType) 设置操作类型。
- ADD：创建
- DELETE：删除
- UPDATE：修改
- BIND：绑定
- UNBIND：解绑
 * @method string getUconfigId() 获取个性化配置ID。除了创建个性化配置外，必传此字段，如：pz-1234abcd
 * @method void setUconfigId(string $UconfigId) 设置个性化配置ID。除了创建个性化配置外，必传此字段，如：pz-1234abcd
 * @method string getConfigContent() 获取个性化配置内容。创建个性化配置或修改个性化配置的内容时，必传此字段。
具体限制查看 [七层个性化配置](https://cloud.tencent.com/document/product/214/15171)
 * @method void setConfigContent(string $ConfigContent) 设置个性化配置内容。创建个性化配置或修改个性化配置的内容时，必传此字段。
具体限制查看 [七层个性化配置](https://cloud.tencent.com/document/product/214/15171)
 * @method string getConfigName() 获取个性化配置名称。创建个性化配置或修改个性化配置的名字时，必传此字段。
 * @method void setConfigName(string $ConfigName) 设置个性化配置名称。创建个性化配置或修改个性化配置的名字时，必传此字段。
 * @method array getLoadBalancerIds() 获取负载均衡实例ID。绑定解绑时，必传此字段。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置负载均衡实例ID。绑定解绑时，必传此字段。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
 */
class SetCustomizedConfigForLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 操作类型。
- ADD：创建
- DELETE：删除
- UPDATE：修改
- BIND：绑定
- UNBIND：解绑
     */
    public $OperationType;

    /**
     * @var string 个性化配置ID。除了创建个性化配置外，必传此字段，如：pz-1234abcd
     */
    public $UconfigId;

    /**
     * @var string 个性化配置内容。创建个性化配置或修改个性化配置的内容时，必传此字段。
具体限制查看 [七层个性化配置](https://cloud.tencent.com/document/product/214/15171)
     */
    public $ConfigContent;

    /**
     * @var string 个性化配置名称。创建个性化配置或修改个性化配置的名字时，必传此字段。
     */
    public $ConfigName;

    /**
     * @var array 负载均衡实例ID。绑定解绑时，必传此字段。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
     */
    public $LoadBalancerIds;

    /**
     * @param string $OperationType 操作类型。
- ADD：创建
- DELETE：删除
- UPDATE：修改
- BIND：绑定
- UNBIND：解绑
     * @param string $UconfigId 个性化配置ID。除了创建个性化配置外，必传此字段，如：pz-1234abcd
     * @param string $ConfigContent 个性化配置内容。创建个性化配置或修改个性化配置的内容时，必传此字段。
具体限制查看 [七层个性化配置](https://cloud.tencent.com/document/product/214/15171)
     * @param string $ConfigName 个性化配置名称。创建个性化配置或修改个性化配置的名字时，必传此字段。
     * @param array $LoadBalancerIds 负载均衡实例ID。绑定解绑时，必传此字段。
可以通过 [DescribeLoadBalancers](https://cloud.tencent.com/document/product/1108/48459) 接口查询。
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
