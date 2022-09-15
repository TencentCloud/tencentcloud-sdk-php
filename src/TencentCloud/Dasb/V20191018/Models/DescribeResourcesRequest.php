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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResources请求参数结构体
 *
 * @method string getApCode() 获取地域码, 如: ap-guangzhou
 * @method void setApCode(string $ApCode) 设置地域码, 如: ap-guangzhou
 * @method string getVpcId() 获取按照堡垒机开通的 VPC 实例ID查询
 * @method void setVpcId(string $VpcId) 设置按照堡垒机开通的 VPC 实例ID查询
 * @method array getResourceIds() 获取资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId
 * @method void setResourceIds(array $ResourceIds) 设置资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId
 */
class DescribeResourcesRequest extends AbstractModel
{
    /**
     * @var string 地域码, 如: ap-guangzhou
     */
    public $ApCode;

    /**
     * @var string 按照堡垒机开通的 VPC 实例ID查询
     */
    public $VpcId;

    /**
     * @var array 资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId
     */
    public $ResourceIds;

    /**
     * @param string $ApCode 地域码, 如: ap-guangzhou
     * @param string $VpcId 按照堡垒机开通的 VPC 实例ID查询
     * @param array $ResourceIds 资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId
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
        if (array_key_exists("ApCode",$param) and $param["ApCode"] !== null) {
            $this->ApCode = $param["ApCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ResourceIds",$param) and $param["ResourceIds"] !== null) {
            $this->ResourceIds = $param["ResourceIds"];
        }
    }
}
