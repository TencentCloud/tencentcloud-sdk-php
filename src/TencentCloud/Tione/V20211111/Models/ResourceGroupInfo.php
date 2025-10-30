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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 在线服务中服务的资源组简略信息结构
 *
 * @method string getResourceGroupId() 获取资源组 id
 * @method void setResourceGroupId(string $ResourceGroupId) 设置资源组 id
 * @method string getResourceGroupName() 获取资源组名称
 * @method void setResourceGroupName(string $ResourceGroupName) 设置资源组名称
 */
class ResourceGroupInfo extends AbstractModel
{
    /**
     * @var string 资源组 id
     */
    public $ResourceGroupId;

    /**
     * @var string 资源组名称
     */
    public $ResourceGroupName;

    /**
     * @param string $ResourceGroupId 资源组 id
     * @param string $ResourceGroupName 资源组名称
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
        if (array_key_exists("ResourceGroupId",$param) and $param["ResourceGroupId"] !== null) {
            $this->ResourceGroupId = $param["ResourceGroupId"];
        }

        if (array_key_exists("ResourceGroupName",$param) and $param["ResourceGroupName"] !== null) {
            $this->ResourceGroupName = $param["ResourceGroupName"];
        }
    }
}
