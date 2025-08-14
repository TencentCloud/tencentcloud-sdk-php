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
 * CreateNoticeContent请求参数结构体
 *
 * @method string getName() 获取模板名称。最大支持255个字节
 * @method void setName(string $Name) 设置模板名称。最大支持255个字节
 * @method integer getType() 获取模板内容语言。0：中文1：英文
 * @method void setType(integer $Type) 设置模板内容语言。0：中文1：英文
 * @method array getNoticeContents() 获取模板详细配置。
 * @method void setNoticeContents(array $NoticeContents) 设置模板详细配置。
 */
class CreateNoticeContentRequest extends AbstractModel
{
    /**
     * @var string 模板名称。最大支持255个字节
     */
    public $Name;

    /**
     * @var integer 模板内容语言。0：中文1：英文
     */
    public $Type;

    /**
     * @var array 模板详细配置。
     */
    public $NoticeContents;

    /**
     * @param string $Name 模板名称。最大支持255个字节
     * @param integer $Type 模板内容语言。0：中文1：英文
     * @param array $NoticeContents 模板详细配置。
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
