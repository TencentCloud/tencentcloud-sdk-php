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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAgentInstallCommand请求参数结构体
 *
 * @method boolean getIsCloud() 获取是否腾讯云
 * @method void setIsCloud(boolean $IsCloud) 设置是否腾讯云
 * @method string getNetType() 获取网络类型：basic-基础网络，private-VPC, public-公网，direct-专线
 * @method void setNetType(string $NetType) 设置网络类型：basic-基础网络，private-VPC, public-公网，direct-专线
 * @method string getRegionCode() 获取地域标示, NetType=direct时必填
 * @method void setRegionCode(string $RegionCode) 设置地域标示, NetType=direct时必填
 * @method string getVpcId() 获取VpcId, NetType=direct时必填
 * @method void setVpcId(string $VpcId) 设置VpcId, NetType=direct时必填
 * @method array getTagIds() 获取标签ID列表，IsCloud=false时才会生效
 * @method void setTagIds(array $TagIds) 设置标签ID列表，IsCloud=false时才会生效
 * @method string getExpireDate() 获取命令有效期，非腾讯云时必填（已废弃，命令永久生效）
 * @method void setExpireDate(string $ExpireDate) 设置命令有效期，非腾讯云时必填（已废弃，命令永久生效）
 * @method string getVip() 获取代理方式接入的vip
 * @method void setVip(string $Vip) 设置代理方式接入的vip
 */
class DescribeAgentInstallCommandRequest extends AbstractModel
{
    /**
     * @var boolean 是否腾讯云
     */
    public $IsCloud;

    /**
     * @var string 网络类型：basic-基础网络，private-VPC, public-公网，direct-专线
     */
    public $NetType;

    /**
     * @var string 地域标示, NetType=direct时必填
     */
    public $RegionCode;

    /**
     * @var string VpcId, NetType=direct时必填
     */
    public $VpcId;

    /**
     * @var array 标签ID列表，IsCloud=false时才会生效
     */
    public $TagIds;

    /**
     * @var string 命令有效期，非腾讯云时必填（已废弃，命令永久生效）
     */
    public $ExpireDate;

    /**
     * @var string 代理方式接入的vip
     */
    public $Vip;

    /**
     * @param boolean $IsCloud 是否腾讯云
     * @param string $NetType 网络类型：basic-基础网络，private-VPC, public-公网，direct-专线
     * @param string $RegionCode 地域标示, NetType=direct时必填
     * @param string $VpcId VpcId, NetType=direct时必填
     * @param array $TagIds 标签ID列表，IsCloud=false时才会生效
     * @param string $ExpireDate 命令有效期，非腾讯云时必填（已废弃，命令永久生效）
     * @param string $Vip 代理方式接入的vip
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
        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
