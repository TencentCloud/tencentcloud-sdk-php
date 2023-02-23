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
namespace TencentCloud\Ame\V20190916\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 设置真实音量。
 *
 * @method integer getRealVolume() 获取真实音量大小，取值范围为 0~100，默认值为 50。
 * @method void setRealVolume(integer $RealVolume) 设置真实音量大小，取值范围为 0~100，默认值为 50。
 */
class SetRealVolumeCommandInput extends AbstractModel
{
    /**
     * @var integer 真实音量大小，取值范围为 0~100，默认值为 50。
     */
    public $RealVolume;

    /**
     * @param integer $RealVolume 真实音量大小，取值范围为 0~100，默认值为 50。
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
        if (array_key_exists("RealVolume",$param) and $param["RealVolume"] !== null) {
            $this->RealVolume = $param["RealVolume"];
        }
    }
}
