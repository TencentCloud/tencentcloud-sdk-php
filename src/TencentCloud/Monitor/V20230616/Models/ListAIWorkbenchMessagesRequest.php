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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListAIWorkbenchMessages请求参数结构体
 *
 * @method string getSessionId() 获取<p>会话 ID</p>
 * @method void setSessionId(string $SessionId) 设置<p>会话 ID</p>
 * @method string getCursor() 获取<p>游标分页的定位标记</p>
 * @method void setCursor(string $Cursor) 设置<p>游标分页的定位标记</p>
 * @method integer getLimit() 获取<p>窗口大小</p>
 * @method void setLimit(integer $Limit) 设置<p>窗口大小</p>
 * @method string getDirection() 获取<p>拉取顺序</p>
 * @method void setDirection(string $Direction) 设置<p>拉取顺序</p>
 */
class ListAIWorkbenchMessagesRequest extends AbstractModel
{
    /**
     * @var string <p>会话 ID</p>
     */
    public $SessionId;

    /**
     * @var string <p>游标分页的定位标记</p>
     */
    public $Cursor;

    /**
     * @var integer <p>窗口大小</p>
     */
    public $Limit;

    /**
     * @var string <p>拉取顺序</p>
     */
    public $Direction;

    /**
     * @param string $SessionId <p>会话 ID</p>
     * @param string $Cursor <p>游标分页的定位标记</p>
     * @param integer $Limit <p>窗口大小</p>
     * @param string $Direction <p>拉取顺序</p>
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

        if (array_key_exists("Cursor",$param) and $param["Cursor"] !== null) {
            $this->Cursor = $param["Cursor"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Direction",$param) and $param["Direction"] !== null) {
            $this->Direction = $param["Direction"];
        }
    }
}
