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
 * 消费者结构
 *
 * @method string getConsumerId() 获取<p>消费者 ID。</p>
 * @method void setConsumerId(string $ConsumerId) 设置<p>消费者 ID。</p>
 * @method string getName() 获取<p>名字</p>
 * @method void setName(string $Name) 设置<p>名字</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method string getModifyTime() 获取<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>更新时间 yyyy-MM-dd hh:mm:ss</p>
 * @method string getDescription() 获取<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getConsumerGroups() 获取<p>消费者分组</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumerGroups(array $ConsumerGroups) 设置<p>消费者分组</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CNAPIGwConsumer extends AbstractModel
{
    /**
     * @var string <p>消费者 ID。</p>
     */
    public $ConsumerId;

    /**
     * @var string <p>名字</p>
     */
    public $Name;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var string <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
     */
    public $ModifyTime;

    /**
     * @var string <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array <p>消费者分组</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumerGroups;

    /**
     * @param string $ConsumerId <p>消费者 ID。</p>
     * @param string $Name <p>名字</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param string $ModifyTime <p>更新时间 yyyy-MM-dd hh:mm:ss</p>
     * @param string $Description <p>描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ConsumerGroups <p>消费者分组</p>
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
