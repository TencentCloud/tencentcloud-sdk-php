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
 * CreateInstanceDrillPairs请求参数结构体
 *
 * @method string getProtectGroupId() 获取所属容灾保护组
 * @method void setProtectGroupId(string $ProtectGroupId) 设置所属容灾保护组
 * @method string getDrillPairGroupVpc() 获取演练组vpc
 * @method void setDrillPairGroupVpc(string $DrillPairGroupVpc) 设置演练组vpc
 * @method string getDrillPairGroupName() 获取文件系统复制对名称,不传则新名称为“未命名”
 * @method void setDrillPairGroupName(string $DrillPairGroupName) 设置文件系统复制对名称,不传则新名称为“未命名”
 * @method string getCreationToken() 获取用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
 * @method void setCreationToken(string $CreationToken) 设置用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
 * @method string getDrillPairGroupId() 获取指定创建入哪个演练组
 * @method void setDrillPairGroupId(string $DrillPairGroupId) 设置指定创建入哪个演练组
 * @method array getCreateTargetInstanceParameters() 获取创建目标演练实例的参数列表
 * @method void setCreateTargetInstanceParameters(array $CreateTargetInstanceParameters) 设置创建目标演练实例的参数列表
 */
class CreateInstanceDrillPairsRequest extends AbstractModel
{
    /**
     * @var string 所属容灾保护组
     */
    public $ProtectGroupId;

    /**
     * @var string 演练组vpc
     */
    public $DrillPairGroupVpc;

    /**
     * @var string 文件系统复制对名称,不传则新名称为“未命名”
     */
    public $DrillPairGroupName;

    /**
     * @var string 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
     */
    public $CreationToken;

    /**
     * @var string 指定创建入哪个演练组
     */
    public $DrillPairGroupId;

    /**
     * @var array 创建目标演练实例的参数列表
     */
    public $CreateTargetInstanceParameters;

    /**
     * @param string $ProtectGroupId 所属容灾保护组
     * @param string $DrillPairGroupVpc 演练组vpc
     * @param string $DrillPairGroupName 文件系统复制对名称,不传则新名称为“未命名”
     * @param string $CreationToken 用于保证请求幂等性的字符串。该字符串由客户生成，需保证不同请求之间唯一，最大值不超过64个ASCII字符。若不指定该参数，则无法保证请求的幂等性
     * @param string $DrillPairGroupId 指定创建入哪个演练组
     * @param array $CreateTargetInstanceParameters 创建目标演练实例的参数列表
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

        if (array_key_exists("DrillPairGroupVpc",$param) and $param["DrillPairGroupVpc"] !== null) {
            $this->DrillPairGroupVpc = $param["DrillPairGroupVpc"];
        }

        if (array_key_exists("DrillPairGroupName",$param) and $param["DrillPairGroupName"] !== null) {
            $this->DrillPairGroupName = $param["DrillPairGroupName"];
        }

        if (array_key_exists("CreationToken",$param) and $param["CreationToken"] !== null) {
            $this->CreationToken = $param["CreationToken"];
        }

        if (array_key_exists("DrillPairGroupId",$param) and $param["DrillPairGroupId"] !== null) {
            $this->DrillPairGroupId = $param["DrillPairGroupId"];
        }

        if (array_key_exists("CreateTargetInstanceParameters",$param) and $param["CreateTargetInstanceParameters"] !== null) {
            $this->CreateTargetInstanceParameters = [];
            foreach ($param["CreateTargetInstanceParameters"] as $key => $value){
                $obj = new CreateInstanceModel();
                $obj->deserialize($value);
                array_push($this->CreateTargetInstanceParameters, $obj);
            }
        }
    }
}
