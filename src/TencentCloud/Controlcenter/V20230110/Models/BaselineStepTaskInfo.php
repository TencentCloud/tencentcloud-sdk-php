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
namespace TencentCloud\Controlcenter\V20230110\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 基线项部署任务信息列表
 *
 * @method string getTaskId() 获取任务唯一Id，只能包含英文字母、数字，是16个字符的随机字符串。
 * @method void setTaskId(string $TaskId) 设置任务唯一Id，只能包含英文字母、数字，是16个字符的随机字符串。
 * @method string getIdentifier() 获取基线功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method void setIdentifier(string $Identifier) 设置基线功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
 * @method integer getMemberUin() 获取被应用基线项的成员账号uin
 * @method void setMemberUin(integer $MemberUin) 设置被应用基线项的成员账号uin
 * @method string getStatus() 获取基线项应用的状态,Running表示基线项应用中,Success表示基线项应用成功,Failed表示基线项应用失败,Pending表示基线项待应用,Skipped表示基线项被跳过
 * @method void setStatus(string $Status) 设置基线项应用的状态,Running表示基线项应用中,Success表示基线项应用成功,Failed表示基线项应用失败,Pending表示基线项待应用,Skipped表示基线项被跳过
 * @method string getErrCode() 获取错误码
 * @method void setErrCode(string $ErrCode) 设置错误码
 * @method string getErrMessage() 获取错误信息
 * @method void setErrMessage(string $ErrMessage) 设置错误信息
 * @method string getOutput() 获取基线项部署输出
 * @method void setOutput(string $Output) 设置基线项部署输出
 * @method string getCreateTime() 获取创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 * @method void setCreateTime(string $CreateTime) 设置创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 * @method string getUpdateTime() 获取更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
 */
class BaselineStepTaskInfo extends AbstractModel
{
    /**
     * @var string 任务唯一Id，只能包含英文字母、数字，是16个字符的随机字符串。
     */
    public $TaskId;

    /**
     * @var string 基线功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     */
    public $Identifier;

    /**
     * @var integer 被应用基线项的成员账号uin
     */
    public $MemberUin;

    /**
     * @var string 基线项应用的状态,Running表示基线项应用中,Success表示基线项应用成功,Failed表示基线项应用失败,Pending表示基线项待应用,Skipped表示基线项被跳过
     */
    public $Status;

    /**
     * @var string 错误码
     */
    public $ErrCode;

    /**
     * @var string 错误信息
     */
    public $ErrMessage;

    /**
     * @var string 基线项部署输出
     */
    public $Output;

    /**
     * @var string 创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
     */
    public $CreateTime;

    /**
     * @var string 更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
     */
    public $UpdateTime;

    /**
     * @param string $TaskId 任务唯一Id，只能包含英文字母、数字，是16个字符的随机字符串。
     * @param string $Identifier 基线功能项唯一标识，只能包含英文字母、数字和@、,._[]-:()（）【】+=，。，长度2-128个字符。
     * @param integer $MemberUin 被应用基线项的成员账号uin
     * @param string $Status 基线项应用的状态,Running表示基线项应用中,Success表示基线项应用成功,Failed表示基线项应用失败,Pending表示基线项待应用,Skipped表示基线项被跳过
     * @param string $ErrCode 错误码
     * @param string $ErrMessage 错误信息
     * @param string $Output 基线项部署输出
     * @param string $CreateTime 创建时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
     * @param string $UpdateTime 更新时间，按照ISO8601标准表示，格式为yyyy-MM-dd hh:mm:ss。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Identifier",$param) and $param["Identifier"] !== null) {
            $this->Identifier = $param["Identifier"];
        }

        if (array_key_exists("MemberUin",$param) and $param["MemberUin"] !== null) {
            $this->MemberUin = $param["MemberUin"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }
    }
}
