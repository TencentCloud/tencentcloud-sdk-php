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
 * BindDeviceAccountKubeconfig请求参数结构体
 *
 * @method integer getId() 获取容器账号Id
 * @method void setId(integer $Id) 设置容器账号Id
 * @method string getKubeconfig() 获取容器账号凭据
 * @method void setKubeconfig(string $Kubeconfig) 设置容器账号凭据
 * @method integer getManageDimension() 获取托管维度。1-集群
 * @method void setManageDimension(integer $ManageDimension) 设置托管维度。1-集群
 */
class BindDeviceAccountKubeconfigRequest extends AbstractModel
{
    /**
     * @var integer 容器账号Id
     */
    public $Id;

    /**
     * @var string 容器账号凭据
     */
    public $Kubeconfig;

    /**
     * @var integer 托管维度。1-集群
     */
    public $ManageDimension;

    /**
     * @param integer $Id 容器账号Id
     * @param string $Kubeconfig 容器账号凭据
     * @param integer $ManageDimension 托管维度。1-集群
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Kubeconfig",$param) and $param["Kubeconfig"] !== null) {
            $this->Kubeconfig = $param["Kubeconfig"];
        }

        if (array_key_exists("ManageDimension",$param) and $param["ManageDimension"] !== null) {
            $this->ManageDimension = $param["ManageDimension"];
        }
    }
}
