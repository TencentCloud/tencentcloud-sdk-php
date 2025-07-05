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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyHpcClusterAttribute请求参数结构体
 *
 * @method string getHpcClusterId() 获取高性能计算集群ID。集群ID可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
 * @method void setHpcClusterId(string $HpcClusterId) 设置高性能计算集群ID。集群ID可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
 * @method string getName() 获取高性能计算集群新名称，长度限制[1-60]。
 * @method void setName(string $Name) 设置高性能计算集群新名称，长度限制[1-60]。
 * @method string getRemark() 获取高性能计算集群新备注，长度[1-256]。
 * @method void setRemark(string $Remark) 设置高性能计算集群新备注，长度[1-256]。
 */
class ModifyHpcClusterAttributeRequest extends AbstractModel
{
    /**
     * @var string 高性能计算集群ID。集群ID可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
     */
    public $HpcClusterId;

    /**
     * @var string 高性能计算集群新名称，长度限制[1-60]。
     */
    public $Name;

    /**
     * @var string 高性能计算集群新备注，长度[1-256]。
     */
    public $Remark;

    /**
     * @param string $HpcClusterId 高性能计算集群ID。集群ID可通过 [查询高性能集群信息](https://cloud.tencent.com/document/api/213/83220) 接口获取。
     * @param string $Name 高性能计算集群新名称，长度限制[1-60]。
     * @param string $Remark 高性能计算集群新备注，长度[1-256]。
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
        if (array_key_exists("HpcClusterId",$param) and $param["HpcClusterId"] !== null) {
            $this->HpcClusterId = $param["HpcClusterId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }
    }
}
