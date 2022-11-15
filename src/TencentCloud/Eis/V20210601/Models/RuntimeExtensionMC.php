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
namespace TencentCloud\Eis\V20210601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 运行环境扩展组件
 *
 * @method integer getType() 获取扩展组件类型：0:cdc
 * @method void setType(integer $Type) 设置扩展组件类型：0:cdc
 * @method float getSize() 获取部署规格vcore数
 * @method void setSize(float $Size) 设置部署规格vcore数
 * @method integer getReplica() 获取副本数
 * @method void setReplica(integer $Replica) 设置副本数
 * @method string getName() 获取扩展组件名称
 * @method void setName(string $Name) 设置扩展组件名称
 * @method integer getStatus() 获取状态 1:未启用 2:已启用
 * @method void setStatus(integer $Status) 设置状态 1:未启用 2:已启用
 * @method integer getCreatedAt() 获取创建时间
 * @method void setCreatedAt(integer $CreatedAt) 设置创建时间
 * @method integer getUpdatedAt() 获取修改时间
 * @method void setUpdatedAt(integer $UpdatedAt) 设置修改时间
 */
class RuntimeExtensionMC extends AbstractModel
{
    /**
     * @var integer 扩展组件类型：0:cdc
     */
    public $Type;

    /**
     * @var float 部署规格vcore数
     */
    public $Size;

    /**
     * @var integer 副本数
     */
    public $Replica;

    /**
     * @var string 扩展组件名称
     */
    public $Name;

    /**
     * @var integer 状态 1:未启用 2:已启用
     */
    public $Status;

    /**
     * @var integer 创建时间
     */
    public $CreatedAt;

    /**
     * @var integer 修改时间
     */
    public $UpdatedAt;

    /**
     * @param integer $Type 扩展组件类型：0:cdc
     * @param float $Size 部署规格vcore数
     * @param integer $Replica 副本数
     * @param string $Name 扩展组件名称
     * @param integer $Status 状态 1:未启用 2:已启用
     * @param integer $CreatedAt 创建时间
     * @param integer $UpdatedAt 修改时间
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Replica",$param) and $param["Replica"] !== null) {
            $this->Replica = $param["Replica"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
