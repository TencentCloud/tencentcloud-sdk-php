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
 * 后训练资源规格配置
 *
 * @method HeadSpecDTO getHead() 获取<p>Head 节点资源规格</p>
 * @method void setHead(HeadSpecDTO $Head) 设置<p>Head 节点资源规格</p>
 * @method array getWorker() 获取<p>Worker 节点资源规格</p>
 * @method void setWorker(array $Worker) 设置<p>Worker 节点资源规格</p>
 */
class PostTrainingResources extends AbstractModel
{
    /**
     * @var HeadSpecDTO <p>Head 节点资源规格</p>
     */
    public $Head;

    /**
     * @var array <p>Worker 节点资源规格</p>
     */
    public $Worker;

    /**
     * @param HeadSpecDTO $Head <p>Head 节点资源规格</p>
     * @param array $Worker <p>Worker 节点资源规格</p>
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
        if (array_key_exists("Head",$param) and $param["Head"] !== null) {
            $this->Head = new HeadSpecDTO();
            $this->Head->deserialize($param["Head"]);
        }

        if (array_key_exists("Worker",$param) and $param["Worker"] !== null) {
            $this->Worker = [];
            foreach ($param["Worker"] as $key => $value){
                $obj = new WorkerSpecDTO();
                $obj->deserialize($value);
                array_push($this->Worker, $obj);
            }
        }
    }
}
