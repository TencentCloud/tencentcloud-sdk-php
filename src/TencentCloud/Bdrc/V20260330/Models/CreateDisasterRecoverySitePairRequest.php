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
 * CreateDisasterRecoverySitePair请求参数结构体
 *
 * @method string getDisasterRecoveryType() 获取容灾策略的容灾类型，跨地域：CROSS_REGION，或跨可用区：CROSS_ZONE
 * @method void setDisasterRecoveryType(string $DisasterRecoveryType) 设置容灾策略的容灾类型，跨地域：CROSS_REGION，或跨可用区：CROSS_ZONE
 * @method string getSourceRegion() 获取生产站点地域
 * @method void setSourceRegion(string $SourceRegion) 设置生产站点地域
 * @method string getSourceZone() 获取容灾策略生产站点可用区
 * @method void setSourceZone(string $SourceZone) 设置容灾策略生产站点可用区
 * @method string getTargetRegion() 获取容灾站点地域
 * @method void setTargetRegion(string $TargetRegion) 设置容灾站点地域
 * @method string getTargetZone() 获取容灾策略容灾站点可用区
 * @method void setTargetZone(string $TargetZone) 设置容灾策略容灾站点可用区
 * @method string getSourceVpc() 获取容灾策略生产vpc
 * @method void setSourceVpc(string $SourceVpc) 设置容灾策略生产vpc
 * @method string getTargetVpc() 获取容灾策略容灾vpc
 * @method void setTargetVpc(string $TargetVpc) 设置容灾策略容灾vpc
 * @method string getSitePairProductType() 获取容灾策略所属产品类型，包括DISK、CFS、INSTANCE
 * @method void setSitePairProductType(string $SitePairProductType) 设置容灾策略所属产品类型，包括DISK、CFS、INSTANCE
 * @method string getSitePairName() 获取容灾策略的名称，最大长度为60个字符。
 * @method void setSitePairName(string $SitePairName) 设置容灾策略的名称，最大长度为60个字符。
 * @method string getCopyType() 获取容灾策略复制技术SYN/ASY
 * @method void setCopyType(string $CopyType) 设置容灾策略复制技术SYN/ASY
 */
class CreateDisasterRecoverySitePairRequest extends AbstractModel
{
    /**
     * @var string 容灾策略的容灾类型，跨地域：CROSS_REGION，或跨可用区：CROSS_ZONE
     */
    public $DisasterRecoveryType;

    /**
     * @var string 生产站点地域
     */
    public $SourceRegion;

    /**
     * @var string 容灾策略生产站点可用区
     */
    public $SourceZone;

    /**
     * @var string 容灾站点地域
     */
    public $TargetRegion;

    /**
     * @var string 容灾策略容灾站点可用区
     */
    public $TargetZone;

    /**
     * @var string 容灾策略生产vpc
     */
    public $SourceVpc;

    /**
     * @var string 容灾策略容灾vpc
     */
    public $TargetVpc;

    /**
     * @var string 容灾策略所属产品类型，包括DISK、CFS、INSTANCE
     */
    public $SitePairProductType;

    /**
     * @var string 容灾策略的名称，最大长度为60个字符。
     */
    public $SitePairName;

    /**
     * @var string 容灾策略复制技术SYN/ASY
     */
    public $CopyType;

    /**
     * @param string $DisasterRecoveryType 容灾策略的容灾类型，跨地域：CROSS_REGION，或跨可用区：CROSS_ZONE
     * @param string $SourceRegion 生产站点地域
     * @param string $SourceZone 容灾策略生产站点可用区
     * @param string $TargetRegion 容灾站点地域
     * @param string $TargetZone 容灾策略容灾站点可用区
     * @param string $SourceVpc 容灾策略生产vpc
     * @param string $TargetVpc 容灾策略容灾vpc
     * @param string $SitePairProductType 容灾策略所属产品类型，包括DISK、CFS、INSTANCE
     * @param string $SitePairName 容灾策略的名称，最大长度为60个字符。
     * @param string $CopyType 容灾策略复制技术SYN/ASY
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
        if (array_key_exists("DisasterRecoveryType",$param) and $param["DisasterRecoveryType"] !== null) {
            $this->DisasterRecoveryType = $param["DisasterRecoveryType"];
        }

        if (array_key_exists("SourceRegion",$param) and $param["SourceRegion"] !== null) {
            $this->SourceRegion = $param["SourceRegion"];
        }

        if (array_key_exists("SourceZone",$param) and $param["SourceZone"] !== null) {
            $this->SourceZone = $param["SourceZone"];
        }

        if (array_key_exists("TargetRegion",$param) and $param["TargetRegion"] !== null) {
            $this->TargetRegion = $param["TargetRegion"];
        }

        if (array_key_exists("TargetZone",$param) and $param["TargetZone"] !== null) {
            $this->TargetZone = $param["TargetZone"];
        }

        if (array_key_exists("SourceVpc",$param) and $param["SourceVpc"] !== null) {
            $this->SourceVpc = $param["SourceVpc"];
        }

        if (array_key_exists("TargetVpc",$param) and $param["TargetVpc"] !== null) {
            $this->TargetVpc = $param["TargetVpc"];
        }

        if (array_key_exists("SitePairProductType",$param) and $param["SitePairProductType"] !== null) {
            $this->SitePairProductType = $param["SitePairProductType"];
        }

        if (array_key_exists("SitePairName",$param) and $param["SitePairName"] !== null) {
            $this->SitePairName = $param["SitePairName"];
        }

        if (array_key_exists("CopyType",$param) and $param["CopyType"] !== null) {
            $this->CopyType = $param["CopyType"];
        }
    }
}
