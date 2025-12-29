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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 沙盒信息内容
 *
 * @method string getUrl() 获取沙盒的URL地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置沙盒的URL地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDisplayUrl() 获取沙盒通过浏览器打开的URL地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDisplayUrl(string $DisplayUrl) 设置沙盒通过浏览器打开的URL地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getContent() 获取沙盒输出内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContent(string $Content) 设置沙盒输出内容
注意：此字段可能返回 null，表示取不到有效值。
 */
class SandboxContent extends AbstractModel
{
    /**
     * @var string 沙盒的URL地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var string 沙盒通过浏览器打开的URL地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DisplayUrl;

    /**
     * @var string 沙盒输出内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Content;

    /**
     * @param string $Url 沙盒的URL地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DisplayUrl 沙盒通过浏览器打开的URL地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Content 沙盒输出内容
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
        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("DisplayUrl",$param) and $param["DisplayUrl"] !== null) {
            $this->DisplayUrl = $param["DisplayUrl"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }
    }
}
