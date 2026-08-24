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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstanceCopyPair请求参数结构体
 *
 * @method string getProtectGroupId() 获取所属保护组
 * @method void setProtectGroupId(string $ProtectGroupId) 设置所属保护组
 * @method array getCreateTargetInstanceParameters() 获取目标端CVM创建参数列表（1~10 个）
 * @method void setCreateTargetInstanceParameters(array $CreateTargetInstanceParameters) 设置目标端CVM创建参数列表（1~10 个）
 * @method string getInstanceCopyPairName() 获取复制对名称，不传则新名称为"未命名"
 * @method void setInstanceCopyPairName(string $InstanceCopyPairName) 设置复制对名称，不传则新名称为"未命名"
 * @method string getClientToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
 * @method void setClientToken(string $ClientToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
 * @method integer getRecoveryPointObjective() 获取用户期望的RPO，单位分钟，目前仅支持15分钟
 * @method void setRecoveryPointObjective(integer $RecoveryPointObjective) 设置用户期望的RPO，单位分钟，目前仅支持15分钟
 */
class CreateInstanceCopyPairRequest extends AbstractModel
{
    /**
     * @var string 所属保护组
     */
    public $ProtectGroupId;

    /**
     * @var array 目标端CVM创建参数列表（1~10 个）
     */
    public $CreateTargetInstanceParameters;

    /**
     * @var string 复制对名称，不传则新名称为"未命名"
     */
    public $InstanceCopyPairName;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
     */
    public $ClientToken;

    /**
     * @var integer 用户期望的RPO，单位分钟，目前仅支持15分钟
     */
    public $RecoveryPointObjective;

    /**
     * @param string $ProtectGroupId 所属保护组
     * @param array $CreateTargetInstanceParameters 目标端CVM创建参数列表（1~10 个）
     * @param string $InstanceCopyPairName 复制对名称，不传则新名称为"未命名"
     * @param string $ClientToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
     * @param integer $RecoveryPointObjective 用户期望的RPO，单位分钟，目前仅支持15分钟
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
        if (array_key_exists("ProtectGroupId",$param) and $param["ProtectGroupId"] !== null) {
            $this->ProtectGroupId = $param["ProtectGroupId"];
        }

        if (array_key_exists("CreateTargetInstanceParameters",$param) and $param["CreateTargetInstanceParameters"] !== null) {
            $this->CreateTargetInstanceParameters = [];
            foreach ($param["CreateTargetInstanceParameters"] as $key => $value){
                $obj = new CreateInstanceModel();
                $obj->deserialize($value);
                array_push($this->CreateTargetInstanceParameters, $obj);
            }
        }

        if (array_key_exists("InstanceCopyPairName",$param) and $param["InstanceCopyPairName"] !== null) {
            $this->InstanceCopyPairName = $param["InstanceCopyPairName"];
        }

        if (array_key_exists("ClientToken",$param) and $param["ClientToken"] !== null) {
            $this->ClientToken = $param["ClientToken"];
        }

        if (array_key_exists("RecoveryPointObjective",$param) and $param["RecoveryPointObjective"] !== null) {
            $this->RecoveryPointObjective = $param["RecoveryPointObjective"];
        }
    }
}
