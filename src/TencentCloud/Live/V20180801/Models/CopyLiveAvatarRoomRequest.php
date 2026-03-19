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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CopyLiveAvatarRoom请求参数结构体
 *
 * @method string getName() 获取新直播间名称。
 * @method void setName(string $Name) 设置新直播间名称。
 * @method string getSourceRoomId() 获取源数字人直播间 ID。
 * @method void setSourceRoomId(string $SourceRoomId) 设置源数字人直播间 ID。
 * @method boolean getIsCopyScript() 获取是否复制话术列表。默认：true。
 * @method void setIsCopyScript(boolean $IsCopyScript) 设置是否复制话术列表。默认：true。
 * @method string getOperator() 获取操作者。
 * @method void setOperator(string $Operator) 设置操作者。
 */
class CopyLiveAvatarRoomRequest extends AbstractModel
{
    /**
     * @var string 新直播间名称。
     */
    public $Name;

    /**
     * @var string 源数字人直播间 ID。
     */
    public $SourceRoomId;

    /**
     * @var boolean 是否复制话术列表。默认：true。
     */
    public $IsCopyScript;

    /**
     * @var string 操作者。
     */
    public $Operator;

    /**
     * @param string $Name 新直播间名称。
     * @param string $SourceRoomId 源数字人直播间 ID。
     * @param boolean $IsCopyScript 是否复制话术列表。默认：true。
     * @param string $Operator 操作者。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SourceRoomId",$param) and $param["SourceRoomId"] !== null) {
            $this->SourceRoomId = $param["SourceRoomId"];
        }

        if (array_key_exists("IsCopyScript",$param) and $param["IsCopyScript"] !== null) {
            $this->IsCopyScript = $param["IsCopyScript"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
