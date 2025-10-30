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
 * 标准pod对象类型下拉数据的解析
 *
 * @method string getNameSpace() 获取命名空间
 * @method void setNameSpace(string $NameSpace) 设置命名空间
 * @method string getWorkloadName() 获取工作负载名称
 * @method void setWorkloadName(string $WorkloadName) 设置工作负载名称
 * @method string getLanIP() 获取节点IP
 * @method void setLanIP(string $LanIP) 设置节点IP
 * @method string getInstanceId() 获取节点ID
 * @method void setInstanceId(string $InstanceId) 设置节点ID
 */
class ObjectTypeJsonParse extends AbstractModel
{
    /**
     * @var string 命名空间
     */
    public $NameSpace;

    /**
     * @var string 工作负载名称
     */
    public $WorkloadName;

    /**
     * @var string 节点IP
     */
    public $LanIP;

    /**
     * @var string 节点ID
     */
    public $InstanceId;

    /**
     * @param string $NameSpace 命名空间
     * @param string $WorkloadName 工作负载名称
     * @param string $LanIP 节点IP
     * @param string $InstanceId 节点ID
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
        if (array_key_exists("NameSpace",$param) and $param["NameSpace"] !== null) {
            $this->NameSpace = $param["NameSpace"];
        }

        if (array_key_exists("WorkloadName",$param) and $param["WorkloadName"] !== null) {
            $this->WorkloadName = $param["WorkloadName"];
        }

        if (array_key_exists("LanIP",$param) and $param["LanIP"] !== null) {
            $this->LanIP = $param["LanIP"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
