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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 环境基础信息
 *
 * @method string getEnvId() 获取环境Id
 * @method void setEnvId(string $EnvId) 设置环境Id
 * @method string getPackageType() 获取套餐类型：Trial ｜ Standard ｜ Professional ｜ Enterprise
 * @method void setPackageType(string $PackageType) 设置套餐类型：Trial ｜ Standard ｜ Professional ｜ Enterprise
 * @method string getVpcId() 获取VPC Id
 * @method void setVpcId(string $VpcId) 设置VPC Id
 * @method string getCreateTime() 获取环境创建时间
 * @method void setCreateTime(string $CreateTime) 设置环境创建时间
 * @method string getAlias() 获取环境别名
 * @method void setAlias(string $Alias) 设置环境别名
 * @method string getStatus() 获取环境状态
 * @method void setStatus(string $Status) 设置环境状态
 * @method string getRegion() 获取环境地域
 * @method void setRegion(string $Region) 设置环境地域
 * @method string getEnvType() 获取环境类型 tcbr ｜ run
 * @method void setEnvType(string $EnvType) 设置环境类型 tcbr ｜ run
 * @method string getSubnetIds() 获取子网id
 * @method void setSubnetIds(string $SubnetIds) 设置子网id
 */
class EnvBaseInfo extends AbstractModel
{
    /**
     * @var string 环境Id
     */
    public $EnvId;

    /**
     * @var string 套餐类型：Trial ｜ Standard ｜ Professional ｜ Enterprise
     */
    public $PackageType;

    /**
     * @var string VPC Id
     */
    public $VpcId;

    /**
     * @var string 环境创建时间
     */
    public $CreateTime;

    /**
     * @var string 环境别名
     */
    public $Alias;

    /**
     * @var string 环境状态
     */
    public $Status;

    /**
     * @var string 环境地域
     */
    public $Region;

    /**
     * @var string 环境类型 tcbr ｜ run
     */
    public $EnvType;

    /**
     * @var string 子网id
     */
    public $SubnetIds;

    /**
     * @param string $EnvId 环境Id
     * @param string $PackageType 套餐类型：Trial ｜ Standard ｜ Professional ｜ Enterprise
     * @param string $VpcId VPC Id
     * @param string $CreateTime 环境创建时间
     * @param string $Alias 环境别名
     * @param string $Status 环境状态
     * @param string $Region 环境地域
     * @param string $EnvType 环境类型 tcbr ｜ run
     * @param string $SubnetIds 子网id
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
        if (array_key_exists("EnvId",$param) and $param["EnvId"] !== null) {
            $this->EnvId = $param["EnvId"];
        }

        if (array_key_exists("PackageType",$param) and $param["PackageType"] !== null) {
            $this->PackageType = $param["PackageType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }
    }
}
