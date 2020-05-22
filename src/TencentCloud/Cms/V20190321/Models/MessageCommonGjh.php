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
namespace TencentCloud\Cms\V20190321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 广交会公共参数
 *
 * @method string getStrPassword() 获取密码（由腾讯提供）
 * @method void setStrPassword(string $StrPassword) 设置密码（由腾讯提供）
 * @method integer getUiAppID() 获取账号（由腾讯提供）
 * @method void setUiAppID(integer $UiAppID) 设置账号（由腾讯提供）
 * @method integer getUiAppSceneID() 获取业务场景ID: 1：媒体类；2：流媒体类；3：即时通讯类；4：社交日志；5：评论类；6：资料类；7：文件类；8：互动类；9：论坛类
 * @method void setUiAppSceneID(integer $UiAppSceneID) 设置业务场景ID: 1：媒体类；2：流媒体类；3：即时通讯类；4：社交日志；5：评论类；6：资料类；7：文件类；8：互动类；9：论坛类
 * @method integer getUiSeq() 获取请求序列号，会原样回到给业务侧请求序列号，会原样回到给业务侧，用于上游异步处理
 * @method void setUiSeq(integer $UiSeq) 设置请求序列号，会原样回到给业务侧请求序列号，会原样回到给业务侧，用于上游异步处理
 */
class MessageCommonGjh extends AbstractModel
{
    /**
     * @var string 密码（由腾讯提供）
     */
    public $StrPassword;

    /**
     * @var integer 账号（由腾讯提供）
     */
    public $UiAppID;

    /**
     * @var integer 业务场景ID: 1：媒体类；2：流媒体类；3：即时通讯类；4：社交日志；5：评论类；6：资料类；7：文件类；8：互动类；9：论坛类
     */
    public $UiAppSceneID;

    /**
     * @var integer 请求序列号，会原样回到给业务侧请求序列号，会原样回到给业务侧，用于上游异步处理
     */
    public $UiSeq;

    /**
     * @param string $StrPassword 密码（由腾讯提供）
     * @param integer $UiAppID 账号（由腾讯提供）
     * @param integer $UiAppSceneID 业务场景ID: 1：媒体类；2：流媒体类；3：即时通讯类；4：社交日志；5：评论类；6：资料类；7：文件类；8：互动类；9：论坛类
     * @param integer $UiSeq 请求序列号，会原样回到给业务侧请求序列号，会原样回到给业务侧，用于上游异步处理
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
        if (array_key_exists("StrPassword",$param) and $param["StrPassword"] !== null) {
            $this->StrPassword = $param["StrPassword"];
        }

        if (array_key_exists("UiAppID",$param) and $param["UiAppID"] !== null) {
            $this->UiAppID = $param["UiAppID"];
        }

        if (array_key_exists("UiAppSceneID",$param) and $param["UiAppSceneID"] !== null) {
            $this->UiAppSceneID = $param["UiAppSceneID"];
        }

        if (array_key_exists("UiSeq",$param) and $param["UiSeq"] !== null) {
            $this->UiSeq = $param["UiSeq"];
        }
    }
}
