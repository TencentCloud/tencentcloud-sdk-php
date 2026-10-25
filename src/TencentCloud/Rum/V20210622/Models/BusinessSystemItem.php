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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 业务系统
 *
 * @method string getInstanceId() 获取<p>业务系统 ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>业务系统 ID</p>
 * @method string getInstanceName() 获取<p>名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>名称</p>
 * @method string getInstanceDesc() 获取<p>描述</p>
 * @method void setInstanceDesc(string $InstanceDesc) 设置<p>描述</p>
 * @method integer getStatus() 获取<p>状态：2 运行 / 6 停止 / 7 删除</p>
 * @method void setStatus(integer $Status) 设置<p>状态：2 运行 / 6 停止 / 7 删除</p>
 * @method integer getChargeStatus() 获取<p>状态： 2（隔离），1（使用中），3（已销毁）</p>
 * @method void setChargeStatus(integer $ChargeStatus) 设置<p>状态： 2（隔离），1（使用中），3（已销毁）</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 * @method string getUpdatedAt() 获取<p>更新时间</p>
 * @method void setUpdatedAt(string $UpdatedAt) 设置<p>更新时间</p>
 */
class BusinessSystemItem extends AbstractModel
{
    /**
     * @var string <p>业务系统 ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>描述</p>
     */
    public $InstanceDesc;

    /**
     * @var integer <p>状态：2 运行 / 6 停止 / 7 删除</p>
     */
    public $Status;

    /**
     * @var integer <p>状态： 2（隔离），1（使用中），3（已销毁）</p>
     */
    public $ChargeStatus;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @var string <p>更新时间</p>
     */
    public $UpdatedAt;

    /**
     * @param string $InstanceId <p>业务系统 ID</p>
     * @param string $InstanceName <p>名称</p>
     * @param string $InstanceDesc <p>描述</p>
     * @param integer $Status <p>状态：2 运行 / 6 停止 / 7 删除</p>
     * @param integer $ChargeStatus <p>状态： 2（隔离），1（使用中），3（已销毁）</p>
     * @param string $CreatedAt <p>创建时间</p>
     * @param string $UpdatedAt <p>更新时间</p>
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

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceDesc",$param) and $param["InstanceDesc"] !== null) {
            $this->InstanceDesc = $param["InstanceDesc"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ChargeStatus",$param) and $param["ChargeStatus"] !== null) {
            $this->ChargeStatus = $param["ChargeStatus"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }
    }
}
