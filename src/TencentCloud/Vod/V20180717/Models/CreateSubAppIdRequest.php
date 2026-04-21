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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateSubAppId请求参数结构体
 *
 * @method string getName() 获取<p>应用名称，长度限制：40个字符。</p>
 * @method void setName(string $Name) 设置<p>应用名称，长度限制：40个字符。</p>
 * @method string getDescription() 获取<p>应用简介，长度限制： 300个字符。不填则应用简介默认为空。</p>
 * @method void setDescription(string $Description) 设置<p>应用简介，长度限制： 300个字符。不填则应用简介默认为空。</p>
 * @method string getType() 获取<p>应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。</p>
 * @method void setType(string $Type) 设置<p>应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。</p>
 * @method string getMode() 获取<p>此应用的模式，可选值为：</p><ul><li>fileid：仅FileID模式</li><li>fileid+path：FileID &amp; Path模式<br>留空时默认选择仅FileID模式</li></ul>
 * @method void setMode(string $Mode) 设置<p>此应用的模式，可选值为：</p><ul><li>fileid：仅FileID模式</li><li>fileid+path：FileID &amp; Path模式<br>留空时默认选择仅FileID模式</li></ul>
 * @method string getStorageRegion() 获取<p>Mode是仅fileid时，用于设置默认存储地域，可选。<br>Mode是fileid+path时，用于指定存储地域，必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/266/9760">已支持地域列表</a></p>
 * @method void setStorageRegion(string $StorageRegion) 设置<p>Mode是仅fileid时，用于设置默认存储地域，可选。<br>Mode是fileid+path时，用于指定存储地域，必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/266/9760">已支持地域列表</a></p>
 * @method array getTags() 获取<p>此应用需要绑定的tag</p>
 * @method void setTags(array $Tags) 设置<p>此应用需要绑定的tag</p>
 */
class CreateSubAppIdRequest extends AbstractModel
{
    /**
     * @var string <p>应用名称，长度限制：40个字符。</p>
     */
    public $Name;

    /**
     * @var string <p>应用简介，长度限制： 300个字符。不填则应用简介默认为空。</p>
     */
    public $Description;

    /**
     * @var string <p>应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。</p>
     */
    public $Type;

    /**
     * @var string <p>此应用的模式，可选值为：</p><ul><li>fileid：仅FileID模式</li><li>fileid+path：FileID &amp; Path模式<br>留空时默认选择仅FileID模式</li></ul>
     */
    public $Mode;

    /**
     * @var string <p>Mode是仅fileid时，用于设置默认存储地域，可选。<br>Mode是fileid+path时，用于指定存储地域，必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/266/9760">已支持地域列表</a></p>
     */
    public $StorageRegion;

    /**
     * @var array <p>此应用需要绑定的tag</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>应用名称，长度限制：40个字符。</p>
     * @param string $Description <p>应用简介，长度限制： 300个字符。不填则应用简介默认为空。</p>
     * @param string $Type <p>应用类型， 取值有：<li>AllInOne：一体化；</li><li>Professional：专业版。</li>默认值为 AllInOne。</p>
     * @param string $Mode <p>此应用的模式，可选值为：</p><ul><li>fileid：仅FileID模式</li><li>fileid+path：FileID &amp; Path模式<br>留空时默认选择仅FileID模式</li></ul>
     * @param string $StorageRegion <p>Mode是仅fileid时，用于设置默认存储地域，可选。<br>Mode是fileid+path时，用于指定存储地域，必填。</p><p>取值参考：<a href="https://cloud.tencent.com/document/product/266/9760">已支持地域列表</a></p>
     * @param array $Tags <p>此应用需要绑定的tag</p>
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

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("StorageRegion",$param) and $param["StorageRegion"] !== null) {
            $this->StorageRegion = $param["StorageRegion"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ResourceTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
