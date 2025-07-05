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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyResource请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method integer getPayMode() 获取计费类型
 * @method void setPayMode(integer $PayMode) 设置计费类型
 * @method integer getNewCpu() 获取变配CPU
 * @method void setNewCpu(integer $NewCpu) 设置变配CPU
 * @method integer getNewMem() 获取变配内存
 * @method void setNewMem(integer $NewMem) 设置变配内存
 * @method string getClientToken() 获取Token
 * @method void setClientToken(string $ClientToken) 设置Token
 * @method string getInstanceType() 获取变配机器规格
 * @method void setInstanceType(string $InstanceType) 设置变配机器规格
 * @method array getResourceIdList() 获取节点ID列表
 * @method void setResourceIdList(array $ResourceIdList) 设置节点ID列表
 */
class ModifyResourceRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var integer 计费类型
     */
    public $PayMode;

    /**
     * @var integer 变配CPU
     */
    public $NewCpu;

    /**
     * @var integer 变配内存
     */
    public $NewMem;

    /**
     * @var string Token
     */
    public $ClientToken;

    /**
     * @var string 变配机器规格
     */
    public $InstanceType;

    /**
     * @var array 节点ID列表
     */
    public $ResourceIdList;

    /**
     * @param string $InstanceId 实例ID
     * @param integer $PayMode 计费类型
     * @param integer $NewCpu 变配CPU
     * @param integer $NewMem 变配内存
     * @param string $ClientToken Token
     * @param string $InstanceType 变配机器规格
     * @param array $ResourceIdList 节点ID列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("NewCpu",$param) and $param["NewCpu"] !== null) {
            $this->NewCpu = $param["NewCpu"];
        }

        if (array_key_exists("NewMem",$param) and $param["NewMem"] !== null) {
            $this->NewMem = $param["NewMem"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("ResourceIdList",$param) and $param["ResourceIdList"] !== null) {
            $this->ResourceIdList = $param["ResourceIdList"];
        }
    }
}
