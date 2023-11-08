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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SendRoomNormalMessage请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method integer getRoomId() 获取房间ID。
 * @method void setRoomId(integer $RoomId) 设置房间ID。
 * @method string getFromAccount() 获取管理员指定消息发送方账号（若需设置 FromAccount 信息，则该参数取值不能为空）
 * @method void setFromAccount(string $FromAccount) 设置管理员指定消息发送方账号（若需设置 FromAccount 信息，则该参数取值不能为空）
 * @method array getMsgBody() 获取自定义消息
 * @method void setMsgBody(array $MsgBody) 设置自定义消息
 * @method string getCloudCustomData() 获取消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到）。
 * @method void setCloudCustomData(string $CloudCustomData) 设置消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到）。
 * @method string getNickName() 获取昵称，当FromAccount没有在房间中，需要填写NickName，当FromAccount在房间中，填写NickName无意义
 * @method void setNickName(string $NickName) 设置昵称，当FromAccount没有在房间中，需要填写NickName，当FromAccount在房间中，填写NickName无意义
 */
class SendRoomNormalMessageRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 房间ID。
     */
    public $RoomId;

    /**
     * @var string 管理员指定消息发送方账号（若需设置 FromAccount 信息，则该参数取值不能为空）
     */
    public $FromAccount;

    /**
     * @var array 自定义消息
     */
    public $MsgBody;

    /**
     * @var string 消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到）。
     */
    public $CloudCustomData;

    /**
     * @var string 昵称，当FromAccount没有在房间中，需要填写NickName，当FromAccount在房间中，填写NickName无意义
     */
    public $NickName;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param integer $RoomId 房间ID。
     * @param string $FromAccount 管理员指定消息发送方账号（若需设置 FromAccount 信息，则该参数取值不能为空）
     * @param array $MsgBody 自定义消息
     * @param string $CloudCustomData 消息自定义数据（云端保存，会发送到对端，程序卸载重装后还能拉取到）。
     * @param string $NickName 昵称，当FromAccount没有在房间中，需要填写NickName，当FromAccount在房间中，填写NickName无意义
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("FromAccount",$param) and $param["FromAccount"] !== null) {
            $this->FromAccount = $param["FromAccount"];
        }

        if (array_key_exists("MsgBody",$param) and $param["MsgBody"] !== null) {
            $this->MsgBody = [];
            foreach ($param["MsgBody"] as $key => $value){
                $obj = new MsgBody();
                $obj->deserialize($value);
                array_push($this->MsgBody, $obj);
            }
        }

        if (array_key_exists("CloudCustomData",$param) and $param["CloudCustomData"] !== null) {
            $this->CloudCustomData = $param["CloudCustomData"];
        }

        if (array_key_exists("NickName",$param) and $param["NickName"] !== null) {
            $this->NickName = $param["NickName"];
        }
    }
}
