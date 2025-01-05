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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知内容模板绑定信息
 *
 * @method string getContentTmplID() 获取通知内容模板ID
 * @method void setContentTmplID(string $ContentTmplID) 设置通知内容模板ID
 * @method string getNoticeID() 获取通知模板ID
 * @method void setNoticeID(string $NoticeID) 设置通知模板ID
 */
class NoticeContentTmplBindInfo extends AbstractModel
{
    /**
     * @var string 通知内容模板ID
     */
    public $ContentTmplID;

    /**
     * @var string 通知模板ID
     */
    public $NoticeID;

    /**
     * @param string $ContentTmplID 通知内容模板ID
     * @param string $NoticeID 通知模板ID
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
        if (array_key_exists("ContentTmplID",$param) and $param["ContentTmplID"] !== null) {
            $this->ContentTmplID = $param["ContentTmplID"];
        }

        if (array_key_exists("NoticeID",$param) and $param["NoticeID"] !== null) {
            $this->NoticeID = $param["NoticeID"];
        }
    }
}
