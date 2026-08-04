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
 * ModifyPartitionQueue请求参数结构体
 *
 * @method integer getId() 获取资源队列ID
 * @method void setId(integer $Id) 设置资源队列ID
 * @method string getPartitionCode() 获取分区编码
 * @method void setPartitionCode(string $PartitionCode) 设置分区编码
 * @method string getQueueName() 获取队列名称
 * @method void setQueueName(string $QueueName) 设置队列名称
 * @method string getDescription() 获取队列描述
 * @method void setDescription(string $Description) 设置队列描述
 * @method array getResourceUsages() 获取资源规格列表，定义队列的资源类型及大小范围
 * @method void setResourceUsages(array $ResourceUsages) 设置资源规格列表，定义队列的资源类型及大小范围
 * @method integer getQueueType() 获取队列类型：1-独占型，2-共享型
 * @method void setQueueType(integer $QueueType) 设置队列类型：1-独占型，2-共享型
 */
class ModifyPartitionQueueRequest extends AbstractModel
{
    /**
     * @var integer 资源队列ID
     */
    public $Id;

    /**
     * @var string 分区编码
     */
    public $PartitionCode;

    /**
     * @var string 队列名称
     */
    public $QueueName;

    /**
     * @var string 队列描述
     */
    public $Description;

    /**
     * @var array 资源规格列表，定义队列的资源类型及大小范围
     */
    public $ResourceUsages;

    /**
     * @var integer 队列类型：1-独占型，2-共享型
     */
    public $QueueType;

    /**
     * @param integer $Id 资源队列ID
     * @param string $PartitionCode 分区编码
     * @param string $QueueName 队列名称
     * @param string $Description 队列描述
     * @param array $ResourceUsages 资源规格列表，定义队列的资源类型及大小范围
     * @param integer $QueueType 队列类型：1-独占型，2-共享型
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

        if (array_key_exists("PartitionCode",$param) and $param["PartitionCode"] !== null) {
            $this->PartitionCode = $param["PartitionCode"];
        }

        if (array_key_exists("QueueName",$param) and $param["QueueName"] !== null) {
            $this->QueueName = $param["QueueName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
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
    }
}
