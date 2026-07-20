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
 * ModifyVpcFwGroup请求参数结构体
 *
 * @method string getFwGroupId() 获取<p>编辑的防火墙(组)ID</p>
 * @method void setFwGroupId(string $FwGroupId) 设置<p>编辑的防火墙(组)ID</p>
 * @method string getName() 获取<p>修改防火墙(组)名称</p>
 * @method void setName(string $Name) 设置<p>修改防火墙(组)名称</p>
 * @method array getVpcFwInstances() 获取<p>编辑的防火墙实例列表</p>
 * @method void setVpcFwInstances(array $VpcFwInstances) 设置<p>编辑的防火墙实例列表</p>
 * @method FwCidrInfo getFwCidrInfo() 获取<p>指定防火墙使用网段信息</p>
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) 设置<p>指定防火墙使用网段信息</p>
 */
class ModifyVpcFwGroupRequest extends AbstractModel
{
    /**
     * @var string <p>编辑的防火墙(组)ID</p>
     */
    public $FwGroupId;

    /**
     * @var string <p>修改防火墙(组)名称</p>
     */
    public $Name;

    /**
     * @var array <p>编辑的防火墙实例列表</p>
     */
    public $VpcFwInstances;

    /**
     * @var FwCidrInfo <p>指定防火墙使用网段信息</p>
     */
    public $FwCidrInfo;

    /**
     * @param string $FwGroupId <p>编辑的防火墙(组)ID</p>
     * @param string $Name <p>修改防火墙(组)名称</p>
     * @param array $VpcFwInstances <p>编辑的防火墙实例列表</p>
     * @param FwCidrInfo $FwCidrInfo <p>指定防火墙使用网段信息</p>
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
        if (array_key_exists("FwGroupId",$param) and $param["FwGroupId"] !== null) {
            $this->FwGroupId = $param["FwGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VpcFwInstances",$param) and $param["VpcFwInstances"] !== null) {
            $this->VpcFwInstances = [];
            foreach ($param["VpcFwInstances"] as $key => $value){
                $obj = new VpcFwInstance();
                $obj->deserialize($value);
                array_push($this->VpcFwInstances, $obj);
            }
        }

        if (array_key_exists("FwCidrInfo",$param) and $param["FwCidrInfo"] !== null) {
            $this->FwCidrInfo = new FwCidrInfo();
            $this->FwCidrInfo->deserialize($param["FwCidrInfo"]);
        }
    }
}
