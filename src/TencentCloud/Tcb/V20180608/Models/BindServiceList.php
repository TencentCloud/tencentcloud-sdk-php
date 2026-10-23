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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 密钥对绑定的mcp服务列表和apis服务列表
 *
 * @method array getMcp() 获取密钥对绑定的mcp服务列表
 * @method void setMcp(array $Mcp) 设置密钥对绑定的mcp服务列表
 * @method array getApis() 获取密钥对绑定的apis服务列表
 * @method void setApis(array $Apis) 设置密钥对绑定的apis服务列表
 * @method array getOther() 获取登记哪个资源下的哪个场景使用了密钥对
 * @method void setOther(array $Other) 设置登记哪个资源下的哪个场景使用了密钥对
 */
class BindServiceList extends AbstractModel
{
    /**
     * @var array 密钥对绑定的mcp服务列表
     */
    public $Mcp;

    /**
     * @var array 密钥对绑定的apis服务列表
     */
    public $Apis;

    /**
     * @var array 登记哪个资源下的哪个场景使用了密钥对
     */
    public $Other;

    /**
     * @param array $Mcp 密钥对绑定的mcp服务列表
     * @param array $Apis 密钥对绑定的apis服务列表
     * @param array $Other 登记哪个资源下的哪个场景使用了密钥对
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
        if (array_key_exists("Mcp",$param) and $param["Mcp"] !== null) {
            $this->Mcp = [];
            foreach ($param["Mcp"] as $key => $value){
                $obj = new BindService();
                $obj->deserialize($value);
                array_push($this->Mcp, $obj);
            }
        }

        if (array_key_exists("Apis",$param) and $param["Apis"] !== null) {
            $this->Apis = [];
            foreach ($param["Apis"] as $key => $value){
                $obj = new BindService();
                $obj->deserialize($value);
                array_push($this->Apis, $obj);
            }
        }

        if (array_key_exists("Other",$param) and $param["Other"] !== null) {
            $this->Other = [];
            foreach ($param["Other"] as $key => $value){
                $obj = new BindService();
                $obj->deserialize($value);
                array_push($this->Other, $obj);
            }
        }
    }
}
