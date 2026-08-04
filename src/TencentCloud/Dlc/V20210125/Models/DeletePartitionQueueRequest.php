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
 * DeletePartitionQueue请求参数结构体
 *
 * @method string getPartitionCode() 获取分区编码
 * @method void setPartitionCode(string $PartitionCode) 设置分区编码
 * @method string getQueueName() 获取队列名称
 * @method void setQueueName(string $QueueName) 设置队列名称
 * @method integer getId() 获取队列ID
 * @method void setId(integer $Id) 设置队列ID
 */
class DeletePartitionQueueRequest extends AbstractModel
{
    /**
     * @var string 分区编码
     */
    public $PartitionCode;

    /**
     * @var string 队列名称
     */
    public $QueueName;

    /**
     * @var integer 队列ID
     */
    public $Id;

    /**
     * @param string $PartitionCode 分区编码
     * @param string $QueueName 队列名称
     * @param integer $Id 队列ID
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }
    }
}
