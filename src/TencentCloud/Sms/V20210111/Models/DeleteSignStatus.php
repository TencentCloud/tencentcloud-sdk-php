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
namespace TencentCloud\Sms\V20210111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除签名响应
 *
 * @method string getDeleteStatus() 获取<p>删除状态信息。</p>
 * @method void setDeleteStatus(string $DeleteStatus) 设置<p>删除状态信息。</p>
 * @method integer getDeleteTime() 获取<p>删除时间，UNIX 时间戳（单位：秒）。</p>
 * @method void setDeleteTime(integer $DeleteTime) 设置<p>删除时间，UNIX 时间戳（单位：秒）。</p>
 */
class DeleteSignStatus extends AbstractModel
{
    /**
     * @var string <p>删除状态信息。</p>
     */
    public $DeleteStatus;

    /**
     * @var integer <p>删除时间，UNIX 时间戳（单位：秒）。</p>
     */
    public $DeleteTime;

    /**
     * @param string $DeleteStatus <p>删除状态信息。</p>
     * @param integer $DeleteTime <p>删除时间，UNIX 时间戳（单位：秒）。</p>
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
        if (array_key_exists("DeleteStatus",$param) and $param["DeleteStatus"] !== null) {
            $this->DeleteStatus = $param["DeleteStatus"];
        }

        if (array_key_exists("DeleteTime",$param) and $param["DeleteTime"] !== null) {
            $this->DeleteTime = $param["DeleteTime"];
        }
    }
}
