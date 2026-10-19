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
 * @method string getApCode() 获取<p>地域码, 如: ap-guangzhou</p>
 * @method void setApCode(string $ApCode) 设置<p>地域码, 如: ap-guangzhou</p>
 * @method string getVpcId() 获取<p>按照堡垒机开通的 VPC 实例ID查询</p>
 * @method void setVpcId(string $VpcId) 设置<p>按照堡垒机开通的 VPC 实例ID查询</p>
 * @method array getResourceIds() 获取<p>资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId</p>
 * @method void setResourceIds(array $ResourceIds) 设置<p>资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId</p>
 * @method integer getLimit() 获取<p>每页条目数量</p>
 * @method void setLimit(integer $Limit) 设置<p>每页条目数量</p>
 * @method integer getOffset() 获取<p>分页偏移位置</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移位置</p>
 */
class DescribeResourcesRequest extends AbstractModel
{
    /**
     * @var string <p>地域码, 如: ap-guangzhou</p>
     */
    public $ApCode;

    /**
     * @var string <p>按照堡垒机开通的 VPC 实例ID查询</p>
     */
    public $VpcId;

    /**
     * @var array <p>资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId</p>
     */
    public $ResourceIds;

    /**
     * @var integer <p>每页条目数量</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移位置</p>
     */
    public $Offset;

    /**
     * @param string $ApCode <p>地域码, 如: ap-guangzhou</p>
     * @param string $VpcId <p>按照堡垒机开通的 VPC 实例ID查询</p>
     * @param array $ResourceIds <p>资源ID集合，当传入ID集合时忽略 ApCode 和 VpcId</p>
     * @param integer $Limit <p>每页条目数量</p>
     * @param integer $Offset <p>分页偏移位置</p>
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
