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
namespace TencentCloud\Tdcpg\V20211118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateClusterInstances请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method integer getCPU() 获取CPU核数。取值参考文档【购买指南】
 * @method void setCPU(integer $CPU) 设置CPU核数。取值参考文档【购买指南】
 * @method integer getMemory() 获取内存大小，单位GiB。取值参考文档【购买指南】
 * @method void setMemory(integer $Memory) 设置内存大小，单位GiB。取值参考文档【购买指南】
 * @method string getInstanceName() 获取实例名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与InstanceId一致。
 * @method void setInstanceName(string $InstanceName) 设置实例名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与InstanceId一致。
 * @method integer getInstanceCount() 获取新建实例的数量，默认为1。单集群下实例数量目前不能超过4个。
 * @method void setInstanceCount(integer $InstanceCount) 设置新建实例的数量，默认为1。单集群下实例数量目前不能超过4个。
 */
class CreateClusterInstancesRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var integer CPU核数。取值参考文档【购买指南】
     */
    public $CPU;

    /**
     * @var integer 内存大小，单位GiB。取值参考文档【购买指南】
     */
    public $Memory;

    /**
     * @var string 实例名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与InstanceId一致。
     */
    public $InstanceName;

    /**
     * @var integer 新建实例的数量，默认为1。单集群下实例数量目前不能超过4个。
     */
    public $InstanceCount;

    /**
     * @param string $ClusterId 集群ID
     * @param integer $CPU CPU核数。取值参考文档【购买指南】
     * @param integer $Memory 内存大小，单位GiB。取值参考文档【购买指南】
     * @param string $InstanceName 实例名，1-60个字符，可以包含中文、英文、数字和符号"-"、"_"、"."。不输入此参数时默认与InstanceId一致。
     * @param integer $InstanceCount 新建实例的数量，默认为1。单集群下实例数量目前不能超过4个。
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

        if (array_key_exists("CPU",$param) and $param["CPU"] !== null) {
            $this->CPU = $param["CPU"];
        }

        if (array_key_exists("Memory",$param) and $param["Memory"] !== null) {
            $this->Memory = $param["Memory"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceCount",$param) and $param["InstanceCount"] !== null) {
            $this->InstanceCount = $param["InstanceCount"];
        }
    }
}
