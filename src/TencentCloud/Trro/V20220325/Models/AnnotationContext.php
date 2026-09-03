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
namespace TencentCloud\Trro\V20220325\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 标注上下文
 *
 * @method string getTaskGoal() 获取<p>任务目标（整段视频的总目标）</p>
 * @method void setTaskGoal(string $TaskGoal) 设置<p>任务目标（整段视频的总目标）</p>
 * @method array getKeyObjects() 获取<p>关键物体列表</p>
 * @method void setKeyObjects(array $KeyObjects) 设置<p>关键物体列表</p>
 * @method array getAtomicVerbs() 获取<p>原子动词参考列表</p>
 * @method void setAtomicVerbs(array $AtomicVerbs) 设置<p>原子动词参考列表</p>
 */
class AnnotationContext extends AbstractModel
{
    /**
     * @var string <p>任务目标（整段视频的总目标）</p>
     */
    public $TaskGoal;

    /**
     * @var array <p>关键物体列表</p>
     */
    public $KeyObjects;

    /**
     * @var array <p>原子动词参考列表</p>
     */
    public $AtomicVerbs;

    /**
     * @param string $TaskGoal <p>任务目标（整段视频的总目标）</p>
     * @param array $KeyObjects <p>关键物体列表</p>
     * @param array $AtomicVerbs <p>原子动词参考列表</p>
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
        if (array_key_exists("TaskGoal",$param) and $param["TaskGoal"] !== null) {
            $this->TaskGoal = $param["TaskGoal"];
        }

        if (array_key_exists("KeyObjects",$param) and $param["KeyObjects"] !== null) {
            $this->KeyObjects = $param["KeyObjects"];
        }

        if (array_key_exists("AtomicVerbs",$param) and $param["AtomicVerbs"] !== null) {
            $this->AtomicVerbs = $param["AtomicVerbs"];
        }
    }
}
