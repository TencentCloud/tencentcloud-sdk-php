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
namespace TencentCloud\Ig\V20210518\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引用资料信息
 *
 * @method string getTitle() 获取资料标题
 * @method void setTitle(string $Title) 设置资料标题
 * @method string getType() 获取资料来源类型，1:问答库，2:文档，3:医典百科，4:临床指南，5:药品说明书
 * @method void setType(string $Type) 设置资料来源类型，1:问答库，2:文档，3:医典百科，4:临床指南，5:药品说明书
 * @method string getUrl() 获取资料详情链接
 * @method void setUrl(string $Url) 设置资料详情链接
 */
class ReferResourceInfo extends AbstractModel
{
    /**
     * @var string 资料标题
     */
    public $Title;

    /**
     * @var string 资料来源类型，1:问答库，2:文档，3:医典百科，4:临床指南，5:药品说明书
     */
    public $Type;

    /**
     * @var string 资料详情链接
     */
    public $Url;

    /**
     * @param string $Title 资料标题
     * @param string $Type 资料来源类型，1:问答库，2:文档，3:医典百科，4:临床指南，5:药品说明书
     * @param string $Url 资料详情链接
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
