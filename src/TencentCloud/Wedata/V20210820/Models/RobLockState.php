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
 * 抢锁状态：是否可以抢锁和当前持锁人
 *
 * @method boolean getIsRob() 获取是否可以抢锁
 * @method void setIsRob(boolean $IsRob) 设置是否可以抢锁
 * @method string getLocker() 获取当前持锁人
 * @method void setLocker(string $Locker) 设置当前持锁人
 */
class RobLockState extends AbstractModel
{
    /**
     * @var boolean 是否可以抢锁
     */
    public $IsRob;

    /**
     * @var string 当前持锁人
     */
    public $Locker;

    /**
     * @param boolean $IsRob 是否可以抢锁
     * @param string $Locker 当前持锁人
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
        if (array_key_exists("IsRob",$param) and $param["IsRob"] !== null) {
            $this->IsRob = $param["IsRob"];
        }

        if (array_key_exists("Locker",$param) and $param["Locker"] !== null) {
            $this->Locker = $param["Locker"];
        }
    }
}
