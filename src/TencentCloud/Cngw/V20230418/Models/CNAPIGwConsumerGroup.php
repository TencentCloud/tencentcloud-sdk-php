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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费者组结构
 *
 * @method string getConsumerGroupId() 获取<p>分组id</p>
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置<p>分组id</p>
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getStatus() 获取<p>状态Disable/Enable</p>
 * @method void setStatus(string $Status) 设置<p>状态Disable/Enable</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
 * @method integer getBindCount() 获取<p>绑定的消费者数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindCount(integer $BindCount) 设置<p>绑定的消费者数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSyncStatus() 获取<p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Succes： 成功</li></ul>
 * @method void setSyncStatus(string $SyncStatus) 设置<p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Succes： 成功</li></ul>
 * @method string getSourceType() 获取<p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源已删除</li></ul>
 * @method void setSourceType(string $SourceType) 设置<p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源已删除</li></ul>
 * @method string getSyncedVersion() 获取<p>同步版本</p>
 * @method void setSyncedVersion(string $SyncedVersion) 设置<p>同步版本</p>
 */
class CNAPIGwConsumerGroup extends AbstractModel
{
    /**
     * @var string <p>分组id</p>
     */
    public $ConsumerGroupId;

    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>状态Disable/Enable</p>
     */
    public $Status;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>绑定的消费者数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindCount;

    /**
     * @var string <p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Succes： 成功</li></ul>
     */
    public $SyncStatus;

    /**
     * @var string <p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源已删除</li></ul>
     */
    public $SourceType;

    /**
     * @var string <p>同步版本</p>
     */
    public $SyncedVersion;

    /**
     * @param string $ConsumerGroupId <p>分组id</p>
     * @param string $Name <p>名字</p>
     * @param string $Status <p>状态Disable/Enable</p>
     * @param string $Description <p>描述</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
     * @param integer $BindCount <p>绑定的消费者数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SyncStatus <p>同步状态</p><p>枚举值：</p><ul><li>Fail： 失败</li><li>Succes： 成功</li></ul>
     * @param string $SourceType <p>资源类型</p><p>枚举值：</p><ul><li>Public： 公共</li><li>Private： 私有</li><li>SourceDeleted： 资源已删除</li></ul>
     * @param string $SyncedVersion <p>同步版本</p>
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
        if (array_key_exists("ConsumerGroupId",$param) and $param["ConsumerGroupId"] !== null) {
            $this->ConsumerGroupId = $param["ConsumerGroupId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("BindCount",$param) and $param["BindCount"] !== null) {
            $this->BindCount = $param["BindCount"];
        }

        if (array_key_exists("SyncStatus",$param) and $param["SyncStatus"] !== null) {
            $this->SyncStatus = $param["SyncStatus"];
        }

        if (array_key_exists("SourceType",$param) and $param["SourceType"] !== null) {
            $this->SourceType = $param["SourceType"];
        }

        if (array_key_exists("SyncedVersion",$param) and $param["SyncedVersion"] !== null) {
            $this->SyncedVersion = $param["SyncedVersion"];
        }
    }
}
