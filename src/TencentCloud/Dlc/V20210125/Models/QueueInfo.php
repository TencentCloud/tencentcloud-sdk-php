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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 队列信息
 *
 * @method integer getId() 获取<p>队列ID</p>
 * @method void setId(integer $Id) 设置<p>队列ID</p>
 * @method string getQueueName() 获取<p>队列名称</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称</p>
 * @method array getResourceUsage() 获取<p>资源用量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceUsage(array $ResourceUsage) 设置<p>资源用量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取<p>队列描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置<p>队列描述</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDefault() 获取<p>是否为默认队列</p>
 * @method void setIsDefault(integer $IsDefault) 设置<p>是否为默认队列</p>
 * @method integer getQueueType() 获取<p>队列类型：1-独占型，2-共享型</p>
 * @method void setQueueType(integer $QueueType) 设置<p>队列类型：1-独占型，2-共享型</p>
 */
class QueueInfo extends AbstractModel
{
    /**
     * @var integer <p>队列ID</p>
     */
    public $Id;

    /**
     * @var string <p>队列名称</p>
     */
    public $QueueName;

    /**
     * @var array <p>资源用量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceUsage;

    /**
     * @var string <p>队列描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var integer <p>是否为默认队列</p>
     */
    public $IsDefault;

    /**
     * @var integer <p>队列类型：1-独占型，2-共享型</p>
     */
    public $QueueType;

    /**
     * @param integer $Id <p>队列ID</p>
     * @param string $QueueName <p>队列名称</p>
     * @param array $ResourceUsage <p>资源用量列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description <p>队列描述</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDefault <p>是否为默认队列</p>
     * @param integer $QueueType <p>队列类型：1-独占型，2-共享型</p>
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

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ResourceUsage",$param) and $param["ResourceUsage"] !== null) {
            $this->ResourceUsage = [];
            foreach ($param["ResourceUsage"] as $key => $value){
                $obj = new ResourceUsage();
                $obj->deserialize($value);
                array_push($this->ResourceUsage, $obj);
            }
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }
    }
}
