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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVpcFwGroup请求参数结构体
 *
 * @method string getFwGroupId() 获取编辑的防火墙(组)ID
 * @method void setFwGroupId(string $FwGroupId) 设置编辑的防火墙(组)ID
 * @method string getName() 获取修改防火墙(组)名称
 * @method void setName(string $Name) 设置修改防火墙(组)名称
 * @method array getVpcFwInstances() 获取编辑的防火墙实例列表
 * @method void setVpcFwInstances(array $VpcFwInstances) 设置编辑的防火墙实例列表
 * @method FwCidrInfo getFwCidrInfo() 获取指定防火墙使用网段信息
 * @method void setFwCidrInfo(FwCidrInfo $FwCidrInfo) 设置指定防火墙使用网段信息
 */
class ModifyVpcFwGroupRequest extends AbstractModel
{
    /**
     * @var string 编辑的防火墙(组)ID
     */
    public $FwGroupId;

    /**
     * @var string 修改防火墙(组)名称
     */
    public $Name;

    /**
     * @var array 编辑的防火墙实例列表
     */
    public $VpcFwInstances;

    /**
     * @var FwCidrInfo 指定防火墙使用网段信息
     */
    public $FwCidrInfo;

    /**
     * @param string $FwGroupId 编辑的防火墙(组)ID
     * @param string $Name 修改防火墙(组)名称
     * @param array $VpcFwInstances 编辑的防火墙实例列表
     * @param FwCidrInfo $FwCidrInfo 指定防火墙使用网段信息
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
