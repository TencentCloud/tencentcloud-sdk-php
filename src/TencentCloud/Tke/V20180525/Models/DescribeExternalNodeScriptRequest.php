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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeExternalNodeScript请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getNodePoolId() 获取节点池ID
 * @method void setNodePoolId(string $NodePoolId) 设置节点池ID
 * @method string getInterface() 获取网卡名
 * @method void setInterface(string $Interface) 设置网卡名
 * @method string getName() 获取节点名称
 * @method void setName(string $Name) 设置节点名称
 * @method boolean getInternal() 获取是否内网获取节点初始化脚本
 * @method void setInternal(boolean $Internal) 设置是否内网获取节点初始化脚本
 */
class DescribeExternalNodeScriptRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 节点池ID
     */
    public $NodePoolId;

    /**
     * @var string 网卡名
     */
    public $Interface;

    /**
     * @var string 节点名称
     */
    public $Name;

    /**
     * @var boolean 是否内网获取节点初始化脚本
     */
    public $Internal;

    /**
     * @param string $ClusterId 集群ID
     * @param string $NodePoolId 节点池ID
     * @param string $Interface 网卡名
     * @param string $Name 节点名称
     * @param boolean $Internal 是否内网获取节点初始化脚本
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Interface",$param) and $param["Interface"] !== null) {
            $this->Interface = $param["Interface"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Internal",$param) and $param["Internal"] !== null) {
            $this->Internal = $param["Internal"];
        }
    }
}
