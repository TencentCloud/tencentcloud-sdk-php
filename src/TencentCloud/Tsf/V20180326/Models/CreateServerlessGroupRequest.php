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
 * @method string getApplicationId() 获取分组所属应用ID
 * @method void setApplicationId(string $ApplicationId) 设置分组所属应用ID
 * @method string getGroupName() 获取分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
 * @method void setGroupName(string $GroupName) 设置分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
 * @method string getPkgId() 获取程序包Id
 * @method void setPkgId(string $PkgId) 设置程序包Id
 * @method VpcConfig getVpcConfig() 获取VpcConfig对象
 * @method void setVpcConfig(VpcConfig $VpcConfig) 设置VpcConfig对象
 */

/**
 *CreateServerlessGroup请求参数结构体
 */
class CreateServerlessGroupRequest extends AbstractModel
{
    /**
     * @var string 分组所属应用ID
     */
    public $ApplicationId;

    /**
     * @var string 分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
     */
    public $GroupName;

    /**
     * @var string 程序包Id
     */
    public $PkgId;

    /**
     * @var VpcConfig VpcConfig对象
     */
    public $VpcConfig;
    /**
     * @param string $ApplicationId 分组所属应用ID
     * @param string $GroupName 分组名称字段，长度1~60，字母或下划线开头，可包含字母数字下划线
     * @param string $PkgId 程序包Id
     * @param VpcConfig $VpcConfig VpcConfig对象
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
        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
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
