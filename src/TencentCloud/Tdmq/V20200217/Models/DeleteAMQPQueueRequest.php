<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteAMQPQueue请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getVHostId() 获取Vhost名称
 * @method void setVHostId(string $VHostId) 设置Vhost名称
 * @method string getQueue() 获取队列名称
 * @method void setQueue(string $Queue) 设置队列名称
 */
class DeleteAMQPQueueRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string Vhost名称
     */
    public $VHostId;

    /**
     * @var string 队列名称
     */
    public $Queue;

    /**
     * @param string $ClusterId 集群ID
     * @param string $VHostId Vhost名称
     * @param string $Queue 队列名称
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("VHostId",$param) and $param["VHostId"] !== null) {
            $this->VHostId = $param["VHostId"];
        }

        if (array_key_exists("Queue",$param) and $param["Queue"] !== null) {
            $this->Queue = $param["Queue"];
        }
    }
}
