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
namespace TencentCloud\Bh\V20230418\Models;
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
 * @method integer getLimit() 获取每页条目数量
 * @method void setLimit(integer $Limit) 设置每页条目数量
 * @method integer getOffset() 获取分页偏移位置
 * @method void setOffset(integer $Offset) 设置分页偏移位置
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
     * @var integer 每页条目数量
     */
    public $Limit;

    /**
     * @var integer 分页偏移位置
     */
    public $Offset;

    /**
     * @param string $ApCode 地域码, 如: ap-guangzhou
     * @param string $VpcId 按照堡垒机开通的 VPC 实例ID查询
     * @param array $ResourceIds 资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId
     * @param integer $Limit 每页条目数量
     * @param integer $Offset 分页偏移位置
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
