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
 * 通知内容模板绑定告警策略数量
 *
 * @method string getNoticeContentTmplID() 获取通知内容模板ID
 * @method void setNoticeContentTmplID(string $NoticeContentTmplID) 设置通知内容模板ID
 * @method integer getBindCount() 获取绑定告警策略数量
 * @method void setBindCount(integer $BindCount) 设置绑定告警策略数量
 */
class NoticeContentTmplBindPolicyCount extends AbstractModel
{
    /**
     * @var string 通知内容模板ID
     */
    public $NoticeContentTmplID;

    /**
     * @var integer 绑定告警策略数量
     */
    public $BindCount;

    /**
     * @param string $NoticeContentTmplID 通知内容模板ID
     * @param integer $BindCount 绑定告警策略数量
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
        if (array_key_exists("NoticeContentTmplID",$param) and $param["NoticeContentTmplID"] !== null) {
            $this->NoticeContentTmplID = $param["NoticeContentTmplID"];
        }

        if (array_key_exists("BindCount",$param) and $param["BindCount"] !== null) {
            $this->BindCount = $param["BindCount"];
        }
    }
}
