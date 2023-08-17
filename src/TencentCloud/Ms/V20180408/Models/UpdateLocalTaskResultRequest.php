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
namespace TencentCloud\Ms\V20180408\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateLocalTaskResult请求参数结构体
 *
 * @method string getSid() 获取任务id
 * @method void setSid(string $Sid) 设置任务id
 * @method integer getResultCode() 获取一级任务code。标记任务状态
 * @method void setResultCode(integer $ResultCode) 设置一级任务code。标记任务状态
 * @method integer getSubCode() 获取二级错误码
 * @method void setSubCode(integer $SubCode) 设置二级错误码
 * @method string getErrMsg() 获取二级错误信息
 * @method void setErrMsg(string $ErrMsg) 设置二级错误信息
 * @method string getResult() 获取结果
 * @method void setResult(string $Result) 设置结果
 */
class UpdateLocalTaskResultRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $Sid;

    /**
     * @var integer 一级任务code。标记任务状态
     */
    public $ResultCode;

    /**
     * @var integer 二级错误码
     */
    public $SubCode;

    /**
     * @var string 二级错误信息
     */
    public $ErrMsg;

    /**
     * @var string 结果
     */
    public $Result;

    /**
     * @param string $Sid 任务id
     * @param integer $ResultCode 一级任务code。标记任务状态
     * @param integer $SubCode 二级错误码
     * @param string $ErrMsg 二级错误信息
     * @param string $Result 结果
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
        if (array_key_exists("Sid",$param) and $param["Sid"] !== null) {
            $this->Sid = $param["Sid"];
        }

        if (array_key_exists("ResultCode",$param) and $param["ResultCode"] !== null) {
            $this->ResultCode = $param["ResultCode"];
        }

        if (array_key_exists("SubCode",$param) and $param["SubCode"] !== null) {
            $this->SubCode = $param["SubCode"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }
    }
}
