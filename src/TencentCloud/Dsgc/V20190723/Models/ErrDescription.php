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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 错误信息描述
 *
 * @method string getErrCode() 获取错误码。
 * @method void setErrCode(string $ErrCode) 设置错误码。
 * @method string getErrMessage() 获取具体错误信息。
 * @method void setErrMessage(string $ErrMessage) 设置具体错误信息。
 */
class ErrDescription extends AbstractModel
{
    /**
     * @var string 错误码。
     */
    public $ErrCode;

    /**
     * @var string 具体错误信息。
     */
    public $ErrMessage;

    /**
     * @param string $ErrCode 错误码。
     * @param string $ErrMessage 具体错误信息。
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
        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }
    }
}
