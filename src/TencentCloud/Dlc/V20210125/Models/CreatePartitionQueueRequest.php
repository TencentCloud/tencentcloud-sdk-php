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
 * CreatePartitionQueue请求参数结构体
 *
 * @method string getPartitionCode() 获取<p>分区编码</p>
 * @method void setPartitionCode(string $PartitionCode) 设置<p>分区编码</p>
 * @method string getQueueName() 获取<p>队列名称</p>
 * @method void setQueueName(string $QueueName) 设置<p>队列名称</p>
 * @method array getResourceUsages() 获取<p>资源规格列表，定义队列的资源类型及大小范围</p>
 * @method void setResourceUsages(array $ResourceUsages) 设置<p>资源规格列表，定义队列的资源类型及大小范围</p>
 * @method integer getQueueType() 获取<p>队列类型：1-独占型，2-共享型</p>
 * @method void setQueueType(integer $QueueType) 设置<p>队列类型：1-独占型，2-共享型</p>
 * @method string getDescription() 获取<p>队列描述</p>
 * @method void setDescription(string $Description) 设置<p>队列描述</p>
 */
class CreatePartitionQueueRequest extends AbstractModel
{
    /**
     * @var string <p>分区编码</p>
     */
    public $PartitionCode;

    /**
     * @var string <p>队列名称</p>
     */
    public $QueueName;

    /**
     * @var array <p>资源规格列表，定义队列的资源类型及大小范围</p>
     */
    public $ResourceUsages;

    /**
     * @var integer <p>队列类型：1-独占型，2-共享型</p>
     */
    public $QueueType;

    /**
     * @var string <p>队列描述</p>
     */
    public $Description;

    /**
     * @param string $PartitionCode <p>分区编码</p>
     * @param string $QueueName <p>队列名称</p>
     * @param array $ResourceUsages <p>资源规格列表，定义队列的资源类型及大小范围</p>
     * @param integer $QueueType <p>队列类型：1-独占型，2-共享型</p>
     * @param string $Description <p>队列描述</p>
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
        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("ResourceUsages",$param) and $param["ResourceUsages"] !== null) {
            $this->ResourceUsages = [];
            foreach ($param["ResourceUsages"] as $key => $value){
                $obj = new ResourceUsage();
                $obj->deserialize($value);
                array_push($this->ResourceUsages, $obj);
            }
        }

        if (array_key_exists("QueueType",$param) and $param["QueueType"] !== null) {
            $this->QueueType = $param["QueueType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
