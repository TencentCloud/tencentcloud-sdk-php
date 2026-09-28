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
 * 云应用资源信息
 *
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method string getServiceType() 获取<p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
 * @method void setServiceType(string $ServiceType) 设置<p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
 * @method string getDeployedRef() 获取<p>服务部署版本</p>
 * @method void setDeployedRef(string $DeployedRef) 设置<p>服务部署版本</p>
 * @method string getDiffCategory() 获取<p>服务动作</p>
 * @method void setDiffCategory(string $DiffCategory) 设置<p>服务动作</p>
 * @method string getStatus() 获取<p>服务状态</p>
 * @method void setStatus(string $Status) 设置<p>服务状态</p>
 */
class CloudAppResourceItem extends AbstractModel
{
    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
     */
    public $ServiceType;

    /**
     * @var string <p>服务部署版本</p>
     */
    public $DeployedRef;

    /**
     * @var string <p>服务动作</p>
     */
    public $DiffCategory;

    /**
     * @var string <p>服务状态</p>
     */
    public $Status;

    /**
     * @param string $ServiceName <p>服务名称</p>
     * @param string $ServiceType <p>服务类型</p><p>枚举值：</p><ul><li>http-function： HTTP 云函数</li><li>function： 普通云函数</li><li>static-hosting： 静态托管</li></ul>
     * @param string $DeployedRef <p>服务部署版本</p>
     * @param string $DiffCategory <p>服务动作</p>
     * @param string $Status <p>服务状态</p>
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("DeployedRef",$param) and $param["DeployedRef"] !== null) {
            $this->DeployedRef = $param["DeployedRef"];
        }

        if (array_key_exists("DiffCategory",$param) and $param["DiffCategory"] !== null) {
            $this->DiffCategory = $param["DiffCategory"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
