<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Cat\V20180409\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteTasks请求参数结构体
 *
 * @method array getTaskIds() 获取拨测任务id
 * @method void setTaskIds(array $TaskIds) 设置拨测任务id
 */
class DeleteTasksRequest extends AbstractModel
{
    /**
     * @var array 拨测任务id
     */
    public $TaskIds;

    /**
     * @param array $TaskIds 拨测任务id
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
        if (array_key_exists('TaskIds',$param) and $param['TaskIds'] !== null) {
            $this->TaskIds = $param['TaskIds'];
        }
    }
}
