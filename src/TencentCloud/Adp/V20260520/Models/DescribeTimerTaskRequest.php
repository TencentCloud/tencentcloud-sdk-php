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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTimerTask请求参数结构体
 *
 * @method string getSpaceId() 获取空间id
 * @method void setSpaceId(string $SpaceId) 设置空间id
 * @method string getTimerId() 获取任务id
 * @method void setTimerId(string $TimerId) 设置任务id
 * @method string getLoginUin() 获取<p>主用户Uin</p>
 * @method void setLoginUin(string $LoginUin) 设置<p>主用户Uin</p>
 * @method string getLoginSubAccountUin() 获取<p>子用户Uin</p>
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置<p>子用户Uin</p>
 */
class DescribeTimerTaskRequest extends AbstractModel
{
    /**
     * @var string 空间id
     */
    public $SpaceId;

    /**
     * @var string 任务id
     */
    public $TimerId;

    /**
     * @var string <p>主用户Uin</p>
     */
    public $LoginUin;

    /**
     * @var string <p>子用户Uin</p>
     */
    public $LoginSubAccountUin;

    /**
     * @param string $SpaceId 空间id
     * @param string $TimerId 任务id
     * @param string $LoginUin <p>主用户Uin</p>
     * @param string $LoginSubAccountUin <p>子用户Uin</p>
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
        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("TimerId",$param) and $param["TimerId"] !== null) {
            $this->TimerId = $param["TimerId"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
