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
 * 设置销毁模式
 *
 * @method string getDestroyMode() 获取销毁模式，取值有：
<li>Auto：房间没人时自动销毁</li>
<li>Expire：房间没人时过期自动销毁</li>
<li>Never：不自动销毁，需手动销毁</li>默认为：Auto。
 * @method void setDestroyMode(string $DestroyMode) 设置销毁模式，取值有：
<li>Auto：房间没人时自动销毁</li>
<li>Expire：房间没人时过期自动销毁</li>
<li>Never：不自动销毁，需手动销毁</li>默认为：Auto。
 * @method integer getDestroyExpireTime() 获取过期销毁时间，单位：秒，当DestroyMode取Expire时必填。
 * @method void setDestroyExpireTime(integer $DestroyExpireTime) 设置过期销毁时间，单位：秒，当DestroyMode取Expire时必填。
 */
class SetDestroyModeCommandInput extends AbstractModel
{
    /**
     * @var string 销毁模式，取值有：
<li>Auto：房间没人时自动销毁</li>
<li>Expire：房间没人时过期自动销毁</li>
<li>Never：不自动销毁，需手动销毁</li>默认为：Auto。
     */
    public $DestroyMode;

    /**
     * @var integer 过期销毁时间，单位：秒，当DestroyMode取Expire时必填。
     */
    public $DestroyExpireTime;

    /**
     * @param string $DestroyMode 销毁模式，取值有：
<li>Auto：房间没人时自动销毁</li>
<li>Expire：房间没人时过期自动销毁</li>
<li>Never：不自动销毁，需手动销毁</li>默认为：Auto。
     * @param integer $DestroyExpireTime 过期销毁时间，单位：秒，当DestroyMode取Expire时必填。
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
        if (array_key_exists("DestroyMode",$param) and $param["DestroyMode"] !== null) {
            $this->DestroyMode = $param["DestroyMode"];
        }

        if (array_key_exists("DestroyExpireTime",$param) and $param["DestroyExpireTime"] !== null) {
            $this->DestroyExpireTime = $param["DestroyExpireTime"];
        }
    }
}
