<?php
/*
 * Licensed to the Apache Software Foundation (ASF) under one
 * or more contributor license agreements.  See the NOTICE file
 * distributed with this work for additional information
 * regarding copyright ownership.  The ASF licenses this file
 * to you under the Apache License, Version 2.0 (the
 * "License"); you may not use this file except in compliance
 * with the License.  You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing,
 * software distributed under the License is distributed on an
 * "AS IS" BASIS, WITHOUT WARRANTIES OR CONDITIONS OF ANY
 * KIND, either express or implied.  See the License for the
 * specific language governing permissions and limitations
 * under the License.
 */
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method First getFirst() 获取第一备机信息
 * @method void setFirst(First $First) 设置第一备机信息
 * @method First getSecond() 获取第二备机信息
 * @method void setSecond(First $Second) 设置第二备机信息
 */

/**
 *备机信息
 */
class SlaveInfo extends AbstractModel
{
    /**
     * @var First 第一备机信息
     */
    public $First;

    /**
     * @var First 第二备机信息
     */
    public $Second;
    /**
     * @param First $First 第一备机信息
     * @param First $Second 第二备机信息
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("First",$param) and $param["First"] !== null) {
            $this->First = new First();
            $this->First->deserialize($param["First"]);
        }

        if (array_key_exists("Second",$param) and $param["Second"] !== null) {
            $this->Second = new First();
            $this->Second->deserialize($param["Second"]);
        }
    }
}
