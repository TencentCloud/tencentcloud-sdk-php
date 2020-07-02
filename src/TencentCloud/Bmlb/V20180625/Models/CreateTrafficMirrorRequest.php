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
namespace TencentCloud\Bmlb\V20180625\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateTrafficMirror请求参数结构体
 *
 * @method string getAlias() 获取流量镜像实例别名。
 * @method void setAlias(string $Alias) 设置流量镜像实例别名。
 * @method string getVpcId() 获取流量镜像实例所属的私有网络ID，形如：vpc-xxx。
 * @method void setVpcId(string $VpcId) 设置流量镜像实例所属的私有网络ID，形如：vpc-xxx。
 */
class CreateTrafficMirrorRequest extends AbstractModel
{
    /**
     * @var string 流量镜像实例别名。
     */
    public $Alias;

    /**
     * @var string 流量镜像实例所属的私有网络ID，形如：vpc-xxx。
     */
    public $VpcId;

    /**
     * @param string $Alias 流量镜像实例别名。
     * @param string $VpcId 流量镜像实例所属的私有网络ID，形如：vpc-xxx。
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
        if (array_key_exists('Alias',$param) and $param['Alias'] !== null) {
            $this->Alias = $param['Alias'];
        }

        if (array_key_exists('VpcId',$param) and $param['VpcId'] !== null) {
            $this->VpcId = $param['VpcId'];
        }
    }
}
