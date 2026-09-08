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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源图谱tke集群接入信息
 *
 * @method string getClusterId() 获取<p>tke集群id</p>
 * @method void setClusterId(string $ClusterId) 设置<p>tke集群id</p>
 * @method string getResourceGraphId() 获取<p>资源图谱id</p>
 * @method void setResourceGraphId(string $ResourceGraphId) 设置<p>资源图谱id</p>
 * @method string getResourceGraphName() 获取<p>资源图谱名称</p>
 * @method void setResourceGraphName(string $ResourceGraphName) 设置<p>资源图谱名称</p>
 * @method string getTaskId() 获取<p>资源图谱接入任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>资源图谱接入任务id</p>
 * @method string getTaskName() 获取<p>资源图谱接入任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>资源图谱接入任务名称</p>
 */
class ResourceGraphTkeClusterInfo extends AbstractModel
{
    /**
     * @var string <p>tke集群id</p>
     */
    public $ClusterId;

    /**
     * @var string <p>资源图谱id</p>
     */
    public $ResourceGraphId;

    /**
     * @var string <p>资源图谱名称</p>
     */
    public $ResourceGraphName;

    /**
     * @var string <p>资源图谱接入任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>资源图谱接入任务名称</p>
     */
    public $TaskName;

    /**
     * @param string $ClusterId <p>tke集群id</p>
     * @param string $ResourceGraphId <p>资源图谱id</p>
     * @param string $ResourceGraphName <p>资源图谱名称</p>
     * @param string $TaskId <p>资源图谱接入任务id</p>
     * @param string $TaskName <p>资源图谱接入任务名称</p>
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

        if (array_key_exists("ResourceGraphId",$param) and $param["ResourceGraphId"] !== null) {
            $this->ResourceGraphId = $param["ResourceGraphId"];
        }

        if (array_key_exists("ResourceGraphName",$param) and $param["ResourceGraphName"] !== null) {
            $this->ResourceGraphName = $param["ResourceGraphName"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }
    }
}
