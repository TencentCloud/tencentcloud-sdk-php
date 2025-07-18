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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveRecordTemplates请求参数结构体
 *
 * @method integer getIsDelayLive() 获取是否属于慢直播模板，默认：0。
0： 标准直播。
1：慢直播。
 * @method void setIsDelayLive(integer $IsDelayLive) 设置是否属于慢直播模板，默认：0。
0： 标准直播。
1：慢直播。
 */
class DescribeLiveRecordTemplatesRequest extends AbstractModel
{
    /**
     * @var integer 是否属于慢直播模板，默认：0。
0： 标准直播。
1：慢直播。
     */
    public $IsDelayLive;

    /**
     * @param integer $IsDelayLive 是否属于慢直播模板，默认：0。
0： 标准直播。
1：慢直播。
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
        if (array_key_exists("IsDelayLive",$param) and $param["IsDelayLive"] !== null) {
            $this->IsDelayLive = $param["IsDelayLive"];
        }
    }
}
