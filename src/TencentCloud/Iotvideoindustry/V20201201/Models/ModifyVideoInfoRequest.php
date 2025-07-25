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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyVideoInfo请求参数结构体
 *
 * @method array getInitIDs() 获取视频ID列表长度限制100内
 * @method void setInitIDs(array $InitIDs) 设置视频ID列表长度限制100内
 * @method integer getExpireTime() 获取过期时间 时间戳 -1: 永不过期 0: 无效值
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间 时间戳 -1: 永不过期 0: 无效值
 */
class ModifyVideoInfoRequest extends AbstractModel
{
    /**
     * @var array 视频ID列表长度限制100内
     */
    public $InitIDs;

    /**
     * @var integer 过期时间 时间戳 -1: 永不过期 0: 无效值
     */
    public $ExpireTime;

    /**
     * @param array $InitIDs 视频ID列表长度限制100内
     * @param integer $ExpireTime 过期时间 时间戳 -1: 永不过期 0: 无效值
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
        if (array_key_exists("InitIDs",$param) and $param["InitIDs"] !== null) {
            $this->InitIDs = $param["InitIDs"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
