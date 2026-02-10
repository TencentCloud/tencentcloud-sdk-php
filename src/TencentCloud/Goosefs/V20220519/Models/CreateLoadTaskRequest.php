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
namespace TencentCloud\Goosefs\V20220519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateLoadTask请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method LoadTaskCreationAttrs getLoadTaskCreationAttrs() 获取创建预热任务参数
 * @method void setLoadTaskCreationAttrs(LoadTaskCreationAttrs $LoadTaskCreationAttrs) 设置创建预热任务参数
 */
class CreateLoadTaskRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var LoadTaskCreationAttrs 创建预热任务参数
     */
    public $LoadTaskCreationAttrs;

    /**
     * @param string $ClusterId 集群 ID
     * @param LoadTaskCreationAttrs $LoadTaskCreationAttrs 创建预热任务参数
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

        if (array_key_exists("LoadTaskCreationAttrs",$param) and $param["LoadTaskCreationAttrs"] !== null) {
            $this->LoadTaskCreationAttrs = new LoadTaskCreationAttrs();
            $this->LoadTaskCreationAttrs->deserialize($param["LoadTaskCreationAttrs"]);
        }
    }
}
