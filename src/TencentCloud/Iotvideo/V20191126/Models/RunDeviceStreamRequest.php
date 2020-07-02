<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the 'License');
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
namespace TencentCloud\Iotvideo\V20191126\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunDeviceStream请求参数结构体
 *
 * @method array getTids() 获取设备TID 列表
 * @method void setTids(array $Tids) 设置设备TID 列表
 */
class RunDeviceStreamRequest extends AbstractModel
{
    /**
     * @var array 设备TID 列表
     */
    public $Tids;

    /**
     * @param array $Tids 设备TID 列表
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
        if (array_key_exists('Tids',$param) and $param['Tids'] !== null) {
            $this->Tids = $param['Tids'];
        }
    }
}
