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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 向图库提交的图片数据类型。
 *
 * @method string getIndex() 获取<p>提交的图片顺序索引。</p>
 * @method void setIndex(string $Index) 设置<p>提交的图片顺序索引。</p>
 * @method string getUrl() 获取<p>图片地址。</p>
 * @method void setUrl(string $Url) 设置<p>图片地址。</p>
 * @method string getMd5() 获取<p>图片 md5 值。</p>
 * @method void setMd5(string $Md5) 设置<p>图片 md5 值。</p>
 * @method string getName() 获取<p>图片名称。</p>
 * @method void setName(string $Name) 设置<p>图片名称。</p>
 * @method string getLabel() 获取<p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
 * @method void setLabel(string $Label) 设置<p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
 */
class AuditImage extends AbstractModel
{
    /**
     * @var string <p>提交的图片顺序索引。</p>
     */
    public $Index;

    /**
     * @var string <p>图片地址。</p>
     */
    public $Url;

    /**
     * @var string <p>图片 md5 值。</p>
     */
    public $Md5;

    /**
     * @var string <p>图片名称。</p>
     */
    public $Name;

    /**
     * @var string <p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
     */
    public $Label;

    /**
     * @param string $Index <p>提交的图片顺序索引。</p>
     * @param string $Url <p>图片地址。</p>
     * @param string $Md5 <p>图片 md5 值。</p>
     * @param string $Name <p>图片名称。</p>
     * @param string $Label <p>违规类型。<br>可取值：Normal: 正常 ，Polity: 政治，Porn: 色情，Sexy：性感，Ad: 广告，Illegal: 违法，Abuse: 谩骂，Terror: 暴恐，Spam: 灌水，Moan:呻吟。</p>
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
        if (array_key_exists("Index",$param) and $param["Index"] !== null) {
            $this->Index = $param["Index"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Md5",$param) and $param["Md5"] !== null) {
            $this->Md5 = $param["Md5"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Label",$param) and $param["Label"] !== null) {
            $this->Label = $param["Label"];
        }
    }
}
