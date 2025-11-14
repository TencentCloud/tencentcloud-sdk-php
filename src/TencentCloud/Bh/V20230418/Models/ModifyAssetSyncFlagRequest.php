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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAssetSyncFlag请求参数结构体
 *
 * @method boolean getAutoSync() 获取是否开启资产自动同步，false-不开启，true-开启
 * @method void setAutoSync(boolean $AutoSync) 设置是否开启资产自动同步，false-不开启，true-开启
 */
class ModifyAssetSyncFlagRequest extends AbstractModel
{
    /**
     * @var boolean 是否开启资产自动同步，false-不开启，true-开启
     */
    public $AutoSync;

    /**
     * @param boolean $AutoSync 是否开启资产自动同步，false-不开启，true-开启
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
        if (array_key_exists("AutoSync",$param) and $param["AutoSync"] !== null) {
            $this->AutoSync = $param["AutoSync"];
        }
    }
}
