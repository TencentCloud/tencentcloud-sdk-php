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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ResetSession请求参数结构体
 *
 * @method string getSessionId() 获取会话ID
 * @method void setSessionId(string $SessionId) 设置会话ID
 * @method boolean getIsOnlyEmptyTheDialog() 获取是否仅清空会话关联
 * @method void setIsOnlyEmptyTheDialog(boolean $IsOnlyEmptyTheDialog) 设置是否仅清空会话关联
 */
class ResetSessionRequest extends AbstractModel
{
    /**
     * @var string 会话ID
     */
    public $SessionId;

    /**
     * @var boolean 是否仅清空会话关联
     */
    public $IsOnlyEmptyTheDialog;

    /**
     * @param string $SessionId 会话ID
     * @param boolean $IsOnlyEmptyTheDialog 是否仅清空会话关联
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("IsOnlyEmptyTheDialog",$param) and $param["IsOnlyEmptyTheDialog"] !== null) {
            $this->IsOnlyEmptyTheDialog = $param["IsOnlyEmptyTheDialog"];
        }
    }
}
