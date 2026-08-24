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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDisasterRecoveryVpcMapping请求参数结构体
 *
 * @method string getSourceVpcId() 获取源端VPC ID
 * @method void setSourceVpcId(string $SourceVpcId) 设置源端VPC ID
 * @method string getSourceSubnetId() 获取源端子网ID
 * @method void setSourceSubnetId(string $SourceSubnetId) 设置源端子网ID
 * @method string getTargetVpcId() 获取目标端VPC ID
 * @method void setTargetVpcId(string $TargetVpcId) 设置目标端VPC ID
 * @method string getTargetSubnetId() 获取目标端子网ID
 * @method void setTargetSubnetId(string $TargetSubnetId) 设置目标端子网ID
 * @method string getSitePairId() 获取站点对ID
 * @method void setSitePairId(string $SitePairId) 设置站点对ID
 */
class CreateDisasterRecoveryVpcMappingRequest extends AbstractModel
{
    /**
     * @var string 源端VPC ID
     */
    public $SourceVpcId;

    /**
     * @var string 源端子网ID
     */
    public $SourceSubnetId;

    /**
     * @var string 目标端VPC ID
     */
    public $TargetVpcId;

    /**
     * @var string 目标端子网ID
     */
    public $TargetSubnetId;

    /**
     * @var string 站点对ID
     */
    public $SitePairId;

    /**
     * @param string $SourceVpcId 源端VPC ID
     * @param string $SourceSubnetId 源端子网ID
     * @param string $TargetVpcId 目标端VPC ID
     * @param string $TargetSubnetId 目标端子网ID
     * @param string $SitePairId 站点对ID
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
        if (array_key_exists("SourceVpcId",$param) and $param["SourceVpcId"] !== null) {
            $this->SourceVpcId = $param["SourceVpcId"];
        }

        if (array_key_exists("SourceSubnetId",$param) and $param["SourceSubnetId"] !== null) {
            $this->SourceSubnetId = $param["SourceSubnetId"];
        }

        if (array_key_exists("TargetVpcId",$param) and $param["TargetVpcId"] !== null) {
            $this->TargetVpcId = $param["TargetVpcId"];
        }

        if (array_key_exists("TargetSubnetId",$param) and $param["TargetSubnetId"] !== null) {
            $this->TargetSubnetId = $param["TargetSubnetId"];
        }

        if (array_key_exists("SitePairId",$param) and $param["SitePairId"] !== null) {
            $this->SitePairId = $param["SitePairId"];
        }
    }
}
