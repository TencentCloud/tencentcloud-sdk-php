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
namespace TencentCloud\Tcbr\V20220217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 删除失败版本信息
 *
 * @method SimpleVersion getVersion() 获取删除失败版本信息
 * @method void setVersion(SimpleVersion $Version) 设置删除失败版本信息
 * @method integer getErrorCode() 获取删除失败错误码
 * @method void setErrorCode(integer $ErrorCode) 设置删除失败错误码
 * @method string getErrorMsg() 获取删除失败错误信息
 * @method void setErrorMsg(string $ErrorMsg) 设置删除失败错误信息
 * @method string getRequestId() 获取删除操作 RequestId
 * @method void setRequestId(string $RequestId) 设置删除操作 RequestId
 */
class FailDeleteVersions extends AbstractModel
{
    /**
     * @var SimpleVersion 删除失败版本信息
     */
    public $Version;

    /**
     * @var integer 删除失败错误码
     */
    public $ErrorCode;

    /**
     * @var string 删除失败错误信息
     */
    public $ErrorMsg;

    /**
     * @var string 删除操作 RequestId
     */
    public $RequestId;

    /**
     * @param SimpleVersion $Version 删除失败版本信息
     * @param integer $ErrorCode 删除失败错误码
     * @param string $ErrorMsg 删除失败错误信息
     * @param string $RequestId 删除操作 RequestId
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = new SimpleVersion();
            $this->Version->deserialize($param["Version"]);
        }

        if (array_key_exists("ErrorCode",$param) and $param["ErrorCode"] !== null) {
            $this->ErrorCode = $param["ErrorCode"];
        }

        if (array_key_exists("ErrorMsg",$param) and $param["ErrorMsg"] !== null) {
            $this->ErrorMsg = $param["ErrorMsg"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
