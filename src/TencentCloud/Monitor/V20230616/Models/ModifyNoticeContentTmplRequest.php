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
 * ModifyNoticeContentTmpl请求参数结构体
 *
 * @method string getTmplName() 获取模板名称
 * @method void setTmplName(string $TmplName) 设置模板名称
 * @method NoticeContentTmplItem getTmplContents() 获取模板内容
 * @method void setTmplContents(NoticeContentTmplItem $TmplContents) 设置模板内容
 * @method string getTmplID() 获取需要修改的模板ID
 * @method void setTmplID(string $TmplID) 设置需要修改的模板ID
 */
class ModifyNoticeContentTmplRequest extends AbstractModel
{
    /**
     * @var string 模板名称
     */
    public $TmplName;

    /**
     * @var NoticeContentTmplItem 模板内容
     */
    public $TmplContents;

    /**
     * @var string 需要修改的模板ID
     */
    public $TmplID;

    /**
     * @param string $TmplName 模板名称
     * @param NoticeContentTmplItem $TmplContents 模板内容
     * @param string $TmplID 需要修改的模板ID
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
        if (array_key_exists("TmplName",$param) and $param["TmplName"] !== null) {
            $this->TmplName = $param["TmplName"];
        }

        if (array_key_exists("TmplContents",$param) and $param["TmplContents"] !== null) {
            $this->TmplContents = new NoticeContentTmplItem();
            $this->TmplContents->deserialize($param["TmplContents"]);
        }

        if (array_key_exists("TmplID",$param) and $param["TmplID"] !== null) {
            $this->TmplID = $param["TmplID"];
        }
    }
}
