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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNoticeContent请求参数结构体
 *
 * @method string getNoticeContentId() 获取通知内容模板ID。-通过[获取通知内容模板](https://cloud.tencent.com/document/api/614/111714)获取通知内容模板ID
 * @method void setNoticeContentId(string $NoticeContentId) 设置通知内容模板ID。-通过[获取通知内容模板](https://cloud.tencent.com/document/api/614/111714)获取通知内容模板ID
 * @method string getName() 获取通知内容模板名称。
 * @method void setName(string $Name) 设置通知内容模板名称。
 * @method integer getType() 获取通知内容语言。

0：中文 1：英文
 * @method void setType(integer $Type) 设置通知内容语言。

0：中文 1：英文
 * @method array getNoticeContents() 获取通知内容模板详细信息。
 * @method void setNoticeContents(array $NoticeContents) 设置通知内容模板详细信息。
 */
class ModifyNoticeContentRequest extends AbstractModel
{
    /**
     * @var string 通知内容模板ID。-通过[获取通知内容模板](https://cloud.tencent.com/document/api/614/111714)获取通知内容模板ID
     */
    public $NoticeContentId;

    /**
     * @var string 通知内容模板名称。
     */
    public $Name;

    /**
     * @var integer 通知内容语言。

0：中文 1：英文
     */
    public $Type;

    /**
     * @var array 通知内容模板详细信息。
     */
    public $NoticeContents;

    /**
     * @param string $NoticeContentId 通知内容模板ID。-通过[获取通知内容模板](https://cloud.tencent.com/document/api/614/111714)获取通知内容模板ID
     * @param string $Name 通知内容模板名称。
     * @param integer $Type 通知内容语言。

0：中文 1：英文
     * @param array $NoticeContents 通知内容模板详细信息。
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
        if (array_key_exists("NoticeContentId",$param) and $param["NoticeContentId"] !== null) {
            $this->NoticeContentId = $param["NoticeContentId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("NoticeContents",$param) and $param["NoticeContents"] !== null) {
            $this->NoticeContents = [];
            foreach ($param["NoticeContents"] as $key => $value){
                $obj = new NoticeContent();
                $obj->deserialize($value);
                array_push($this->NoticeContents, $obj);
            }
        }
    }
}
