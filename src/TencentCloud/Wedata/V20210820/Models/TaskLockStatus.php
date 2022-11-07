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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务锁的状态
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getLocker() 获取持锁者
 * @method void setLocker(string $Locker) 设置持锁者
 * @method integer getIsLocker() 获取当前操作用户是否为持锁者，1表示为持锁者，0表示为不为持锁者
 * @method void setIsLocker(integer $IsLocker) 设置当前操作用户是否为持锁者，1表示为持锁者，0表示为不为持锁者
 * @method integer getIsRob() 获取是否可以抢锁，1表示可以抢锁，0表示不可以抢锁
 * @method void setIsRob(integer $IsRob) 设置是否可以抢锁，1表示可以抢锁，0表示不可以抢锁
 */
class TaskLockStatus extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 持锁者
     */
    public $Locker;

    /**
     * @var integer 当前操作用户是否为持锁者，1表示为持锁者，0表示为不为持锁者
     */
    public $IsLocker;

    /**
     * @var integer 是否可以抢锁，1表示可以抢锁，0表示不可以抢锁
     */
    public $IsRob;

    /**
     * @param string $TaskId 任务id
     * @param string $Locker 持锁者
     * @param integer $IsLocker 当前操作用户是否为持锁者，1表示为持锁者，0表示为不为持锁者
     * @param integer $IsRob 是否可以抢锁，1表示可以抢锁，0表示不可以抢锁
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }

        if (array_key_exists("IsLocker",$param) and $param["IsLocker"] !== null) {
            $this->IsLocker = $param["IsLocker"];
        }

        if (array_key_exists("IsRob",$param) and $param["IsRob"] !== null) {
            $this->IsRob = $param["IsRob"];
        }
    }
}
