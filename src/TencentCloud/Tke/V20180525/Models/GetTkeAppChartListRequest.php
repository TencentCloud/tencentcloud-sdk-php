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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTkeAppChartList请求参数结构体
 *
 * @method string getKind() 获取app类型，取值log,scheduler,network,storage,monitor,dns,image,other,invisible
 * @method void setKind(string $Kind) 设置app类型，取值log,scheduler,network,storage,monitor,dns,image,other,invisible
 * @method string getArch() 获取app支持的操作系统，取值arm32、arm64、amd64
 * @method void setArch(string $Arch) 设置app支持的操作系统，取值arm32、arm64、amd64
 * @method string getClusterType() 获取集群类型，取值tke、eks
 * @method void setClusterType(string $ClusterType) 设置集群类型，取值tke、eks
 */
class GetTkeAppChartListRequest extends AbstractModel
{
    /**
     * @var string app类型，取值log,scheduler,network,storage,monitor,dns,image,other,invisible
     */
    public $Kind;

    /**
     * @var string app支持的操作系统，取值arm32、arm64、amd64
     */
    public $Arch;

    /**
     * @var string 集群类型，取值tke、eks
     */
    public $ClusterType;

    /**
     * @param string $Kind app类型，取值log,scheduler,network,storage,monitor,dns,image,other,invisible
     * @param string $Arch app支持的操作系统，取值arm32、arm64、amd64
     * @param string $ClusterType 集群类型，取值tke、eks
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
        if (array_key_exists("Kind",$param) and $param["Kind"] !== null) {
            $this->Kind = $param["Kind"];
        }

        if (array_key_exists("Arch",$param) and $param["Arch"] !== null) {
            $this->Arch = $param["Arch"];
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }
    }
}
