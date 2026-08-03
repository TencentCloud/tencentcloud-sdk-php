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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 灾备实例信息
 *
 * @method integer getStatus() 获取<p>灾备实例状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 运行中</li><li>4： 正在进行隔离操作</li><li>5： 已隔离</li></ul>
 * @method void setStatus(integer $Status) 设置<p>灾备实例状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 运行中</li><li>4： 正在进行隔离操作</li><li>5： 已隔离</li></ul>
 * @method string getZone() 获取<p>可用区信息</p>
 * @method void setZone(string $Zone) 设置<p>可用区信息</p>
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getRegion() 获取<p>地域信息</p>
 * @method void setRegion(string $Region) 设置<p>地域信息</p>
 * @method integer getSyncStatus() 获取<p>实例同步状态。可能的返回值为：<br>0 - 灾备未同步；<br>1 - 灾备同步中；<br>2 - 灾备同步成功；<br>3 - 灾备同步失败；<br>4 - 灾备同步修复中。</p>
 * @method void setSyncStatus(integer $SyncStatus) 设置<p>实例同步状态。可能的返回值为：<br>0 - 灾备未同步；<br>1 - 灾备同步中；<br>2 - 灾备同步成功；<br>3 - 灾备同步失败；<br>4 - 灾备同步修复中。</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method integer getInstanceType() 获取<p>实例类型</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>实例类型</p>
 */
class DrInfo extends AbstractModel
{
    /**
     * @var integer <p>灾备实例状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 运行中</li><li>4： 正在进行隔离操作</li><li>5： 已隔离</li></ul>
     */
    public $Status;

    /**
     * @var string <p>可用区信息</p>
     */
    public $Zone;

    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>地域信息</p>
     */
    public $Region;

    /**
     * @var integer <p>实例同步状态。可能的返回值为：<br>0 - 灾备未同步；<br>1 - 灾备同步中；<br>2 - 灾备同步成功；<br>3 - 灾备同步失败；<br>4 - 灾备同步修复中。</p>
     */
    public $SyncStatus;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>实例类型</p>
     */
    public $InstanceType;

    /**
     * @param integer $Status <p>灾备实例状态</p><p>枚举值：</p><ul><li>0： 创建中</li><li>1： 运行中</li><li>4： 正在进行隔离操作</li><li>5： 已隔离</li></ul>
     * @param string $Zone <p>可用区信息</p>
     * @param string $InstanceId <p>实例ID</p>
     * @param string $Region <p>地域信息</p>
     * @param integer $SyncStatus <p>实例同步状态。可能的返回值为：<br>0 - 灾备未同步；<br>1 - 灾备同步中；<br>2 - 灾备同步成功；<br>3 - 灾备同步失败；<br>4 - 灾备同步修复中。</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param integer $InstanceType <p>实例类型</p>
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }
    }
}
