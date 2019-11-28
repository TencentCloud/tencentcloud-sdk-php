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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method string getGroupId() 获取部署组ID
 * @method void setGroupId(string $GroupId) 设置部署组ID
 * @method string getPkgId() 获取程序包ID
 * @method void setPkgId(string $PkgId) 设置程序包ID
 * @method VpcConfig getVpcConfig() 获取VpcConfig对象，和创建接口中对象一致
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置VpcConfig对象，和创建接口中对象一致
 */

/**
 *DeployServerlessGroup请求参数结构体
 */
class DeployServerlessGroupRequest extends AbstractModel
{
    /**
     * @var string 部署组ID
     */
    public $GroupId;

    /**
     * @var string 程序包ID
     */
    public $PkgId;

    /**
     * @var VpcConfig VpcConfig对象，和创建接口中对象一致
     */
    public $VpcConfig;
    /**
     * @param string $GroupId 部署组ID
     * @param string $PkgId 程序包ID
     * @param VpcConfig $VpcConfig VpcConfig对象，和创建接口中对象一致
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("PkgId",$param) and $param["PkgId"] !== null) {
            $this->PkgId = $param["PkgId"];
        }

        if (array_key_exists("VpcConfig",$param) and $param["VpcConfig"] !== null) {
            $this->VpcConfig = new VpcConfig();
            $this->VpcConfig->deserialize($param["VpcConfig"]);
        }
    }
}
