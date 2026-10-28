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
namespace TencentCloud\Cfg\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InstallAgentOpenApi请求参数结构体
 *
 * @method integer getInstanceType() 获取<p>1:CVM<br>2:TKE</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>1:CVM<br>2:TKE</p>
 * @method array getInstanceIds() 获取<p>安装探针实例列表</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>安装探针实例列表</p>
 */
class InstallAgentOpenApiRequest extends AbstractModel
{
    /**
     * @var integer <p>1:CVM<br>2:TKE</p>
     */
    public $InstanceType;

    /**
     * @var array <p>安装探针实例列表</p>
     */
    public $InstanceIds;

    /**
     * @param integer $InstanceType <p>1:CVM<br>2:TKE</p>
     * @param array $InstanceIds <p>安装探针实例列表</p>
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }
    }
}
