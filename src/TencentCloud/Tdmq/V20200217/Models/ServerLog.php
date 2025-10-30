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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务方信息
 *
 * @method string getSaveTime() 获取存储时间。
 * @method void setSaveTime(string $SaveTime) 设置存储时间。
 * @method string getStatus() 获取状态。
 * @method void setStatus(string $Status) 设置状态。
 */
class ServerLog extends AbstractModel
{
    /**
     * @var string 存储时间。
     */
    public $SaveTime;

    /**
     * @var string 状态。
     */
    public $Status;

    /**
     * @param string $SaveTime 存储时间。
     * @param string $Status 状态。
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
        if (array_key_exists("SaveTime",$param) and $param["SaveTime"] !== null) {
            $this->SaveTime = $param["SaveTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
