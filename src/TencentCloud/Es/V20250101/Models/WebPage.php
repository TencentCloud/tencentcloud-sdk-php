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
namespace TencentCloud\Es\V20250101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 网页搜索结果
 *
 * @method string getTitle() 获取标题
 * @method void setTitle(string $Title) 设置标题
 * @method string getUrl() 获取url
 * @method void setUrl(string $Url) 设置url
 * @method string getSummary() 获取网页摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSummary(string $Summary) 设置网页摘要
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTime() 获取网页收录时间。可能为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTime(string $Time) 设置网页收录时间。可能为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取Markdown 格式的网页正文
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置Markdown 格式的网页正文
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebPage extends AbstractModel
{
    /**
     * @var string 标题
     */
    public $Title;

    /**
     * @var string url
     */
    public $Url;

    /**
     * @var string 网页摘要
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Summary;

    /**
     * @var string 网页收录时间。可能为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Time;

    /**
     * @var string Markdown 格式的网页正文
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param string $Title 标题
     * @param string $Url url
     * @param string $Summary 网页摘要
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Time 网页收录时间。可能为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content Markdown 格式的网页正文
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("Time",$param) and $param["Time"] !== null) {
            $this->Time = $param["Time"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
