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
namespace TencentCloud\Cdwpg\V20201230\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ConfigHistory1
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method string getInstanceId() 获取实例名
 * @method void setInstanceId(string $InstanceId) 设置实例名
 * @method string getCreatedAt() 获取创建时间
 * @method void setCreatedAt(string $CreatedAt) 设置创建时间
 * @method string getUpdatedAt() 获取更新时间
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
 * @method string getNodeType() 获取dn/cn
 * @method void setNodeType(string $NodeType) 设置dn/cn
 * @method string getParamName() 获取参数名
 * @method void setParamName(string $ParamName) 设置参数名
 * @method string getParamNewValue() 获取新参数值
 * @method void setParamNewValue(string $ParamNewValue) 设置新参数值
 * @method string getParamOldValue() 获取旧参数值
 * @method void setParamOldValue(string $ParamOldValue) 设置旧参数值
 * @method string getStatus() 获取状态 doing/success
 * @method void setStatus(string $Status) 设置状态 doing/success
 */
class ConfigHistory extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string 实例名
     */
    public $InstanceId;

    /**
     * @var string 创建时间
     */
    public $CreatedAt;

    /**
     * @var string 更新时间
     */
    public $UpdatedAt;

    /**
     * @var string dn/cn
     */
    public $NodeType;

    /**
     * @var string 参数名
     */
    public $ParamName;

    /**
     * @var string 新参数值
     */
    public $ParamNewValue;

    /**
     * @var string 旧参数值
     */
    public $ParamOldValue;

    /**
     * @var string 状态 doing/success
     */
    public $Status;

    /**
     * @param integer $Id id
     * @param string $InstanceId 实例名
     * @param string $CreatedAt 创建时间
     * @param string $UpdatedAt 更新时间
     * @param string $NodeType dn/cn
     * @param string $ParamName 参数名
     * @param string $ParamNewValue 新参数值
     * @param string $ParamOldValue 旧参数值
     * @param string $Status 状态 doing/success
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ParamName",$param) and $param["ParamName"] !== null) {
            $this->ParamName = $param["ParamName"];
        }

        if (array_key_exists("ParamNewValue",$param) and $param["ParamNewValue"] !== null) {
            $this->ParamNewValue = $param["ParamNewValue"];
        }

        if (array_key_exists("ParamOldValue",$param) and $param["ParamOldValue"] !== null) {
            $this->ParamOldValue = $param["ParamOldValue"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
