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
 * @method string getConsumerGroupId() 获取分组id
 * @method void setConsumerGroupId(string $ConsumerGroupId) 设置分组id
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getStatus() 获取状态Disable/Enable
 * @method void setStatus(string $Status) 设置状态Disable/Enable
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取更新时间 yyyy-MM-dd hh:mm:ss
 * @method void setModifyTime(string $ModifyTime) 设置更新时间 yyyy-MM-dd hh:mm:ss
 * @method integer getBindCount() 获取绑定的消费者数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBindCount(integer $BindCount) 设置绑定的消费者数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class CNAPIGwConsumerGroup extends AbstractModel
{
    /**
     * @var string 分组id
     */
    public $ConsumerGroupId;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 状态Disable/Enable
     */
    public $Status;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间 yyyy-MM-dd hh:mm:ss
     */
    public $ModifyTime;

    /**
     * @var integer 绑定的消费者数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BindCount;

    /**
     * @param string $ConsumerGroupId 分组id
     * @param string $Name 名字
     * @param string $Status 状态Disable/Enable
     * @param string $Description 描述
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 更新时间 yyyy-MM-dd hh:mm:ss
     * @param integer $BindCount 绑定的消费者数量
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
