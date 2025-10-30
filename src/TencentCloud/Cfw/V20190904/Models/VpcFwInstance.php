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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * vpc 防火墙下单防火墙实例结构体
 *
 * @method string getName() 获取防火墙实例名称
 * @method void setName(string $Name) 设置防火墙实例名称
 * @method array getVpcIds() 获取私有网络模式下接入的VpcId列表；仅私有网络模式使用
 * @method void setVpcIds(array $VpcIds) 设置私有网络模式下接入的VpcId列表；仅私有网络模式使用
 * @method FwDeploy getFwDeploy() 获取部署地域信息
 * @method void setFwDeploy(FwDeploy $FwDeploy) 设置部署地域信息
 * @method string getFwInsId() 获取防火墙实例ID (编辑场景传)
 * @method void setFwInsId(string $FwInsId) 设置防火墙实例ID (编辑场景传)
 */
class VpcFwInstance extends AbstractModel
{
    /**
     * @var string 防火墙实例名称
     */
    public $Name;

    /**
     * @var array 私有网络模式下接入的VpcId列表；仅私有网络模式使用
     */
    public $VpcIds;

    /**
     * @var FwDeploy 部署地域信息
     */
    public $FwDeploy;

    /**
     * @var string 防火墙实例ID (编辑场景传)
     */
    public $FwInsId;

    /**
     * @param string $Name 防火墙实例名称
     * @param array $VpcIds 私有网络模式下接入的VpcId列表；仅私有网络模式使用
     * @param FwDeploy $FwDeploy 部署地域信息
     * @param string $FwInsId 防火墙实例ID (编辑场景传)
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VpcIds",$param) and $param["VpcIds"] !== null) {
            $this->VpcIds = $param["VpcIds"];
        }

        if (array_key_exists("FwDeploy",$param) and $param["FwDeploy"] !== null) {
            $this->FwDeploy = new FwDeploy();
            $this->FwDeploy->deserialize($param["FwDeploy"]);
        }

        if (array_key_exists("FwInsId",$param) and $param["FwInsId"] !== null) {
            $this->FwInsId = $param["FwInsId"];
        }
    }
}
