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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyEnvironment请求参数结构体
 *
 * @method string getEnvironmentId() 获取环境id
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境id
 * @method string getEnvironmentName() 获取环境名称
 * @method void setEnvironmentName(string $EnvironmentName) 设置环境名称
 * @method string getDescription() 获取环境描述
 * @method void setDescription(string $Description) 设置环境描述
 * @method string getVpc() 获取私有网络名称
 * @method void setVpc(string $Vpc) 设置私有网络名称
 * @method array getSubnetIds() 获取子网网络
 * @method void setSubnetIds(array $SubnetIds) 设置子网网络
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method string getEnvType() 获取环境类型：test、pre、prod
 * @method void setEnvType(string $EnvType) 设置环境类型：test、pre、prod
 */
class ModifyEnvironmentRequest extends AbstractModel
{
    /**
     * @var string 环境id
     */
    public $EnvironmentId;

    /**
     * @var string 环境名称
     */
    public $EnvironmentName;

    /**
     * @var string 环境描述
     */
    public $Description;

    /**
     * @var string 私有网络名称
     */
    public $Vpc;

    /**
     * @var array 子网网络
     */
    public $SubnetIds;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var string 环境类型：test、pre、prod
     */
    public $EnvType;

    /**
     * @param string $EnvironmentId 环境id
     * @param string $EnvironmentName 环境名称
     * @param string $Description 环境描述
     * @param string $Vpc 私有网络名称
     * @param array $SubnetIds 子网网络
     * @param integer $SourceChannel 来源渠道
     * @param string $EnvType 环境类型：test、pre、prod
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("EnvironmentName",$param) and $param["EnvironmentName"] !== null) {
            $this->EnvironmentName = $param["EnvironmentName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("SubnetIds",$param) and $param["SubnetIds"] !== null) {
            $this->SubnetIds = $param["SubnetIds"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("EnvType",$param) and $param["EnvType"] !== null) {
            $this->EnvType = $param["EnvType"];
        }
    }
}
