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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLiveVideo请求参数结构体
 *
 * @method array getIntIDs() 获取视频ID 列表, 大小限制(100)
 * @method void setIntIDs(array $IntIDs) 设置视频ID 列表, 大小限制(100)
 * @method integer getExpireTime() 获取过期时间 秒 (-1: 为永不过期)
 * @method void setExpireTime(integer $ExpireTime) 设置过期时间 秒 (-1: 为永不过期)
 */
class ModifyLiveVideoRequest extends AbstractModel
{
    /**
     * @var array 视频ID 列表, 大小限制(100)
     */
    public $IntIDs;

    /**
     * @var integer 过期时间 秒 (-1: 为永不过期)
     */
    public $ExpireTime;

    /**
     * @param array $IntIDs 视频ID 列表, 大小限制(100)
     * @param integer $ExpireTime 过期时间 秒 (-1: 为永不过期)
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
        if (array_key_exists("IntIDs",$param) and $param["IntIDs"] !== null) {
            $this->IntIDs = $param["IntIDs"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
