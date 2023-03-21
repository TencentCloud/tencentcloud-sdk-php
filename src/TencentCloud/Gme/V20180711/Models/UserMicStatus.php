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
 * @method integer getEnableMic() 获取开麦状态。1表示关闭麦克风，2表示打开麦克风。
 * @method void setEnableMic(integer $EnableMic) 设置开麦状态。1表示关闭麦克风，2表示打开麦克风。
 * @method integer getUid() 获取客户端用于标识用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
 * @method void setUid(integer $Uid) 设置客户端用于标识用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
 * @method string getStrUid() 获取客户端用于标识字符串型用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
 * @method void setStrUid(string $StrUid) 设置客户端用于标识字符串型用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
 */
class UserMicStatus extends AbstractModel
{
    /**
     * @var integer 开麦状态。1表示关闭麦克风，2表示打开麦克风。
     */
    public $EnableMic;

    /**
     * @var integer 客户端用于标识用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
     */
    public $Uid;

    /**
     * @var string 客户端用于标识字符串型用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
     */
    public $StrUid;

    /**
     * @param integer $EnableMic 开麦状态。1表示关闭麦克风，2表示打开麦克风。
     * @param integer $Uid 客户端用于标识用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
     * @param string $StrUid 客户端用于标识字符串型用户的Openid。（Uid、StrUid必须填一个，优先处理StrUid。）
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
        if (array_key_exists("EnableMic",$param) and $param["EnableMic"] !== null) {
            $this->EnableMic = $param["EnableMic"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("StrUid",$param) and $param["StrUid"] !== null) {
            $this->StrUid = $param["StrUid"];
        }
    }
}
