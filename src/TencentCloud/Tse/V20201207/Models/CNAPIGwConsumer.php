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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费者结构
 *
 * @method string getConsumerId() 获取分组id
 * @method void setConsumerId(string $ConsumerId) 设置分组id
 * @method string getName() 获取名字
 * @method void setName(string $Name) 设置名字
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取更新时间 yyyy-MM-dd hh:mm:ss
 * @method void setModifyTime(string $ModifyTime) 设置更新时间 yyyy-MM-dd hh:mm:ss
 * @method string getDescription() 获取描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConsumerGroups() 获取消费者分组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroups(array $ConsumerGroups) 设置消费者分组
注意：此字段可能返回 null，表示取不到有效值。
 */
class CNAPIGwConsumer extends AbstractModel
{
    /**
     * @var string 分组id
     */
    public $ConsumerId;

    /**
     * @var string 名字
     */
    public $Name;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 更新时间 yyyy-MM-dd hh:mm:ss
     */
    public $ModifyTime;

    /**
     * @var string 描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 消费者分组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroups;

    /**
     * @param string $ConsumerId 分组id
     * @param string $Name 名字
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 更新时间 yyyy-MM-dd hh:mm:ss
     * @param string $Description 描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConsumerGroups 消费者分组
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
        if (array_key_exists("ConsumerId",$param) and $param["ConsumerId"] !== null) {
            $this->ConsumerId = $param["ConsumerId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ConsumerGroups",$param) and $param["ConsumerGroups"] !== null) {
            $this->ConsumerGroups = [];
            foreach ($param["ConsumerGroups"] as $key => $value){
                $obj = new CNAPIGwConsumerGroup();
                $obj->deserialize($value);
                array_push($this->ConsumerGroups, $obj);
            }
        }
    }
}
