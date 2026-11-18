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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * VPC信息
 *
 * @method string getUniqVpcId() 获取<p>VPC 唯一 ID</p><p>参数格式：vpc-xxxxx</p>
 * @method void setUniqVpcId(string $UniqVpcId) 设置<p>VPC 唯一 ID</p><p>参数格式：vpc-xxxxx</p>
 * @method string getRegion() 获取<p>VPC 所在地域</p><p>参数格式：ap-xxxx</p>
 * @method void setRegion(string $Region) 设置<p>VPC 所在地域</p><p>参数格式：ap-xxxx</p>
 */
class VPCInfo extends AbstractModel
{
    /**
     * @var string <p>VPC 唯一 ID</p><p>参数格式：vpc-xxxxx</p>
     */
    public $UniqVpcId;

    /**
     * @var string <p>VPC 所在地域</p><p>参数格式：ap-xxxx</p>
     */
    public $Region;

    /**
     * @param string $UniqVpcId <p>VPC 唯一 ID</p><p>参数格式：vpc-xxxxx</p>
     * @param string $Region <p>VPC 所在地域</p><p>参数格式：ap-xxxx</p>
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
        if (array_key_exists("UniqVpcId",$param) and $param["UniqVpcId"] !== null) {
            $this->UniqVpcId = $param["UniqVpcId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
