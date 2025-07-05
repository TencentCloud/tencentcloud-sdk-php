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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleUpInstance请求参数结构体
 *
 * @method string getInstanceId() 获取集群唯一ID
 * @method void setInstanceId(string $InstanceId) 设置集群唯一ID
 * @method string getCase() 获取变更资源类型
 * @method void setCase(string $Case) 设置变更资源类型
 * @method CNResourceSpec getModifySpec() 获取修改的参数
 * @method void setModifySpec(CNResourceSpec $ModifySpec) 设置修改的参数
 * @method string getInstanceName() 获取集群名称
 * @method void setInstanceName(string $InstanceName) 设置集群名称
 */
class ScaleUpInstanceRequest extends AbstractModel
{
    /**
     * @var string 集群唯一ID
     */
    public $InstanceId;

    /**
     * @var string 变更资源类型
     */
    public $Case;

    /**
     * @var CNResourceSpec 修改的参数
     */
    public $ModifySpec;

    /**
     * @var string 集群名称
     */
    public $InstanceName;

    /**
     * @param string $InstanceId 集群唯一ID
     * @param string $Case 变更资源类型
     * @param CNResourceSpec $ModifySpec 修改的参数
     * @param string $InstanceName 集群名称
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Case",$param) and $param["Case"] !== null) {
            $this->Case = $param["Case"];
        }

        if (array_key_exists("ModifySpec",$param) and $param["ModifySpec"] !== null) {
            $this->ModifySpec = new CNResourceSpec();
            $this->ModifySpec->deserialize($param["ModifySpec"]);
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }
    }
}
