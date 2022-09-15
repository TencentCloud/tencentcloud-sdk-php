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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户麦克风状态
 *
 * @method integer getUid() 获取用户ID
 * @method void setUid(integer $Uid) 设置用户ID
 * @method integer getEnableMic() 获取是否开麦 。1闭麦  2开麦
 * @method void setEnableMic(integer $EnableMic) 设置是否开麦 。1闭麦  2开麦
 */
class UserMicStatus extends AbstractModel
{
    /**
     * @var integer 用户ID
     */
    public $Uid;

    /**
     * @var integer 是否开麦 。1闭麦  2开麦
     */
    public $EnableMic;

    /**
     * @param integer $Uid 用户ID
     * @param integer $EnableMic 是否开麦 。1闭麦  2开麦
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
        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("EnableMic",$param) and $param["EnableMic"] !== null) {
            $this->EnableMic = $param["EnableMic"];
        }
    }
}
