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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetAnswerTypeDataCount请求参数结构体
 *
 * @method integer getStartTime() 获取开始日期
 * @method void setStartTime(integer $StartTime) 设置开始日期
 * @method integer getEndTime() 获取结束日期
 * @method void setEndTime(integer $EndTime) 设置结束日期
 * @method array getAppBizId() 获取应用id
 * @method void setAppBizId(array $AppBizId) 设置应用id
 * @method integer getType() 获取消息来源(1、分享用户端  2、对话API  3、对话测试  4、应用评测)
 * @method void setType(integer $Type) 设置消息来源(1、分享用户端  2、对话API  3、对话测试  4、应用评测)
 * @method string getLoginUin() 获取登录用户主账号(集成商模式必填)
 * @method void setLoginUin(string $LoginUin) 设置登录用户主账号(集成商模式必填)
 * @method string getLoginSubAccountUin() 获取登录用户子账号(集成商模式必填)	
 * @method void setLoginSubAccountUin(string $LoginSubAccountUin) 设置登录用户子账号(集成商模式必填)	
 */
class GetAnswerTypeDataCountRequest extends AbstractModel
{
    /**
     * @var integer 开始日期
     */
    public $StartTime;

    /**
     * @var integer 结束日期
     */
    public $EndTime;

    /**
     * @var array 应用id
     */
    public $AppBizId;

    /**
     * @var integer 消息来源(1、分享用户端  2、对话API  3、对话测试  4、应用评测)
     */
    public $Type;

    /**
     * @var string 登录用户主账号(集成商模式必填)
     */
    public $LoginUin;

    /**
     * @var string 登录用户子账号(集成商模式必填)	
     */
    public $LoginSubAccountUin;

    /**
     * @param integer $StartTime 开始日期
     * @param integer $EndTime 结束日期
     * @param array $AppBizId 应用id
     * @param integer $Type 消息来源(1、分享用户端  2、对话API  3、对话测试  4、应用评测)
     * @param string $LoginUin 登录用户主账号(集成商模式必填)
     * @param string $LoginSubAccountUin 登录用户子账号(集成商模式必填)	
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("AppBizId",$param) and $param["AppBizId"] !== null) {
            $this->AppBizId = $param["AppBizId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("LoginUin",$param) and $param["LoginUin"] !== null) {
            $this->LoginUin = $param["LoginUin"];
        }

        if (array_key_exists("LoginSubAccountUin",$param) and $param["LoginSubAccountUin"] !== null) {
            $this->LoginSubAccountUin = $param["LoginSubAccountUin"];
        }
    }
}
