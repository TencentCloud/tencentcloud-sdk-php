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
 * 剔除房间操作结果
 *
 * @method integer getCode() 获取错误码，0-剔除成功 其他-剔除失败
 * @method void setCode(integer $Code) 设置错误码，0-剔除成功 其他-剔除失败
 * @method string getErrorMsg() 获取错误描述
 * @method void setErrorMsg(string $ErrorMsg) 设置错误描述
 */
class DeleteResult extends AbstractModel
{
    /**
     * @var integer 错误码，0-剔除成功 其他-剔除失败
     */
    public $Code;

    /**
     * @var string 错误描述
     */
    public $ErrorMsg;

    /**
     * @param integer $Code 错误码，0-剔除成功 其他-剔除失败
     * @param string $ErrorMsg 错误描述
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
        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }
    }
}
